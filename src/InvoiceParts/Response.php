<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Yanıta ait detaylar bu elemanda gösterilecektir
 * @property string $ReferenceID
 * @property string $ResponseCode
 * @property string $Description
 */
class Response extends AbstractComplexType
{
    /**
     * Response elemanını tekil olarak tanımlayan numaradır.
     */
    public function setReferenceID(?string $ReferenceID)
    {
        $this->values['ReferenceID'] = $ReferenceID;
        return $this;
    }

    /**
     * YanıtKodu
     */
    public function setResponseCode(?string $ResponseCode)
    {
        $this->values['ResponseCode'] = $ResponseCode;
        return $this;
    }

    /**
     * Tanımlama. Yanıt ile ilgili açıklamalar bu elemana serbest metin olarak yazılabilecektir.
     */
    public function setDescription(?string $Description)
    {
        $this->values['Description'] = $Description;
        return $this;
    }
}