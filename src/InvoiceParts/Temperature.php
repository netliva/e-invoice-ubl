<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Sıcaklık bilgisi girilir.
 * @property string $AttributeID
 * @property array $Measure
 * @property string $Description
 */
class Temperature extends AbstractComplexType
{
    /**
     * Sıcaklık nitelik numarası girilir.
     */
    public function setAttributeID(?string $AttributeID)
    {
        $this->values['AttributeID'] = $AttributeID;
        return $this;
    }

    /**
     * Ölçüm girilir.
     * [val => "string", attrs=> [unitCode=>"CEL"] ]
     */
    public function setMeasure(?array $Measure)
    {
        $this->values['Measure'] = $Measure;
        return $this;
    }

    /**
     * Açıklama girilir
     */
    public function setDescription(?string $Description)
    {
        $this->values['Description'] = $Description;
        return $this;
    }
}