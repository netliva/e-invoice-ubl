<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Şahısla ilgili bilgiler girilecektir.
 * @property string $FirstName
 * @property string $FamilyName
 * @property string $Title
 * @property string $MiddleName
 * @property string $NameSuffix
 * @property string $NationalityID
 * @property FinancialAccount $FinancialAccount
 * @property IdentityDocumentReference $IdentityDocumentReference
 */
class Person extends AbstractComplexType
{
    /**
     * Şahsın ilk adı girilecektir.
     */
    public function setFirstName(?string $FirstName)
    {
        $this->values['FirstName'] = $FirstName;
        return $this;
    }

    /**
     * Şahsın soyadı girilecektir.
     */
    public function setFamilyName(?string $FamilyName)
    {
        $this->values['FamilyName'] = $FamilyName;
        return $this;
    }

    /**
     * Şahsın ünvanı girilecektir.
     */
    public function setTitle(?string $Title)
    {
        $this->values['Title'] = $Title;
        return $this;
    }

    /**
     * Şahsın diğer isimleri yazılacaktır.
     */
    public function setMiddleName(?string $MiddleName)
    {
        $this->values['MiddleName'] = $MiddleName;
        return $this;
    }

    /**
     * Şahsın adının ön eki varsa bu alana girilecektir.
     */
    public function setNameSuffix(?string $NameSuffix)
    {
        $this->values['NameSuffix'] = $NameSuffix;
        return $this;
    }

    /**
     * Şahsın milliyeti girilecektir.
     */
    public function setNationalityID(?string $NationalityID)
    {
        $this->values['NationalityID'] = $NationalityID;
        return $this;
    }

    /**
     * Şahsın hesap bilgileri girilecektir.
     */
    public function setFinancialAccount(?FinancialAccount $FinancialAccount)
    {
        $this->values['FinancialAccount'] = $FinancialAccount;
        return $this;
    }

    /**
     * Şahsın kimlik dokümanına (Örneğin pasaport numarası buraya yazılacaktır) referans girilebilecektir.
     */
    public function setIdentityDocumentReference(?IdentityDocumentReference $IdentityDocumentReference)
    {
        $this->values['IdentityDocumentReference'] = $IdentityDocumentReference;
        return $this;
    }

}