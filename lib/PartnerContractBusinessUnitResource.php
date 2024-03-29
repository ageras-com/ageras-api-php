<?php
/**
 * PartnerContractBusinessUnitResource
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
 * PartnerContractBusinessUnitResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PartnerContractBusinessUnitResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PartnerContractBusinessUnitResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'partner_user' => '\Ageras\Api\PartnerContractBusinessUnitPartnerUserResource',
        'partner_business_unit_grouping_id' => 'int',
        'wants_digital_leads' => 'bool',
        'display_name' => 'string',
        'geo' => '\Ageras\Api\PartnerBusinessUnitGeoResource',
        'revenues' => '\Ageras\Api\PartnerBusinessUnitRevenueRangeResource',
        'sectors' => '\Ageras\Api\SectorResource[]',
        'industries' => '\Ageras\Api\IndustryResource[]',
        'client_types' => '\Ageras\Api\LeadTypeResource[]',
        'geo_regions' => '\Ageras\Api\PartnerBusinessUnitSegmentationGeoRegionResource[]',
        'allocation_quota' => '\Ageras\Api\PartnerContractBusinessUnitQuotaResource',
        'allocation_limit' => '\Ageras\Api\PartnerContractBusinessUnitQuotaResource',
        'wants_exclusive_leads' => 'bool',
        'revenue_segment' => '\Ageras\Api\RevenueSegmentResource'
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
        'partner_user' => 'partner_user',
        'partner_business_unit_grouping_id' => 'partner_business_unit_grouping_id',
        'wants_digital_leads' => 'wants_digital_leads',
        'display_name' => 'display_name',
        'geo' => 'geo',
        'revenues' => 'revenues',
        'sectors' => 'sectors',
        'industries' => 'industries',
        'client_types' => 'client_types',
        'geo_regions' => 'geo_regions',
        'allocation_quota' => 'allocation_quota',
        'allocation_limit' => 'allocation_limit',
        'wants_exclusive_leads' => 'wants_exclusive_leads',
        'revenue_segment' => 'revenue_segment'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'partner_user' => 'setPartnerUser',
        'partner_business_unit_grouping_id' => 'setPartnerBusinessUnitGroupingId',
        'wants_digital_leads' => 'setWantsDigitalLeads',
        'display_name' => 'setDisplayName',
        'geo' => 'setGeo',
        'revenues' => 'setRevenues',
        'sectors' => 'setSectors',
        'industries' => 'setIndustries',
        'client_types' => 'setClientTypes',
        'geo_regions' => 'setGeoRegions',
        'allocation_quota' => 'setAllocationQuota',
        'allocation_limit' => 'setAllocationLimit',
        'wants_exclusive_leads' => 'setWantsExclusiveLeads',
        'revenue_segment' => 'setRevenueSegment'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'partner_user' => 'getPartnerUser',
        'partner_business_unit_grouping_id' => 'getPartnerBusinessUnitGroupingId',
        'wants_digital_leads' => 'getWantsDigitalLeads',
        'display_name' => 'getDisplayName',
        'geo' => 'getGeo',
        'revenues' => 'getRevenues',
        'sectors' => 'getSectors',
        'industries' => 'getIndustries',
        'client_types' => 'getClientTypes',
        'geo_regions' => 'getGeoRegions',
        'allocation_quota' => 'getAllocationQuota',
        'allocation_limit' => 'getAllocationLimit',
        'wants_exclusive_leads' => 'getWantsExclusiveLeads',
        'revenue_segment' => 'getRevenueSegment'
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
        $this->container['partner_user'] = isset($data['partner_user']) ? $data['partner_user'] : null;
        $this->container['partner_business_unit_grouping_id'] = isset($data['partner_business_unit_grouping_id']) ? $data['partner_business_unit_grouping_id'] : null;
        $this->container['wants_digital_leads'] = isset($data['wants_digital_leads']) ? $data['wants_digital_leads'] : false;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['geo'] = isset($data['geo']) ? $data['geo'] : null;
        $this->container['revenues'] = isset($data['revenues']) ? $data['revenues'] : null;
        $this->container['sectors'] = isset($data['sectors']) ? $data['sectors'] : null;
        $this->container['industries'] = isset($data['industries']) ? $data['industries'] : null;
        $this->container['client_types'] = isset($data['client_types']) ? $data['client_types'] : null;
        $this->container['geo_regions'] = isset($data['geo_regions']) ? $data['geo_regions'] : null;
        $this->container['allocation_quota'] = isset($data['allocation_quota']) ? $data['allocation_quota'] : null;
        $this->container['allocation_limit'] = isset($data['allocation_limit']) ? $data['allocation_limit'] : null;
        $this->container['wants_exclusive_leads'] = isset($data['wants_exclusive_leads']) ? $data['wants_exclusive_leads'] : false;
        $this->container['revenue_segment'] = isset($data['revenue_segment']) ? $data['revenue_segment'] : null;
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
     * @param int $id Primary ID of the business unit.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets partner_user
     * @return \Ageras\Api\PartnerContractBusinessUnitPartnerUserResource
     */
    public function getPartnerUser()
    {
        return $this->container['partner_user'];
    }

    /**
     * Sets partner_user
     * @param \Ageras\Api\PartnerContractBusinessUnitPartnerUserResource $partner_user
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
     * Gets wants_digital_leads
     * @return bool
     */
    public function getWantsDigitalLeads()
    {
        return $this->container['wants_digital_leads'];
    }

    /**
     * Sets wants_digital_leads
     * @param bool $wants_digital_leads Does the business unit accept digial leads?
     * @return $this
     */
    public function setWantsDigitalLeads($wants_digital_leads)
    {
        $this->container['wants_digital_leads'] = $wants_digital_leads;

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
     * Gets allocation_quota
     * @return \Ageras\Api\PartnerContractBusinessUnitQuotaResource
     */
    public function getAllocationQuota()
    {
        return $this->container['allocation_quota'];
    }

    /**
     * Sets allocation_quota
     * @param \Ageras\Api\PartnerContractBusinessUnitQuotaResource $allocation_quota
     * @return $this
     */
    public function setAllocationQuota($allocation_quota)
    {
        $this->container['allocation_quota'] = $allocation_quota;

        return $this;
    }

    /**
     * Gets allocation_limit
     * @return \Ageras\Api\PartnerContractBusinessUnitQuotaResource
     */
    public function getAllocationLimit()
    {
        return $this->container['allocation_limit'];
    }

    /**
     * Sets allocation_limit
     * @param \Ageras\Api\PartnerContractBusinessUnitQuotaResource $allocation_limit
     * @return $this
     */
    public function setAllocationLimit($allocation_limit)
    {
        $this->container['allocation_limit'] = $allocation_limit;

        return $this;
    }

    /**
     * Gets wants_exclusive_leads
     * @return bool
     */
    public function getWantsExclusiveLeads()
    {
        return $this->container['wants_exclusive_leads'];
    }

    /**
     * Sets wants_exclusive_leads
     * @param bool $wants_exclusive_leads Flag whether business unit wants exclusive leads
     * @return $this
     */
    public function setWantsExclusiveLeads($wants_exclusive_leads)
    {
        $this->container['wants_exclusive_leads'] = $wants_exclusive_leads;

        return $this;
    }

    /**
     * Gets revenue_segment
     * @return \Ageras\Api\RevenueSegmentResource
     */
    public function getRevenueSegment()
    {
        return $this->container['revenue_segment'];
    }

    /**
     * Sets revenue_segment
     * @param \Ageras\Api\RevenueSegmentResource $revenue_segment
     * @return $this
     */
    public function setRevenueSegment($revenue_segment)
    {
        $this->container['revenue_segment'] = $revenue_segment;

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


