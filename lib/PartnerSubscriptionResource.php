<?php
/**
 * PartnerSubscriptionResource
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
 * PartnerSubscriptionResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PartnerSubscriptionResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PartnerSubscriptionResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'partner_id' => 'int',
        'package_id' => 'int',
        'payment_solution' => '\Ageras\Api\PaymentSolutionResource',
        'monthly_price' => '\Ageras\Api\AmountResource',
        'expires_at' => 'string',
        'canceled_at' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'package_type' => 'string'
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
        'partner_id' => 'partner_id',
        'package_id' => 'package_id',
        'payment_solution' => 'payment_solution',
        'monthly_price' => 'monthly_price',
        'expires_at' => 'expires_at',
        'canceled_at' => 'canceled_at',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'package_type' => 'package_type'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'partner_id' => 'setPartnerId',
        'package_id' => 'setPackageId',
        'payment_solution' => 'setPaymentSolution',
        'monthly_price' => 'setMonthlyPrice',
        'expires_at' => 'setExpiresAt',
        'canceled_at' => 'setCanceledAt',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'package_type' => 'setPackageType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'partner_id' => 'getPartnerId',
        'package_id' => 'getPackageId',
        'payment_solution' => 'getPaymentSolution',
        'monthly_price' => 'getMonthlyPrice',
        'expires_at' => 'getExpiresAt',
        'canceled_at' => 'getCanceledAt',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'package_type' => 'getPackageType'
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
        $this->container['partner_id'] = isset($data['partner_id']) ? $data['partner_id'] : null;
        $this->container['package_id'] = isset($data['package_id']) ? $data['package_id'] : null;
        $this->container['payment_solution'] = isset($data['payment_solution']) ? $data['payment_solution'] : null;
        $this->container['monthly_price'] = isset($data['monthly_price']) ? $data['monthly_price'] : null;
        $this->container['expires_at'] = isset($data['expires_at']) ? $data['expires_at'] : null;
        $this->container['canceled_at'] = isset($data['canceled_at']) ? $data['canceled_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['package_type'] = isset($data['package_type']) ? $data['package_type'] : null;
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
     * @param int $id Subscription id.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets partner_id
     * @return int
     */
    public function getPartnerId()
    {
        return $this->container['partner_id'];
    }

    /**
     * Sets partner_id
     * @param int $partner_id The subscribed partner id.
     * @return $this
     */
    public function setPartnerId($partner_id)
    {
        $this->container['partner_id'] = $partner_id;

        return $this;
    }

    /**
     * Gets package_id
     * @return int
     */
    public function getPackageId()
    {
        return $this->container['package_id'];
    }

    /**
     * Sets package_id
     * @param int $package_id The package subscribed to.
     * @return $this
     */
    public function setPackageId($package_id)
    {
        $this->container['package_id'] = $package_id;

        return $this;
    }

    /**
     * Gets payment_solution
     * @return \Ageras\Api\PaymentSolutionResource
     */
    public function getPaymentSolution()
    {
        return $this->container['payment_solution'];
    }

    /**
     * Sets payment_solution
     * @param \Ageras\Api\PaymentSolutionResource $payment_solution
     * @return $this
     */
    public function setPaymentSolution($payment_solution)
    {
        $this->container['payment_solution'] = $payment_solution;

        return $this;
    }

    /**
     * Gets monthly_price
     * @return \Ageras\Api\AmountResource
     */
    public function getMonthlyPrice()
    {
        return $this->container['monthly_price'];
    }

    /**
     * Sets monthly_price
     * @param \Ageras\Api\AmountResource $monthly_price
     * @return $this
     */
    public function setMonthlyPrice($monthly_price)
    {
        $this->container['monthly_price'] = $monthly_price;

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
     * @param string $expires_at
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets canceled_at
     * @return string
     */
    public function getCanceledAt()
    {
        return $this->container['canceled_at'];
    }

    /**
     * Sets canceled_at
     * @param string $canceled_at
     * @return $this
     */
    public function setCanceledAt($canceled_at)
    {
        $this->container['canceled_at'] = $canceled_at;

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
     * @param string $created_at Package created at time stamp.
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
     * @param string $updated_at Package update at time stamp.
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets package_type
     * @return string
     */
    public function getPackageType()
    {
        return $this->container['package_type'];
    }

    /**
     * Sets package_type
     * @param string $package_type Package type
     * @return $this
     */
    public function setPackageType($package_type)
    {
        $this->container['package_type'] = $package_type;

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


