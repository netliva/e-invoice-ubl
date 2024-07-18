<?php

namespace Netliva\eInvoiceUBL;

class UblParser
{
    protected $party = [
        'WebsiteURI'          => null,
        'TaxID'               => null,
        'Name'                => null,
        'StreetName'          => null,
        'BuildingName'        => null,
        'BuildingNumber'      => null,
        'CitySubdivisionName' => null,
        'CityName'            => null,
        'PostalZone'          => null,
        'Region'              => null,
        'District'            => null,
        'Country'             => null,
        'TaxOfficeName'       => null,
        'PartyName'           => null,
        'Person' => [
            'FirstName'  => null,
            'MiddleName' => null,
            'FamilyName' => null,
        ]
    ];

    protected $taxSubtotal = [
        'TaxableAmount'              => null,
        'TaxableAmountCurrency'      => null,
        'TaxAmount'                  => null,
        'TaxAmountCurrency'          => null,
        'CalculationSequenceNumeric' => null,
        'Percent'                    => null,
        'Category'                   => [
            'SchemeName'          => null,
            'SchemeCode'          => null,
            'ExemptionReason'     => null,
            'ExemptionReasonCode' => null,
        ],
    ];

    protected $data = [
        'UBLVersionID'         => null,
        'CustomizationID'      => null,
        'ProfileID'            => null,
        'InvoiceTypeCode'      => null,
        'ID'                   => null,
        'UUID'                 => null,
        'IssueDate'            => null,
        'IssueTime'            => null,
        'Notes'                => [],
        'DocumentCurrencyCode' => null,
        'LineCountNumeric'     => null,

        'Supplier' => [], // satıcı
        'Customer' => [], // alıcı

        'AllowanceCharge' => [
            'Amount'         => null,
            'AmountCurrency' => null,
        ],

        'TaxTotal' => [
            'Amount'         => null,
            'AmountCurrency' => null,
            'Subtotal'       => [],
        ],

        'WithholdingTaxTotal' => [
            'Amount'         => null,
            'AmountCurrency' => null,
            'Subtotal'       => [],
        ],

        'LegalMonetaryTotal' => [
            'LineExtensionAmount'          => null,
            'LineExtensionAmountCurrency'  => null,
            'TaxExclusiveAmount'           => null,
            'TaxExclusiveAmountCurrency'   => null,
            'TaxInclusiveAmount'           => null,
            'TaxInclusiveAmountCurrency'   => null,
            'AllowanceTotalAmount'         => null,
            'AllowanceTotalAmountCurrency' => null,
            'PayableAmount'                => null,
            'PayableAmountCurrency'        => null,
        ],

        /**
         * Fiyatlandırma Döviz Kuru :
         * Bu elemana fatura üzerinde yer alan mal veya hizmet
         * bedellerinin “Belge Para Birimi” dışında başka bir para
         * birimi ile gösterilmesi halinde ilgili döviz kuru yazılacaktır.
         */
        'PricingExchangeRate' => [
            'SourceCurrencyCode' => null,
            'TargetCurrencyCode' => null,
            'CalculationRate'    => null,
            'Date'               => null,
        ],

        /**
         * Ödeme Döviz Kuru :
         * Ödemenin “Belge Para Birimi” dışında herhangi bir para birimi
         * ile yapılması halinde ilgili para biriminin döviz kuru bilgileri bu
         * elemana yazılacaktır.
         */
        'PaymentExchangeRate' => [
            'SourceCurrencyCode' => null,
            'TargetCurrencyCode' => null,
            'CalculationRate'    => null,
            'Date'               => null,
        ],

        'InvoiceLines' => [],
    ];

