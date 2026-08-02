<?php

namespace Netliva\eInvoiceUBL\Abstracts;

use Netliva\eInvoiceUBL\Abstracts\AbstractAttrs;
use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * @property-read string $value
 * @property-write string|int|float|null $value  Setter ?string bildiriyor; PHP sayısal
 *   değerleri otomatik string'e çeviriyor ve XML çıktısı için istenen de budur.
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