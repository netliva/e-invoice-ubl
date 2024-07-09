<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Taşıması gerçekleşen mallar hakkındaki bilgileri içerir
 * @property string $ID
 * @property string $Description
 * @property bool $HazardousRiskIndicator
 * @property Amount $DeclaredCustomsValueAmount
 * @property Amount $DeclaredForCarriageValueAmount
 * @property Amount $DeclaredStatisticsValueAmount
 * @property Amount $FreeOnBoardValueAmount
 * @property Amount $InsuranceValueAmount
 * @property Amount $ValueAmount
 * @property Measure $GrossWeightMeasure
 * @property Measure $NetWeightMeasure
 * @property Measure $ChargableWeightMeasure
 * @property Measure $GrossVolumeMeasure
 * @property Measure $NetVolumeMeasure
 * @property int $Quantity
 * @property string $RequiredCustomsID
 * @property string $CustomsStatusCode
 * @property string $CustomsTariffQuantity
 * @property bool $CustomsImportClassifiedIndicator
 * @property string $ChargeableQuantity
 * @property string $ReturnableQuantity
 * @property string $TraceID
 * @property Item $Item
 * @property FreightAllowanceCharge $FreightAllowanceCharge
 * @property InvoiceLine $InvoiceLine
 * @property Temperature $Temperature
 * @property OriginAddress $OriginAddress
 * @property MeasurementDimension $MeasurementDimension
 */
class GoodsItem extends AbstractComplexType
{
    /**
     * İlgili ürünü belge içinde tekil olarak tanımlar.
     */
    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

    /**
     * Serbet metin olarak açıklama girilebilir.
     */
    public function setDescription(?string $Description)
    {
        $this->values['Description'] = $Description;
        return $this;
    }

    /**
     * Ürün tehlikeli madde kategorisinde sayılıp sayılamayacağını gösteren bilgi.
     */
    public function setHazardousRiskIndicator(?bool $HazardousRiskIndicator)
    {
        $this->values['HazardousRiskIndicator'] = $HazardousRiskIndicator;
        return $this;
    }

    /**
     * Gümrük değeri tutarı girilir.
     */
    public function setDeclaredCustomsValueAmount(?Amount $DeclaredCustomsValueAmount)
    {
        $this->values['DeclaredCustomsValueAmount'] = $DeclaredCustomsValueAmount;
        return $this;
    }

    /**
     * Nakliye tutarı (navlun) girilir.
     */
    public function setDeclaredForCarriageValueAmount(?Amount $DeclaredForCarriageValueAmount)
    {
        $this->values['DeclaredForCarriageValueAmount'] = $DeclaredForCarriageValueAmount;
        return $this;
    }

    /**
     * Ürünün GTIP kıymet değeri girilir.
     */
    public function setDeclaredStatisticsValueAmount(?Amount $DeclaredStatisticsValueAmount)
    {
        $this->values['DeclaredStatisticsValueAmount'] = $DeclaredStatisticsValueAmount;
        return $this;
    }

    /**
     * FOB tutarı girilir.
     */
    public function setFreeOnBoardValueAmount(?Amount $FreeOnBoardValueAmount)
    {
        $this->values['FreeOnBoardValueAmount'] = $FreeOnBoardValueAmount;
        return $this;
    }

    /**
     * Sigorta tutarı girilir.
     */
    public function setInsuranceValueAmount(?Amount $InsuranceValueAmount)
    {
        $this->values['InsuranceValueAmount'] = $InsuranceValueAmount;
        return $this;
    }

    /**
     * Ürünün değeri girilir. Ana seviyedeki Shipment'ın altında kullanımında toplam tutar bilgisi girilebilir.
     */
    public function setValueAmount(?Amount $ValueAmount)
    {
        $this->values['ValueAmount'] = $ValueAmount;
        return $this;
    }

    /**
     * Brüt ağırlığı girilir.
     */
    public function setGrossWeightMeasure(?Measure $GrossWeightMeasure)
    {
        $this->values['GrossWeightMeasure'] = $GrossWeightMeasure;
        return $this;
    }

    /**
     *  Net ağırlığı girilir.
     */
    public function setNetWeightMeasure(?Measure $NetWeightMeasure)
    {
        $this->values['NetWeightMeasure'] = $NetWeightMeasure;
        return $this;
    }

