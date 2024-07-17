<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;
use Netliva\eInvoiceUBL\Abstracts\AbstractValueWithAttr;

/**
 * Belgede geçen mal/hizmete ilişkin bilgilerin girildiği elemandır.
 * @property string $ID
 * @property array $Note
 * @property AbstractValueWithAttr $InvoicedQuantity
 * @property OrderLineReference $OrderLineReference
 * @property DespatchLineReference $DespatchLineReference
 * @property ReceiptLineReference $ReceiptLineReference
 * @property Delivery $Delivery
 * @property AbstractValueWithAttr $LineExtensionAmount
 * @property AllowanceCharge[] $AllowanceCharge
 * @property TaxTotal $TaxTotal
 * @property WithholdingTaxTotal $WithholdingTaxTotal
 * @property Item $Item
 * @property Price $Price
 * @property SubInvoiceLine $SubInvoiceLine
 */
class InvoiceLine extends AbstractComplexType
{
    protected $values = [
        'ID'                    => null,
        'Note'                  => null,
        'InvoicedQuantity'      => null,
        'OrderLineReference'    => null,
        'DespatchLineReference' => null,
        'ReceiptLineReference'  => null,
        'Delivery'              => null,
        'LineExtensionAmount'   => null,
        'AllowanceCharge'       => null,
        'TaxTotal'              => null,
        'WithholdingTaxTotal'   => null,
        'Item'                  => null,
        'Price'                 => null,
        'SubInvoiceLine'        => null,
    ];

    /**
     *  Kalem sıra numarası girilir.
     */
    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

    /**
     * Kalem hakkında açıklama serbest metin olarak girilir.
     */
    public function setNote(?array $Note)
    {
        $this->values['Note'] = $Note;
        return $this;
    }

    /**
     * Mal/hizmet miktarı birimi ile birlikte girilir.
     */
    public function setInvoicedQuantity(?AbstractValueWithAttr $InvoicedQuantity)
    {
        $this->values['InvoicedQuantity'] = $InvoicedQuantity;
        return $this;
    }

    /**
     * Fatura ile ilişkili sipariş dokümanının kalemlerine referans atmak için kullanılır.
     */
    public function setOrderLineReference(?OrderLineReference $OrderLineReference)
    {
        $this->values['OrderLineReference'] = $OrderLineReference;
        return $this;
    }

    /**
     * Fatura ile ilişkili irsaliye dokümanının kalemlerine referans atmak için kullanılır.
     */
    public function setDespatchLineReference(?DespatchLineReference $DespatchLineReference)
    {
        $this->values['DespatchLineReference'] = $DespatchLineReference;
        return $this;
    }

    /**
     * Fatura ile ilişkili alındı dokümanının kalemlerine referans atmak için kullanılır.
     */
    public function setReceiptLineReference(?ReceiptLineReference $ReceiptLineReference)
    {
        $this->values['ReceiptLineReference'] = $ReceiptLineReference;
        return $this;
    }

    /**
     * Kalem bazlı teslimat olması durumunda bu eleman doldurulur.
     */
    public function setDelivery(?Delivery $Delivery)
    {
        $this->values['Delivery'] = $Delivery;
        return $this;
    }

    /**
     * Mal/hizmet miktarı ile Mal/hizmet birim fiyatının çarpımı ile bulunan tutardır (varsa iskonto düşülür)
     * [val => "string", attrs=> [currencyID=>"TRY"] ]
     */
    public function setLineExtensionAmount(?AbstractValueWithAttr $LineExtensionAmount)
    {
        $this->values['LineExtensionAmount'] = $LineExtensionAmount;
        return $this;
    }

    /**
     * Kalem bazlı ıskonto/artırım tutarıdır.
     */
    public function setAllowanceCharge(?array $AllowanceCharge)
    {
        $this->values['AllowanceCharge'] = $AllowanceCharge;
        return $this;
    }
    
    /**
     * Kalem bazlı vergi bilgilerinin girildiği elemandır.
     */
    public function setTaxTotal(?TaxTotal $TaxTotal)
    {
        $this->values['TaxTotal'] = $TaxTotal;
        return $this;
    }

    /**
     * Kalem bazlı tevkifat uygulanması durumunda bu eleman kullanılır.
     */
    public function setWithholdingTaxTotal(?WithholdingTaxTotal $WithholdingTaxTotal)
    {
        $this->values['WithholdingTaxTotal'] = $WithholdingTaxTotal;
        return $this;
    }
    
   /**
    *  Mal/hizmet hakkında bilgiler buraya girilir.
     */
    
    public function setItem(?Item $Item)
    {
        $this->values['Item'] = $Item;
        return $this;
    }

    /**
     * Mal/hizmet birim fiyatı hakkında bilgiler buraya girilir.
     */
    
    public function setPrice(?Price $Price)
    {
        $this->values['Price'] = $Price;
        return $this;
    }

    /**
     * Eğer ürün için ek bir birim kodu kullanılması gerekiyorsa bu elemanın içindeki InvoicedQuantity elemanı (diğer opsyonel elemanlar boş bırakılarak) kullanılabilir.
     */
    public function setSubInvoiceLine(?SubInvoiceLine $SubInvoiceLine)
    {
        $this->values['SubInvoiceLine'] = $SubInvoiceLine;
        return $this;
    }



}