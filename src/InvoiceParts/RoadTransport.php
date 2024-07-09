<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Karayolu taşımacılığında kullanılan araç bilgisini içerir
 * @property string $LicensePlateID
 */
class RoadTransport extends AbstractComplexType
{
    /**
     *  Plaka numarası girilir.
     */
    public function setLicensePlateID(?string $LicensePlateID)
    {
        $this->values['LicensePlateID'] = $LicensePlateID;
        return $this;
    }
}