<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;
use Netliva\eInvoiceUBL\Abstracts\AbstractValueWithAttr;

/**
 * Vergi ve diğer yasal yükümlülüklerin hesaplaması ile ilgili bilgiler ile belge
 * üzerinde hesaplanan toplam vergi ve yasal yükümlülük tutarı girilecektir.
 * @property AbstractValueWithAttr $TaxAmount
 * @property TaxSubtotal[] $TaxSubtotal
 */
class TaxTotal extends AbstractComplexType
{

    /**
     * Hesaplanan vergilerin toplam tutarı girilir.
     */
    public function setTaxAmount(?AbstractValueWithAttr $TaxAmount)
    {
        $this->values['TaxAmount'] = $TaxAmount;
        return $this;
    }

    /**
     * Vergi hesaplaması ile ilgili bilgilere yer verilir.
     */
    public function setTaxSubtotal(?array $TaxSubtotal)
    {
        $this->values['TaxSubtotal'] = $TaxSubtotal;
        return $this;
    }
}