<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Deniz taşımacılığındaki gemi bilgileri girilir.
 * @property string $VesselID
 * @property string $VesselName
 * @property string $RadioCallSignID
 * @property string $ShipsRequirements
 * @property array $GrossTonnageMeasure
 * @property array $NetTonnageMeasure
 * @property RegistryCertificateDocumentReference $RegistryCertificateDocumentReference
 * @property RegistryPortLocation $RegistryPortLocation
 */
class MaritimeTransport extends AbstractComplexType
{
    /**
     * Geminin varsa IMO ve MMSI numarası girilir.
     */
    public function setVesselID(?string $VesselID)
    {
        $this->values['VesselID'] = $VesselID;
        return $this;
    }

    /**
     * Geminin adı girilir.
     */
    public function setVesselName(?string $VesselName)
    {
        $this->values['VesselName'] = $VesselName;
        return $this;
    }

    /**
     * Geminin radyo çağrı adı girilir.
     */
    public function setRadioCallSignID(?string $RadioCallSignID)
    {
        $this->values['RadioCallSignID'] = $RadioCallSignID;
        return $this;
    }

    /**
     * Geminin ihtiyaçları bu elemana girilir.
     */
    public function setShipsRequirements(?string $ShipsRequirements)
    {
        $this->values['ShipsRequirements'] = $ShipsRequirements;
        return $this;
    }

    /**
     * Geminin brüt ağırlığı girilir.
     * [val => "string", attrs=> [] ]
     */
    public function setGrossTonnageMeasure(?array $GrossTonnageMeasure)
    {
        $this->values['GrossTonnageMeasure'] = $GrossTonnageMeasure;
        return $this;
    }

    /**
     * Geminin net ağırlığı girilir.
     * [val => "string", attrs=> [] ]
     */
    public function setNetTonnageMeasure(?array $NetTonnageMeasure)
    {
        $this->values['NetTonnageMeasure'] = $NetTonnageMeasure;
        return $this;
    }

    /**
     * Geminin kayıt dokümanı referansı girilir.
     */
    public function setRegistryCertificateDocumentReference(?RegistryCertificateDocumentReference $RegistryCertificateDocumentReference)
    {
        $this->values['RegistryCertificateDocumentReference'] = $RegistryCertificateDocumentReference;
        return $this;
    }

    /**
     * Geminin kayıt limanı bilgisi girilir.
     */
    public function setRegistryPortLocation(?RegistryPortLocation $RegistryPortLocation)
    {
        $this->values['RegistryPortLocation'] = $RegistryPortLocation;
        return $this;
    }
}