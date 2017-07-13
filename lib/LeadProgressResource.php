<?php
/**
 * LeadProgressResource
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
 * LeadProgressResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LeadProgressResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LeadProgressResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'step' => 'string',
        'is_completed' => 'bool'
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
        'step' => 'step',
        'is_completed' => 'is_completed'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'step' => 'setStep',
        'is_completed' => 'setIsCompleted'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'step' => 'getStep',
        'is_completed' => 'getIsCompleted'
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

    const STEP_NONE = 'none';
    const STEP_VALIDATION = 'validation';
    const STEP_AWAITING_OFFERS = 'awaiting_offers';
    const STEP_MATCH_VALIDATION = 'match_validation';
    const STEP_FOLLOW_UP = 'follow_up';
    const STEP_DONE = 'done';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStepAllowableValues()
    {
        return [
            self::STEP_NONE,
            self::STEP_VALIDATION,
            self::STEP_AWAITING_OFFERS,
            self::STEP_MATCH_VALIDATION,
            self::STEP_FOLLOW_UP,
            self::STEP_DONE,
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
        $this->container['step'] = isset($data['step']) ? $data['step'] : 'none';
        $this->container['is_completed'] = isset($data['is_completed']) ? $data['is_completed'] : false;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["none", "validation", "awaiting_offers", "awaiting_quotes", "match_validation", "follow_up", "done"];
        if (!in_array($this->container['step'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'step', must be one of 'none', 'validation', 'awaiting_offers', 'match_validation', 'follow_up', 'done'.";
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

        $allowed_values = ["none", "validation", "awaiting_offers", "match_validation", "follow_up", "done"];
        if (!in_array($this->container['step'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets step
     * @return string
     */
    public function getStep()
    {
        return $this->container['step'];
    }

    /**
     * Sets step
     * @param string $step Progress step
     * @return $this
     */
    public function setStep($step)
    {
        $allowed_values = array('none', 'validation', 'awaiting_offers', 'match_validation', 'follow_up', 'done');
        if (!is_null($step) && (!in_array($step, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'step', must be one of 'none', 'validation', 'awaiting_offers', 'match_validation', 'follow_up', 'done'");
        }
        $this->container['step'] = $step;

        return $this;
    }

    /**
     * Gets is_completed
     * @return bool
     */
    public function getIsCompleted()
    {
        return $this->container['is_completed'];
    }

    /**
     * Sets is_completed
     * @param bool $is_completed Has been completed
     * @return $this
     */
    public function setIsCompleted($is_completed)
    {
        $this->container['is_completed'] = $is_completed;

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


