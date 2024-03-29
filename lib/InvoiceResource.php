<?php
/**
 * InvoiceResource
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
 * InvoiceResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InvoiceResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'parent_id' => 'int',
        'status' => 'string',
        'invoice_number' => 'int',
        'type' => 'string',
        'geo_code' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'due_at' => 'string',
        'credited_at' => 'string',
        'paid_at' => 'string',
        'employee_id' => 'int',
        'amounts' => 'string',
        'partner_id' => 'int',
        'partner_data' => 'string',
        'on_behalf_of_employee_id' => 'int',
        'address' => 'string',
        'city_name' => 'string',
        'code' => 'string',
        'zip_code' => 'string',
        'invoice_lines' => '\Ageras\Api\InvoiceLineResource[]',
        'dunning_1' => 'string',
        'dunning_2' => 'string',
        'dunning_3' => 'string',
        'dunning_4' => 'string',
        'dunning_5' => 'string',
        'dunning_6' => 'string'
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
        'parent_id' => 'parent_id',
        'status' => 'status',
        'invoice_number' => 'invoice_number',
        'type' => 'type',
        'geo_code' => 'geo_code',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'due_at' => 'due_at',
        'credited_at' => 'credited_at',
        'paid_at' => 'paid_at',
        'employee_id' => 'employee_id',
        'amounts' => 'amounts',
        'partner_id' => 'partner_id',
        'partner_data' => 'partner_data',
        'on_behalf_of_employee_id' => 'on_behalf_of_employee_id',
        'address' => 'address',
        'city_name' => 'city_name',
        'code' => 'code',
        'zip_code' => 'zip_code',
        'invoice_lines' => 'invoice_lines',
        'dunning_1' => 'dunning_1',
        'dunning_2' => 'dunning_2',
        'dunning_3' => 'dunning_3',
        'dunning_4' => 'dunning_4',
        'dunning_5' => 'dunning_5',
        'dunning_6' => 'dunning_6'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'parent_id' => 'setParentId',
        'status' => 'setStatus',
        'invoice_number' => 'setInvoiceNumber',
        'type' => 'setType',
        'geo_code' => 'setGeoCode',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'due_at' => 'setDueAt',
        'credited_at' => 'setCreditedAt',
        'paid_at' => 'setPaidAt',
        'employee_id' => 'setEmployeeId',
        'amounts' => 'setAmounts',
        'partner_id' => 'setPartnerId',
        'partner_data' => 'setPartnerData',
        'on_behalf_of_employee_id' => 'setOnBehalfOfEmployeeId',
        'address' => 'setAddress',
        'city_name' => 'setCityName',
        'code' => 'setCode',
        'zip_code' => 'setZipCode',
        'invoice_lines' => 'setInvoiceLines',
        'dunning_1' => 'setDunning1',
        'dunning_2' => 'setDunning2',
        'dunning_3' => 'setDunning3',
        'dunning_4' => 'setDunning4',
        'dunning_5' => 'setDunning5',
        'dunning_6' => 'setDunning6'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'parent_id' => 'getParentId',
        'status' => 'getStatus',
        'invoice_number' => 'getInvoiceNumber',
        'type' => 'getType',
        'geo_code' => 'getGeoCode',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'due_at' => 'getDueAt',
        'credited_at' => 'getCreditedAt',
        'paid_at' => 'getPaidAt',
        'employee_id' => 'getEmployeeId',
        'amounts' => 'getAmounts',
        'partner_id' => 'getPartnerId',
        'partner_data' => 'getPartnerData',
        'on_behalf_of_employee_id' => 'getOnBehalfOfEmployeeId',
        'address' => 'getAddress',
        'city_name' => 'getCityName',
        'code' => 'getCode',
        'zip_code' => 'getZipCode',
        'invoice_lines' => 'getInvoiceLines',
        'dunning_1' => 'getDunning1',
        'dunning_2' => 'getDunning2',
        'dunning_3' => 'getDunning3',
        'dunning_4' => 'getDunning4',
        'dunning_5' => 'getDunning5',
        'dunning_6' => 'getDunning6'
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
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['geo_code'] = isset($data['geo_code']) ? $data['geo_code'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['due_at'] = isset($data['due_at']) ? $data['due_at'] : null;
        $this->container['credited_at'] = isset($data['credited_at']) ? $data['credited_at'] : null;
        $this->container['paid_at'] = isset($data['paid_at']) ? $data['paid_at'] : null;
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['amounts'] = isset($data['amounts']) ? $data['amounts'] : null;
        $this->container['partner_id'] = isset($data['partner_id']) ? $data['partner_id'] : null;
        $this->container['partner_data'] = isset($data['partner_data']) ? $data['partner_data'] : null;
        $this->container['on_behalf_of_employee_id'] = isset($data['on_behalf_of_employee_id']) ? $data['on_behalf_of_employee_id'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['city_name'] = isset($data['city_name']) ? $data['city_name'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['zip_code'] = isset($data['zip_code']) ? $data['zip_code'] : null;
        $this->container['invoice_lines'] = isset($data['invoice_lines']) ? $data['invoice_lines'] : null;
        $this->container['dunning_1'] = isset($data['dunning_1']) ? $data['dunning_1'] : null;
        $this->container['dunning_2'] = isset($data['dunning_2']) ? $data['dunning_2'] : null;
        $this->container['dunning_3'] = isset($data['dunning_3']) ? $data['dunning_3'] : null;
        $this->container['dunning_4'] = isset($data['dunning_4']) ? $data['dunning_4'] : null;
        $this->container['dunning_5'] = isset($data['dunning_5']) ? $data['dunning_5'] : null;
        $this->container['dunning_6'] = isset($data['dunning_6']) ? $data['dunning_6'] : null;
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
     * @param int $id Invoice ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets parent_id
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     * @param int $parent_id Parent ID.
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

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
     * @param string $status Payment status.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets invoice_number
     * @return int
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     * @param int $invoice_number Invoice number.
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

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
     * @param string $type Invoice type.
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @param string $geo_code geo code for invoice.
     * @return $this
     */
    public function setGeoCode($geo_code)
    {
        $this->container['geo_code'] = $geo_code;

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
     * @param string $created_at Invoice created at date.
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
     * @param string $updated_at Invoice last update.
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets due_at
     * @return string
     */
    public function getDueAt()
    {
        return $this->container['due_at'];
    }

    /**
     * Sets due_at
     * @param string $due_at Invoice due date.
     * @return $this
     */
    public function setDueAt($due_at)
    {
        $this->container['due_at'] = $due_at;

        return $this;
    }

    /**
     * Gets credited_at
     * @return string
     */
    public function getCreditedAt()
    {
        return $this->container['credited_at'];
    }

    /**
     * Sets credited_at
     * @param string $credited_at Invoice has been credited at date.
     * @return $this
     */
    public function setCreditedAt($credited_at)
    {
        $this->container['credited_at'] = $credited_at;

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
     * @param string $paid_at Invoice was paid at date.
     * @return $this
     */
    public function setPaidAt($paid_at)
    {
        $this->container['paid_at'] = $paid_at;

        return $this;
    }

    /**
     * Gets employee_id
     * @return int
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     * @param int $employee_id Invoice created by employee (ID).
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {
        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets amounts
     * @return string
     */
    public function getAmounts()
    {
        return $this->container['amounts'];
    }

    /**
     * Sets amounts
     * @param string $amounts Invoice amount.
     * @return $this
     */
    public function setAmounts($amounts)
    {
        $this->container['amounts'] = $amounts;

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
     * @param int $partner_id Invoice for partner ID.
     * @return $this
     */
    public function setPartnerId($partner_id)
    {
        $this->container['partner_id'] = $partner_id;

        return $this;
    }

    /**
     * Gets partner_data
     * @return string
     */
    public function getPartnerData()
    {
        return $this->container['partner_data'];
    }

    /**
     * Sets partner_data
     * @param string $partner_data Invoice un mutable data.
     * @return $this
     */
    public function setPartnerData($partner_data)
    {
        $this->container['partner_data'] = $partner_data;

        return $this;
    }

    /**
     * Gets on_behalf_of_employee_id
     * @return int
     */
    public function getOnBehalfOfEmployeeId()
    {
        return $this->container['on_behalf_of_employee_id'];
    }

    /**
     * Sets on_behalf_of_employee_id
     * @param int $on_behalf_of_employee_id Invoice was created in behalf of another employee.
     * @return $this
     */
    public function setOnBehalfOfEmployeeId($on_behalf_of_employee_id)
    {
        $this->container['on_behalf_of_employee_id'] = $on_behalf_of_employee_id;

        return $this;
    }

    /**
     * Gets address
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param string $address Billing address.
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets city_name
     * @return string
     */
    public function getCityName()
    {
        return $this->container['city_name'];
    }

    /**
     * Sets city_name
     * @param string $city_name Billing city.
     * @return $this
     */
    public function setCityName($city_name)
    {
        $this->container['city_name'] = $city_name;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code Billing code.
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets zip_code
     * @return string
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     * @param string $zip_code Billing post code.
     * @return $this
     */
    public function setZipCode($zip_code)
    {
        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets invoice_lines
     * @return \Ageras\Api\InvoiceLineResource[]
     */
    public function getInvoiceLines()
    {
        return $this->container['invoice_lines'];
    }

    /**
     * Sets invoice_lines
     * @param \Ageras\Api\InvoiceLineResource[] $invoice_lines Invoice lines.
     * @return $this
     */
    public function setInvoiceLines($invoice_lines)
    {
        $this->container['invoice_lines'] = $invoice_lines;

        return $this;
    }

    /**
     * Gets dunning_1
     * @return string
     */
    public function getDunning1()
    {
        return $this->container['dunning_1'];
    }

    /**
     * Sets dunning_1
     * @param string $dunning_1 Invoice entered in dunning one at.
     * @return $this
     */
    public function setDunning1($dunning_1)
    {
        $this->container['dunning_1'] = $dunning_1;

        return $this;
    }

    /**
     * Gets dunning_2
     * @return string
     */
    public function getDunning2()
    {
        return $this->container['dunning_2'];
    }

    /**
     * Sets dunning_2
     * @param string $dunning_2 Invoice entered in dunning two at.
     * @return $this
     */
    public function setDunning2($dunning_2)
    {
        $this->container['dunning_2'] = $dunning_2;

        return $this;
    }

    /**
     * Gets dunning_3
     * @return string
     */
    public function getDunning3()
    {
        return $this->container['dunning_3'];
    }

    /**
     * Sets dunning_3
     * @param string $dunning_3 Invoice entered in dunning three at.
     * @return $this
     */
    public function setDunning3($dunning_3)
    {
        $this->container['dunning_3'] = $dunning_3;

        return $this;
    }

    /**
     * Gets dunning_4
     * @return string
     */
    public function getDunning4()
    {
        return $this->container['dunning_4'];
    }

    /**
     * Sets dunning_4
     * @param string $dunning_4 Invoice entered in dunning four at.
     * @return $this
     */
    public function setDunning4($dunning_4)
    {
        $this->container['dunning_4'] = $dunning_4;

        return $this;
    }

    /**
     * Gets dunning_5
     * @return string
     */
    public function getDunning5()
    {
        return $this->container['dunning_5'];
    }

    /**
     * Sets dunning_5
     * @param string $dunning_5 Invoice entered in dunning five at.
     * @return $this
     */
    public function setDunning5($dunning_5)
    {
        $this->container['dunning_5'] = $dunning_5;

        return $this;
    }

    /**
     * Gets dunning_6
     * @return string
     */
    public function getDunning6()
    {
        return $this->container['dunning_6'];
    }

    /**
     * Sets dunning_6
     * @param string $dunning_6 Invoice entered in dunning six at.
     * @return $this
     */
    public function setDunning6($dunning_6)
    {
        $this->container['dunning_6'] = $dunning_6;

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


