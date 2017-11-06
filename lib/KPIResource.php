<?php
/**
 * KpiResource
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
 * KpiResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class KpiResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'KpiResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'calls_made' => 'int',
        'actions_taken' => 'int',
        'validation_efficiency_long_term' => 'int',
        'validation_efficiency_short_term' => 'int'
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
        'calls_made' => 'calls_made',
        'actions_taken' => 'actions_taken',
        'validation_efficiency_long_term' => 'validation_efficiency_long_term',
        'validation_efficiency_short_term' => 'validation_efficiency_short_term'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'calls_made' => 'setCallsMade',
        'actions_taken' => 'setActionsTaken',
        'validation_efficiency_long_term' => 'setValidationEfficiencyLongTerm',
        'validation_efficiency_short_term' => 'setValidationEfficiencyShortTerm'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'calls_made' => 'getCallsMade',
        'actions_taken' => 'getActionsTaken',
        'validation_efficiency_long_term' => 'getValidationEfficiencyLongTerm',
        'validation_efficiency_short_term' => 'getValidationEfficiencyShortTerm'
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
        $this->container['calls_made'] = isset($data['calls_made']) ? $data['calls_made'] : null;
        $this->container['actions_taken'] = isset($data['actions_taken']) ? $data['actions_taken'] : null;
        $this->container['validation_efficiency_long_term'] = isset($data['validation_efficiency_long_term']) ? $data['validation_efficiency_long_term'] : null;
        $this->container['validation_efficiency_short_term'] = isset($data['validation_efficiency_short_term']) ? $data['validation_efficiency_short_term'] : null;
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
     * Gets calls_made
     * @return int
     */
    public function getCallsMade()
    {
        return $this->container['calls_made'];
    }

    /**
     * Sets calls_made
     * @param int $calls_made Number of calls made.
     * @return $this
     */
    public function setCallsMade($calls_made)
    {
        $this->container['calls_made'] = $calls_made;

        return $this;
    }

    /**
     * Gets actions_taken
     * @return int
     */
    public function getActionsTaken()
    {
        return $this->container['actions_taken'];
    }

    /**
     * Sets actions_taken
     * @param int $actions_taken Number of actions taken by the employee.
     * @return $this
     */
    public function setActionsTaken($actions_taken)
    {
        $this->container['actions_taken'] = $actions_taken;

        return $this;
    }

    /**
     * Gets validation_efficiency_long_term
     * @return int
     */
    public function getValidationEfficiencyLongTerm()
    {
        return $this->container['validation_efficiency_long_term'];
    }

    /**
     * Sets validation_efficiency_long_term
     * @param int $validation_efficiency_long_term Emplyee-level validation ratio for long term, e.g. last 60 days.
     * @return $this
     */
    public function setValidationEfficiencyLongTerm($validation_efficiency_long_term)
    {
        $this->container['validation_efficiency_long_term'] = $validation_efficiency_long_term;

        return $this;
    }

    /**
     * Gets validation_efficiency_short_term
     * @return int
     */
    public function getValidationEfficiencyShortTerm()
    {
        return $this->container['validation_efficiency_short_term'];
    }

    /**
     * Sets validation_efficiency_short_term
     * @param int $validation_efficiency_short_term Emplyee-level validation ratio for short term, e.g. last 10 days.
     * @return $this
     */
    public function setValidationEfficiencyShortTerm($validation_efficiency_short_term)
    {
        $this->container['validation_efficiency_short_term'] = $validation_efficiency_short_term;

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


