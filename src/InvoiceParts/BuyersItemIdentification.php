<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

/**
 * Alıcının mal/hizmete verdiği tanımlama bilgisi girilir.
 * @property string $ID
 */
class BuyersItemIdentification extends ItemIdentification
{

    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

}
