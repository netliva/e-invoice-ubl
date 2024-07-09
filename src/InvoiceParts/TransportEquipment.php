<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Taşıma ekipmanı bilgileri girilir.
 * @property array $ID
 * @property string $TransportEquipmentTypeCode
 * @property string $Description
 */
class TransportEquipment extends AbstractComplexType
{
    /**
     * Tekil numarası girilir. Örneğin Dorse Plaka numarası.
     * [val => "string", attrs=> [schemeID="DORSEPLAKA"] ]
     */
    public function setID(?array $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

    /**
     * Ekipman tipi kodu girilir.
     */
    public function setTransportEquipmentTypeCode(?string $TransportEquipmentTypeCode)
    {
        $this->values['TransportEquipmentTypeCode'] = $TransportEquipmentTypeCode;
        return $this;
    }

    /**
     * Serbest metin açıklama girilir.
     */
    public function setDescription(?string $Description)
    {
        $this->values['Description'] = $Description;
        return $this;
    }
}