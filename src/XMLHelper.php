<?php

namespace Netliva\eInvoiceUBL;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

class XMLHelper
{
    private AbstractComplexType $object;

    private $namespaces = [
        'xmlns' => 'urn:oasis:names:specification:ubl:schema:xsd:ApplicationResponse-2',
        'xmlns:cac' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2',
        'xmlns:cbc' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2',
        'xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
        'xmlns:ext' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2',
        'xmlns:ns8' => 'urn:oasis:names:specification:ubl:schema:xsd:ApplicationResponse-2',
        'xmlns:xades' => 'http://uri.etsi.org/01903/v1.3.2#',
        'xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema-instance',
        'xsi:schemaLocation' => 'urn:oasis:names:specification:ubl:schema:xsd:Invoice-2 UBL-Invoice-2.1.xsd',
    ];

    private $despatchAdviceNamespaces = [
        'xmlns:ubltr' => 'urn:oasis:names:specification:ubl:schema:xsd:TurkishCustomizationExtensionComponents',
        'xmlns:qdt' => 'urn:oasis:names:specification:ubl:schema:xsd:QualifiedDatatypes-2',
        'xmlns:cbc' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2',
        'xmlns:cac' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2',
        'xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
        'xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema-instance',
        'xmlns:ccts' => 'urn:un:unece:uncefact:documentation:2',
        'xmlns:ext' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2',
        'xmlns:xades' => 'http://uri.etsi.org/01903/v1.3.2#',
        'xmlns:udt' => 'urn:un:unece:uncefact:data:specification:UnqualifiedDataTypesSchemaModule:2',
        'xmlns' => 'urn:oasis:names:specification:ubl:schema:xsd:ApplicationResponse-2',
        'xmlns:q1' => 'urn:oasis:names:specification:ubl:schema:xsd:DespatchAdvice-2',
    ];

    public function __construct(AbstractComplexType $object)
    {
        $this->object = $object;
    }

    private function makeXml($data, &$xml, $deep = 1)
    {
        foreach ($data as $key => $val) {
            if (is_array($val))
            {
                if (is_numeric(current(array_keys($val))))
                {
                    foreach ($val as $v)
                    {
                        if (is_array($v) && !is_numeric(current(array_keys($v))))
                        {
                            $xml .= str_repeat("\t", $deep).'<cac:'.$key.'>'."\n";
                            $this->makeXml($v, $xml, $deep+1);
                            $xml .= str_repeat("\t", $deep).'</cac:'.$key.'>'."\n";
                        }
                        else
                        {
                            $xml .= str_repeat("\t", $deep).'<cbc:'.$key.'>'.$v.'</cbc:'.$key.'>'."\n";
                        }
                    }
                }
                else if(key_exists('value', $val))
                {
                    $attrs = [];
                    if (key_exists('attrs', $val))
                    {
                        foreach ($val['attrs'] as $attrKey=>$attrVal)
                        {
                            $attrs[] = $attrKey.'="'.$attrVal.'"';
                        }
                    }
                    $xml .= str_repeat("\t", $deep).'<cbc:'.$key.' '.implode(' ', $attrs).'>'.$val['value'].'</cbc:'.$key.'>'."\n";
                }
                else
                {
                    $xml .= str_repeat("\t", $deep).'<cac:'.$key.'>'."\n";
                    $this->makeXml($val, $xml, $deep+1);
                    $xml .= str_repeat("\t", $deep).'</cac:'.$key.'>'."\n";
                }
            }
            elseif (!is_null($val))
            {
                if (is_bool($val))
                    $xml .= str_repeat("\t", $deep).'<cbc:'.$key.'>'.($val?'true':'false').'</cbc:'.$key.'>'."\n";
                else if ($val === '')
                    $xml .= str_repeat("\t", $deep).'<cbc:'.$key.' />'."\n";
                else
                    $xml .= str_repeat("\t", $deep).'<cbc:'.$key.'>'.$val.'</cbc:'.$key.'>'."\n";
            }
        }

    }