    protected $item = [
        'ID'                          => null,
        'InvoicedQuantity'            => null,
        'UnitCode'                    => null,
        'LineExtensionAmount'         => null, // Price.Amount * InvoicedQuantity -
        'LineExtensionAmountCurrency' => null,
        'AllowanceCharge'             => [
            'Rate'               => null,
            'Amount'             => null,
            'AmountCurrency'     => null,
            'BaseAmount'         => null,
            'BaseAmountCurrency' => null,
        ],
        'TaxTotal' => [
            'Amount'         => null,
            'AmountCurrency' => null,
            'Subtotal'       => [],
        ],
        'WithholdingTaxTotal' => [
            'Amount'         => null,
            'AmountCurrency' => null,
            'Subtotal'       => [],
        ],
        'Item' => [
            'Name' => null,
        ],
        'Price' => [
            'Amount'         => null,
            'Currency' => null,
        ],
    ];

    protected function isNode ($node, $name): bool
    {
        return $node->nodeType === XML_ELEMENT_NODE && strtolower($node->localName) === strtolower($name);
    }

    protected function party ($key, $node): void
    {
        $this->data[$key] = $this->party;
        foreach ($node->childNodes as $node2)
        {
            if ($this->isNode($node2, 'Party'))
            {
                foreach ($node2->childNodes as $node3)
                {

                    if ($this->isNode($node3, 'WebsiteURI'))
                    {
                        $this->data[$key]['WebsiteURI'] = $node3->nodeValue;
                    }
                    elseif ($this->isNode($node3, 'PartyIdentification'))
                    {
                        foreach ($node3->childNodes as $node4)
                        {
                            if ($this->isNode($node4, 'ID') && $node4->getAttribute('schemeID') === 'VKN')
                            {
                                $this->data[$key]['TaxID'] = $node4->nodeValue;
                            }
                            elseif ($this->isNode($node4, 'ID') && $node4->getAttribute('schemeID') === 'TCKN')
                            {
                                $this->data[$key]['TaxID'] = $node4->nodeValue;
                            }
                        }
                    }
                    elseif ($this->isNode($node3, 'PartyName'))
                    {
                        foreach ($node3->childNodes as $node4)
                        {
                            if ($this->isNode($node4, 'Name'))
                            {
                                $this->data[$key]['PartyName'] = $node4->nodeValue;
                                $this->data[$key]['Name'] = $node4->nodeValue;
                            }
                        }
                    }
                    elseif ($this->isNode($node3, 'PostalAddress'))
                    {
                        foreach ($node3->childNodes as $node4)
                        {
                            foreach (['StreetName', 'BuildingName', 'BuildingNumber', 'CitySubdivisionName', 'CityName', 'PostalZone', 'Region', 'District'] as $item)
                            {
                                if ($this->isNode($node4, $item))
                                {
                                    $this->data[$key][$item] = $node4->nodeValue;
                                    continue 2;
                                }
                            }

                            if ($this->isNode($node4, 'Country'))
                            {
                                foreach ($node4->childNodes as $node5)
                                {
                                    if ($this->isNode($node5, 'Name'))
                                    {
                                        $this->data[$key]['Country'] = $node5->nodeValue;
                                    }
                                }
                            }
                        }
                    }
                    elseif ($this->isNode($node3, 'PartyTaxScheme'))
                    {
                        foreach ($node3->childNodes as $node4)
                        {
                            if ($this->isNode($node4, 'TaxScheme'))
                            {
                                foreach ($node4->childNodes as $node5)
                                {
                                    if ($this->isNode($node5, 'Name'))
                                    {
                                        $this->data[$key]['TaxOfficeName'] = $node5->nodeValue;
                                    }
                                }
                            }
                        }
                    }
                    elseif ($this->isNode($node3, 'Person'))
                    {
                        foreach ($node3->childNodes as $node4)
                        {
                            if ($this->isNode($node4, 'FirstName'))
                                $this->data[$key]['Person']['FirstName'] = $node4->nodeValue;

                            elseif ($this->isNode($node4, 'MiddleName'))
                                $this->data[$key]['Person']['MiddleName'] = $node4->nodeValue;

                            elseif ($this->isNode($node4, 'FamilyName'))
                                $this->data[$key]['Person']['FamilyName'] = $node4->nodeValue;
                        }
                    }
                }
            }
        }
    }

