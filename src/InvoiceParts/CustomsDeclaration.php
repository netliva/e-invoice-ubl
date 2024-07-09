<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Ürün hakkında gümrük numaralandırma bilgisi girilir.
 * @property string $ID
 * @property IssuerParty $IssuerParty
 */
class CustomsDeclaration extends AbstractComplexType
{
    /**
     * Ürünün ilgili gümrük numarası girilir
     */
    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

    /**
     * Numaralandırmayı yapan kurum bilgisi girilir
     */
    public function setIssuerParty(?IssuerParty $IssuerParty)
    {
        $this->values['IssuerParty'] = $IssuerParty;
        return $this;
    }

}