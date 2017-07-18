<?php
/**
 * LeadOfferResource
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
 * LeadOfferResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LeadOfferResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LeadOfferResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'won' => 'bool',
        'partner_id' => 'int',
        'punch_price' => 'int',
        'method' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'meeting' => '\Ageras\Api\LeadMeetingResource',
        'lead_id' => 'int',
        'punch_revenue' => '\Ageras\Api\AmountResource'
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
        'won' => 'won',
        'partner_id' => 'partner_id',
        'punch_price' => 'punch_price',
        'method' => 'method',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'meeting' => 'meeting',
        'lead_id' => 'lead_id',
        'punch_revenue' => 'punch_revenue'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'won' => 'setWon',
        'partner_id' => 'setPartnerId',
        'punch_price' => 'setPunchPrice',
        'method' => 'setMethod',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'meeting' => 'setMeeting',
        'lead_id' => 'setLeadId',
        'punch_revenue' => 'setPunchRevenue'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'won' => 'getWon',
        'partner_id' => 'getPartnerId',
        'punch_price' => 'getPunchPrice',
        'method' => 'getMethod',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'meeting' => 'getMeeting',
        'lead_id' => 'getLeadId',
        'punch_revenue' => 'getPunchRevenue'
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

    const METHOD_MAILTOKEN = 'mailtoken';
    const METHOD_WEBLOGIN = 'weblogin';
    const METHOD_SMSTOKEN = 'smstoken';
    const METHOD_SURVEILLANCE = 'surveillance';
    const METHOD_UNKNOWN = 'unknown';
    const METHOD_EMPLOYEE_LOGIN = 'employee_login';
    const METHOD_CANCELED_REFUND = 'canceled_refund';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getMethodAllowableValues()
    {
        return [
            self::METHOD_MAILTOKEN,
            self::METHOD_WEBLOGIN,
            self::METHOD_SMSTOKEN,
            self::METHOD_SURVEILLANCE,
            self::METHOD_UNKNOWN,
            self::METHOD_EMPLOYEE_LOGIN,
            self::METHOD_CANCELED_REFUND,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['won'] = isset($data['won']) ? $data['won'] : false;
        $this->container['partner_id'] = isset($data['partner_id']) ? $data['partner_id'] : null;
        $this->container['punch_price'] = isset($data['punch_price']) ? $data['punch_price'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : 'unknown';
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['meeting'] = isset($data['meeting']) ? $data['meeting'] : null;
        $this->container['lead_id'] = isset($data['lead_id']) ? $data['lead_id'] : null;
        $this->container['punch_revenue'] = isset($data['punch_revenue']) ? $data['punch_revenue'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["mailtoken", "weblogin", "smstoken", "surveillance", "unknown", "employee_login", "canceled_refund"];
        if (!in_array($this->container['method'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'method', must be one of 'mailtoken', 'weblogin', 'smstoken', 'surveillance', 'unknown', 'employee_login', 'canceled_refund'.";
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

        $allowed_values = ["mailtoken", "weblogin", "smstoken", "surveillance", "unknown", "employee_login", "canceled_refund"];
        if (!in_array($this->container['method'], $allowed_values)) {
            return false;
        }
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
     * @param int $id The offer's id.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets won
     * @return bool
     */
    public function getWon()
    {
        return $this->container['won'];
    }

    /**
     * Sets won
     * @param bool $won Is the offer won.
     * @return $this
     */
    public function setWon($won)
    {
        $this->container['won'] = $won;

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
     * @param int $partner_id The Partner associated to the given Offer.
     * @return $this
     */
    public function setPartnerId($partner_id)
    {
        $this->container['partner_id'] = $partner_id;

        return $this;
    }

    /**
     * Gets punch_price
     * @return int
     */
    public function getPunchPrice()
    {
        return $this->container['punch_price'];
    }

    /**
     * Sets punch_price
     * @param int $punch_price Price for a given punch.
     * @return $this
     */
    public function setPunchPrice($punch_price)
    {
        $this->container['punch_price'] = $punch_price;

        return $this;
    }

    /**
     * Gets method
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     * @param string $method Access method to partner lead offer.
     * @return $this
     */
    public function setMethod($method)
    {
        $allowed_values = array('mailtoken', 'weblogin', 'smstoken', 'surveillance', 'unknown', 'employee_login', 'canceled_refund');
        if (!is_null($method) && (!in_array($method, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'method', must be one of 'mailtoken', 'weblogin', 'smstoken', 'surveillance', 'unknown', 'employee_login', 'canceled_refund'");
        }
        $this->container['method'] = $method;

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
     * @param string $created_at When was the Lead Offer created.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param string $updated_at When was the Lead Offer last updated.
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets meeting
     * @return \Ageras\Api\LeadMeetingResource
     */
    public function getMeeting()
    {
        return $this->container['meeting'];
    }

    /**
     * Sets meeting
     * @param \Ageras\Api\LeadMeetingResource $meeting
     * @return $this
     */
    public function setMeeting($meeting)
    {
        $this->container['meeting'] = $meeting;

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
     * Gets punch_revenue
     * @return \Ageras\Api\AmountResource
     */
    public function getPunchRevenue()
    {
        return $this->container['punch_revenue'];
    }

    /**
     * Sets punch_revenue
     * @param \Ageras\Api\AmountResource $punch_revenue
     * @return $this
     */
    public function setPunchRevenue($punch_revenue)
    {
        $this->container['punch_revenue'] = $punch_revenue;

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


