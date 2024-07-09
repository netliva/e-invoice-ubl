<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;
use Netliva\eInvoiceUBL\Abstracts\AbstractValueWithAttr;

/**
 * Mal/hizmetin birim fiyatı girilir
 * @property AbstractValueWithAttr $PriceAmount
 */
class Price extends AbstractComplexType
{
    /*
     * [val => "string", attrs=> [currencyID=>"TRY"] ]
     */
    public function setPriceAmount(?AbstractValueWithAttr $PriceAmount)
    {
        $this->values['PriceAmount'] = $PriceAmount;
        return $this;
    }
}