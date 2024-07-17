<?php

namespace Netliva\eInvoiceUBL\Abstracts;

use Netliva\eInvoiceUBL\Abstracts\AbstractAttrs;
use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * @property float $value
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