    protected function allowanceCharge ($node): void
    {
        foreach ($node->childNodes as $node2)
        {

            if ($this->isNode($node2, 'Amount'))
            {
                $this->data['AllowanceCharge']['Amount']         = (float)$node2->nodeValue;
                $this->data['AllowanceCharge']['AmountCurrency'] = $node2->getAttribute('currencyID');
            }
        }
    }

    protected function prepareTaxes (&$variable, $nodes, $key = 'TaxTotal'): void
    {
        foreach ($nodes as $node)
        {
            if ($this->isNode($node, 'TaxAmount'))
            {
                if (is_null($variable[$key]['Amount']))
                    $variable[$key]['Amount'] = 0;
                $variable[$key]['Amount']         += (float)$node->nodeValue;
                $variable[$key]['AmountCurrency'] = $node->getAttribute('currencyID');
            }
            elseif ($this->isNode($node, 'TaxSubtotal'))
            {
                $subtotal = $this->taxSubtotal;
                /** @var \DOMElement $node2 */
                foreach ($node->childNodes as $node2)
                {
                    if ($this->isNode($node2, 'TaxableAmount'))
                    {
                        $subtotal['TaxableAmount']         = (float)$node2->nodeValue;
                        $subtotal['TaxableAmountCurrency'] = $node2->getAttribute('currencyID');
                    }
                    elseif ($this->isNode($node2, 'TaxAmount'))
                    {
                        $subtotal['TaxAmount']         = (float)$node2->nodeValue;
                        $subtotal['TaxAmountCurrency'] = $node2->getAttribute('currencyID');
                    }
                    elseif ($this->isNode($node2, 'CalculationSequenceNumeric'))
                    {
                        $subtotal['CalculationSequenceNumeric'] = $node2->nodeValue;
                    }
                    elseif ($this->isNode($node2, 'Percent'))
                    {
                        $subtotal['Percent'] = (float)$node2->nodeValue;
                    }
                    elseif ($this->isNode($node2, 'TaxCategory'))
                    {
                        /** @var \DOMElement $schema */
                        $schema = $node2->getElementsByTagName('TaxScheme')->item(0);
                        if ($schema)
                        {
                            if ($schema->getElementsByTagName('Name')->count()>0)
                                $subtotal['Category']['SchemeName'] = $schema->getElementsByTagName('Name')->item(0)->nodeValue;
                            if ($schema->getElementsByTagName('TaxTypeCode')->count()>0)
                                $subtotal['Category']['SchemeCode'] = $schema->getElementsByTagName('TaxTypeCode')->item(0)->nodeValue;
                        }
                        if (!$subtotal['Category']['SchemeName'] && $node2->getElementsByTagName('Name')->count()>0)
                            $subtotal['Category']['SchemeName'] = $node2->getElementsByTagName('Name')->item(0)->nodeValue;

                        if ($node2->getElementsByTagName('TaxExemptionReasonCode')->count()>0)
                            $subtotal['Category']['ExemptionReason'] = $node2->getElementsByTagName('TaxExemptionReasonCode')->item(0)->nodeValue;
                        if ($node2->getElementsByTagName('TaxExemptionReason')->count()>0)
                            $subtotal['Category']['ExemptionReasonCode'] = $node2->getElementsByTagName('TaxExemptionReason')->item(0)->nodeValue;
                    }
                }
                $variable[$key]['Subtotal'][] = $subtotal;
            }
        }
    }


