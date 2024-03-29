<?php
/**
 * KPICreditsNewSalesResource
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
 * KPICreditsNewSalesResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class KPICreditsNewSalesResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'KPICreditsNewSalesResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'actual' => '\Ageras\Api\KPINumberResource',
        'actual_net' => '\Ageras\Api\KPINumberResource',
        'forecast' => '\Ageras\Api\KPINumberResource',
        'target' => '\Ageras\Api\KPINumberResource'
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
        'actual' => 'actual',
        'actual_net' => 'actual_net',
        'forecast' => 'forecast',
        'target' => 'target'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'actual' => 'setActual',
        'actual_net' => 'setActualNet',
        'forecast' => 'setForecast',
        'target' => 'setTarget'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'actual' => 'getActual',
        'actual_net' => 'getActualNet',
        'forecast' => 'getForecast',
        'target' => 'getTarget'
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
        $this->container['actual'] = isset($data['actual']) ? $data['actual'] : null;
        $this->container['actual_net'] = isset($data['actual_net']) ? $data['actual_net'] : null;
        $this->container['forecast'] = isset($data['forecast']) ? $data['forecast'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
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
     * Gets actual
     * @return \Ageras\Api\KPINumberResource
     */
    public function getActual()
    {
        return $this->container['actual'];
    }

    /**
     * Sets actual
     * @param \Ageras\Api\KPINumberResource $actual
     * @return $this
     */
    public function setActual($actual)
    {
        $this->container['actual'] = $actual;

        return $this;
    }

    /**
     * Gets actual_net
     * @return \Ageras\Api\KPINumberResource
     */
    public function getActualNet()
    {
        return $this->container['actual_net'];
    }

    /**
     * Sets actual_net
     * @param \Ageras\Api\KPINumberResource $actual_net
     * @return $this
     */
    public function setActualNet($actual_net)
    {
        $this->container['actual_net'] = $actual_net;

        return $this;
    }

    /**
     * Gets forecast
     * @return \Ageras\Api\KPINumberResource
     */
    public function getForecast()
    {
        return $this->container['forecast'];
    }

    /**
     * Sets forecast
     * @param \Ageras\Api\KPINumberResource $forecast
     * @return $this
     */
    public function setForecast($forecast)
    {
        $this->container['forecast'] = $forecast;

        return $this;
    }

    /**
     * Gets target
     * @return \Ageras\Api\KPINumberResource
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     * @param \Ageras\Api\KPINumberResource $target
     * @return $this
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;

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


