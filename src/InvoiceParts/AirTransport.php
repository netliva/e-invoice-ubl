<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Hava taşımacılığında kullanılan hava aracının numarasını tanımlamak için kullanılır
 * @property string AircraftID
 *
 */
class AirTransport extends AbstractComplexType
{
    /**
     * Havayolu araç kodu
     */
    public function setAircraftID(?string $AircraftID)
    {
        $this->values['AircraftID'] = $AircraftID;
        return $this;
    }

}