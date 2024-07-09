<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Belge üzerinde yer alan vergi türü, muafiyet ve istisnalara ilişkin bilgiler girilir.
 * @property string $Name
 * @property string $TaxExemptionReasonCode
 * @property string $TaxExemptionReason
 * @property TaxScheme $TaxScheme
 */
class TaxCategory extends AbstractComplexType
{
    /**
     * Vergi türü ismi girilebilecektir.
     */
    public function setName(?string $Name)
    {
        $this->values['Name'] = $Name;
        return $this;
    }

    /**
     * Vergi muafiyet, istisna sebepleri bu alana kodlu olarak girilecektir.
     */
    public function setTaxExemptionReasonCode(?string $TaxExemptionReasonCode)
    {
        $this->values['TaxExemptionReasonCode'] = $TaxExemptionReasonCode;
        return $this;
    }

    /**
     * Vergi muafiyet, istisna sebepleri bu alana serbest metin olarak girilecektir.
     */
    public function setTaxExemptionReason(?string $TaxExemptionReason)
    {
        $this->values['TaxExemptionReason'] = $TaxExemptionReason;
        return $this;
    }

    /**
     * Uygulanan vergi türü hakkında bilgiler girilir.
     */
    public function setTaxScheme(?TaxScheme $TaxScheme)
    {
        $this->values['TaxScheme'] = $TaxScheme;
        return $this;
    }

}