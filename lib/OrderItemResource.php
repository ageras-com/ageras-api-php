<?php
/**
 * OrderItemResource
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
 * OrderItemResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderItemResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OrderItemResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'quote' => '\Ageras\Api\OrderPartnerLeadQuoteResource',
        'package' => '\Ageras\Api\OrderPackageResource',
        'discount' => '\Ageras\Api\OrderDiscountResource'
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
        'type' => 'type',
        'quote' => 'quote',
        'package' => 'package',
        'discount' => 'discount'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'quote' => 'setQuote',
        'package' => 'setPackage',
        'discount' => 'setDiscount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'quote' => 'getQuote',
        'package' => 'getPackage',
        'discount' => 'getDiscount'
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

    const TYPE_UNKNOWN = 'unknown';
    const TYPE_QUOTE = 'quote';
    const TYPE_PACKAGE = 'package';
    const TYPE_DISCOUNT = 'discount';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_UNKNOWN,
            self::TYPE_QUOTE,
            self::TYPE_PACKAGE,
            self::TYPE_DISCOUNT,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'unknown';
        $this->container['quote'] = isset($data['quote']) ? $data['quote'] : null;
        $this->container['package'] = isset($data['package']) ? $data['package'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["unknown", "quote", "package", "discount"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of 'unknown', 'quote', 'package', 'discount'.";
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

        $allowed_values = ["unknown", "quote", "package", "discount"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Type of consumer for the order
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('unknown', 'quote', 'package', 'discount');
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'unknown', 'quote', 'package', 'discount'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets quote
     * @return \Ageras\Api\OrderPartnerLeadQuoteResource
     */
    public function getQuote()
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     * @param \Ageras\Api\OrderPartnerLeadQuoteResource $quote
     * @return $this
     */
    public function setQuote($quote)
    {
        $this->container['quote'] = $quote;

        return $this;
    }

    /**
     * Gets package
     * @return \Ageras\Api\OrderPackageResource
     */
    public function getPackage()
    {
        return $this->container['package'];
    }

    /**
     * Sets package
     * @param \Ageras\Api\OrderPackageResource $package
     * @return $this
     */
    public function setPackage($package)
    {
        $this->container['package'] = $package;

        return $this;
    }

    /**
     * Gets discount
     * @return \Ageras\Api\OrderDiscountResource
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     * @param \Ageras\Api\OrderDiscountResource $discount
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

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

