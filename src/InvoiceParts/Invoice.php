<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * @property string $UBLVersionID = '2.1'
 * @property string $CustomizationID = 'TR1.2'
 * @property string $ProfileID
 * @property-read string $ID
 * @property-write string|int|null $ID
 * @property bool $CopyIndicator
 * @property string $UUID
 * @property string $IssueDate
 * @property string $IssueTime
 * @property string $InvoiceTypeCode
 * @property string[] $Note
 * @property string $DocumentCurrencyCode
 * @property-read string $LineCountNumeric
 * @property-write string|int|null $LineCountNumeric
 * @property InvoicePeriod $InvoicePeriod
 * @property OrderReference $OrderReference
 * @property BillingReference[] $BillingReference
 * @property DespatchDocumentReference $DespatchDocumentReference
 * @property OriginatorDocumentReference $OriginatorDocumentReference
 * @property AdditionalDocumentReference[] $AdditionalDocumentReference
 * @property Signature $Signature
 * @property AccountingSupplierParty $AccountingSupplierParty
 * @property AccountingCustomerParty $AccountingCustomerParty
 * @property BuyerCustomerParty $BuyerCustomerParty
 * @property TaxRepresentativeParty $TaxRepresentativeParty
 * @property Delivery $Delivery
 * @property PaymentMeans[] $PaymentMeans
 * @property PaymentTerms $PaymentTerms
 * @property AllowanceCharge $AllowanceCharge
 * @property TaxExchangeRate $TaxExchangeRate
 * @property PricingExchangeRate $PricingExchangeRate
 * @property PaymentExchangeRate $PaymentExchangeRate
 * @property PaymentAlternativeExchangeRate $PaymentAlternativeExchangeRate
 * @property TaxTotal $TaxTotal
 * @property WithholdingTaxTotal $WithholdingTaxTotal
 * @property LegalMonetaryTotal $LegalMonetaryTotal
 * @property InvoiceLine[] $InvoiceLine
 */
