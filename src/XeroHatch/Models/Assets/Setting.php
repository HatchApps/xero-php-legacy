<?php

namespace XeroHatch\Models\Assets;

use XeroHatch\Remote;

class Setting extends Remote\Model
{
    /**
     * The prefix used for fixed asset numbers (“FA-” by default).
     *
     * @property string AssetNumberPrefix
     */

    /**
     * The next available sequence number.
     *
     * @property string AssetNumberSequence
     */

    /**
     * The date depreciation calculations started on registered fixed assets in Xero.
     *
     * @property \DateTimeInterface AssetStartDate
     */

    /**
     * The last depreciation date.
     *
     * @property \DateTimeInterface LastDepreciationDate
     */

    /**
     * The start date for tax purposes
     *
     * @property \DateTimeInterface TaxStartDate
     */

    /**
     * Default account that gains are posted to
     *
     * @property string DefaultGainOnDisposalAccountId
     */

    /**
     * Default account that losses are posted to.
     *
     * @property string DefaultLossOnDisposalAccountId
     */

    /**
     * Default account that capital gains are posted to.
     *
     * @property string DefaultCapitalGainOnDisposalAccount
     */

    /**
     *
     *
     * @property string OptInForTax
     */

    /**
     * Get the resource uri of the class (Contacts) etc.
     *
     * @return string
     */
    public static function getResourceURI()
    {
        return 'Settings';
    }

    /**
     * Get the root node name.  Just the unqualified classname.
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'Setting';
    }

    /**
     * Get the guid property.
     *
     * @return string
     */
    public static function getGUIDProperty()
    {
        return '';
    }

    /**
     * Get the stem of the API (core.xro) etc.
     *
     * @return string|null
     */
    public static function getAPIStem()
    {
        return Remote\URL::API_ASSET;
    }

    /**
     * Get the supported methods.
     */
    public static function getSupportedMethods()
    {
        return [
            Remote\Request::METHOD_GET,
        ];
    }

    /**
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *  [4] - Saves directly.
     *
     * @return array
     */
    public static function getProperties()
    {
        return [
            'AssetNumberPrefix' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'AssetNumberSequence' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'AssetStartDate' => [false, self::PROPERTY_TYPE_DATE, '\\DateTimeInterface', false, false],
            'LastDepreciationDate' => [false, self::PROPERTY_TYPE_DATE, '\\DateTimeInterface', false, false],
            'DefaultGainOnDisposalAccountId' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'DefaultLossOnDisposalAccountId' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'DefaultCapitalGainOnDisposalAccount' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'OptInForTax' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'TaxStartDate' => [false, self::PROPERTY_TYPE_DATE, '\\DateTimeInterface', false, false],
        ];
    }

    public static function isPageable()
    {
        return false;
    }

    /**
     * @return string
     */
    public function getAssetNumberPrefix()
    {
        return $this->_data['AssetNumberPrefix'];
    }

    /**
     * @param string $value
     *
     * @return Setting
     */
    public function setAssetNumberPrefix($value)
    {
        $this->propertyUpdated('AssetNumberPrefix', $value);
        $this->_data['AssetNumberPrefix'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAssetNumberSequence()
    {
        return $this->_data['AssetNumberSequence'];
    }

    /**
     * @param string $value
     *
     * @return Setting
     */
    public function setAssetNumberSequence($value)
    {
        $this->propertyUpdated('AssetNumberSequence', $value);
        $this->_data['AssetNumberSequence'] = $value;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAssetStartDate()
    {
        return $this->_data['AssetStartDate'];
    }

    /**
     * @param \DateTimeInterface $value
     *
     * @return Setting
     */
    public function setAssetStartDate(\DateTimeInterface $value)
    {
        $this->propertyUpdated('AssetStartDate', $value);
        $this->_data['AssetStartDate'] = $value;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastDepreciationDate()
    {
        return $this->_data['LastDepreciationDate'];
    }

    /**
     * @param \DateTimeInterface $value
     *
     * @return Setting
     */
    public function setLastDepreciationDate(\DateTimeInterface $value)
    {
        $this->propertyUpdated('LastDepreciationDate', $value);
        $this->_data['LastDepreciationDate'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultGainOnDisposalAccountId()
    {
        return $this->_data['DefaultGainOnDisposalAccountId'];
    }

    /**
     * @param string $value
     *
     * @return Setting
     */
    public function setDefaultGainOnDisposalAccountId($value)
    {
        $this->propertyUpdated('DefaultGainOnDisposalAccountId', $value);
        $this->_data['DefaultGainOnDisposalAccountId'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultLossOnDisposalAccountId()
    {
        return $this->_data['DefaultLossOnDisposalAccountId'];
    }

    /**
     * @param string $value
     *
     * @return Setting
     */
    public function setDefaultLossOnDisposalAccountId($value)
    {
        $this->propertyUpdated('DefaultLossOnDisposalAccountId', $value);
        $this->_data['DefaultLossOnDisposalAccountId'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultCapitalGainOnDisposalAccount()
    {
        return $this->_data['DefaultCapitalGainOnDisposalAccount'];
    }

    /**
     * @param string $value
     *
     * @return Setting
     */
    public function setDefaultCapitalGainOnDisposalAccount($value)
    {
        $this->propertyUpdated('DefaultCapitalGainOnDisposalAccount', $value);
        $this->_data['DefaultCapitalGainOnDisposalAccount'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getOptInForTax()
    {
        return $this->_data['OptInForTax'];
    }

    /**
     * @param string $value
     *
     * @return Setting
     */
    public function setOptInForTax($value)
    {
        $this->propertyUpdated('OptInForTax', $value);
        $this->_data['OptInForTax'] = $value;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getTaxStartDate()
    {
        return $this->_data['TaxStartDate'];
    }

    /**
     * @param \DateTimeInterface $value
     * @return Setting
     */
    public function setTaxStartDate(\DateTimeInterface $value)
    {
        $this->propertyUpdated('TaxStartDate', $value);
        $this->_data['TaxStartDate'] = $value;
        return $this;
    }

}
