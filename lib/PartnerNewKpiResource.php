<?php
/**
 * PartnerNewKpiResource
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
 * PartnerNewKpiResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PartnerNewKpiResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PartnerNewKpiResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'success_ratio' => 'float',
        'publishing_ratio' => 'float',
        'deallocations' => 'int',
        'active_contracts_count' => 'float',
        'active_allocation_pauses_count' => 'int',
        'overdue_invoice_amount_incl_vat' => '\Ageras\Api\AmountResource'
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
        'success_ratio' => 'success_ratio',
        'publishing_ratio' => 'publishing_ratio',
        'deallocations' => 'deallocations',
        'active_contracts_count' => 'active_contracts_count',
        'active_allocation_pauses_count' => 'active_allocation_pauses_count',
        'overdue_invoice_amount_incl_vat' => 'overdue_invoice_amount_incl_vat'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'success_ratio' => 'setSuccessRatio',
        'publishing_ratio' => 'setPublishingRatio',
        'deallocations' => 'setDeallocations',
        'active_contracts_count' => 'setActiveContractsCount',
        'active_allocation_pauses_count' => 'setActiveAllocationPausesCount',
        'overdue_invoice_amount_incl_vat' => 'setOverdueInvoiceAmountInclVat'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'success_ratio' => 'getSuccessRatio',
        'publishing_ratio' => 'getPublishingRatio',
        'deallocations' => 'getDeallocations',
        'active_contracts_count' => 'getActiveContractsCount',
        'active_allocation_pauses_count' => 'getActiveAllocationPausesCount',
        'overdue_invoice_amount_incl_vat' => 'getOverdueInvoiceAmountInclVat'
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
        $this->container['success_ratio'] = isset($data['success_ratio']) ? $data['success_ratio'] : null;
        $this->container['publishing_ratio'] = isset($data['publishing_ratio']) ? $data['publishing_ratio'] : null;
        $this->container['deallocations'] = isset($data['deallocations']) ? $data['deallocations'] : null;
        $this->container['active_contracts_count'] = isset($data['active_contracts_count']) ? $data['active_contracts_count'] : null;
        $this->container['active_allocation_pauses_count'] = isset($data['active_allocation_pauses_count']) ? $data['active_allocation_pauses_count'] : null;
        $this->container['overdue_invoice_amount_incl_vat'] = isset($data['overdue_invoice_amount_incl_vat']) ? $data['overdue_invoice_amount_incl_vat'] : null;
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
     * Gets success_ratio
     * @return float
     */
    public function getSuccessRatio()
    {
        return $this->container['success_ratio'];
    }

    /**
     * Sets success_ratio
     * @param float $success_ratio Success ratio.
     * @return $this
     */
    public function setSuccessRatio($success_ratio)
    {
        $this->container['success_ratio'] = $success_ratio;

        return $this;
    }

    /**
     * Gets publishing_ratio
     * @return float
     */
    public function getPublishingRatio()
    {
        return $this->container['publishing_ratio'];
    }

    /**
     * Sets publishing_ratio
     * @param float $publishing_ratio Publishing ratio.
     * @return $this
     */
    public function setPublishingRatio($publishing_ratio)
    {
        $this->container['publishing_ratio'] = $publishing_ratio;

        return $this;
    }

    /**
     * Gets deallocations
     * @return int
     */
    public function getDeallocations()
    {
        return $this->container['deallocations'];
    }

    /**
     * Sets deallocations
     * @param int $deallocations Count of deallocations.
     * @return $this
     */
    public function setDeallocations($deallocations)
    {
        $this->container['deallocations'] = $deallocations;

        return $this;
    }

    /**
     * Gets active_contracts_count
     * @return float
     */
    public function getActiveContractsCount()
    {
        return $this->container['active_contracts_count'];
    }

    /**
     * Sets active_contracts_count
     * @param float $active_contracts_count Count of active contracts.
     * @return $this
     */
    public function setActiveContractsCount($active_contracts_count)
    {
        $this->container['active_contracts_count'] = $active_contracts_count;

        return $this;
    }

    /**
     * Gets active_allocation_pauses_count
     * @return int
     */
    public function getActiveAllocationPausesCount()
    {
        return $this->container['active_allocation_pauses_count'];
    }

    /**
     * Sets active_allocation_pauses_count
     * @param int $active_allocation_pauses_count Count of active allocation pauses.
     * @return $this
     */
    public function setActiveAllocationPausesCount($active_allocation_pauses_count)
    {
        $this->container['active_allocation_pauses_count'] = $active_allocation_pauses_count;

        return $this;
    }

    /**
     * Gets overdue_invoice_amount_incl_vat
     * @return \Ageras\Api\AmountResource
     */
    public function getOverdueInvoiceAmountInclVat()
    {
        return $this->container['overdue_invoice_amount_incl_vat'];
    }

    /**
     * Sets overdue_invoice_amount_incl_vat
     * @param \Ageras\Api\AmountResource $overdue_invoice_amount_incl_vat
     * @return $this
     */
    public function setOverdueInvoiceAmountInclVat($overdue_invoice_amount_incl_vat)
    {
        $this->container['overdue_invoice_amount_incl_vat'] = $overdue_invoice_amount_incl_vat;

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

