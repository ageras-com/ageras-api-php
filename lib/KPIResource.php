<?php
/**
 * KPIResource
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
 * KPIResource Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Ageras\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class KPIResource implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'KPIResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'geo_code' => 'string',
        'industry' => '\Ageras\Api\IndustryResource',
        'coupon_revenue' => '\Ageras\Api\KPICouponRevenueResource',
        'golden_ratio' => '\Ageras\Api\KPIGoldenRatioResource',
        'partners' => '\Ageras\Api\KPIPartnersResource',
        'leads' => '\Ageras\Api\KPILeadsResource'
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
        'geo_code' => 'geo_code',
        'industry' => 'industry',
        'coupon_revenue' => 'coupon_revenue',
        'golden_ratio' => 'golden_ratio',
        'partners' => 'partners',
        'leads' => 'leads'
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
        'geo_code' => 'setGeoCode',
        'industry' => 'setIndustry',
        'coupon_revenue' => 'setCouponRevenue',
        'golden_ratio' => 'setGoldenRatio',
        'partners' => 'setPartners',
        'leads' => 'setLeads'
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
        'geo_code' => 'getGeoCode',
        'industry' => 'getIndustry',
        'coupon_revenue' => 'getCouponRevenue',
        'golden_ratio' => 'getGoldenRatio',
        'partners' => 'getPartners',
        'leads' => 'getLeads'
    );

    public static function getters()
    {
        return self::$getters;
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
        $this->container['geo_code'] = isset($data['geo_code']) ? $data['geo_code'] : null;
        $this->container['industry'] = isset($data['industry']) ? $data['industry'] : null;
        $this->container['coupon_revenue'] = isset($data['coupon_revenue']) ? $data['coupon_revenue'] : null;
        $this->container['golden_ratio'] = isset($data['golden_ratio']) ? $data['golden_ratio'] : null;
        $this->container['partners'] = isset($data['partners']) ? $data['partners'] : null;
        $this->container['leads'] = isset($data['leads']) ? $data['leads'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
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
     * @param string $geo_code Geo Location Geo
     * @return $this
     */
    public function setGeoCode($geo_code)
    {
        $this->container['geo_code'] = $geo_code;

        return $this;
    }

    /**
     * Gets industry
     * @return \Ageras\Api\IndustryResource
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     * @param \Ageras\Api\IndustryResource $industry
     * @return $this
     */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets coupon_revenue
     * @return \Ageras\Api\KPICouponRevenueResource
     */
    public function getCouponRevenue()
    {
        return $this->container['coupon_revenue'];
    }

    /**
     * Sets coupon_revenue
     * @param \Ageras\Api\KPICouponRevenueResource $coupon_revenue
     * @return $this
     */
    public function setCouponRevenue($coupon_revenue)
    {
        $this->container['coupon_revenue'] = $coupon_revenue;

        return $this;
    }

    /**
     * Gets golden_ratio
     * @return \Ageras\Api\KPIGoldenRatioResource
     */
    public function getGoldenRatio()
    {
        return $this->container['golden_ratio'];
    }

    /**
     * Sets golden_ratio
     * @param \Ageras\Api\KPIGoldenRatioResource $golden_ratio
     * @return $this
     */
    public function setGoldenRatio($golden_ratio)
    {
        $this->container['golden_ratio'] = $golden_ratio;

        return $this;
    }

    /**
     * Gets partners
     * @return \Ageras\Api\KPIPartnersResource
     */
    public function getPartners()
    {
        return $this->container['partners'];
    }

    /**
     * Sets partners
     * @param \Ageras\Api\KPIPartnersResource $partners
     * @return $this
     */
    public function setPartners($partners)
    {
        $this->container['partners'] = $partners;

        return $this;
    }

    /**
     * Gets leads
     * @return \Ageras\Api\KPILeadsResource
     */
    public function getLeads()
    {
        return $this->container['leads'];
    }

    /**
     * Sets leads
     * @param \Ageras\Api\KPILeadsResource $leads
     * @return $this
     */
    public function setLeads($leads)
    {
        $this->container['leads'] = $leads;

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