    /**
     *  Belli bir ücretin uygulanabileceği brüt ağırlığı girilir.
     */
    public function setChargableWeightMeasure(?Measure $ChargableWeightMeasure)
    {
        $this->values['ChargableWeightMeasure'] = $ChargableWeightMeasure;
        return $this;
    }

    /**
     * Brüt hacim girilir.
     */
    public function setGrossVolumeMeasure(?Measure $GrossVolumeMeasure)
    {
        $this->values['GrossVolumeMeasure'] = $GrossVolumeMeasure;
        return $this;
    }

    /**
     * Net hacim girilir.
     */
    public function setNetVolumeMeasure(?Measure $NetVolumeMeasure)
    {
        $this->values['NetVolumeMeasure'] = $NetVolumeMeasure;
        return $this;
    }

    /**
     * Miktar girilir.
     */
    public function setQuantity(?int $Quantity)
    {
        $this->values['Quantity'] = $Quantity;
        return $this;
    }

    /**
     * Ürünün veya malın GTIP numarası girilir.
     */
    public function setRequiredCustomsID(?string $RequiredCustomsID)
    {
        $this->values['RequiredCustomsID'] = $RequiredCustomsID;
        return $this;
    }

    /**
     * Gümrük durum kodu girilir.
     */
    public function setCustomsStatusCode(?string $CustomsStatusCode)
    {
        $this->values['CustomsStatusCode'] = $CustomsStatusCode;
        return $this;
    }

    /**
     * İstatistiksel, tarife veya mali amaçlı gümrük mal miktarı girilir.
     */
    public function setCustomsTariffQuantity(?string $CustomsTariffQuantity)
    {
        $this->values['CustomsTariffQuantity'] = $CustomsTariffQuantity;
        return $this;
    }

    /**
     * Malların gümrükte ithalat için sınıflandırılmış olup olmadığını belirtir.
     */
    public function setCustomsImportClassifiedIndicator(?bool $CustomsImportClassifiedIndicator)
    {
        $this->values['CustomsImportClassifiedIndicator'] = $CustomsImportClassifiedIndicator;
        return $this;
    }

    /**
     * Belli bir ücretin uygulanabileceği miktar girilir.
     */
    public function setChargeableQuantity(?string $ChargeableQuantity)
    {
        $this->values['ChargeableQuantity'] = $ChargeableQuantity;
        return $this;
    }

    /**
     * Malların ne kadarının geri gelebileceği girilir.
     */
    public function setReturnableQuantity(?string $ReturnableQuantity)
    {
        $this->values['ReturnableQuantity'] = $ReturnableQuantity;
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
     * Malların fatura kalemleriyle olan ilişkileri girilir.
     */
    public function setItem(?Item $Item)
    {
        $this->values['Item'] = $Item;
        return $this;
    }

    /**
     * Taşıma bedelinde indirim/fiyat artırımı var ise girilir.
     */
    public function setFreightAllowanceCharge(?FreightAllowanceCharge $FreightAllowanceCharge)
    {
        $this->values['FreightAllowanceCharge'] = $FreightAllowanceCharge;
        return $this;
    }

    /**
     * Birim fiyat ve kalem toplam fiyat bilgileri girilir.
     */
    public function setInvoiceLine(?InvoiceLine $InvoiceLine)
    {
        $this->values['InvoiceLine'] = $InvoiceLine;
        return $this;
    }

    /**
     * Sevkiyattaki mallar ile ilgili her türlü sıcaklık bilgisi girilebilir.
     */
    public function setTemperature(?Temperature $Temperature)
    {
        $this->values['Temperature'] = $Temperature;
        return $this;
    }

    /**
     * Ürünlerin üretildiği adres girilir.
     */
    public function setOriginAddress(?OriginAddress $OriginAddress)
    {
        $this->values['OriginAddress'] = $OriginAddress;
        return $this;
    }

    /**
     * Ürünlerin diğer ölçümleri girilir.
     */
    public function setMeasurementDimension(?MeasurementDimension $MeasurementDimension)
    {
        $this->values['MeasurementDimension'] = $MeasurementDimension;
        return $this;
    }

}