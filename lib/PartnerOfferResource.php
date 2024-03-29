<?php
/**
 * PartnerOfferResource
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
 * PartnerOfferResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PartnerOfferResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PartnerOfferResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'accepted_at' => 'string',
        'expires_at' => 'string',
        'deprecated_at' => 'string',
        'type' => 'string',
        'sale_type' => 'string',
        'name' => 'string',
        'punches' => 'int',
        'due_days' => 'int',
        'price' => '\Ageras\Api\AmountResource',
        'avg_punch_price' => '\Ageras\Api\AmountResource',
        'status' => 'string',
        'employee' => '\Ageras\Api\EmployeeResource',
        'is_activated' => 'bool'
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
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'accepted_at' => 'accepted_at',
        'expires_at' => 'expires_at',
        'deprecated_at' => 'deprecated_at',
        'type' => 'type',
        'sale_type' => 'sale_type',
        'name' => 'name',
        'punches' => 'punches',
        'due_days' => 'due_days',
        'price' => 'price',
        'avg_punch_price' => 'avg_punch_price',
        'status' => 'status',
        'employee' => 'employee',
        'is_activated' => 'is_activated'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'accepted_at' => 'setAcceptedAt',
        'expires_at' => 'setExpiresAt',
        'deprecated_at' => 'setDeprecatedAt',
        'type' => 'setType',
        'sale_type' => 'setSaleType',
        'name' => 'setName',
        'punches' => 'setPunches',
        'due_days' => 'setDueDays',
        'price' => 'setPrice',
        'avg_punch_price' => 'setAvgPunchPrice',
        'status' => 'setStatus',
        'employee' => 'setEmployee',
        'is_activated' => 'setIsActivated'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'accepted_at' => 'getAcceptedAt',
        'expires_at' => 'getExpiresAt',
        'deprecated_at' => 'getDeprecatedAt',
        'type' => 'getType',
        'sale_type' => 'getSaleType',
        'name' => 'getName',
        'punches' => 'getPunches',
        'due_days' => 'getDueDays',
        'price' => 'getPrice',
        'avg_punch_price' => 'getAvgPunchPrice',
        'status' => 'getStatus',
        'employee' => 'getEmployee',
        'is_activated' => 'getIsActivated'
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

    const TYPE_CANVAS = 'canvas';
    const TYPE_DEMO = 'demo';
    const TYPE_PARTNER = 'partner';
    const TYPE_STANDARD = 'standard';
    const STATUS_NEW = 'new';
    const STATUS_EXPIRED = 'expired';
    const STATUS_ACCEPTED = 'accepted';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CANVAS,
            self::TYPE_DEMO,
            self::TYPE_PARTNER,
            self::TYPE_STANDARD,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NEW,
            self::STATUS_EXPIRED,
            self::STATUS_ACCEPTED,
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
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['accepted_at'] = isset($data['accepted_at']) ? $data['accepted_at'] : null;
        $this->container['expires_at'] = isset($data['expires_at']) ? $data['expires_at'] : null;
        $this->container['deprecated_at'] = isset($data['deprecated_at']) ? $data['deprecated_at'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'partner';
        $this->container['sale_type'] = isset($data['sale_type']) ? $data['sale_type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['punches'] = isset($data['punches']) ? $data['punches'] : null;
        $this->container['due_days'] = isset($data['due_days']) ? $data['due_days'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['avg_punch_price'] = isset($data['avg_punch_price']) ? $data['avg_punch_price'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : 'new';
        $this->container['employee'] = isset($data['employee']) ? $data['employee'] : null;
        $this->container['is_activated'] = isset($data['is_activated']) ? $data['is_activated'] : false;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["canvas", "demo", "partner", "standard"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of 'canvas', 'demo', 'partner', 'standard'.";
        }

        $allowed_values = ["new", "expired", "accepted"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'new', 'expired', 'accepted'.";
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

        $allowed_values = ["canvas", "demo", "partner", "standard"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["new", "expired", "accepted"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Offer ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $created_at Offer created at date.
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
     * @param string $updated_at Offer updated at date.
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets accepted_at
     * @return string
     */
    public function getAcceptedAt()
    {
        return $this->container['accepted_at'];
    }

    /**
     * Sets accepted_at
     * @param string $accepted_at Offer accepted at date.
     * @return $this
     */
    public function setAcceptedAt($accepted_at)
    {
        $this->container['accepted_at'] = $accepted_at;

        return $this;
    }

    /**
     * Gets expires_at
     * @return string
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     * @param string $expires_at Offer expired at date.
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets deprecated_at
     * @return string
     */
    public function getDeprecatedAt()
    {
        return $this->container['deprecated_at'];
    }

    /**
     * Sets deprecated_at
     * @param string $deprecated_at Offer deprecated/grandfathered at.
     * @return $this
     */
    public function setDeprecatedAt($deprecated_at)
    {
        $this->container['deprecated_at'] = $deprecated_at;

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
     * @param string $type Offer type.
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('canvas', 'demo', 'partner', 'standard');
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'canvas', 'demo', 'partner', 'standard'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets sale_type
     * @return string
     */
    public function getSaleType()
    {
        return $this->container['sale_type'];
    }

    /**
     * Sets sale_type
     * @param string $sale_type Sale type.
     * @return $this
     */
    public function setSaleType($sale_type)
    {
        $this->container['sale_type'] = $sale_type;

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
     * @param string $name Name.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets punches
     * @return int
     */
    public function getPunches()
    {
        return $this->container['punches'];
    }

    /**
     * Sets punches
     * @param int $punches Offer number of punches.
     * @return $this
     */
    public function setPunches($punches)
    {
        $this->container['punches'] = $punches;

        return $this;
    }

    /**
     * Gets due_days
     * @return int
     */
    public function getDueDays()
    {
        return $this->container['due_days'];
    }

    /**
     * Sets due_days
     * @param int $due_days Number of days from offer accept to payment is due.
     * @return $this
     */
    public function setDueDays($due_days)
    {
        $this->container['due_days'] = $due_days;

        return $this;
    }

    /**
     * Gets price
     * @return \Ageras\Api\AmountResource
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param \Ageras\Api\AmountResource $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets avg_punch_price
     * @return \Ageras\Api\AmountResource
     */
    public function getAvgPunchPrice()
    {
        return $this->container['avg_punch_price'];
    }

    /**
     * Sets avg_punch_price
     * @param \Ageras\Api\AmountResource $avg_punch_price
     * @return $this
     */
    public function setAvgPunchPrice($avg_punch_price)
    {
        $this->container['avg_punch_price'] = $avg_punch_price;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status.
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('new', 'expired', 'accepted');
        if (!is_null($status) && (!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'new', 'expired', 'accepted'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets employee
     * @return \Ageras\Api\EmployeeResource
     */
    public function getEmployee()
    {
        return $this->container['employee'];
    }

    /**
     * Sets employee
     * @param \Ageras\Api\EmployeeResource $employee
     * @return $this
     */
    public function setEmployee($employee)
    {
        $this->container['employee'] = $employee;

        return $this;
    }

    /**
     * Gets is_activated
     * @return bool
     */
    public function getIsActivated()
    {
        return $this->container['is_activated'];
    }

    /**
     * Sets is_activated
     * @param bool $is_activated Is offer activated.
     * @return $this
     */
    public function setIsActivated($is_activated)
    {
        $this->container['is_activated'] = $is_activated;

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


