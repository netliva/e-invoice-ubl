<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Alıcı tarafın bilgilerini tutan elemandır.
 * @property Party $Party
 * @property DeliveryContact $DeliveryContact
 */
class CustomerParty extends AbstractComplexType
{
    /**
     * Alıcı tarafın bilgilerini tutan elemandır.
     */
    public function setParty(?Party $Party)
    {
        $this->values['Party'] = $Party;
        return $this;
    }

    /**
     * ReceiptAdvice içerisinde kullanımında teslim alan bilgisi girilebilir.
     */
    public function setDeliveryContact(?DeliveryContact $DeliveryContact)
    {
        $this->values['DeliveryContact'] = $DeliveryContact;
        return $this;
    }
}