<?php
/**
 * EmployeeLeadPredictionResource
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
 * EmployeeLeadPredictionResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EmployeeLeadPredictionResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'EmployeeLeadPredictionResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lead_id' => 'int',
        'employee_id' => 'int',
        'quote_fee' => '\Ageras\Api\AmountResource',
        'match_by' => 'string',
        'probability_of_match' => 'float'
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
        'lead_id' => 'lead_id',
        'employee_id' => 'employee_id',
        'quote_fee' => 'quote_fee',
        'match_by' => 'match_by',
        'probability_of_match' => 'probability_of_match'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'lead_id' => 'setLeadId',
        'employee_id' => 'setEmployeeId',
        'quote_fee' => 'setQuoteFee',
        'match_by' => 'setMatchBy',
        'probability_of_match' => 'setProbabilityOfMatch'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'lead_id' => 'getLeadId',
        'employee_id' => 'getEmployeeId',
        'quote_fee' => 'getQuoteFee',
        'match_by' => 'getMatchBy',
        'probability_of_match' => 'getProbabilityOfMatch'
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
        $this->container['lead_id'] = isset($data['lead_id']) ? $data['lead_id'] : null;
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['quote_fee'] = isset($data['quote_fee']) ? $data['quote_fee'] : null;
        $this->container['match_by'] = isset($data['match_by']) ? $data['match_by'] : null;
        $this->container['probability_of_match'] = isset($data['probability_of_match']) ? $data['probability_of_match'] : null;
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
     * Gets lead_id
     * @return int
     */
    public function getLeadId()
    {
        return $this->container['lead_id'];
    }

    /**
     * Sets lead_id
     * @param int $lead_id Lead the predictions are for.
     * @return $this
     */
    public function setLeadId($lead_id)
    {
        $this->container['lead_id'] = $lead_id;

        return $this;
    }

    /**
     * Gets employee_id
     * @return int
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     * @param int $employee_id Employee who made the prediction.
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {
        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets quote_fee
     * @return \Ageras\Api\AmountResource
     */
    public function getQuoteFee()
    {
        return $this->container['quote_fee'];
    }

    /**
     * Sets quote_fee
     * @param \Ageras\Api\AmountResource $quote_fee
     * @return $this
     */
    public function setQuoteFee($quote_fee)
    {
        $this->container['quote_fee'] = $quote_fee;

        return $this;
    }

    /**
     * Gets match_by
     * @return string
     */
    public function getMatchBy()
    {
        return $this->container['match_by'];
    }

    /**
     * Sets match_by
     * @param string $match_by Prediction of when the match will be made by.
     * @return $this
     */
    public function setMatchBy($match_by)
    {
        $this->container['match_by'] = $match_by;

        return $this;
    }

    /**
     * Gets probability_of_match
     * @return float
     */
    public function getProbabilityOfMatch()
    {
        return $this->container['probability_of_match'];
    }

    /**
     * Sets probability_of_match
     * @param float $probability_of_match Estimate of probability that a match will be made.
     * @return $this
     */
    public function setProbabilityOfMatch($probability_of_match)
    {
        $this->container['probability_of_match'] = $probability_of_match;

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


