<?php
/**
 * LeadMarketplaceResource
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
 * LeadMarketplaceResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LeadMarketplaceResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LeadMarketplaceResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'premium_access_deadline' => 'string',
        'basic_access_deadline' => 'string',
        'matches_market_premium_access_criteria' => 'bool'
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
        'premium_access_deadline' => 'premium_access_deadline',
        'basic_access_deadline' => 'basic_access_deadline',
        'matches_market_premium_access_criteria' => 'matches_market_premium_access_criteria'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'premium_access_deadline' => 'setPremiumAccessDeadline',
        'basic_access_deadline' => 'setBasicAccessDeadline',
        'matches_market_premium_access_criteria' => 'setMatchesMarketPremiumAccessCriteria'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'premium_access_deadline' => 'getPremiumAccessDeadline',
        'basic_access_deadline' => 'getBasicAccessDeadline',
        'matches_market_premium_access_criteria' => 'getMatchesMarketPremiumAccessCriteria'
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
        $this->container['premium_access_deadline'] = isset($data['premium_access_deadline']) ? $data['premium_access_deadline'] : null;
        $this->container['basic_access_deadline'] = isset($data['basic_access_deadline']) ? $data['basic_access_deadline'] : null;
        $this->container['matches_market_premium_access_criteria'] = isset($data['matches_market_premium_access_criteria']) ? $data['matches_market_premium_access_criteria'] : false;
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
     * Gets premium_access_deadline
     * @return string
     */
    public function getPremiumAccessDeadline()
    {
        return $this->container['premium_access_deadline'];
    }

    /**
     * Sets premium_access_deadline
     * @param string $premium_access_deadline
     * @return $this
     */
    public function setPremiumAccessDeadline($premium_access_deadline)
    {
        $this->container['premium_access_deadline'] = $premium_access_deadline;

        return $this;
    }

    /**
     * Gets basic_access_deadline
     * @return string
     */
    public function getBasicAccessDeadline()
    {
        return $this->container['basic_access_deadline'];
    }

    /**
     * Sets basic_access_deadline
     * @param string $basic_access_deadline
     * @return $this
     */
    public function setBasicAccessDeadline($basic_access_deadline)
    {
        $this->container['basic_access_deadline'] = $basic_access_deadline;

        return $this;
    }

    /**
     * Gets matches_market_premium_access_criteria
     * @return bool
     */
    public function getMatchesMarketPremiumAccessCriteria()
    {
        return $this->container['matches_market_premium_access_criteria'];
    }

    /**
     * Sets matches_market_premium_access_criteria
     * @param bool $matches_market_premium_access_criteria
     * @return $this
     */
    public function setMatchesMarketPremiumAccessCriteria($matches_market_premium_access_criteria)
    {
        $this->container['matches_market_premium_access_criteria'] = $matches_market_premium_access_criteria;

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


