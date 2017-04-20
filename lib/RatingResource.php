<?php
/**
 * RatingResource
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
 * RatingResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RatingResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RatingResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'partner' => '\Ageras\Api\PartnerSuggestResource',
        'name' => 'string',
        'score' => '\Ageras\Api\RatingScoreResource',
        'stars' => 'int',
        'reply' => '\Ageras\Api\RatingReplyResource',
        'title' => 'string',
        'comment' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'deleted_at' => 'string',
        'is_approved' => 'bool',
        'is_active' => 'bool',
        'is_validated' => 'bool',
        'is_featured' => 'bool',
        'featured_at' => 'string'
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
        'partner' => 'partner',
        'name' => 'name',
        'score' => 'score',
        'stars' => 'stars',
        'reply' => 'reply',
        'title' => 'title',
        'comment' => 'comment',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'deleted_at' => 'deleted_at',
        'is_approved' => 'is_approved',
        'is_active' => 'is_active',
        'is_validated' => 'is_validated',
        'is_featured' => 'is_featured',
        'featured_at' => 'featured_at'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'partner' => 'setPartner',
        'name' => 'setName',
        'score' => 'setScore',
        'stars' => 'setStars',
        'reply' => 'setReply',
        'title' => 'setTitle',
        'comment' => 'setComment',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'deleted_at' => 'setDeletedAt',
        'is_approved' => 'setIsApproved',
        'is_active' => 'setIsActive',
        'is_validated' => 'setIsValidated',
        'is_featured' => 'setIsFeatured',
        'featured_at' => 'setFeaturedAt'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'partner' => 'getPartner',
        'name' => 'getName',
        'score' => 'getScore',
        'stars' => 'getStars',
        'reply' => 'getReply',
        'title' => 'getTitle',
        'comment' => 'getComment',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'deleted_at' => 'getDeletedAt',
        'is_approved' => 'getIsApproved',
        'is_active' => 'getIsActive',
        'is_validated' => 'getIsValidated',
        'is_featured' => 'getIsFeatured',
        'featured_at' => 'getFeaturedAt'
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
        $this->container['partner'] = isset($data['partner']) ? $data['partner'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['stars'] = isset($data['stars']) ? $data['stars'] : null;
        $this->container['reply'] = isset($data['reply']) ? $data['reply'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['deleted_at'] = isset($data['deleted_at']) ? $data['deleted_at'] : null;
        $this->container['is_approved'] = isset($data['is_approved']) ? $data['is_approved'] : false;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : false;
        $this->container['is_validated'] = isset($data['is_validated']) ? $data['is_validated'] : false;
        $this->container['is_featured'] = isset($data['is_featured']) ? $data['is_featured'] : false;
        $this->container['featured_at'] = isset($data['featured_at']) ? $data['featured_at'] : null;
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
     * @param int $id Review ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets partner
     * @return \Ageras\Api\PartnerSuggestResource
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     * @param \Ageras\Api\PartnerSuggestResource $partner
     * @return $this
     */
    public function setPartner($partner)
    {
        $this->container['partner'] = $partner;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of the person who wrote the review.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets score
     * @return \Ageras\Api\RatingScoreResource
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     * @param \Ageras\Api\RatingScoreResource $score
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets stars
     * @return int
     */
    public function getStars()
    {
        return $this->container['stars'];
    }

    /**
     * Sets stars
     * @param int $stars Stars for the given rating
     * @return $this
     */
    public function setStars($stars)
    {
        $this->container['stars'] = $stars;

        return $this;
    }

    /**
     * Gets reply
     * @return \Ageras\Api\RatingReplyResource
     */
    public function getReply()
    {
        return $this->container['reply'];
    }

    /**
     * Sets reply
     * @param \Ageras\Api\RatingReplyResource $reply
     * @return $this
     */
    public function setReply($reply)
    {
        $this->container['reply'] = $reply;

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
     * @param string $title Title of the review.
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
     * @param string $comment The comment left by the reviewer.
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param string $created_at Time of creation of the rating.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param string $updated_at Time of last update.
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets deleted_at
     * @return string
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     * @param string $deleted_at Time of deletion.
     * @return $this
     */
    public function setDeletedAt($deleted_at)
    {
        $this->container['deleted_at'] = $deleted_at;

        return $this;
    }

    /**
     * Gets is_approved
     * @return bool
     */
    public function getIsApproved()
    {
        return $this->container['is_approved'];
    }

    /**
     * Sets is_approved
     * @param bool $is_approved Is the rating approved?
     * @return $this
     */
    public function setIsApproved($is_approved)
    {
        $this->container['is_approved'] = $is_approved;

        return $this;
    }

    /**
     * Gets is_active
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     * @param bool $is_active Is the rating active?
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets is_validated
     * @return bool
     */
    public function getIsValidated()
    {
        return $this->container['is_validated'];
    }

    /**
     * Sets is_validated
     * @param bool $is_validated Is the rating validated?
     * @return $this
     */
    public function setIsValidated($is_validated)
    {
        $this->container['is_validated'] = $is_validated;

        return $this;
    }

    /**
     * Gets is_featured
     * @return bool
     */
    public function getIsFeatured()
    {
        return $this->container['is_featured'];
    }

    /**
     * Sets is_featured
     * @param bool $is_featured Is the rating featured?
     * @return $this
     */
    public function setIsFeatured($is_featured)
    {
        $this->container['is_featured'] = $is_featured;

        return $this;
    }

    /**
     * Gets featured_at
     * @return string
     */
    public function getFeaturedAt()
    {
        return $this->container['featured_at'];
    }

    /**
     * Sets featured_at
     * @param string $featured_at If the rating is featured, the time the rating was featured.
     * @return $this
     */
    public function setFeaturedAt($featured_at)
    {
        $this->container['featured_at'] = $featured_at;

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


