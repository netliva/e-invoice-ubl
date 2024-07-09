<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Belgelerde referans verilmek istenen referansların ya da belgelere eklenmek istenen dokümanların yer aldığı elemandır.
 * @property ExternalReference $ExternalReference
 * @property EmbeddedDocumentBinaryObject $EmbeddedDocumentBinaryObject
 */
class Attachment extends AbstractComplexType
{
    /**
     * İlişkilendirilmek istenen dokümanın URI formatında referansını tutar.
     * Eğer Attachment elemanı, bir “DigitalSignatureAttachment” ise (diğer bir deyişle Signature Elemanının içerisine yeralıyorsa)
     * External Reference zorunlu bir elemandır.
     */
    public function setExternalReference(?ExternalReference $ExternalReference)
    {
        $this->values['ExternalReference'] = $ExternalReference;
        return $this;
    }


    /**
     * EmbeddedDocumentBinaryObject: İlişiklendirilmiş dokümanı base64Encoded formatında tutar.
     */
    public function setEmbeddedDocumentBinaryObject(?EmbeddedDocumentBinaryObject $EmbeddedDocumentBinaryObject)
    {
        $this->values['EmbeddedDocumentBinaryObject'] = $EmbeddedDocumentBinaryObject;
        return $this;
    }


}