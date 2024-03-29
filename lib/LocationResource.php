<?php
/**
 * LocationResource
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
 * LocationResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LocationResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LocationResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'code' => 'string',
        'slug' => 'string',
        'country_name' => 'string',
        'zip_code' => 'string',
        'city_name' => 'string',
        'city_district' => 'string',
        'address' => 'string',
        'point' => '\Ageras\Api\LocationGeoPointResource',
        'region_name' => 'string',
        'region_abbreviation' => 'string',
        'sub_region_name' => 'string'
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
        'code' => 'code',
        'slug' => 'slug',
        'country_name' => 'country_name',
        'zip_code' => 'zip_code',
        'city_name' => 'city_name',
        'city_district' => 'city_district',
        'address' => 'address',
        'point' => 'point',
        'region_name' => 'region_name',
        'region_abbreviation' => 'region_abbreviation',
        'sub_region_name' => 'sub_region_name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'code' => 'setCode',
        'slug' => 'setSlug',
        'country_name' => 'setCountryName',
        'zip_code' => 'setZipCode',
        'city_name' => 'setCityName',
        'city_district' => 'setCityDistrict',
        'address' => 'setAddress',
        'point' => 'setPoint',
        'region_name' => 'setRegionName',
        'region_abbreviation' => 'setRegionAbbreviation',
        'sub_region_name' => 'setSubRegionName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'code' => 'getCode',
        'slug' => 'getSlug',
        'country_name' => 'getCountryName',
        'zip_code' => 'getZipCode',
        'city_name' => 'getCityName',
        'city_district' => 'getCityDistrict',
        'address' => 'getAddress',
        'point' => 'getPoint',
        'region_name' => 'getRegionName',
        'region_abbreviation' => 'getRegionAbbreviation',
        'sub_region_name' => 'getSubRegionName'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['slug'] = isset($data['slug']) ? $data['slug'] : null;
        $this->container['country_name'] = isset($data['country_name']) ? $data['country_name'] : null;
        $this->container['zip_code'] = isset($data['zip_code']) ? $data['zip_code'] : null;
        $this->container['city_name'] = isset($data['city_name']) ? $data['city_name'] : null;
        $this->container['city_district'] = isset($data['city_district']) ? $data['city_district'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['point'] = isset($data['point']) ? $data['point'] : null;
        $this->container['region_name'] = isset($data['region_name']) ? $data['region_name'] : null;
        $this->container['region_abbreviation'] = isset($data['region_abbreviation']) ? $data['region_abbreviation'] : null;
        $this->container['sub_region_name'] = isset($data['sub_region_name']) ? $data['sub_region_name'] : null;
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
     * @param int $id id for resource
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code Code for the given location.
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

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
     * @param string $slug url slug
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets country_name
     * @return string
     */
    public function getCountryName()
    {
        return $this->container['country_name'];
    }

    /**
     * Sets country_name
     * @param string $country_name Name of the country
     * @return $this
     */
    public function setCountryName($country_name)
    {
        $this->container['country_name'] = $country_name;

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
     * @param string $zip_code Zip Code.
     * @return $this
     */
    public function setZipCode($zip_code)
    {
        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets city_name
     * @return string
     */
    public function getCityName()
    {
        return $this->container['city_name'];
    }

    /**
     * Sets city_name
     * @param string $city_name Name of the city.
     * @return $this
     */
    public function setCityName($city_name)
    {
        $this->container['city_name'] = $city_name;

        return $this;
    }

    /**
     * Gets city_district
     * @return string
     */
    public function getCityDistrict()
    {
        return $this->container['city_district'];
    }

    /**
     * Sets city_district
     * @param string $city_district District the location is part of
     * @return $this
     */
    public function setCityDistrict($city_district)
    {
        $this->container['city_district'] = $city_district;

        return $this;
    }

    /**
     * Gets address
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param string $address The address.
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets point
     * @return \Ageras\Api\LocationGeoPointResource
     */
    public function getPoint()
    {
        return $this->container['point'];
    }

    /**
     * Sets point
     * @param \Ageras\Api\LocationGeoPointResource $point
     * @return $this
     */
    public function setPoint($point)
    {
        $this->container['point'] = $point;

        return $this;
    }

    /**
     * Gets region_name
     * @return string
     */
    public function getRegionName()
    {
        return $this->container['region_name'];
    }

    /**
     * Sets region_name
     * @param string $region_name Name of the region
     * @return $this
     */
    public function setRegionName($region_name)
    {
        $this->container['region_name'] = $region_name;

        return $this;
    }

    /**
     * Gets region_abbreviation
     * @return string
     */
    public function getRegionAbbreviation()
    {
        return $this->container['region_abbreviation'];
    }

    /**
     * Sets region_abbreviation
     * @param string $region_abbreviation Region abbreviation
     * @return $this
     */
    public function setRegionAbbreviation($region_abbreviation)
    {
        $this->container['region_abbreviation'] = $region_abbreviation;

        return $this;
    }

    /**
     * Gets sub_region_name
     * @return string
     */
    public function getSubRegionName()
    {
        return $this->container['sub_region_name'];
    }

    /**
     * Sets sub_region_name
     * @param string $sub_region_name Name of the sub region
     * @return $this
     */
    public function setSubRegionName($sub_region_name)
    {
        $this->container['sub_region_name'] = $sub_region_name;

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