class Invoice extends AbstractComplexType
{
    // DİKKAT — bu dizinin SIRASI XML'in eleman sırasıdır (XMLHelper::makeXml()
    // etiketleri bu diziyi gezerek basar). UBL 2.1 Invoice bir xsd:sequence'tir,
    // yani sıra bağlayıcıdır: yanlış yerdeki bir eleman GİB/entegratör tarafında
    // 1160 FAILED_XML_SCHEMA_CHECK ile reddedilir. Sıra, resmi
    // UBL-Invoice-2.1.xsd içindeki InvoiceType tanımından birebir alınmıştır;
    // yeni bir eleman eklerken oradaki yerine koy, sona ekleme.
    protected $values = [
        'UBLVersionID'                   => '2.1',
        'CustomizationID'                => 'TR1.2',
        'ProfileID'                      => null,
        'ID'                             => null,
        'CopyIndicator'                  => false,
        'UUID'                           => null,
        'IssueDate'                      => null,
        'IssueTime'                      => null,
        'InvoiceTypeCode'                => null,
        'Note'                           => [],
        'DocumentCurrencyCode'           => null,
        'LineCountNumeric'               => null,
        'InvoicePeriod'                  => null,
        'OrderReference'                 => null,
        'BillingReference'               => [],
        'DespatchDocumentReference'      => [],
        'OriginatorDocumentReference'    => null,
        'AdditionalDocumentReference'    => [],
        'Signature'                      => null,
        'AccountingSupplierParty'        => null,
        'AccountingCustomerParty'        => null,
        'BuyerCustomerParty'             => null,
        'TaxRepresentativeParty'         => null,
        'Delivery'                       => null,
        'PaymentMeans'                   => null,
        'PaymentTerms'                   => null,
        'AllowanceCharge'                => null,
        'TaxExchangeRate'                => null,
        'PricingExchangeRate'            => null,
        'PaymentExchangeRate'            => null,
        'PaymentAlternativeExchangeRate' => null,
        'TaxTotal'                       => null,
        'WithholdingTaxTotal'            => null,
        'LegalMonetaryTotal'             => null,
        'InvoiceLine'                    => null,
    ];
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
    public function setInvoiceTypeCode(?string $InvoiceTypeCode)
    {
        $this->values['InvoiceTypeCode'] = $InvoiceTypeCode;
        return $this;
    }
    public function setNote(?array $Note)
    {
        $this->values['Note'] = $Note;
        return $this;
    }
    public function setDocumentCurrencyCode(?string $DocumentCurrencyCode)
    {
        $this->values['DocumentCurrencyCode'] = $DocumentCurrencyCode;
        return $this;
    }
    public function setLineCountNumeric(?string $LineCountNumeric)
    {
        $this->values['LineCountNumeric'] = $LineCountNumeric;
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
    public function setBillingReference(?array $BillingReference)
    {
        $this->values['BillingReference'] = $BillingReference;
        return $this;
    }
    public function setAdditionalDocumentReference(?array $AdditionalDocumentReference)
    {
        $this->values['AdditionalDocumentReference'] = $AdditionalDocumentReference;
        return $this;
    }
    public function setSignature(?Signature $Signature)
    {
        $this->values['Signature'] = $Signature;
        return $this;
    }
    public function setAccountingSupplierParty(?AccountingSupplierParty $AccountingSupplierParty)
    {
        $this->values['AccountingSupplierParty'] = $AccountingSupplierParty;
        return $this;
    }
    public function setAccountingCustomerParty(?AccountingCustomerParty $AccountingCustomerParty)
    {
        $this->values['AccountingCustomerParty'] = $AccountingCustomerParty;
        return $this;
    }
    public function setPaymentMeans(?array $PaymentMeans)
    {
        $this->values['PaymentMeans'] = $PaymentMeans;
        return $this;
    }
    public function setAllowanceCharge(?AllowanceCharge $AllowanceCharge)
    {
        $this->values['AllowanceCharge'] = $AllowanceCharge;
        return $this;
    }
    public function setPricingExchangeRate(?PricingExchangeRate $PricingExchangeRate)
    {
        $this->values['PricingExchangeRate'] = $PricingExchangeRate;
        return $this;
    }
    public function setTaxTotal(?TaxTotal $TaxTotal)
    {
        $this->values['TaxTotal'] = $TaxTotal;
        return $this;
    }
    public function setLegalMonetaryTotal(?LegalMonetaryTotal $LegalMonetaryTotal)
    {
        $this->values['LegalMonetaryTotal'] = $LegalMonetaryTotal;
        return $this;
    }
    public function setBuyerCustomerParty(?BuyerCustomerParty $BuyerCustomerParty)
    {
        $this->values['BuyerCustomerParty'] = $BuyerCustomerParty;
        return $this;
    }
    public function setDelivery(?Delivery $Delivery)
    {
        $this->values['Delivery'] = $Delivery;
        return $this;
    }
    public function setPaymentTerms(?PaymentTerms $PaymentTerms)
    {
        $this->values['PaymentTerms'] = $PaymentTerms;
        return $this;
    }
    public function setOriginatorDocumentReference(?OriginatorDocumentReference $OriginatorDocumentReference)
    {
        $this->values['OriginatorDocumentReference'] = $OriginatorDocumentReference;
        return $this;
    }
    public function setPaymentAlternativeExchangeRate(?PaymentAlternativeExchangeRate $PaymentAlternativeExchangeRate)
    {
        $this->values['PaymentAlternativeExchangeRate'] = $PaymentAlternativeExchangeRate;
        return $this;
    }
    public function setTaxExchangeRate(?TaxExchangeRate $TaxExchangeRate)
    {
        $this->values['TaxExchangeRate'] = $TaxExchangeRate;
        return $this;
    }
    public function setPaymentExchangeRate(?PaymentExchangeRate $PaymentExchangeRate)
    {
        $this->values['PaymentExchangeRate'] = $PaymentExchangeRate;
        return $this;
    }
    public function setInvoicePeriod(?InvoicePeriod $InvoicePeriod)
    {
        $this->values['InvoicePeriod'] = $InvoicePeriod;
        return $this;
    }
    public function setTaxRepresentativeParty(?TaxRepresentativeParty $TaxRepresentativeParty)
    {
        $this->values['TaxRepresentativeParty'] = $TaxRepresentativeParty;
        return $this;
    }
    public function setInvoiceLine(?array $InvoiceLine)
    {
        $this->values['InvoiceLine'] = $InvoiceLine;
        return $this;
    }


}
