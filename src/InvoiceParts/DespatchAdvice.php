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
 * @property string $DespatchAdviceTypeCode
 * @property int $LineCountNumeric
 * @property array $Note
 * @property OrderReference $OrderReference
 * @property AdditionalDocumentReference $AdditionalDocumentReference
 * @property Signature $Signature
 * @property DespatchSupplierParty $DespatchSupplierParty
 * @property DeliveryCustomerParty $DeliveryCustomerParty
 * @property Shipment $Shipment
 * @property DespatchLine $DespatchLine
 */
class DespatchAdvice extends AbstractComplexType
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

    public function setDespatchAdviceTypeCode(?string $DespatchAdviceTypeCode)
    {
        $this->values['DespatchAdviceTypeCode'] = $DespatchAdviceTypeCode;
        return $this;
    }

    public function setLineCountNumeric(?int $LineCountNumeric)
    {
        $this->values['LineCountNumeric'] = $LineCountNumeric;
        return $this;
    }

    public function setNote(?array $Note)
    {
        $this->values['Note'] = $Note;
        return $this;
    }

    public function setOrderReference(?OrderReference $OrderReference)
    {
        $this->values['OrderReference'] = $OrderReference;
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

    public function setDespatchSupplierParty(?DespatchSupplierParty $DespatchSupplierParty)
    {
        $this->values['DespatchSupplierParty'] = $DespatchSupplierParty;
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

    public function setDespatchLine(?DespatchLine $DespatchLine)
    {
        $this->values['DespatchLine'] = $DespatchLine;
        return $this;
    }
}
