<?php
/**
 * OrderInstallmentResource
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
 * OrderInstallmentResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderInstallmentResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OrderInstallmentResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'type' => 'string',
        'name' => 'string',
        'vat' => 'float',
        'amount_vat' => '\Ageras\Api\AmountResource',
        'amount_excl_vat' => '\Ageras\Api\AmountResource',
        'amount_incl_vat' => '\Ageras\Api\AmountResource',
        'payment_solution' => '\Ageras\Api\PaymentMethodResource',
        'payment_provider' => '\Ageras\Api\PaymentProviderResource',
        'payment_card' => '\Ageras\Api\PaymentCardResource',
        'ready_for_payment' => 'bool',
        'paid_at' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string'
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
        'type' => 'type',
        'name' => 'name',
        'vat' => 'vat',
        'amount_vat' => 'amount_vat',
        'amount_excl_vat' => 'amount_excl_vat',
        'amount_incl_vat' => 'amount_incl_vat',
        'payment_solution' => 'payment_solution',
        'payment_provider' => 'payment_provider',
        'payment_card' => 'payment_card',
        'ready_for_payment' => 'ready_for_payment',
        'paid_at' => 'paid_at',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'name' => 'setName',
        'vat' => 'setVat',
        'amount_vat' => 'setAmountVat',
        'amount_excl_vat' => 'setAmountExclVat',
        'amount_incl_vat' => 'setAmountInclVat',
        'payment_solution' => 'setPaymentSolution',
        'payment_provider' => 'setPaymentProvider',
        'payment_card' => 'setPaymentCard',
        'ready_for_payment' => 'setReadyForPayment',
        'paid_at' => 'setPaidAt',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'name' => 'getName',
        'vat' => 'getVat',
        'amount_vat' => 'getAmountVat',
        'amount_excl_vat' => 'getAmountExclVat',
        'amount_incl_vat' => 'getAmountInclVat',
        'payment_solution' => 'getPaymentSolution',
        'payment_provider' => 'getPaymentProvider',
        'payment_card' => 'getPaymentCard',
        'ready_for_payment' => 'getReadyForPayment',
        'paid_at' => 'getPaidAt',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
        $this->container['amount_vat'] = isset($data['amount_vat']) ? $data['amount_vat'] : null;
        $this->container['amount_excl_vat'] = isset($data['amount_excl_vat']) ? $data['amount_excl_vat'] : null;
        $this->container['amount_incl_vat'] = isset($data['amount_incl_vat']) ? $data['amount_incl_vat'] : null;
        $this->container['payment_solution'] = isset($data['payment_solution']) ? $data['payment_solution'] : null;
        $this->container['payment_provider'] = isset($data['payment_provider']) ? $data['payment_provider'] : null;
        $this->container['payment_card'] = isset($data['payment_card']) ? $data['payment_card'] : null;
        $this->container['ready_for_payment'] = isset($data['ready_for_payment']) ? $data['ready_for_payment'] : false;
        $this->container['paid_at'] = isset($data['paid_at']) ? $data['paid_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
        $this->container['type'] = $type;

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
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets vat
     * @return float
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     * @param float $vat
     * @return $this
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets amount_vat
     * @return \Ageras\Api\AmountResource
     */
    public function getAmountVat()
    {
        return $this->container['amount_vat'];
    }

    /**
     * Sets amount_vat
     * @param \Ageras\Api\AmountResource $amount_vat
     * @return $this
     */
    public function setAmountVat($amount_vat)
    {
        $this->container['amount_vat'] = $amount_vat;

        return $this;
    }

    /**
     * Gets amount_excl_vat
     * @return \Ageras\Api\AmountResource
     */
    public function getAmountExclVat()
    {
        return $this->container['amount_excl_vat'];
    }

    /**
     * Sets amount_excl_vat
     * @param \Ageras\Api\AmountResource $amount_excl_vat
     * @return $this
     */
    public function setAmountExclVat($amount_excl_vat)
    {
        $this->container['amount_excl_vat'] = $amount_excl_vat;

        return $this;
    }

    /**
     * Gets amount_incl_vat
     * @return \Ageras\Api\AmountResource
     */
    public function getAmountInclVat()
    {
        return $this->container['amount_incl_vat'];
    }

    /**
     * Sets amount_incl_vat
     * @param \Ageras\Api\AmountResource $amount_incl_vat
     * @return $this
     */
    public function setAmountInclVat($amount_incl_vat)
    {
        $this->container['amount_incl_vat'] = $amount_incl_vat;

        return $this;
    }

    /**
     * Gets payment_solution
     * @return \Ageras\Api\PaymentMethodResource
     */
    public function getPaymentSolution()
    {
        return $this->container['payment_solution'];
    }

    /**
     * Sets payment_solution
     * @param \Ageras\Api\PaymentMethodResource $payment_solution
     * @return $this
     */
    public function setPaymentSolution($payment_solution)
    {
        $this->container['payment_solution'] = $payment_solution;

        return $this;
    }

    /**
     * Gets payment_provider
     * @return \Ageras\Api\PaymentProviderResource
     */
    public function getPaymentProvider()
    {
        return $this->container['payment_provider'];
    }

    /**
     * Sets payment_provider
     * @param \Ageras\Api\PaymentProviderResource $payment_provider
     * @return $this
     */
    public function setPaymentProvider($payment_provider)
    {
        $this->container['payment_provider'] = $payment_provider;

        return $this;
    }

    /**
     * Gets payment_card
     * @return \Ageras\Api\PaymentCardResource
     */
    public function getPaymentCard()
    {
        return $this->container['payment_card'];
    }

    /**
     * Sets payment_card
     * @param \Ageras\Api\PaymentCardResource $payment_card
     * @return $this
     */
    public function setPaymentCard($payment_card)
    {
        $this->container['payment_card'] = $payment_card;

        return $this;
    }

    /**
     * Gets ready_for_payment
     * @return bool
     */
    public function getReadyForPayment()
    {
        return $this->container['ready_for_payment'];
    }

    /**
     * Sets ready_for_payment
     * @param bool $ready_for_payment
     * @return $this
     */
    public function setReadyForPayment($ready_for_payment)
    {
        $this->container['ready_for_payment'] = $ready_for_payment;

        return $this;
    }

    /**
     * Gets paid_at
     * @return string
     */
    public function getPaidAt()
    {
        return $this->container['paid_at'];
    }

    /**
     * Sets paid_at
     * @param string $paid_at
     * @return $this
     */
    public function setPaidAt($paid_at)
    {
        $this->container['paid_at'] = $paid_at;

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


