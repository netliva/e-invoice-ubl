<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;


use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * @property string $Name
 */
class DespatchContact extends AbstractComplexType
{
    public function setName(?string $Name)
    {
        $this->values['Name'] = $Name;
        return $this;
    }
}