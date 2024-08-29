<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Ödeme şeklinin girildiği elemandır.
 * @property string $PaymentMeansCode
 * @property string $PaymentDueDate
 * @property string $PaymentChannelCode
 * @property string $InstructionNote
 * @property PayerFinancialAccount $PayerFinancialAccount
 * @property PayeeFinancialAccount $PayeeFinancialAccount
 */
class PaymentMeans extends AbstractComplexType
{
    protected $values = [
        'PaymentMeansCode'      => null,
        'PaymentDueDate'        => null,
        'PaymentChannelCode'    => null,
        'InstructionNote'       => null,
        'PayerFinancialAccount' => null,
        'PayeeFinancialAccount' => null,
    ];

    /**
     * Ödeme şeklinin kodu girilir. Bu eleman için UN/EDIFACT 4461 Ödeme Çeşitleri Kod Listesi kullanılacaktır.
     */
    public function setPaymentMeansCode(?string $PaymentMeansCode)
    {
        $this->values['PaymentMeansCode'] = $PaymentMeansCode;
        return $this;
    }

    /**
     * Son ödeme günü yıl-ay-gün formatında girilir.
     */
    public function setPaymentDueDate(?string $PaymentDueDate)
    {
        $this->values['PaymentDueDate'] = $PaymentDueDate;
        return $this;
    }

    /**
     * Ödeme kanalı kodu girilir.
     */
    public function setPaymentChannelCode(?string $PaymentChannelCode)
    {
        $this->values['PaymentChannelCode'] = $PaymentChannelCode;
        return $this;
    }

    /**
     * Ödeme ile ilgili açıklamalar serbest metin olarak girilir.
     */
    public function setInstructionNote(?string $InstructionNote)
    {
        $this->values['InstructionNote'] = $InstructionNote;
        return $this;
    }

    /**
     * Ödeme yapan tarafın hesap bilgileri girilir.
     */
    public function setPayerFinancialAccount(?PayerFinancialAccount $PayerFinancialAccount)
    {
        $this->values['PayerFinancialAccount'] = $PayerFinancialAccount;
        return $this;
    }

    /**
     * Ödeme yapılacak hesap girilir.
     */
    public function setPayeeFinancialAccount(?PayeeFinancialAccount $PayeeFinancialAccount)
    {
        $this->values['PayeeFinancialAccount'] = $PayeeFinancialAccount;
        return $this;
    }
}