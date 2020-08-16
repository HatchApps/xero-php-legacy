<?php
namespace XeroHatch\Models\Assets;

use XeroHatch\Remote;
use XeroHatch\Models\Assets\AssetType\BookDepreciationSetting;
use XeroHatch\Models\Assets\Asset\BookDepreciationDetail;

class Asset extends Remote\Model
{

    /**
     * The Xero-generated Id for the asset
     *
     * @property string AssetId
     */

    /**
     * The name of the asset
     *
     * @property string AssetName
     */

    /**
     * Must be unique.
     *
     * @property string AssetNumber
     */

    /**
     * The Xero-generated Id for the asset type
     *
     * @property string AssetTypeId
     */

    /**
     * The date the asset was purchased YYYY-MM-DD
     *
     * @property string PurchaseDate
     */

    /**
     * The purchase price of the asset
     *
     * @property float PurchasePrice
     */

    /**
     * The date the asset was purchased YYYY-MM-DD
     *
     * @property string DisposalDate
     */

    /**
     * The price the asset was disposed at
     *
     * @property float DisposalPrice
     */

    /**
     * See Asset Status Codes.
     *
     * @property string AssetStatus
     */

    /**
     * The date the asset’s warranty expires (if needed) YYYY-MM-DD
     *
     * @property string WarrantyExpiryDate
     */

    /**
     * The asset's serial number
     *
     * @property string SerialNumber
     */

    /**
     * Boolean to indicate whether depreciation can be rolled back for this asset individually.
     * This is true if it doesn't have 'legacy' journal entries and if there is no lock period that would prevent
     * this asset from rolling back.
     *
     * @property boolean CanRollBack
     */

    /**
     * The accounting value of the asset
     *
     * @property float AccountingBookValue
     */

    /**
     * The Xero-generated Id for the original invoice
     *
     * @property string OriginalInvoiceId
     */

    /**
     * See BookDepreciationSetting
     *
     * @property BookDepreciationSetting BookDepreciationSetting
     */

