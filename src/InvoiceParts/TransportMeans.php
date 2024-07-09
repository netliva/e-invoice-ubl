<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Taşıma şekli bilgileri girilir.
 * @property string $JourneyID
 * @property string $RegistrationNationalityID
 * @property string $RegistrationNationality
 * @property string $DirectionCode
 * @property string $TransportMeansTypeCode
 * @property string $TradeServiceCode
 * @property Stowage $Stowage
 * @property AirTransport $AirTransport
 * @property RoadTransport $RoadTransport
 * @property RailTransport $RailTransport
 * @property MaritimeTransport $MaritimeTransport
 * @property OwnerParty $OwnerParty
 * @property MeasurementDimension $MeasurementDimension
 */
class TransportMeans extends AbstractComplexType
{
    /**
     * Seyahat/Sefer numarası girilir.
     */
    public function setJourneyID(?string $JourneyID)
    {
        $this->values['JourneyID'] = $JourneyID;
        return $this;
    }

    /**
     * Kayıtlı olduğu ülke kodlu olarak girilir.
     */
    public function setRegistrationNationalityID(?string $RegistrationNationalityID)
    {
        $this->values['RegistrationNationalityID'] = $RegistrationNationalityID;
        return $this;
    }

    /**
     * Kayıtlı olduğu ülke serbest metin olarak girilir.
     */
    public function setRegistrationNationality(?string $RegistrationNationality)
    {
        $this->values['RegistrationNationality'] = $RegistrationNationality;
        return $this;
    }

    /**
     * Yön bilgisi kodlu olarak girilir.
     */
    public function setDirectionCode(?string $DirectionCode)
    {
        $this->values['DirectionCode'] = $DirectionCode;
        return $this;
    }

    /**
     * Taşıma şekli kodlu olarak girilir.
     */
    public function setTransportMeansTypeCode(?string $TransportMeansTypeCode)
    {
        $this->values['TransportMeansTypeCode'] = $TransportMeansTypeCode;
        return $this;
    }

    /**
     * Ticaret servisi kodlu olarak girilir.
     */
    public function setTradeServiceCode(?string $TradeServiceCode)
    {
        $this->values['TradeServiceCode'] = $TradeServiceCode;
        return $this;
    }

    /**
     * İstifleme bilgisi kodlu olarak girilir.
     */
    public function setStowage(?Stowage $Stowage)
    {
        $this->values['Stowage'] = $Stowage;
        return $this;
    }

    /**
     * Hava taşımacılığı bilgisi girilir.
     */
    public function setAirTransport(?AirTransport $AirTransport)
    {
        $this->values['AirTransport'] = $AirTransport;
        return $this;
    }

    /**
     * Karayolu taşımacılığı bilgisi girilir.
     */
    public function setRoadTransport(?RoadTransport $RoadTransport)
    {
        $this->values['RoadTransport'] = $RoadTransport;
        return $this;
    }

    /**
     * Demiryolu taşımacılığı bilgisi girilir.
     */
    public function setRailTransport(?RailTransport $RailTransport)
    {
        $this->values['RailTransport'] = $RailTransport;
        return $this;
    }

    /**
     * Deniz taşımacılığı bilgisi girilir.
     */
    public function setMaritimeTransport(?MaritimeTransport $MaritimeTransport)
    {
        $this->values['MaritimeTransport'] = $MaritimeTransport;
        return $this;
    }

    /**
     * Bu araca sahip olan taraf bilgisi girilir.
     */
    public function setOwnerParty(?OwnerParty $OwnerParty)
    {
        $this->values['OwnerParty'] = $OwnerParty;
        return $this;
    }

    /**
     * Ölçüm bilgileri girilir.
     */
    public function setMeasurementDimension(?MeasurementDimension $MeasurementDimension)
    {
        $this->values['MeasurementDimension'] = $MeasurementDimension;
        return $this;
    }
}