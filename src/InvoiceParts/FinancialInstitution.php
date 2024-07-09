<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Banka bilgisi girilebilir.
 * @property string $Name
 */
class FinancialInstitution extends AbstractComplexType
{
    /**
     * Banka ismi girilebilir.
     */
    public function setName(?string $Name)
    {
        $this->values['Name'] = $Name;
        return $this;
    }
}