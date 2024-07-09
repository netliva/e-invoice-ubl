<?php
namespace Netliva\eInvoiceUBL\InvoiceParts;

use Netliva\eInvoiceUBL\Abstracts\AbstractComplexType;

/**
 * Malların alıcıya gönderimlesi için satıcıdan teslim alınması kapsamında zaman ve mekan bilgileri girilir.
 * @property string $ID
 * @property string $ActualDespatchDate
 * @property string $ActualDespatchTime
 * @property string $Instructions
 * @property DespatchAddress $DespatchAddress
 * @property DespatchParty $DespatchParty
 * @property Contact $Contact
 * @property EstimatedDespatchPeriod $EstimatedDespatchPeriod
 */
class Despatch extends AbstractComplexType
{
    /**
     * İlgili gönderimi belge içerisinde tekil olarak tanımlar.
     */
   public string $ID;

    /**
     * Gerçekleşen gönderim tarihi girilir. (Fiili Sevk Tarihi)
     */
   public string $ActualDespatchDate;

    /**
     * Gerçekleşen gönderim zamanı girilir.  (Fiili Sevk Zamanı)
     */
   public string $ActualDespatchTime;

    /**
     * Serbest metin olarak gönderime yönelik açıklamalar girilir.
     */
   public string $Instructions;

    /**
     * Malların gönderim için alınacağı adres girilir.
     */
   public DespatchAddress $DespatchAddress;

    /**
     * Malları satıcıdan teslim alacak taraf bilgileri girilir.
     */
   public DespatchParty $DespatchParty;

    /**
     * Malları satıcıdan teslim alacak tarafın iletişim bilgileri girilir.
     */
   public Contact $Contact;

    /**
     * Tahmini teslim alış dönemi girilir.
     */
   public EstimatedDespatchPeriod $EstimatedDespatchPeriod;
}