<?php
/**
 * PartnerRevenueSegmentResource
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
 * PartnerRevenueSegmentResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PartnerRevenueSegmentResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PartnerRevenueSegmentResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'lead_type' => '\Ageras\Api\LeadTypeResource',
        'partner' => '\Ageras\Api\PartnerResource',
        'maximum_revenue' => '\Ageras\Api\AmountResource',
        'minimum_revenue' => '\Ageras\Api\AmountResource',
        'sectors' => '\Ageras\Api\SectorResource[]'
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
        'id' => 'id',
        'lead_type' => 'lead_type',
        'partner' => 'partner',
        'maximum_revenue' => 'maximum_revenue',
        'minimum_revenue' => 'minimum_revenue',
        'sectors' => 'sectors'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'lead_type' => 'setLeadType',
        'partner' => 'setPartner',
        'maximum_revenue' => 'setMaximumRevenue',
        'minimum_revenue' => 'setMinimumRevenue',
        'sectors' => 'setSectors'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'lead_type' => 'getLeadType',
        'partner' => 'getPartner',
        'maximum_revenue' => 'getMaximumRevenue',
        'minimum_revenue' => 'getMinimumRevenue',
        'sectors' => 'getSectors'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['lead_type'] = isset($data['lead_type']) ? $data['lead_type'] : null;
        $this->container['partner'] = isset($data['partner']) ? $data['partner'] : null;
        $this->container['maximum_revenue'] = isset($data['maximum_revenue']) ? $data['maximum_revenue'] : null;
        $this->container['minimum_revenue'] = isset($data['minimum_revenue']) ? $data['minimum_revenue'] : null;
        $this->container['sectors'] = isset($data['sectors']) ? $data['sectors'] : null;
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
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id ID of the revenue segment.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets lead_type
     * @return \Ageras\Api\LeadTypeResource
     */
    public function getLeadType()
    {
        return $this->container['lead_type'];
    }

    /**
     * Sets lead_type
     * @param \Ageras\Api\LeadTypeResource $lead_type
     * @return $this
     */
    public function setLeadType($lead_type)
    {
        $this->container['lead_type'] = $lead_type;

        return $this;
    }

    /**
     * Gets partner
     * @return \Ageras\Api\PartnerResource
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     * @param \Ageras\Api\PartnerResource $partner
     * @return $this
     */
    public function setPartner($partner)
    {
        $this->container['partner'] = $partner;

        return $this;
    }

    /**
     * Gets maximum_revenue
     * @return \Ageras\Api\AmountResource
     */
    public function getMaximumRevenue()
    {
        return $this->container['maximum_revenue'];
    }

    /**
     * Sets maximum_revenue
     * @param \Ageras\Api\AmountResource $maximum_revenue
     * @return $this
     */
    public function setMaximumRevenue($maximum_revenue)
    {
        $this->container['maximum_revenue'] = $maximum_revenue;

        return $this;
    }

    /**
     * Gets minimum_revenue
     * @return \Ageras\Api\AmountResource
     */
    public function getMinimumRevenue()
    {
        return $this->container['minimum_revenue'];
    }

    /**
     * Sets minimum_revenue
     * @param \Ageras\Api\AmountResource $minimum_revenue
     * @return $this
     */
    public function setMinimumRevenue($minimum_revenue)
    {
        $this->container['minimum_revenue'] = $minimum_revenue;

        return $this;
    }

    /**
     * Gets sectors
     * @return \Ageras\Api\SectorResource[]
     */
    public function getSectors()
    {
        return $this->container['sectors'];
    }

    /**
     * Sets sectors
     * @param \Ageras\Api\SectorResource[] $sectors
     * @return $this
     */
    public function setSectors($sectors)
    {
        $this->container['sectors'] = $sectors;

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


