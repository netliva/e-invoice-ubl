<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;
use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * @property string $UBLVersionID
 * @property string $CustomizationID
 * @property string $ProfileID
 * @property string $ID
 * @property string $UUID
 * @property string $IssueDate
 * @property string $IssueTime
 * @property array $Note
 * @property Signature $Signature
 * @property SenderParty $SenderParty
 * @property ReceiverParty $ReceiverParty
 * @property DocumentResponse $DocumentResponse
 */
class ApplicationResponse extends AbstractComplexType
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


    public function setSignature(?Signature $Signature)
    {
        $this->values['Signature'] = $Signature;
        return $this;
    }


    public function setSenderParty(?SenderParty $SenderParty)
    {
        $this->values['SenderParty'] = $SenderParty;
        return $this;
    }


    public function setReceiverParty(?ReceiverParty $ReceiverParty)
    {
        $this->values['ReceiverParty'] = $ReceiverParty;
        return $this;
    }


    public function setDocumentResponse(?DocumentResponse $DocumentResponse)
    {
        $this->values['DocumentResponse'] = $DocumentResponse;
        return $this;
    }

}