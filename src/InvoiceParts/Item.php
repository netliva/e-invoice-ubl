<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Mal/Hizmet bilgilerinin girildiği bölümdür.
 * @property string $Description
 * @property string $Name
 * @property string $Keyword
 * @property string $BrandName
 * @property string $ModelName
 * @property BuyersItemIdentification $BuyersItemIdentification
 * @property SellersItemIdentification $SellersItemIdentification
 * @property ManufacturersItemIdentification $ManufacturersItemIdentification
 * @property AdditionalItemIdentification $AdditionalItemIdentification
 * @property OriginCountry $OriginCountry
 * @property CommodityClassification $CommodityClassification
 * @property ItemInstance $ItemInstance
 */
class Item extends AbstractComplexType
{
    /**
     * Mal/Hizmet hakkında açıklama serbest metin olarak girilir.
     */
    public function setDescription(?string $Description)
    {
        $this->values['Description'] = $Description;
        return $this;
    }

    /**
     * Mal/hizmet adı serbest metin olarak girilir.
     */
    public function setName(?string $Name)
    {
        $this->values['Name'] = $Name;
        return $this;
    }

    /**
     * Mal/hizmet ile ilgili anahtar kelimeler veya fatura satır tipi bilgileri girilebilir.
     */
    public function setKeyword(?string $Keyword)
    {
        $this->values['Keyword'] = $Keyword;
        return $this;
    }

    /**
     * Mal/hizmet marka adı serbest metin olarak girilir.
     */
    public function setBrandName(?string $BrandName)
    {
        $this->values['BrandName'] = $BrandName;
        return $this;
    }

    /**
     * Mal/hizmet model adı serbest metin olarak girilir.
     */
    public function setModelName(?string $ModelName)
    {
        $this->values['ModelName'] = $ModelName;
        return $this;
    }

    /**
     * Alıcının mal/hizmete verdiği tanımlama bilgisi girilir.
     */
    public function setBuyersItemIdentification(?BuyersItemIdentification $BuyersItemIdentification)
    {
        $this->values['BuyersItemIdentification'] = $BuyersItemIdentification;
        return $this;
    }

    /**
     * Satıcının mal/hizmete verdiği tanımlama bilgisi girilir.
     */
    public function setSellersItemIdentification(?SellersItemIdentification $SellersItemIdentification)
    {
        $this->values['SellersItemIdentification'] = $SellersItemIdentification;
        return $this;
    }

    /**
     * Üreticinin mal/hizmete verdiği tanımlama bilgisi girilir. Araç Tescil Faturalarında Şasi Numarası bu elemana girilecektir.
     */
    public function setManufacturersItemIdentification(?ManufacturersItemIdentification $ManufacturersItemIdentification)
    {
        $this->values['ManufacturersItemIdentification'] = $ManufacturersItemIdentification;
        return $this;
    }

    /**
     * Mal/hizmet için diğer kullanılabilecek sınıflandırma bilgileri girilebilir.
     */
    public function setAdditionalItemIdentification(?AdditionalItemIdentification $AdditionalItemIdentification)
    {
        $this->values['AdditionalItemIdentification'] = $AdditionalItemIdentification;
        return $this;
    }

    /**
     * Menşei bilgisi girilebilir.
     */
    public function setOriginCountry(?OriginCountry $OriginCountry)
    {
        $this->values['OriginCountry'] = $OriginCountry;
        return $this;
    }

    /**
     * Emtia sınıflandırma bilgisi girilir.
     */
    public function setCommodityClassification(?CommodityClassification $CommodityClassification)
    {
        $this->values['CommodityClassification'] = $CommodityClassification;
        return $this;
    }

    /**
     * Parti lot bilgisi, ürün takip numarası, üretim zamanı, seri numarası ve kayıt numarası gibi bilgiler girilebilir.
     */
    public function setItemInstance(?ItemInstance $ItemInstance)
    {
        $this->values['ItemInstance'] = $ItemInstance;
        return $this;
    }
}