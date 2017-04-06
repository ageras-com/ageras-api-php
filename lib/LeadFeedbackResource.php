<?php
/**
 * LeadFeedbackResource
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
 * LeadFeedbackResource Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Ageras\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LeadFeedbackResource implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LeadFeedbackResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'reason' => 'string',
        'satisfaction_level_id' => 'int',
        'feedback' => 'string',
        'chosen_partner' => '\Ageras\Api\PartnerResource'
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
        'reason' => 'reason',
        'satisfaction_level_id' => 'satisfaction_level_id',
        'feedback' => 'feedback',
        'chosen_partner' => 'chosen_partner'
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
        'reason' => 'setReason',
        'satisfaction_level_id' => 'setSatisfactionLevelId',
        'feedback' => 'setFeedback',
        'chosen_partner' => 'setChosenPartner'
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
        'reason' => 'getReason',
        'satisfaction_level_id' => 'getSatisfactionLevelId',
        'feedback' => 'getFeedback',
        'chosen_partner' => 'getChosenPartner'
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
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['satisfaction_level_id'] = isset($data['satisfaction_level_id']) ? $data['satisfaction_level_id'] : null;
        $this->container['feedback'] = isset($data['feedback']) ? $data['feedback'] : null;
        $this->container['chosen_partner'] = isset($data['chosen_partner']) ? $data['chosen_partner'] : null;
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
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     * @param string $reason The reason for choosing the partner
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets satisfaction_level_id
     * @return int
     */
    public function getSatisfactionLevelId()
    {
        return $this->container['satisfaction_level_id'];
    }

    /**
     * Sets satisfaction_level_id
     * @param int $satisfaction_level_id Satisfaction
     * @return $this
     */
    public function setSatisfactionLevelId($satisfaction_level_id)
    {
        $this->container['satisfaction_level_id'] = $satisfaction_level_id;

        return $this;
    }

    /**
     * Gets feedback
     * @return string
     */
    public function getFeedback()
    {
        return $this->container['feedback'];
    }

    /**
     * Sets feedback
     * @param string $feedback Feedback
     * @return $this
     */
    public function setFeedback($feedback)
    {
        $this->container['feedback'] = $feedback;

        return $this;
    }

    /**
     * Gets chosen_partner
     * @return \Ageras\Api\PartnerResource
     */
    public function getChosenPartner()
    {
        return $this->container['chosen_partner'];
    }

    /**
     * Sets chosen_partner
     * @param \Ageras\Api\PartnerResource $chosen_partner
     * @return $this
     */
    public function setChosenPartner($chosen_partner)
    {
        $this->container['chosen_partner'] = $chosen_partner;

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


