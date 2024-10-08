<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;
use Netliva\eInvoiceUBL\Abstracts\AbstractValueWithAttr;

/**
 * Ödeme koşullarının girildiği elemandır
 * @property array $Note
 * @property int $PenaltySurchargePercent
 * @property array $Amount
 * @property AbstractValueWithAttr $PenaltyAmount
 * @property string $PaymentDueDate
 * @property SettlementPeriod $SettlementPeriod
 */
class PaymentTerms extends AbstractComplexType
{
    protected $values = [
        "Note"                    => null,
        'PenaltySurchargePercent' => null,
        'Amount'                  => null,
        "PenaltyAmount"           => null,
        "PaymentDueDate"          => null,
        "SettlementPeriod"        => null,
    ];


    /**
     * Ödeme koşulları ile ilgili açıklama serbest metin olarak girilir.
     */
    public function setNote(?array $Note)
    {
        $this->values['Note'] = $Note;
        return $this;
    }

    /**
     * Ödemenin gecikmesi durumunda uygulanacak ceza oranı numerik olarak girilir.
     */
    public function setPenaltySurchargePercent(?int $PenaltySurchargePercent)
    {
        $this->values['PenaltySurchargePercent'] = $PenaltySurchargePercent;
        return $this;
    }

    /**
     * Ödeme tutarı numerik olarak girilebilir.
     * [val => "string", attrs=> [] ]
     */
    public function setAmount(?array $Amount)
    {
        $this->values['Amount'] = $Amount;
        return $this;
    }

    /**
     * Ödemenin gecikmesi durumunda uygulanacak ceza tutarı numerik olarak girilir.
     * [val => "string", attrs=> [] ]
     */
    public function setPenaltyAmount(?AbstractValueWithAttr $PenaltyAmount)
    {
        $this->values['PenaltyAmount'] = $PenaltyAmount;
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
     * Ödeme dönemi girilir.
     */
    public function setSettlementPeriod(?SettlementPeriod $SettlementPeriod)
    {
        $this->values['SettlementPeriod'] = $SettlementPeriod;
        return $this;
    }
}