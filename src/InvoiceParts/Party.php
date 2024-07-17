<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;/**
 * @property string $WebsiteURI;
 * @property string $IndustryClassificationCode
 * @property PartyIdentification[] $PartyIdentification
 * @property PartyName $PartyName
 * @property PostalAddress $PostalAddress
 * @property PostalAddress $PhysicalLocation
 * @property PartyTaxScheme $PartyTaxScheme
 * @property PartyLegalEntity $PartyLegalEntity
 * @property Contact $Contact
 * @property Person $Person
 * @property AgentParty $AgentParty
 */
class Party extends AbstractComplexType
{
    protected $values = [
        "WebsiteURI"          => null,
        'PartyIdentification' => null,
        'PartyName'           => null,
        "PostalAddress"       => null,
        "PartyTaxScheme"      => null,
        "Contact"             => null,
        "AgentParty"          => null,
    ];

    public function setWebsiteURI(?string $WebsiteURI)
    {
        $this->values['WebsiteURI'] = $WebsiteURI;
        return $this;
    }

    public function setIndustryClassificationCode(?string $IndustryClassificationCode)
    {
        $this->values['IndustryClassificationCode'] = $IndustryClassificationCode;
        return $this;
    }

    public function setPartyIdentification(?array $PartyIdentification)
    {
        $this->values['PartyIdentification'] = $PartyIdentification;
        return $this;
    }

    public function setPartyName(?PartyName $PartyName)
    {
        $this->values['PartyName'] = $PartyName;
        return $this;
    }

    public function setPostalAddress(?PostalAddress $PostalAddress)
    {
        $this->values['PostalAddress'] = $PostalAddress;
        return $this;
    }

    public function setPhysicalLocation(?PostalAddress $PhysicalLocation)
    {
        $this->values['PhysicalLocation'] = $PhysicalLocation;
        return $this;
    }

    public function setPartyTaxScheme(?PartyTaxScheme $PartyTaxScheme)
    {
        $this->values['PartyTaxScheme'] = $PartyTaxScheme;
        return $this;
    }

    public function setPartyLegalEntity(?PartyLegalEntity $PartyLegalEntity)
    {
        $this->values['PartyLegalEntity'] = $PartyLegalEntity;
        return $this;
    }

    public function setContact(?Contact $Contact)
    {
        $this->values['Contact'] = $Contact;
        return $this;
    }

    public function setPerson(?Person $Person)
    {
        $this->values['Person'] = $Person;
        return $this;
    }

    public function setAgentParty(?AgentParty $AgentParty)
    {
        $this->values['AgentParty'] = $AgentParty;
        return $this;
    }

}

