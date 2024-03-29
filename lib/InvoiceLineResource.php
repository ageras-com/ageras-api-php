<?php
/**
 * InvoiceLineResource
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
 * InvoiceLineResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InvoiceLineResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceLineResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'quantity' => 'int',
        'item_name' => 'string',
        'item_price' => '\Ageras\Api\AmountResource',
        'vat_percent' => 'float',
        'line_total_excluding_vat' => '\Ageras\Api\AmountResource',
        'vat_amount' => 'int'
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
        'quantity' => 'quantity',
        'item_name' => 'item_name',
        'item_price' => 'item_price',
        'vat_percent' => 'vat_percent',
        'line_total_excluding_vat' => 'line_total_excluding_vat',
        'vat_amount' => 'vat_amount'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'quantity' => 'setQuantity',
        'item_name' => 'setItemName',
        'item_price' => 'setItemPrice',
        'vat_percent' => 'setVatPercent',
        'line_total_excluding_vat' => 'setLineTotalExcludingVat',
        'vat_amount' => 'setVatAmount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'quantity' => 'getQuantity',
        'item_name' => 'getItemName',
        'item_price' => 'getItemPrice',
        'vat_percent' => 'getVatPercent',
        'line_total_excluding_vat' => 'getLineTotalExcludingVat',
        'vat_amount' => 'getVatAmount'
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
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['item_name'] = isset($data['item_name']) ? $data['item_name'] : null;
        $this->container['item_price'] = isset($data['item_price']) ? $data['item_price'] : null;
        $this->container['vat_percent'] = isset($data['vat_percent']) ? $data['vat_percent'] : null;
        $this->container['line_total_excluding_vat'] = isset($data['line_total_excluding_vat']) ? $data['line_total_excluding_vat'] : null;
        $this->container['vat_amount'] = isset($data['vat_amount']) ? $data['vat_amount'] : null;
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
     * @param int $id Resource ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity Quantity per price.
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets item_name
     * @return string
     */
    public function getItemName()
    {
        return $this->container['item_name'];
    }

    /**
     * Sets item_name
     * @param string $item_name Name for billable.
     * @return $this
     */
    public function setItemName($item_name)
    {
        $this->container['item_name'] = $item_name;

        return $this;
    }

    /**
     * Gets item_price
     * @return \Ageras\Api\AmountResource
     */
    public function getItemPrice()
    {
        return $this->container['item_price'];
    }

    /**
     * Sets item_price
     * @param \Ageras\Api\AmountResource $item_price
     * @return $this
     */
    public function setItemPrice($item_price)
    {
        $this->container['item_price'] = $item_price;

        return $this;
    }

    /**
     * Gets vat_percent
     * @return float
     */
    public function getVatPercent()
    {
        return $this->container['vat_percent'];
    }

    /**
     * Sets vat_percent
     * @param float $vat_percent Var percentage.
     * @return $this
     */
    public function setVatPercent($vat_percent)
    {
        $this->container['vat_percent'] = $vat_percent;

        return $this;
    }

    /**
     * Gets line_total_excluding_vat
     * @return \Ageras\Api\AmountResource
     */
    public function getLineTotalExcludingVat()
    {
        return $this->container['line_total_excluding_vat'];
    }

    /**
     * Sets line_total_excluding_vat
     * @param \Ageras\Api\AmountResource $line_total_excluding_vat
     * @return $this
     */
    public function setLineTotalExcludingVat($line_total_excluding_vat)
    {
        $this->container['line_total_excluding_vat'] = $line_total_excluding_vat;

        return $this;
    }

    /**
     * Gets vat_amount
     * @return int
     */
    public function getVatAmount()
    {
        return $this->container['vat_amount'];
    }

    /**
     * Sets vat_amount
     * @param int $vat_amount Vat amount.
     * @return $this
     */
    public function setVatAmount($vat_amount)
    {
        $this->container['vat_amount'] = $vat_amount;

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