    private function makeXmlOld(AbstractComplexType $object, &$xml)
    {
        $data = get_object_vars($object);

        foreach ($data as $key => $val)
        {
            if (is_object($val))
            {
                $xml .= '<cac:'.$key.'>';
                $this->makeXml($val, $xml);
                $xml .= '</cac:'.$key.'>';
            }
            else
            {
                if (is_array($val))
                {
                    if (isset($val['val']))
                    {
                        $xml .= '<cbc:'.$key.' '.implode(' ', $val['attrs']).'>'.$val['val'].'</cbc:'.$key.'>';
                    }
                    else
                    {
                        foreach ($val as $v)
                        {
                            if (is_object($v))
                            {
                                $xml .= '<cac:'.$key.'>';
                                $this->makeXml($v, $xml);
                                $xml .= '</cac:'.$key.'>';
                            }
                            else
                            {
                                $xml .= '<cbc:'.$key.'>'.$v.'</cbc:'.$key.'>';
                            }
                        }
                    }
                }
                else
                {
                    if (! is_null($val))
                    {
                        if ($val === '')
                        {
                            $xml .= '<cbc:'.$key.' />';
                        }
                        else
                        {
                            $xml .= '<cbc:'.$key.'>'.$val.'</cbc:'.$key.'>';
                        }
                    }
                }
            }
        }

    }

    private function makeNamespaces()
    {
        $ns = [];
        foreach ($this->namespaces as $key => $val) {
            $ns[] = $key.'="'.$val.'"';
        }
        return $ns;
    }

    public function getApplicationResponseXML()
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
        $xml .= '<ApplicationResponse '.implode(' ', $this->makeNamespaces()).'>'."\n";
        $this->makeXml($this->object, $xml);
        $xml .= '</ApplicationResponse>';

        return $xml;
    }

    public function getInvoiceResponseXML()
    {
        // dump($this->object->toArray());

        $this->namespaces['xmlns'] = 'urn:oasis:names:specification:ubl:schema:xsd:Invoice-2';
        $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
        $xml .= '<Invoice '.implode(' ', $this->makeNamespaces()).'>'."\n\t";
        /*
        $xml .= '<ext:UBLExtensions>
        <ext:UBLExtension>
            <ext:ExtensionContent>
                <ds:Signature>
                    <ds:SignedInfo>
                        <ds:CanonicalizationMethod Algorithm=""/>
                        <ds:SignatureMethod Algorithm=""/>
                        <ds:Reference URI="">
                            <ds:Transforms>
                                <ds:Transform Algorithm=""/>
                            </ds:Transforms>
                            <ds:DigestMethod Algorithm=""/>
                            <ds:DigestValue/>
                        </ds:Reference>
                    </ds:SignedInfo>
                    <ds:SignatureValue/>
                    <ds:KeyInfo>
                        <ds:X509Data>
                        </ds:X509Data>
                        <ds:KeyValue>
                        </ds:KeyValue>
                    </ds:KeyInfo>
                    <ds:Object/>
                </ds:Signature>
            </ext:ExtensionContent>
        </ext:UBLExtension>
    </ext:UBLExtensions>'."\n";
        */
        $this->makeXml($this->object->toArray(), $xml);
        $xml .= '</Invoice>';

        return $xml;
    }

    public function getDespatchAdviceResponseXML(): string
    {
        $this->despatchAdviceNamespaces['xmlns'] = 'urn:oasis:names:specification:ubl:schema:xsd:Invoice-2';
        $this->namespaces = $this->despatchAdviceNamespaces;

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<q1:DespatchAdvice '.implode(' ', $this->makeNamespaces()).'>';
        /*
        $xml .=
        '<ext:UBLExtensions>'.
            '<ext:UBLExtension>'.
                '<ext:ExtensionContent>'.
                    '<ds:Signature>'.
                        '<ds:SignedInfo>'.
                            '<ds:CanonicalizationMethod Algorithm=""/>'.
                            '<ds:SignatureMethod Algorithm=""/>'.
                            '<ds:Reference>'.
                                '<ds:DigestMethod Algorithm=""/>'.
                                '<ds:DigestValue/>'.
                            '</ds:Reference>'.
                        '</ds:SignedInfo>'.
                        '<ds:SignatureValue/>'.
                    '</ds:Signature>'.
                '</ext:ExtensionContent>'.
            '</ext:UBLExtension>'.
        '</ext:UBLExtensions>';
        */
        $this->makeXml($this->object->toArray(), $xml);
        $xml .= '</q1:DespatchAdvice>';

        return $xml;
    }

    public static function createGUID()
    {
        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid(), '{}');
        }

        // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);

        // Set version to 0100
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        // Set bits 6-7 to 10
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        // Output the 36 character UUID.
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));

    }
}
