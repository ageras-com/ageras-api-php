<?php
/**
 * ActivityRatingResource
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ageras\Api
 * @author   Swagger Codegen team
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

namespace Ageras\Api\Model;

use \ArrayAccess;

/**
 * ActivityRatingResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ActivityRatingResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ActivityRatingResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'title' => 'string',
        'comment' => 'string',
        'rating_quality' => 'int',
        'rating_contact' => 'int',
        'rating_expertise' => 'int',
        'rating_schedule' => 'int',
        'rating_budget' => 'int',
        'rating' => 'int'
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
        'title' => 'title',
        'comment' => 'comment',
        'rating_quality' => 'rating_quality',
        'rating_contact' => 'rating_contact',
        'rating_expertise' => 'rating_expertise',
        'rating_schedule' => 'rating_schedule',
        'rating_budget' => 'rating_budget',
        'rating' => 'rating'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'comment' => 'setComment',
        'rating_quality' => 'setRatingQuality',
        'rating_contact' => 'setRatingContact',
        'rating_expertise' => 'setRatingExpertise',
        'rating_schedule' => 'setRatingSchedule',
        'rating_budget' => 'setRatingBudget',
        'rating' => 'setRating'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'comment' => 'getComment',
        'rating_quality' => 'getRatingQuality',
        'rating_contact' => 'getRatingContact',
        'rating_expertise' => 'getRatingExpertise',
        'rating_schedule' => 'getRatingSchedule',
        'rating_budget' => 'getRatingBudget',
        'rating' => 'getRating'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['rating_quality'] = isset($data['rating_quality']) ? $data['rating_quality'] : null;
        $this->container['rating_contact'] = isset($data['rating_contact']) ? $data['rating_contact'] : null;
        $this->container['rating_expertise'] = isset($data['rating_expertise']) ? $data['rating_expertise'] : null;
        $this->container['rating_schedule'] = isset($data['rating_schedule']) ? $data['rating_schedule'] : null;
        $this->container['rating_budget'] = isset($data['rating_budget']) ? $data['rating_budget'] : null;
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
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
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets comment
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     * @param string $comment
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets rating_quality
     * @return int
     */
    public function getRatingQuality()
    {
        return $this->container['rating_quality'];
    }

    /**
     * Sets rating_quality
     * @param int $rating_quality
     * @return $this
     */
    public function setRatingQuality($rating_quality)
    {
        $this->container['rating_quality'] = $rating_quality;

        return $this;
    }

    /**
     * Gets rating_contact
     * @return int
     */
    public function getRatingContact()
    {
        return $this->container['rating_contact'];
    }

    /**
     * Sets rating_contact
     * @param int $rating_contact
     * @return $this
     */
    public function setRatingContact($rating_contact)
    {
        $this->container['rating_contact'] = $rating_contact;

        return $this;
    }

    /**
     * Gets rating_expertise
     * @return int
     */
    public function getRatingExpertise()
    {
        return $this->container['rating_expertise'];
    }

    /**
     * Sets rating_expertise
     * @param int $rating_expertise
     * @return $this
     */
    public function setRatingExpertise($rating_expertise)
    {
        $this->container['rating_expertise'] = $rating_expertise;

        return $this;
    }

    /**
     * Gets rating_schedule
     * @return int
     */
    public function getRatingSchedule()
    {
        return $this->container['rating_schedule'];
    }

    /**
     * Sets rating_schedule
     * @param int $rating_schedule
     * @return $this
     */
    public function setRatingSchedule($rating_schedule)
    {
        $this->container['rating_schedule'] = $rating_schedule;

        return $this;
    }

    /**
     * Gets rating_budget
     * @return int
     */
    public function getRatingBudget()
    {
        return $this->container['rating_budget'];
    }

    /**
     * Sets rating_budget
     * @param int $rating_budget
     * @return $this
     */
    public function setRatingBudget($rating_budget)
    {
        $this->container['rating_budget'] = $rating_budget;

        return $this;
    }

    /**
     * Gets rating
     * @return int
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     * @param int $rating
     * @return $this
     */
    public function setRating($rating)
    {
        $this->container['rating'] = $rating;

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


