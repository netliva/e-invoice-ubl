<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Ürün hakkında uluslararası standart veya ulusal kodlar
 * (örneğin, Sağlık Uygulama Tebliği) tabanlı sınıflandırma
 * bilgisi vermek istenmesi durumunda girilir.
 * @property array $ItemClassificationCode
 */
class CommodityClassification extends AbstractComplexType
{
    /**
     * Ürün hakkında uluslararası standart veya ulusal kodlar
     * (örneğin, Sağlık Uygulama Tebliği) tabanlı sınıflandırma
     * bilgisi vermek istenmesi durumunda girilir.
     *
     * <cbc:ItemClassificationCode listAgencyID="113" listID="UNSPSC">12344321</cbc:ItemClassificationCode>
     * [val=>"12344321", attrs=>[listAgencyID=>"113" listID=>"UNSPSC"]]
     */

    public function setItemClassificationCode(?array $ItemClassificationCode)
    {
        $this->values['ItemClassificationCode'] = $ItemClassificationCode;
        return $this;
    }

}