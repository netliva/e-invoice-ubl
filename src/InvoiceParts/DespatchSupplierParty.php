<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;


use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * @property Party $Party
 * @property DespatchContact $DespatchContact
 */

class DespatchSupplierParty extends AbstractComplexType
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