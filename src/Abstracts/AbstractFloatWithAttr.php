<?php

namespace Netliva\eInvoiceUBL\Abstracts;

use Netliva\eInvoiceUBL\Abstracts\AbstractAttrs;
use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * @property-read float $value
 * @property-write float|int|string|null $value  Setter ?float bildiriyor; PHP sayısal
 *   string'leri otomatik float'a çeviriyor.
 * @property AbstractAttrs $attrs
 */
class AbstractFloatWithAttr extends AbstractComplexType
{

    public function setvalue(?float $value)
    {
        $this->values['value'] = $value;
        return $this;
    }

    public function setattrs(AbstractAttrs $attrs)
    {
        $this->values['attrs'] = $attrs;
        return $this;
    }

}