<?php
/**
 * LeadPartnerAllocationResource
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
 * LeadPartnerAllocationResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LeadPartnerAllocationResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LeadPartnerAllocationResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'lead_id' => 'int',
        'partner_id' => 'int',
        'partner_business_unit_id' => 'int',
        'processed_at' => 'string',
        'created_at' => 'string',
        'allocated_by_employee_id' => 'int',
        'quote' => '\Ageras\Api\LeadPartnerAllocationQuoteResource'
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
        'lead_id' => 'lead_id',
        'partner_id' => 'partner_id',
        'partner_business_unit_id' => 'partner_business_unit_id',
        'processed_at' => 'processed_at',
        'created_at' => 'created_at',
        'allocated_by_employee_id' => 'allocated_by_employee_id',
        'quote' => 'quote'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'lead_id' => 'setLeadId',
        'partner_id' => 'setPartnerId',
        'partner_business_unit_id' => 'setPartnerBusinessUnitId',
        'processed_at' => 'setProcessedAt',
        'created_at' => 'setCreatedAt',
        'allocated_by_employee_id' => 'setAllocatedByEmployeeId',
        'quote' => 'setQuote'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'lead_id' => 'getLeadId',
        'partner_id' => 'getPartnerId',
        'partner_business_unit_id' => 'getPartnerBusinessUnitId',
        'processed_at' => 'getProcessedAt',
        'created_at' => 'getCreatedAt',
        'allocated_by_employee_id' => 'getAllocatedByEmployeeId',
        'quote' => 'getQuote'
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
        $this->container['lead_id'] = isset($data['lead_id']) ? $data['lead_id'] : null;
        $this->container['partner_id'] = isset($data['partner_id']) ? $data['partner_id'] : null;
        $this->container['partner_business_unit_id'] = isset($data['partner_business_unit_id']) ? $data['partner_business_unit_id'] : null;
        $this->container['processed_at'] = isset($data['processed_at']) ? $data['processed_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['allocated_by_employee_id'] = isset($data['allocated_by_employee_id']) ? $data['allocated_by_employee_id'] : null;
        $this->container['quote'] = isset($data['quote']) ? $data['quote'] : null;
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
     * @param int $id ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets lead_id
     * @return int
     */
    public function getLeadId()
    {
        return $this->container['lead_id'];
    }

    /**
     * Sets lead_id
     * @param int $lead_id Lead ID.
     * @return $this
     */
    public function setLeadId($lead_id)
    {
        $this->container['lead_id'] = $lead_id;

        return $this;
    }

    /**
     * Gets partner_id
     * @return int
     */
    public function getPartnerId()
    {
        return $this->container['partner_id'];
    }

    /**
     * Sets partner_id
     * @param int $partner_id Partner ID.
     * @return $this
     */
    public function setPartnerId($partner_id)
    {
        $this->container['partner_id'] = $partner_id;

        return $this;
    }

    /**
     * Gets partner_business_unit_id
     * @return int
     */
    public function getPartnerBusinessUnitId()
    {
        return $this->container['partner_business_unit_id'];
    }

    /**
     * Sets partner_business_unit_id
     * @param int $partner_business_unit_id Business Unit ID.
     * @return $this
     */
    public function setPartnerBusinessUnitId($partner_business_unit_id)
    {
        $this->container['partner_business_unit_id'] = $partner_business_unit_id;

        return $this;
    }

    /**
     * Gets processed_at
     * @return string
     */
    public function getProcessedAt()
    {
        return $this->container['processed_at'];
    }

    /**
     * Sets processed_at
     * @param string $processed_at When this allocation was processed.
     * @return $this
     */
    public function setProcessedAt($processed_at)
    {
        $this->container['processed_at'] = $processed_at;

        return $this;
    }

    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param string $created_at When this allocation was created.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets allocated_by_employee_id
     * @return int
     */
    public function getAllocatedByEmployeeId()
    {
        return $this->container['allocated_by_employee_id'];
    }

    /**
     * Sets allocated_by_employee_id
     * @param int $allocated_by_employee_id Who created this allocation.
     * @return $this
     */
    public function setAllocatedByEmployeeId($allocated_by_employee_id)
    {
        $this->container['allocated_by_employee_id'] = $allocated_by_employee_id;

        return $this;
    }

    /**
     * Gets quote
     * @return \Ageras\Api\LeadPartnerAllocationQuoteResource
     */
    public function getQuote()
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     * @param \Ageras\Api\LeadPartnerAllocationQuoteResource $quote
     * @return $this
     */
    public function setQuote($quote)
    {
        $this->container['quote'] = $quote;

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


