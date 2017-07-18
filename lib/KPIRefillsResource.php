<?php
/**
 * KPIRefillsResource
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
 * KPIRefillsResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class KPIRefillsResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'KPIRefillsResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'avg_price' => '\Ageras\Api\KPIRefillsAvgPriceResource',
        'avg_threshold' => '\Ageras\Api\KPIRefillsAvgThresholdResource',
        'avg_package_size' => '\Ageras\Api\KPIRefillsAvgPackageSizeResource'
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
        'avg_price' => 'avg_price',
        'avg_threshold' => 'avg_threshold',
        'avg_package_size' => 'avg_package_size'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'avg_price' => 'setAvgPrice',
        'avg_threshold' => 'setAvgThreshold',
        'avg_package_size' => 'setAvgPackageSize'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'avg_price' => 'getAvgPrice',
        'avg_threshold' => 'getAvgThreshold',
        'avg_package_size' => 'getAvgPackageSize'
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
        $this->container['avg_price'] = isset($data['avg_price']) ? $data['avg_price'] : null;
        $this->container['avg_threshold'] = isset($data['avg_threshold']) ? $data['avg_threshold'] : null;
        $this->container['avg_package_size'] = isset($data['avg_package_size']) ? $data['avg_package_size'] : null;
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
     * Gets avg_price
     * @return \Ageras\Api\KPIRefillsAvgPriceResource
     */
    public function getAvgPrice()
    {
        return $this->container['avg_price'];
    }

    /**
     * Sets avg_price
     * @param \Ageras\Api\KPIRefillsAvgPriceResource $avg_price
     * @return $this
     */
    public function setAvgPrice($avg_price)
    {
        $this->container['avg_price'] = $avg_price;

        return $this;
    }

    /**
     * Gets avg_threshold
     * @return \Ageras\Api\KPIRefillsAvgThresholdResource
     */
    public function getAvgThreshold()
    {
        return $this->container['avg_threshold'];
    }

    /**
     * Sets avg_threshold
     * @param \Ageras\Api\KPIRefillsAvgThresholdResource $avg_threshold
     * @return $this
     */
    public function setAvgThreshold($avg_threshold)
    {
        $this->container['avg_threshold'] = $avg_threshold;

        return $this;
    }

    /**
     * Gets avg_package_size
     * @return \Ageras\Api\KPIRefillsAvgPackageSizeResource
     */
    public function getAvgPackageSize()
    {
        return $this->container['avg_package_size'];
    }

    /**
     * Sets avg_package_size
     * @param \Ageras\Api\KPIRefillsAvgPackageSizeResource $avg_package_size
     * @return $this
     */
    public function setAvgPackageSize($avg_package_size)
    {
        $this->container['avg_package_size'] = $avg_package_size;

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

