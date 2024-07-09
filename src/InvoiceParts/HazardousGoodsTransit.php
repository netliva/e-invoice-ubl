<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Taşıma sırasındaki tehlikeli malları anlatır.
 * @property string $TransportEmergencyCardCode
 * @property string $PackagingCriteriaCode
 * @property string $HazardousRegulationCode
 * @property string $InhalationToxicityZoneCode
 * @property string $TransportAuthorizationCode
 * @property MaximumTemperature $MaximumTemperature
 * @property MinimumTemperature $MinimumTemperature
 */
class HazardousGoodsTransit extends AbstractComplexType
{
    /**
     * Taşıma sırasında her hangi bir tehlikeli durum olması durumunda nasıl müdahale edileceğini anlatan kod girilebilir.
     */
    public function setTransportEmergencyCardCode(?string $TransportEmergencyCardCode)
    {
        $this->values['TransportEmergencyCardCode'] = $TransportEmergencyCardCode;
        return $this;
    }

    /**
     * Paketleme kriterleri kodu girilir.
     */
    public function setPackagingCriteriaCode(?string $PackagingCriteriaCode)
    {
        $this->values['PackagingCriteriaCode'] = $PackagingCriteriaCode;
        return $this;
    }

    /**
     * Ürünün taşımasına yönelik kanun ve kuralları belirten kod girilir.
     */
    public function setHazardousRegulationCode(?string $HazardousRegulationCode)
    {
        $this->values['HazardousRegulationCode'] = $HazardousRegulationCode;
        return $this;
    }

    /**
     * ABD Ulaştırma Bakanlığı tarafından belirlenen Tehlikeli Maddeler için Soluma Toksisitesi Tehlike Bölgesini belirten kod girilir.
     */
    public function setInhalationToxicityZoneCode(?string $InhalationToxicityZoneCode)
    {
        $this->values['InhalationToxicityZoneCode'] = $InhalationToxicityZoneCode;
        return $this;
    }

    /**
     * Tehlikeli kargonun taşınmasının yetki kodu girilir.
     */
    public function setTransportAuthorizationCode(?string $TransportAuthorizationCode)
    {
        $this->values['TransportAuthorizationCode'] = $TransportAuthorizationCode;
        return $this;
    }

    /**
     * Ürünü güvenle taşınması için gerekli maximum sıcaklık girilir.
     */
    public function setMaximumTemperature(?MaximumTemperature $MaximumTemperature)
    {
        $this->values['MaximumTemperature'] = $MaximumTemperature;
        return $this;
    }

    /**
     * Ürünü güvenle taşınması için gerekli minimum sıcaklık girilir.
     */
    public function setMinimumTemperature(?MinimumTemperature $MinimumTemperature)
    {
        $this->values['MinimumTemperature'] = $MinimumTemperature;
        return $this;
    }

}