<?php
namespace Netliva\eInvoiceUBL\Abstracts;

use Netliva\eInvoiceUBL\Abstracts\Helper\Reflection;
use ReflectionClass;
use ReflectionMethod;
use ReflectionNamedType;

abstract class AbstractComplexType
{

    /**
     * Holds the data as a key => value array
     *
     * @var array
     */
    protected $values = [];

    /**
     * The name of the extended class/data type
     *
     * @var string
     */
    protected $name;

    /**
     * Constructor
     *
     * @param array|null $options Data as key => value array
     */
    public function __construct(array $options = null)
    {
        $this->name = explode('\\', get_called_class());
        $this->name = array_pop($this->name);

        if (is_array($options)) {
            foreach ($options as $name => $value) {
                $this->$name = $value;
            }
        }
    }


    // sınıf klonlanırsa, value içindeki tüm klonlanabilir değerleri klonla
    public function __clone ()
    {
        foreach ($this->values as $key => $value)
        {
            if (is_object($value))
            {
                if (method_exists($value, "__clone"))
                {
                    $this->values[$key] = clone $value;
                }
            }
            else if (is_array($value))
            {
                $this->values[$key] = array_map(function($element) {
                    if (is_object($element) && method_exists($element, "__clone"))
                    {
                        return clone $element;
                    }
                    else
                    {
                        return $element;
                    }
                }, $value);
            }
        }
    }

    
    /**
     * __set implementation
     *
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $setValueMethod = "set{$name}";
        if (method_exists($this, $setValueMethod)) {
            $this->$setValueMethod($value);
        }
        else
        {
            $this->values[$name] = $value;
        }
    }

    /**
     * __get implementation
     *
     * @param $name
     * @return mixed|null
     */
    public function &__get($name)
    {
        if (isset($this->values[$name])) {
            return $this->values[$name];
        }

        $setterMethodName = "set{$name}";
        $reflectionClass = new ReflectionClass($this);

        if ($reflectionClass->hasMethod($setterMethodName)) {
            $reflectionNamedType = $reflectionClass->getMethod($setterMethodName)->getParameters()[0]->getType();
            /* @var $reflectionNamedType ReflectionNamedType */

            if ($reflectionNamedType !== NULL) {
                $parameterClassName = $reflectionNamedType->getName();

                if (class_exists($parameterClassName)) {
                    $this->$setterMethodName(new $parameterClassName);
                    return $this->values[$name];
                }
            }
        }

        $null = null;

        return $null;
    }

    /**
     * __isset implementation
     *
     * @param $name
     * @return bool
     */
    public function __isset($name)
    {
        return null !== $this->__get($name);
    }

    /**
     * Recursive algorithm to convert complex types to an array
     *
     * @param array $arrayValues
     * @return array
     */
    protected function convertToArray($arrayValues)
    {
        $returnArray = [];

        foreach ($arrayValues as $key => $value) {
            if ($value instanceof self) {
                $returnArray[$key] = $value->toArray();
            } else if (is_array($value)) {
                $returnArray[$key] = $this->convertToArray($value);
            } else {
                $returnArray[$key] = $value;
            }
        }

        return $returnArray;
    }

    /**
     * Returns the complex type as an array
     *
     * @param boolean $renderTopKey
     * @return array
     */
    public function toArray($renderTopKey = false)
    {
        $returnArray = $this->convertToArray($this->values);

        if ($renderTopKey) {
            return array($this->name => $returnArray);
        } else {
            return $returnArray;
        }
    }

    /**
     * Populates this class and children using provided $stdClass
     * Use this method to populate a response from the \SoapClient
     *
     * @param \stdClass $stdClass
     */
    public function populateFromStdClass(\stdClass $stdClass)
    {
        $reflectionClass = new ReflectionClass($this);

        $setterMethods = array_filter($reflectionClass->getMethods(ReflectionMethod::IS_PUBLIC), function ($reflectionMethod) {
            return (preg_match('/^set.*$/', $reflectionMethod->name));
        });

        foreach ($setterMethods as $reflectionMethod) {
            /* @var $reflectionMethod ReflectionMethod */
            $methodName = $reflectionMethod->name;
            $stdPropertyName = str_replace('set', '', $methodName);
            $parameterValue = null;
            $reflectionParameter = $reflectionMethod->getParameters()[0];
            $reflectionParameterType = $reflectionParameter->getType();

            if ($reflectionParameterType instanceof ReflectionNamedType) {
                if ($reflectionParameterType->getName() === 'array') {
                    // array
                    $arrayType = Reflection::getAbstractClassSetterMethodArrayType($reflectionParameter);
                    if (!Reflection::isClassNameSimpleType($arrayType)) {
                        if (isset($stdClass->$stdPropertyName)) {
                            $parameterValue = [];
                            if (is_array($stdClass->$stdPropertyName)) {
                                foreach ($stdClass->$stdPropertyName as $property) {
                                    $class = new $arrayType;
                                    $parameterValue[] = $class;
                                    $class->populateFromStdClass($property);
                                }
                            } else {
                                $class = new $arrayType;
                                $parameterValue[] = $class;
                                $class->populateFromStdClass($stdClass->$stdPropertyName);
                            }
                        }
                    }
                } elseif (!$reflectionParameterType->isBuiltin()) {
                    //class
                    $classPropertyName = $reflectionParameterType->getName();
                    $parameterValue = new $classPropertyName();
                    if (isset($stdClass->$stdPropertyName)) {
                        $parameterValue->populateFromStdClass($stdClass->$stdPropertyName);
                    }
                }
            } else {
                // is scalar type
                if (isset($stdClass->$stdPropertyName)) {
                    $parameterValue = $stdClass->$stdPropertyName;
                }
            }

            if (isset($parameterValue, $stdClass->$stdPropertyName)) {
                $this->$methodName($parameterValue);
            }
        }
    }
}
