<?php

namespace Netliva\eInvoiceUBL\Abstracts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Kur bilgileri ve kurun tarihi girilir
 * @property string $SourceCurrencyCode
 * @property string $TargetCurrencyCode
 * @property float $CalculationRate
 * @property string $Date
 */
class ExchangeRate extends AbstractComplexType
{
    /**
     * Kaynak Para Birimi Kodu.
     */
    public function setSourceCurrencyCode (?string $SourceCurrencyCode)
    {
        $this->values['SourceCurrencyCode'] = $SourceCurrencyCode;

        return $this;
    }

    /**
     * Hedef Para Birimi Kodu.
     */
    public function setTargetCurrencyCode (?string $TargetCurrencyCode)
    {
        $this->values['TargetCurrencyCode'] = $TargetCurrencyCode;

        return $this;
    }

    /**
     * Döviz kuru girilir.
     */
    public function setCalculationRate (?float $CalculationRate)
    {
        $this->values['CalculationRate'] = $CalculationRate;

        return $this;
    }

    /**
     * Kurun tarihi yıl-ay-gün şeklinde girilir.
     */
    public function setDate (?string $Date)
    {
        $this->values['Date'] = $Date;

        return $this;
    }
}