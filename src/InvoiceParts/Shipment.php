<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Gönderi (Kargo) bilgileri girilir.
 * @property string $ID
 * @property string $HandlingCode
 * @property string $HandlingInstructions
 * @property array $GrossWeightMeasure
 * @property array $NetWeightMeasure
 * @property array $GrossVolumeMeasure
 * @property array $NetVolumeMeasure
 * @property array $TotalGoodsItemQuantity
 * @property array $TotalTransportHandlingUnitQuantity
 * @property array $InsuranceValueAmount
 * @property array $DeclaredCustomsValueAmount
 * @property array $DeclaredForCarriageValueAmount
 * @property array $DeclaredStatisticsValueAmount
 * @property array $FreeOnBoardValueAmount
 * @property string $SpecialInstructions
 * @property GoodsItem $GoodsItem
 * @property ShipmentStage $ShipmentStage
 * @property Delivery $Delivery
 * @property TransportHandlingUnit $TransportHandlingUnit
 * @property ReturnAddress $ReturnAddress
 * @property FirstArrivalPortLocation $FirstArrivalPortLocation
 * @property LastExitPortLocation $LastExitPortLocation
 */
class Shipment extends AbstractComplexType
{

    /**
     * Kargo numarası girilir.
     */
    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

    /**
     * Kargonun nasıl paketlenip taşınacağı kodlu olarak tanımlar (örneğin kırılacak mal).
     */
    public function setHandlingCode(?string $HandlingCode)
    {
        $this->values['HandlingCode'] = $HandlingCode;
        return $this;
    }

    /**
     * Kargonun nasıl paketlenip taşınacağı serbest metin olarak tanımlar.
     */
    public function setHandlingInstructions(?string $HandlingInstructions)
    {
        $this->values['HandlingInstructions'] = $HandlingInstructions;
        return $this;
    }

    /**
     * Brüt ağırlık girilir.
     * [val => "string", attrs=> [unitCode=>"KGM"] ]
     */
    public function setGrossWeightMeasure(?array $GrossWeightMeasure)
    {
        $this->values['GrossWeightMeasure'] = $GrossWeightMeasure;
        return $this;
    }

    /**
     * Net ağırlık girilir.
     * [val => "string", attrs=> [unitCode=>"KGM"] ]
     */
    public function setNetWeightMeasure(?array $NetWeightMeasure)
    {
        $this->values['NetWeightMeasure'] = $NetWeightMeasure;
        return $this;
    }

    /**
     * Brüt hacim girilir.
     * [val => "string", attrs=> [unitCode=>"KGM"] ]
     */
    public function setGrossVolumeMeasure(?array $GrossVolumeMeasure)
    {
        $this->values['GrossVolumeMeasure'] = $GrossVolumeMeasure;
        return $this;
    }

    /**
     * Net hacim girilir.
     * [val => "string", attrs=> [unitCode=>"KGM"] ]
     */
    public function setNetVolumeMeasure(?array $NetVolumeMeasure)
    {
        $this->values['NetVolumeMeasure'] = $NetVolumeMeasure;
        return $this;
    }

    /**
     * Toplam mal miktarı girilir.
     * [val => "string", attrs=> [unitCode=>"KGM"] ]
     */
    public function setTotalGoodsItemQuantity(?array $TotalGoodsItemQuantity)
    {
        $this->values['TotalGoodsItemQuantity'] = $TotalGoodsItemQuantity;
        return $this;
    }

    /**
     * Toplam taşıma ünitesi miktarı girilir.
     * [val => "string", attrs=> [unitCode=>"KGM"] ]
     */
    public function setTotalTransportHandlingUnitQuantity(?array $TotalTransportHandlingUnitQuantity)
    {
        $this->values['TotalTransportHandlingUnitQuantity'] = $TotalTransportHandlingUnitQuantity;
        return $this;
    }

