<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Ülke bilgisi girilecektir.
 * @property string $IdentificationCode
 * @property string $Name
 */
class Country extends AbstractComplexType
{
    /**
     * “IdentificationCode” elemanı ülkeleri tanımlamak için kullanılan kodlu elemandır.
     * Bu eleman değer kümesini ISO 3166-1-alpha-2 Ülke Kodları listesinden almalıdır.
     */

    public function setIdentificationCode(?string $IdentificationCode)
    {
        $this->values['IdentificationCode'] = $IdentificationCode;
        return $this;
    }


    /**
     * Ülkeleri tanımlamak için kullanılan metin elemanıdır.
     */

    public function setName(?string $Name)
    {
        $this->values['Name'] = $Name;
        return $this;
    }

}