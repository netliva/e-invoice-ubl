<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Parti lot bilgisi, ürün takip numarası, üretim zamanı, seri numarası ve kayıt numarası gibi bilgiler girilebilir.
 * @property string $ProductTraceID
 * @property string $ManufacturedDate
 * @property string $ManufacturedTime
 * @property string $BestBeforeDate
 * @property string $RegistrationID
 * @property string $SerialID
 * @property string $AdditionalItemProperty
 * @property string $LotIdentification
 */
class ItemInstance extends AbstractComplexType
{
    /**
     * Ürün İz Numarası girilebilir.
     */
    public function setProductTraceID(?string $ProductTraceID)
    {
        $this->values['ProductTraceID'] = $ProductTraceID;
        return $this;
    }

    /**
     * Üretim tarihi girilir.
     */
    public function setManufacturedDate(?string $ManufacturedDate)
    {
        $this->values['ManufacturedDate'] = $ManufacturedDate;
        return $this;
    }

    /**
     * Üretim zamanı girilir.
     */
    public function setManufacturedTime(?string $ManufacturedTime)
    {
        $this->values['ManufacturedTime'] = $ManufacturedTime;
        return $this;
    }

    /**
     * Son kullanım tarihi girilir.
     */
    public function setBestBeforeDate(?string $BestBeforeDate)
    {
        $this->values['BestBeforeDate'] = $BestBeforeDate;
        return $this;
    }

    /**
     * Kayıt numarası girilir.
     */
    public function setRegistrationID(?string $RegistrationID)
    {
        $this->values['RegistrationID'] = $RegistrationID;
        return $this;
    }

    /**
     * Seri numarası girilir.
     */
    public function setSerialID(?string $SerialID)
    {
        $this->values['SerialID'] = $SerialID;
        return $this;
    }

    /**
     * Ürün hakkında başka özellikler var ise girilir.
     */
    public function setAdditionalItemProperty(?string $AdditionalItemProperty)
    {
        $this->values['AdditionalItemProperty'] = $AdditionalItemProperty;
        return $this;
    }

    /**
     * Lot numarası girilir
     */
    public function setLotIdentification(?string $LotIdentification)
    {
        $this->values['LotIdentification'] = $LotIdentification;
        return $this;
    }
}