<?php

namespace Netliva\eInvoiceUBL\Abstracts;

use Netliva\eInvoiceUBL\Abstracts\AbstractAttrs;
use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * @property string $value
 * @property AbstractAttrs $attrs
 */
class AbstractValueWithAttr extends AbstractComplexType
{

    public function setvalue(?string $value)
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