    protected function legalMonetaryTotal ($node): void
    {
        foreach ($node->childNodes as $node2)
        {
            if ($this->isNode($node2, 'LineExtensionAmount'))
            {
                $this->data['LegalMonetaryTotal']['LineExtensionAmount']         = (float)$node2->nodeValue;
                $this->data['LegalMonetaryTotal']['LineExtensionAmountCurrency'] = $node2->getAttribute('currencyID');

            }
            elseif ($this->isNode($node2, 'TaxExclusiveAmount'))
            {
                $this->data['LegalMonetaryTotal']['TaxExclusiveAmount']         = (float)$node2->nodeValue;
                $this->data['LegalMonetaryTotal']['TaxExclusiveAmountCurrency'] = $node2->getAttribute('currencyID');

            }
            elseif ($this->isNode($node2, 'TaxInclusiveAmount'))
            {
                $this->data['LegalMonetaryTotal']['TaxInclusiveAmount']         = (float)$node2->nodeValue;
                $this->data['LegalMonetaryTotal']['TaxInclusiveAmountCurrency'] = $node2->getAttribute('currencyID');

            }
            elseif ($this->isNode($node2, 'AllowanceTotalAmount'))
            {
                $this->data['LegalMonetaryTotal']['AllowanceTotalAmount']         = (float)$node2->nodeValue;
                $this->data['LegalMonetaryTotal']['AllowanceTotalAmountCurrency'] = $node2->getAttribute('currencyID');

            }
            elseif ($this->isNode($node2, 'PayableAmount'))
            {
                $this->data['LegalMonetaryTotal']['PayableAmount']         = (float)$node2->nodeValue;
                $this->data['LegalMonetaryTotal']['PayableAmountCurrency'] = $node2->getAttribute('currencyID');
            }
        }
    }

    protected function invoiceLine ($node): void
    {
        $invoiceLine = $this->item;

        foreach ($node->childNodes as $node2)
        {

            if ($this->isNode($node2, 'ID'))
            {
                $invoiceLine['ID'] = $node2->nodeValue;

            }
            elseif ($this->isNode($node2, 'InvoicedQuantity'))
            {
                $invoiceLine['InvoicedQuantity'] = (float)$node2->nodeValue;
                $invoiceLine['UnitCode']         = $node2->getAttribute('unitCode');

            }
            elseif ($this->isNode($node2, 'LineExtensionAmount'))
            {
                $invoiceLine['LineExtensionAmount']         = (float)$node2->nodeValue;
                $invoiceLine['LineExtensionAmountCurrency'] = $node2->getAttribute('currencyID');

            }
            elseif ($this->isNode($node2, 'AllowanceCharge'))
            {

                foreach ($node2->childNodes as $node3)
                {

                    if ($this->isNode($node3, 'Amount'))
                    {
                        $invoiceLine['AllowanceCharge']['Amount']         = (float)$node3->nodeValue;
                        $invoiceLine['AllowanceCharge']['AmountCurrency'] = $node3->getAttribute('currencyID');

                    }
                    elseif ($this->isNode($node3, 'BaseAmount'))
                    {
                        $invoiceLine['AllowanceCharge']['BaseAmount']         = (float)$node3->nodeValue;
                        $invoiceLine['AllowanceCharge']['BaseAmountCurrency'] = $node3->getAttribute('currencyID');
                    }
                    elseif ($this->isNode($node3, 'MultiplierFactorNumeric'))
                    {
                        $invoiceLine['AllowanceCharge']['Rate']         = (float)$node3->nodeValue;
                    }
                }

            }
            elseif ($this->isNode($node2, 'TaxTotal'))
            {
                $this->prepareTaxes($invoiceLine, $node2->childNodes);
            }
            elseif ($this->isNode($node2, 'WithholdingTaxTotal'))
            {
                $this->prepareTaxes($invoiceLine, $node2->childNodes, 'WithholdingTaxTotal');
            }
            elseif ($this->isNode($node2, 'Item'))
            {
                foreach ($node2->childNodes as $node3)
                {
                    if ($this->isNode($node3, 'Name'))
                    {
                        $invoiceLine['Item']['Name'] = $node3->nodeValue;
                    }
                }

            }
            elseif ($this->isNode($node2, 'Price'))
            {

                foreach ($node2->childNodes as $node3)
                {

                    if ($this->isNode($node3, 'PriceAmount'))
                    {
                        $invoiceLine['Price']['Amount']   = (float)$node3->nodeValue;
                        $invoiceLine['Price']['Currency'] = $node3->getAttribute('currencyID');
                    }
                }
            }
        }

        $this->data['InvoiceLines'][] = $invoiceLine;
    }

