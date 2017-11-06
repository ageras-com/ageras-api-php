<?php
/**
 * KPIMatchesResource
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
 * KPIMatchesResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class KPIMatchesResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'KPIMatchesResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'actual' => '\Ageras\Api\KPINumberResource',
        'past' => '\Ageras\Api\KPINumberResource',
        'ratio' => '\Ageras\Api\KPIMatchesRatioResource',
        'quote_matches' => '\Ageras\Api\KPINumberResource'
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
        'past' => 'past',
        'ratio' => 'ratio',
        'quote_matches' => 'quote_matches'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'actual' => 'setActual',
        'past' => 'setPast',
        'ratio' => 'setRatio',
        'quote_matches' => 'setQuoteMatches'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'actual' => 'getActual',
        'past' => 'getPast',
        'ratio' => 'getRatio',
        'quote_matches' => 'getQuoteMatches'
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
        $this->container['past'] = isset($data['past']) ? $data['past'] : null;
        $this->container['ratio'] = isset($data['ratio']) ? $data['ratio'] : null;
        $this->container['quote_matches'] = isset($data['quote_matches']) ? $data['quote_matches'] : null;
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
     * Gets past
     * @return \Ageras\Api\KPINumberResource
     */
    public function getPast()
    {
        return $this->container['past'];
    }

    /**
     * Sets past
     * @param \Ageras\Api\KPINumberResource $past
     * @return $this
     */
    public function setPast($past)
    {
        $this->container['past'] = $past;

        return $this;
    }

    /**
     * Gets ratio
     * @return \Ageras\Api\KPIMatchesRatioResource
     */
    public function getRatio()
    {
        return $this->container['ratio'];
    }

    /**
     * Sets ratio
     * @param \Ageras\Api\KPIMatchesRatioResource $ratio
     * @return $this
     */
    public function setRatio($ratio)
    {
        $this->container['ratio'] = $ratio;

        return $this;
    }

    /**
     * Gets quote_matches
     * @return \Ageras\Api\KPINumberResource
     */
    public function getQuoteMatches()
    {
        return $this->container['quote_matches'];
    }

    /**
     * Sets quote_matches
     * @param \Ageras\Api\KPINumberResource $quote_matches
     * @return $this
     */
    public function setQuoteMatches($quote_matches)
    {
        $this->container['quote_matches'] = $quote_matches;

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


