<?php
/**
 * ContractPartnerBusinessUnitResource
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
 * ContractPartnerBusinessUnitResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ContractPartnerBusinessUnitResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ContractPartnerBusinessUnitResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'action' => 'string',
        'partner_user' => '\Ageras\Api\ContractComponentResource',
        'partner_business_unit_grouping_id' => 'int',
        'disable_digital_leads' => 'bool',
        'display_name' => 'string',
        'geo' => '\Ageras\Api\PartnerBusinessUnitGeoResource',
        'revenues' => '\Ageras\Api\PartnerBusinessUnitRevenueRangeResource',
        'sectors' => '\Ageras\Api\SectorResource[]',
        'industries' => '\Ageras\Api\IndustryResource[]',
        'client_types' => '\Ageras\Api\LeadTypeResource[]',
        'geo_regions' => '\Ageras\Api\PartnerBusinessUnitSegmentationGeoRegionResource[]',
        'business_models' => '\Ageras\Api\ContractBusinessModelResource[]'
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
        'action' => 'action',
        'partner_user' => 'partner_user',
        'partner_business_unit_grouping_id' => 'partner_business_unit_grouping_id',
        'disable_digital_leads' => 'disable_digital_leads',
        'display_name' => 'display_name',
        'geo' => 'geo',
        'revenues' => 'revenues',
        'sectors' => 'sectors',
        'industries' => 'industries',
        'client_types' => 'client_types',
        'geo_regions' => 'geo_regions',
        'business_models' => 'business_models'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'action' => 'setAction',
        'partner_user' => 'setPartnerUser',
        'partner_business_unit_grouping_id' => 'setPartnerBusinessUnitGroupingId',
        'disable_digital_leads' => 'setDisableDigitalLeads',
        'display_name' => 'setDisplayName',
        'geo' => 'setGeo',
        'revenues' => 'setRevenues',
        'sectors' => 'setSectors',
        'industries' => 'setIndustries',
        'client_types' => 'setClientTypes',
        'geo_regions' => 'setGeoRegions',
        'business_models' => 'setBusinessModels'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'action' => 'getAction',
        'partner_user' => 'getPartnerUser',
        'partner_business_unit_grouping_id' => 'getPartnerBusinessUnitGroupingId',
        'disable_digital_leads' => 'getDisableDigitalLeads',
        'display_name' => 'getDisplayName',
        'geo' => 'getGeo',
        'revenues' => 'getRevenues',
        'sectors' => 'getSectors',
        'industries' => 'getIndustries',
        'client_types' => 'getClientTypes',
        'geo_regions' => 'getGeoRegions',
        'business_models' => 'getBusinessModels'
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

    const ACTION_UNKNOWN = 'unknown';
    const ACTION_CREATE = 'create';
    const ACTION_UPDATE = 'update';
    const ACTION_DELETE = 'delete';
    const ACTION_CONTINUE_UNCHANGED = 'continue_unchanged';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_UNKNOWN,
            self::ACTION_CREATE,
            self::ACTION_UPDATE,
            self::ACTION_DELETE,
            self::ACTION_CONTINUE_UNCHANGED,
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : 'unknown';
        $this->container['partner_user'] = isset($data['partner_user']) ? $data['partner_user'] : null;
        $this->container['partner_business_unit_grouping_id'] = isset($data['partner_business_unit_grouping_id']) ? $data['partner_business_unit_grouping_id'] : null;
        $this->container['disable_digital_leads'] = isset($data['disable_digital_leads']) ? $data['disable_digital_leads'] : false;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['geo'] = isset($data['geo']) ? $data['geo'] : null;
        $this->container['revenues'] = isset($data['revenues']) ? $data['revenues'] : null;
        $this->container['sectors'] = isset($data['sectors']) ? $data['sectors'] : null;
        $this->container['industries'] = isset($data['industries']) ? $data['industries'] : null;
        $this->container['client_types'] = isset($data['client_types']) ? $data['client_types'] : null;
        $this->container['geo_regions'] = isset($data['geo_regions']) ? $data['geo_regions'] : null;
        $this->container['business_models'] = isset($data['business_models']) ? $data['business_models'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["unknown", "create", "update", "delete", "continue_unchanged"];
        if (!in_array($this->container['action'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'action', must be one of 'unknown', 'create', 'update', 'delete', 'continue_unchanged'.";
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

        $allowed_values = ["unknown", "create", "update", "delete", "continue_unchanged"];
        if (!in_array($this->container['action'], $allowed_values)) {
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
     * @param int $id Primary ID of the business unit.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param string $action Is this business unit created, updated or deleted?
     * @return $this
     */
    public function setAction($action)
    {
        $allowed_values = array('unknown', 'create', 'update', 'delete', 'continue_unchanged');
        if (!is_null($action) && (!in_array($action, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'action', must be one of 'unknown', 'create', 'update', 'delete', 'continue_unchanged'");
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets partner_user
     * @return \Ageras\Api\ContractComponentResource
     */
    public function getPartnerUser()
    {
        return $this->container['partner_user'];
    }

    /**
     * Sets partner_user
     * @param \Ageras\Api\ContractComponentResource $partner_user
     * @return $this
     */
    public function setPartnerUser($partner_user)
    {
        $this->container['partner_user'] = $partner_user;

        return $this;
    }

    /**
     * Gets partner_business_unit_grouping_id
     * @return int
     */
    public function getPartnerBusinessUnitGroupingId()
    {
        return $this->container['partner_business_unit_grouping_id'];
    }

    /**
     * Sets partner_business_unit_grouping_id
     * @param int $partner_business_unit_grouping_id Partner business unit grouping ID.
     * @return $this
     */
    public function setPartnerBusinessUnitGroupingId($partner_business_unit_grouping_id)
    {
        $this->container['partner_business_unit_grouping_id'] = $partner_business_unit_grouping_id;

        return $this;
    }

    /**
     * Gets disable_digital_leads
     * @return bool
     */
    public function getDisableDigitalLeads()
    {
        return $this->container['disable_digital_leads'];
    }

    /**
     * Sets disable_digital_leads
     * @param bool $disable_digital_leads Does the business unit accept digial leads?
     * @return $this
     */
    public function setDisableDigitalLeads($disable_digital_leads)
    {
        $this->container['disable_digital_leads'] = $disable_digital_leads;

        return $this;
    }

    /**
     * Gets display_name
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     * @param string $display_name Display name.
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets geo
     * @return \Ageras\Api\PartnerBusinessUnitGeoResource
     */
    public function getGeo()
    {
        return $this->container['geo'];
    }

    /**
     * Sets geo
     * @param \Ageras\Api\PartnerBusinessUnitGeoResource $geo
     * @return $this
     */
    public function setGeo($geo)
    {
        $this->container['geo'] = $geo;

        return $this;
    }

    /**
     * Gets revenues
     * @return \Ageras\Api\PartnerBusinessUnitRevenueRangeResource
     */
    public function getRevenues()
    {
        return $this->container['revenues'];
    }

    /**
     * Sets revenues
     * @param \Ageras\Api\PartnerBusinessUnitRevenueRangeResource $revenues
     * @return $this
     */
    public function setRevenues($revenues)
    {
        $this->container['revenues'] = $revenues;

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
     * @param \Ageras\Api\SectorResource[] $sectors Desired sectors.
     * @return $this
     */
    public function setSectors($sectors)
    {
        $this->container['sectors'] = $sectors;

        return $this;
    }

    /**
     * Gets industries
     * @return \Ageras\Api\IndustryResource[]
     */
    public function getIndustries()
    {
        return $this->container['industries'];
    }

    /**
     * Sets industries
     * @param \Ageras\Api\IndustryResource[] $industries Desired industries.
     * @return $this
     */
    public function setIndustries($industries)
    {
        $this->container['industries'] = $industries;

        return $this;
    }

    /**
     * Gets client_types
     * @return \Ageras\Api\LeadTypeResource[]
     */
    public function getClientTypes()
    {
        return $this->container['client_types'];
    }

    /**
     * Sets client_types
     * @param \Ageras\Api\LeadTypeResource[] $client_types Desired client types.
     * @return $this
     */
    public function setClientTypes($client_types)
    {
        $this->container['client_types'] = $client_types;

        return $this;
    }

    /**
     * Gets geo_regions
     * @return \Ageras\Api\PartnerBusinessUnitSegmentationGeoRegionResource[]
     */
    public function getGeoRegions()
    {
        return $this->container['geo_regions'];
    }

    /**
     * Sets geo_regions
     * @param \Ageras\Api\PartnerBusinessUnitSegmentationGeoRegionResource[] $geo_regions Desired geo regions.
     * @return $this
     */
    public function setGeoRegions($geo_regions)
    {
        $this->container['geo_regions'] = $geo_regions;

        return $this;
    }

    /**
     * Gets business_models
     * @return \Ageras\Api\ContractBusinessModelResource[]
     */
    public function getBusinessModels()
    {
        return $this->container['business_models'];
    }

    /**
     * Sets business_models
     * @param \Ageras\Api\ContractBusinessModelResource[] $business_models Business models to be applied to the business unit.
     * @return $this
     */
    public function setBusinessModels($business_models)
    {
        $this->container['business_models'] = $business_models;

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


