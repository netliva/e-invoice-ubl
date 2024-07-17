<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;
use Netliva\eInvoiceUBL\Abstracts\AbstractFloatWithAttr;
use Netliva\eInvoiceUBL\Abstracts\AbstractValueWithAttr;

/**
 * Vergi ve diğer yasal yükümlülüklerin hesaplaması ile ilgili bilgilere yer verilecektir
 * @property AbstractFloatWithAttr $TaxableAmount
 * @property AbstractFloatWithAttr $TaxAmount
 * @property int $CalculationSequenceNumeric
 * @property AbstractFloatWithAttr $TransactionCurrencyTaxAmount
 * @property int $Percent
 * @property AbstractFloatWithAttr $BaseUnitMeasure
 * @property AbstractFloatWithAttr $PerUnitAmount
 * @property TaxCategory $TaxCategory
 */
class TaxSubtotal extends AbstractComplexType
{
    protected $values = [
        'TaxableAmount'                => null,
        'TaxAmount'                    => null,
        'CalculationSequenceNumeric'   => null,
        'TransactionCurrencyTaxAmount' => null,
        'Percent'                      => null,
        'BaseUnitMeasure'              => null,
        'PerUnitAmount'                => null,
        'TaxCategory'                  => null,
    ];


    /**
     * Verginin üzerinden hesaplandığı tutar (matrah) bilgisi girilecektir.
     * [val => "string", attrs=> [currencyID=>"TRY"] ]
     */
    public function setTaxableAmount(?AbstractValueWithAttr $TaxableAmount)
    {
        $this->values['TaxableAmount'] = $TaxableAmount;
        return $this;
    }

    /**
     * Hesaplanan Vergi Tutarıdır.
     * [val => "string", attrs=> [currencyID=>"TRY"] ]
     */
    public function setTaxAmount(?AbstractValueWithAttr $TaxAmount)
    {
        $this->values['TaxAmount'] = $TaxAmount;
        return $this;
    }

    /**
     * Vergi hesaplamasında belli bir sıra izlenmesi veya birden fazla vergi hesaplaması yapılması halinde ilgili sıra numarası girilecektir.
     */
    public function setCalculationSequenceNumeric(?int $CalculationSequenceNumeric)
    {
        $this->values['CalculationSequenceNumeric'] = $CalculationSequenceNumeric;
        return $this;
    }

    /**
     * Belge para birimi cinsinden toplam vergi tutarıdır.
     * [val => "string", attrs=> [currencyID=>"TRY"] ]
     */
    public function setTransactionCurrencyTaxAmount(?AbstractValueWithAttr $TransactionCurrencyTaxAmount)
    {
        $this->values['TransactionCurrencyTaxAmount'] = $TransactionCurrencyTaxAmount;
        return $this;
    }

    /**
     * Vergi oranı girilebilecektir.
     */
    public function setPercent(?int $Percent)
    {
        $this->values['Percent'] = $Percent;
        return $this;
    }

    /**
     * Vergileme ölçüsü olarak miktar(kilogram,  metre vb.) kullanılması halinde ilgili tarife bilgileri bu elemana girilecektir.
     * [val => "string", attrs=> [currencyID=>"TRY"] ]
     */
    public function setBaseUnitMeasure(?AbstractValueWithAttr $BaseUnitMeasure)
    {
        $this->values['BaseUnitMeasure'] = $BaseUnitMeasure;
        return $this;
    }

    /**
     * Vergileme ölçüsü olarak tutar(perakende satış fiyatı gibi.) kullanılması halinde ilgili tarife bilgileri bu elemana girilecektir.
     * [val => "string", attrs=> [currencyID=>"TRY"] ]
     */
    public function setPerUnitAmount(?AbstractValueWithAttr $PerUnitAmount)
    {
        $this->values['PerUnitAmount'] = $PerUnitAmount;
        return $this;
    }

    /**
     * Verginin türü ile ilgili bilgiler girilecektir.
     */
    public function setTaxCategory(?TaxCategory $TaxCategory)
    {
        $this->values['TaxCategory'] = $TaxCategory;
        return $this;
    }

}