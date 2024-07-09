<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Adres bilgileri elemanı
 * @property string ID
 * @property string Postbox
 * @property string Room
 * @property string StreetName
 * @property string BlockName
 * @property string BuildingName
 * @property string BuildingNumber
 * @property string CitySubdivisionName
 * @property string CityName
 * @property string PostalZone
 * @property string Region
 * @property string District
 * @property Country Country
 */
class Address extends AbstractComplexType
{
    /**
     * Mahalle, meydan, bulvar, cadde, sokak ve küme evlere karşılık gelecek şekilde,
     * standart sayısal eşdeğer olarak TÜİK tarafından verilmiş olan “sabit tanımlama numarası” girilebilecektir.
     */

    public function setID(?string $ID)
    {
        $this->values['ID'] = $ID;
        return $this;
    }


    /**
     * Posta Kutusu girilecektir.
     */

    public function setPostbox(?string $Postbox)
    {
        $this->values['Postbox'] = $Postbox;
        return $this;
    }


    /**
     * İç kapı numarası girilecektir.
     */

    public function setRoom(?string $Room)
    {
        $this->values['Room'] = $Room;
        return $this;
    }


    /**
     * Meydan/bulvar/cadde/sokak/küme evler/site adı bilgileri girilecektir.
     */

    public function setStreetName(?string $StreetName)
    {
        $this->values['StreetName'] = $StreetName;
        return $this;
    }


    /**
     * Blok adı girilebilecektir.
     */

    public function setBlockName(?string $BlockName)
    {
        $this->values['BlockName'] = $BlockName;
        return $this;
    }


    /**
     * Bina girilebilecektir.
     */

    public function setBuildingName(?string $BuildingName)
    {
        $this->values['BuildingName'] = $BuildingName;
        return $this;
    }


    /**
     * Bina veya bloğa ait dış kapı numarası girilecektir.
     */

    public function setBuildingNumber(?string $BuildingNumber)
    {
        $this->values['BuildingNumber'] = $BuildingNumber;
        return $this;
    }


    /**
     * İlçe/semt adı bilgileri girilecektir.
     */

    public function setCitySubdivisionName(?string $CitySubdivisionName)
    {
        $this->values['CitySubdivisionName'] = $CitySubdivisionName;
        return $this;
    }


    /**
     * İl adı girilecektir.
     */

    public function setCityName(?string $CityName)
    {
        $this->values['CityName'] = $CityName;
        return $this;
    }


    /**
     * Posta kod numarası girilecektir.
     */

    public function setPostalZone(?string $PostalZone)
    {
        $this->values['PostalZone'] = $PostalZone;
        return $this;
    }


    /**
     * Kasaba/köy/mezra/mevkii bilgileri girilecektir.
     */

    public function setRegion(?string $Region)
    {
        $this->values['Region'] = $Region;
        return $this;
    }


    /**
     * Mahalle adı girilecektir.
     */

    public function setDistrict(?string $District)
    {
        $this->values['District'] = $District;
        return $this;
    }


    /**
     * Ülke
     */

    public function setCountry(?Country $Country)
    {
        $this->values['Country'] = $Country;
        return $this;
    }


}