<?php
/**
 * LeadAcceptedResource
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
 * LeadAcceptedResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LeadAcceptedResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LeadAcceptedResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accepted_id' => 'int',
        'foreign_offer' => 'int',
        'foreign_offer_reason' => 'string'
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
        'accepted_id' => 'accepted_id',
        'foreign_offer' => 'foreign_offer',
        'foreign_offer_reason' => 'foreign_offer_reason'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'accepted_id' => 'setAcceptedId',
        'foreign_offer' => 'setForeignOffer',
        'foreign_offer_reason' => 'setForeignOfferReason'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'accepted_id' => 'getAcceptedId',
        'foreign_offer' => 'getForeignOffer',
        'foreign_offer_reason' => 'getForeignOfferReason'
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
        $this->container['accepted_id'] = isset($data['accepted_id']) ? $data['accepted_id'] : null;
        $this->container['foreign_offer'] = isset($data['foreign_offer']) ? $data['foreign_offer'] : null;
        $this->container['foreign_offer_reason'] = isset($data['foreign_offer_reason']) ? $data['foreign_offer_reason'] : null;
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
     * Gets accepted_id
     * @return int
     */
    public function getAcceptedId()
    {
        return $this->container['accepted_id'];
    }

    /**
     * Sets accepted_id
     * @param int $accepted_id Id for the Accepted.
     * @return $this
     */
    public function setAcceptedId($accepted_id)
    {
        $this->container['accepted_id'] = $accepted_id;

        return $this;
    }

    /**
     * Gets foreign_offer
     * @return int
     */
    public function getForeignOffer()
    {
        return $this->container['foreign_offer'];
    }

    /**
     * Sets foreign_offer
     * @param int $foreign_offer Foreign offer?
     * @return $this
     */
    public function setForeignOffer($foreign_offer)
    {
        $this->container['foreign_offer'] = $foreign_offer;

        return $this;
    }

    /**
     * Gets foreign_offer_reason
     * @return string
     */
    public function getForeignOfferReason()
    {
        return $this->container['foreign_offer_reason'];
    }

    /**
     * Sets foreign_offer_reason
     * @param string $foreign_offer_reason The reason.
     * @return $this
     */
    public function setForeignOfferReason($foreign_offer_reason)
    {
        $this->container['foreign_offer_reason'] = $foreign_offer_reason;

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

