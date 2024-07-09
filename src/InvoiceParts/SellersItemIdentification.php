<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

/**
 * Satıcının mal/hizmete verdiği tanımlama bilgisi girilir.
 * @property string $ID
 */
class SellersItemIdentification extends ItemIdentification
{
    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }
}
