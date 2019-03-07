<?php
/**
 * PartnerBusinessUnitRevenueRangeResource
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
 * PartnerBusinessUnitRevenueRangeResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PartnerBusinessUnitRevenueRangeResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PartnerBusinessUnitRevenueRangeResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'minimum_revenue' => 'float',
        'maximum_revenue' => 'float',
        'revenue_currency' => 'string'
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
        'minimum_revenue' => 'minimum_revenue',
        'maximum_revenue' => 'maximum_revenue',
        'revenue_currency' => 'revenue_currency'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'minimum_revenue' => 'setMinimumRevenue',
        'maximum_revenue' => 'setMaximumRevenue',
        'revenue_currency' => 'setRevenueCurrency'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'minimum_revenue' => 'getMinimumRevenue',
        'maximum_revenue' => 'getMaximumRevenue',
        'revenue_currency' => 'getRevenueCurrency'
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
        $this->container['minimum_revenue'] = isset($data['minimum_revenue']) ? $data['minimum_revenue'] : null;
        $this->container['maximum_revenue'] = isset($data['maximum_revenue']) ? $data['maximum_revenue'] : null;
        $this->container['revenue_currency'] = isset($data['revenue_currency']) ? $data['revenue_currency'] : null;
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
     * Gets minimum_revenue
     * @return float
     */
    public function getMinimumRevenue()
    {
        return $this->container['minimum_revenue'];
    }

    /**
     * Sets minimum_revenue
     * @param float $minimum_revenue Minimum revenue.
     * @return $this
     */
    public function setMinimumRevenue($minimum_revenue)
    {
        $this->container['minimum_revenue'] = $minimum_revenue;

        return $this;
    }

    /**
     * Gets maximum_revenue
     * @return float
     */
    public function getMaximumRevenue()
    {
        return $this->container['maximum_revenue'];
    }

    /**
     * Sets maximum_revenue
     * @param float $maximum_revenue Maximum revenue.
     * @return $this
     */
    public function setMaximumRevenue($maximum_revenue)
    {
        $this->container['maximum_revenue'] = $maximum_revenue;

        return $this;
    }

    /**
     * Gets revenue_currency
     * @return string
     */
    public function getRevenueCurrency()
    {
        return $this->container['revenue_currency'];
    }

    /**
     * Sets revenue_currency
     * @param string $revenue_currency Currency for the min and max revenues.
     * @return $this
     */
    public function setRevenueCurrency($revenue_currency)
    {
        $this->container['revenue_currency'] = $revenue_currency;

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


