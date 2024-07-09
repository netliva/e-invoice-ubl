<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Boyut bilgileri girilir
 * @property string $AttributeID
 * @property array $Measure
 * @property string $Description
 * @property array $MinimumMeasure
 * @property array $MaximumMeasure
 */
class Dimension extends AbstractComplexType
{
    /**
     * Hangi özelliğin ölçüldüğü girilir.
     */
    public function setAttributeID(?string $AttributeID)
    {
        $this->values['AttributeID'] = $AttributeID;
        return $this;
    }

    /**
     * Ölçüm girilir.
     * [val => "string", attrs=> [unitCode=>"MTR"] ]
     */
    public function setMeasure(?array $Measure)
    {
        $this->values['Measure'] = $Measure;
        return $this;
    }

    /**
     * Açıklama girilir.
     */
    public function setDescription(?string $Description)
    {
        $this->values['Description'] = $Description;
        return $this;
    }

    /**
     * Minimum ölçüm girilir.
     * [val => "string", attrs=> [unitCode=>"MTR"] ]
     */
    public function setMinimumMeasure(?array $MinimumMeasure)
    {
        $this->values['MinimumMeasure'] = $MinimumMeasure;
        return $this;
    }

    /**
     * Maximum ölçüm girilir.
     * [val => "string", attrs=> [unitCode=>"MTR"] ]
     */
    public function setMaximumMeasure(?array $MaximumMeasure)
    {
        $this->values['MaximumMeasure'] = $MaximumMeasure;
        return $this;
    }

}