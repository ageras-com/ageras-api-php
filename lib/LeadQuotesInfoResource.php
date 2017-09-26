<?php
/**
 * LeadQuotesInfoResource
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
 * LeadQuotesInfoResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LeadQuotesInfoResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LeadQuotesInfoResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'max' => 'int',
        'count' => 'int',
        'open_for_quotes' => 'bool',
        'accepted_quote' => '\Ageras\Api\LeadQuoteInfoEntryResource',
        'quotes' => '\Ageras\Api\LeadQuoteInfoEntryResource[]',
        'client_decision_postponed_to' => 'string'
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
        'max' => 'max',
        'count' => 'count',
        'open_for_quotes' => 'open_for_quotes',
        'accepted_quote' => 'accepted_quote',
        'quotes' => 'quotes',
        'client_decision_postponed_to' => 'client_decision_postponed_to'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'max' => 'setMax',
        'count' => 'setCount',
        'open_for_quotes' => 'setOpenForQuotes',
        'accepted_quote' => 'setAcceptedQuote',
        'quotes' => 'setQuotes',
        'client_decision_postponed_to' => 'setClientDecisionPostponedTo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'max' => 'getMax',
        'count' => 'getCount',
        'open_for_quotes' => 'getOpenForQuotes',
        'accepted_quote' => 'getAcceptedQuote',
        'quotes' => 'getQuotes',
        'client_decision_postponed_to' => 'getClientDecisionPostponedTo'
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
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['open_for_quotes'] = isset($data['open_for_quotes']) ? $data['open_for_quotes'] : false;
        $this->container['accepted_quote'] = isset($data['accepted_quote']) ? $data['accepted_quote'] : null;
        $this->container['quotes'] = isset($data['quotes']) ? $data['quotes'] : null;
        $this->container['client_decision_postponed_to'] = isset($data['client_decision_postponed_to']) ? $data['client_decision_postponed_to'] : null;
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
     * Gets max
     * @return int
     */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
     * Sets max
     * @param int $max Max Offer count.
     * @return $this
     */
    public function setMax($max)
    {
        $this->container['max'] = $max;

        return $this;
    }

    /**
     * Gets count
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     * @param int $count Number of offers.
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets open_for_quotes
     * @return bool
     */
    public function getOpenForQuotes()
    {
        return $this->container['open_for_quotes'];
    }

    /**
     * Sets open_for_quotes
     * @param bool $open_for_quotes Open for quotes.
     * @return $this
     */
    public function setOpenForQuotes($open_for_quotes)
    {
        $this->container['open_for_quotes'] = $open_for_quotes;

        return $this;
    }

    /**
     * Gets accepted_quote
     * @return \Ageras\Api\LeadQuoteInfoEntryResource
     */
    public function getAcceptedQuote()
    {
        return $this->container['accepted_quote'];
    }

    /**
     * Sets accepted_quote
     * @param \Ageras\Api\LeadQuoteInfoEntryResource $accepted_quote
     * @return $this
     */
    public function setAcceptedQuote($accepted_quote)
    {
        $this->container['accepted_quote'] = $accepted_quote;

        return $this;
    }

    /**
     * Gets quotes
     * @return \Ageras\Api\LeadQuoteInfoEntryResource[]
     */
    public function getQuotes()
    {
        return $this->container['quotes'];
    }

    /**
     * Sets quotes
     * @param \Ageras\Api\LeadQuoteInfoEntryResource[] $quotes List of offers.
     * @return $this
     */
    public function setQuotes($quotes)
    {
        $this->container['quotes'] = $quotes;

        return $this;
    }

    /**
     * Gets client_decision_postponed_to
     * @return string
     */
    public function getClientDecisionPostponedTo()
    {
        return $this->container['client_decision_postponed_to'];
    }

    /**
     * Sets client_decision_postponed_to
     * @param string $client_decision_postponed_to Date the client match decision is postponed to.
     * @return $this
     */
    public function setClientDecisionPostponedTo($client_decision_postponed_to)
    {
        $this->container['client_decision_postponed_to'] = $client_decision_postponed_to;

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


