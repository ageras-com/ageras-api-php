<?php
/**
 * ContractBusinessModelResource
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
 * ContractBusinessModelResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ContractBusinessModelResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ContractBusinessModelResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'identifier' => 'string',
        'parameters' => '\Ageras\Api\ContractBusinessModelParametersResource'
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
        'identifier' => 'identifier',
        'parameters' => 'parameters'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'identifier' => 'setIdentifier',
        'parameters' => 'setParameters'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'identifier' => 'getIdentifier',
        'parameters' => 'getParameters'
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

    const IDENTIFIER_UNKNOWN = 'unknown';
    const IDENTIFIER_LEAD_BUDGET = 'lead_budget';
    const IDENTIFIER_PAY_PER_SPOT = 'pay_per_spot';
    const IDENTIFIER_EXCLUSIVE = 'exclusive';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getIdentifierAllowableValues()
    {
        return [
            self::IDENTIFIER_UNKNOWN,
            self::IDENTIFIER_LEAD_BUDGET,
            self::IDENTIFIER_PAY_PER_SPOT,
            self::IDENTIFIER_EXCLUSIVE,
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
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : 'unknown';
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["unknown", "lead_budget", "pay_per_spot", "exclusive"];
        if (!in_array($this->container['identifier'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'identifier', must be one of 'unknown', 'lead_budget', 'pay_per_spot', 'exclusive'.";
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

        $allowed_values = ["unknown", "lead_budget", "pay_per_spot", "exclusive"];
        if (!in_array($this->container['identifier'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets identifier
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     * @param string $identifier Identifier of the business model.
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $allowed_values = array('unknown', 'lead_budget', 'pay_per_spot', 'exclusive');
        if (!is_null($identifier) && (!in_array($identifier, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'identifier', must be one of 'unknown', 'lead_budget', 'pay_per_spot', 'exclusive'");
        }
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets parameters
     * @return \Ageras\Api\ContractBusinessModelParametersResource
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     * @param \Ageras\Api\ContractBusinessModelParametersResource $parameters
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

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


