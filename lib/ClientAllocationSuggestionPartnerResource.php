<?php
/**
 * ClientAllocationSuggestionPartnerResource
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
 * ClientAllocationSuggestionPartnerResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ClientAllocationSuggestionPartnerResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ClientAllocationSuggestionPartnerResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'company_name' => 'string',
        'rating' => '\Ageras\Api\PartnerRatingResource',
        'logo' => 'string',
        'company_information' => 'string',
        'badges' => '\Ageras\Api\PartnerBadgeResource[]',
        'geo' => '\Ageras\Api\PartnerGeoResource'
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
        'rating' => 'rating',
        'logo' => 'logo',
        'company_information' => 'company_information',
        'badges' => 'badges',
        'geo' => 'geo'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'company_name' => 'setCompanyName',
        'rating' => 'setRating',
        'logo' => 'setLogo',
        'company_information' => 'setCompanyInformation',
        'badges' => 'setBadges',
        'geo' => 'setGeo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'company_name' => 'getCompanyName',
        'rating' => 'getRating',
        'logo' => 'getLogo',
        'company_information' => 'getCompanyInformation',
        'badges' => 'getBadges',
        'geo' => 'getGeo'
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
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['company_information'] = isset($data['company_information']) ? $data['company_information'] : null;
        $this->container['badges'] = isset($data['badges']) ? $data['badges'] : null;
        $this->container['geo'] = isset($data['geo']) ? $data['geo'] : null;
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
     * @param int $id
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
     * @param string $company_name
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

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
     * @param string $logo
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

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
     * @param string $company_information
     * @return $this
     */
    public function setCompanyInformation($company_information)
    {
        $this->container['company_information'] = $company_information;

        return $this;
    }

    /**
     * Gets badges
     * @return \Ageras\Api\PartnerBadgeResource[]
     */
    public function getBadges()
    {
        return $this->container['badges'];
    }

    /**
     * Sets badges
     * @param \Ageras\Api\PartnerBadgeResource[] $badges
     * @return $this
     */
    public function setBadges($badges)
    {
        $this->container['badges'] = $badges;

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


