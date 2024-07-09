<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Bu elemana belgelerde kullanılan mali mühür/elektronik imza ile ilgili bilgiler girilir.
 * @property string $ID
 * @property SignatoryParty $SignatoryParty
 * @property DigitalSignatureAttachment $DigitalSignatureAttachment
 */
class Signature extends AbstractComplexType
{
    /**
     * Bu alana dokumana eklenecek elektronik imza ile ilgili bir referans numarası verilecektir.
     */
    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

    /**
     * Bu alana dokumanı imzalayan imza sahibinin bilgileri eklenecektir.
     */
    public function setSignatoryParty(?SignatoryParty $SignatoryParty)
    {
        $this->values['SignatoryParty'] = $SignatoryParty;
        return $this;
    }

    /**
     * Bu alana UBLExtensions alanına eklenen dijital imzaya referans eklenecektir.
     */
    public function setDigitalSignatureAttachment(?DigitalSignatureAttachment $DigitalSignatureAttachment)
    {
        $this->values['DigitalSignatureAttachment'] = $DigitalSignatureAttachment;
        return $this;
    }
}