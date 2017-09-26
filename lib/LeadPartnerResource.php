<?php
/**
 * LeadPartnerResource
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
 * LeadPartnerResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LeadPartnerResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LeadPartnerResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'company_name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'slug' => 'string',
        'state' => 'string',
        'status' => 'string',
        'zip_code' => 'string',
        'city' => 'string',
        'geo_code' => 'string',
        'partner_state' => 'string',
        'rating' => '\Ageras\Api\PartnerRatingResource',
        'logo' => 'string'
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
        'company_name' => 'company_name',
        'email' => 'email',
        'phone' => 'phone',
        'slug' => 'slug',
        'state' => 'state',
        'status' => 'status',
        'zip_code' => 'zip_code',
        'city' => 'city',
        'geo_code' => 'geo_code',
        'partner_state' => 'partner_state',
        'rating' => 'rating',
        'logo' => 'logo'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'company_name' => 'setCompanyName',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'slug' => 'setSlug',
        'state' => 'setState',
        'status' => 'setStatus',
        'zip_code' => 'setZipCode',
        'city' => 'setCity',
        'geo_code' => 'setGeoCode',
        'partner_state' => 'setPartnerState',
        'rating' => 'setRating',
        'logo' => 'setLogo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'company_name' => 'getCompanyName',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'slug' => 'getSlug',
        'state' => 'getState',
        'status' => 'getStatus',
        'zip_code' => 'getZipCode',
        'city' => 'getCity',
        'geo_code' => 'getGeoCode',
        'partner_state' => 'getPartnerState',
        'rating' => 'getRating',
        'logo' => 'getLogo'
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

    const STATE_UNKNOWN = 'unknown';
    const STATE_CANVAS = 'canvas';
    const STATE_DEMO = 'demo';
    const STATE_INACTIVE = 'inactive';
    const STATE_EX_PARTNER = 'ex_partner';
    const STATE_ACTIVE = 'active';
    const STATE_DISABLED = 'disabled';
    const STATE_CLOSED = 'closed';
    const STATE_BUSINESS_PARTNER = 'business_partner';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_UNKNOWN,
            self::STATE_CANVAS,
            self::STATE_DEMO,
            self::STATE_INACTIVE,
            self::STATE_EX_PARTNER,
            self::STATE_ACTIVE,
            self::STATE_DISABLED,
            self::STATE_CLOSED,
            self::STATE_BUSINESS_PARTNER,
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
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['slug'] = isset($data['slug']) ? $data['slug'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : 'unknown';
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['zip_code'] = isset($data['zip_code']) ? $data['zip_code'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['geo_code'] = isset($data['geo_code']) ? $data['geo_code'] : null;
        $this->container['partner_state'] = isset($data['partner_state']) ? $data['partner_state'] : null;
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["unknown", "canvas", "demo", "inactive", "ex_partner", "active", "disabled", "closed", "business_partner"];
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of 'unknown', 'canvas', 'demo', 'inactive', 'ex_partner', 'active', 'disabled', 'closed', 'business_partner'.";
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

        $allowed_values = ["unknown", "canvas", "demo", "inactive", "ex_partner", "active", "disabled", "closed", "business_partner"];
        if (!in_array($this->container['state'], $allowed_values)) {
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
     * @param int $id Id of the suggested partner.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets company_name
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     * @param string $company_name Company name of the suggested partner.
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email Company voucher email.
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     * @param string $phone Company phone.
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets slug
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     * @param string $slug Slug to use for Uri
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state Partner State
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array('unknown', 'canvas', 'demo', 'inactive', 'ex_partner', 'active', 'disabled', 'closed', 'business_partner');
        if (!is_null($state) && (!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'unknown', 'canvas', 'demo', 'inactive', 'ex_partner', 'active', 'disabled', 'closed', 'business_partner'");
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status of the suggested partner.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets zip_code
     * @return string
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     * @param string $zip_code Zip Code of the suggested partner.
     * @return $this
     */
    public function setZipCode($zip_code)
    {
        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city City of the suggested partner.
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

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
     * @param string $geo_code Geo Location of the suggested partner.
     * @return $this
     */
    public function setGeoCode($geo_code)
    {
        $this->container['geo_code'] = $geo_code;

        return $this;
    }

    /**
     * Gets partner_state
     * @return string
     */
    public function getPartnerState()
    {
        return $this->container['partner_state'];
    }

    /**
     * Sets partner_state
     * @param string $partner_state Partner State.
     * @return $this
     */
    public function setPartnerState($partner_state)
    {
        $this->container['partner_state'] = $partner_state;

        return $this;
    }

    /**
     * Gets rating
     * @return \Ageras\Api\PartnerRatingResource
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     * @param \Ageras\Api\PartnerRatingResource $rating
     * @return $this
     */
    public function setRating($rating)
    {
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets logo
     * @return string
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     * @param string $logo Partner logo.
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

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


