<?php
/**
 * LeadQuoteItemResource
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
 * LeadQuoteItemResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LeadQuoteItemResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LeadQuoteItemResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'title' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'type' => 'string',
        'lead_product_id' => 'int',
        'lead_product' => '\Ageras\Api\LeadProductResource',
        'is_product' => 'string',
        'quantity' => 'int',
        'amount_vat' => '\Ageras\Api\AmountResource',
        'amount_excl_vat' => '\Ageras\Api\AmountResource',
        'amount_incl_vat' => '\Ageras\Api\AmountResource',
        'total_amount_vat' => '\Ageras\Api\AmountResource',
        'total_amount_excl_vat' => '\Ageras\Api\AmountResource',
        'total_amount_incl_vat' => '\Ageras\Api\AmountResource'
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
        'title' => 'title',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'type' => 'type',
        'lead_product_id' => 'lead_product_id',
        'lead_product' => 'lead_product',
        'is_product' => 'is_product',
        'quantity' => 'quantity',
        'amount_vat' => 'amount_vat',
        'amount_excl_vat' => 'amount_excl_vat',
        'amount_incl_vat' => 'amount_incl_vat',
        'total_amount_vat' => 'total_amount_vat',
        'total_amount_excl_vat' => 'total_amount_excl_vat',
        'total_amount_incl_vat' => 'total_amount_incl_vat'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'type' => 'setType',
        'lead_product_id' => 'setLeadProductId',
        'lead_product' => 'setLeadProduct',
        'is_product' => 'setIsProduct',
        'quantity' => 'setQuantity',
        'amount_vat' => 'setAmountVat',
        'amount_excl_vat' => 'setAmountExclVat',
        'amount_incl_vat' => 'setAmountInclVat',
        'total_amount_vat' => 'setTotalAmountVat',
        'total_amount_excl_vat' => 'setTotalAmountExclVat',
        'total_amount_incl_vat' => 'setTotalAmountInclVat'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'type' => 'getType',
        'lead_product_id' => 'getLeadProductId',
        'lead_product' => 'getLeadProduct',
        'is_product' => 'getIsProduct',
        'quantity' => 'getQuantity',
        'amount_vat' => 'getAmountVat',
        'amount_excl_vat' => 'getAmountExclVat',
        'amount_incl_vat' => 'getAmountInclVat',
        'total_amount_vat' => 'getTotalAmountVat',
        'total_amount_excl_vat' => 'getTotalAmountExclVat',
        'total_amount_incl_vat' => 'getTotalAmountInclVat'
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
    const TYPE_UNIT = 'unit';
    const TYPE_YEARLY = 'yearly';
    const TYPE_QUARTERLY = 'quarterly';
    const TYPE_MONTHLY = 'monthly';
    const TYPE_BIANNUALLY = 'biannually';
    const TYPE_WEEKLY = 'weekly';
    const TYPE_EVERY_SECOND_MONTH = 'every_second_month';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_UNKNOWN,
            self::TYPE_UNIT,
            self::TYPE_YEARLY,
            self::TYPE_QUARTERLY,
            self::TYPE_MONTHLY,
            self::TYPE_BIANNUALLY,
            self::TYPE_WEEKLY,
            self::TYPE_EVERY_SECOND_MONTH,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'unknown';
        $this->container['lead_product_id'] = isset($data['lead_product_id']) ? $data['lead_product_id'] : null;
        $this->container['lead_product'] = isset($data['lead_product']) ? $data['lead_product'] : null;
        $this->container['is_product'] = isset($data['is_product']) ? $data['is_product'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['amount_vat'] = isset($data['amount_vat']) ? $data['amount_vat'] : null;
        $this->container['amount_excl_vat'] = isset($data['amount_excl_vat']) ? $data['amount_excl_vat'] : null;
        $this->container['amount_incl_vat'] = isset($data['amount_incl_vat']) ? $data['amount_incl_vat'] : null;
        $this->container['total_amount_vat'] = isset($data['total_amount_vat']) ? $data['total_amount_vat'] : null;
        $this->container['total_amount_excl_vat'] = isset($data['total_amount_excl_vat']) ? $data['total_amount_excl_vat'] : null;
        $this->container['total_amount_incl_vat'] = isset($data['total_amount_incl_vat']) ? $data['total_amount_incl_vat'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["unknown", "unit", "yearly", "quarterly", "monthly", "biannually", "weekly", "every_second_month"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of 'unknown', 'unit', 'yearly', 'quarterly', 'monthly', 'biannually', 'weekly', 'every_second_month'.";
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

        $allowed_values = ["unknown", "unit", "yearly", "quarterly", "monthly", "biannually", "weekly", "every_second_month"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
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
     * @param int $id Id for the Quote Item
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $title Title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * @param string $created_at When the quote item is created
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
     * @param string $updated_at When the quote item was updated
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
     * @param string $type Type of quote item
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('unknown', 'unit', 'yearly', 'quarterly', 'monthly', 'biannually', 'weekly', 'every_second_month');
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'unknown', 'unit', 'yearly', 'quarterly', 'monthly', 'biannually', 'weekly', 'every_second_month'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets lead_product_id
     * @return int
     */
    public function getLeadProductId()
    {
        return $this->container['lead_product_id'];
    }

    /**
     * Sets lead_product_id
     * @param int $lead_product_id Lead product id of quote item
     * @return $this
     */
    public function setLeadProductId($lead_product_id)
    {
        $this->container['lead_product_id'] = $lead_product_id;

        return $this;
    }

    /**
     * Gets lead_product
     * @return \Ageras\Api\LeadProductResource
     */
    public function getLeadProduct()
    {
        return $this->container['lead_product'];
    }

    /**
     * Sets lead_product
     * @param \Ageras\Api\LeadProductResource $lead_product
     * @return $this
     */
    public function setLeadProduct($lead_product)
    {
        $this->container['lead_product'] = $lead_product;

        return $this;
    }

    /**
     * Gets is_product
     * @return string
     */
    public function getIsProduct()
    {
        return $this->container['is_product'];
    }

    /**
     * Sets is_product
     * @param string $is_product Determine if quote is standard product
     * @return $this
     */
    public function setIsProduct($is_product)
    {
        $this->container['is_product'] = $is_product;

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
     * @param int $quantity Quantity of this item
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
     * Gets total_amount_vat
     * @return \Ageras\Api\AmountResource
     */
    public function getTotalAmountVat()
    {
        return $this->container['total_amount_vat'];
    }

    /**
     * Sets total_amount_vat
     * @param \Ageras\Api\AmountResource $total_amount_vat
     * @return $this
     */
    public function setTotalAmountVat($total_amount_vat)
    {
        $this->container['total_amount_vat'] = $total_amount_vat;

        return $this;
    }

    /**
     * Gets total_amount_excl_vat
     * @return \Ageras\Api\AmountResource
     */
    public function getTotalAmountExclVat()
    {
        return $this->container['total_amount_excl_vat'];
    }

    /**
     * Sets total_amount_excl_vat
     * @param \Ageras\Api\AmountResource $total_amount_excl_vat
     * @return $this
     */
    public function setTotalAmountExclVat($total_amount_excl_vat)
    {
        $this->container['total_amount_excl_vat'] = $total_amount_excl_vat;

        return $this;
    }

    /**
     * Gets total_amount_incl_vat
     * @return \Ageras\Api\AmountResource
     */
    public function getTotalAmountInclVat()
    {
        return $this->container['total_amount_incl_vat'];
    }

    /**
     * Sets total_amount_incl_vat
     * @param \Ageras\Api\AmountResource $total_amount_incl_vat
     * @return $this
     */
    public function setTotalAmountInclVat($total_amount_incl_vat)
    {
        $this->container['total_amount_incl_vat'] = $total_amount_incl_vat;

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


