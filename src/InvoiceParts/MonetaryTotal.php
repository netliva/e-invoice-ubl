<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;
use Netliva\eInvoiceUBL\Abstracts\AbstractValueWithAttr;

/**
 * Parasal toplamlar ile genel tutarların girildiği elemandır
 * @property AbstractValueWithAttr $LineExtensionAmount
 * @property AbstractValueWithAttr $TaxExclusiveAmount
 * @property AbstractValueWithAttr $TaxInclusiveAmount
 * @property AbstractValueWithAttr $AllowanceTotalAmount
 * @property AbstractValueWithAttr $ChargeTotalAmount
 * @property AbstractValueWithAttr $PayableRoundingAmount
 * @property AbstractValueWithAttr $PayableAmount
 */
class MonetaryTotal extends AbstractComplexType
{
    /**
     * Mal/hizmet miktarı ile Mal/hizmet birim fiyatının çarpımı ile bulunan tutardır.
     * [val => "string", attrs=> [currencyID=>"TRY"] ]
     */
    public function setLineExtensionAmount(?AbstractValueWithAttr $LineExtensionAmount)
    {
        $this->values['LineExtensionAmount'] = $LineExtensionAmount;
        return $this;
    }

    /**
     * Vergiler hariç, ıskonto veya artırım dahil toplam tutar girilir.(Vergi Matrahı).
     * [val => "string", attrs=> [currencyID=>"TRY"] ]
     */
    public function setTaxExclusiveAmount(?AbstractValueWithAttr $TaxExclusiveAmount)
    {
        $this->values['TaxExclusiveAmount'] = $TaxExclusiveAmount;
        return $this;
    }

    /**
     * Vergiler, ıskonto ve artırım dahil toplam tutar girilir.
     * [val => "string", attrs=> [currencyID=>"TRY"] ]
     */
    public function setTaxInclusiveAmount(?AbstractValueWithAttr $TaxInclusiveAmount)
    {
        $this->values['TaxInclusiveAmount'] = $TaxInclusiveAmount;
        return $this;
    }

    /**
     * Toplam ıskonto tutarı girilir.
     * [val => "string", attrs=> [currencyID=>"TRY"] ]
     */
    public function setAllowanceTotalAmount(?AbstractValueWithAttr $AllowanceTotalAmount)
    {
        $this->values['AllowanceTotalAmount'] = $AllowanceTotalAmount;
        return $this;
    }

    /**
     * Toplam fiyat artırımı tutarı girilir.
     * [val => "string", attrs=> [currencyID=>"TRY"] ]
     */
    public function setChargeTotalAmount(?AbstractValueWithAttr $ChargeTotalAmount)
    {
        $this->values['ChargeTotalAmount'] = $ChargeTotalAmount;
        return $this;
    }

    /**
     * Yuvarlama tutarı girilir.
     * [val => "string", attrs=> [currencyID=>"TRY"] ]
     */
    public function setPayableRoundingAmount(?AbstractValueWithAttr $PayableRoundingAmount)
    {
        $this->values['PayableRoundingAmount'] = $PayableRoundingAmount;
        return $this;
    }

    /**
     * Ödenecek tutar girilir.
     * [val => "string", attrs=> [currencyID=>"TRY"] ]
     */
    public function setPayableAmount(?AbstractValueWithAttr $PayableAmount)
    {
        $this->values['PayableAmount'] = $PayableAmount;
        return $this;
    }
}