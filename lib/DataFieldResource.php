<?php
/**
 * DataFieldResource
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
 * DataFieldResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DataFieldResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DataFieldResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'geo' => '\Ageras\Api\DataFieldGeoResource',
        'identifier' => 'string',
        'label' => 'string',
        'type' => 'string',
        'required' => 'bool',
        'priority' => 'int',
        'is_internal' => 'bool',
        'values' => '\Ageras\Api\DataFieldValueResource[]',
        'is_active' => 'bool',
        'created_at' => 'string',
        'updated_at' => 'string',
        'category' => 'string',
        'tag' => 'string',
        'is_multiple' => 'bool'
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
        'geo' => 'geo',
        'identifier' => 'identifier',
        'label' => 'label',
        'type' => 'type',
        'required' => 'required',
        'priority' => 'priority',
        'is_internal' => 'is_internal',
        'values' => 'values',
        'is_active' => 'is_active',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'category' => 'category',
        'tag' => 'tag',
        'is_multiple' => 'is_multiple'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'geo' => 'setGeo',
        'identifier' => 'setIdentifier',
        'label' => 'setLabel',
        'type' => 'setType',
        'required' => 'setRequired',
        'priority' => 'setPriority',
        'is_internal' => 'setIsInternal',
        'values' => 'setValues',
        'is_active' => 'setIsActive',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'category' => 'setCategory',
        'tag' => 'setTag',
        'is_multiple' => 'setIsMultiple'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'geo' => 'getGeo',
        'identifier' => 'getIdentifier',
        'label' => 'getLabel',
        'type' => 'getType',
        'required' => 'getRequired',
        'priority' => 'getPriority',
        'is_internal' => 'getIsInternal',
        'values' => 'getValues',
        'is_active' => 'getIsActive',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'category' => 'getCategory',
        'tag' => 'getTag',
        'is_multiple' => 'getIsMultiple'
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
    const TYPE_TEXT = 'text';
    const TYPE_NUMBER = 'number';
    const TYPE_CHECKBOX = 'checkbox';
    const TYPE_TEXTBOX = 'textbox';
    const TYPE_DROPDOWN = 'dropdown';
    const CATEGORY_UNKNOWN = 'unknown';
    const CATEGORY_PERSONALITY = 'personality';
    const CATEGORY_REQUIREMENT = 'requirement';
    const CATEGORY_VALUE = 'value';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_UNKNOWN,
            self::TYPE_TEXT,
            self::TYPE_NUMBER,
            self::TYPE_CHECKBOX,
            self::TYPE_TEXTBOX,
            self::TYPE_DROPDOWN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_UNKNOWN,
            self::CATEGORY_PERSONALITY,
            self::CATEGORY_REQUIREMENT,
            self::CATEGORY_VALUE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['geo'] = isset($data['geo']) ? $data['geo'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'unknown';
        $this->container['required'] = isset($data['required']) ? $data['required'] : false;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['is_internal'] = isset($data['is_internal']) ? $data['is_internal'] : false;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : false;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : 'unknown';
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['is_multiple'] = isset($data['is_multiple']) ? $data['is_multiple'] : false;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["unknown", "text", "number", "checkbox", "textbox", "dropdown"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of 'unknown', 'text', 'number', 'checkbox', 'textbox', 'dropdown'.";
        }

        $allowed_values = ["unknown", "personality", "requirement", "value"];
        if (!in_array($this->container['category'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'category', must be one of 'unknown', 'personality', 'requirement', 'value'.";
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

        $allowed_values = ["unknown", "text", "number", "checkbox", "textbox", "dropdown"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["unknown", "personality", "requirement", "value"];
        if (!in_array($this->container['category'], $allowed_values)) {
            return false;
        }
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
     * Gets geo
     * @return \Ageras\Api\DataFieldGeoResource
     */
    public function getGeo()
    {
        return $this->container['geo'];
    }

    /**
     * Sets geo
     * @param \Ageras\Api\DataFieldGeoResource $geo
     * @return $this
     */
    public function setGeo($geo)
    {
        $this->container['geo'] = $geo;

        return $this;
    }

    /**
     * Gets identifier
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     * @param string $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets label
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param string $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
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
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('unknown', 'text', 'number', 'checkbox', 'textbox', 'dropdown');
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'unknown', 'text', 'number', 'checkbox', 'textbox', 'dropdown'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets required
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     * @param bool $required
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets priority
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     * @param int $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets is_internal
     * @return bool
     */
    public function getIsInternal()
    {
        return $this->container['is_internal'];
    }

    /**
     * Sets is_internal
     * @param bool $is_internal
     * @return $this
     */
    public function setIsInternal($is_internal)
    {
        $this->container['is_internal'] = $is_internal;

        return $this;
    }

    /**
     * Gets values
     * @return \Ageras\Api\DataFieldValueResource[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     * @param \Ageras\Api\DataFieldValueResource[] $values
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

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
     * @param bool $is_active
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

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
     * @param string $created_at
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
     * @param string $updated_at
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets category
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     * @param string $category
     * @return $this
     */
    public function setCategory($category)
    {
        $allowed_values = array('unknown', 'personality', 'requirement', 'value');
        if (!is_null($category) && (!in_array($category, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'category', must be one of 'unknown', 'personality', 'requirement', 'value'");
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets tag
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     * @param string $tag
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets is_multiple
     * @return bool
     */
    public function getIsMultiple()
    {
        return $this->container['is_multiple'];
    }

    /**
     * Sets is_multiple
     * @param bool $is_multiple
     * @return $this
     */
    public function setIsMultiple($is_multiple)
    {
        $this->container['is_multiple'] = $is_multiple;

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

