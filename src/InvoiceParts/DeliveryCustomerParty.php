<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * @property Party $Party
 * @property DeliveryContact $DeliveryContact
 */
class DeliveryCustomerParty extends AbstractComplexType
{
    public function setParty(?Party $Party)
    {
        $this->values['Party'] = $Party;
        return $this;
    }

    public function setDeliveryContact(?DeliveryContact $DeliveryContact)
    {
        $this->values['DeliveryContact'] = $DeliveryContact;
        return $this;
    }
}