    protected function exchangeRate ($key, $nodes): void
    {
        foreach ($nodes as $node)
        {
            if ($this->isNode($node, 'SourceCurrencyCode'))
                $this->data[$key]['SourceCurrencyCode'] = $node->nodeValue;

            if ($this->isNode($node, 'TargetCurrencyCode'))
                $this->data[$key]['TargetCurrencyCode'] = (float)$node->nodeValue;

            if ($this->isNode($node, 'CalculationRate'))
                $this->data[$key]['CalculationRate'] = (float)$node->nodeValue;

            if ($this->isNode($node, 'Date'))
                $this->data[$key]['Date'] = $node->nodeValue;

        }
    }

    public function set (string $xmlString): UblParser
    {
        $doc = new \DOMDocument();
        $doc->loadXML($xmlString, LIBXML_NOERROR);

        foreach ($doc->documentElement->childNodes as $node)
        {
            foreach (['UBLVersionID', 'CustomizationID', 'ProfileID', 'ID', 'UUID', 'IssueDate', 'IssueTime', 'InvoiceTypeCode', 'DocumentCurrencyCode', 'LineCountNumeric'] as $item)
            {
                if ($this->isNode($node, $item))
                {
                    $this->data[$item] = $node->nodeValue;
                    continue 2;
                }
            }

            if ($this->isNode($node, 'Note') && !empty($node->nodeValue))
                $this->data['Notes'][] = $node->nodeValue;

            elseif ($this->isNode($node, 'PaymentExchangeRate'))
                $this->exchangeRate('PaymentExchangeRate', $node->childNodes);

            elseif ($this->isNode($node, 'PricingExchangeRate'))
                $this->exchangeRate('PricingExchangeRate', $node->childNodes);

            elseif ($this->isNode($node, 'AccountingSupplierParty'))
                $this->party('Supplier', $node);

            elseif ($this->isNode($node, 'AccountingCustomerParty'))
                $this->party('Customer', $node);

            elseif ($this->isNode($node, 'AllowanceCharge'))
                $this->allowanceCharge($node);

            elseif ($this->isNode($node, 'TaxTotal'))
                $this->prepareTaxes($this->data, $node->childNodes);

            elseif ($this->isNode($node, 'WithholdingTaxTotal'))
                $this->prepareTaxes($this->data, $node->childNodes, 'WithholdingTaxTotal');

            elseif ($this->isNode($node, 'LegalMonetaryTotal'))
                $this->legalMonetaryTotal($node);

            elseif ($this->isNode($node, 'InvoiceLine'))
                $this->invoiceLine($node);

        }

        return $this;
    }

    public function get (): array
    {
        if (!$this->data['Customer']['Name'])
        {
            $this->data['Customer']['Name'] = $this->data['Customer']['Person']['FirstName'];
            if ($this->data['Customer']['Person']['MiddleName'])
                $this->data['Customer']['Name'] .= ' '.$this->data['Customer']['Person']['MiddleName'];
            $this->data['Customer']['Name'] .= ' '.$this->data['Customer']['Person']['FamilyName'];
        }

        if (!$this->data['Supplier']['Name'])
        {
            $this->data['Supplier']['Name'] = $this->data['Supplier']['Person']['FirstName'];
            if ($this->data['Supplier']['Person']['MiddleName'])
                $this->data['Supplier']['Name'] .= ' '.$this->data['Supplier']['Person']['MiddleName'];
            $this->data['Supplier']['Name'] .= ' '.$this->data['Supplier']['Person']['FamilyName'];
        }
        return $this->data;
    }
}
