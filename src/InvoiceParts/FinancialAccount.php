<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Hesap bilgilerinin tutulduğu bölümdür.
 * @property string $ID
 * @property string $CurrencyCode
 * @property string $PaymentNote
 * @property FinancialInstitutionBranch $FinancialInstitutionBranch
 */
class FinancialAccount extends AbstractComplexType
{
    /**
     * Hesap numarası metin olarak girilir.
     */
    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

    /**
     * Hesabın para birimi kodu girilir.
     */
    public function setCurrencyCode(?string $CurrencyCode)
    {
        $this->values['CurrencyCode'] = $CurrencyCode;
        return $this;
    }

    /**
     * Ödeme ile ilgili açıklama serbest metin olarak girilir.
     */
    public function setPaymentNote(?string $PaymentNote)
    {
        $this->values['PaymentNote'] = $PaymentNote;
        return $this;
    }

    /**
     * Hesabın bulunduğu banka ve şube bilgileri girilebilir.
     */
    public function setFinancialInstitutionBranch(?FinancialInstitutionBranch $FinancialInstitutionBranch)
    {
        $this->values['FinancialInstitutionBranch'] = $FinancialInstitutionBranch;
        return $this;
    }

}