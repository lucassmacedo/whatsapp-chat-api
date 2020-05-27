<?php
/**
 * InstanceStatusStatusDataActions
 *
 * PHP version 5
 *
 * @category Class
 * @package  WhatsAppChatApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Chat API SDK
 *
 * The SDK allows you to receive and send messages through your WhatsApp account. [Sign up now](https://app.chat-api.com/)  The Chat API is based on the WhatsApp WEB protocol and excludes the ban both when using libraries from mgp25 and the like. Despite this, your account can be banned by anti-spam system WhatsApp after several clicking the \"block\" button.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: sale@chat-api.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace WhatsAppChatApi\Model;

use \ArrayAccess;
use \WhatsAppChatApi\ObjectSerializer;

/**
 * InstanceStatusStatusDataActions Class Doc Comment
 *
 * @category Class
 * @description Actions that can be applied to change the status
 * @package  WhatsAppChatApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InstanceStatusStatusDataActions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InstanceStatus_statusData_actions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'expiry' => '\WhatsAppChatApi\Model\InstanceStatusAction',
        'retry' => '\WhatsAppChatApi\Model\InstanceStatusAction',
        'logout' => '\WhatsAppChatApi\Model\InstanceStatusAction',
        'takeover' => '\WhatsAppChatApi\Model\InstanceStatusAction',
        'learn_more' => '\WhatsAppChatApi\Model\InstanceStatusLink'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'expiry' => null,
        'retry' => null,
        'logout' => null,
        'takeover' => null,
        'learn_more' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'expiry' => 'expiry',
        'retry' => 'retry',
        'logout' => 'logout',
        'takeover' => 'takeover',
        'learn_more' => 'learn_more'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expiry' => 'setExpiry',
        'retry' => 'setRetry',
        'logout' => 'setLogout',
        'takeover' => 'setTakeover',
        'learn_more' => 'setLearnMore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expiry' => 'getExpiry',
        'retry' => 'getRetry',
        'logout' => 'getLogout',
        'takeover' => 'getTakeover',
        'learn_more' => 'getLearnMore'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['expiry'] = isset($data['expiry']) ? $data['expiry'] : null;
        $this->container['retry'] = isset($data['retry']) ? $data['retry'] : null;
        $this->container['logout'] = isset($data['logout']) ? $data['logout'] : null;
        $this->container['takeover'] = isset($data['takeover']) ? $data['takeover'] : null;
        $this->container['learn_more'] = isset($data['learn_more']) ? $data['learn_more'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets expiry
     *
     * @return \WhatsAppChatApi\Model\InstanceStatusAction|null
     */
    public function getExpiry()
    {
        return $this->container['expiry'];
    }

    /**
     * Sets expiry
     *
     * @param \WhatsAppChatApi\Model\InstanceStatusAction|null $expiry expiry
     *
     * @return $this
     */
    public function setExpiry($expiry)
    {
        $this->container['expiry'] = $expiry;

        return $this;
    }

    /**
     * Gets retry
     *
     * @return \WhatsAppChatApi\Model\InstanceStatusAction|null
     */
    public function getRetry()
    {
        return $this->container['retry'];
    }

    /**
     * Sets retry
     *
     * @param \WhatsAppChatApi\Model\InstanceStatusAction|null $retry retry
     *
     * @return $this
     */
    public function setRetry($retry)
    {
        $this->container['retry'] = $retry;

        return $this;
    }

    /**
     * Gets logout
     *
     * @return \WhatsAppChatApi\Model\InstanceStatusAction|null
     */
    public function getLogout()
    {
        return $this->container['logout'];
    }

    /**
     * Sets logout
     *
     * @param \WhatsAppChatApi\Model\InstanceStatusAction|null $logout logout
     *
     * @return $this
     */
    public function setLogout($logout)
    {
        $this->container['logout'] = $logout;

        return $this;
    }

    /**
     * Gets takeover
     *
     * @return \WhatsAppChatApi\Model\InstanceStatusAction|null
     */
    public function getTakeover()
    {
        return $this->container['takeover'];
    }

    /**
     * Sets takeover
     *
     * @param \WhatsAppChatApi\Model\InstanceStatusAction|null $takeover takeover
     *
     * @return $this
     */
    public function setTakeover($takeover)
    {
        $this->container['takeover'] = $takeover;

        return $this;
    }

    /**
     * Gets learn_more
     *
     * @return \WhatsAppChatApi\Model\InstanceStatusLink|null
     */
    public function getLearnMore()
    {
        return $this->container['learn_more'];
    }

    /**
     * Sets learn_more
     *
     * @param \WhatsAppChatApi\Model\InstanceStatusLink|null $learn_more learn_more
     *
     * @return $this
     */
    public function setLearnMore($learn_more)
    {
        $this->container['learn_more'] = $learn_more;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


