<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Mekan bilgisi girilir.
 * @property string $ID
 * @property Address $Address
 */
class Location extends AbstractComplexType
{
    /**
     * Mekanı tanımlamak için kullanılır (örneğin GLN numarası)
     */
    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

    /**
     * Addres bilgisini tutar.
     */
    public function setAddress(?Address $Address)
    {
        $this->values['Address'] = $Address;
        return $this;
    }
}