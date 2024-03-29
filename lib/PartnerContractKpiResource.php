<?php
/**
 * PartnerContractKpiResource
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ageras\Api
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ageras.com API
 *
 * this is the Ageras API
 *
 * OpenAPI spec version: 2.0
 * Contact: cto@ageras.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ageras\Api;

use \ArrayAccess;

/**
 * PartnerContractKpiResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PartnerContractKpiResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PartnerContractKpiResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'deallocations' => 'int',
        'binding_period_amount_excl_vat' => '\Ageras\Api\AmountResource',
        'is_active' => 'bool',
        'next_renewal_at' => 'string',
        'weighted_delivery_trend' => 'float'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'deallocations' => 'deallocations',
        'binding_period_amount_excl_vat' => 'binding_period_amount_excl_vat',
        'is_active' => 'is_active',
        'next_renewal_at' => 'next_renewal_at',
        'weighted_delivery_trend' => 'weighted_delivery_trend'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'deallocations' => 'setDeallocations',
        'binding_period_amount_excl_vat' => 'setBindingPeriodAmountExclVat',
        'is_active' => 'setIsActive',
        'next_renewal_at' => 'setNextRenewalAt',
        'weighted_delivery_trend' => 'setWeightedDeliveryTrend'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'deallocations' => 'getDeallocations',
        'binding_period_amount_excl_vat' => 'getBindingPeriodAmountExclVat',
        'is_active' => 'getIsActive',
        'next_renewal_at' => 'getNextRenewalAt',
        'weighted_delivery_trend' => 'getWeightedDeliveryTrend'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['deallocations'] = isset($data['deallocations']) ? $data['deallocations'] : null;
        $this->container['binding_period_amount_excl_vat'] = isset($data['binding_period_amount_excl_vat']) ? $data['binding_period_amount_excl_vat'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : false;
        $this->container['next_renewal_at'] = isset($data['next_renewal_at']) ? $data['next_renewal_at'] : null;
        $this->container['weighted_delivery_trend'] = isset($data['weighted_delivery_trend']) ? $data['weighted_delivery_trend'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets deallocations
     * @return int
     */
    public function getDeallocations()
    {
        return $this->container['deallocations'];
    }

    /**
     * Sets deallocations
     * @param int $deallocations The number of total deallocations.
     * @return $this
     */
    public function setDeallocations($deallocations)
    {
        $this->container['deallocations'] = $deallocations;

        return $this;
    }

    /**
     * Gets binding_period_amount_excl_vat
     * @return \Ageras\Api\AmountResource
     */
    public function getBindingPeriodAmountExclVat()
    {
        return $this->container['binding_period_amount_excl_vat'];
    }

    /**
     * Sets binding_period_amount_excl_vat
     * @param \Ageras\Api\AmountResource $binding_period_amount_excl_vat
     * @return $this
     */
    public function setBindingPeriodAmountExclVat($binding_period_amount_excl_vat)
    {
        $this->container['binding_period_amount_excl_vat'] = $binding_period_amount_excl_vat;

        return $this;
    }

    /**
     * Gets is_active
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     * @param bool $is_active Contract active status
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets next_renewal_at
     * @return string
     */
    public function getNextRenewalAt()
    {
        return $this->container['next_renewal_at'];
    }

    /**
     * Sets next_renewal_at
     * @param string $next_renewal_at Next renewal date
     * @return $this
     */
    public function setNextRenewalAt($next_renewal_at)
    {
        $this->container['next_renewal_at'] = $next_renewal_at;

        return $this;
    }

    /**
     * Gets weighted_delivery_trend
     * @return float
     */
    public function getWeightedDeliveryTrend()
    {
        return $this->container['weighted_delivery_trend'];
    }

    /**
     * Sets weighted_delivery_trend
     * @param float $weighted_delivery_trend Weighted delivery trend from all business units in current period
     * @return $this
     */
    public function setWeightedDeliveryTrend($weighted_delivery_trend)
    {
        $this->container['weighted_delivery_trend'] = $weighted_delivery_trend;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Ageras\Api\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Ageras\Api\ObjectSerializer::sanitizeForSerialization($this));
    }
}


