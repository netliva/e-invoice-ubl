<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Tren bilgisini içerir.
 * @property string $TrainID
 * @property string $RailCarID
 */
class RailTransport extends AbstractComplexType
{
    /**
     * Tren numarası girilir.
     */
    public function setTrainID(?string $TrainID)
    {
        $this->values['TrainID'] = $TrainID;
        return $this;
    }

    /**
     * Vagon numarası girilir.
     */
    public function setRailCarID(?string $RailCarID)
    {
        $this->values['RailCarID'] = $RailCarID;
        return $this;
    }
}