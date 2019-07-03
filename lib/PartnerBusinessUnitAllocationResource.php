<?php
/**
 * PartnerBusinessUnitAllocationResource
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
 * PartnerBusinessUnitAllocationResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PartnerBusinessUnitAllocationResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PartnerBusinessUnitAllocationResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'effective_at' => 'string',
        'allocation_count' => 'int',
        'allocation_quota_per_refill' => 'int'
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
        'effective_at' => 'effective_at',
        'allocation_count' => 'allocation_count',
        'allocation_quota_per_refill' => 'allocation_quota_per_refill'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'effective_at' => 'setEffectiveAt',
        'allocation_count' => 'setAllocationCount',
        'allocation_quota_per_refill' => 'setAllocationQuotaPerRefill'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'effective_at' => 'getEffectiveAt',
        'allocation_count' => 'getAllocationCount',
        'allocation_quota_per_refill' => 'getAllocationQuotaPerRefill'
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
        $this->container['effective_at'] = isset($data['effective_at']) ? $data['effective_at'] : null;
        $this->container['allocation_count'] = isset($data['allocation_count']) ? $data['allocation_count'] : null;
        $this->container['allocation_quota_per_refill'] = isset($data['allocation_quota_per_refill']) ? $data['allocation_quota_per_refill'] : null;
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
     * Gets effective_at
     * @return string
     */
    public function getEffectiveAt()
    {
        return $this->container['effective_at'];
    }

    /**
     * Sets effective_at
     * @param string $effective_at When this quota is effective from.
     * @return $this
     */
    public function setEffectiveAt($effective_at)
    {
        $this->container['effective_at'] = $effective_at;

        return $this;
    }

    /**
     * Gets allocation_count
     * @return int
     */
    public function getAllocationCount()
    {
        return $this->container['allocation_count'];
    }

    /**
     * Sets allocation_count
     * @param int $allocation_count Number of allocations.
     * @return $this
     */
    public function setAllocationCount($allocation_count)
    {
        $this->container['allocation_count'] = $allocation_count;

        return $this;
    }

    /**
     * Gets allocation_quota_per_refill
     * @return int
     */
    public function getAllocationQuotaPerRefill()
    {
        return $this->container['allocation_quota_per_refill'];
    }

    /**
     * Sets allocation_quota_per_refill
     * @param int $allocation_quota_per_refill Number of leads available for allocation per refill, e.g. each month.
     * @return $this
     */
    public function setAllocationQuotaPerRefill($allocation_quota_per_refill)
    {
        $this->container['allocation_quota_per_refill'] = $allocation_quota_per_refill;

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


