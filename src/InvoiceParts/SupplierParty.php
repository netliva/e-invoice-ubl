<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Satıcı bilgilerini tutan elemandır
 * @property Party $Party
 * @property DespatchContact $DespatchContact
 */
class SupplierParty extends AbstractComplexType
{
    public function setParty(?Party $Party)
    {
        $this->values['Party'] = $Party;
        return $this;
    }

    public function setDespatchContact(?DespatchContact $DespatchContact)
    {
        $this->values['DespatchContact'] = $DespatchContact;
        return $this;
    }


}