<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Belgelerde dönem kullanılması halinde dönem bu elemanda gösterilir.
 * @property string $StartDate
 * @property string $StartTime
 * @property string $EndDate
 * @property string $EndTime
 * @property array $DurationMeasure
 * @property string $Description
 */
class Period extends AbstractComplexType
{
    /**
     * Başlangıç Tarihi
     */
    public function setStartDate(?string $StartDate)
    {
        $this->values['StartDate'] = $StartDate;
        return $this;
    }

    /**
     * Başlangıç Saati
     */
    public function setStartTime(?string $StartTime)
    {
        $this->values['StartTime'] = $StartTime;
        return $this;
    }

    /**
     * Bitiş Tarihi
     */
    public function setEndDate(?string $EndDate)
    {
        $this->values['EndDate'] = $EndDate;
        return $this;
    }

    /**
     * Bitiş Saati
     */
    public function setEndTime(?string $EndTime)
    {
        $this->values['EndTime'] = $EndTime;
        return $this;
    }

    /**
     * Dönem süresi numerik olarak,
     * dönem aralığı tipi’de “unitCode” attribute değerine yıl için “ANN”, ay için “MON”, gün için “DAY” ve saat için “HUR” girilmesi gerekmektedir.
     * [val => "string", attrs=> [] ]
     */
    public function setDurationMeasure(?array $DurationMeasure)
    {
        $this->values['DurationMeasure'] = $DurationMeasure;
        return $this;
    }

    /**
     * Dönemin açıklaması serbest metin olarak girilecektir.
     */
    public function setDescription(?string $Description)
    {
        $this->values['Description'] = $Description;
        return $this;
    }
}