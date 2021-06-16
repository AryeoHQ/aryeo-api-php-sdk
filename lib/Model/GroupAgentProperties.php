<?php
/**
 * GroupAgentProperties
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Aryeo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Aryeo
 *
 * # Introduction The Aryeo API gives access to the Aryeo platform. You can use your favorite HTTP/REST library for interfacing with the Aryeo API, or you can use one of our SDKs. Our SDKs are procedurally generated and a great starting point for experimental testing. If there is an additional language or framework that you want to see supported, then please reach and out and make a contribution!  <p align=\"center\"> <a href=\"https://github.com/AryeoHQ/aryeo-api-dart-sdk\"><img src=\"https://raw.githubusercontent.com/AryeoHQ/aryeo-api-docs/master/public/images/dart.svg\" alt=\"Dart\" width=\"44\" style=\"padding:10px;border: 1px solid #d3d3d3;border-radius: 5px;margin:4px;\"/></a> <a href=\"https://github.com/AryeoHQ/aryeo-api-go-sdk\"><img src=\"https://raw.githubusercontent.com/AryeoHQ/aryeo-api-docs/master/public/images/go.svg\" alt=\"Go\" width=\"44\" style=\"padding:10px;border: 1px solid #d3d3d3;border-radius: 5px;margin:4px;\"/></a> <a href=\"https://github.com/AryeoHQ/aryeo-api-js-sdk\"><img src=\"https://raw.githubusercontent.com/AryeoHQ/aryeo-api-docs/master/public/images/js.svg\" alt=\"Node JS\" width=\"44\" style=\"padding:10px;border: 1px solid #d3d3d3;border-radius: 5px;margin:4px;\"/></a> <a href=\"https://github.com/AryeoHQ/aryeo-api-php-sdk\"><img src=\"https://raw.githubusercontent.com/AryeoHQ/aryeo-api-docs/master/public/images/php.svg\" alt=\"PHP\" width=\"44\" style=\"padding:10px;border: 1px solid #d3d3d3;border-radius: 5px;margin:4px;\"/></a> <a href=\"https://github.com/AryeoHQ/aryeo-api-ruby-sdk\"><img src=\"https://raw.githubusercontent.com/AryeoHQ/aryeo-api-docs/master/public/images/ruby.svg\" alt=\"Ruby\" width=\"44\" style=\"padding:10px;border: 1px solid #d3d3d3;border-radius: 5px;margin:4px;\"/></a> <a href=\"https://github.com/AryeoHQ/aryeo-api-rust-sdk\"><img src=\"https://raw.githubusercontent.com/AryeoHQ/aryeo-api-docs/master/public/images/rust.svg\" alt=\"Rust\" width=\"44\" style=\"padding:10px;border: 1px solid #d3d3d3;border-radius: 5px;margin:4px;\"/></a> <a href=\"https://github.com/AryeoHQ/aryeo-api-swift-sdk\"><img src=\"https://raw.githubusercontent.com/AryeoHQ/aryeo-api-docs/master/public/images/swift.svg\" alt=\"Swift\" width=\"44\" style=\"padding:10px;border: 1px solid #d3d3d3;border-radius: 5px;margin:4px;\"/></a> </p>  **Note**: Some SDKs may require you to manually add the `Accept` header to all Aryeo API requests. If so, use the value `application/json`.  # Authentication To start using the Aryeo API, you will need to generate an API key from your group's developer settings. You can then authenticate to the Aryeo API by providing your key in the appropriate request header. Requests made without an API key will result in a `401 Unauthorized` error.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: jarrod@aryeo.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Aryeo\Model;

use \ArrayAccess;
use \Aryeo\ObjectSerializer;

/**
 * GroupAgentProperties Class Doc Comment
 *
 * @category Class
 * @description A subset of group properties relevant to agents.
 * @package  Aryeo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GroupAgentProperties implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GroupAgentProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'brokerage_name' => 'string',
        'agent_license_number' => 'string',
        'agent_avatar' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'brokerage_name' => null,
        'agent_license_number' => null,
        'agent_avatar' => 'uri'
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
        'brokerage_name' => 'brokerage_name',
        'agent_license_number' => 'agent_license_number',
        'agent_avatar' => 'agent_avatar'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brokerage_name' => 'setBrokerageName',
        'agent_license_number' => 'setAgentLicenseNumber',
        'agent_avatar' => 'setAgentAvatar'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brokerage_name' => 'getBrokerageName',
        'agent_license_number' => 'getAgentLicenseNumber',
        'agent_avatar' => 'getAgentAvatar'
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
        $this->container['brokerage_name'] = $data['brokerage_name'] ?? null;
        $this->container['agent_license_number'] = $data['agent_license_number'] ?? null;
        $this->container['agent_avatar'] = $data['agent_avatar'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['brokerage_name']) && (mb_strlen($this->container['brokerage_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'brokerage_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['brokerage_name']) && (mb_strlen($this->container['brokerage_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'brokerage_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['agent_license_number']) && (mb_strlen($this->container['agent_license_number']) > 255)) {
            $invalidProperties[] = "invalid value for 'agent_license_number', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['agent_license_number']) && (mb_strlen($this->container['agent_license_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'agent_license_number', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['agent_avatar']) && (mb_strlen($this->container['agent_avatar']) > 255)) {
            $invalidProperties[] = "invalid value for 'agent_avatar', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['agent_avatar']) && (mb_strlen($this->container['agent_avatar']) < 0)) {
            $invalidProperties[] = "invalid value for 'agent_avatar', the character length must be bigger than or equal to 0.";
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
     * Gets brokerage_name
     *
     * @return string|null
     */
    public function getBrokerageName()
    {
        return $this->container['brokerage_name'];
    }

    /**
     * Sets brokerage_name
     *
     * @param string|null $brokerage_name Name of brokerage.
     *
     * @return self
     */
    public function setBrokerageName($brokerage_name)
    {
        if (!is_null($brokerage_name) && (mb_strlen($brokerage_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $brokerage_name when calling GroupAgentProperties., must be smaller than or equal to 255.');
        }
        if (!is_null($brokerage_name) && (mb_strlen($brokerage_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $brokerage_name when calling GroupAgentProperties., must be bigger than or equal to 0.');
        }

        $this->container['brokerage_name'] = $brokerage_name;

        return $this;
    }

    /**
     * Gets agent_license_number
     *
     * @return string|null
     */
    public function getAgentLicenseNumber()
    {
        return $this->container['agent_license_number'];
    }

    /**
     * Sets agent_license_number
     *
     * @param string|null $agent_license_number Agent's license number.
     *
     * @return self
     */
    public function setAgentLicenseNumber($agent_license_number)
    {
        if (!is_null($agent_license_number) && (mb_strlen($agent_license_number) > 255)) {
            throw new \InvalidArgumentException('invalid length for $agent_license_number when calling GroupAgentProperties., must be smaller than or equal to 255.');
        }
        if (!is_null($agent_license_number) && (mb_strlen($agent_license_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $agent_license_number when calling GroupAgentProperties., must be bigger than or equal to 0.');
        }

        $this->container['agent_license_number'] = $agent_license_number;

        return $this;
    }

    /**
     * Gets agent_avatar
     *
     * @return string|null
     */
    public function getAgentAvatar()
    {
        return $this->container['agent_avatar'];
    }

    /**
     * Sets agent_avatar
     *
     * @param string|null $agent_avatar Agent's profile image URL.
     *
     * @return self
     */
    public function setAgentAvatar($agent_avatar)
    {
        if (!is_null($agent_avatar) && (mb_strlen($agent_avatar) > 255)) {
            throw new \InvalidArgumentException('invalid length for $agent_avatar when calling GroupAgentProperties., must be smaller than or equal to 255.');
        }
        if (!is_null($agent_avatar) && (mb_strlen($agent_avatar) < 0)) {
            throw new \InvalidArgumentException('invalid length for $agent_avatar when calling GroupAgentProperties., must be bigger than or equal to 0.');
        }

        $this->container['agent_avatar'] = $agent_avatar;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

