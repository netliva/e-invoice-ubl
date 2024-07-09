<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Kalem ile ilgili tanımlayıcı bilgilere bu elemanda yer verilecektir.
 * @property string $LineID
 * @property string $LineStatusCode
 * @property DocumentReference $DocumentReference
 */
class LineReference extends AbstractComplexType
{
    /**
     * Kalem Numarası. Kalemin sıra numarası girilecektir.
     */
    public function setLineID(?string $LineID)
    {
        $this->values['LineID'] = $LineID;
        return $this;
    }

    /**
     * Kalemin durum bilgisi girilebilecektir.
     */
    public function setLineStatusCode(?string $LineStatusCode)
    {
        $this->values['LineStatusCode'] = $LineStatusCode;
        return $this;
    }

    /**
     * Referans Belge
     */
    public function setDocumentReference(?DocumentReference $DocumentReference)
    {
        $this->values['DocumentReference'] = $DocumentReference;
        return $this;
    }
}