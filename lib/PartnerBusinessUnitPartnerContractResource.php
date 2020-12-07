<?php
/**
 * PartnerBusinessUnitPartnerContractResource
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
 * PartnerBusinessUnitPartnerContractResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PartnerBusinessUnitPartnerContractResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PartnerBusinessUnitPartnerContractResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'start_at' => 'string',
        'accepted_at' => 'string',
        'canceled_at' => 'string',
        'churn_at' => 'string',
        'binding_period_months' => 'int',
        'billing_frequency_months' => 'int',
        'current_partner_contract_period' => '\Ageras\Api\PartnerBusinessUnitPartnerContractPeriodResource',
        'allocation_pauses' => '\Ageras\Api\DateSpanResource[]',
        'business_unit_mrr' => '\Ageras\Api\AmountResource'
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
        'start_at' => 'start_at',
        'accepted_at' => 'accepted_at',
        'canceled_at' => 'canceled_at',
        'churn_at' => 'churn_at',
        'binding_period_months' => 'binding_period_months',
        'billing_frequency_months' => 'billing_frequency_months',
        'current_partner_contract_period' => 'current_partner_contract_period',
        'allocation_pauses' => 'allocation_pauses',
        'business_unit_mrr' => 'business_unit_mrr'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'start_at' => 'setStartAt',
        'accepted_at' => 'setAcceptedAt',
        'canceled_at' => 'setCanceledAt',
        'churn_at' => 'setChurnAt',
        'binding_period_months' => 'setBindingPeriodMonths',
        'billing_frequency_months' => 'setBillingFrequencyMonths',
        'current_partner_contract_period' => 'setCurrentPartnerContractPeriod',
        'allocation_pauses' => 'setAllocationPauses',
        'business_unit_mrr' => 'setBusinessUnitMrr'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'start_at' => 'getStartAt',
        'accepted_at' => 'getAcceptedAt',
        'canceled_at' => 'getCanceledAt',
        'churn_at' => 'getChurnAt',
        'binding_period_months' => 'getBindingPeriodMonths',
        'billing_frequency_months' => 'getBillingFrequencyMonths',
        'current_partner_contract_period' => 'getCurrentPartnerContractPeriod',
        'allocation_pauses' => 'getAllocationPauses',
        'business_unit_mrr' => 'getBusinessUnitMrr'
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
        $this->container['start_at'] = isset($data['start_at']) ? $data['start_at'] : null;
        $this->container['accepted_at'] = isset($data['accepted_at']) ? $data['accepted_at'] : null;
        $this->container['canceled_at'] = isset($data['canceled_at']) ? $data['canceled_at'] : null;
        $this->container['churn_at'] = isset($data['churn_at']) ? $data['churn_at'] : null;
        $this->container['binding_period_months'] = isset($data['binding_period_months']) ? $data['binding_period_months'] : null;
        $this->container['billing_frequency_months'] = isset($data['billing_frequency_months']) ? $data['billing_frequency_months'] : null;
        $this->container['current_partner_contract_period'] = isset($data['current_partner_contract_period']) ? $data['current_partner_contract_period'] : null;
        $this->container['allocation_pauses'] = isset($data['allocation_pauses']) ? $data['allocation_pauses'] : null;
        $this->container['business_unit_mrr'] = isset($data['business_unit_mrr']) ? $data['business_unit_mrr'] : null;
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
     * @param int $id Primary ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets start_at
     * @return string
     */
    public function getStartAt()
    {
        return $this->container['start_at'];
    }

    /**
     * Sets start_at
     * @param string $start_at When the contract starts.
     * @return $this
     */
    public function setStartAt($start_at)
    {
        $this->container['start_at'] = $start_at;

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
     * @param string $accepted_at When the contract was accepted.
     * @return $this
     */
    public function setAcceptedAt($accepted_at)
    {
        $this->container['accepted_at'] = $accepted_at;

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
     * @param string $canceled_at When the contract was canceled.
     * @return $this
     */
    public function setCanceledAt($canceled_at)
    {
        $this->container['canceled_at'] = $canceled_at;

        return $this;
    }

    /**
     * Gets churn_at
     * @return string
     */
    public function getChurnAt()
    {
        return $this->container['churn_at'];
    }

    /**
     * Sets churn_at
     * @param string $churn_at When the contract churns.
     * @return $this
     */
    public function setChurnAt($churn_at)
    {
        $this->container['churn_at'] = $churn_at;

        return $this;
    }

    /**
     * Gets binding_period_months
     * @return int
     */
    public function getBindingPeriodMonths()
    {
        return $this->container['binding_period_months'];
    }

    /**
     * Sets binding_period_months
     * @param int $binding_period_months How long the contract last for each contract period.
     * @return $this
     */
    public function setBindingPeriodMonths($binding_period_months)
    {
        $this->container['binding_period_months'] = $binding_period_months;

        return $this;
    }

    /**
     * Gets billing_frequency_months
     * @return int
     */
    public function getBillingFrequencyMonths()
    {
        return $this->container['billing_frequency_months'];
    }

    /**
     * Sets billing_frequency_months
     * @param int $billing_frequency_months How many months the partner pays for at a time.
     * @return $this
     */
    public function setBillingFrequencyMonths($billing_frequency_months)
    {
        $this->container['billing_frequency_months'] = $billing_frequency_months;

        return $this;
    }

    /**
     * Gets current_partner_contract_period
     * @return \Ageras\Api\PartnerBusinessUnitPartnerContractPeriodResource
     */
    public function getCurrentPartnerContractPeriod()
    {
        return $this->container['current_partner_contract_period'];
    }

    /**
     * Sets current_partner_contract_period
     * @param \Ageras\Api\PartnerBusinessUnitPartnerContractPeriodResource $current_partner_contract_period
     * @return $this
     */
    public function setCurrentPartnerContractPeriod($current_partner_contract_period)
    {
        $this->container['current_partner_contract_period'] = $current_partner_contract_period;

        return $this;
    }

    /**
     * Gets allocation_pauses
     * @return \Ageras\Api\DateSpanResource[]
     */
    public function getAllocationPauses()
    {
        return $this->container['allocation_pauses'];
    }

    /**
     * Sets allocation_pauses
     * @param \Ageras\Api\DateSpanResource[] $allocation_pauses List of allocation pauses.
     * @return $this
     */
    public function setAllocationPauses($allocation_pauses)
    {
        $this->container['allocation_pauses'] = $allocation_pauses;

        return $this;
    }

    /**
     * Gets business_unit_mrr
     * @return \Ageras\Api\AmountResource
     */
    public function getBusinessUnitMrr()
    {
        return $this->container['business_unit_mrr'];
    }

    /**
     * Sets business_unit_mrr
     * @param \Ageras\Api\AmountResource $business_unit_mrr
     * @return $this
     */
    public function setBusinessUnitMrr($business_unit_mrr)
    {
        $this->container['business_unit_mrr'] = $business_unit_mrr;

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


