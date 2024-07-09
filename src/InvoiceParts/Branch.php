<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Şube bilgisi girilir.
 * @property string $Name
 * @property FinancialInstitution $FinancialInstitution
 */
class Branch extends AbstractComplexType
{
    /**
     * Şube adı girilir.
     */

    public function setName(?string $Name)
    {
        $this->values['Name'] = $Name;
        return $this;
    }


    /**
     * Banka bilgisi girilir.
     */

    public function setFinancialInstitution(?FinancialInstitution $FinancialInstitution)
    {
        $this->values['FinancialInstitution'] = $FinancialInstitution;
        return $this;
    }

}