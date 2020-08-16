<?php
namespace XeroHatch\Models\Assets\Asset;

use XeroHatch\Remote;

class BookDepreciationDetail extends Remote\Model
{

    /**
     * When an asset is disposed, this will be the sell price minus the purchase price if a profit was made.
     *
     * @property float CurrentCapitalGain
     */

    /**
     * When an asset is disposed, this will be the lowest one of sell price or purchase price, minus the current book value.
     *
     * @property float CurrentGainLoss
     */

    /**
     * YYYY-MM-DD
     *
     * @property string DepreciationStartDate
     */

    /**
     * The value of the asset you want to depreciate, if this is less than the cost of the asset.
     *
     * @property float CostLimit
     */

    /**
     * 	The value of the asset remaining when you've fully depreciated it.
     *
     * @property float ResidualValue
     */

    /**
     * All depreciation prior to the current financial year.
     *
     * @property float PriorAccumDepreciationAmount
     */

    /**
     * All depreciation occurring in the current financial year.
     *
     * @property float CurrentAccumDepreciationAmount
     */

    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI()
    {
        return 'BookDepreciationDetail';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'BookDepreciationDetail';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty()
    {
        return '';
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
            'CurrentCapitalGain' => [false, self::PROPERTY_TYPE_FLOAT, null, false, false],
            'CurrentGainLoss' => [false, self::PROPERTY_TYPE_FLOAT, null, false, false],
            'DepreciationStartDate' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'CostLimit' => [false, self::PROPERTY_TYPE_FLOAT, null, true, false],
            'ResidualValue' => [false, self::PROPERTY_TYPE_FLOAT, null, false, false],
            'PriorAccumDepreciationAmount' => [false, self::PROPERTY_TYPE_FLOAT, null, false, false],
            'CurrentAccumDepreciationAmount' => [false, self::PROPERTY_TYPE_FLOAT, null, false, false]
        ];
    }

    public static function isPageable()
    {
        return false;
    }

    /**
     * @return float
     */
    public function getCurrentCapitalGain()
    {
        return $this->_data['CurrentCapitalGain'];
    }

    /**
     * @param float $value
     * @return BookDepreciationDetail
     */
    public function setCurrentCapitalGain($value)
    {
        $this->propertyUpdated('CurrentCapitalGain', $value);
        $this->_data['CurrentCapitalGain'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getCurrentGainLoss()
    {
        return $this->_data['CurrentGainLoss'];
    }

    /**
     * @param float $value
     * @return BookDepreciationDetail
     */
    public function setCurrentGainLoss($value)
    {
        $this->propertyUpdated('CurrentGainLoss', $value);
        $this->_data['CurrentGainLoss'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepreciationStartDate()
    {
        return $this->_data['DepreciationStartDate'];
    }

    /**
     * @param string $value
     * @return BookDepreciationDetail
     */
    public function setDepreciationStartDate($value)
    {
        $this->propertyUpdated('DepreciationStartDate', $value);
        $this->_data['DepreciationStartDate'] = $value;
        return $this;
    }

    /**
     * @return float
     * Always returns a collection, switch is for type hinting
     */
    public function getCostLimit()
    {
        return $this->_data['CostLimit'];
    }

    /**
     * @param float $value
     * @return BookDepreciationDetail
     */
    public function addCostLimit($value)
    {
        $this->propertyUpdated('addCostLimit', $value);
        $this->_data['addCostLimit'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getResidualValue()
    {
        return $this->_data['ResidualValue'];
    }

    /**
     * @param float $value
     * @return BookDepreciationDetail
     */
    public function setResidualValue($value)
    {
        $this->propertyUpdated('ResidualValue', $value);
        $this->_data['ResidualValue'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriorAccumDepreciationAmount()
    {
        return $this->_data['PriorAccumDepreciationAmount'];
    }

    /**
     * @param float $value
     * @return BookDepreciationDetail
     */
    public function setPriorAccumDepreciationAmount($value)
    {
        $this->propertyUpdated('PriorAccumDepreciationAmount', $value);
        $this->_data['PriorAccumDepreciationAmount'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getCurrentAccumDepreciationAmount()
    {
        return $this->_data['CurrentAccumDepreciationAmount'];
    }

    /**
     * @param float $value
     * @return BookDepreciationDetail
     */
    public function setCurrentAccumDepreciationAmount($value)
    {
        $this->propertyUpdated('CurrentAccumDepreciationAmount', $value);
        $this->_data['CurrentAccumDepreciationAmount'] = $value;
        return $this;
    }

}
