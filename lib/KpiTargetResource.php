<?php
/**
 * KpiTargetResource
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
 * KpiTargetResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class KpiTargetResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'KpiTargetResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'kpi_identifier' => 'string',
        'employee_id' => 'int',
        'year' => 'int',
        'month' => 'int',
        'day' => 'int',
        'value' => 'float',
        'industry_id' => 'int',
        'geo_code' => 'string'
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
        'kpi_identifier' => 'kpi_identifier',
        'employee_id' => 'employee_id',
        'year' => 'year',
        'month' => 'month',
        'day' => 'day',
        'value' => 'value',
        'industry_id' => 'industry_id',
        'geo_code' => 'geo_code'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'kpi_identifier' => 'setKpiIdentifier',
        'employee_id' => 'setEmployeeId',
        'year' => 'setYear',
        'month' => 'setMonth',
        'day' => 'setDay',
        'value' => 'setValue',
        'industry_id' => 'setIndustryId',
        'geo_code' => 'setGeoCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'kpi_identifier' => 'getKpiIdentifier',
        'employee_id' => 'getEmployeeId',
        'year' => 'getYear',
        'month' => 'getMonth',
        'day' => 'getDay',
        'value' => 'getValue',
        'industry_id' => 'getIndustryId',
        'geo_code' => 'getGeoCode'
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

    const KPI_IDENTIFIER_UNKNOWN = 'unknown';
    const KPI_IDENTIFIER_VALIDATION_EFFICIENCY = 'validation_efficiency';
    const KPI_IDENTIFIER_MATCH_RATIO = 'match_ratio';
    const KPI_IDENTIFIER_COMPLETION_RATIO = 'completion_ratio';
    const KPI_IDENTIFIER_COMPLETIONS = 'completions';
    const KPI_IDENTIFIER_COMPLETIONS_FORECAST = 'completions_forecast';
    const KPI_IDENTIFIER_EXCLUSIVE_FEE = 'exclusive_fee';
    const KPI_IDENTIFIER_EXCLUSIVE_FEE_FORECAST = 'exclusive_fee_forecast';
    const KPI_IDENTIFIER_EXCLUSIVE_LEADS = 'exclusive_leads';
    const KPI_IDENTIFIER_EXCLUSIVE_MATCH_RATIO = 'exclusive_match_ratio';
    const KPI_IDENTIFIER_MATCHES = 'matches';
    const KPI_IDENTIFIER_MATCHES_FORECAST = 'matches_forecast';
    const KPI_IDENTIFIER_VALIDATIONS = 'validations';
    const KPI_IDENTIFIER_VALIDATIONS_FORECAST = 'validations_forecast';
    const KPI_IDENTIFIER_AVERAGE_FEE = 'average_fee';
    const KPI_IDENTIFIER_TOTAL_FEE = 'total_fee';
    const KPI_IDENTIFIER_TOTAL_FEE_FORECAST = 'total_fee_forecast';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getKpiIdentifierAllowableValues()
    {
        return [
            self::KPI_IDENTIFIER_UNKNOWN,
            self::KPI_IDENTIFIER_VALIDATION_EFFICIENCY,
            self::KPI_IDENTIFIER_MATCH_RATIO,
            self::KPI_IDENTIFIER_COMPLETION_RATIO,
            self::KPI_IDENTIFIER_COMPLETIONS,
            self::KPI_IDENTIFIER_COMPLETIONS_FORECAST,
            self::KPI_IDENTIFIER_EXCLUSIVE_FEE,
            self::KPI_IDENTIFIER_EXCLUSIVE_FEE_FORECAST,
            self::KPI_IDENTIFIER_EXCLUSIVE_LEADS,
            self::KPI_IDENTIFIER_EXCLUSIVE_MATCH_RATIO,
            self::KPI_IDENTIFIER_MATCHES,
            self::KPI_IDENTIFIER_MATCHES_FORECAST,
            self::KPI_IDENTIFIER_VALIDATIONS,
            self::KPI_IDENTIFIER_VALIDATIONS_FORECAST,
            self::KPI_IDENTIFIER_AVERAGE_FEE,
            self::KPI_IDENTIFIER_TOTAL_FEE,
            self::KPI_IDENTIFIER_TOTAL_FEE_FORECAST,
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
        $this->container['kpi_identifier'] = isset($data['kpi_identifier']) ? $data['kpi_identifier'] : 'unknown';
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
        $this->container['month'] = isset($data['month']) ? $data['month'] : null;
        $this->container['day'] = isset($data['day']) ? $data['day'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['industry_id'] = isset($data['industry_id']) ? $data['industry_id'] : null;
        $this->container['geo_code'] = isset($data['geo_code']) ? $data['geo_code'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["unknown", "validation_efficiency", "match_ratio", "completion_ratio", "completions", "completions_forecast", "exclusive_fee", "exclusive_fee_forecast", "exclusive_leads", "exclusive_match_ratio", "matches", "matches_forecast", "validations", "validations_forecast", "average_fee", "total_fee", "total_fee_forecast"];
        if (!in_array($this->container['kpi_identifier'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'kpi_identifier', must be one of 'unknown', 'validation_efficiency', 'match_ratio', 'completion_ratio', 'completions', 'completions_forecast', 'exclusive_fee', 'exclusive_fee_forecast', 'exclusive_leads', 'exclusive_match_ratio', 'matches', 'matches_forecast', 'validations', 'validations_forecast', 'average_fee', 'total_fee', 'total_fee_forecast'.";
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

        $allowed_values = ["unknown", "validation_efficiency", "match_ratio", "completion_ratio", "completions", "completions_forecast", "exclusive_fee", "exclusive_fee_forecast", "exclusive_leads", "exclusive_match_ratio", "matches", "matches_forecast", "validations", "validations_forecast", "average_fee", "total_fee", "total_fee_forecast"];
        if (!in_array($this->container['kpi_identifier'], $allowed_values)) {
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
     * @param int $id ID of the target.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets kpi_identifier
     * @return string
     */
    public function getKpiIdentifier()
    {
        return $this->container['kpi_identifier'];
    }

    /**
     * Sets kpi_identifier
     * @param string $kpi_identifier Identifyier of the target, e.g. 'match_ratio'
     * @return $this
     */
    public function setKpiIdentifier($kpi_identifier)
    {
        $allowed_values = array('unknown', 'validation_efficiency', 'match_ratio', 'completion_ratio', 'completions', 'completions_forecast', 'exclusive_fee', 'exclusive_fee_forecast', 'exclusive_leads', 'exclusive_match_ratio', 'matches', 'matches_forecast', 'validations', 'validations_forecast', 'average_fee', 'total_fee', 'total_fee_forecast');
        if (!is_null($kpi_identifier) && (!in_array($kpi_identifier, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'kpi_identifier', must be one of 'unknown', 'validation_efficiency', 'match_ratio', 'completion_ratio', 'completions', 'completions_forecast', 'exclusive_fee', 'exclusive_fee_forecast', 'exclusive_leads', 'exclusive_match_ratio', 'matches', 'matches_forecast', 'validations', 'validations_forecast', 'average_fee', 'total_fee', 'total_fee_forecast'");
        }
        $this->container['kpi_identifier'] = $kpi_identifier;

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
     * @param int $employee_id Employee ID the target is for.
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {
        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets year
     * @return int
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     * @param int $year Year the target is for.
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

        return $this;
    }

    /**
     * Gets month
     * @return int
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     * @param int $month Month the target is for.
     * @return $this
     */
    public function setMonth($month)
    {
        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets day
     * @return int
     */
    public function getDay()
    {
        return $this->container['day'];
    }

    /**
     * Sets day
     * @param int $day Day the target is for.
     * @return $this
     */
    public function setDay($day)
    {
        $this->container['day'] = $day;

        return $this;
    }

    /**
     * Gets value
     * @return float
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param float $value Value of the target.
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets industry_id
     * @return int
     */
    public function getIndustryId()
    {
        return $this->container['industry_id'];
    }

    /**
     * Sets industry_id
     * @param int $industry_id Industry the KPI belongs to.
     * @return $this
     */
    public function setIndustryId($industry_id)
    {
        $this->container['industry_id'] = $industry_id;

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
     * @param string $geo_code Geo code the KPI belongs to.
     * @return $this
     */
    public function setGeoCode($geo_code)
    {
        $this->container['geo_code'] = $geo_code;

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


