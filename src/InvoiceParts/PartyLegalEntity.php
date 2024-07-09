<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Tarafın sicil bilgilerini veya merkez bilgilerini içerir.
 * @property string $RegistrationName
 * @property string $CompanyID
 * @property string $RegistrationDate
 * @property bool $SolePrioprietorshipIndicator
 * @property array $CorporateStockAmount
 * @property bool $FullyPaidSharesIndicator
 * @property CorporateRegistrationScheme $CorporateRegistrationScheme
 * @property HeadOfficeParty $HeadOfficeParty
 */
class PartyLegalEntity extends AbstractComplexType
{
    /**
     * Kayıt ismi girilir.
     */
    public function setRegistrationName(?string $RegistrationName)
    {
        $this->values['RegistrationName'] = $RegistrationName;
        return $this;
    }

    /**
     * Kayıt numarası girilir.
     */
    public function setCompanyID(?string $CompanyID)
    {
        $this->values['CompanyID'] = $CompanyID;
        return $this;
    }

    /**
     * Kayıt tarihi girilir.
     */
    public function setRegistrationDate(?string $RegistrationDate)
    {
        $this->values['RegistrationDate'] = $RegistrationDate;
        return $this;
    }

    /**
     * Tek bir kişiye ait olup olmadığını belirtir.
     */
    public function setSolePrioprietorshipIndicator(?bool $SolePrioprietorshipIndicator)
    {
        $this->values['SolePrioprietorshipIndicator'] = $SolePrioprietorshipIndicator;
        return $this;
    }

    /**
     * Ödenmiş sermaye bilgisi girilir.
     * [val => "string", attrs=> [] ]
     */
    public function setCorporateStockAmount(?array $CorporateStockAmount)
    {
        $this->values['CorporateStockAmount'] = $CorporateStockAmount;
        return $this;
    }

    /**
     * Şirketin halka açık olup olmadığının göstergesi girilebilir.
     */
    public function setFullyPaidSharesIndicator(?bool $FullyPaidSharesIndicator)
    {
        $this->values['FullyPaidSharesIndicator'] = $FullyPaidSharesIndicator;
        return $this;
    }

    /**
     * Kayıtlı olduğu yerin bilgilerini içerir.
     */
    public function setCorporateRegistrationScheme(?CorporateRegistrationScheme $CorporateRegistrationScheme)
    {
        $this->values['CorporateRegistrationScheme'] = $CorporateRegistrationScheme;
        return $this;
    }

    /**
     *  Merkez bilgilerini içerir.
     */
    public function setHeadOfficeParty(?HeadOfficeParty $HeadOfficeParty)
    {
        $this->values['HeadOfficeParty'] = $HeadOfficeParty;
        return $this;
    }
}