<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Belgelere ilişkin kabul, red ve diğer mesajlar bu elemana girilecektir.
 * @property Response $Response
 * @property DocumentReference $DocumentReference
 * @property LineResponse $LineResponse
 */
class DocumentResponse extends AbstractComplexType
{
    /**
     * Yanıt
     */
    public function setResponse(?Response $Response)
    {
        $this->values['Response'] = $Response;
        return $this;
    }

    /**
     * Yanıt verilen belgeye referans bilgisi içermektedir.
     */
    public function setDocumentReference(?DocumentReference $DocumentReference)
    {
        $this->values['DocumentReference'] = $DocumentReference;
        return $this;
    }

    /**
     * Satıra yanıt bilgilerini içerir. Dokümanın belli bir kalemi ile ilgili red ve düzeltme talebi olma durumunda
     * cbc:LineID elemanı ilgili kalem numarasını içerecektir.
     */
    public function setLineResponse(?LineResponse $LineResponse)
    {
        $this->values['LineResponse'] = $LineResponse;
        return $this;
    }

}