<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Bu elemana taşıma faz bilgileri yazılır.
 * @property string $ID
 * @property string $TransportModeCode
 * @property string $TransportMeansCode
 * @property string $TransitDirectionCode
 * @property string $Instructions
 * @property TransitPeriod $TransitPeriod
 * @property TransportMeans $TransportMeans
 * @property DriverPerson[] $DriverPerson
 */
class ShipmentStage extends AbstractComplexType
{
    /**
     * Aşama bilgisi numarasi girilir.
     */
    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

    /**
     *  Bu taşıma fazının hangi modda (hava, deniz, kara) gerçekleştiği bilgisi girilir.
     */
    public function setTransportModeCode(?string $TransportModeCode)
    {
        $this->values['TransportModeCode'] = $TransportModeCode;
        return $this;
    }

    /**
     * Bu taşıma fazının nasıl bir araç ile gerçekleştiği bilgisi girilir (örneğin, kamyon, tır, gemi)
     */
    public function setTransportMeansCode(?string $TransportMeansCode)
    {
        $this->values['TransportMeansCode'] = $TransportMeansCode;
        return $this;
    }

    /**
     * Bu fazda gerçekleştirilen taşımanın güzergahı kodlu olarak girilir.
     */
    public function setTransitDirectionCode(?string $TransitDirectionCode)
    {
        $this->values['TransitDirectionCode'] = $TransitDirectionCode;
        return $this;
    }

    /**
     * Fazla ilgili detay bilgi girilir (örneğin güzergah)
     */
    public function setInstructions(?string $Instructions)
    {
        $this->values['Instructions'] = $Instructions;
        return $this;
    }

    /**
     * Fazla ilgili detay bilgi girilir (örneğin güzergah)
     */
    public function setTransitPeriod(?TransitPeriod $TransitPeriod)
    {
        $this->values['TransitPeriod'] = $TransitPeriod;
        return $this;
    }

    /**
     * Taşımada kullanılan vasıta hakkında detay bilgi girilir (örneğin kamyon plaka numarası)
     */
    public function setTransportMeans(?TransportMeans $TransportMeans)
    {
        $this->values['TransportMeans'] = $TransportMeans;
        return $this;
    }

    /**
     * Şoför bilgileri girilir.
     */
    public function setDriverPerson(?array $DriverPerson)
    {
        $this->values['DriverPerson'] = $DriverPerson;
        return $this;
    }


}