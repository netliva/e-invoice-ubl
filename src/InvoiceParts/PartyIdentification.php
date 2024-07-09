<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;
use Netliva\eInvoiceUBL\Abstracts\AbstractValueWithAttr;

/**
 * Tarafın vergi kimlik numarası veya TC kimlik numarası metin olarak girilir.
 * @property  AbstractValueWithAttr $ID
 */
class PartyIdentification extends AbstractComplexType
{

    public function setID(?AbstractValueWithAttr $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

}