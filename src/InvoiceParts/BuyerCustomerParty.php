<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * @property Party $Party
 */
class BuyerCustomerParty extends AbstractComplexType
{

    public function setParty(?Party $Party)
    {
        $this->values['Party'] = $Party;
        return $this;
    }

}