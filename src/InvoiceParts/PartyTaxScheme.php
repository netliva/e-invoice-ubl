<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Bu eleman aracılığıyla Tarafın(Party) vergi dairesi ile ilgili bilgiler verilir
 * @property string $RegistrationName
 * @property string $CompanyID
 * @property TaxScheme $TaxScheme
 */
class PartyTaxScheme extends AbstractComplexType
{
    /**
     * İhracat faturasında ilgili ülkedeki kurumun resmi ünvanı yazılır.
     */
    public function setRegistrationName(?string $RegistrationName)
    {
        $this->values['RegistrationName'] = $RegistrationName;
        return $this;
    }

    /**
     * İhracat faturasında ilgili ülkedeki kurumun vergi kayıt kodu yazılır.
     */
    public function setCompanyID(?string $CompanyID)
    {
        $this->values['CompanyID'] = $CompanyID;
        return $this;
    }

    /**
     * Vergi Dairesi adı
     */
    public function setTaxScheme(?TaxScheme $TaxScheme)
    {
        $this->values['TaxScheme'] = $TaxScheme;
        return $this;
    }
}