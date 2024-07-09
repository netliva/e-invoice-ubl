<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Siparişin kalemlerine referans atmak için kullanılır
 * @property string $LineID
 * @property string $SalesOrderLineID
 * @property string $UUID
 * @property string $LineStatusCode
 * @property OrderReference $OrderReference
 */
class OrderLineReference extends AbstractComplexType
{
    /**
     * Kalem numarası girilir.
     */
    public function setLineID(?string $LineID)
    {
        $this->values['LineID'] = $LineID;
        return $this;
    }

    /**
     * Alıcının verdiği kalem numarası verilir.
     */
    public function setSalesOrderLineID(?string $SalesOrderLineID)
    {
        $this->values['SalesOrderLineID'] = $SalesOrderLineID;
        return $this;
    }

    /**
     * Sipariş Kaleminin tekil numarası girilir.
     */
    public function setUUID(?string $UUID)
    {
        $this->values['UUID'] = $UUID;
        return $this;
    }

    /**
     * Kalemin durumu girilir.
     */
    public function setLineStatusCode(?string $LineStatusCode)
    {
        $this->values['LineStatusCode'] = $LineStatusCode;
        return $this;
    }

    /**
     * İlgili sipariş belgesine referans verilir.
     */
    public function setOrderReference(?OrderReference $OrderReference)
    {
        $this->values['OrderReference'] = $OrderReference;
        return $this;
    }
}