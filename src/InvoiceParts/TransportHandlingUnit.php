<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Taşıma ünitesi hakkında detaylı bilgi girilir.
 * @property string $ID
 * @property string $TransportHandlingUnitTypeCode
 * @property string $HandlingCode
 * @property string $HandlingInstructions
 * @property bool $HazardousRiskIndicator
 * @property int $TotalGoodsItemQuantity
 * @property int $TotalPackageQuantity
 * @property string $DamageRemarks
 * @property string $TraceID
 * @property ActualPackage $ActualPackage
 * @property array $TransportEquipment
 * @property TransportMeans $TransportMeans
 * @property HazardousGoodsTransit $HazardousGoodsTransit
 * @property MeasurementDimension $MeasurementDimension
 * @property MinimumTemperature $MinimumTemperature
 * @property MaximumTemperature $MaximumTemperature
 * @property FloorSpaceMeasurementDimension $FloorSpaceMeasurementDimension
 * @property PalletSpaceMeasurementDimension $PalletSpaceMeasurementDimension
 * @property ShipmentDocumentReference $ShipmentDocumentReference
 * @property CustomsDeclaration $CustomsDeclaration
 */
class TransportHandlingUnit extends AbstractComplexType
{
    /**
     * Taşıma ünitesi numarası girilir.
     */
    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

    /**
     * Taşıma ünitesi tipi kodlu olarak girilir.
     */
    public function setTransportHandlingUnitTypeCode(?string $TransportHandlingUnitTypeCode)
    {
        $this->values['TransportHandlingUnitTypeCode'] = $TransportHandlingUnitTypeCode;
        return $this;
    }

    /**
     * Nasıl paketlenip taşınacağı kodlu olarak tanımlar.
     */
    public function setHandlingCode(?string $HandlingCode)
    {
        $this->values['HandlingCode'] = $HandlingCode;
        return $this;
    }

    /**
     * Nasıl paketlenip taşınacağıserbest metin olarak tanımlar.
     */
    public function setHandlingInstructions(?string $HandlingInstructions)
    {
        $this->values['HandlingInstructions'] = $HandlingInstructions;
        return $this;
    }

    /**
     * Tehlikeli madde içerip içermediğini belirtir.
     */
    public function setHazardousRiskIndicator(?bool $HazardousRiskIndicator)
    {
        $this->values['HazardousRiskIndicator'] = $HazardousRiskIndicator;
        return $this;
    }

    /**
     * Toplam ürün miktarı girilir.
     */
    public function setTotalGoodsItemQuantity(?int $TotalGoodsItemQuantity)
    {
        $this->values['TotalGoodsItemQuantity'] = $TotalGoodsItemQuantity;
        return $this;
    }

    /**
     * Toplam paket miktarı girilir.
     */
    public function setTotalPackageQuantity(?int $TotalPackageQuantity)
    {
        $this->values['TotalPackageQuantity'] = $TotalPackageQuantity;
        return $this;
    }

    /**
     * Zarar bilgisi girilir.
     */
    public function setDamageRemarks(?string $DamageRemarks)
    {
        $this->values['DamageRemarks'] = $DamageRemarks;
        return $this;
    }

    /**
     * Takip numarası girilir.
     */
    public function setTraceID(?string $TraceID)
    {
        $this->values['TraceID'] = $TraceID;
        return $this;
    }

    /**
     * İçerdiği paket bilgileri girilir.
     */
    public function setActualPackage(?ActualPackage $ActualPackage)
    {
        $this->values['ActualPackage'] = $ActualPackage;
        return $this;
    }

    /**
     * Ekipman bilgisi girilir.
     * @var TransportEquipment[]
     */
    public function setTransportEquipment(?array $TransportEquipment)
    {
        $this->values['TransportEquipment'] = $TransportEquipment;
        return $this;
    }

    /**
     * Taşıma şekli bilgisi girilir.
     */
    public function setTransportMeans(?TransportMeans $TransportMeans)
    {
        $this->values['TransportMeans'] = $TransportMeans;
        return $this;
    }

    /**
     * Taşıma sırasındaki tehlikeli malların bilgisi girilir.
     */
    public function setHazardousGoodsTransit(?HazardousGoodsTransit $HazardousGoodsTransit)
    {
        $this->values['HazardousGoodsTransit'] = $HazardousGoodsTransit;
        return $this;
    }

    /**
     * Taşıma ünitesi ölçüleri girilir.
     */
    public function setMeasurementDimension(?MeasurementDimension $MeasurementDimension)
    {
        $this->values['MeasurementDimension'] = $MeasurementDimension;
        return $this;
    }

    /**
     * Taşıma ünitesi için maksimum sıcaklık girilir.
     */
    public function setMinimumTemperature(?MinimumTemperature $MinimumTemperature)
    {
        $this->values['MinimumTemperature'] = $MinimumTemperature;
        return $this;
    }

    /**
     *  Taşıma ünitesi için minimum sıcaklık girilir.
     */
    public function setMaximumTemperature(?MaximumTemperature $MaximumTemperature)
    {
        $this->values['MaximumTemperature'] = $MaximumTemperature;
        return $this;
    }

    /**
     * Yerde kapladığı alan bilgisi girilir.
     */
    public function setFloorSpaceMeasurementDimension(?FloorSpaceMeasurementDimension $FloorSpaceMeasurementDimension)
    {
        $this->values['FloorSpaceMeasurementDimension'] = $FloorSpaceMeasurementDimension;
        return $this;
    }

    /**
     * Palette kapladığı alan blgisi girilir.
     */
    public function setPalletSpaceMeasurementDimension(?PalletSpaceMeasurementDimension $PalletSpaceMeasurementDimension)
    {
        $this->values['PalletSpaceMeasurementDimension'] = $PalletSpaceMeasurementDimension;
        return $this;
    }

    /**
     * İlgili gönderi belgesine referans girilir.
     */
    public function setShipmentDocumentReference(?ShipmentDocumentReference $ShipmentDocumentReference)
    {
        $this->values['ShipmentDocumentReference'] = $ShipmentDocumentReference;
        return $this;
    }

    /**
     * Gümrük numaralandırma bilgisi girilir.
     */
    public function setCustomsDeclaration(?CustomsDeclaration $CustomsDeclaration)
    {
        $this->values['CustomsDeclaration'] = $CustomsDeclaration;
        return $this;
    }

}