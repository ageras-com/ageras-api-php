<?php
/**
 * NotificationTriggerResource
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
 * NotificationTriggerResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NotificationTriggerResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'NotificationTriggerResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'partner_user' => '\Ageras\Api\Model\PartnerUserResource',
        'employee' => '\Ageras\Api\Model\EmployeeResource',
        'project_customer' => '\Ageras\Api\Model\ProjectCustomerResource',
        'client' => '\Ageras\Api\Model\ClientResource'
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
        'partner_user' => 'partner_user',
        'employee' => 'employee',
        'project_customer' => 'project_customer',
        'client' => 'client'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'partner_user' => 'setPartnerUser',
        'employee' => 'setEmployee',
        'project_customer' => 'setProjectCustomer',
        'client' => 'setClient'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'partner_user' => 'getPartnerUser',
        'employee' => 'getEmployee',
        'project_customer' => 'getProjectCustomer',
        'client' => 'getClient'
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
    const TYPE_CLIENT = 'client';
    const TYPE_EMPLOYEE = 'employee';
    const TYPE_PARTNER_USER = 'partner_user';
    const TYPE_PROJECT_CUSTOMER = 'project_customer';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_UNKNOWN,
            self::TYPE_CLIENT,
            self::TYPE_EMPLOYEE,
            self::TYPE_PARTNER_USER,
            self::TYPE_PROJECT_CUSTOMER,
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
        $this->container['partner_user'] = isset($data['partner_user']) ? $data['partner_user'] : null;
        $this->container['employee'] = isset($data['employee']) ? $data['employee'] : null;
        $this->container['project_customer'] = isset($data['project_customer']) ? $data['project_customer'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["unknown", "client", "employee", "partner_user", "project_customer"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of 'unknown', 'client', 'employee', 'partner_user', 'project_customer'.";
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

        $allowed_values = ["unknown", "client", "employee", "partner_user", "project_customer"];
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
     * @param string $type Trigger type
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('unknown', 'client', 'employee', 'partner_user', 'project_customer');
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'unknown', 'client', 'employee', 'partner_user', 'project_customer'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets partner_user
     * @return \Ageras\Api\Model\PartnerUserResource
     */
    public function getPartnerUser()
    {
        return $this->container['partner_user'];
    }

    /**
     * Sets partner_user
     * @param \Ageras\Api\Model\PartnerUserResource $partner_user
     * @return $this
     */
    public function setPartnerUser($partner_user)
    {
        $this->container['partner_user'] = $partner_user;

        return $this;
    }

    /**
     * Gets employee
     * @return \Ageras\Api\Model\EmployeeResource
     */
    public function getEmployee()
    {
        return $this->container['employee'];
    }

    /**
     * Sets employee
     * @param \Ageras\Api\Model\EmployeeResource $employee
     * @return $this
     */
    public function setEmployee($employee)
    {
        $this->container['employee'] = $employee;

        return $this;
    }

    /**
     * Gets project_customer
     * @return \Ageras\Api\Model\ProjectCustomerResource
     */
    public function getProjectCustomer()
    {
        return $this->container['project_customer'];
    }

    /**
     * Sets project_customer
     * @param \Ageras\Api\Model\ProjectCustomerResource $project_customer
     * @return $this
     */
    public function setProjectCustomer($project_customer)
    {
        $this->container['project_customer'] = $project_customer;

        return $this;
    }

    /**
     * Gets client
     * @return \Ageras\Api\Model\ClientResource
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     * @param \Ageras\Api\Model\ClientResource $client
     * @return $this
     */
    public function setClient($client)
    {
        $this->container['client'] = $client;

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

