<?php
namespace XeroHatch\Models\Accounting;

use XeroHatch\Remote;

class BatchPayment extends Remote\Model
{
    /**
     * See Accounts
     *
     * @property Account Account
     */

    /**
     * An optional description for the payment e.g. Direct Debit
     *
     * @property string Reference
     */

    /**
     * An optional description for the payment e.g. Direct Debit
     *
     * @property string Details
     */

    /**
     * The Xero generated unique identifier for the bank transaction (read-only)
     *
     * @property string BatchPaymentID
     */

    /**
     * Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06
     *
     * @property \DateTimeInterface Date
     */

    /**
     * See Payments
     *
     * @property Payment[] Payments
     */

    /**
     * PAYBATCH for bill payments or RECBATCH for sales invoice payments (read-only)
     *
     * @property string Type
     */

    /**
     * AUTHORISED or DELETED (read-only).
     * New batch payments will have a status of AUTHORISED.
     * It is not possible to delete batch payments via the API.
     *
     * @property string Status
     */

    /**
     * The total of the payments that make up the batch (read-only)
     *
     * @property float TotalAmount
     */

    /**
     * Boolean that tells you if the batch payment has been reconciled (read-only)
     *
     * @property string IsReconciled
     */

    /**
     * UTC timestamp of last update to the payment
     *
     * @property \DateTimeInterface UpdatedDateUTC
     */

    const BATCHPAYMENT_STATUS_AUTHORISED = 'AUTHORISED';
    const BATCHPAYMENT_STATUS_DELETED    = 'DELETED';

    const BATCHPAYMENT_TYPE_PAYBATCH        = 'PAYBATCH';
    const BATCHPAYMENT_TYPE_RECBATCH        = 'RECBATCH';

    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI()
    {
        return 'BatchPayments';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'BatchPayment';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty()
    {
        return 'BatchPaymentID';
    }


    /**
     * Get the stem of the API (core.xro) etc
     *
     * @return string|null
     */
    public static function getAPIStem()
    {
        return Remote\URL::API_CORE;
    }


    /**
     * Get the supported methods
     */
    public static function getSupportedMethods()
    {
        return [
            Remote\Request::METHOD_GET,
            Remote\Request::METHOD_PUT
        ];
    }

    /**
     *
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *  [4] - Saves directly
     *
     * @return array
     */
    public static function getProperties()
    {
        return [
            'Account' => [false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Account', false, false],
            'Payments' => [false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Payment', true, false],
            'Date' => [false, self::PROPERTY_TYPE_DATE, '\\DateTimeInterface', false, false],
            'TotalAmount' => [false, self::PROPERTY_TYPE_FLOAT, null, false, false],
            'Reference' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Details' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'IsReconciled' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Status' => [false, self::PROPERTY_TYPE_ENUM, null, false, false],
            'Type' => [false, self::PROPERTY_TYPE_ENUM, null, false, false],
            'UpdatedDateUTC' => [false, self::PROPERTY_TYPE_TIMESTAMP, '\\DateTimeInterface', false, false],
            'BatchPaymentID' => [false, self::PROPERTY_TYPE_STRING, null, false, false]
        ];
    }

    public static function isPageable()
    {
        return false;
    }

    /**
     * @return BatchPayment
     */
    public function getPayments()
    {
        return $this->_data['Payments'];
    }

    /**
     * @param Payment $value
     * @return BatchPayment
     */
    public function addPayment(Payment $value)
    {
        $this->propertyUpdated('Payments', $value);
        if (!isset($this->_data['Payments'])) {
            $this->_data['Payments'] = new Remote\Collection();
        }
        $this->_data['Payments'][] = $value;
        return $this;
    }

    /**
     * @return Account
     */
    public function getAccount()
    {
        return $this->_data['Account'];
    }

    /**
     * @param Account $value
     * @return BatchPayment
     */
    public function setAccount(Account $value)
    {
        $this->propertyUpdated('Account', $value);
        $this->_data['Account'] = $value;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->_data['Date'];
    }

    /**
     * @param \DateTimeInterface $value
     * @return BatchPayment
     */
    public function setDate(\DateTimeInterface $value)
    {
        $this->propertyUpdated('Date', $value);
        $this->_data['Date'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->_data['TotalAmount'];
    }

    /**
     * @param float $value
     * @return BatchPayment
     */
    public function setTotalAmount($value)
    {
        $this->propertyUpdated('TotalAmount', $value);
        $this->_data['TotalAmount'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->_data['Reference'];
    }

    /**
     * @param string $value
     * @return BatchPayment
     */
    public function setReference($value)
    {
        $this->propertyUpdated('Reference', $value);
        $this->_data['Reference'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getDetails()
    {
        return $this->_data['Details'];
    }

    /**
     * @param string $value
     * @return BatchPayment
     */
    public function setDetails($value)
    {
        $this->propertyUpdated('Details', $value);
        $this->_data['Details'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsReconciled()
    {
        return $this->_data['IsReconciled'];
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->_data['Status'];
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->_data['PaymentType'];
    }


    /**
     * @return \DateTimeInterface
     */
    public function getUpdatedDateUTC()
    {
        return $this->_data['UpdatedDateUTC'];
    }


    /**
     * @return string
     */
    public function getBatchPaymentID()
    {
        return $this->_data['BatchPaymentID'];
    }

}
