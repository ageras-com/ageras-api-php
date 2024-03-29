<?php
/**
 * LeadQuoteResource
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
 * LeadQuoteResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LeadQuoteResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LeadQuoteResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'status' => 'string',
        'progress' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'accepted_at' => 'string',
        'rejected_at' => 'string',
        'paid_at' => 'string',
        'expires_at' => 'string',
        'published_at' => 'string',
        'lead_id' => 'int',
        'lead' => '\Ageras\Api\ProjectLeadResource',
        'partner' => '\Ageras\Api\PartnerSuggestResource',
        'partner_lead_offer_id' => 'int',
        'partner_terms' => 'string',
        'title' => 'string',
        'description' => 'string',
        'items' => '\Ageras\Api\LeadQuoteItemResource[]',
        'loans' => '\Ageras\Api\LeadQuoteLoanResource[]',
        'payment' => '\Ageras\Api\LeadQuotePaymentResource',
        'total_vat_amount' => '\Ageras\Api\AmountResource',
        'total_amount_excl_vat' => '\Ageras\Api\AmountResource',
        'total_amount_incl_vat' => '\Ageras\Api\AmountResource',
        'client' => '\Ageras\Api\LeadClientResource',
        'service_fee' => '\Ageras\Api\AmountResource',
        'reservation_expires_at' => 'string',
        'refusal_expires_at' => 'string',
        'can_be_refused' => 'bool',
        'revenue_share_amount_excl_vat' => '\Ageras\Api\AmountResource',
        'revenue_share_subsequent_years_amount_excl_vat' => '\Ageras\Api\AmountResource',
        'is_below_minimum_amount' => 'bool',
        'accepted_by_actioner' => '\Ageras\Api\ActionerResource',
        'lead_products' => '\Ageras\Api\LeadProductResource[]',
        'quote_fee_amount_excl_vat' => '\Ageras\Api\AmountResource'
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
        'progress' => 'progress',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'accepted_at' => 'accepted_at',
        'rejected_at' => 'rejected_at',
        'paid_at' => 'paid_at',
        'expires_at' => 'expires_at',
        'published_at' => 'published_at',
        'lead_id' => 'lead_id',
        'lead' => 'lead',
        'partner' => 'partner',
        'partner_lead_offer_id' => 'partner_lead_offer_id',
        'partner_terms' => 'partner_terms',
        'title' => 'title',
        'description' => 'description',
        'items' => 'items',
        'loans' => 'loans',
        'payment' => 'payment',
        'total_vat_amount' => 'total_vat_amount',
        'total_amount_excl_vat' => 'total_amount_excl_vat',
        'total_amount_incl_vat' => 'total_amount_incl_vat',
        'client' => 'client',
        'service_fee' => 'service_fee',
        'reservation_expires_at' => 'reservation_expires_at',
        'refusal_expires_at' => 'refusal_expires_at',
        'can_be_refused' => 'can_be_refused',
        'revenue_share_amount_excl_vat' => 'revenue_share_amount_excl_vat',
        'revenue_share_subsequent_years_amount_excl_vat' => 'revenue_share_subsequent_years_amount_excl_vat',
        'is_below_minimum_amount' => 'is_below_minimum_amount',
        'accepted_by_actioner' => 'accepted_by_actioner',
        'lead_products' => 'lead_products',
        'quote_fee_amount_excl_vat' => 'quote_fee_amount_excl_vat'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'progress' => 'setProgress',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'accepted_at' => 'setAcceptedAt',
        'rejected_at' => 'setRejectedAt',
        'paid_at' => 'setPaidAt',
        'expires_at' => 'setExpiresAt',
        'published_at' => 'setPublishedAt',
        'lead_id' => 'setLeadId',
        'lead' => 'setLead',
        'partner' => 'setPartner',
        'partner_lead_offer_id' => 'setPartnerLeadOfferId',
        'partner_terms' => 'setPartnerTerms',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'items' => 'setItems',
        'loans' => 'setLoans',
        'payment' => 'setPayment',
        'total_vat_amount' => 'setTotalVatAmount',
        'total_amount_excl_vat' => 'setTotalAmountExclVat',
        'total_amount_incl_vat' => 'setTotalAmountInclVat',
        'client' => 'setClient',
        'service_fee' => 'setServiceFee',
        'reservation_expires_at' => 'setReservationExpiresAt',
        'refusal_expires_at' => 'setRefusalExpiresAt',
        'can_be_refused' => 'setCanBeRefused',
        'revenue_share_amount_excl_vat' => 'setRevenueShareAmountExclVat',
        'revenue_share_subsequent_years_amount_excl_vat' => 'setRevenueShareSubsequentYearsAmountExclVat',
        'is_below_minimum_amount' => 'setIsBelowMinimumAmount',
        'accepted_by_actioner' => 'setAcceptedByActioner',
        'lead_products' => 'setLeadProducts',
        'quote_fee_amount_excl_vat' => 'setQuoteFeeAmountExclVat'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'progress' => 'getProgress',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'accepted_at' => 'getAcceptedAt',
        'rejected_at' => 'getRejectedAt',
        'paid_at' => 'getPaidAt',
        'expires_at' => 'getExpiresAt',
        'published_at' => 'getPublishedAt',
        'lead_id' => 'getLeadId',
        'lead' => 'getLead',
        'partner' => 'getPartner',
        'partner_lead_offer_id' => 'getPartnerLeadOfferId',
        'partner_terms' => 'getPartnerTerms',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'items' => 'getItems',
        'loans' => 'getLoans',
        'payment' => 'getPayment',
        'total_vat_amount' => 'getTotalVatAmount',
        'total_amount_excl_vat' => 'getTotalAmountExclVat',
        'total_amount_incl_vat' => 'getTotalAmountInclVat',
        'client' => 'getClient',
        'service_fee' => 'getServiceFee',
        'reservation_expires_at' => 'getReservationExpiresAt',
        'refusal_expires_at' => 'getRefusalExpiresAt',
        'can_be_refused' => 'getCanBeRefused',
        'revenue_share_amount_excl_vat' => 'getRevenueShareAmountExclVat',
        'revenue_share_subsequent_years_amount_excl_vat' => 'getRevenueShareSubsequentYearsAmountExclVat',
        'is_below_minimum_amount' => 'getIsBelowMinimumAmount',
        'accepted_by_actioner' => 'getAcceptedByActioner',
        'lead_products' => 'getLeadProducts',
        'quote_fee_amount_excl_vat' => 'getQuoteFeeAmountExclVat'
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

    const STATUS_NEW = 'new';
    const STATUS_ACCEPTED = 'accepted';
    const STATUS_REJECTED = 'rejected';
    const STATUS_EXPIRED = 'expired';
    const STATUS_CLOSED = 'closed';
    const PROGRESS_UNKNOWN = 'unknown';
    const PROGRESS_QUOTE_PROVIDED = 'quote_provided';
    const PROGRESS_BID_ROUND_CLOSED = 'bid_round_closed';
    const PROGRESS_PENDING_DECISION = 'pending_decision';
    const PROGRESS_WON = 'won';
    const PROGRESS_LOST = 'lost';
    const PROGRESS_DRAFT = 'draft';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NEW,
            self::STATUS_ACCEPTED,
            self::STATUS_REJECTED,
            self::STATUS_EXPIRED,
            self::STATUS_CLOSED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getProgressAllowableValues()
    {
        return [
            self::PROGRESS_UNKNOWN,
            self::PROGRESS_QUOTE_PROVIDED,
            self::PROGRESS_BID_ROUND_CLOSED,
            self::PROGRESS_PENDING_DECISION,
            self::PROGRESS_WON,
            self::PROGRESS_LOST,
            self::PROGRESS_DRAFT,
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
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : 'unknown';
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['accepted_at'] = isset($data['accepted_at']) ? $data['accepted_at'] : null;
        $this->container['rejected_at'] = isset($data['rejected_at']) ? $data['rejected_at'] : null;
        $this->container['paid_at'] = isset($data['paid_at']) ? $data['paid_at'] : null;
        $this->container['expires_at'] = isset($data['expires_at']) ? $data['expires_at'] : null;
        $this->container['published_at'] = isset($data['published_at']) ? $data['published_at'] : null;
        $this->container['lead_id'] = isset($data['lead_id']) ? $data['lead_id'] : null;
        $this->container['lead'] = isset($data['lead']) ? $data['lead'] : null;
        $this->container['partner'] = isset($data['partner']) ? $data['partner'] : null;
        $this->container['partner_lead_offer_id'] = isset($data['partner_lead_offer_id']) ? $data['partner_lead_offer_id'] : null;
        $this->container['partner_terms'] = isset($data['partner_terms']) ? $data['partner_terms'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['loans'] = isset($data['loans']) ? $data['loans'] : null;
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
        $this->container['total_vat_amount'] = isset($data['total_vat_amount']) ? $data['total_vat_amount'] : null;
        $this->container['total_amount_excl_vat'] = isset($data['total_amount_excl_vat']) ? $data['total_amount_excl_vat'] : null;
        $this->container['total_amount_incl_vat'] = isset($data['total_amount_incl_vat']) ? $data['total_amount_incl_vat'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['service_fee'] = isset($data['service_fee']) ? $data['service_fee'] : null;
        $this->container['reservation_expires_at'] = isset($data['reservation_expires_at']) ? $data['reservation_expires_at'] : null;
        $this->container['refusal_expires_at'] = isset($data['refusal_expires_at']) ? $data['refusal_expires_at'] : null;
        $this->container['can_be_refused'] = isset($data['can_be_refused']) ? $data['can_be_refused'] : false;
        $this->container['revenue_share_amount_excl_vat'] = isset($data['revenue_share_amount_excl_vat']) ? $data['revenue_share_amount_excl_vat'] : null;
        $this->container['revenue_share_subsequent_years_amount_excl_vat'] = isset($data['revenue_share_subsequent_years_amount_excl_vat']) ? $data['revenue_share_subsequent_years_amount_excl_vat'] : null;
        $this->container['is_below_minimum_amount'] = isset($data['is_below_minimum_amount']) ? $data['is_below_minimum_amount'] : false;
        $this->container['accepted_by_actioner'] = isset($data['accepted_by_actioner']) ? $data['accepted_by_actioner'] : null;
        $this->container['lead_products'] = isset($data['lead_products']) ? $data['lead_products'] : null;
        $this->container['quote_fee_amount_excl_vat'] = isset($data['quote_fee_amount_excl_vat']) ? $data['quote_fee_amount_excl_vat'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["new", "accepted", "rejected", "expired", "closed"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'new', 'accepted', 'rejected', 'expired', 'closed'.";
        }

        $allowed_values = ["unknown", "quote_provided", "bid_round_closed", "pending_decision", "won", "lost", "draft"];
        if (!in_array($this->container['progress'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'progress', must be one of 'unknown', 'quote_provided', 'bid_round_closed', 'pending_decision', 'won', 'lost', 'draft'.";
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

        $allowed_values = ["new", "accepted", "rejected", "expired", "closed"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["unknown", "quote_provided", "bid_round_closed", "pending_decision", "won", "lost", "draft"];
        if (!in_array($this->container['progress'], $allowed_values)) {
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
     * @param string $status Quote status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('new', 'accepted', 'rejected', 'expired', 'closed');
        if (!is_null($status) && (!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'new', 'accepted', 'rejected', 'expired', 'closed'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets progress
     * @return string
     */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
     * Sets progress
     * @param string $progress Description of progress from partner's perspective.
     * @return $this
     */
    public function setProgress($progress)
    {
        $allowed_values = array('unknown', 'quote_provided', 'bid_round_closed', 'pending_decision', 'won', 'lost', 'draft');
        if (!is_null($progress) && (!in_array($progress, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'progress', must be one of 'unknown', 'quote_provided', 'bid_round_closed', 'pending_decision', 'won', 'lost', 'draft'");
        }
        $this->container['progress'] = $progress;

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
     * @param string $created_at Created time
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
     * @param string $updated_at When the quote was updated
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
     * @param string $accepted_at Quote accepted at
     * @return $this
     */
    public function setAcceptedAt($accepted_at)
    {
        $this->container['accepted_at'] = $accepted_at;

        return $this;
    }

    /**
     * Gets rejected_at
     * @return string
     */
    public function getRejectedAt()
    {
        return $this->container['rejected_at'];
    }

    /**
     * Sets rejected_at
     * @param string $rejected_at Quote rejected at
     * @return $this
     */
    public function setRejectedAt($rejected_at)
    {
        $this->container['rejected_at'] = $rejected_at;

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
     * @param string $paid_at Created time
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
     * @param string $expires_at Created time
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
     * @param string $published_at Created time
     * @return $this
     */
    public function setPublishedAt($published_at)
    {
        $this->container['published_at'] = $published_at;

        return $this;
    }

    /**
     * Gets lead_id
     * @return int
     */
    public function getLeadId()
    {
        return $this->container['lead_id'];
    }

    /**
     * Sets lead_id
     * @param int $lead_id Lead Id
     * @return $this
     */
    public function setLeadId($lead_id)
    {
        $this->container['lead_id'] = $lead_id;

        return $this;
    }

    /**
     * Gets lead
     * @return \Ageras\Api\ProjectLeadResource
     */
    public function getLead()
    {
        return $this->container['lead'];
    }

    /**
     * Sets lead
     * @param \Ageras\Api\ProjectLeadResource $lead
     * @return $this
     */
    public function setLead($lead)
    {
        $this->container['lead'] = $lead;

        return $this;
    }

    /**
     * Gets partner
     * @return \Ageras\Api\PartnerSuggestResource
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     * @param \Ageras\Api\PartnerSuggestResource $partner
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
     * Gets partner_terms
     * @return string
     */
    public function getPartnerTerms()
    {
        return $this->container['partner_terms'];
    }

    /**
     * Sets partner_terms
     * @param string $partner_terms Partners terms for the given quote
     * @return $this
     */
    public function setPartnerTerms($partner_terms)
    {
        $this->container['partner_terms'] = $partner_terms;

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
     * @return \Ageras\Api\LeadQuoteItemResource[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     * @param \Ageras\Api\LeadQuoteItemResource[] $items Quote Items
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets loans
     * @return \Ageras\Api\LeadQuoteLoanResource[]
     */
    public function getLoans()
    {
        return $this->container['loans'];
    }

    /**
     * Sets loans
     * @param \Ageras\Api\LeadQuoteLoanResource[] $loans Quote loans
     * @return $this
     */
    public function setLoans($loans)
    {
        $this->container['loans'] = $loans;

        return $this;
    }

    /**
     * Gets payment
     * @return \Ageras\Api\LeadQuotePaymentResource
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     * @param \Ageras\Api\LeadQuotePaymentResource $payment
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets total_vat_amount
     * @return \Ageras\Api\AmountResource
     */
    public function getTotalVatAmount()
    {
        return $this->container['total_vat_amount'];
    }

    /**
     * Sets total_vat_amount
     * @param \Ageras\Api\AmountResource $total_vat_amount
     * @return $this
     */
    public function setTotalVatAmount($total_vat_amount)
    {
        $this->container['total_vat_amount'] = $total_vat_amount;

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
     * Gets client
     * @return \Ageras\Api\LeadClientResource
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     * @param \Ageras\Api\LeadClientResource $client
     * @return $this
     */
    public function setClient($client)
    {
        $this->container['client'] = $client;

        return $this;
    }

    /**
     * Gets service_fee
     * @return \Ageras\Api\AmountResource
     */
    public function getServiceFee()
    {
        return $this->container['service_fee'];
    }

    /**
     * Sets service_fee
     * @param \Ageras\Api\AmountResource $service_fee
     * @return $this
     */
    public function setServiceFee($service_fee)
    {
        $this->container['service_fee'] = $service_fee;

        return $this;
    }

    /**
     * Gets reservation_expires_at
     * @return string
     */
    public function getReservationExpiresAt()
    {
        return $this->container['reservation_expires_at'];
    }

    /**
     * Sets reservation_expires_at
     * @param string $reservation_expires_at Reservation time expiry date
     * @return $this
     */
    public function setReservationExpiresAt($reservation_expires_at)
    {
        $this->container['reservation_expires_at'] = $reservation_expires_at;

        return $this;
    }

    /**
     * Gets refusal_expires_at
     * @return string
     */
    public function getRefusalExpiresAt()
    {
        return $this->container['refusal_expires_at'];
    }

    /**
     * Sets refusal_expires_at
     * @param string $refusal_expires_at Refusal time expiry date
     * @return $this
     */
    public function setRefusalExpiresAt($refusal_expires_at)
    {
        $this->container['refusal_expires_at'] = $refusal_expires_at;

        return $this;
    }

    /**
     * Gets can_be_refused
     * @return bool
     */
    public function getCanBeRefused()
    {
        return $this->container['can_be_refused'];
    }

    /**
     * Sets can_be_refused
     * @param bool $can_be_refused Define if quote can be refused
     * @return $this
     */
    public function setCanBeRefused($can_be_refused)
    {
        $this->container['can_be_refused'] = $can_be_refused;

        return $this;
    }

    /**
     * Gets revenue_share_amount_excl_vat
     * @return \Ageras\Api\AmountResource
     */
    public function getRevenueShareAmountExclVat()
    {
        return $this->container['revenue_share_amount_excl_vat'];
    }

    /**
     * Sets revenue_share_amount_excl_vat
     * @param \Ageras\Api\AmountResource $revenue_share_amount_excl_vat
     * @return $this
     */
    public function setRevenueShareAmountExclVat($revenue_share_amount_excl_vat)
    {
        $this->container['revenue_share_amount_excl_vat'] = $revenue_share_amount_excl_vat;

        return $this;
    }

    /**
     * Gets revenue_share_subsequent_years_amount_excl_vat
     * @return \Ageras\Api\AmountResource
     */
    public function getRevenueShareSubsequentYearsAmountExclVat()
    {
        return $this->container['revenue_share_subsequent_years_amount_excl_vat'];
    }

    /**
     * Sets revenue_share_subsequent_years_amount_excl_vat
     * @param \Ageras\Api\AmountResource $revenue_share_subsequent_years_amount_excl_vat
     * @return $this
     */
    public function setRevenueShareSubsequentYearsAmountExclVat($revenue_share_subsequent_years_amount_excl_vat)
    {
        $this->container['revenue_share_subsequent_years_amount_excl_vat'] = $revenue_share_subsequent_years_amount_excl_vat;

        return $this;
    }

    /**
     * Gets is_below_minimum_amount
     * @return bool
     */
    public function getIsBelowMinimumAmount()
    {
        return $this->container['is_below_minimum_amount'];
    }

    /**
     * Sets is_below_minimum_amount
     * @param bool $is_below_minimum_amount If the total quote amount is below the minimum quote amount specified on the lead
     * @return $this
     */
    public function setIsBelowMinimumAmount($is_below_minimum_amount)
    {
        $this->container['is_below_minimum_amount'] = $is_below_minimum_amount;

        return $this;
    }

    /**
     * Gets accepted_by_actioner
     * @return \Ageras\Api\ActionerResource
     */
    public function getAcceptedByActioner()
    {
        return $this->container['accepted_by_actioner'];
    }

    /**
     * Sets accepted_by_actioner
     * @param \Ageras\Api\ActionerResource $accepted_by_actioner
     * @return $this
     */
    public function setAcceptedByActioner($accepted_by_actioner)
    {
        $this->container['accepted_by_actioner'] = $accepted_by_actioner;

        return $this;
    }

    /**
     * Gets lead_products
     * @return \Ageras\Api\LeadProductResource[]
     */
    public function getLeadProducts()
    {
        return $this->container['lead_products'];
    }

    /**
     * Sets lead_products
     * @param \Ageras\Api\LeadProductResource[] $lead_products List of lead products.
     * @return $this
     */
    public function setLeadProducts($lead_products)
    {
        $this->container['lead_products'] = $lead_products;

        return $this;
    }

    /**
     * Gets quote_fee_amount_excl_vat
     * @return \Ageras\Api\AmountResource
     */
    public function getQuoteFeeAmountExclVat()
    {
        return $this->container['quote_fee_amount_excl_vat'];
    }

    /**
     * Sets quote_fee_amount_excl_vat
     * @param \Ageras\Api\AmountResource $quote_fee_amount_excl_vat
     * @return $this
     */
    public function setQuoteFeeAmountExclVat($quote_fee_amount_excl_vat)
    {
        $this->container['quote_fee_amount_excl_vat'] = $quote_fee_amount_excl_vat;

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


