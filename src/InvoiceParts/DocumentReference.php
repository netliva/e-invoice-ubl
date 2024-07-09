<?php

namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Referans verilen ya da eklenen belgelere ilişkin bilgiler girilecektir
 *
 * @property string $ID
 * @property string $IssueDate
 * @property string $DocumentTypeCode
 * @property string $DocumentType
 * @property string $DocumentDescription
 * @property Attachment $Attachment
 * @property ValidityPeriod $ValidityPeriod
 * @property IssuerParty $IssuerParty
 */
class DocumentReference extends AbstractComplexType
{
    /**
     * Referans verilen veya eklenen belgenin sıra numarası girilecektir.
     */
    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

    /**
     * Belgenin düzenlenme tarihi girilecektir.
     */
    public function setIssueDate(?string $IssueDate)
    {
        $this->values['IssueDate'] = $IssueDate;
        return $this;
    }

    /**
     * Bu eleman belge seviyesinde kullanılmayacaktır. Kullanım alanı sistem seviyesinde dönen uygulama yanıtı (ApplicationResponse) belgesinin içindedir.
     */
    public function setDocumentTypeCode(?string $DocumentTypeCode)
    {
        $this->values['DocumentTypeCode'] = $DocumentTypeCode;
        return $this;
    }

    /**
     * Referans verilen veya eklenen belgenin tipi girilecektir. Örnek olarak “XSLT”, “REKLAM”, “PROFORMA”,  “GÖRÜŞME DETAYI” ve benzeri değerler girilebilir.
     */
    public function setDocumentType(?string $DocumentType)
    {
        $this->values['DocumentType'] = $DocumentType;
        return $this;
    }

    /**
     * Referans verilen ya da eklenen belgelere ilişkin serbest metin açıklaması girilebilir.
     */
    public function setDocumentDescription(?string $DocumentDescription)
    {
        $this->values['DocumentDescription'] = $DocumentDescription;
        return $this;
    }

    /**
     * Ek belgeler.
     */
    public function setAttachment(?Attachment $Attachment)
    {
        $this->values['Attachment'] = $Attachment;
        return $this;
    }

    /**
     * Referans verilen ya da eklenen belgenin geçerlilik süresi girilebilir.
     */
    public function setValidityPeriod(?ValidityPeriod $ValidityPeriod)
    {
        $this->values['ValidityPeriod'] = $ValidityPeriod;
        return $this;
    }

    /**
     * Referans verilen ya da eklenen belgeyi yayınlayan taraf bilgisi girilebilir.
     */
    public function setIssuerParty(?IssuerParty $IssuerParty)
    {
        $this->values['IssuerParty'] = $IssuerParty;
        return $this;
    }
}
