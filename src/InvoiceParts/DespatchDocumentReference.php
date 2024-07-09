<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * @property string $ID
 * @property string $IssueDate
 */
class DespatchDocumentReference extends AbstractComplexType
{
    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

    public function setIssueDate(?string $IssueDate)
    {
        $this->values['IssueDate'] = $IssueDate;
        return $this;
    }
}