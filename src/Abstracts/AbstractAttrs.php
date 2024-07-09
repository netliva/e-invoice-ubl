<?php

namespace Netliva\eInvoiceUBL\Abstracts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * @property string $schemeID
 * @property string $unitCode
 * @property string $currencyID
 */
class AbstractAttrs extends AbstractComplexType
{
    public function setschemeID(?string $schemeID)
    {
        $this->values['schemeID'] = $schemeID;
        return $this;
    }
    public function setunitCode(?string $unitCode)
    {
        $this->values['unitCode'] = $unitCode;
        return $this;
    }
    public function setcurrencyID(?string $currencyID)
    {
        $this->values['currencyID'] = $currencyID;
        return $this;
    }

}