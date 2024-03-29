<?php
/**
 * RatingScoreResource
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
 * RatingScoreResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RatingScoreResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RatingScoreResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'overall' => 'int',
        'quality' => 'int',
        'contact' => 'int',
        'expertise' => 'int',
        'schedule' => 'int',
        'budget' => 'int'
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
        'overall' => 'overall',
        'quality' => 'quality',
        'contact' => 'contact',
        'expertise' => 'expertise',
        'schedule' => 'schedule',
        'budget' => 'budget'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'overall' => 'setOverall',
        'quality' => 'setQuality',
        'contact' => 'setContact',
        'expertise' => 'setExpertise',
        'schedule' => 'setSchedule',
        'budget' => 'setBudget'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'overall' => 'getOverall',
        'quality' => 'getQuality',
        'contact' => 'getContact',
        'expertise' => 'getExpertise',
        'schedule' => 'getSchedule',
        'budget' => 'getBudget'
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
        $this->container['overall'] = isset($data['overall']) ? $data['overall'] : null;
        $this->container['quality'] = isset($data['quality']) ? $data['quality'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['expertise'] = isset($data['expertise']) ? $data['expertise'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['budget'] = isset($data['budget']) ? $data['budget'] : null;
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
     * Gets overall
     * @return int
     */
    public function getOverall()
    {
        return $this->container['overall'];
    }

    /**
     * Sets overall
     * @param int $overall Overall rating. An aggregation of the other ratings combined.
     * @return $this
     */
    public function setOverall($overall)
    {
        $this->container['overall'] = $overall;

        return $this;
    }

    /**
     * Gets quality
     * @return int
     */
    public function getQuality()
    {
        return $this->container['quality'];
    }

    /**
     * Sets quality
     * @param int $quality Rating from 1 to 5 of the quality of the partner's work.
     * @return $this
     */
    public function setQuality($quality)
    {
        $this->container['quality'] = $quality;

        return $this;
    }

    /**
     * Gets contact
     * @return int
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     * @param int $contact Rating from 1 to 5 of the communication with the partner.
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets expertise
     * @return int
     */
    public function getExpertise()
    {
        return $this->container['expertise'];
    }

    /**
     * Sets expertise
     * @param int $expertise Rating from 1 to 5 of the partner's expertise.
     * @return $this
     */
    public function setExpertise($expertise)
    {
        $this->container['expertise'] = $expertise;

        return $this;
    }

    /**
     * Gets schedule
     * @return int
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     * @param int $schedule Rating from 1 to 5 of the partner's ability to keep the schedule.
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets budget
     * @return int
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget
     * @param int $budget Rating from 1 to 5 of the partner's ability to keep the budget.
     * @return $this
     */
    public function setBudget($budget)
    {
        $this->container['budget'] = $budget;

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


