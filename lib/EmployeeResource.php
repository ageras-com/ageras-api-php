<?php
/**
 * EmployeeResource
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
 * EmployeeResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EmployeeResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'EmployeeResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'sort' => 'string',
        'name' => 'string',
        'title' => 'string',
        'external_job_title' => 'string',
        'geo_code' => 'string',
        'image' => 'string',
        'email' => 'string',
        'phone_work' => 'string',
        'phone_private' => 'string',
        'signature' => '\Ageras\Api\EmployeeSignatureResource',
        'roles' => '\Ageras\Api\EmployeeRoleResource[]',
        'initials' => 'string',
        'is_active' => 'bool'
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
        'sort' => 'sort',
        'name' => 'name',
        'title' => 'title',
        'external_job_title' => 'external_job_title',
        'geo_code' => 'geo_code',
        'image' => 'image',
        'email' => 'email',
        'phone_work' => 'phone_work',
        'phone_private' => 'phone_private',
        'signature' => 'signature',
        'roles' => 'roles',
        'initials' => 'initials',
        'is_active' => 'is_active'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sort' => 'setSort',
        'name' => 'setName',
        'title' => 'setTitle',
        'external_job_title' => 'setExternalJobTitle',
        'geo_code' => 'setGeoCode',
        'image' => 'setImage',
        'email' => 'setEmail',
        'phone_work' => 'setPhoneWork',
        'phone_private' => 'setPhonePrivate',
        'signature' => 'setSignature',
        'roles' => 'setRoles',
        'initials' => 'setInitials',
        'is_active' => 'setIsActive'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sort' => 'getSort',
        'name' => 'getName',
        'title' => 'getTitle',
        'external_job_title' => 'getExternalJobTitle',
        'geo_code' => 'getGeoCode',
        'image' => 'getImage',
        'email' => 'getEmail',
        'phone_work' => 'getPhoneWork',
        'phone_private' => 'getPhonePrivate',
        'signature' => 'getSignature',
        'roles' => 'getRoles',
        'initials' => 'getInitials',
        'is_active' => 'getIsActive'
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
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['external_job_title'] = isset($data['external_job_title']) ? $data['external_job_title'] : null;
        $this->container['geo_code'] = isset($data['geo_code']) ? $data['geo_code'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone_work'] = isset($data['phone_work']) ? $data['phone_work'] : null;
        $this->container['phone_private'] = isset($data['phone_private']) ? $data['phone_private'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
        $this->container['initials'] = isset($data['initials']) ? $data['initials'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : false;
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
     * @param int $id Id for the Employee.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sort
     * @return string
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     * @param string $sort Sort the employee.
     * @return $this
     */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;

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
     * @param string $name Employees name.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $title Title for the employee.
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets external_job_title
     * @return string
     */
    public function getExternalJobTitle()
    {
        return $this->container['external_job_title'];
    }

    /**
     * Sets external_job_title
     * @param string $external_job_title Job title shown to clients and partners.
     * @return $this
     */
    public function setExternalJobTitle($external_job_title)
    {
        $this->container['external_job_title'] = $external_job_title;

        return $this;
    }

    /**
     * Gets geo_code
     * @return string
     */
    public function getGeoCode()
    {
        return $this->container['geo_code'];
    }

    /**
     * Sets geo_code
     * @param string $geo_code Location for the employee.
     * @return $this
     */
    public function setGeoCode($geo_code)
    {
        $this->container['geo_code'] = $geo_code;

        return $this;
    }

    /**
     * Gets image
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     * @param string $image Photo of the employee.
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email Email for the employee.
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone_work
     * @return string
     */
    public function getPhoneWork()
    {
        return $this->container['phone_work'];
    }

    /**
     * Sets phone_work
     * @param string $phone_work Work Phone Number for the employee.
     * @return $this
     */
    public function setPhoneWork($phone_work)
    {
        $this->container['phone_work'] = $phone_work;

        return $this;
    }

    /**
     * Gets phone_private
     * @return string
     */
    public function getPhonePrivate()
    {
        return $this->container['phone_private'];
    }

    /**
     * Sets phone_private
     * @param string $phone_private Private Phone Number for employee.
     * @return $this
     */
    public function setPhonePrivate($phone_private)
    {
        $this->container['phone_private'] = $phone_private;

        return $this;
    }

    /**
     * Gets signature
     * @return \Ageras\Api\EmployeeSignatureResource
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     * @param \Ageras\Api\EmployeeSignatureResource $signature
     * @return $this
     */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets roles
     * @return \Ageras\Api\EmployeeRoleResource[]
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     * @param \Ageras\Api\EmployeeRoleResource[] $roles The list of roles that the employee is member of.
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets initials
     * @return string
     */
    public function getInitials()
    {
        return $this->container['initials'];
    }

    /**
     * Sets initials
     * @param string $initials Employee Initials.
     * @return $this
     */
    public function setInitials($initials)
    {
        $this->container['initials'] = $initials;

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
     * @param bool $is_active Is the Employee active ?
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

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

