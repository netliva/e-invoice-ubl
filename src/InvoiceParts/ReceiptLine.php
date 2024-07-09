<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Bu elemanda teslim alınan mal hakkında bilgiler yer alacaktır.
 * @property string $ID
 * @property array $Note
 * @property $ReceivedQuantity
 * @property $ShortQuantity
 * @property $RejectedQuantity
 * @property string $RejectReasonCode
 * @property string $RejectReason
 * @property $OversupplyQuantity
 * @property string $ReceivedDate
 * @property string $TimingComplaintCode
 * @property string $TimingComplaint
 * @property OrderLineReference $OrderLineReference
 * @property DespatchLineReference $DespatchLineReference
 * @property DocumentReference $DocumentReference
 * @property Item $Item
 * @property Shipment $Shipment
 */
class ReceiptLine extends AbstractComplexType
{
    /**
     * Kalem numarası girilir.
     */
    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

    /**
     * Kalem açıklaması girilir.
     */
    public function setNote(?array $Note)
    {
        $this->values['Note'] = $Note;
        return $this;
    }

    /**
     * Teslim alınan mal adedi girilir.
     * [val => "string", attrs=> [unitCode=>"C62"] ]
     */
    public $ReceivedQuantity;

    /**
     * Eksik olan mal adedi girilir.
     * [val => "string", attrs=> [unitCode=>"C62"] ]
     */
    public $ShortQuantity;

    /**
     * Kabul edilmeyen mal adedi girilir.
     * [val => "string", attrs=> [unitCode=>"C62"] ]
     */
    public $RejectedQuantity;

    /**
     * Reddedilme sebebi kodu girilir.
     */
    public function setRejectReasonCode(?string $RejectReasonCode)
    {
        $this->values['RejectReasonCode'] = $RejectReasonCode;
        return $this;
    }

    /**
     * Reddedilme sebebi açıklaması girilir.
     */
    public function setRejectReason(?string $RejectReason)
    {
        $this->values['RejectReason'] = $RejectReason;
        return $this;
    }

    /**
     * Fazla teslim alınan mal adedi girilir.
     * [val => "string", attrs=> [unitCode=>"C62"] ]
     */
    public $OversupplyQuantity;

    /**
     * Teslim alma tarihi girilir.
     */
    public function setReceivedDate(?string $ReceivedDate)
    {
        $this->values['ReceivedDate'] = $ReceivedDate;
        return $this;
    }

    /**
     * Geç teslim edilmesi durumunda şikayet kodlu olarak girilir.
     */
    public function setTimingComplaintCode(?string $TimingComplaintCode)
    {
        $this->values['TimingComplaintCode'] = $TimingComplaintCode;
        return $this;
    }

    /**
     * Geç teslim edilmesi durumunda şikayet açıklaması girilir.
     */
    public function setTimingComplaint(?string $TimingComplaint)
    {
        $this->values['TimingComplaint'] = $TimingComplaint;
        return $this;
    }

    /**
     * İlgili sipariş dokümanı kalemi bilgisi girilir.
     */
    public function setOrderLineReference(?OrderLineReference $OrderLineReference)
    {
        $this->values['OrderLineReference'] = $OrderLineReference;
        return $this;
    }

    /**
     *  İlgili irsaliye dokümanı kalemi girilir.
     */
    public function setDespatchLineReference(?DespatchLineReference $DespatchLineReference)
    {
        $this->values['DespatchLineReference'] = $DespatchLineReference;
        return $this;
    }

    /**
     *  İlgili dokümanların bilgisi girilir.
     */
    public function setDocumentReference(?DocumentReference $DocumentReference)
    {
        $this->values['DocumentReference'] = $DocumentReference;
        return $this;
    }

    /**
     * Teslim alınan mal bilgisi girilir.
     */
    public function setItem(?Item $Item)
    {
        $this->values['Item'] = $Item;
        return $this;
    }

    /**
     *  Mal birim fiyatı girilir.
     */
    public function setShipment(?Shipment $Shipment)
    {
        $this->values['Shipment'] = $Shipment;
        return $this;
    }
}