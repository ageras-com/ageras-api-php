<?php
/**
 * PartnerContractActionResource
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
 * PartnerContractActionResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PartnerContractActionResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PartnerContractActionResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action' => 'string',
        'action_data' => '\Ageras\Api\PartnerContractActionDataResource'
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
        'action' => 'action',
        'action_data' => 'action_data'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'action_data' => 'setActionData'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'action_data' => 'getActionData'
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

    const ACTION_UNKNOWN = 'unknown';
    const ACTION_CANCEL_NORMALLY = 'cancel_normally';
    const ACTION_CANCEL_IMMEDIATELY = 'cancel_immediately';
    const ACTION_ACCEPT = 'accept';
    const ACTION_ACCEPT_FOR_PARTNER = 'accept_for_partner';
    const ACTION_UNCANCEL_NORMAL_CANCELLATION = 'uncancel_normal_cancellation';
    const ACTION_ARCHIVE = 'archive';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_UNKNOWN,
            self::ACTION_CANCEL_NORMALLY,
            self::ACTION_CANCEL_IMMEDIATELY,
            self::ACTION_ACCEPT,
            self::ACTION_ACCEPT_FOR_PARTNER,
            self::ACTION_UNCANCEL_NORMAL_CANCELLATION,
            self::ACTION_ARCHIVE,
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : 'unknown';
        $this->container['action_data'] = isset($data['action_data']) ? $data['action_data'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["unknown", "cancel_normally", "cancel_immediately", "accept", "accept_for_partner", "uncancel_normal_cancellation", "archive"];
        if (!in_array($this->container['action'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'action', must be one of 'unknown', 'cancel_normally', 'cancel_immediately', 'accept', 'accept_for_partner', 'uncancel_normal_cancellation', 'archive'.";
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

        $allowed_values = ["unknown", "cancel_normally", "cancel_immediately", "accept", "accept_for_partner", "uncancel_normal_cancellation", "archive"];
        if (!in_array($this->container['action'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets action
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     * @param string $action Partner contract action.
     * @return $this
     */
    public function setAction($action)
    {
        $allowed_values = array('unknown', 'cancel_normally', 'cancel_immediately', 'accept', 'accept_for_partner', 'uncancel_normal_cancellation', 'archive');
        if (!is_null($action) && (!in_array($action, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'action', must be one of 'unknown', 'cancel_normally', 'cancel_immediately', 'accept', 'accept_for_partner', 'uncancel_normal_cancellation', 'archive'");
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets action_data
     * @return \Ageras\Api\PartnerContractActionDataResource
     */
    public function getActionData()
    {
        return $this->container['action_data'];
    }

    /**
     * Sets action_data
     * @param \Ageras\Api\PartnerContractActionDataResource $action_data
     * @return $this
     */
    public function setActionData($action_data)
    {
        $this->container['action_data'] = $action_data;

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


