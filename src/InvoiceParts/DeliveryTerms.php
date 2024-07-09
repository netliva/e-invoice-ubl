<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Teslimat koşulları girilir.
 * @property string $ID
 * @property string $SpecialTerms
 * @property float $Amount
 */
class DeliveryTerms extends AbstractComplexType
{
    /**
     * Teslim koşulları girilir (örneğin CIF, FOB).
     */
    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

    /**
     * Teslimat koşulları serbest metin olarak girilir.
     */
    public function setSpecialTerms(?string $SpecialTerms)
    {
        $this->values['SpecialTerms'] = $SpecialTerms;
        return $this;
    }

    /**
     * Teslimat koşullarının kapsadığı tutar girilebilir
     */
    public function setAmount(?float $Amount)
    {
        $this->values['Amount'] = $Amount;
        return $this;
    }
}