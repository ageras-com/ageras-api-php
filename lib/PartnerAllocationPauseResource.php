<?php
/**
 * PartnerAllocationPauseResource
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
 * PartnerAllocationPauseResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PartnerAllocationPauseResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PartnerAllocationPauseResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'starts_at' => 'string',
        'ends_at' => 'string',
        'partner_contract_id' => 'int[]'
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
        'starts_at' => 'starts_at',
        'ends_at' => 'ends_at',
        'partner_contract_id' => 'partner_contract_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'starts_at' => 'setStartsAt',
        'ends_at' => 'setEndsAt',
        'partner_contract_id' => 'setPartnerContractId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'starts_at' => 'getStartsAt',
        'ends_at' => 'getEndsAt',
        'partner_contract_id' => 'getPartnerContractId'
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
        $this->container['starts_at'] = isset($data['starts_at']) ? $data['starts_at'] : null;
        $this->container['ends_at'] = isset($data['ends_at']) ? $data['ends_at'] : null;
        $this->container['partner_contract_id'] = isset($data['partner_contract_id']) ? $data['partner_contract_id'] : null;
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
     * Gets starts_at
     * @return string
     */
    public function getStartsAt()
    {
        return $this->container['starts_at'];
    }

    /**
     * Sets starts_at
     * @param string $starts_at When should the adjustment start taking effect.
     * @return $this
     */
    public function setStartsAt($starts_at)
    {
        $this->container['starts_at'] = $starts_at;

        return $this;
    }

    /**
     * Gets ends_at
     * @return string
     */
    public function getEndsAt()
    {
        return $this->container['ends_at'];
    }

    /**
     * Sets ends_at
     * @param string $ends_at When should the adjustment stop having an effect.
     * @return $this
     */
    public function setEndsAt($ends_at)
    {
        $this->container['ends_at'] = $ends_at;

        return $this;
    }

    /**
     * Gets partner_contract_id
     * @return int[]
     */
    public function getPartnerContractId()
    {
        return $this->container['partner_contract_id'];
    }

    /**
     * Sets partner_contract_id
     * @param int[] $partner_contract_id Contracts affected by this adjustment.
     * @return $this
     */
    public function setPartnerContractId($partner_contract_id)
    {
        $this->container['partner_contract_id'] = $partner_contract_id;

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

