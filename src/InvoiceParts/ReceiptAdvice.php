<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * @property string $UBLVersionID
 * @property string $CustomizationID
 * @property string $ProfileID
 * @property string $ID
 * @property bool $CopyIndicator
 * @property string $UUID
 * @property string $IssueDate
 * @property string $IssueTime
 * @property array $Note
 * @property string $ReceiptAdviceTypeCode
 * @property OrderReference $OrderReference
 * @property DespatchDocumentReference $DespatchDocumentReference
 * @property AdditionalDocumentReference $AdditionalDocumentReference
 * @property Signature $Signature
 * @property DeliveryCustomerParty $DeliveryCustomerParty
 * @property Shipment $Shipment
 * @property ReceiptLine $ReceiptLine
 */
class ReceiptAdvice extends AbstractComplexType
{

    public function setUBLVersionID(?string $UBLVersionID)
    {
        $this->values['UBLVersionID'] = $UBLVersionID;
        return $this;
    }

    public function setCustomizationID(?string $CustomizationID)
    {
        $this->values['CustomizationID'] = $CustomizationID;
        return $this;
    }

    public function setProfileID(?string $ProfileID)
    {
        $this->values['ProfileID'] = $ProfileID;
        return $this;
    }

    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

    public function setCopyIndicator(?bool $CopyIndicator)
    {
        $this->values['CopyIndicator'] = $CopyIndicator;
        return $this;
    }

    public function setUUID(?string $UUID)
    {
        $this->values['UUID'] = $UUID;
        return $this;
    }

    public function setIssueDate(?string $IssueDate)
    {
        $this->values['IssueDate'] = $IssueDate;
        return $this;
    }

    public function setIssueTime(?string $IssueTime)
    {
        $this->values['IssueTime'] = $IssueTime;
        return $this;
    }

    public function setNote(?array $Note)
    {
        $this->values['Note'] = $Note;
        return $this;
    }

    public function setReceiptAdviceTypeCode(?string $ReceiptAdviceTypeCode)
    {
        $this->values['ReceiptAdviceTypeCode'] = $ReceiptAdviceTypeCode;
        return $this;
    }

    public function setOrderReference(?OrderReference $OrderReference)
    {
        $this->values['OrderReference'] = $OrderReference;
        return $this;
    }

    public function setDespatchDocumentReference(?DespatchDocumentReference $DespatchDocumentReference)
    {
        $this->values['DespatchDocumentReference'] = $DespatchDocumentReference;
        return $this;
    }

    public function setAdditionalDocumentReference(?AdditionalDocumentReference $AdditionalDocumentReference)
    {
        $this->values['AdditionalDocumentReference'] = $AdditionalDocumentReference;
        return $this;
    }

    public function setSignature(?Signature $Signature)
    {
        $this->values['Signature'] = $Signature;
        return $this;
    }

    public function setDeliveryCustomerParty(?DeliveryCustomerParty $DeliveryCustomerParty)
    {
        $this->values['DeliveryCustomerParty'] = $DeliveryCustomerParty;
        return $this;
    }

    public function setShipment(?Shipment $Shipment)
    {
        $this->values['Shipment'] = $Shipment;
        return $this;
    }

    public function setReceiptLine(?ReceiptLine $ReceiptLine)
    {
        $this->values['ReceiptLine'] = $ReceiptLine;
        return $this;
    }


}