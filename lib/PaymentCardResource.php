<?php
/**
 * PaymentCardResource
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
 * PaymentCardResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentCardResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentCardResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'owner' => '\Ageras\Api\PaymentCardOwnerResource',
        'provider' => '\Ageras\Api\PaymentProviderResource',
        'card_name' => 'string',
        'card_type' => 'string',
        'card_mask' => 'string',
        'expiration' => '\Ageras\Api\PaymentCardExpirationResource',
        'is_being_used' => 'bool',
        'data' => '\Ageras\Api\PaymentCardDataResource'
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
        'owner' => 'owner',
        'provider' => 'provider',
        'card_name' => 'card_name',
        'card_type' => 'card_type',
        'card_mask' => 'card_mask',
        'expiration' => 'expiration',
        'is_being_used' => 'is_being_used',
        'data' => 'data'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'owner' => 'setOwner',
        'provider' => 'setProvider',
        'card_name' => 'setCardName',
        'card_type' => 'setCardType',
        'card_mask' => 'setCardMask',
        'expiration' => 'setExpiration',
        'is_being_used' => 'setIsBeingUsed',
        'data' => 'setData'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'owner' => 'getOwner',
        'provider' => 'getProvider',
        'card_name' => 'getCardName',
        'card_type' => 'getCardType',
        'card_mask' => 'getCardMask',
        'expiration' => 'getExpiration',
        'is_being_used' => 'getIsBeingUsed',
        'data' => 'getData'
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
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['card_name'] = isset($data['card_name']) ? $data['card_name'] : null;
        $this->container['card_type'] = isset($data['card_type']) ? $data['card_type'] : null;
        $this->container['card_mask'] = isset($data['card_mask']) ? $data['card_mask'] : null;
        $this->container['expiration'] = isset($data['expiration']) ? $data['expiration'] : null;
        $this->container['is_being_used'] = isset($data['is_being_used']) ? $data['is_being_used'] : false;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
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
     * @param int $id User Id.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets owner
     * @return \Ageras\Api\PaymentCardOwnerResource
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     * @param \Ageras\Api\PaymentCardOwnerResource $owner
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets provider
     * @return \Ageras\Api\PaymentProviderResource
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     * @param \Ageras\Api\PaymentProviderResource $provider
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets card_name
     * @return string
     */
    public function getCardName()
    {
        return $this->container['card_name'];
    }

    /**
     * Sets card_name
     * @param string $card_name Card name.
     * @return $this
     */
    public function setCardName($card_name)
    {
        $this->container['card_name'] = $card_name;

        return $this;
    }

    /**
     * Gets card_type
     * @return string
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     * @param string $card_type Type of card
     * @return $this
     */
    public function setCardType($card_type)
    {
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets card_mask
     * @return string
     */
    public function getCardMask()
    {
        return $this->container['card_mask'];
    }

    /**
     * Sets card_mask
     * @param string $card_mask Card mask.
     * @return $this
     */
    public function setCardMask($card_mask)
    {
        $this->container['card_mask'] = $card_mask;

        return $this;
    }

    /**
     * Gets expiration
     * @return \Ageras\Api\PaymentCardExpirationResource
     */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration
     * @param \Ageras\Api\PaymentCardExpirationResource $expiration
     * @return $this
     */
    public function setExpiration($expiration)
    {
        $this->container['expiration'] = $expiration;

        return $this;
    }

    /**
     * Gets is_being_used
     * @return bool
     */
    public function getIsBeingUsed()
    {
        return $this->container['is_being_used'];
    }

    /**
     * Sets is_being_used
     * @param bool $is_being_used Is payment card is being used in any package.
     * @return $this
     */
    public function setIsBeingUsed($is_being_used)
    {
        $this->container['is_being_used'] = $is_being_used;

        return $this;
    }

    /**
     * Gets data
     * @return \Ageras\Api\PaymentCardDataResource
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     * @param \Ageras\Api\PaymentCardDataResource $data
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

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