    /**
     * See BookDepreciationDetail
     *
     * @property BookDepreciationDetail BookDepreciationDetail
     */

    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI()
    {
        return 'Assets';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'Asset';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty()
    {
        return 'AssetId';
    }


    /**
     * Get the stem of the API (core.xro) etc
     *
     * @return string|null
     */
    public static function getAPIStem()
    {
        return Remote\URL::API_ASSET;
    }


    /**
     * Get the supported methods
     */
    public static function getSupportedMethods()
    {
        return [
            Remote\Request::METHOD_GET,
            Remote\Request::METHOD_POST
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
            'AssetId' => [true, self::PROPERTY_TYPE_GUID, null, false, false],
            'AssetName' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'AssetNumber' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'AssetTypeId' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'PurchaseDate' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'PurchasePrice' => [true, self::PROPERTY_TYPE_FLOAT, null, false, false],
            'DisposalDate' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'DisposalPrice' => [true, self::PROPERTY_TYPE_FLOAT, null, false, false],
            'AssetStatus' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'WarrantyExpiryDate' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'SerialNumber' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'CanRollBack' => [true, self::PROPERTY_TYPE_BOOLEAN, null, false, false],
            'AccountingBookValue' => [true, self::PROPERTY_TYPE_FLOAT, null, false, false],
            'OriginalInvoiceId' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'BookDepreciationSetting' => [true, self::PROPERTY_TYPE_OBJECT, 'Assets\\AssetType\\BookDepreciationSetting', false, false],
            'BookDepreciationDetail' => [true, self::PROPERTY_TYPE_OBJECT, 'Assets\\Asset\\BookDepreciationDetail', false, false],
        ];
    }

    public static function isPageable()
    {
        return true;
    }

    /**
     * @return string
     */
    public function getAssetId()
    {
        return $this->_data['AssetId'];
    }

    /**
     * @return string
     */
    public function getAssetName()
    {
        return $this->_data['AssetName'];
    }

    /**
     * @param string $value
     * @return Asset
     */
    public function setAssetName($value)
    {
        $this->propertyUpdated('AssetName', $value);
        $this->_data['AssetName'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAssetNumber()
    {
        return $this->_data['AssetNumber'];
    }

    /**
     * @param string $value
     * @return Asset
     */
    public function setAssetNumber($value)
    {
        $this->propertyUpdated('AssetNumber', $value);
        $this->_data['AssetNumber'] = $value;
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
     * @return Asset
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
    public function getPurchaseDate()
    {
        return $this->_data['PurchaseDate'];
    }

    /**
     * @param string $value
     * @return Asset
     */
    public function setPurchaseDate($value)
    {
        $this->propertyUpdated('PurchaseDate', $value);
        $this->_data['PurchaseDate'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getPurchasePrice()
    {
        return $this->_data['PurchasePrice'];
    }

    /**
     * @param float $value
     * @return Asset
     */
    public function setPurchasePrice($value)
    {
        $this->propertyUpdated('PurchasePrice', $value);
        $this->_data['PurchasePrice'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisposalDate()
    {
        return $this->_data['DisposalDate'];
    }

    /**
     * @param string $value
     * @return Asset
     */
    public function setDisposalDate($value)
    {
        $this->propertyUpdated('DisposalDate', $value);
        $this->_data['DisposalDate'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getDisposalPrice()
    {
        return $this->_data['DisposalPrice'];
    }

    /**
     * @param float $value
     * @return Asset
     */
    public function setDisposalPrice($value)
    {
        $this->propertyUpdated('DisposalPrice', $value);
        $this->_data['DisposalPrice'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAssetStatus()
    {
        return $this->_data['AssetStatus'];
    }

    /**
     * @param string $value
     * @return Asset
     */
    public function setAssetStatus($value)
    {
        $this->propertyUpdated('AssetStatus', $value);
        $this->_data['AssetStatus'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getWarrantyExpiryDate()
    {
        return $this->_data['WarrantyExpiryDate'];
    }

    /**
     * @param string $value
     * @return Asset
     */
    public function setWarrantyExpiryDate($value)
    {
        $this->propertyUpdated('WarrantyExpiryDate', $value);
        $this->_data['WarrantyExpiryDate'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->_data['SerialNumber'];
    }

    /**
     * @param string $value
     * @return Asset
     */
    public function setSerialNumber($value)
    {
        $this->propertyUpdated('SerialNumber', $value);
        $this->_data['SerialNumber'] = $value;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getCanRollBack()
    {
        return $this->_data['CanRollBack'];
    }

    /**
     * @param boolean $value
     * @return Asset
     */
    public function setCanRollBack($value)
    {
        $this->propertyUpdated('CanRollBack', $value);
        $this->_data['CanRollBack'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getAccountingBookValue()
    {
        return $this->_data['AccountingBookValue'];
    }

    /**
     * @param float $value
     * @return Asset
     */
    public function setAccountingBookValue($value)
    {
        $this->propertyUpdated('AccountingBookValue', $value);
        $this->_data['AccountingBookValue'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getOriginalInvoiceId()
    {
        return $this->_data['OriginalInvoiceId'];
    }

    /**
     * @param string $value
     * @return Asset
     */
    public function setOriginalInvoiceId($value)
    {
        $this->propertyUpdated('OriginalInvoiceId', $value);
        $this->_data['OriginalInvoiceId'] = $value;
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
     * @return Asset
     */
    public function setBookDepreciationSetting(BookDepreciationSetting $value)
    {
        $this->propertyUpdated('BookDepreciationSetting', $value);
        $this->_data['BookDepreciationSetting'] = $value;
        return $this;
    }

    /**
     * @return BookDepreciationDetail
     */
    public function getBookDepreciationDetail()
    {
        return $this->_data['BookDepreciationDetail'];
    }

    /**
     * @param BookDepreciationDetail $value
     * @return Asset
     */
    public function setBookDepreciationDetail(BookDepreciationDetail $value)
    {
        $this->propertyUpdated('BookDepreciationDetail', $value);
        $this->_data['BookDepreciationDetail'] = $value;
        return $this;
    }

}
