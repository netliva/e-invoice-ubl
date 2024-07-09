<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Bir belgenin belli bir kalemine yanıt verilirken bu eleman kullanılabilecektir.
 * @property LineReference $LineReference
 * @property Response $Response
 */
class LineResponse extends AbstractComplexType
{
    /**
     * Kalem Bilgisi
     */
    public function setLineReference(?LineReference $LineReference)
    {
        $this->values['LineReference'] = $LineReference;
        return $this;
    }

    /**
     * Yanıt
     */
    public function setResponse(?Response $Response)
    {
        $this->values['Response'] = $Response;
        return $this;
    }
}