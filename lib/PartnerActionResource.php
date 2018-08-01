<?php
/**
 * PartnerActionResource
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
 * PartnerActionResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PartnerActionResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PartnerActionResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action' => 'string',
        'note' => 'string',
        'next_action_at' => 'string'
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
        'note' => 'note',
        'next_action_at' => 'next_action_at'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'note' => 'setNote',
        'next_action_at' => 'setNextActionAt'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'note' => 'getNote',
        'next_action_at' => 'getNextActionAt'
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
    const ACTION_MAKE_PARTNER = 'make-partner';
    const ACTION_MAKE_DEMO = 'make-demo';
    const ACTION_CONTINUE_DEMO = 'continue-demo';
    const ACTION_NOT_INTERESTED = 'not-interested';
    const ACTION_STRIPE_SYNC = 'stripe-sync';
    const ACTION_CANVAS_POSTPONE = 'canvas-postpone';
    const ACTION_CANVAS_NOT_IN_INDUSTRY = 'canvas-not-in-industry';
    const ACTION_CANVAS_OUT_OF_BUSINESS = 'canvas-out-of-business';
    const ACTION_CANVAS_ALREADY_PARTNER = 'canvas-already-partner';
    const ACTION_CANVAS_NOT_RELEVANT = 'canvas-not-relevant';
    const ACTION_EMPLOYEE_CALLS_PARTNER = 'employee-calls-partner';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_UNKNOWN,
            self::ACTION_MAKE_PARTNER,
            self::ACTION_MAKE_DEMO,
            self::ACTION_CONTINUE_DEMO,
            self::ACTION_NOT_INTERESTED,
            self::ACTION_STRIPE_SYNC,
            self::ACTION_CANVAS_POSTPONE,
            self::ACTION_CANVAS_NOT_IN_INDUSTRY,
            self::ACTION_CANVAS_OUT_OF_BUSINESS,
            self::ACTION_CANVAS_ALREADY_PARTNER,
            self::ACTION_CANVAS_NOT_RELEVANT,
            self::ACTION_EMPLOYEE_CALLS_PARTNER,
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
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['next_action_at'] = isset($data['next_action_at']) ? $data['next_action_at'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["unknown", "make-partner", "make-demo", "continue-demo", "not-interested", "stripe-sync", "canvas-postpone", "canvas-not-in-industry", "canvas-out-of-business", "canvas-already-partner", "canvas-not-relevant", "employee-calls-partner"];
        if (!in_array($this->container['action'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'action', must be one of 'unknown', 'make-partner', 'make-demo', 'continue-demo', 'not-interested', 'stripe-sync', 'canvas-postpone', 'canvas-not-in-industry', 'canvas-out-of-business', 'canvas-already-partner', 'canvas-not-relevant', 'employee-calls-partner'.";
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

        $allowed_values = ["unknown", "make-partner", "make-demo", "continue-demo", "not-interested", "stripe-sync", "canvas-postpone", "canvas-not-in-industry", "canvas-out-of-business", "canvas-already-partner", "canvas-not-relevant", "employee-calls-partner"];
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
     * @param string $action Partner action
     * @return $this
     */
    public function setAction($action)
    {
        $allowed_values = array('unknown', 'make-partner', 'make-demo', 'continue-demo', 'not-interested', 'stripe-sync', 'canvas-postpone', 'canvas-not-in-industry', 'canvas-out-of-business', 'canvas-already-partner', 'canvas-not-relevant', 'employee-calls-partner');
        if (!is_null($action) && (!in_array($action, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'action', must be one of 'unknown', 'make-partner', 'make-demo', 'continue-demo', 'not-interested', 'stripe-sync', 'canvas-postpone', 'canvas-not-in-industry', 'canvas-out-of-business', 'canvas-already-partner', 'canvas-not-relevant', 'employee-calls-partner'");
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets note
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     * @param string $note Action note
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets next_action_at
     * @return string
     */
    public function getNextActionAt()
    {
        return $this->container['next_action_at'];
    }

    /**
     * Sets next_action_at
     * @param string $next_action_at Next action at
     * @return $this
     */
    public function setNextActionAt($next_action_at)
    {
        $this->container['next_action_at'] = $next_action_at;

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


