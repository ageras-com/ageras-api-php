<?php
/**
 * KPIPartnersResource
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
 * KPIPartnersResource Class Doc Comment
 *
 * @category    Class
 * @package     Ageras\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class KPIPartnersResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'KPIPartnersResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'avg_credits_used' => '\Ageras\Api\Model\KPIPartnersAvgCreditsUsedResource',
        'calls' => '\Ageras\Api\Model\KPINumberResource',
        'churn' => '\Ageras\Api\Model\KPINumberResource',
        'demo_logins' => '\Ageras\Api\Model\KPINumberResource',
        'refills' => '\Ageras\Api\Model\KPINumberResource',
        'new_sales' => '\Ageras\Api\Model\KPIPartnersNewSalesResource',
        'cancellations' => '\Ageras\Api\Model\KPINumberResource',
        'satisfactions' => '\Ageras\Api\Model\KPINumberResource',
        'success_ratio' => '\Ageras\Api\Model\KPIPartnersSuccessRatioResource',
        'unique_spending' => '\Ageras\Api\Model\KPIPartnersUniqueSpendingResource',
        'active_partner_packages' => '\Ageras\Api\Model\KPINumberResource'
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
        'avg_credits_used' => 'avg_credits_used',
        'calls' => 'calls',
        'churn' => 'churn',
        'demo_logins' => 'demo_logins',
        'refills' => 'refills',
        'new_sales' => 'new_sales',
        'cancellations' => 'cancellations',
        'satisfactions' => 'satisfactions',
        'success_ratio' => 'success_ratio',
        'unique_spending' => 'unique_spending',
        'active_partner_packages' => 'active_partner_packages'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'avg_credits_used' => 'setAvgCreditsUsed',
        'calls' => 'setCalls',
        'churn' => 'setChurn',
        'demo_logins' => 'setDemoLogins',
        'refills' => 'setRefills',
        'new_sales' => 'setNewSales',
        'cancellations' => 'setCancellations',
        'satisfactions' => 'setSatisfactions',
        'success_ratio' => 'setSuccessRatio',
        'unique_spending' => 'setUniqueSpending',
        'active_partner_packages' => 'setActivePartnerPackages'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'avg_credits_used' => 'getAvgCreditsUsed',
        'calls' => 'getCalls',
        'churn' => 'getChurn',
        'demo_logins' => 'getDemoLogins',
        'refills' => 'getRefills',
        'new_sales' => 'getNewSales',
        'cancellations' => 'getCancellations',
        'satisfactions' => 'getSatisfactions',
        'success_ratio' => 'getSuccessRatio',
        'unique_spending' => 'getUniqueSpending',
        'active_partner_packages' => 'getActivePartnerPackages'
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
        $this->container['avg_credits_used'] = isset($data['avg_credits_used']) ? $data['avg_credits_used'] : null;
        $this->container['calls'] = isset($data['calls']) ? $data['calls'] : null;
        $this->container['churn'] = isset($data['churn']) ? $data['churn'] : null;
        $this->container['demo_logins'] = isset($data['demo_logins']) ? $data['demo_logins'] : null;
        $this->container['refills'] = isset($data['refills']) ? $data['refills'] : null;
        $this->container['new_sales'] = isset($data['new_sales']) ? $data['new_sales'] : null;
        $this->container['cancellations'] = isset($data['cancellations']) ? $data['cancellations'] : null;
        $this->container['satisfactions'] = isset($data['satisfactions']) ? $data['satisfactions'] : null;
        $this->container['success_ratio'] = isset($data['success_ratio']) ? $data['success_ratio'] : null;
        $this->container['unique_spending'] = isset($data['unique_spending']) ? $data['unique_spending'] : null;
        $this->container['active_partner_packages'] = isset($data['active_partner_packages']) ? $data['active_partner_packages'] : null;
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
     * Gets avg_credits_used
     * @return \Ageras\Api\Model\KPIPartnersAvgCreditsUsedResource
     */
    public function getAvgCreditsUsed()
    {
        return $this->container['avg_credits_used'];
    }

    /**
     * Sets avg_credits_used
     * @param \Ageras\Api\Model\KPIPartnersAvgCreditsUsedResource $avg_credits_used
     * @return $this
     */
    public function setAvgCreditsUsed($avg_credits_used)
    {
        $this->container['avg_credits_used'] = $avg_credits_used;

        return $this;
    }

    /**
     * Gets calls
     * @return \Ageras\Api\Model\KPINumberResource
     */
    public function getCalls()
    {
        return $this->container['calls'];
    }

    /**
     * Sets calls
     * @param \Ageras\Api\Model\KPINumberResource $calls
     * @return $this
     */
    public function setCalls($calls)
    {
        $this->container['calls'] = $calls;

        return $this;
    }

    /**
     * Gets churn
     * @return \Ageras\Api\Model\KPINumberResource
     */
    public function getChurn()
    {
        return $this->container['churn'];
    }

    /**
     * Sets churn
     * @param \Ageras\Api\Model\KPINumberResource $churn
     * @return $this
     */
    public function setChurn($churn)
    {
        $this->container['churn'] = $churn;

        return $this;
    }

    /**
     * Gets demo_logins
     * @return \Ageras\Api\Model\KPINumberResource
     */
    public function getDemoLogins()
    {
        return $this->container['demo_logins'];
    }

    /**
     * Sets demo_logins
     * @param \Ageras\Api\Model\KPINumberResource $demo_logins
     * @return $this
     */
    public function setDemoLogins($demo_logins)
    {
        $this->container['demo_logins'] = $demo_logins;

        return $this;
    }

    /**
     * Gets refills
     * @return \Ageras\Api\Model\KPINumberResource
     */
    public function getRefills()
    {
        return $this->container['refills'];
    }

    /**
     * Sets refills
     * @param \Ageras\Api\Model\KPINumberResource $refills
     * @return $this
     */
    public function setRefills($refills)
    {
        $this->container['refills'] = $refills;

        return $this;
    }

    /**
     * Gets new_sales
     * @return \Ageras\Api\Model\KPIPartnersNewSalesResource
     */
    public function getNewSales()
    {
        return $this->container['new_sales'];
    }

    /**
     * Sets new_sales
     * @param \Ageras\Api\Model\KPIPartnersNewSalesResource $new_sales
     * @return $this
     */
    public function setNewSales($new_sales)
    {
        $this->container['new_sales'] = $new_sales;

        return $this;
    }

    /**
     * Gets cancellations
     * @return \Ageras\Api\Model\KPINumberResource
     */
    public function getCancellations()
    {
        return $this->container['cancellations'];
    }

    /**
     * Sets cancellations
     * @param \Ageras\Api\Model\KPINumberResource $cancellations
     * @return $this
     */
    public function setCancellations($cancellations)
    {
        $this->container['cancellations'] = $cancellations;

        return $this;
    }

    /**
     * Gets satisfactions
     * @return \Ageras\Api\Model\KPINumberResource
     */
    public function getSatisfactions()
    {
        return $this->container['satisfactions'];
    }

    /**
     * Sets satisfactions
     * @param \Ageras\Api\Model\KPINumberResource $satisfactions
     * @return $this
     */
    public function setSatisfactions($satisfactions)
    {
        $this->container['satisfactions'] = $satisfactions;

        return $this;
    }

    /**
     * Gets success_ratio
     * @return \Ageras\Api\Model\KPIPartnersSuccessRatioResource
     */
    public function getSuccessRatio()
    {
        return $this->container['success_ratio'];
    }

    /**
     * Sets success_ratio
     * @param \Ageras\Api\Model\KPIPartnersSuccessRatioResource $success_ratio
     * @return $this
     */
    public function setSuccessRatio($success_ratio)
    {
        $this->container['success_ratio'] = $success_ratio;

        return $this;
    }

    /**
     * Gets unique_spending
     * @return \Ageras\Api\Model\KPIPartnersUniqueSpendingResource
     */
    public function getUniqueSpending()
    {
        return $this->container['unique_spending'];
    }

    /**
     * Sets unique_spending
     * @param \Ageras\Api\Model\KPIPartnersUniqueSpendingResource $unique_spending
     * @return $this
     */
    public function setUniqueSpending($unique_spending)
    {
        $this->container['unique_spending'] = $unique_spending;

        return $this;
    }

    /**
     * Gets active_partner_packages
     * @return \Ageras\Api\Model\KPINumberResource
     */
    public function getActivePartnerPackages()
    {
        return $this->container['active_partner_packages'];
    }

    /**
     * Sets active_partner_packages
     * @param \Ageras\Api\Model\KPINumberResource $active_partner_packages
     * @return $this
     */
    public function setActivePartnerPackages($active_partner_packages)
    {
        $this->container['active_partner_packages'] = $active_partner_packages;

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


