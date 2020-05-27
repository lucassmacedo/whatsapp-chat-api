<?php
/**
 * GroupParticipantAction
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
 * GroupParticipantAction Class Doc Comment
 *
 * @category Class
 * @package  WhatsAppChatApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GroupParticipantAction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GroupParticipantAction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'group_id' => 'string',
        'participant_chat_id' => 'string',
        'participant_phone' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'group_id' => null,
        'participant_chat_id' => null,
        'participant_phone' => null
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
        'group_id' => 'groupId',
        'participant_chat_id' => 'participantChatId',
        'participant_phone' => 'participantPhone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'group_id' => 'setGroupId',
        'participant_chat_id' => 'setParticipantChatId',
        'participant_phone' => 'setParticipantPhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'group_id' => 'getGroupId',
        'participant_chat_id' => 'getParticipantChatId',
        'participant_phone' => 'getParticipantPhone'
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
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['participant_chat_id'] = isset($data['participant_chat_id']) ? $data['participant_chat_id'] : null;
        $this->container['participant_phone'] = isset($data['participant_phone']) ? $data['participant_phone'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['group_id'] === null) {
            $invalidProperties[] = "'group_id' can't be null";
        }
        if ($this->container['participant_chat_id'] === null) {
            $invalidProperties[] = "'participant_chat_id' can't be null";
        }
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
     * Gets group_id
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param string $group_id Chat ID from the chat list. Examples: 19680561234-1479621234@g.us for the group.
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets participant_chat_id
     *
     * @return string
     */
    public function getParticipantChatId()
    {
        return $this->container['participant_chat_id'];
    }

    /**
     * Sets participant_chat_id
     *
     * @param string $participant_chat_id **Required if participantPhone is not set**  Chat ID from the message list. Examples: 17633123456@c.us. Used instead of the participantPhone parameter.
     *
     * @return $this
     */
    public function setParticipantChatId($participant_chat_id)
    {
        $this->container['participant_chat_id'] = $participant_chat_id;

        return $this;
    }

    /**
     * Gets participant_phone
     *
     * @return int|null
     */
    public function getParticipantPhone()
    {
        return $this->container['participant_phone'];
    }

    /**
     * Sets participant_phone
     *
     * @param int|null $participant_phone **Required if participantChatId is not set**  A phone number starting with the country code. You do not need to add your number.   USA example: 17472822486.
     *
     * @return $this
     */
    public function setParticipantPhone($participant_phone)
    {
        $this->container['participant_phone'] = $participant_phone;

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