    /**
     * Sigorta tutarı girilir.
     * [val => "string", attrs=> [unitCode=>"KGM"] ]
     */
    public function setInsuranceValueAmount(?array $InsuranceValueAmount)
    {
        $this->values['InsuranceValueAmount'] = $InsuranceValueAmount;
        return $this;
    }

    /**
     * Beyan edilen gümrük değeri tutarı girilir.
     * [val => "string", attrs=> [unitCode=>"KGM"] ]
     */
    public function setDeclaredCustomsValueAmount(?array $DeclaredCustomsValueAmount)
    {
        $this->values['DeclaredCustomsValueAmount'] = $DeclaredCustomsValueAmount;
        return $this;
    }

    /**
     * Beyan edilen taşıma ücreti (navlun) girilir.
     * [val => "string", attrs=> [unitCode=>"KGM"] ]
     */
    public function setDeclaredForCarriageValueAmount(?array $DeclaredForCarriageValueAmount)
    {
        $this->values['DeclaredForCarriageValueAmount'] = $DeclaredForCarriageValueAmount;
        return $this;
    }

    /**
     * Ürünün GTIP kıymet değeri girilir.
     * [val => "string", attrs=> [unitCode=>"KGM"] ]
     */
    public function setDeclaredStatisticsValueAmount(?array $DeclaredStatisticsValueAmount)
    {
        $this->values['DeclaredStatisticsValueAmount'] = $DeclaredStatisticsValueAmount;
        return $this;
    }

    /**
     * FOB değeri girilir.
     * [val => "string", attrs=> [unitCode=>"KGM"] ]
     */
    public function setFreeOnBoardValueAmount(?array $FreeOnBoardValueAmount)
    {
        $this->values['FreeOnBoardValueAmount'] = $FreeOnBoardValueAmount;
        return $this;
    }

    /**
     * Özel talimatlar serbest metin olarak
     */
    public function setSpecialInstructions(?string $SpecialInstructions)
    {
        $this->values['SpecialInstructions'] = $SpecialInstructions;
        return $this;
    }

    /**
     * DespatchLine/Shipment elemanı içerisinde kullanımında fiyat bilgileri girilir.
     */
    public function setGoodsItem(?GoodsItem $GoodsItem)
    {
        $this->values['GoodsItem'] = $GoodsItem;
        return $this;
    }

    /**
     * Gönderinin hangi aşamada olduğu bilgisi girilir. Ayrıca taşıyıcı (plaka, şoför) gibi detay bilgiler girilir.
     */
    public function setShipmentStage(?ShipmentStage $ShipmentStage)
    {
        $this->values['ShipmentStage'] = $ShipmentStage;
        return $this;
    }

    /**
     * DespatchAdvice dokümanı içerisinde kullanımında taşıyıcı firma, fiili sevk tarihi ve asıl teslim tarihi bilgileri girilir.
     */
    public function setDelivery(?Delivery $Delivery)
    {
        $this->values['Delivery'] = $Delivery;
        return $this;
    }

    /**
     * Taşıma üniteleri bilgisi girilir.
     */
    public function setTransportHandlingUnit(?TransportHandlingUnit $TransportHandlingUnit)
    {
        $this->values['TransportHandlingUnit'] = $TransportHandlingUnit;
        return $this;
    }

    /**
     * Ürünlerin geri iade edileceği adres girilir.
     */
    public function setReturnAddress(?ReturnAddress $ReturnAddress)
    {
        $this->values['ReturnAddress'] = $ReturnAddress;
        return $this;
    }

    /**
     * İlk ulaşım limanı girilir.
     */
    public function setFirstArrivalPortLocation(?FirstArrivalPortLocation $FirstArrivalPortLocation)
    {
        $this->values['FirstArrivalPortLocation'] = $FirstArrivalPortLocation;
        return $this;
    }

    /**
     * Son çıkış limanı girilir.
     */
    public function setLastExitPortLocation(?LastExitPortLocation $LastExitPortLocation)
    {
        $this->values['LastExitPortLocation'] = $LastExitPortLocation;
        return $this;
    }




}