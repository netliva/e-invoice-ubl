<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Siparişe ait bilgiler girilecektir.
 * @property string $ID
 * @property string $SalesOrderID
 * @property string $IssueDate
 * @property string $OrderTypeCode
 * @property DocumentReference $DocumentReference
 */
class OrderReference extends AbstractComplexType
{

    /**
     * Sipariş numarası girilecektir.
     */
    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

    /**
     * Satıcının verdiği sipariş numarası girilecektir.
     */
    public function setSalesOrderID(?string $SalesOrderID)
    {
        $this->values['SalesOrderID'] = $SalesOrderID;
        return $this;
    }

    /**
     * Sipariş tarihi girilecektir.
     */
    public function setIssueDate(?string $IssueDate)
    {
        $this->values['IssueDate'] = $IssueDate;
        return $this;
    }

    /**
     * Sipariş tipi girilecektir.
     */
    public function setOrderTypeCode(?string $OrderTypeCode)
    {
        $this->values['OrderTypeCode'] = $OrderTypeCode;
        return $this;
    }

    /**
     * Ek dökümanlar
     */
    public function setDocumentReference(?DocumentReference $DocumentReference)
    {
        $this->values['DocumentReference'] = $DocumentReference;
        return $this;
    }
}