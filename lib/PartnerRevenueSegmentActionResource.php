<?php
/**
 * PartnerRevenueSegmentActionResource
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
 * PartnerRevenueSegmentActionResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PartnerRevenueSegmentActionResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PartnerRevenueSegmentActionResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action' => 'string',
        'revenue_segment_id' => 'int',
        'lead_type_ids' => 'int[]',
        'force_copy' => 'bool',
        'with_prices' => 'bool',
        'copy_type' => 'bool'
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
        'revenue_segment_id' => 'revenue_segment_id',
        'lead_type_ids' => 'lead_type_ids',
        'force_copy' => 'force_copy',
        'with_prices' => 'with_prices',
        'copy_type' => 'copy_type'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'revenue_segment_id' => 'setRevenueSegmentId',
        'lead_type_ids' => 'setLeadTypeIds',
        'force_copy' => 'setForceCopy',
        'with_prices' => 'setWithPrices',
        'copy_type' => 'setCopyType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'revenue_segment_id' => 'getRevenueSegmentId',
        'lead_type_ids' => 'getLeadTypeIds',
        'force_copy' => 'getForceCopy',
        'with_prices' => 'getWithPrices',
        'copy_type' => 'getCopyType'
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

    const ACTION_COPY = 'copy';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_COPY,
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : 'copy';
        $this->container['revenue_segment_id'] = isset($data['revenue_segment_id']) ? $data['revenue_segment_id'] : null;
        $this->container['lead_type_ids'] = isset($data['lead_type_ids']) ? $data['lead_type_ids'] : null;
        $this->container['force_copy'] = isset($data['force_copy']) ? $data['force_copy'] : false;
        $this->container['with_prices'] = isset($data['with_prices']) ? $data['with_prices'] : false;
        $this->container['copy_type'] = isset($data['copy_type']) ? $data['copy_type'] : false;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["copy"];
        if (!in_array($this->container['action'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'action', must be one of 'copy'.";
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

        $allowed_values = ["copy"];
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
     * @param string $action
     * @return $this
     */
    public function setAction($action)
    {
        $allowed_values = array('copy');
        if (!is_null($action) && (!in_array($action, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'action', must be one of 'copy'");
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets revenue_segment_id
     * @return int
     */
    public function getRevenueSegmentId()
    {
        return $this->container['revenue_segment_id'];
    }

    /**
     * Sets revenue_segment_id
     * @param int $revenue_segment_id
     * @return $this
     */
    public function setRevenueSegmentId($revenue_segment_id)
    {
        $this->container['revenue_segment_id'] = $revenue_segment_id;

        return $this;
    }

    /**
     * Gets lead_type_ids
     * @return int[]
     */
    public function getLeadTypeIds()
    {
        return $this->container['lead_type_ids'];
    }

    /**
     * Sets lead_type_ids
     * @param int[] $lead_type_ids
     * @return $this
     */
    public function setLeadTypeIds($lead_type_ids)
    {
        $this->container['lead_type_ids'] = $lead_type_ids;

        return $this;
    }

    /**
     * Gets force_copy
     * @return bool
     */
    public function getForceCopy()
    {
        return $this->container['force_copy'];
    }

    /**
     * Sets force_copy
     * @param bool $force_copy
     * @return $this
     */
    public function setForceCopy($force_copy)
    {
        $this->container['force_copy'] = $force_copy;

        return $this;
    }

    /**
     * Gets with_prices
     * @return bool
     */
    public function getWithPrices()
    {
        return $this->container['with_prices'];
    }

    /**
     * Sets with_prices
     * @param bool $with_prices
     * @return $this
     */
    public function setWithPrices($with_prices)
    {
        $this->container['with_prices'] = $with_prices;

        return $this;
    }

    /**
     * Gets copy_type
     * @return bool
     */
    public function getCopyType()
    {
        return $this->container['copy_type'];
    }

    /**
     * Sets copy_type
     * @param bool $copy_type
     * @return $this
     */
    public function setCopyType($copy_type)
    {
        $this->container['copy_type'] = $copy_type;

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


