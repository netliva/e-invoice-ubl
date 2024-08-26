<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Iskonto veya artırımların tanımlandığı elemandır.
 *
 * @property bool $ChargeIndicator Iskonto ise “false”, artırım ise “true” girilir
 * @property string $AllowanceChargeReason Iskonto/ Artırım Nedeni
 * @property string $MultiplierFactorNumeric Iskonto/ Artırım Oranı
 * @property int $SequenceNumeric Sıra Numarası
 * @property Amount $Amount Iskonto/ Artırım Tutarı
 * @property BaseAmount $BaseAmount İskonto veya artırımın uygulandığı tutar
 * @property int $PerUnitAmount Ürün adetine göre iskonto veya artırımın uygulandığı durumlarda uygulanan ürün miktarını gösterir
 */
class AllowanceCharge extends AbstractComplexType
{
    protected $values = [
        'ChargeIndicator'         => null,
        'AllowanceChargeReason'   => null,
        'MultiplierFactorNumeric' => null,
        'SequenceNumeric'         => null,
        'Amount'                  => null,
        'BaseAmount'              => null,
        'PerUnitAmount'           => null,
    ];

    /**
     * Iskonto ise “false”, artırım ise “true” girilir.
     */
    public function setChargeIndicator(?bool $ChargeIndicator)
    {
        $this->values['ChargeIndicator'] = $ChargeIndicator;
        return $this;
    }


    /**
     * Iskonto veya artırımın sebebi serbest metin olarak girilir.
     */

    public function setAllowanceChargeReason(?string $AllowanceChargeReason)
    {
        $this->values['AllowanceChargeReason'] = $AllowanceChargeReason;
        return $this;
    }


    /**
     * Iskonto veya artırım oranı numerik olarak girilir.
     */

    public function setMultiplierFactorNumeric(?string $MultiplierFactorNumeric)
    {
        $this->values['MultiplierFactorNumeric'] = $MultiplierFactorNumeric;
        return $this;
    }


    /**
     * Birden fazla iskonto veya fiyat artırımı kullanılması durumunda sıra numarası girilir.
     */

    public function setSequenceNumeric(?int $SequenceNumeric)
    {
        $this->values['SequenceNumeric'] = $SequenceNumeric;
        return $this;
    }


    /**
     * Iskonto veya artırım miktarı numerik girilir.
     */

    public function setAmount(?Amount $Amount)
    {
        $this->values['Amount'] = $Amount;
        return $this;
    }


    /**
     * Iskonto veya artırım oranının uygulandığı tutar girilir.
     */

    public function setBaseAmount(?BaseAmount $BaseAmount)
    {
        $this->values['BaseAmount'] = $BaseAmount;
        return $this;
    }


    /**
     * Ürün adetine göre iskonto veya artırımın uygulandığı durumlarda uygulanan ürün miktarını gösterir
     */

    public function setPerUnitAmount(?int $PerUnitAmount)
    {
        $this->values['PerUnitAmount'] = $PerUnitAmount;
        return $this;
    }


}
