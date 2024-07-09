<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Fatura ile ilgili belgelerin kalemlerine referans eklemek için kullanılır.
 * @property string $ID
 * @property string $Amount
 * @property AllowanceCharge $AllowanceCharge
 */
class BillingReferenceLine extends AbstractComplexType
{
    /**
     * Kalem numarası girilir.
     */

    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }


    /**
     * Kalemin tutarı girilir
     */

    public function setAmount(?string $Amount)
    {
        $this->values['Amount'] = $Amount;
        return $this;
    }


    /**
     * Kaleme eğer indirim veya fiyat artırımı uygulanmışsa girilir.
     */

    public function setAllowanceCharge(?AllowanceCharge $AllowanceCharge)
    {
        $this->values['AllowanceCharge'] = $AllowanceCharge;
        return $this;
    }

}