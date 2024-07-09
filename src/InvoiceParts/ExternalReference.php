<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 *  İlişkilendirilmek istenen dokümanın URI formatında referansını tutar.
 * @property string $URI
 */
class ExternalReference extends AbstractComplexType
{
    /**
     * Dökümanın URI adresi.
     */
    public function setURI(?string $URI)
    {
        $this->values['URI'] = $URI;
        return $this;
    }
}