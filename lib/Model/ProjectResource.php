<?php
/**
 * ProjectResource
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
 * ProjectResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProjectResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProjectResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'created_at' => 'string',
        'updated_at' => 'string',
        'status' => '\Ageras\Api\Model\ProjectStatusResource',
        'title' => 'string',
        'internal' => 'string',
        'description' => 'string',
        'geo_code' => 'string',
        'lead' => '\Ageras\Api\Model\LeadResource',
        'partner' => '\Ageras\Api\Model\PartnerResource',
        'partner_user' => '\Ageras\Api\Model\PartnerUserResource',
        'customers' => '\Ageras\Api\Model\ProjectCustomerResource[]',
        'geo' => '\Ageras\Api\Model\ProjectGeoResource',
        'quote' => '\Ageras\Api\Model\LeadQuoteResource',
        'notes' => '\Ageras\Api\Model\ProjectNoteResource[]'
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
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'status' => 'status',
        'title' => 'title',
        'internal' => 'internal',
        'description' => 'description',
        'geo_code' => 'geo_code',
        'lead' => 'lead',
        'partner' => 'partner',
        'partner_user' => 'partner_user',
        'customers' => 'customers',
        'geo' => 'geo',
        'quote' => 'quote',
        'notes' => 'notes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'status' => 'setStatus',
        'title' => 'setTitle',
        'internal' => 'setInternal',
        'description' => 'setDescription',
        'geo_code' => 'setGeoCode',
        'lead' => 'setLead',
        'partner' => 'setPartner',
        'partner_user' => 'setPartnerUser',
        'customers' => 'setCustomers',
        'geo' => 'setGeo',
        'quote' => 'setQuote',
        'notes' => 'setNotes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'status' => 'getStatus',
        'title' => 'getTitle',
        'internal' => 'getInternal',
        'description' => 'getDescription',
        'geo_code' => 'getGeoCode',
        'lead' => 'getLead',
        'partner' => 'getPartner',
        'partner_user' => 'getPartnerUser',
        'customers' => 'getCustomers',
        'geo' => 'getGeo',
        'quote' => 'getQuote',
        'notes' => 'getNotes'
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
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['internal'] = isset($data['internal']) ? $data['internal'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['geo_code'] = isset($data['geo_code']) ? $data['geo_code'] : null;
        $this->container['lead'] = isset($data['lead']) ? $data['lead'] : null;
        $this->container['partner'] = isset($data['partner']) ? $data['partner'] : null;
        $this->container['partner_user'] = isset($data['partner_user']) ? $data['partner_user'] : null;
        $this->container['customers'] = isset($data['customers']) ? $data['customers'] : null;
        $this->container['geo'] = isset($data['geo']) ? $data['geo'] : null;
        $this->container['quote'] = isset($data['quote']) ? $data['quote'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
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
     * @param int $id Id for the project.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $created_at
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
     * @param string $updated_at
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets status
     * @return \Ageras\Api\Model\ProjectStatusResource
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \Ageras\Api\Model\ProjectStatusResource $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets internal
     * @return string
     */
    public function getInternal()
    {
        return $this->container['internal'];
    }

    /**
     * Sets internal
     * @param string $internal
     * @return $this
     */
    public function setInternal($internal)
    {
        $this->container['internal'] = $internal;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets geo_code
     * @return string
     */
    public function getGeoCode()
    {
        return $this->container['geo_code'];
    }

    /**
     * Sets geo_code
     * @param string $geo_code
     * @return $this
     */
    public function setGeoCode($geo_code)
    {
        $this->container['geo_code'] = $geo_code;

        return $this;
    }

    /**
     * Gets lead
     * @return \Ageras\Api\Model\LeadResource
     */
    public function getLead()
    {
        return $this->container['lead'];
    }

    /**
     * Sets lead
     * @param \Ageras\Api\Model\LeadResource $lead
     * @return $this
     */
    public function setLead($lead)
    {
        $this->container['lead'] = $lead;

        return $this;
    }

    /**
     * Gets partner
     * @return \Ageras\Api\Model\PartnerResource
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     * @param \Ageras\Api\Model\PartnerResource $partner
     * @return $this
     */
    public function setPartner($partner)
    {
        $this->container['partner'] = $partner;

        return $this;
    }

    /**
     * Gets partner_user
     * @return \Ageras\Api\Model\PartnerUserResource
     */
    public function getPartnerUser()
    {
        return $this->container['partner_user'];
    }

    /**
     * Sets partner_user
     * @param \Ageras\Api\Model\PartnerUserResource $partner_user
     * @return $this
     */
    public function setPartnerUser($partner_user)
    {
        $this->container['partner_user'] = $partner_user;

        return $this;
    }

    /**
     * Gets customers
     * @return \Ageras\Api\Model\ProjectCustomerResource[]
     */
    public function getCustomers()
    {
        return $this->container['customers'];
    }

    /**
     * Sets customers
     * @param \Ageras\Api\Model\ProjectCustomerResource[] $customers
     * @return $this
     */
    public function setCustomers($customers)
    {
        $this->container['customers'] = $customers;

        return $this;
    }

    /**
     * Gets geo
     * @return \Ageras\Api\Model\ProjectGeoResource
     */
    public function getGeo()
    {
        return $this->container['geo'];
    }

    /**
     * Sets geo
     * @param \Ageras\Api\Model\ProjectGeoResource $geo
     * @return $this
     */
    public function setGeo($geo)
    {
        $this->container['geo'] = $geo;

        return $this;
    }

    /**
     * Gets quote
     * @return \Ageras\Api\Model\LeadQuoteResource
     */
    public function getQuote()
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     * @param \Ageras\Api\Model\LeadQuoteResource $quote
     * @return $this
     */
    public function setQuote($quote)
    {
        $this->container['quote'] = $quote;

        return $this;
    }

    /**
     * Gets notes
     * @return \Ageras\Api\Model\ProjectNoteResource[]
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param \Ageras\Api\Model\ProjectNoteResource[] $notes
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

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


