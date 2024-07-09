<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * İstif yeri bilgisi girilir.
 * @property string $LocationID
 * @property Location $Location
 * @property MeasurementDimension $MeasurementDimension
 */
class Stowage extends AbstractComplexType
{
    /**
     * İstif yeri mekan numarası girilir.
     */
    public function setLocationID(?string $LocationID)
    {
        $this->values['LocationID'] = $LocationID;
        return $this;
    }

    /**
     * Mekan bilgisi detaylı olarak girilir.
     */
    public function setLocation(?Location $Location)
    {
        $this->values['Location'] = $Location;
        return $this;
    }

    /**
     * İstif yeri ölçüleri girilir.
     */
    public function setMeasurementDimension(?MeasurementDimension $MeasurementDimension)
    {
        $this->values['MeasurementDimension'] = $MeasurementDimension;
        return $this;
    }
}