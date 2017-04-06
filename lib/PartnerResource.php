<?php
/**
 * PartnerResource
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ageras\Api
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
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
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ageras\Api;

use \ArrayAccess;

/**
 * PartnerResource Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Ageras\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PartnerResource implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PartnerResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'created_at' => 'string',
        'updated_at' => 'string',
        'reserved_at' => 'string',
        'company_name' => 'string',
        'title' => 'string',
        'slug' => 'string',
        'is_enabled' => 'bool',
        'has_subscription' => 'bool',
        'state' => 'string',
        'access' => 'string',
        'company_information' => 'string',
        'company_information_html' => 'string',
        'vat_number' => 'string',
        'website' => 'string',
        'logo' => 'string',
        'phone' => 'string',
        'geo' => '\Ageras\Api\PartnerGeoResource',
        'rating' => '\Ageras\Api\PartnerRatingResource',
        'employee' => '\Ageras\Api\PartnerEmployeeResource',
        'subscription_employee' => '\Ageras\Api\PartnerEmployeeResource',
        'lead_types' => '\Ageras\Api\PartnerLeadTypeResource[]',
        'industry' => '\Ageras\Api\PartnerIndustryResource',
        'satisfaction' => '\Ageras\Api\PartnerSatisfactionResource',
        'alerts' => '\Ageras\Api\PartnerAlertResource[]',
        'kpi' => '\Ageras\Api\PartnerKPIResource',
        'invoicing' => '\Ageras\Api\PartnerInvoicingResource',
        'preferences' => '\Ageras\Api\PartnerPreferencesResource',
        'refill' => '\Ageras\Api\PartnerRefillResource',
        'demo' => '\Ageras\Api\PartnerDemoResource'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'id' => 'id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'reserved_at' => 'reserved_at',
        'company_name' => 'company_name',
        'title' => 'title',
        'slug' => 'slug',
        'is_enabled' => 'is_enabled',
        'has_subscription' => 'has_subscription',
        'state' => 'state',
        'access' => 'access',
        'company_information' => 'company_information',
        'company_information_html' => 'company_information_html',
        'vat_number' => 'vat_number',
        'website' => 'website',
        'logo' => 'logo',
        'phone' => 'phone',
        'geo' => 'geo',
        'rating' => 'rating',
        'employee' => 'employee',
        'subscription_employee' => 'subscription_employee',
        'lead_types' => 'lead_types',
        'industry' => 'industry',
        'satisfaction' => 'satisfaction',
        'alerts' => 'alerts',
        'kpi' => 'kpi',
        'invoicing' => 'invoicing',
        'preferences' => 'preferences',
        'refill' => 'refill',
        'demo' => 'demo'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'reserved_at' => 'setReservedAt',
        'company_name' => 'setCompanyName',
        'title' => 'setTitle',
        'slug' => 'setSlug',
        'is_enabled' => 'setIsEnabled',
        'has_subscription' => 'setHasSubscription',
        'state' => 'setState',
        'access' => 'setAccess',
        'company_information' => 'setCompanyInformation',
        'company_information_html' => 'setCompanyInformationHtml',
        'vat_number' => 'setVatNumber',
        'website' => 'setWebsite',
        'logo' => 'setLogo',
        'phone' => 'setPhone',
        'geo' => 'setGeo',
        'rating' => 'setRating',
        'employee' => 'setEmployee',
        'subscription_employee' => 'setSubscriptionEmployee',
        'lead_types' => 'setLeadTypes',
        'industry' => 'setIndustry',
        'satisfaction' => 'setSatisfaction',
        'alerts' => 'setAlerts',
        'kpi' => 'setKpi',
        'invoicing' => 'setInvoicing',
        'preferences' => 'setPreferences',
        'refill' => 'setRefill',
        'demo' => 'setDemo'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'reserved_at' => 'getReservedAt',
        'company_name' => 'getCompanyName',
        'title' => 'getTitle',
        'slug' => 'getSlug',
        'is_enabled' => 'getIsEnabled',
        'has_subscription' => 'getHasSubscription',
        'state' => 'getState',
        'access' => 'getAccess',
        'company_information' => 'getCompanyInformation',
        'company_information_html' => 'getCompanyInformationHtml',
        'vat_number' => 'getVatNumber',
        'website' => 'getWebsite',
        'logo' => 'getLogo',
        'phone' => 'getPhone',
        'geo' => 'getGeo',
        'rating' => 'getRating',
        'employee' => 'getEmployee',
        'subscription_employee' => 'getSubscriptionEmployee',
        'lead_types' => 'getLeadTypes',
        'industry' => 'getIndustry',
        'satisfaction' => 'getSatisfaction',
        'alerts' => 'getAlerts',
        'kpi' => 'getKpi',
        'invoicing' => 'getInvoicing',
        'preferences' => 'getPreferences',
        'refill' => 'getRefill',
        'demo' => 'getDemo'
    );

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
            self::STATE_BUSINESS_PARTNER,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['reserved_at'] = isset($data['reserved_at']) ? $data['reserved_at'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['slug'] = isset($data['slug']) ? $data['slug'] : null;
        $this->container['is_enabled'] = isset($data['is_enabled']) ? $data['is_enabled'] : false;
        $this->container['has_subscription'] = isset($data['has_subscription']) ? $data['has_subscription'] : false;
        $this->container['state'] = isset($data['state']) ? $data['state'] : 'unknown';
        $this->container['access'] = isset($data['access']) ? $data['access'] : null;
        $this->container['company_information'] = isset($data['company_information']) ? $data['company_information'] : null;
        $this->container['company_information_html'] = isset($data['company_information_html']) ? $data['company_information_html'] : null;
        $this->container['vat_number'] = isset($data['vat_number']) ? $data['vat_number'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['geo'] = isset($data['geo']) ? $data['geo'] : null;
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['employee'] = isset($data['employee']) ? $data['employee'] : null;
        $this->container['subscription_employee'] = isset($data['subscription_employee']) ? $data['subscription_employee'] : null;
        $this->container['lead_types'] = isset($data['lead_types']) ? $data['lead_types'] : null;
        $this->container['industry'] = isset($data['industry']) ? $data['industry'] : null;
        $this->container['satisfaction'] = isset($data['satisfaction']) ? $data['satisfaction'] : null;
        $this->container['alerts'] = isset($data['alerts']) ? $data['alerts'] : null;
        $this->container['kpi'] = isset($data['kpi']) ? $data['kpi'] : null;
        $this->container['invoicing'] = isset($data['invoicing']) ? $data['invoicing'] : null;
        $this->container['preferences'] = isset($data['preferences']) ? $data['preferences'] : null;
        $this->container['refill'] = isset($data['refill']) ? $data['refill'] : null;
        $this->container['demo'] = isset($data['demo']) ? $data['demo'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("unknown", "canvas", "demo", "inactive", "ex_partner", "active", "business_partner");
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        $allowed_values = array("unknown", "canvas", "demo", "inactive", "ex_partner", "active", "business_partner");
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
     * @param int $id The partner's id.
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
     * @param string $created_at When was the partner created in the system.
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
     * @param string $updated_at At what date was the partner last updated.
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets reserved_at
     * @return string
     */
    public function getReservedAt()
    {
        return $this->container['reserved_at'];
    }

    /**
     * Sets reserved_at
     * @param string $reserved_at reserved at.
     * @return $this
     */
    public function setReservedAt($reserved_at)
    {
        $this->container['reserved_at'] = $reserved_at;

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
     * @param string $company_name The company name of the partner.
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

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
     * @param string $title Partner's title based on industry
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * @param string $slug The slug for the given partner
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets is_enabled
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     * @param bool $is_enabled Has the partner been disabled.
     * @return $this
     */
    public function setIsEnabled($is_enabled)
    {
        $this->container['is_enabled'] = $is_enabled;

        return $this;
    }

    /**
     * Gets has_subscription
     * @return bool
     */
    public function getHasSubscription()
    {
        return $this->container['has_subscription'];
    }

    /**
     * Sets has_subscription
     * @param bool $has_subscription Has the partner an active subscription.
     * @return $this
     */
    public function setHasSubscription($has_subscription)
    {
        $this->container['has_subscription'] = $has_subscription;

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
     * @param string $state What is the current state of the partner.
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array('unknown', 'canvas', 'demo', 'inactive', 'ex_partner', 'active', 'business_partner');
        if (!in_array($state, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'unknown', 'canvas', 'demo', 'inactive', 'ex_partner', 'active', 'business_partner'");
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets access
     * @return string
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access
     * @param string $access Access information regarding the partner.
     * @return $this
     */
    public function setAccess($access)
    {
        $this->container['access'] = $access;

        return $this;
    }

    /**
     * Gets company_information
     * @return string
     */
    public function getCompanyInformation()
    {
        return $this->container['company_information'];
    }

    /**
     * Sets company_information
     * @param string $company_information Information regarding the partner company.
     * @return $this
     */
    public function setCompanyInformation($company_information)
    {
        $this->container['company_information'] = $company_information;

        return $this;
    }

    /**
     * Gets company_information_html
     * @return string
     */
    public function getCompanyInformationHtml()
    {
        return $this->container['company_information_html'];
    }

    /**
     * Sets company_information_html
     * @param string $company_information_html Formatted Company Information.
     * @return $this
     */
    public function setCompanyInformationHtml($company_information_html)
    {
        $this->container['company_information_html'] = $company_information_html;

        return $this;
    }

    /**
     * Gets vat_number
     * @return string
     */
    public function getVatNumber()
    {
        return $this->container['vat_number'];
    }

    /**
     * Sets vat_number
     * @param string $vat_number Vat information about he company.
     * @return $this
     */
    public function setVatNumber($vat_number)
    {
        $this->container['vat_number'] = $vat_number;

        return $this;
    }

    /**
     * Gets website
     * @return string
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     * @param string $website Website for the partner.
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

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
     * @param string $logo Logo for the partner.
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

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
     * @param string $phone Phone number to contact the partner.
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets geo
     * @return \Ageras\Api\PartnerGeoResource
     */
    public function getGeo()
    {
        return $this->container['geo'];
    }

    /**
     * Sets geo
     * @param \Ageras\Api\PartnerGeoResource $geo
     * @return $this
     */
    public function setGeo($geo)
    {
        $this->container['geo'] = $geo;

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
     * Gets employee
     * @return \Ageras\Api\PartnerEmployeeResource
     */
    public function getEmployee()
    {
        return $this->container['employee'];
    }

    /**
     * Sets employee
     * @param \Ageras\Api\PartnerEmployeeResource $employee
     * @return $this
     */
    public function setEmployee($employee)
    {
        $this->container['employee'] = $employee;

        return $this;
    }

    /**
     * Gets subscription_employee
     * @return \Ageras\Api\PartnerEmployeeResource
     */
    public function getSubscriptionEmployee()
    {
        return $this->container['subscription_employee'];
    }

    /**
     * Sets subscription_employee
     * @param \Ageras\Api\PartnerEmployeeResource $subscription_employee
     * @return $this
     */
    public function setSubscriptionEmployee($subscription_employee)
    {
        $this->container['subscription_employee'] = $subscription_employee;

        return $this;
    }

    /**
     * Gets lead_types
     * @return \Ageras\Api\PartnerLeadTypeResource[]
     */
    public function getLeadTypes()
    {
        return $this->container['lead_types'];
    }

    /**
     * Sets lead_types
     * @param \Ageras\Api\PartnerLeadTypeResource[] $lead_types Lead Types.
     * @return $this
     */
    public function setLeadTypes($lead_types)
    {
        $this->container['lead_types'] = $lead_types;

        return $this;
    }

    /**
     * Gets industry
     * @return \Ageras\Api\PartnerIndustryResource
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     * @param \Ageras\Api\PartnerIndustryResource $industry
     * @return $this
     */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets satisfaction
     * @return \Ageras\Api\PartnerSatisfactionResource
     */
    public function getSatisfaction()
    {
        return $this->container['satisfaction'];
    }

    /**
     * Sets satisfaction
     * @param \Ageras\Api\PartnerSatisfactionResource $satisfaction
     * @return $this
     */
    public function setSatisfaction($satisfaction)
    {
        $this->container['satisfaction'] = $satisfaction;

        return $this;
    }

    /**
     * Gets alerts
     * @return \Ageras\Api\PartnerAlertResource[]
     */
    public function getAlerts()
    {
        return $this->container['alerts'];
    }

    /**
     * Sets alerts
     * @param \Ageras\Api\PartnerAlertResource[] $alerts Partner Alerts.
     * @return $this
     */
    public function setAlerts($alerts)
    {
        $this->container['alerts'] = $alerts;

        return $this;
    }

    /**
     * Gets kpi
     * @return \Ageras\Api\PartnerKPIResource
     */
    public function getKpi()
    {
        return $this->container['kpi'];
    }

    /**
     * Sets kpi
     * @param \Ageras\Api\PartnerKPIResource $kpi
     * @return $this
     */
    public function setKpi($kpi)
    {
        $this->container['kpi'] = $kpi;

        return $this;
    }

    /**
     * Gets invoicing
     * @return \Ageras\Api\PartnerInvoicingResource
     */
    public function getInvoicing()
    {
        return $this->container['invoicing'];
    }

    /**
     * Sets invoicing
     * @param \Ageras\Api\PartnerInvoicingResource $invoicing
     * @return $this
     */
    public function setInvoicing($invoicing)
    {
        $this->container['invoicing'] = $invoicing;

        return $this;
    }

    /**
     * Gets preferences
     * @return \Ageras\Api\PartnerPreferencesResource
     */
    public function getPreferences()
    {
        return $this->container['preferences'];
    }

    /**
     * Sets preferences
     * @param \Ageras\Api\PartnerPreferencesResource $preferences
     * @return $this
     */
    public function setPreferences($preferences)
    {
        $this->container['preferences'] = $preferences;

        return $this;
    }

    /**
     * Gets refill
     * @return \Ageras\Api\PartnerRefillResource
     */
    public function getRefill()
    {
        return $this->container['refill'];
    }

    /**
     * Sets refill
     * @param \Ageras\Api\PartnerRefillResource $refill
     * @return $this
     */
    public function setRefill($refill)
    {
        $this->container['refill'] = $refill;

        return $this;
    }

    /**
     * Gets demo
     * @return \Ageras\Api\PartnerDemoResource
     */
    public function getDemo()
    {
        return $this->container['demo'];
    }

    /**
     * Sets demo
     * @param \Ageras\Api\PartnerDemoResource $demo
     * @return $this
     */
    public function setDemo($demo)
    {
        $this->container['demo'] = $demo;

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


