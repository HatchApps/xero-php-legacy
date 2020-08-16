<?php

namespace XeroHatch\Models\Assets;

use XeroHatch\Remote;
use XeroHatch\Models\Assets\AssetType\BookDepreciationSetting;

class AssetType extends Remote\Model
{
    /**
     * The name of the asset type.
     *
     * @property string AssetTypeName
     */

    /**
     * The asset account for fixed assets of this type.
     *
     * @property string FixedAssetAccountId
     */

    /**
     * The expense account for the depreciation of fixed assets of this type.
     *
     * @property string DepreciationExpenseAccountId
     */

    /**
     * The account for accumulated depreciation of fixed assets of this type.
     *
     * @property string AccumulatedDepreciationAccountId
     */

    /**
     * See bookDepreciationSetting.
     *
     * @property BookDepreciationSetting BookDepreciationSetting
     */

    /**
     * Xero generated unique identifier for asset types.
     *
     * @property string AssetTypeId
     */

    /**
     * All asset types that have accumulated  depreciation for any assets that use them are deemed
     * ‘locked’ and cannot be removed.
     *
     * @property string Locks
     */

    /**
     *
     * @property string LockPrivateUseAccount
     */

    /**
     *
     * @property string PrivateUseAccountId
     */

    /**
     *
     * @property string TaxDepreciationSettings
     */

    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI()
    {
        return 'AssetTypes';
    }

    /**
     * Get the root node name.  Just the unqualified classname.
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'AssetType';
    }

    /**
     * Get the guid property.
     *
     * @return string
     */
    public static function getGUIDProperty()
    {
        return 'AssetTypeId';
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
            Remote\Request::METHOD_POST,
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
            'AssetTypeName' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'FixedAssetAccountId' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'DepreciationExpenseAccountId' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'AccumulatedDepreciationAccountId' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'BookDepreciationSetting' => [true, self::PROPERTY_TYPE_OBJECT, 'Assets\\AssetType\\BookDepreciationSetting', false, false],
            'AssetTypeId' => [true, self::PROPERTY_TYPE_GUID, null, false, false],
            'Locks' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'LockPrivateUseAccount' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'PrivateUseAccountId' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'TaxDepreciationSettings' => [true, self::PROPERTY_TYPE_STRING, null, false, false]
        ];
    }

    public static function isPageable()
    {
        return false;
    }

    /**
     * @return string
     */
    public function getAssetTypeName()
    {
        return $this->_data['AssetTypeName'];
    }

    /**
     * @param string $value
     *
     * @return AssetType
     */
    public function setAssetTypeName($value)
    {
        $this->propertyUpdated('AssetTypeName', $value);
        $this->_data['AssetTypeName'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getFixedAssetAccountId()
    {
        return $this->_data['FixedAssetAccountId'];
    }

    /**
     * @param string $value
     *
     * @return AssetType
     */
    public function setFixedAssetAccountId($value)
    {
        $this->propertyUpdated('FixedAssetAccountId', $value);
        $this->_data['FixedAssetAccountId'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepreciationExpenseAccountId()
    {
        return $this->_data['DepreciationExpenseAccountId'];
    }

    /**
     * @param string $value
     *
     * @return AssetType
     */
    public function setDepreciationExpenseAccountId($value)
    {
        $this->propertyUpdated('DepreciationExpenseAccountId', $value);
        $this->_data['DepreciationExpenseAccountId'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccumulatedDepreciationAccountId()
    {
        return $this->_data['AccumulatedDepreciationAccountId'];
    }

    /**
     * @param string $value
     *
     * @return AssetType
     */
    public function setAccumulatedDepreciationAccountId($value)
    {
        $this->propertyUpdated('AccumulatedDepreciationAccountId', $value);
        $this->_data['AccumulatedDepreciationAccountId'] = $value;
        return $this;
    }

    /**
     * @return BookDepreciationSetting
     */
    public function getBookDepreciationSetting()
    {
        return $this->_data['BookDepreciationSetting'];
    }

    /**
     * @param BookDepreciationSetting $value
     *
     * @return AssetType
     */
    public function setBookDepreciationSetting(BookDepreciationSetting $value)
    {
        $this->propertyUpdated('BookDepreciationSetting', $value);
        $this->_data['BookDepreciationSetting'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getAssetTypeId()
    {
        return $this->_data['AssetTypeId'];
    }

    /**
     * @param string $value
     *
     * @return AssetType
     */
    public function setAssetTypeId($value)
    {
        $this->propertyUpdated('AssetTypeId', $value);
        $this->_data['AssetTypeId'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocks()
    {
        return $this->_data['Locks'];
    }

    /**
     * @param string $value
     *
     * @return AssetType
     */
    public function setLock($value)
    {
        $this->propertyUpdated('Locks', $value);
        $this->_data['Locks'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getLockPrivateUseAccount()
    {
        return $this->_data['LockPrivateUseAccount'];
    }

    /**
     * @param string $value
     * @return AssetType
     */
    public function setLockPrivateUseAccount($value)
    {
        $this->propertyUpdated('LockPrivateUseAccount', $value);
        $this->_data['LockPrivateUseAccount'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrivateUseAccountId()
    {
        return $this->_data['PrivateUseAccountId'];
    }

    /**
     * @param string $value
     * @return AssetType
     */
    public function setPrivateUseAccountId($value)
    {
        $this->propertyUpdated('PrivateUseAccountId', $value);
        $this->_data['PrivateUseAccountId'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxDepreciationSettings()
    {
        return $this->_data['TaxDepreciationSettings'];
    }

    /**
     * @param string $value
     * @return AssetType
     */
    public function setTaxDepreciationSettings($value)
    {
        $this->propertyUpdated('TaxDepreciationSettings', $value);
        $this->_data['TaxDepreciationSettings'] = $value;
        return $this;
    }

}
