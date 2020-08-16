<?php

namespace XeroHatch\Models\Assets\AssetType;

use XeroHatch\Remote;

class BookDepreciationSetting extends Remote\Model
{
    /**
     * The method of depreciation applied to this asset. See Depreciation Methods.
     *
     * @property string DepreciationMethod
     */

    /**
     * The method of averaging applied to this asset. See Averaging Methods.
     *
     * @property string AveragingMethod
     */

    /**
     * The rate of depreciation (e.g. 0.05).
     *
     * @property float DepreciationRate
     */

    /**
     * The effective life of the assets of this type in years. Not required if using depreciationRate.
     *
     * @property float[] EffectiveLifeYears
     */

    /**
     * See Depreciation Calculation Methods.
     *
     * @property string DepreciationCalculationMethod
     */

    /**
     * @property string BookEffectiveDateOfChangeId
     */

    /**
     * @property string CostLimit
     */

    /**
     * @property string DepreciableObjectId
     */

    /**
     * @property string DepreciableObjectType
     */

    /**
     * @property string EffectiveFromDate
     */

    /**
     * @property string PrivateUsePercentage
     */

    /**
     * @property string ResidualValue
     */

    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI()
    {
        return 'BookDepreciationSetting';
    }

    /**
     * Get the root node name.  Just the unqualified classname.
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'BookDepreciationSetting';
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
            'DepreciationMethod' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'AveragingMethod' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'DepreciationRate' => [false, self::PROPERTY_TYPE_FLOAT, null, false, false],
            'EffectiveLifeYears' => [false, self::PROPERTY_TYPE_FLOAT, null, true, false],
            'DepreciationCalculationMethod' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'BookEffectiveDateOfChangeId' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'CostLimit' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'DepreciableObjectId' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'DepreciableObjectType' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'EffectiveFromDate' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'PrivateUsePercentage' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'ResidualValue' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
        ];
    }

    public static function isPageable()
    {
        return false;
    }

    /**
     * @return string
     */
    public function getDepreciationMethod()
    {
        return $this->_data['DepreciationMethod'];
    }

    /**
     * @param string $value
     *
     * @return BookDepreciationSetting
     */
    public function setDepreciationMethod($value)
    {
        $this->propertyUpdated('DepreciationMethod', $value);
        $this->_data['DepreciationMethod'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAveragingMethod()
    {
        return $this->_data['AveragingMethod'];
    }

    /**
     * @param string $value
     *
     * @return BookDepreciationSetting
     */
    public function setAveragingMethod($value)
    {
        $this->propertyUpdated('AveragingMethod', $value);
        $this->_data['AveragingMethod'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getDepreciationRate()
    {
        return $this->_data['DepreciationRate'];
    }

    /**
     * @param float $value
     *
     * @return BookDepreciationSetting
     */
    public function setDepreciationRate($value)
    {
        $this->propertyUpdated('DepreciationRate', $value);
        $this->_data['DepreciationRate'] = $value;
        return $this;
    }

    /**
     * @return float[]|Remote\Collection
     */
    public function getEffectiveLifeYears()
    {
        return $this->_data['EffectiveLifeYears'];
    }

    /**
     * @param float $value
     *
     * @return BookDepreciationSetting
     */
    public function addEffectiveLifeYear($value)
    {
        $this->propertyUpdated('EffectiveLifeYears', $value);
        if (!isset($this->_data['EffectiveLifeYears'])) {
            $this->_data['EffectiveLifeYears'] = new Remote\Collection();
        }
        $this->_data['EffectiveLifeYears'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepreciationCalculationMethod()
    {
        return $this->_data['DepreciationCalculationMethod'];
    }

    /**
     * @param string $value
     *
     * @return BookDepreciationSetting
     */
    public function setDepreciationCalculationMethod($value)
    {
        $this->propertyUpdated('DepreciationCalculationMethod', $value);
        $this->_data['DepreciationCalculationMethod'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getBookEffectiveDateOfChangeId()
    {
        return $this->_data['BookEffectiveDateOfChangeId'];
    }

    /**
     * @param string $value
     * @return BookDepreciationSetting
     */
    public function setBookEffectiveDateOfChangeId($value)
    {
        $this->propertyUpdated('BookEffectiveDateOfChangeId', $value);
        $this->_data['BookEffectiveDateOfChangeId'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getCostLimit()
    {
        return $this->_data['CostLimit'];
    }

    /**
     * @param string $value
     * @return BookDepreciationSetting
     */
    public function setCostLimit($value)
    {
        $this->propertyUpdated('CostLimit', $value);
        $this->_data['CostLimit'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepreciableObjectId()
    {
        return $this->_data['DepreciableObjectId'];
    }

    /**
     * @param string $value
     * @return BookDepreciationSetting
     */
    public function setDepreciableObjectId($value)
    {
        $this->propertyUpdated('DepreciableObjectId', $value);
        $this->_data['DepreciableObjectId'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepreciableObjectType()
    {
        return $this->_data['DepreciableObjectType'];
    }

    /**
     * @param string $value
     * @return BookDepreciationSetting
     */
    public function setDepreciableObjectType($value)
    {
        $this->propertyUpdated('DepreciableObjectType', $value);
        $this->_data['DepreciableObjectType'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEffectiveFromDate()
    {
        return $this->_data['EffectiveFromDate'];
    }

    /**
     * @param string $value
     * @return BookDepreciationSetting
     */
    public function setEffectiveFromDate($value)
    {
        $this->propertyUpdated('EffectiveFromDate', $value);
        $this->_data['EffectiveFromDate'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrivateUsePercentage()
    {
        return $this->_data['PrivateUsePercentage'];
    }

    /**
     * @param string $value
     * @return BookDepreciationSetting
     */
    public function setPrivateUsePercentage($value)
    {
        $this->propertyUpdated('PrivateUsePercentage', $value);
        $this->_data['PrivateUsePercentage'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getResidualValue()
    {
        return $this->_data['ResidualValue'];
    }

    /**
     * @param string $value
     * @return BookDepreciationSetting
     */
    public function setResidualValue($value)
    {
        $this->propertyUpdated('ResidualValue', $value);
        $this->_data['ResidualValue'] = $value;
        return $this;
    }


}
