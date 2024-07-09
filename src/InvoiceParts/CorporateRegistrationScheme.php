<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Kurumun kayıtlı olduğu organizasyon hakkında bilgileri tutar. Örneğin sanayi odası veya ticaret odası.
 * @property string $ID
 * @property string $Name
 * @property string $CorporateRegistrationTypeCode
 * @property JurisdictionRegionAddress $JuridictionRegionAddress
 */
class CorporateRegistrationScheme extends AbstractComplexType
{
    /**
     * Kayıt yeri numarası girilebilir.
     */

    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }


    /**
     * Kayıt yeri ismi girilebilir.
     */

    public function setName(?string $Name)
    {
        $this->values['Name'] = $Name;
        return $this;
    }


    /**
     * Kayıt yeri tipi girilebilir
     */

    public function setCorporateRegistrationTypeCode(?string $CorporateRegistrationTypeCode)
    {
        $this->values['CorporateRegistrationTypeCode'] = $CorporateRegistrationTypeCode;
        return $this;
    }


    /**
     * Kayıt yeri adresi girilebilir.
     */

    public function setJuridictionRegionAddress(?JurisdictionRegionAddress $JuridictionRegionAddress)
    {
        $this->values['JuridictionRegionAddress'] = $JuridictionRegionAddress;
        return $this;
    }

}