<?php
/**
 * CheckoutConsumerResource
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
 * CheckoutConsumerResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CheckoutConsumerResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CheckoutConsumerResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'partner' => '\Ageras\Api\CheckoutPartnerResource',
        'partner_user' => '\Ageras\Api\CheckoutPartnerUserResource',
        'client' => '\Ageras\Api\CheckoutClientResource',
        'employee' => '\Ageras\Api\CheckoutEmployeeResource'
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
        'type' => 'type',
        'partner' => 'partner',
        'partner_user' => 'partner_user',
        'client' => 'client',
        'employee' => 'employee'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'partner' => 'setPartner',
        'partner_user' => 'setPartnerUser',
        'client' => 'setClient',
        'employee' => 'setEmployee'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'partner' => 'getPartner',
        'partner_user' => 'getPartnerUser',
        'client' => 'getClient',
        'employee' => 'getEmployee'
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
    const TYPE_PARTNER = 'partner';
    const TYPE_PARTNER_USER = 'partner_user';
    const TYPE_EMPLOYEE = 'employee';
    const TYPE_CLIENT = 'client';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_UNKNOWN,
            self::TYPE_PARTNER,
            self::TYPE_PARTNER_USER,
            self::TYPE_EMPLOYEE,
            self::TYPE_CLIENT,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'unknown';
        $this->container['partner'] = isset($data['partner']) ? $data['partner'] : null;
        $this->container['partner_user'] = isset($data['partner_user']) ? $data['partner_user'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['employee'] = isset($data['employee']) ? $data['employee'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["unknown", "partner", "partner_user", "employee", "client"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of 'unknown', 'partner', 'partner_user', 'employee', 'client'.";
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

        $allowed_values = ["unknown", "partner", "partner_user", "employee", "client"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
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
     * @param string $type Type of consumer for the checkout
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('unknown', 'partner', 'partner_user', 'employee', 'client');
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'unknown', 'partner', 'partner_user', 'employee', 'client'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets partner
     * @return \Ageras\Api\CheckoutPartnerResource
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     * @param \Ageras\Api\CheckoutPartnerResource $partner
     * @return $this
     */
    public function setPartner($partner)
    {
        $this->container['partner'] = $partner;

        return $this;
    }

    /**
     * Gets partner_user
     * @return \Ageras\Api\CheckoutPartnerUserResource
     */
    public function getPartnerUser()
    {
        return $this->container['partner_user'];
    }

    /**
     * Sets partner_user
     * @param \Ageras\Api\CheckoutPartnerUserResource $partner_user
     * @return $this
     */
    public function setPartnerUser($partner_user)
    {
        $this->container['partner_user'] = $partner_user;

        return $this;
    }

    /**
     * Gets client
     * @return \Ageras\Api\CheckoutClientResource
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     * @param \Ageras\Api\CheckoutClientResource $client
     * @return $this
     */
    public function setClient($client)
    {
        $this->container['client'] = $client;

        return $this;
    }

    /**
     * Gets employee
     * @return \Ageras\Api\CheckoutEmployeeResource
     */
    public function getEmployee()
    {
        return $this->container['employee'];
    }

    /**
     * Sets employee
     * @param \Ageras\Api\CheckoutEmployeeResource $employee
     * @return $this
     */
    public function setEmployee($employee)
    {
        $this->container['employee'] = $employee;

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


