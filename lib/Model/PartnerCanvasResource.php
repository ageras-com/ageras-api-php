<?php
/**
 * PartnerCanvasResource
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ageras\Api
 * @author   Swagger Codegen team
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

namespace Ageras\Api\Model;

use \ArrayAccess;

/**
 * PartnerCanvasResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PartnerCanvasResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PartnerCanvasResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => 'string'
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
        'status' => 'status'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus'
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

    const STATUS_UNKNOWN = 'unknown';
    const STATUS_UNTREATED = 'untreated';
    const STATUS_POSTPONED = 'postponed';
    const STATUS_NOT_RELEVANT = 'not_relevant';
    const STATUS_NOT_INTERESTED = 'not_interested';
    const STATUS_ALREADY_PARTNER = 'already_partner';
    const STATUS_X_PARTNER = 'x_partner';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_UNKNOWN,
            self::STATUS_UNTREATED,
            self::STATUS_POSTPONED,
            self::STATUS_NOT_RELEVANT,
            self::STATUS_NOT_INTERESTED,
            self::STATUS_ALREADY_PARTNER,
            self::STATUS_X_PARTNER,
        ];
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : 'unknown';
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["unknown", "untreated", "postponed", "not_relevant", "not_interested", "already_partner", "x_partner"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'unknown', 'untreated', 'postponed', 'not_relevant', 'not_interested', 'already_partner', 'x_partner'.";
        }

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

        $allowed_values = ["unknown", "untreated", "postponed", "not_relevant", "not_interested", "already_partner", "x_partner"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Canvas status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('unknown', 'untreated', 'postponed', 'not_relevant', 'not_interested', 'already_partner', 'x_partner');
        if (!is_null($status) && (!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'unknown', 'untreated', 'postponed', 'not_relevant', 'not_interested', 'already_partner', 'x_partner'");
        }
        $this->container['status'] = $status;

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


