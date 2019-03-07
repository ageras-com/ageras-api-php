<?php
/**
 * LeadAllocationResource
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
 * LeadAllocationResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LeadAllocationResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LeadAllocationResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'partner_id' => 'int[]',
        'partner_business_unit_id' => 'int[]'
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
        'partner_id' => 'partner_id',
        'partner_business_unit_id' => 'partner_business_unit_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'partner_id' => 'setPartnerId',
        'partner_business_unit_id' => 'setPartnerBusinessUnitId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'partner_id' => 'getPartnerId',
        'partner_business_unit_id' => 'getPartnerBusinessUnitId'
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
        $this->container['partner_id'] = isset($data['partner_id']) ? $data['partner_id'] : null;
        $this->container['partner_business_unit_id'] = isset($data['partner_business_unit_id']) ? $data['partner_business_unit_id'] : null;
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
     * Gets partner_id
     * @return int[]
     */
    public function getPartnerId()
    {
        return $this->container['partner_id'];
    }

    /**
     * Sets partner_id
     * @param int[] $partner_id Partner to allocate.
     * @return $this
     */
    public function setPartnerId($partner_id)
    {
        $this->container['partner_id'] = $partner_id;

        return $this;
    }

    /**
     * Gets partner_business_unit_id
     * @return int[]
     */
    public function getPartnerBusinessUnitId()
    {
        return $this->container['partner_business_unit_id'];
    }

    /**
     * Sets partner_business_unit_id
     * @param int[] $partner_business_unit_id Partner business units to allocate.
     * @return $this
     */
    public function setPartnerBusinessUnitId($partner_business_unit_id)
    {
        $this->container['partner_business_unit_id'] = $partner_business_unit_id;

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


