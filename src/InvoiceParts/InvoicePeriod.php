<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * @property string $StartDate
 * @property string $EndDate
 */
class InvoicePeriod extends AbstractComplexType
{
    /*
     * yyyy-aa-yy formatında
     */
    public function setStartDate(?string $StartDate)
    {
        $this->values['StartDate'] = $StartDate;
        return $this;
    }

    /*
     * yyyy-aa-yy formatında
     */
    public function setEndDate(?string $EndDate)
    {
        $this->values['EndDate'] = $EndDate;
        return $this;
    }
}