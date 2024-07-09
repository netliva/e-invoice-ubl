<?php

namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * @property string $SourceCurrencyCode
 * @property string $TargetCurrencyCode
 * @property string $CalculationRate
 */
class PricingExchangeRate extends AbstractComplexType
{
    /**
     * Kaynak para birim kodu girilir. Örnek: EUR
     */
    public function setSourceCurrencyCode(?string $SourceCurrencyCode)
    {
        $this->values['SourceCurrencyCode'] = $SourceCurrencyCode;
        return $this;
    }

    /**
     * Hedef para birim kodu girilir. Örnek: TRY
     */
    public function setTargetCurrencyCode(?string $TargetCurrencyCode)
    {
        $this->values['TargetCurrencyCode'] = $TargetCurrencyCode;
        return $this;
    }

    /**
     * Kur bilgisi girilir. Noktadan önce en fazla 15, noktadan sonra (kuruş) en fazla 4 haneli olmalıdır. Örnek: 25.5762
     */
    public function setCalculationRate(?string $CalculationRate)
    {
        $this->values['CalculationRate'] = $CalculationRate;
        return $this;
    }
}
