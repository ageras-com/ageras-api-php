<?php
/**
 * SalesOpportunityResource
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
 * SalesOpportunityResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SalesOpportunityResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SalesOpportunityResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'creator_employee_id' => 'int',
        'creator' => '\Ageras\Api\EmployeeResource',
        'partner_id' => 'int',
        'partner' => '\Ageras\Api\PartnerResource',
        'created_at' => 'string',
        'updated_at' => 'string',
        'probability' => 'int',
        'revenue' => '\Ageras\Api\AmountResource',
        'expected_date' => 'string',
        'realized_percentage' => 'int'
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
        'creator_employee_id' => 'creator_employee_id',
        'creator' => 'creator',
        'partner_id' => 'partner_id',
        'partner' => 'partner',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'probability' => 'probability',
        'revenue' => 'revenue',
        'expected_date' => 'expected_date',
        'realized_percentage' => 'realized_percentage'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'creator_employee_id' => 'setCreatorEmployeeId',
        'creator' => 'setCreator',
        'partner_id' => 'setPartnerId',
        'partner' => 'setPartner',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'probability' => 'setProbability',
        'revenue' => 'setRevenue',
        'expected_date' => 'setExpectedDate',
        'realized_percentage' => 'setRealizedPercentage'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'creator_employee_id' => 'getCreatorEmployeeId',
        'creator' => 'getCreator',
        'partner_id' => 'getPartnerId',
        'partner' => 'getPartner',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'probability' => 'getProbability',
        'revenue' => 'getRevenue',
        'expected_date' => 'getExpectedDate',
        'realized_percentage' => 'getRealizedPercentage'
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
        $this->container['creator_employee_id'] = isset($data['creator_employee_id']) ? $data['creator_employee_id'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['partner_id'] = isset($data['partner_id']) ? $data['partner_id'] : null;
        $this->container['partner'] = isset($data['partner']) ? $data['partner'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['probability'] = isset($data['probability']) ? $data['probability'] : null;
        $this->container['revenue'] = isset($data['revenue']) ? $data['revenue'] : null;
        $this->container['expected_date'] = isset($data['expected_date']) ? $data['expected_date'] : null;
        $this->container['realized_percentage'] = isset($data['realized_percentage']) ? $data['realized_percentage'] : null;
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
     * @param int $id Sale pipeline opportunity's ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets creator_employee_id
     * @return int
     */
    public function getCreatorEmployeeId()
    {
        return $this->container['creator_employee_id'];
    }

    /**
     * Sets creator_employee_id
     * @param int $creator_employee_id Sale pipeline opportunity's creator.
     * @return $this
     */
    public function setCreatorEmployeeId($creator_employee_id)
    {
        $this->container['creator_employee_id'] = $creator_employee_id;

        return $this;
    }

    /**
     * Gets creator
     * @return \Ageras\Api\EmployeeResource
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     * @param \Ageras\Api\EmployeeResource $creator
     * @return $this
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

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
     * @param int $partner_id Partner ID.
     * @return $this
     */
    public function setPartnerId($partner_id)
    {
        $this->container['partner_id'] = $partner_id;

        return $this;
    }

    /**
     * Gets partner
     * @return \Ageras\Api\PartnerResource
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     * @param \Ageras\Api\PartnerResource $partner
     * @return $this
     */
    public function setPartner($partner)
    {
        $this->container['partner'] = $partner;

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
     * @param string $created_at Sale pipeline opportunity created at time stamp.
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
     * @param string $updated_at Sale pipeline opportunity last update ime stamp.
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets probability
     * @return int
     */
    public function getProbability()
    {
        return $this->container['probability'];
    }

    /**
     * Sets probability
     * @param int $probability Probability.
     * @return $this
     */
    public function setProbability($probability)
    {
        $this->container['probability'] = $probability;

        return $this;
    }

    /**
     * Gets revenue
     * @return \Ageras\Api\AmountResource
     */
    public function getRevenue()
    {
        return $this->container['revenue'];
    }

    /**
     * Sets revenue
     * @param \Ageras\Api\AmountResource $revenue
     * @return $this
     */
    public function setRevenue($revenue)
    {
        $this->container['revenue'] = $revenue;

        return $this;
    }

    /**
     * Gets expected_date
     * @return string
     */
    public function getExpectedDate()
    {
        return $this->container['expected_date'];
    }

    /**
     * Sets expected_date
     * @param string $expected_date Expected date.
     * @return $this
     */
    public function setExpectedDate($expected_date)
    {
        $this->container['expected_date'] = $expected_date;

        return $this;
    }

    /**
     * Gets realized_percentage
     * @return int
     */
    public function getRealizedPercentage()
    {
        return $this->container['realized_percentage'];
    }

    /**
     * Sets realized_percentage
     * @param int $realized_percentage Realized percentage.
     * @return $this
     */
    public function setRealizedPercentage($realized_percentage)
    {
        $this->container['realized_percentage'] = $realized_percentage;

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


