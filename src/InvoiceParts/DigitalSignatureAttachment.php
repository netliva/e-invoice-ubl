<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Bu alana UBLExtensions alanına eklenen dijital imzaya referans eklenecektir.
 * @property ExternalReference $ExternalReference
 */
class DigitalSignatureAttachment extends AbstractComplexType
{
    /**
     * Referans Bilgisi
     */
    public function setExternalReference(?ExternalReference $ExternalReference)
    {
        $this->values['ExternalReference'] = $ExternalReference;
        return $this;
    }
}