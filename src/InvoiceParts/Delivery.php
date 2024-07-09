<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Ürün tesliman bilgileri detaylı olarak girilir.
 * @property string $ID
 * @property string $Quantity
 * @property string $ActualDeliveryDate
 * @property string $ActualDeliveryTime
 * @property string $LatestDeliveryDate
 * @property string $LatestDeliveryTime
 * @property string $TrackingID
 * @property DeliveryAddress $DeliveryAddress
 * @property AlternativeDeliveryLocation $AlternativeDeliveryLocation
 * @property EstimatedDeliveryPeriod $EstimatedDeliveryPeriod
 * @property CarrierParty $CarrierParty
 * @property DeliveryParty $DeliveryParty
 * @property Despatch $Despatch
 * @property DeliveryTerms $DeliveryTerms
 * @property Shipment $Shipment
 */
class Delivery extends AbstractComplexType
{
    /**
     * Teslimatı belge içerisinde tekil olarak tanımlar.
     */
    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

    /**
     * Ürün miktarı girilir.
     */
    public function setQuantity(?string $Quantity)
    {
        $this->values['Quantity'] = $Quantity;
        return $this;
    }

    /**
     * Gerçekleşen teslim tarihi yazılır.
     */
    public function setActualDeliveryDate(?string $ActualDeliveryDate)
    {
        $this->values['ActualDeliveryDate'] = $ActualDeliveryDate;
        return $this;
    }

    /**
     * Gerçekleşen teslim zamanı yazılır.
     */
    public function setActualDeliveryTime(?string $ActualDeliveryTime)
    {
        $this->values['ActualDeliveryTime'] = $ActualDeliveryTime;
        return $this;
    }

    /**
     * Son teslim tarihi girilir.
     */
    public function setLatestDeliveryDate(?string $LatestDeliveryDate)
    {
        $this->values['LatestDeliveryDate'] = $LatestDeliveryDate;
        return $this;
    }

    /**
     * Son teslim zamanı girilir.
     */
    public function setLatestDeliveryTime(?string $LatestDeliveryTime)
    {
        $this->values['LatestDeliveryTime'] = $LatestDeliveryTime;
        return $this;
    }

    /**
     * Takip numarası girilir.
     */
    public function setTrackingID(?string $TrackingID)
    {
        $this->values['TrackingID'] = $TrackingID;
        return $this;
    }

    /**
     * Teslimat adresi girilir.
     */
    public function setDeliveryAddress(?DeliveryAddress $DeliveryAddress)
    {
        $this->values['DeliveryAddress'] = $DeliveryAddress;
        return $this;
    }

    /**
     * Alternatif teslim yeri girilir
     */
    public function setAlternativeDeliveryLocation(?AlternativeDeliveryLocation $AlternativeDeliveryLocation)
    {
        $this->values['AlternativeDeliveryLocation'] = $AlternativeDeliveryLocation;
        return $this;
    }

    /**
     * Tahmini teslim dönemi girilir.
     */
    public function setEstimatedDeliveryPeriod(?EstimatedDeliveryPeriod $EstimatedDeliveryPeriod)
    {
        $this->values['EstimatedDeliveryPeriod'] = $EstimatedDeliveryPeriod;
        return $this;
    }

    /**
     * Taşıyıcı taraf girilir.
     */
    public function setCarrierParty(?CarrierParty $CarrierParty)
    {
        $this->values['CarrierParty'] = $CarrierParty;
        return $this;
    }

    /**
     * Teslimat yapılacak (ürünleri teslim alacak) taraf girilir.
     */
    public function setDeliveryParty(?DeliveryParty $DeliveryParty)
    {
        $this->values['DeliveryParty'] = $DeliveryParty;
        return $this;
    }

    /**
     * Gönderi bilgisi girilir.
     */
    public function setDespatch(?Despatch $Despatch)
    {
        $this->values['Despatch'] = $Despatch;
        return $this;
    }

    /**
     *  Teslimat şartları girilir.
     */
    public function setDeliveryTerms(?DeliveryTerms $DeliveryTerms)
    {
        $this->values['DeliveryTerms'] = $DeliveryTerms;
        return $this;
    }

    /**
     * Yük/kargo bilgileri girilir.
     */
    public function setShipment(?Shipment $Shipment)
    {
        $this->values['Shipment'] = $Shipment;
        return $this;
    }

}