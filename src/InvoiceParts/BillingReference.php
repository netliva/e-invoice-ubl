<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Fatura sürecindeki diğer ilgili fatura dokümanlarına referans vermek için kullanılır.
 * Örneğin iade faturalarında iade edilen faturaya ilişkin referans bilgisi bu elmanın altındaki “InvoiceDocumentReference”
 * elemanına eklenir. Ayrıca “CreditNote” ve “DebitNote” gibi yurtdışı ticarette iade işlemleri için sıkça
 * kullanılan belgelerede bu eleman aracılığı ile referans verilir
 * @property InvoiceDocumentReference $InvoiceDocumentReference
 * @property SelfBilledInvoiceDocumentReference $SelfBilledInvoiceDocumentReference
 * @property CreditNoteDocumentReference $CreditNoteDocumentReference
 * @property SelfBilledCreditNoteDocumentReference $SelfBilledCreditNoteDocumentReference
 * @property DebitNoteDocumentReference $DebitNoteDocumentReference
 * @property ReminderDocumentReference $ReminderDocumentReference
 * @property AdditionalDocumentReference $AdditionalDocumentReference
 * @property BillingReferenceLine $BillingReferenceLine
 */
class BillingReference extends AbstractComplexType
{
    /**
     * Önceki ilişkili fatura belgelerine referans bilgisi girilir. Örneğin iade edilen faturaya referans bu eleman ile verilir.
     */

    public function setInvoiceDocumentReference(?InvoiceDocumentReference $InvoiceDocumentReference)
    {
        $this->values['InvoiceDocumentReference'] = $InvoiceDocumentReference;
        return $this;
    }

    /**
     * Yurt dışında bir kurum kendine fatura kesebilmektedir. Bu eleman bu belgeye referans için kullanılmaktadır.
     */

    public function setSelfBilledInvoiceDocumentReference(?SelfBilledInvoiceDocumentReference $SelfBilledInvoiceDocumentReference)
    {
        $this->values['SelfBilledInvoiceDocumentReference'] = $SelfBilledInvoiceDocumentReference;
        return $this;
    }

    /**
     * İlgili CreditNote (Satıcı tarafından düzenlenip alıcının borcunu düşürmek için kullanılan belge) dokümanına referans bilgisini tutar.
     */

    public function setCreditNoteDocumentReference(?CreditNoteDocumentReference $CreditNoteDocumentReference)
    {
        $this->values['CreditNoteDocumentReference'] = $CreditNoteDocumentReference;
        return $this;
    }

    /**
     * Yurt dışında bir kurum kendine iade faturası kesebilmektedir. Bu eleman bu belgeye referans için kullanılmaktadır.
     */

    public function setSelfBilledCreditNoteDocumentReference(?SelfBilledCreditNoteDocumentReference $SelfBilledCreditNoteDocumentReference)
    {
        $this->values['SelfBilledCreditNoteDocumentReference'] = $SelfBilledCreditNoteDocumentReference;
        return $this;
    }

    /**
     * İlgili DebitNote (Alıcı tarafından düzenlenip alıcının borcunu düşürmek için kullanılan belge) dokümanına referans bilgisini tutar.
     */

    public function setDebitNoteDocumentReference(?DebitNoteDocumentReference $DebitNoteDocumentReference)
    {
        $this->values['DebitNoteDocumentReference'] = $DebitNoteDocumentReference;
        return $this;
    }

    /**
     * İlgili hatırlatma belgesine referans girilir.
     */

    public function setReminderDocumentReference(?ReminderDocumentReference $ReminderDocumentReference)
    {
        $this->values['ReminderDocumentReference'] = $ReminderDocumentReference;
        return $this;
    }

    /**
     * Diğer başka dokümanlara referans bilgisi girilebilir.
     */

    public function setAdditionalDocumentReference(?AdditionalDocumentReference $AdditionalDocumentReference)
    {
        $this->values['AdditionalDocumentReference'] = $AdditionalDocumentReference;
        return $this;
    }

    /**
     * Detaylı olarak belli bir kaleme referans atmak istenirse kullanılır.
     */

    public function setBillingReferenceLine(?BillingReferenceLine $BillingReferenceLine)
    {
        $this->values['BillingReferenceLine'] = $BillingReferenceLine;
        return $this;
    }
}