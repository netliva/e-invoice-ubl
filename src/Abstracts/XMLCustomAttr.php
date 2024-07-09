<?php
namespace Netliva\eInvoiceUBL\Abstracts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * @property array $schemaID
 * @property string $Value
 */
class XMLCustomAttr extends AbstractComplexType
{
    /**
     * XML Attribute'leri
     */
    public function setschemaID(array $schemaID)
    {
        $this->values['schemaID'] = $schemaID;
        return $this;
    }

    /**
     * XML Değeri
     */
    public function setValue(string $Value)
    {
        $this->values['Value'] = $Value;
        return $this;
    }
}