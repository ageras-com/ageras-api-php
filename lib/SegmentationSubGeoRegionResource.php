<?php
/**
 * SegmentationSubGeoRegionResource
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
 * SegmentationSubGeoRegionResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SegmentationSubGeoRegionResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SegmentationSubGeoRegionResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'segmentation_geo_region_id' => 'int',
        'sub_region_name' => 'string',
        'points' => '\Ageras\Api\LocationGeoPointResource[]'
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
        'segmentation_geo_region_id' => 'segmentation_geo_region_id',
        'sub_region_name' => 'sub_region_name',
        'points' => 'points'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'segmentation_geo_region_id' => 'setSegmentationGeoRegionId',
        'sub_region_name' => 'setSubRegionName',
        'points' => 'setPoints'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'segmentation_geo_region_id' => 'getSegmentationGeoRegionId',
        'sub_region_name' => 'getSubRegionName',
        'points' => 'getPoints'
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
        $this->container['segmentation_geo_region_id'] = isset($data['segmentation_geo_region_id']) ? $data['segmentation_geo_region_id'] : null;
        $this->container['sub_region_name'] = isset($data['sub_region_name']) ? $data['sub_region_name'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
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
     * @param int $id Primary ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets segmentation_geo_region_id
     * @return int
     */
    public function getSegmentationGeoRegionId()
    {
        return $this->container['segmentation_geo_region_id'];
    }

    /**
     * Sets segmentation_geo_region_id
     * @param int $segmentation_geo_region_id Parent region ID.
     * @return $this
     */
    public function setSegmentationGeoRegionId($segmentation_geo_region_id)
    {
        $this->container['segmentation_geo_region_id'] = $segmentation_geo_region_id;

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
     * @param string $sub_region_name Human-readable name.
     * @return $this
     */
    public function setSubRegionName($sub_region_name)
    {
        $this->container['sub_region_name'] = $sub_region_name;

        return $this;
    }

    /**
     * Gets points
     * @return \Ageras\Api\LocationGeoPointResource[]
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     * @param \Ageras\Api\LocationGeoPointResource[] $points List of points that define this region.
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

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

