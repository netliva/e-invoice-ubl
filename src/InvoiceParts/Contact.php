<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Bu elemana irtibat bilgileri yazılabilecektir.
 * @property string $ID
 * @property string $Name
 * @property string $Telephone
 * @property string $Telefax
 * @property string $ElectronicMail
 * @property string $Note
 * @property OtherCommunication $OtherCommunication
 */
class Contact extends AbstractComplexType
{
    protected $values = [
        'ID'             => null,
        'Name'           => null,
        'Telephone'      => null,
        'Telefax'        => null,
        'ElectronicMail' => null,
        'Note'           => null,
    ];

    /**
     * İrtibatın numara bilgisi yazılabilir.
     */

    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }

    /**
     * İrtibatın ismi metin olarak yazılabilir.
     */

    public function setName(?string $Name)
    {
        $this->values['Name'] = $Name;
        return $this;
    }

    /**
     * Telefon numarası metin olarak girilecektir.
     */

    public function setTelephone(?string $Telephone)
    {
        $this->values['Telephone'] = $Telephone;
        return $this;
    }

    /**
     * Fax numarası metin olarak girilecektir.
     */

    public function setTelefax(?string $Telefax)
    {
        $this->values['Telefax'] = $Telefax;
        return $this;
    }

    /**
     * Elektronik posta adresi metin olarak girilecektir.
     */

    public function setElectronicMail(?string $ElectronicMail)
    {
        $this->values['ElectronicMail'] = $ElectronicMail;
        return $this;
    }

    /**
     * Serbest metin açıklama girilebilecektir.
     */

    public function setNote(?string $Note)
    {
        $this->values['Note'] = $Note;
        return $this;
    }

    /**
     * Başka iletişim kanalı veya ilave telefon, fax ve elektronik posta kullanılıyor ise bu eleman kanalın tanımlanmasında kullanılacaktır.
     */

    public function setOtherCommunication(?OtherCommunication $OtherCommunication)
    {
        $this->values['OtherCommunication'] = $OtherCommunication;
        return $this;
    }
}