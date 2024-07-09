<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Her türlü alternatif iletişim kanalının tanımlanmasında kullanılacaktır.
 * @property string $ChannelCode
 * @property string $Channel
 * @property string $Value
 */
class Communication extends AbstractComplexType
{
    /**
     * Bu eleman için UN/EDIFACT 3155 İletişim Numarası Kod Listesi kullanılmalıdır. Bknz. Kod Listeleri.
     */

    public function setChannelCode(?string $ChannelCode)
    {
        $this->values['ChannelCode'] = $ChannelCode;
        return $this;
    }


    /**
     * Bu eleman metin olarak kanal adı için kullanılacaktır
     */

    public function setChannel(?string $Channel)
    {
        $this->values['Channel'] = $Channel;
        return $this;
    }


    /**
     * Bu eleman iletişim adresini metin olarak tutar.
     */

    public function setValue(?string $Value)
    {
        $this->values['Value'] = $Value;
        return $this;
    }

}