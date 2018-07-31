<?php
/**
 * LeadQuoteInfoEntryResource
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
 * LeadQuoteInfoEntryResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LeadQuoteInfoEntryResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LeadQuoteInfoEntryResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'status' => 'string',
        'created_at' => 'string',
        'paid_at' => 'string',
        'expires_at' => 'string',
        'published_at' => 'string',
        'partner' => '\Ageras\Api\Model\LeadPartnerResource',
        'partner_lead_offer_id' => 'int',
        'title' => 'string',
        'description' => 'string',
        'items' => '\Ageras\Api\Model\LeadQuoteItemResource[]',
        'payment' => '\Ageras\Api\Model\LeadQuotePaymentResource',
        'total_vat_amount' => '\Ageras\Api\Model\AmountResource',
        'total_amount_excl_vat' => '\Ageras\Api\Model\AmountResource',
        'total_amount_incl_vat' => '\Ageras\Api\Model\AmountResource'
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
        'status' => 'status',
        'created_at' => 'created_at',
        'paid_at' => 'paid_at',
        'expires_at' => 'expires_at',
        'published_at' => 'published_at',
        'partner' => 'partner',
        'partner_lead_offer_id' => 'partner_lead_offer_id',
        'title' => 'title',
        'description' => 'description',
        'items' => 'items',
        'payment' => 'payment',
        'total_vat_amount' => 'total_vat_amount',
        'total_amount_excl_vat' => 'total_amount_excl_vat',
        'total_amount_incl_vat' => 'total_amount_incl_vat'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'created_at' => 'setCreatedAt',
        'paid_at' => 'setPaidAt',
        'expires_at' => 'setExpiresAt',
        'published_at' => 'setPublishedAt',
        'partner' => 'setPartner',
        'partner_lead_offer_id' => 'setPartnerLeadOfferId',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'items' => 'setItems',
        'payment' => 'setPayment',
        'total_vat_amount' => 'setTotalVatAmount',
        'total_amount_excl_vat' => 'setTotalAmountExclVat',
        'total_amount_incl_vat' => 'setTotalAmountInclVat'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'created_at' => 'getCreatedAt',
        'paid_at' => 'getPaidAt',
        'expires_at' => 'getExpiresAt',
        'published_at' => 'getPublishedAt',
        'partner' => 'getPartner',
        'partner_lead_offer_id' => 'getPartnerLeadOfferId',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'items' => 'getItems',
        'payment' => 'getPayment',
        'total_vat_amount' => 'getTotalVatAmount',
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

    const STATUS__NEW = 'new';
    const STATUS_ACCEPTED = 'accepted';
    const STATUS_REJECTED = 'rejected';
    const STATUS_EXPIRED = 'expired';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS__NEW,
            self::STATUS_ACCEPTED,
            self::STATUS_REJECTED,
            self::STATUS_EXPIRED,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : 'new';
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['paid_at'] = isset($data['paid_at']) ? $data['paid_at'] : null;
        $this->container['expires_at'] = isset($data['expires_at']) ? $data['expires_at'] : null;
        $this->container['published_at'] = isset($data['published_at']) ? $data['published_at'] : null;
        $this->container['partner'] = isset($data['partner']) ? $data['partner'] : null;
        $this->container['partner_lead_offer_id'] = isset($data['partner_lead_offer_id']) ? $data['partner_lead_offer_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
        $this->container['total_vat_amount'] = isset($data['total_vat_amount']) ? $data['total_vat_amount'] : null;
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

        $allowed_values = ["new", "accepted", "rejected", "expired"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'new', 'accepted', 'rejected', 'expired'.";
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

        $allowed_values = ["new", "accepted", "rejected", "expired"];
        if (!in_array($this->container['status'], $allowed_values)) {
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
     * @param int $id The quote's id.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('new', 'accepted', 'rejected', 'expired');
        if (!is_null($status) && (!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'new', 'accepted', 'rejected', 'expired'");
        }
        $this->container['status'] = $status;

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
     * @param string $created_at
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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
     * @param string $paid_at
     * @return $this
     */
    public function setPaidAt($paid_at)
    {
        $this->container['paid_at'] = $paid_at;

        return $this;
    }

    /**
     * Gets expires_at
     * @return string
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     * @param string $expires_at
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets published_at
     * @return string
     */
    public function getPublishedAt()
    {
        return $this->container['published_at'];
    }

    /**
     * Sets published_at
     * @param string $published_at
     * @return $this
     */
    public function setPublishedAt($published_at)
    {
        $this->container['published_at'] = $published_at;

        return $this;
    }

    /**
     * Gets partner
     * @return \Ageras\Api\Model\LeadPartnerResource
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     * @param \Ageras\Api\Model\LeadPartnerResource $partner
     * @return $this
     */
    public function setPartner($partner)
    {
        $this->container['partner'] = $partner;

        return $this;
    }

    /**
     * Gets partner_lead_offer_id
     * @return int
     */
    public function getPartnerLeadOfferId()
    {
        return $this->container['partner_lead_offer_id'];
    }

    /**
     * Sets partner_lead_offer_id
     * @param int $partner_lead_offer_id For the given partner and lead,
     * @return $this
     */
    public function setPartnerLeadOfferId($partner_lead_offer_id)
    {
        $this->container['partner_lead_offer_id'] = $partner_lead_offer_id;

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
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets items
     * @return \Ageras\Api\Model\LeadQuoteItemResource[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     * @param \Ageras\Api\Model\LeadQuoteItemResource[] $items List of quote items.
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets payment
     * @return \Ageras\Api\Model\LeadQuotePaymentResource
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     * @param \Ageras\Api\Model\LeadQuotePaymentResource $payment
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets total_vat_amount
     * @return \Ageras\Api\Model\AmountResource
     */
    public function getTotalVatAmount()
    {
        return $this->container['total_vat_amount'];
    }

    /**
     * Sets total_vat_amount
     * @param \Ageras\Api\Model\AmountResource $total_vat_amount
     * @return $this
     */
    public function setTotalVatAmount($total_vat_amount)
    {
        $this->container['total_vat_amount'] = $total_vat_amount;

        return $this;
    }

    /**
     * Gets total_amount_excl_vat
     * @return \Ageras\Api\Model\AmountResource
     */
    public function getTotalAmountExclVat()
    {
        return $this->container['total_amount_excl_vat'];
    }

    /**
     * Sets total_amount_excl_vat
     * @param \Ageras\Api\Model\AmountResource $total_amount_excl_vat
     * @return $this
     */
    public function setTotalAmountExclVat($total_amount_excl_vat)
    {
        $this->container['total_amount_excl_vat'] = $total_amount_excl_vat;

        return $this;
    }

    /**
     * Gets total_amount_incl_vat
     * @return \Ageras\Api\Model\AmountResource
     */
    public function getTotalAmountInclVat()
    {
        return $this->container['total_amount_incl_vat'];
    }

    /**
     * Sets total_amount_incl_vat
     * @param \Ageras\Api\Model\AmountResource $total_amount_incl_vat
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


