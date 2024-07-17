<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;
use Netliva\eInvoiceUBL\Abstracts\AbstractFloatWithAttr;

/**
 * Parasal toplamlar ile genel tutarların girildiği elemandır
 * @property AbstractFloatWithAttr $LineExtensionAmount
 * @property AbstractFloatWithAttr $TaxExclusiveAmount
 * @property AbstractFloatWithAttr $TaxInclusiveAmount
 * @property AbstractFloatWithAttr $AllowanceTotalAmount
 * @property AbstractFloatWithAttr $ChargeTotalAmount
 * @property AbstractFloatWithAttr $PayableRoundingAmount
 * @property AbstractFloatWithAttr $PayableAmount
 */
class MonetaryTotal extends AbstractComplexType
{
    /**
     * Mal/hizmet miktarı ile Mal/hizmet birim fiyatının çarpımı ile bulunan tutardır.
     * [val => "string", attrs=> [currencyID=>"TRY"] ]
     */
    public function setLineExtensionAmount(?AbstractFloatWithAttr $LineExtensionAmount)
    {
        $this->values['LineExtensionAmount'] = $LineExtensionAmount;
        return $this;
    }

    /**
     * Vergiler hariç, ıskonto veya artırım dahil toplam tutar girilir.(Vergi Matrahı).
     * [val => "string", attrs=> [currencyID=>"TRY"] ]
     */
    public function setTaxExclusiveAmount(?AbstractFloatWithAttr $TaxExclusiveAmount)
    {
        $this->values['TaxExclusiveAmount'] = $TaxExclusiveAmount;
        return $this;
    }

    /**
     * Vergiler, ıskonto ve artırım dahil toplam tutar girilir.
     * [val => "string", attrs=> [currencyID=>"TRY"] ]
     */
    public function setTaxInclusiveAmount(?AbstractFloatWithAttr $TaxInclusiveAmount)
    {
        $this->values['TaxInclusiveAmount'] = $TaxInclusiveAmount;
        return $this;
    }

    /**
     * Toplam ıskonto tutarı girilir.
     * [val => "string", attrs=> [currencyID=>"TRY"] ]
     */
    public function setAllowanceTotalAmount(?AbstractFloatWithAttr $AllowanceTotalAmount)
    {
        $this->values['AllowanceTotalAmount'] = $AllowanceTotalAmount;
        return $this;
    }

    /**
     * Toplam fiyat artırımı tutarı girilir.
     * [val => "string", attrs=> [currencyID=>"TRY"] ]
     */
    public function setChargeTotalAmount(?AbstractFloatWithAttr $ChargeTotalAmount)
    {
        $this->values['ChargeTotalAmount'] = $ChargeTotalAmount;
        return $this;
    }

    /**
     * Yuvarlama tutarı girilir.
     * [val => "string", attrs=> [currencyID=>"TRY"] ]
     */
    public function setPayableRoundingAmount(?AbstractFloatWithAttr $PayableRoundingAmount)
    {
        $this->values['PayableRoundingAmount'] = $PayableRoundingAmount;
        return $this;
    }

    /**
     * Ödenecek tutar girilir.
     * [val => "string", attrs=> [currencyID=>"TRY"] ]
     */
    public function setPayableAmount(?AbstractFloatWithAttr $PayableAmount)
    {
        $this->values['PayableAmount'] = $PayableAmount;
        return $this;
    }
}