<?php
/**
 * LeadResource
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
 * LeadResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LeadResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LeadResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'created_at' => 'string',
        'updated_at' => 'string',
        'validated_at' => 'string',
        'expires_at' => 'string',
        'expiration_boosted_at' => 'string',
        'working_hours_expires_at' => 'string',
        'status' => 'string',
        'progress' => '\Ageras\Api\LeadProgressResource[]',
        'title' => 'string',
        'description' => 'string',
        'client' => '\Ageras\Api\LeadClientResource',
        'customer_info' => '\Ageras\Api\LeadCustomerInfoResource',
        'requirements' => '\Ageras\Api\LeadRequirementsResource',
        'punch_price' => 'int',
        'service_fee' => '\Ageras\Api\AmountResource',
        'geo' => '\Ageras\Api\LeadGeoResource',
        'attributes' => '\Ageras\Api\LeadAttributeResource[]',
        'industries' => '\Ageras\Api\LeadIndustryPairResource',
        'meeting' => '\Ageras\Api\LeadMeetingResource',
        'accepted' => '\Ageras\Api\LeadAcceptedResource',
        'offers_info' => '\Ageras\Api\LeadOffersInfoResource',
        'quotes_info' => '\Ageras\Api\LeadQuotesInfoResource',
        'affiliate_campaign' => '\Ageras\Api\AffiliateCampaignResource',
        'feedback' => '\Ageras\Api\LeadFeedbackResource',
        'validator' => '\Ageras\Api\LeadEmployeeResource'
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
        'validated_at' => 'validated_at',
        'expires_at' => 'expires_at',
        'expiration_boosted_at' => 'expiration_boosted_at',
        'working_hours_expires_at' => 'working_hours_expires_at',
        'status' => 'status',
        'progress' => 'progress',
        'title' => 'title',
        'description' => 'description',
        'client' => 'client',
        'customer_info' => 'customer_info',
        'requirements' => 'requirements',
        'punch_price' => 'punch_price',
        'service_fee' => 'service_fee',
        'geo' => 'geo',
        'attributes' => 'attributes',
        'industries' => 'industries',
        'meeting' => 'meeting',
        'accepted' => 'accepted',
        'offers_info' => 'offers_info',
        'quotes_info' => 'quotes_info',
        'affiliate_campaign' => 'affiliate_campaign',
        'feedback' => 'feedback',
        'validator' => 'validator'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'validated_at' => 'setValidatedAt',
        'expires_at' => 'setExpiresAt',
        'expiration_boosted_at' => 'setExpirationBoostedAt',
        'working_hours_expires_at' => 'setWorkingHoursExpiresAt',
        'status' => 'setStatus',
        'progress' => 'setProgress',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'client' => 'setClient',
        'customer_info' => 'setCustomerInfo',
        'requirements' => 'setRequirements',
        'punch_price' => 'setPunchPrice',
        'service_fee' => 'setServiceFee',
        'geo' => 'setGeo',
        'attributes' => 'setAttributes',
        'industries' => 'setIndustries',
        'meeting' => 'setMeeting',
        'accepted' => 'setAccepted',
        'offers_info' => 'setOffersInfo',
        'quotes_info' => 'setQuotesInfo',
        'affiliate_campaign' => 'setAffiliateCampaign',
        'feedback' => 'setFeedback',
        'validator' => 'setValidator'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'validated_at' => 'getValidatedAt',
        'expires_at' => 'getExpiresAt',
        'expiration_boosted_at' => 'getExpirationBoostedAt',
        'working_hours_expires_at' => 'getWorkingHoursExpiresAt',
        'status' => 'getStatus',
        'progress' => 'getProgress',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'client' => 'getClient',
        'customer_info' => 'getCustomerInfo',
        'requirements' => 'getRequirements',
        'punch_price' => 'getPunchPrice',
        'service_fee' => 'getServiceFee',
        'geo' => 'getGeo',
        'attributes' => 'getAttributes',
        'industries' => 'getIndustries',
        'meeting' => 'getMeeting',
        'accepted' => 'getAccepted',
        'offers_info' => 'getOffersInfo',
        'quotes_info' => 'getQuotesInfo',
        'affiliate_campaign' => 'getAffiliateCampaign',
        'feedback' => 'getFeedback',
        'validator' => 'getValidator'
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

    const STATUS_UNKNOWN = 'unknown';
    const STATUS_COMPLETED = 'completed';
    const STATUS_DUPLICATE = 'duplicate';
    const STATUS_TEST = 'test';
    const STATUS_NOT_SERIOUS = 'not_serious';
    const STATUS_SEND_TO_ADVISOR = 'send_to_advisor';
    const STATUS_SPAM = 'spam';
    const STATUS_VALIDATED = 'validated';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_UNKNOWN,
            self::STATUS_COMPLETED,
            self::STATUS_DUPLICATE,
            self::STATUS_TEST,
            self::STATUS_NOT_SERIOUS,
            self::STATUS_SEND_TO_ADVISOR,
            self::STATUS_SPAM,
            self::STATUS_VALIDATED,
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
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['validated_at'] = isset($data['validated_at']) ? $data['validated_at'] : null;
        $this->container['expires_at'] = isset($data['expires_at']) ? $data['expires_at'] : null;
        $this->container['expiration_boosted_at'] = isset($data['expiration_boosted_at']) ? $data['expiration_boosted_at'] : null;
        $this->container['working_hours_expires_at'] = isset($data['working_hours_expires_at']) ? $data['working_hours_expires_at'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : 'unknown';
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['customer_info'] = isset($data['customer_info']) ? $data['customer_info'] : null;
        $this->container['requirements'] = isset($data['requirements']) ? $data['requirements'] : null;
        $this->container['punch_price'] = isset($data['punch_price']) ? $data['punch_price'] : null;
        $this->container['service_fee'] = isset($data['service_fee']) ? $data['service_fee'] : null;
        $this->container['geo'] = isset($data['geo']) ? $data['geo'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['industries'] = isset($data['industries']) ? $data['industries'] : null;
        $this->container['meeting'] = isset($data['meeting']) ? $data['meeting'] : null;
        $this->container['accepted'] = isset($data['accepted']) ? $data['accepted'] : null;
        $this->container['offers_info'] = isset($data['offers_info']) ? $data['offers_info'] : null;
        $this->container['quotes_info'] = isset($data['quotes_info']) ? $data['quotes_info'] : null;
        $this->container['affiliate_campaign'] = isset($data['affiliate_campaign']) ? $data['affiliate_campaign'] : null;
        $this->container['feedback'] = isset($data['feedback']) ? $data['feedback'] : null;
        $this->container['validator'] = isset($data['validator']) ? $data['validator'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["unknown", "completed", "duplicate", "test", "not_serious", "send_to_advisor", "spam", "validated"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'unknown', 'completed', 'duplicate', 'test', 'not_serious', 'send_to_advisor', 'spam', 'validated'.";
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

        $allowed_values = ["unknown", "completed", "duplicate", "test", "not_serious", "send_to_advisor", "spam", "validated"];
        if (!in_array($this->container['status'], $allowed_values)) {
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
     * @param int $id Id for the Lead.
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
     * @param string $created_at Date the Lead was created.
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
     * @param string $updated_at Date the Lead was updated.
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets validated_at
     * @return string
     */
    public function getValidatedAt()
    {
        return $this->container['validated_at'];
    }

    /**
     * Sets validated_at
     * @param string $validated_at Date the Lead was Updated.
     * @return $this
     */
    public function setValidatedAt($validated_at)
    {
        $this->container['validated_at'] = $validated_at;

        return $this;
    }

    /**
     * Gets expires_at
     * @return string
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     * @param string $expires_at Date the Lead Expires.
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets expiration_boosted_at
     * @return string
     */
    public function getExpirationBoostedAt()
    {
        return $this->container['expiration_boosted_at'];
    }

    /**
     * Sets expiration_boosted_at
     * @param string $expiration_boosted_at Date where a lead has been extended/boosted.
     * @return $this
     */
    public function setExpirationBoostedAt($expiration_boosted_at)
    {
        $this->container['expiration_boosted_at'] = $expiration_boosted_at;

        return $this;
    }

    /**
     * Gets working_hours_expires_at
     * @return string
     */
    public function getWorkingHoursExpiresAt()
    {
        return $this->container['working_hours_expires_at'];
    }

    /**
     * Sets working_hours_expires_at
     * @param string $working_hours_expires_at Date the Lead Expires taking into account only working hours.
     * @return $this
     */
    public function setWorkingHoursExpiresAt($working_hours_expires_at)
    {
        $this->container['working_hours_expires_at'] = $working_hours_expires_at;

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
     * @param string $status Current Validation Status of the Lead.
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('unknown', 'completed', 'duplicate', 'test', 'not_serious', 'send_to_advisor', 'spam', 'validated');
        if (!is_null($status) && (!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'unknown', 'completed', 'duplicate', 'test', 'not_serious', 'send_to_advisor', 'spam', 'validated'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets progress
     * @return \Ageras\Api\LeadProgressResource[]
     */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
     * Sets progress
     * @param \Ageras\Api\LeadProgressResource[] $progress Progress
     * @return $this
     */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;

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
     * @param string $title Title for the Lead.
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * @param string $description A description of the given Lead.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets client
     * @return \Ageras\Api\LeadClientResource
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     * @param \Ageras\Api\LeadClientResource $client
     * @return $this
     */
    public function setClient($client)
    {
        $this->container['client'] = $client;

        return $this;
    }

    /**
     * Gets customer_info
     * @return \Ageras\Api\LeadCustomerInfoResource
     */
    public function getCustomerInfo()
    {
        return $this->container['customer_info'];
    }

    /**
     * Sets customer_info
     * @param \Ageras\Api\LeadCustomerInfoResource $customer_info
     * @return $this
     */
    public function setCustomerInfo($customer_info)
    {
        $this->container['customer_info'] = $customer_info;

        return $this;
    }

    /**
     * Gets requirements
     * @return \Ageras\Api\LeadRequirementsResource
     */
    public function getRequirements()
    {
        return $this->container['requirements'];
    }

    /**
     * Sets requirements
     * @param \Ageras\Api\LeadRequirementsResource $requirements
     * @return $this
     */
    public function setRequirements($requirements)
    {
        $this->container['requirements'] = $requirements;

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
     * @param int $punch_price The price for the given lead.
     * @return $this
     */
    public function setPunchPrice($punch_price)
    {
        $this->container['punch_price'] = $punch_price;

        return $this;
    }

    /**
     * Gets service_fee
     * @return \Ageras\Api\AmountResource
     */
    public function getServiceFee()
    {
        return $this->container['service_fee'];
    }

    /**
     * Sets service_fee
     * @param \Ageras\Api\AmountResource $service_fee
     * @return $this
     */
    public function setServiceFee($service_fee)
    {
        $this->container['service_fee'] = $service_fee;

        return $this;
    }

    /**
     * Gets geo
     * @return \Ageras\Api\LeadGeoResource
     */
    public function getGeo()
    {
        return $this->container['geo'];
    }

    /**
     * Sets geo
     * @param \Ageras\Api\LeadGeoResource $geo
     * @return $this
     */
    public function setGeo($geo)
    {
        $this->container['geo'] = $geo;

        return $this;
    }

    /**
     * Gets attributes
     * @return \Ageras\Api\LeadAttributeResource[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     * @param \Ageras\Api\LeadAttributeResource[] $attributes Attributes for the lead.
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets industries
     * @return \Ageras\Api\LeadIndustryPairResource
     */
    public function getIndustries()
    {
        return $this->container['industries'];
    }

    /**
     * Sets industries
     * @param \Ageras\Api\LeadIndustryPairResource $industries
     * @return $this
     */
    public function setIndustries($industries)
    {
        $this->container['industries'] = $industries;

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
     * Gets accepted
     * @return \Ageras\Api\LeadAcceptedResource
     */
    public function getAccepted()
    {
        return $this->container['accepted'];
    }

    /**
     * Sets accepted
     * @param \Ageras\Api\LeadAcceptedResource $accepted
     * @return $this
     */
    public function setAccepted($accepted)
    {
        $this->container['accepted'] = $accepted;

        return $this;
    }

    /**
     * Gets offers_info
     * @return \Ageras\Api\LeadOffersInfoResource
     */
    public function getOffersInfo()
    {
        return $this->container['offers_info'];
    }

    /**
     * Sets offers_info
     * @param \Ageras\Api\LeadOffersInfoResource $offers_info
     * @return $this
     */
    public function setOffersInfo($offers_info)
    {
        $this->container['offers_info'] = $offers_info;

        return $this;
    }

    /**
     * Gets quotes_info
     * @return \Ageras\Api\LeadQuotesInfoResource
     */
    public function getQuotesInfo()
    {
        return $this->container['quotes_info'];
    }

    /**
     * Sets quotes_info
     * @param \Ageras\Api\LeadQuotesInfoResource $quotes_info
     * @return $this
     */
    public function setQuotesInfo($quotes_info)
    {
        $this->container['quotes_info'] = $quotes_info;

        return $this;
    }

    /**
     * Gets affiliate_campaign
     * @return \Ageras\Api\AffiliateCampaignResource
     */
    public function getAffiliateCampaign()
    {
        return $this->container['affiliate_campaign'];
    }

    /**
     * Sets affiliate_campaign
     * @param \Ageras\Api\AffiliateCampaignResource $affiliate_campaign
     * @return $this
     */
    public function setAffiliateCampaign($affiliate_campaign)
    {
        $this->container['affiliate_campaign'] = $affiliate_campaign;

        return $this;
    }

    /**
     * Gets feedback
     * @return \Ageras\Api\LeadFeedbackResource
     */
    public function getFeedback()
    {
        return $this->container['feedback'];
    }

    /**
     * Sets feedback
     * @param \Ageras\Api\LeadFeedbackResource $feedback
     * @return $this
     */
    public function setFeedback($feedback)
    {
        $this->container['feedback'] = $feedback;

        return $this;
    }

    /**
     * Gets validator
     * @return \Ageras\Api\LeadEmployeeResource
     */
    public function getValidator()
    {
        return $this->container['validator'];
    }

    /**
     * Sets validator
     * @param \Ageras\Api\LeadEmployeeResource $validator
     * @return $this
     */
    public function setValidator($validator)
    {
        $this->container['validator'] = $validator;

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


