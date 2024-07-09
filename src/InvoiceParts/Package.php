<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Taşıma sırasındaki paket bilgisi girilir.
 * @property string $ID
 * @property string $Quantity
 * @property bool $ReturnableMaterialIndicator
 * @property string $PackageLevelCode
 * @property string $PackagingTypeCode
 * @property string $PackagingMaterial
 * @property ContainedPackage $ContainedPackage
 * @property GoodsItem $GoodsItem
 * @property MeasurementDimension $MeasurementDimension
 */
class Package extends AbstractComplexType
{
    /**
     * Paket numarası girilir.
     */
    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

    /**
     * Paket adedi girilir.
     */
    public function setQuantity(?string $Quantity)
    {
        $this->values['Quantity'] = $Quantity;
        return $this;
    }

    /**
     * Paket materyali geri dönüşümlü olup olmadığını belirtir.
     */
    public function setReturnableMaterialIndicator(?bool $ReturnableMaterialIndicator)
    {
        $this->values['ReturnableMaterialIndicator'] = $ReturnableMaterialIndicator;
        return $this;
    }

    /**
     * Paketleme seviyesini belirtir.
     */
    public function setPackageLevelCode(?string $PackageLevelCode)
    {
        $this->values['PackageLevelCode'] = $PackageLevelCode;
        return $this;
    }

    /**
     * Paketleme tipini belirtir.
     */
    public function setPackagingTypeCode(?string $PackagingTypeCode)
    {
        $this->values['PackagingTypeCode'] = $PackagingTypeCode;
        return $this;
    }

    /**
     * Paketleme materyalini belirtir.
     */
    public function setPackagingMaterial(?string $PackagingMaterial)
    {
        $this->values['PackagingMaterial'] = $PackagingMaterial;
        return $this;
    }

    /**
     * İçerdiği diğer paketler girilir.
     */
    public function setContainedPackage(?ContainedPackage $ContainedPackage)
    {
        $this->values['ContainedPackage'] = $ContainedPackage;
        return $this;
    }

    /**
     * İçerdiği ürünler girilir.
     */
    public function setGoodsItem(?GoodsItem $GoodsItem)
    {
        $this->values['GoodsItem'] = $GoodsItem;
        return $this;
    }

    /**
     * Paket boyutları girilir.
     */
    public function setMeasurementDimension(?MeasurementDimension $MeasurementDimension)
    {
        $this->values['MeasurementDimension'] = $MeasurementDimension;
        return $this;
    }
}