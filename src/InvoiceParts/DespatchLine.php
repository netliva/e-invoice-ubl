<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Bu elemanda irsaliyede yer alan gönderilere ait bilgiler yer alacaktır
 * @property string $ID
 * @property string $Note
 * @property array $DeliveredQuantity
 * @property array $OutstandingQuantity
 * @property string $OutstandingReason
 * @property array $OversupplyQuantity
 * @property OrderLineReference $OrderLineReference
 * @property DocumentReference $DocumentReference
 * @property Item $Item
 * @property Shipment $Shipment
 */
class DespatchLine extends AbstractComplexType
{
    /**
     * İrsaliye kalemi numarası girilir.
     */
    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

    /**
     * Kalem ile ilgili açıklama girilir.
     */
    public function setNote(?string $Note)
    {
        $this->values['Note'] = $Note;
        return $this;
    }

    /**
     * Gönderimi gerçekleştirilen mal adedi girilir.
     * [val => "string", attrs=>[unitCode=>"C62"]]
     */
    public function setDeliveredQuantity(?array $DeliveredQuantity)
    {
        $this->values['DeliveredQuantity'] = $DeliveredQuantity;
        return $this;
    }

    /**
     * İleriki bir tarihte gönderilecek mal adedi bilgisi girilir.
     * [val => "string", attrs=>[unitCode=>"C62"]]
     */
    public function setOutstandingQuantity(?array $OutstandingQuantity)
    {
        $this->values['OutstandingQuantity'] = $OutstandingQuantity;
        return $this;
    }

    /**
     * İleriki tarihte gönderilecek malın sebebi girilir.
     */
    public function setOutstandingReason(?string $OutstandingReason)
    {
        $this->values['OutstandingReason'] = $OutstandingReason;
        return $this;
    }

    /**
     * Fazla miktarda gönderilen malın adedi girilir.
     * [val => "string", attrs=>[unitCode=>"C62"]]
     */
    public function setOversupplyQuantity(?array $OversupplyQuantity)
    {
        $this->values['OversupplyQuantity'] = $OversupplyQuantity;
        return $this;
    }

    /**
     * İlgili sipariş dokümanı kalemine referans girilir.
     */
    public function setOrderLineReference(?OrderLineReference $OrderLineReference)
    {
        $this->values['OrderLineReference'] = $OrderLineReference;
        return $this;
    }

    /**
     * İlgili dokümanlara referans girilir.
     */
    public function setDocumentReference(?DocumentReference $DocumentReference)
    {
        $this->values['DocumentReference'] = $DocumentReference;
        return $this;
    }

    /**
     * Mal bilgisi girilir.
     */
    public function setItem(?Item $Item)
    {
        $this->values['Item'] = $Item;
        return $this;
    }

    /**
     * Ürün birim fiyatı bilgisi girilir.
     */
    public function setShipment(?Shipment $Shipment)
    {
        $this->values['Shipment'] = $Shipment;
        return $this;
    }
}