<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;


use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * @property string $SourceCurrencyCode
 * @property string $TargetCurrencyCode
 * @property string $CalculationRate
 */
class PaymentAlternativeExchangeRate extends AbstractComplexType
{

    public function setSourceCurrencyCode(?string $SourceCurrencyCode)
    {
        $this->values['SourceCurrencyCode'] = $SourceCurrencyCode;
        return $this;
    }

    public function setTargetCurrencyCode(?string $TargetCurrencyCode)
    {
        $this->values['TargetCurrencyCode'] = $TargetCurrencyCode;
        return $this;
    }

    public function setCalculationRate(?string $CalculationRate)
    {
        $this->values['CalculationRate'] = $CalculationRate;
        return $this;
    }
}