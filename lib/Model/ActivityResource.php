<?php
/**
 * ActivityResource
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
 * ActivityResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ActivityResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ActivityResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'created_at' => 'string',
        'geo_code' => 'string',
        'type' => 'string',
        'invoker' => 'string',
        'employee' => '\Ageras\Api\Model\ActivityEmployeeResource',
        'lead' => '\Ageras\Api\Model\ActivityLeadResource',
        'partner' => '\Ageras\Api\Model\ActivityPartnerResource',
        'partneruser' => '\Ageras\Api\Model\ActivityPartnerUserResource',
        'call' => '\Ageras\Api\Model\ActivityCallResource',
        'note' => '\Ageras\Api\Model\ActivityNoteResource',
        'satisfaction' => '\Ageras\Api\Model\ActivitySatisfactionResource',
        'invoice' => '\Ageras\Api\Model\ActivityInvoiceResource',
        'rating' => '\Ageras\Api\Model\ActivityRatingResource',
        'on_behalf_of' => '\Ageras\Api\Model\ActivityBehalfResource',
        'partner_lead_offer' => '\Ageras\Api\Model\ActivityPartnerLeadOfferResource',
        'task' => '\Ageras\Api\Model\ActivityTaskResource',
        'client' => '\Ageras\Api\Model\ActivityClientResource'
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
        'created_at' => 'created_at',
        'geo_code' => 'geo_code',
        'type' => 'type',
        'invoker' => 'invoker',
        'employee' => 'employee',
        'lead' => 'lead',
        'partner' => 'partner',
        'partneruser' => 'partneruser',
        'call' => 'call',
        'note' => 'note',
        'satisfaction' => 'satisfaction',
        'invoice' => 'invoice',
        'rating' => 'rating',
        'on_behalf_of' => 'on_behalf_of',
        'partner_lead_offer' => 'partner_lead_offer',
        'task' => 'task',
        'client' => 'client'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'geo_code' => 'setGeoCode',
        'type' => 'setType',
        'invoker' => 'setInvoker',
        'employee' => 'setEmployee',
        'lead' => 'setLead',
        'partner' => 'setPartner',
        'partneruser' => 'setPartneruser',
        'call' => 'setCall',
        'note' => 'setNote',
        'satisfaction' => 'setSatisfaction',
        'invoice' => 'setInvoice',
        'rating' => 'setRating',
        'on_behalf_of' => 'setOnBehalfOf',
        'partner_lead_offer' => 'setPartnerLeadOffer',
        'task' => 'setTask',
        'client' => 'setClient'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'geo_code' => 'getGeoCode',
        'type' => 'getType',
        'invoker' => 'getInvoker',
        'employee' => 'getEmployee',
        'lead' => 'getLead',
        'partner' => 'getPartner',
        'partneruser' => 'getPartneruser',
        'call' => 'getCall',
        'note' => 'getNote',
        'satisfaction' => 'getSatisfaction',
        'invoice' => 'getInvoice',
        'rating' => 'getRating',
        'on_behalf_of' => 'getOnBehalfOf',
        'partner_lead_offer' => 'getPartnerLeadOffer',
        'task' => 'getTask',
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
    const TYPE_FRONTEND_FIELDS_CREATE = 'frontend_fields_create';
    const TYPE_ORGANISATION_JOBS_CREATE = 'organisation_jobs_create';
    const TYPE_LOCATIONS_CREATE = 'locations_create';
    const TYPE_COUPONS_TRANSACTIONS_CREATE = 'coupons_transactions_create';
    const TYPE_FRONTEND_PAGES_CREATE = 'frontend_pages_create';
    const TYPE_FRONTEND_REDIRECTS_CREATE = 'frontend_redirects_create';
    const TYPE_FRONTEND_RESOURCES_CREATE = 'frontend_resources_create';
    const TYPE_FRONTEND_ROUTING_CREATE = 'frontend_routing_create';
    const TYPE_FRONTEND_SETTINGS_CREATE = 'frontend_settings_create';
    const TYPE_FRONTEND_FIELDS_DELETE = 'frontend_fields_delete';
    const TYPE_ORGANISATION_JOBS_DELETE = 'organisation_jobs_delete';
    const TYPE_LOCATIONS_DELETE = 'locations_delete';
    const TYPE_FRONTEND_PAGES_DELETE = 'frontend_pages_delete';
    const TYPE_PARTNERS_RATINGS_DELETED = 'partners_ratings_deleted';
    const TYPE_FRONTEND_REDIRECTS_DELETE = 'frontend_redirects_delete';
    const TYPE_FRONTEND_RESOURCES_DELETE = 'frontend_resources_delete';
    const TYPE_FRONTEND_ROUTING_DELETE = 'frontend_routing_delete';
    const TYPE_FRONTEND_FIELDS_UPDATE = 'frontend_fields_update';
    const TYPE_ORGANISATION_JOBS_UPDATE = 'organisation_jobs_update';
    const TYPE_LOCATIONS_UPDATE = 'locations_update';
    const TYPE_FRONTEND_PAGES_UPDATE = 'frontend_pages_update';
    const TYPE_PARTNERS_UPDATE = 'partners_update';
    const TYPE_PARTNERS_RATINGS_UPDATE = 'partners_ratings_update';
    const TYPE_FRONTEND_REDIRECTS_UPDATE = 'frontend_redirects_update';
    const TYPE_FRONTEND_RESOURCES_UPDATE = 'frontend_resources_update';
    const TYPE_FRONTEND_ROUTING_UPDATE = 'frontend_routing_update';
    const TYPE_FRONTEND_SETTINGS_UPDATE = 'frontend_settings_update';
    const TYPE_FRONTEND_SNIPPETS_UPDATE = 'frontend_snippets_update';
    const TYPE_INVOICES_CREATE = 'invoices_create';
    const TYPE_PARTNERS_NOTES_CREATE = 'partners_notes_create';
    const TYPE_PHONECALLS_CREATE = 'phonecalls_create';
    const TYPE_PARTNERS_RATINGS_CREATE = 'partners_ratings_create';
    const TYPE_PARTNERS_LEAD_OFFERS_CREATE = 'partners_lead_offers_create';
    const TYPE_TASK_CREATE = 'task_create';
    const TYPE_TASK_ASSIGN = 'task_assign';
    const TYPE_TASK_UPDATE = 'task_update';
    const TYPE_TASK_COMPLETE = 'task_complete';
    const TYPE_LEAD_WON = 'lead_won';
    const TYPE_LEAD_SENT_OUT = 'lead_sent_out';
    const TYPE_LEAD_VALIDATED = 'lead_validated';
    const TYPE_LEAD_NOTE_CREATED = 'lead_note_created';
    const TYPE_LEAD_MARKED_TEST = 'lead_marked_test';
    const TYPE_LEAD_MARKED_DUPLICATE = 'lead_marked_duplicate';
    const TYPE_LEAD_MARKED_SENT_TO_ADVISOR = 'lead_marked_sent_to_advisor';
    const TYPE_LEAD_MARKED_SPAM = 'lead_marked_spam';
    const TYPE_LEAD_MARKED_NOT_SERIOUS = 'lead_marked_not_serious';
    const TYPE_LEAD_REJECT_ALL_QUOTES = 'lead_reject_all_quotes';
    const TYPE_LEAD_MARKED_COMPLETED = 'lead_marked_completed';
    const TYPE_LEAD_NO_ANSWER = 'lead_no_answer';
    const TYPE_LEAD_POSTPONED = 'lead_postponed';
    const TYPE_LEAD_MARKED_UNTREATED = 'lead_marked_untreated';
    const TYPE_LEAD_INFO_UPDATED = 'lead_info_updated';
    const TYPE_PARTNER_REFILL_PREFERENCE_CREATED = 'partner_refill_preference_created';
    const TYPE_PARTNER_LEAD_QUOTE_ACCEPTED = 'partner_lead_quote_accepted';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_UNKNOWN,
            self::TYPE_FRONTEND_FIELDS_CREATE,
            self::TYPE_ORGANISATION_JOBS_CREATE,
            self::TYPE_LOCATIONS_CREATE,
            self::TYPE_COUPONS_TRANSACTIONS_CREATE,
            self::TYPE_FRONTEND_PAGES_CREATE,
            self::TYPE_FRONTEND_REDIRECTS_CREATE,
            self::TYPE_FRONTEND_RESOURCES_CREATE,
            self::TYPE_FRONTEND_ROUTING_CREATE,
            self::TYPE_FRONTEND_SETTINGS_CREATE,
            self::TYPE_FRONTEND_FIELDS_DELETE,
            self::TYPE_ORGANISATION_JOBS_DELETE,
            self::TYPE_LOCATIONS_DELETE,
            self::TYPE_FRONTEND_PAGES_DELETE,
            self::TYPE_PARTNERS_RATINGS_DELETED,
            self::TYPE_FRONTEND_REDIRECTS_DELETE,
            self::TYPE_FRONTEND_RESOURCES_DELETE,
            self::TYPE_FRONTEND_ROUTING_DELETE,
            self::TYPE_FRONTEND_FIELDS_UPDATE,
            self::TYPE_ORGANISATION_JOBS_UPDATE,
            self::TYPE_LOCATIONS_UPDATE,
            self::TYPE_FRONTEND_PAGES_UPDATE,
            self::TYPE_PARTNERS_UPDATE,
            self::TYPE_PARTNERS_RATINGS_UPDATE,
            self::TYPE_FRONTEND_REDIRECTS_UPDATE,
            self::TYPE_FRONTEND_RESOURCES_UPDATE,
            self::TYPE_FRONTEND_ROUTING_UPDATE,
            self::TYPE_FRONTEND_SETTINGS_UPDATE,
            self::TYPE_FRONTEND_SNIPPETS_UPDATE,
            self::TYPE_INVOICES_CREATE,
            self::TYPE_PARTNERS_NOTES_CREATE,
            self::TYPE_PHONECALLS_CREATE,
            self::TYPE_PARTNERS_RATINGS_CREATE,
            self::TYPE_PARTNERS_LEAD_OFFERS_CREATE,
            self::TYPE_TASK_CREATE,
            self::TYPE_TASK_ASSIGN,
            self::TYPE_TASK_UPDATE,
            self::TYPE_TASK_COMPLETE,
            self::TYPE_LEAD_WON,
            self::TYPE_LEAD_SENT_OUT,
            self::TYPE_LEAD_VALIDATED,
            self::TYPE_LEAD_NOTE_CREATED,
            self::TYPE_LEAD_MARKED_TEST,
            self::TYPE_LEAD_MARKED_DUPLICATE,
            self::TYPE_LEAD_MARKED_SENT_TO_ADVISOR,
            self::TYPE_LEAD_MARKED_SPAM,
            self::TYPE_LEAD_MARKED_NOT_SERIOUS,
            self::TYPE_LEAD_REJECT_ALL_QUOTES,
            self::TYPE_LEAD_MARKED_COMPLETED,
            self::TYPE_LEAD_NO_ANSWER,
            self::TYPE_LEAD_POSTPONED,
            self::TYPE_LEAD_MARKED_UNTREATED,
            self::TYPE_LEAD_INFO_UPDATED,
            self::TYPE_PARTNER_REFILL_PREFERENCE_CREATED,
            self::TYPE_PARTNER_LEAD_QUOTE_ACCEPTED,
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
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['geo_code'] = isset($data['geo_code']) ? $data['geo_code'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'unknown';
        $this->container['invoker'] = isset($data['invoker']) ? $data['invoker'] : null;
        $this->container['employee'] = isset($data['employee']) ? $data['employee'] : null;
        $this->container['lead'] = isset($data['lead']) ? $data['lead'] : null;
        $this->container['partner'] = isset($data['partner']) ? $data['partner'] : null;
        $this->container['partneruser'] = isset($data['partneruser']) ? $data['partneruser'] : null;
        $this->container['call'] = isset($data['call']) ? $data['call'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['satisfaction'] = isset($data['satisfaction']) ? $data['satisfaction'] : null;
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['on_behalf_of'] = isset($data['on_behalf_of']) ? $data['on_behalf_of'] : null;
        $this->container['partner_lead_offer'] = isset($data['partner_lead_offer']) ? $data['partner_lead_offer'] : null;
        $this->container['task'] = isset($data['task']) ? $data['task'] : null;
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

        $allowed_values = ["unknown", "frontend_fields_create", "organisation_jobs_create", "locations_create", "coupons_transactions_create", "frontend_pages_create", "frontend_redirects_create", "frontend_resources_create", "frontend_routing_create", "frontend_settings_create", "frontend_fields_delete", "organisation_jobs_delete", "locations_delete", "frontend_pages_delete", "partners_ratings_deleted", "frontend_redirects_delete", "frontend_resources_delete", "frontend_routing_delete", "frontend_fields_update", "organisation_jobs_update", "locations_update", "frontend_pages_update", "partners_update", "partners_ratings_update", "frontend_redirects_update", "frontend_resources_update", "frontend_routing_update", "frontend_settings_update", "frontend_snippets_update", "invoices_create", "partners_notes_create", "phonecalls_create", "partners_ratings_create", "partners_lead_offers_create", "task_create", "task_assign", "task_update", "task_complete", "lead_won", "lead_sent_out", "lead_validated", "lead_note_created", "lead_marked_test", "lead_marked_duplicate", "lead_marked_sent_to_advisor", "lead_marked_spam", "lead_marked_not_serious", "lead_reject_all_quotes", "lead_marked_completed", "lead_no_answer", "lead_postponed", "lead_marked_untreated", "lead_info_updated", "partner_refill_preference_created", "partner_lead_quote_accepted"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of 'unknown', 'frontend_fields_create', 'organisation_jobs_create', 'locations_create', 'coupons_transactions_create', 'frontend_pages_create', 'frontend_redirects_create', 'frontend_resources_create', 'frontend_routing_create', 'frontend_settings_create', 'frontend_fields_delete', 'organisation_jobs_delete', 'locations_delete', 'frontend_pages_delete', 'partners_ratings_deleted', 'frontend_redirects_delete', 'frontend_resources_delete', 'frontend_routing_delete', 'frontend_fields_update', 'organisation_jobs_update', 'locations_update', 'frontend_pages_update', 'partners_update', 'partners_ratings_update', 'frontend_redirects_update', 'frontend_resources_update', 'frontend_routing_update', 'frontend_settings_update', 'frontend_snippets_update', 'invoices_create', 'partners_notes_create', 'phonecalls_create', 'partners_ratings_create', 'partners_lead_offers_create', 'task_create', 'task_assign', 'task_update', 'task_complete', 'lead_won', 'lead_sent_out', 'lead_validated', 'lead_note_created', 'lead_marked_test', 'lead_marked_duplicate', 'lead_marked_sent_to_advisor', 'lead_marked_spam', 'lead_marked_not_serious', 'lead_reject_all_quotes', 'lead_marked_completed', 'lead_no_answer', 'lead_postponed', 'lead_marked_untreated', 'lead_info_updated', 'partner_refill_preference_created', 'partner_lead_quote_accepted'.";
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

        $allowed_values = ["unknown", "frontend_fields_create", "organisation_jobs_create", "locations_create", "coupons_transactions_create", "frontend_pages_create", "frontend_redirects_create", "frontend_resources_create", "frontend_routing_create", "frontend_settings_create", "frontend_fields_delete", "organisation_jobs_delete", "locations_delete", "frontend_pages_delete", "partners_ratings_deleted", "frontend_redirects_delete", "frontend_resources_delete", "frontend_routing_delete", "frontend_fields_update", "organisation_jobs_update", "locations_update", "frontend_pages_update", "partners_update", "partners_ratings_update", "frontend_redirects_update", "frontend_resources_update", "frontend_routing_update", "frontend_settings_update", "frontend_snippets_update", "invoices_create", "partners_notes_create", "phonecalls_create", "partners_ratings_create", "partners_lead_offers_create", "task_create", "task_assign", "task_update", "task_complete", "lead_won", "lead_sent_out", "lead_validated", "lead_note_created", "lead_marked_test", "lead_marked_duplicate", "lead_marked_sent_to_advisor", "lead_marked_spam", "lead_marked_not_serious", "lead_reject_all_quotes", "lead_marked_completed", "lead_no_answer", "lead_postponed", "lead_marked_untreated", "lead_info_updated", "partner_refill_preference_created", "partner_lead_quote_accepted"];
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
     * @param int $id id for activity.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $created_at Date and time of the creation of the activity.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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
     * @param string $geo_code Geo Code for the activity.
     * @return $this
     */
    public function setGeoCode($geo_code)
    {
        $this->container['geo_code'] = $geo_code;

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
     * @param string $type Type of activity.
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('unknown', 'frontend_fields_create', 'organisation_jobs_create', 'locations_create', 'coupons_transactions_create', 'frontend_pages_create', 'frontend_redirects_create', 'frontend_resources_create', 'frontend_routing_create', 'frontend_settings_create', 'frontend_fields_delete', 'organisation_jobs_delete', 'locations_delete', 'frontend_pages_delete', 'partners_ratings_deleted', 'frontend_redirects_delete', 'frontend_resources_delete', 'frontend_routing_delete', 'frontend_fields_update', 'organisation_jobs_update', 'locations_update', 'frontend_pages_update', 'partners_update', 'partners_ratings_update', 'frontend_redirects_update', 'frontend_resources_update', 'frontend_routing_update', 'frontend_settings_update', 'frontend_snippets_update', 'invoices_create', 'partners_notes_create', 'phonecalls_create', 'partners_ratings_create', 'partners_lead_offers_create', 'task_create', 'task_assign', 'task_update', 'task_complete', 'lead_won', 'lead_sent_out', 'lead_validated', 'lead_note_created', 'lead_marked_test', 'lead_marked_duplicate', 'lead_marked_sent_to_advisor', 'lead_marked_spam', 'lead_marked_not_serious', 'lead_reject_all_quotes', 'lead_marked_completed', 'lead_no_answer', 'lead_postponed', 'lead_marked_untreated', 'lead_info_updated', 'partner_refill_preference_created', 'partner_lead_quote_accepted');
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'unknown', 'frontend_fields_create', 'organisation_jobs_create', 'locations_create', 'coupons_transactions_create', 'frontend_pages_create', 'frontend_redirects_create', 'frontend_resources_create', 'frontend_routing_create', 'frontend_settings_create', 'frontend_fields_delete', 'organisation_jobs_delete', 'locations_delete', 'frontend_pages_delete', 'partners_ratings_deleted', 'frontend_redirects_delete', 'frontend_resources_delete', 'frontend_routing_delete', 'frontend_fields_update', 'organisation_jobs_update', 'locations_update', 'frontend_pages_update', 'partners_update', 'partners_ratings_update', 'frontend_redirects_update', 'frontend_resources_update', 'frontend_routing_update', 'frontend_settings_update', 'frontend_snippets_update', 'invoices_create', 'partners_notes_create', 'phonecalls_create', 'partners_ratings_create', 'partners_lead_offers_create', 'task_create', 'task_assign', 'task_update', 'task_complete', 'lead_won', 'lead_sent_out', 'lead_validated', 'lead_note_created', 'lead_marked_test', 'lead_marked_duplicate', 'lead_marked_sent_to_advisor', 'lead_marked_spam', 'lead_marked_not_serious', 'lead_reject_all_quotes', 'lead_marked_completed', 'lead_no_answer', 'lead_postponed', 'lead_marked_untreated', 'lead_info_updated', 'partner_refill_preference_created', 'partner_lead_quote_accepted'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets invoker
     * @return string
     */
    public function getInvoker()
    {
        return $this->container['invoker'];
    }

    /**
     * Sets invoker
     * @param string $invoker Whom did initiate the activity.
     * @return $this
     */
    public function setInvoker($invoker)
    {
        $this->container['invoker'] = $invoker;

        return $this;
    }

    /**
     * Gets employee
     * @return \Ageras\Api\Model\ActivityEmployeeResource
     */
    public function getEmployee()
    {
        return $this->container['employee'];
    }

    /**
     * Sets employee
     * @param \Ageras\Api\Model\ActivityEmployeeResource $employee
     * @return $this
     */
    public function setEmployee($employee)
    {
        $this->container['employee'] = $employee;

        return $this;
    }

    /**
     * Gets lead
     * @return \Ageras\Api\Model\ActivityLeadResource
     */
    public function getLead()
    {
        return $this->container['lead'];
    }

    /**
     * Sets lead
     * @param \Ageras\Api\Model\ActivityLeadResource $lead
     * @return $this
     */
    public function setLead($lead)
    {
        $this->container['lead'] = $lead;

        return $this;
    }

    /**
     * Gets partner
     * @return \Ageras\Api\Model\ActivityPartnerResource
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     * @param \Ageras\Api\Model\ActivityPartnerResource $partner
     * @return $this
     */
    public function setPartner($partner)
    {
        $this->container['partner'] = $partner;

        return $this;
    }

    /**
     * Gets partneruser
     * @return \Ageras\Api\Model\ActivityPartnerUserResource
     */
    public function getPartneruser()
    {
        return $this->container['partneruser'];
    }

    /**
     * Sets partneruser
     * @param \Ageras\Api\Model\ActivityPartnerUserResource $partneruser
     * @return $this
     */
    public function setPartneruser($partneruser)
    {
        $this->container['partneruser'] = $partneruser;

        return $this;
    }

    /**
     * Gets call
     * @return \Ageras\Api\Model\ActivityCallResource
     */
    public function getCall()
    {
        return $this->container['call'];
    }

    /**
     * Sets call
     * @param \Ageras\Api\Model\ActivityCallResource $call
     * @return $this
     */
    public function setCall($call)
    {
        $this->container['call'] = $call;

        return $this;
    }

    /**
     * Gets note
     * @return \Ageras\Api\Model\ActivityNoteResource
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     * @param \Ageras\Api\Model\ActivityNoteResource $note
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets satisfaction
     * @return \Ageras\Api\Model\ActivitySatisfactionResource
     */
    public function getSatisfaction()
    {
        return $this->container['satisfaction'];
    }

    /**
     * Sets satisfaction
     * @param \Ageras\Api\Model\ActivitySatisfactionResource $satisfaction
     * @return $this
     */
    public function setSatisfaction($satisfaction)
    {
        $this->container['satisfaction'] = $satisfaction;

        return $this;
    }

    /**
     * Gets invoice
     * @return \Ageras\Api\Model\ActivityInvoiceResource
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     * @param \Ageras\Api\Model\ActivityInvoiceResource $invoice
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets rating
     * @return \Ageras\Api\Model\ActivityRatingResource
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     * @param \Ageras\Api\Model\ActivityRatingResource $rating
     * @return $this
     */
    public function setRating($rating)
    {
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets on_behalf_of
     * @return \Ageras\Api\Model\ActivityBehalfResource
     */
    public function getOnBehalfOf()
    {
        return $this->container['on_behalf_of'];
    }

    /**
     * Sets on_behalf_of
     * @param \Ageras\Api\Model\ActivityBehalfResource $on_behalf_of
     * @return $this
     */
    public function setOnBehalfOf($on_behalf_of)
    {
        $this->container['on_behalf_of'] = $on_behalf_of;

        return $this;
    }

    /**
     * Gets partner_lead_offer
     * @return \Ageras\Api\Model\ActivityPartnerLeadOfferResource
     */
    public function getPartnerLeadOffer()
    {
        return $this->container['partner_lead_offer'];
    }

    /**
     * Sets partner_lead_offer
     * @param \Ageras\Api\Model\ActivityPartnerLeadOfferResource $partner_lead_offer
     * @return $this
     */
    public function setPartnerLeadOffer($partner_lead_offer)
    {
        $this->container['partner_lead_offer'] = $partner_lead_offer;

        return $this;
    }

    /**
     * Gets task
     * @return \Ageras\Api\Model\ActivityTaskResource
     */
    public function getTask()
    {
        return $this->container['task'];
    }

    /**
     * Sets task
     * @param \Ageras\Api\Model\ActivityTaskResource $task
     * @return $this
     */
    public function setTask($task)
    {
        $this->container['task'] = $task;

        return $this;
    }

    /**
     * Gets client
     * @return \Ageras\Api\Model\ActivityClientResource
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     * @param \Ageras\Api\Model\ActivityClientResource $client
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


