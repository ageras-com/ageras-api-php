<?php
/**
 * LeadActionResource
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
 * LeadActionResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LeadActionResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LeadActionResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action' => 'string',
        'date' => 'string',
        'quote_id' => 'int',
        'rejection_reasons' => '\Ageras\Api\LeadActionQuoteReasonResource[]',
        'reason' => 'string',
        'reason_completed' => 'string',
        'discard_status' => 'string',
        'discard_status_note' => 'string',
        'client_decision_postponed_reason' => 'string'
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
        'action' => 'action',
        'date' => 'date',
        'quote_id' => 'quote_id',
        'rejection_reasons' => 'rejection_reasons',
        'reason' => 'reason',
        'reason_completed' => 'reason_completed',
        'discard_status' => 'discard_status',
        'discard_status_note' => 'discard_status_note',
        'client_decision_postponed_reason' => 'client_decision_postponed_reason'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'date' => 'setDate',
        'quote_id' => 'setQuoteId',
        'rejection_reasons' => 'setRejectionReasons',
        'reason' => 'setReason',
        'reason_completed' => 'setReasonCompleted',
        'discard_status' => 'setDiscardStatus',
        'discard_status_note' => 'setDiscardStatusNote',
        'client_decision_postponed_reason' => 'setClientDecisionPostponedReason'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'date' => 'getDate',
        'quote_id' => 'getQuoteId',
        'rejection_reasons' => 'getRejectionReasons',
        'reason' => 'getReason',
        'reason_completed' => 'getReasonCompleted',
        'discard_status' => 'getDiscardStatus',
        'discard_status_note' => 'getDiscardStatusNote',
        'client_decision_postponed_reason' => 'getClientDecisionPostponedReason'
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

    const ACTION_UNKNOWN = 'unknown';
    const ACTION_CALL = 'call';
    const ACTION_NO_ANSWER = 'no_answer';
    const ACTION_ACCEPT_QUOTE = 'accept_quote';
    const ACTION_PUBLISH_QUOTE = 'publish_quote';
    const ACTION_REJECT_ALL_QUOTES = 'reject_all_quotes';
    const ACTION_UNREJECT_ALL_QUOTES = 'unreject_all_quotes';
    const ACTION_POSTPONE_CLIENT_MATCH_DECISION = 'postpone_client_match_decision';
    const ACTION_MARK_AS_COMPLETED = 'mark_as_completed';
    const ACTION_UNMATCH = 'unmatch';
    const ACTION_RECORD_REJECTION_REASONS = 'record_rejection_reasons';
    const ACTION_DISCARD = 'discard';
    const ACTION_VALIDATE = 'validate';
    const ACTION_INVOKE_RIGHT_TO_BE_FORGOTTEN = 'invoke_right_to_be_forgotten';
    const ACTION_GIVEN_UP = 'given_up';
    const ACTION_NOTE = 'note';
    const REASON_UNKNOWN = 'unknown';
    const REASON_DUPLICATE = 'duplicate';
    const REASON_TEST = 'test';
    const REASON_NOT_SERIOUS = 'not_serious';
    const REASON_SEND_TO_ADVISOR = 'send_to_advisor';
    const REASON_SPAM = 'spam';
    const REASON_VALIDATED = 'validated';
    const REASON_UNTREATED = 'untreated';
    const REASON_COMPLETED_UNKNOWN = 'unknown';
    const REASON_COMPLETED_NO_RELEVANT_PARTNERS_EXPERTISE = 'no_relevant_partners_expertise';
    const REASON_COMPLETED_NO_RELEVANT_PARTNERS_GEOGRAPHY = 'no_relevant_partners_geography';
    const REASON_COMPLETED_CLIENT_BUDGET = 'client_budget';
    const REASON_COMPLETED_CLIENT_NOT_SERIOUS = 'client_not_serious';
    const REASON_COMPLETED_CLIENT_SATISFIED = 'client_satisfied';
    const REASON_COMPLETED_CLIENT_CASE_TOO_SMALL = 'client_case_too_small';
    const DISCARD_STATUS_UNKNOWN = 'unknown';
    const DISCARD_STATUS_DUPLICATE = 'duplicate';
    const DISCARD_STATUS_TEST = 'test';
    const DISCARD_STATUS_NOT_SERIOUS = 'not_serious';
    const DISCARD_STATUS_SEND_TO_ADVISOR = 'send_to_advisor';
    const DISCARD_STATUS_SPAM = 'spam';
    const DISCARD_STATUS_UNTREATED = 'untreated';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_UNKNOWN,
            self::ACTION_CALL,
            self::ACTION_NO_ANSWER,
            self::ACTION_ACCEPT_QUOTE,
            self::ACTION_PUBLISH_QUOTE,
            self::ACTION_REJECT_ALL_QUOTES,
            self::ACTION_UNREJECT_ALL_QUOTES,
            self::ACTION_POSTPONE_CLIENT_MATCH_DECISION,
            self::ACTION_MARK_AS_COMPLETED,
            self::ACTION_UNMATCH,
            self::ACTION_RECORD_REJECTION_REASONS,
            self::ACTION_DISCARD,
            self::ACTION_VALIDATE,
            self::ACTION_INVOKE_RIGHT_TO_BE_FORGOTTEN,
            self::ACTION_GIVEN_UP,
            self::ACTION_NOTE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_UNKNOWN,
            self::REASON_DUPLICATE,
            self::REASON_TEST,
            self::REASON_NOT_SERIOUS,
            self::REASON_SEND_TO_ADVISOR,
            self::REASON_SPAM,
            self::REASON_VALIDATED,
            self::REASON_UNTREATED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getReasonCompletedAllowableValues()
    {
        return [
            self::REASON_COMPLETED_UNKNOWN,
            self::REASON_COMPLETED_NO_RELEVANT_PARTNERS_EXPERTISE,
            self::REASON_COMPLETED_NO_RELEVANT_PARTNERS_GEOGRAPHY,
            self::REASON_COMPLETED_CLIENT_BUDGET,
            self::REASON_COMPLETED_CLIENT_NOT_SERIOUS,
            self::REASON_COMPLETED_CLIENT_SATISFIED,
            self::REASON_COMPLETED_CLIENT_CASE_TOO_SMALL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDiscardStatusAllowableValues()
    {
        return [
            self::DISCARD_STATUS_UNKNOWN,
            self::DISCARD_STATUS_DUPLICATE,
            self::DISCARD_STATUS_TEST,
            self::DISCARD_STATUS_NOT_SERIOUS,
            self::DISCARD_STATUS_SEND_TO_ADVISOR,
            self::DISCARD_STATUS_SPAM,
            self::DISCARD_STATUS_UNTREATED,
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : 'unknown';
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['quote_id'] = isset($data['quote_id']) ? $data['quote_id'] : null;
        $this->container['rejection_reasons'] = isset($data['rejection_reasons']) ? $data['rejection_reasons'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : 'unknown';
        $this->container['reason_completed'] = isset($data['reason_completed']) ? $data['reason_completed'] : 'unknown';
        $this->container['discard_status'] = isset($data['discard_status']) ? $data['discard_status'] : 'unknown';
        $this->container['discard_status_note'] = isset($data['discard_status_note']) ? $data['discard_status_note'] : null;
        $this->container['client_decision_postponed_reason'] = isset($data['client_decision_postponed_reason']) ? $data['client_decision_postponed_reason'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["unknown", "call", "no_answer", "accept_quote", "publish_quote", "reject_all_quotes", "unreject_all_quotes", "postpone_client_match_decision", "mark_as_completed", "unmatch", "record_rejection_reasons", "discard", "validate", "invoke_right_to_be_forgotten", "given_up", "note"];
        if (!in_array($this->container['action'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'action', must be one of 'unknown', 'call', 'no_answer', 'accept_quote', 'publish_quote', 'reject_all_quotes', 'unreject_all_quotes', 'postpone_client_match_decision', 'mark_as_completed', 'unmatch', 'record_rejection_reasons', 'discard', 'validate', 'invoke_right_to_be_forgotten', 'given_up', 'note'.";
        }

        $allowed_values = ["unknown", "duplicate", "test", "not_serious", "send_to_advisor", "spam", "validated", "untreated"];
        if (!in_array($this->container['reason'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'reason', must be one of 'unknown', 'duplicate', 'test', 'not_serious', 'send_to_advisor', 'spam', 'validated', 'untreated'.";
        }

        $allowed_values = ["unknown", "no_relevant_partners_expertise", "no_relevant_partners_geography", "client_budget", "client_not_serious", "client_satisfied", "client_case_too_small"];
        if (!in_array($this->container['reason_completed'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'reason_completed', must be one of 'unknown', 'no_relevant_partners_expertise', 'no_relevant_partners_geography', 'client_budget', 'client_not_serious', 'client_satisfied', 'client_case_too_small'.";
        }

        $allowed_values = ["unknown", "duplicate", "test", "not_serious", "send_to_advisor", "spam", "untreated"];
        if (!in_array($this->container['discard_status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'discard_status', must be one of 'unknown', 'duplicate', 'test', 'not_serious', 'send_to_advisor', 'spam', 'untreated'.";
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

        $allowed_values = ["unknown", "call", "no_answer", "accept_quote", "publish_quote", "reject_all_quotes", "unreject_all_quotes", "postpone_client_match_decision", "mark_as_completed", "unmatch", "record_rejection_reasons", "discard", "validate", "invoke_right_to_be_forgotten", "given_up", "note"];
        if (!in_array($this->container['action'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["unknown", "duplicate", "test", "not_serious", "send_to_advisor", "spam", "validated", "untreated"];
        if (!in_array($this->container['reason'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["unknown", "no_relevant_partners_expertise", "no_relevant_partners_geography", "client_budget", "client_not_serious", "client_satisfied", "client_case_too_small"];
        if (!in_array($this->container['reason_completed'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["unknown", "duplicate", "test", "not_serious", "send_to_advisor", "spam", "untreated"];
        if (!in_array($this->container['discard_status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets action
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     * @param string $action Lead action
     * @return $this
     */
    public function setAction($action)
    {
        $allowed_values = array('unknown', 'call', 'no_answer', 'accept_quote', 'publish_quote', 'reject_all_quotes', 'unreject_all_quotes', 'postpone_client_match_decision', 'mark_as_completed', 'unmatch', 'record_rejection_reasons', 'discard', 'validate', 'invoke_right_to_be_forgotten', 'given_up', 'note');
        if (!is_null($action) && (!in_array($action, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'action', must be one of 'unknown', 'call', 'no_answer', 'accept_quote', 'publish_quote', 'reject_all_quotes', 'unreject_all_quotes', 'postpone_client_match_decision', 'mark_as_completed', 'unmatch', 'record_rejection_reasons', 'discard', 'validate', 'invoke_right_to_be_forgotten', 'given_up', 'note'");
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets date
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     * @param string $date Date
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets quote_id
     * @return int
     */
    public function getQuoteId()
    {
        return $this->container['quote_id'];
    }

    /**
     * Sets quote_id
     * @param int $quote_id Quote id
     * @return $this
     */
    public function setQuoteId($quote_id)
    {
        $this->container['quote_id'] = $quote_id;

        return $this;
    }

    /**
     * Gets rejection_reasons
     * @return \Ageras\Api\LeadActionQuoteReasonResource[]
     */
    public function getRejectionReasons()
    {
        return $this->container['rejection_reasons'];
    }

    /**
     * Sets rejection_reasons
     * @param \Ageras\Api\LeadActionQuoteReasonResource[] $rejection_reasons Reasons for each quote's rejection
     * @return $this
     */
    public function setRejectionReasons($rejection_reasons)
    {
        $this->container['rejection_reasons'] = $rejection_reasons;

        return $this;
    }

    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     * @param string $reason The reason for a particular action
     * @return $this
     */
    public function setReason($reason)
    {
        $allowed_values = array('unknown', 'duplicate', 'test', 'not_serious', 'send_to_advisor', 'spam', 'validated', 'untreated');
        if (!is_null($reason) && (!in_array($reason, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'reason', must be one of 'unknown', 'duplicate', 'test', 'not_serious', 'send_to_advisor', 'spam', 'validated', 'untreated'");
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets reason_completed
     * @return string
     */
    public function getReasonCompleted()
    {
        return $this->container['reason_completed'];
    }

    /**
     * Sets reason_completed
     * @param string $reason_completed @var The reason to complete lead
     * @return $this
     */
    public function setReasonCompleted($reason_completed)
    {
        $allowed_values = array('unknown', 'no_relevant_partners_expertise', 'no_relevant_partners_geography', 'client_budget', 'client_not_serious', 'client_satisfied', 'client_case_too_small');
        if (!is_null($reason_completed) && (!in_array($reason_completed, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'reason_completed', must be one of 'unknown', 'no_relevant_partners_expertise', 'no_relevant_partners_geography', 'client_budget', 'client_not_serious', 'client_satisfied', 'client_case_too_small'");
        }
        $this->container['reason_completed'] = $reason_completed;

        return $this;
    }

    /**
     * Gets discard_status
     * @return string
     */
    public function getDiscardStatus()
    {
        return $this->container['discard_status'];
    }

    /**
     * Sets discard_status
     * @param string $discard_status Mark a lead with a status.
     * @return $this
     */
    public function setDiscardStatus($discard_status)
    {
        $allowed_values = array('unknown', 'duplicate', 'test', 'not_serious', 'send_to_advisor', 'spam', 'untreated');
        if (!is_null($discard_status) && (!in_array($discard_status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'discard_status', must be one of 'unknown', 'duplicate', 'test', 'not_serious', 'send_to_advisor', 'spam', 'untreated'");
        }
        $this->container['discard_status'] = $discard_status;

        return $this;
    }

    /**
     * Gets discard_status_note
     * @return string
     */
    public function getDiscardStatusNote()
    {
        return $this->container['discard_status_note'];
    }

    /**
     * Sets discard_status_note
     * @param string $discard_status_note Reason the status was set to what it is.
     * @return $this
     */
    public function setDiscardStatusNote($discard_status_note)
    {
        $this->container['discard_status_note'] = $discard_status_note;

        return $this;
    }

    /**
     * Gets client_decision_postponed_reason
     * @return string
     */
    public function getClientDecisionPostponedReason()
    {
        return $this->container['client_decision_postponed_reason'];
    }

    /**
     * Sets client_decision_postponed_reason
     * @param string $client_decision_postponed_reason Reason for the postponement.
     * @return $this
     */
    public function setClientDecisionPostponedReason($client_decision_postponed_reason)
    {
        $this->container['client_decision_postponed_reason'] = $client_decision_postponed_reason;

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


