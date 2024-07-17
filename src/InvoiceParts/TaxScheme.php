<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Bu eleman aracılığıyla vergi dairesi ile ilgili bilgiler verilebileceği gibi vergi ile ilgili bilgiler de verilebilir.
 * Bu elemanın farklı kullanımları için ilgili belge açıklamalarına bakınız.
 * @property string $ID
 * @property string $Name
 * @property string $TaxTypeCode
 */
class TaxScheme extends AbstractComplexType
{
    protected $values = [
        'ID'          => null,
        'Name'        => null,
        'TaxTypeCode' => null,
    ];
    /**
     * Vergilendirme şemasının ID bilgisi girilir.
     */
    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

    /**
     * Bu eleman “Party” elemanı içerisinde kullanıldığında vergi dairesi adını içermektedir.
     */
    public function setName(?string $Name)
    {
        $this->values['Name'] = $Name;
        return $this;
    }

    /**
     * Vergi Tipi Kodu girilecektir.
     */
    public function setTaxTypeCode(?string $TaxTypeCode)
    {
        $this->values['TaxTypeCode'] = $TaxTypeCode;
        return $this;
    }
}