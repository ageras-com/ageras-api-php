<?php
/**
 * PartnerKPIResource
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ageras\Api
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
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
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ageras\Api;

use \ArrayAccess;

/**
 * PartnerKPIResource Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Ageras\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PartnerKPIResource implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PartnerKPIResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'punches_monthly' => 'int',
        'punches_use_speed' => 'float',
        'punches_left' => 'int',
        'punches_spent_monthly' => 'float',
        'punches_spent_month' => 'int',
        'punches_spent_6months' => 'int',
        'punches_spent_total' => 'int',
        'punches_bought_month' => 'int',
        'punches_bought_6months' => 'int',
        'punches_bought_total' => 'int',
        'punches_total' => 'int',
        'last_login' => 'string',
        'last_lead_bought' => 'string',
        'last_invoice' => 'string',
        'last_coupon_size' => 'int',
        'golden_ratio_6months' => 'float',
        'revenue_month' => '\Ageras\Api\AmountResource',
        'revenue_6months' => '\Ageras\Api\AmountResource',
        'revenue_total' => '\Ageras\Api\AmountResource',
        'success_rate' => 'float',
        'success_total' => 'float',
        'avg_punch_price_6months' => '\Ageras\Api\AmountResource',
        'avg_due_days_6months' => 'float',
        'avg_paid_days_6months' => 'float'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'punches_monthly' => 'punches_monthly',
        'punches_use_speed' => 'punches_use_speed',
        'punches_left' => 'punches_left',
        'punches_spent_monthly' => 'punches_spent_monthly',
        'punches_spent_month' => 'punches_spent_month',
        'punches_spent_6months' => 'punches_spent_6months',
        'punches_spent_total' => 'punches_spent_total',
        'punches_bought_month' => 'punches_bought_month',
        'punches_bought_6months' => 'punches_bought_6months',
        'punches_bought_total' => 'punches_bought_total',
        'punches_total' => 'punches_total',
        'last_login' => 'last_login',
        'last_lead_bought' => 'last_lead_bought',
        'last_invoice' => 'last_invoice',
        'last_coupon_size' => 'last_coupon_size',
        'golden_ratio_6months' => 'golden_ratio_6months',
        'revenue_month' => 'revenue_month',
        'revenue_6months' => 'revenue_6months',
        'revenue_total' => 'revenue_total',
        'success_rate' => 'success_rate',
        'success_total' => 'success_total',
        'avg_punch_price_6months' => 'avg_punch_price_6months',
        'avg_due_days_6months' => 'avg_due_days_6months',
        'avg_paid_days_6months' => 'avg_paid_days_6months'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'punches_monthly' => 'setPunchesMonthly',
        'punches_use_speed' => 'setPunchesUseSpeed',
        'punches_left' => 'setPunchesLeft',
        'punches_spent_monthly' => 'setPunchesSpentMonthly',
        'punches_spent_month' => 'setPunchesSpentMonth',
        'punches_spent_6months' => 'setPunchesSpent6months',
        'punches_spent_total' => 'setPunchesSpentTotal',
        'punches_bought_month' => 'setPunchesBoughtMonth',
        'punches_bought_6months' => 'setPunchesBought6months',
        'punches_bought_total' => 'setPunchesBoughtTotal',
        'punches_total' => 'setPunchesTotal',
        'last_login' => 'setLastLogin',
        'last_lead_bought' => 'setLastLeadBought',
        'last_invoice' => 'setLastInvoice',
        'last_coupon_size' => 'setLastCouponSize',
        'golden_ratio_6months' => 'setGoldenRatio6months',
        'revenue_month' => 'setRevenueMonth',
        'revenue_6months' => 'setRevenue6months',
        'revenue_total' => 'setRevenueTotal',
        'success_rate' => 'setSuccessRate',
        'success_total' => 'setSuccessTotal',
        'avg_punch_price_6months' => 'setAvgPunchPrice6months',
        'avg_due_days_6months' => 'setAvgDueDays6months',
        'avg_paid_days_6months' => 'setAvgPaidDays6months'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'punches_monthly' => 'getPunchesMonthly',
        'punches_use_speed' => 'getPunchesUseSpeed',
        'punches_left' => 'getPunchesLeft',
        'punches_spent_monthly' => 'getPunchesSpentMonthly',
        'punches_spent_month' => 'getPunchesSpentMonth',
        'punches_spent_6months' => 'getPunchesSpent6months',
        'punches_spent_total' => 'getPunchesSpentTotal',
        'punches_bought_month' => 'getPunchesBoughtMonth',
        'punches_bought_6months' => 'getPunchesBought6months',
        'punches_bought_total' => 'getPunchesBoughtTotal',
        'punches_total' => 'getPunchesTotal',
        'last_login' => 'getLastLogin',
        'last_lead_bought' => 'getLastLeadBought',
        'last_invoice' => 'getLastInvoice',
        'last_coupon_size' => 'getLastCouponSize',
        'golden_ratio_6months' => 'getGoldenRatio6months',
        'revenue_month' => 'getRevenueMonth',
        'revenue_6months' => 'getRevenue6months',
        'revenue_total' => 'getRevenueTotal',
        'success_rate' => 'getSuccessRate',
        'success_total' => 'getSuccessTotal',
        'avg_punch_price_6months' => 'getAvgPunchPrice6months',
        'avg_due_days_6months' => 'getAvgDueDays6months',
        'avg_paid_days_6months' => 'getAvgPaidDays6months'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['punches_monthly'] = isset($data['punches_monthly']) ? $data['punches_monthly'] : null;
        $this->container['punches_use_speed'] = isset($data['punches_use_speed']) ? $data['punches_use_speed'] : null;
        $this->container['punches_left'] = isset($data['punches_left']) ? $data['punches_left'] : null;
        $this->container['punches_spent_monthly'] = isset($data['punches_spent_monthly']) ? $data['punches_spent_monthly'] : null;
        $this->container['punches_spent_month'] = isset($data['punches_spent_month']) ? $data['punches_spent_month'] : null;
        $this->container['punches_spent_6months'] = isset($data['punches_spent_6months']) ? $data['punches_spent_6months'] : null;
        $this->container['punches_spent_total'] = isset($data['punches_spent_total']) ? $data['punches_spent_total'] : null;
        $this->container['punches_bought_month'] = isset($data['punches_bought_month']) ? $data['punches_bought_month'] : null;
        $this->container['punches_bought_6months'] = isset($data['punches_bought_6months']) ? $data['punches_bought_6months'] : null;
        $this->container['punches_bought_total'] = isset($data['punches_bought_total']) ? $data['punches_bought_total'] : null;
        $this->container['punches_total'] = isset($data['punches_total']) ? $data['punches_total'] : null;
        $this->container['last_login'] = isset($data['last_login']) ? $data['last_login'] : null;
        $this->container['last_lead_bought'] = isset($data['last_lead_bought']) ? $data['last_lead_bought'] : null;
        $this->container['last_invoice'] = isset($data['last_invoice']) ? $data['last_invoice'] : null;
        $this->container['last_coupon_size'] = isset($data['last_coupon_size']) ? $data['last_coupon_size'] : null;
        $this->container['golden_ratio_6months'] = isset($data['golden_ratio_6months']) ? $data['golden_ratio_6months'] : null;
        $this->container['revenue_month'] = isset($data['revenue_month']) ? $data['revenue_month'] : null;
        $this->container['revenue_6months'] = isset($data['revenue_6months']) ? $data['revenue_6months'] : null;
        $this->container['revenue_total'] = isset($data['revenue_total']) ? $data['revenue_total'] : null;
        $this->container['success_rate'] = isset($data['success_rate']) ? $data['success_rate'] : null;
        $this->container['success_total'] = isset($data['success_total']) ? $data['success_total'] : null;
        $this->container['avg_punch_price_6months'] = isset($data['avg_punch_price_6months']) ? $data['avg_punch_price_6months'] : null;
        $this->container['avg_due_days_6months'] = isset($data['avg_due_days_6months']) ? $data['avg_due_days_6months'] : null;
        $this->container['avg_paid_days_6months'] = isset($data['avg_paid_days_6months']) ? $data['avg_paid_days_6months'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets punches_monthly
     * @return int
     */
    public function getPunchesMonthly()
    {
        return $this->container['punches_monthly'];
    }

    /**
     * Sets punches_monthly
     * @param int $punches_monthly
     * @return $this
     */
    public function setPunchesMonthly($punches_monthly)
    {
        $this->container['punches_monthly'] = $punches_monthly;

        return $this;
    }

    /**
     * Gets punches_use_speed
     * @return float
     */
    public function getPunchesUseSpeed()
    {
        return $this->container['punches_use_speed'];
    }

    /**
     * Sets punches_use_speed
     * @param float $punches_use_speed
     * @return $this
     */
    public function setPunchesUseSpeed($punches_use_speed)
    {
        $this->container['punches_use_speed'] = $punches_use_speed;

        return $this;
    }

    /**
     * Gets punches_left
     * @return int
     */
    public function getPunchesLeft()
    {
        return $this->container['punches_left'];
    }

    /**
     * Sets punches_left
     * @param int $punches_left
     * @return $this
     */
    public function setPunchesLeft($punches_left)
    {
        $this->container['punches_left'] = $punches_left;

        return $this;
    }

    /**
     * Gets punches_spent_monthly
     * @return float
     */
    public function getPunchesSpentMonthly()
    {
        return $this->container['punches_spent_monthly'];
    }

    /**
     * Sets punches_spent_monthly
     * @param float $punches_spent_monthly
     * @return $this
     */
    public function setPunchesSpentMonthly($punches_spent_monthly)
    {
        $this->container['punches_spent_monthly'] = $punches_spent_monthly;

        return $this;
    }

    /**
     * Gets punches_spent_month
     * @return int
     */
    public function getPunchesSpentMonth()
    {
        return $this->container['punches_spent_month'];
    }

    /**
     * Sets punches_spent_month
     * @param int $punches_spent_month
     * @return $this
     */
    public function setPunchesSpentMonth($punches_spent_month)
    {
        $this->container['punches_spent_month'] = $punches_spent_month;

        return $this;
    }

    /**
     * Gets punches_spent_6months
     * @return int
     */
    public function getPunchesSpent6months()
    {
        return $this->container['punches_spent_6months'];
    }

    /**
     * Sets punches_spent_6months
     * @param int $punches_spent_6months
     * @return $this
     */
    public function setPunchesSpent6months($punches_spent_6months)
    {
        $this->container['punches_spent_6months'] = $punches_spent_6months;

        return $this;
    }

    /**
     * Gets punches_spent_total
     * @return int
     */
    public function getPunchesSpentTotal()
    {
        return $this->container['punches_spent_total'];
    }

    /**
     * Sets punches_spent_total
     * @param int $punches_spent_total
     * @return $this
     */
    public function setPunchesSpentTotal($punches_spent_total)
    {
        $this->container['punches_spent_total'] = $punches_spent_total;

        return $this;
    }

    /**
     * Gets punches_bought_month
     * @return int
     */
    public function getPunchesBoughtMonth()
    {
        return $this->container['punches_bought_month'];
    }

    /**
     * Sets punches_bought_month
     * @param int $punches_bought_month
     * @return $this
     */
    public function setPunchesBoughtMonth($punches_bought_month)
    {
        $this->container['punches_bought_month'] = $punches_bought_month;

        return $this;
    }

    /**
     * Gets punches_bought_6months
     * @return int
     */
    public function getPunchesBought6months()
    {
        return $this->container['punches_bought_6months'];
    }

    /**
     * Sets punches_bought_6months
     * @param int $punches_bought_6months
     * @return $this
     */
    public function setPunchesBought6months($punches_bought_6months)
    {
        $this->container['punches_bought_6months'] = $punches_bought_6months;

        return $this;
    }

    /**
     * Gets punches_bought_total
     * @return int
     */
    public function getPunchesBoughtTotal()
    {
        return $this->container['punches_bought_total'];
    }

    /**
     * Sets punches_bought_total
     * @param int $punches_bought_total
     * @return $this
     */
    public function setPunchesBoughtTotal($punches_bought_total)
    {
        $this->container['punches_bought_total'] = $punches_bought_total;

        return $this;
    }

    /**
     * Gets punches_total
     * @return int
     */
    public function getPunchesTotal()
    {
        return $this->container['punches_total'];
    }

    /**
     * Sets punches_total
     * @param int $punches_total
     * @return $this
     */
    public function setPunchesTotal($punches_total)
    {
        $this->container['punches_total'] = $punches_total;

        return $this;
    }

    /**
     * Gets last_login
     * @return string
     */
    public function getLastLogin()
    {
        return $this->container['last_login'];
    }

    /**
     * Sets last_login
     * @param string $last_login
     * @return $this
     */
    public function setLastLogin($last_login)
    {
        $this->container['last_login'] = $last_login;

        return $this;
    }

    /**
     * Gets last_lead_bought
     * @return string
     */
    public function getLastLeadBought()
    {
        return $this->container['last_lead_bought'];
    }

    /**
     * Sets last_lead_bought
     * @param string $last_lead_bought
     * @return $this
     */
    public function setLastLeadBought($last_lead_bought)
    {
        $this->container['last_lead_bought'] = $last_lead_bought;

        return $this;
    }

    /**
     * Gets last_invoice
     * @return string
     */
    public function getLastInvoice()
    {
        return $this->container['last_invoice'];
    }

    /**
     * Sets last_invoice
     * @param string $last_invoice
     * @return $this
     */
    public function setLastInvoice($last_invoice)
    {
        $this->container['last_invoice'] = $last_invoice;

        return $this;
    }

    /**
     * Gets last_coupon_size
     * @return int
     */
    public function getLastCouponSize()
    {
        return $this->container['last_coupon_size'];
    }

    /**
     * Sets last_coupon_size
     * @param int $last_coupon_size
     * @return $this
     */
    public function setLastCouponSize($last_coupon_size)
    {
        $this->container['last_coupon_size'] = $last_coupon_size;

        return $this;
    }

    /**
     * Gets golden_ratio_6months
     * @return float
     */
    public function getGoldenRatio6months()
    {
        return $this->container['golden_ratio_6months'];
    }

    /**
     * Sets golden_ratio_6months
     * @param float $golden_ratio_6months
     * @return $this
     */
    public function setGoldenRatio6months($golden_ratio_6months)
    {
        $this->container['golden_ratio_6months'] = $golden_ratio_6months;

        return $this;
    }

    /**
     * Gets revenue_month
     * @return \Ageras\Api\AmountResource
     */
    public function getRevenueMonth()
    {
        return $this->container['revenue_month'];
    }

    /**
     * Sets revenue_month
     * @param \Ageras\Api\AmountResource $revenue_month
     * @return $this
     */
    public function setRevenueMonth($revenue_month)
    {
        $this->container['revenue_month'] = $revenue_month;

        return $this;
    }

    /**
     * Gets revenue_6months
     * @return \Ageras\Api\AmountResource
     */
    public function getRevenue6months()
    {
        return $this->container['revenue_6months'];
    }

    /**
     * Sets revenue_6months
     * @param \Ageras\Api\AmountResource $revenue_6months
     * @return $this
     */
    public function setRevenue6months($revenue_6months)
    {
        $this->container['revenue_6months'] = $revenue_6months;

        return $this;
    }

    /**
     * Gets revenue_total
     * @return \Ageras\Api\AmountResource
     */
    public function getRevenueTotal()
    {
        return $this->container['revenue_total'];
    }

    /**
     * Sets revenue_total
     * @param \Ageras\Api\AmountResource $revenue_total
     * @return $this
     */
    public function setRevenueTotal($revenue_total)
    {
        $this->container['revenue_total'] = $revenue_total;

        return $this;
    }

    /**
     * Gets success_rate
     * @return float
     */
    public function getSuccessRate()
    {
        return $this->container['success_rate'];
    }

    /**
     * Sets success_rate
     * @param float $success_rate
     * @return $this
     */
    public function setSuccessRate($success_rate)
    {
        $this->container['success_rate'] = $success_rate;

        return $this;
    }

    /**
     * Gets success_total
     * @return float
     */
    public function getSuccessTotal()
    {
        return $this->container['success_total'];
    }

    /**
     * Sets success_total
     * @param float $success_total
     * @return $this
     */
    public function setSuccessTotal($success_total)
    {
        $this->container['success_total'] = $success_total;

        return $this;
    }

    /**
     * Gets avg_punch_price_6months
     * @return \Ageras\Api\AmountResource
     */
    public function getAvgPunchPrice6months()
    {
        return $this->container['avg_punch_price_6months'];
    }

    /**
     * Sets avg_punch_price_6months
     * @param \Ageras\Api\AmountResource $avg_punch_price_6months
     * @return $this
     */
    public function setAvgPunchPrice6months($avg_punch_price_6months)
    {
        $this->container['avg_punch_price_6months'] = $avg_punch_price_6months;

        return $this;
    }

    /**
     * Gets avg_due_days_6months
     * @return float
     */
    public function getAvgDueDays6months()
    {
        return $this->container['avg_due_days_6months'];
    }

    /**
     * Sets avg_due_days_6months
     * @param float $avg_due_days_6months
     * @return $this
     */
    public function setAvgDueDays6months($avg_due_days_6months)
    {
        $this->container['avg_due_days_6months'] = $avg_due_days_6months;

        return $this;
    }

    /**
     * Gets avg_paid_days_6months
     * @return float
     */
    public function getAvgPaidDays6months()
    {
        return $this->container['avg_paid_days_6months'];
    }

    /**
     * Sets avg_paid_days_6months
     * @param float $avg_paid_days_6months
     * @return $this
     */
    public function setAvgPaidDays6months($avg_paid_days_6months)
    {
        $this->container['avg_paid_days_6months'] = $avg_paid_days_6months;

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


