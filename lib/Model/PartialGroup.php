<?php
/**
 * PartialGroup
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
 * Contact: jarrod@aryeo.com
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
 * PartialGroup Class Doc Comment
 *
 * @category Class
 * @description A collection of users that can interact with the Aryeo platform. Permissions and properties are determined based on the type which can be creator, agent, or brokerage.
 * @package  Aryeo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PartialGroup implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PartialGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'group_type' => 'string',
        'name' => 'string',
        'logo' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'is_brokerage_or_brokerage_agent' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'group_type' => null,
        'name' => null,
        'logo' => 'uri',
        'email' => 'email',
        'phone' => null,
        'is_brokerage_or_brokerage_agent' => null
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
        'id' => 'id',
        'group_type' => 'group_type',
        'name' => 'name',
        'logo' => 'logo',
        'email' => 'email',
        'phone' => 'phone',
        'is_brokerage_or_brokerage_agent' => 'is_brokerage_or_brokerage_agent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'group_type' => 'setGroupType',
        'name' => 'setName',
        'logo' => 'setLogo',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'is_brokerage_or_brokerage_agent' => 'setIsBrokerageOrBrokerageAgent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'group_type' => 'getGroupType',
        'name' => 'getName',
        'logo' => 'getLogo',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'is_brokerage_or_brokerage_agent' => 'getIsBrokerageOrBrokerageAgent'
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

    const GROUP_TYPE_CREATOR = 'creator';
    const GROUP_TYPE_AGENT = 'agent';
    const GROUP_TYPE_BROKERAGE = 'brokerage';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGroupTypeAllowableValues()
    {
        return [
            self::GROUP_TYPE_CREATOR,
            self::GROUP_TYPE_AGENT,
            self::GROUP_TYPE_BROKERAGE,
        ];
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['group_type'] = $data['group_type'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['logo'] = $data['logo'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['is_brokerage_or_brokerage_agent'] = $data['is_brokerage_or_brokerage_agent'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ((mb_strlen($this->container['id']) > 255)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['id']) < 0)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['group_type'] === null) {
            $invalidProperties[] = "'group_type' can't be null";
        }
        $allowedValues = $this->getGroupTypeAllowableValues();
        if (!is_null($this->container['group_type']) && !in_array($this->container['group_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'group_type', must be one of '%s'",
                $this->container['group_type'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['group_type']) > 255)) {
            $invalidProperties[] = "invalid value for 'group_type', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['group_type']) < 0)) {
            $invalidProperties[] = "invalid value for 'group_type', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['logo']) && (mb_strlen($this->container['logo']) > 255)) {
            $invalidProperties[] = "invalid value for 'logo', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['logo']) && (mb_strlen($this->container['logo']) < 0)) {
            $invalidProperties[] = "invalid value for 'logo', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 255)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 0)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 255)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) < 0)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['is_brokerage_or_brokerage_agent'] === null) {
            $invalidProperties[] = "'is_brokerage_or_brokerage_agent' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id ID of the group.
     *
     * @return self
     */
    public function setId($id)
    {
        if ((mb_strlen($id) > 255)) {
            throw new \InvalidArgumentException('invalid length for $id when calling PartialGroup., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($id) < 0)) {
            throw new \InvalidArgumentException('invalid length for $id when calling PartialGroup., must be bigger than or equal to 0.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets group_type
     *
     * @return string
     */
    public function getGroupType()
    {
        return $this->container['group_type'];
    }

    /**
     * Sets group_type
     *
     * @param string $group_type The type of group.
     *
     * @return self
     */
    public function setGroupType($group_type)
    {
        $allowedValues = $this->getGroupTypeAllowableValues();
        if (!in_array($group_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'group_type', must be one of '%s'",
                    $group_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($group_type) > 255)) {
            throw new \InvalidArgumentException('invalid length for $group_type when calling PartialGroup., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($group_type) < 0)) {
            throw new \InvalidArgumentException('invalid length for $group_type when calling PartialGroup., must be bigger than or equal to 0.');
        }

        $this->container['group_type'] = $group_type;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the group.
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PartialGroup., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PartialGroup., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string|null $logo Group logo.
     *
     * @return self
     */
    public function setLogo($logo)
    {
        if (!is_null($logo) && (mb_strlen($logo) > 255)) {
            throw new \InvalidArgumentException('invalid length for $logo when calling PartialGroup., must be smaller than or equal to 255.');
        }
        if (!is_null($logo) && (mb_strlen($logo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $logo when calling PartialGroup., must be bigger than or equal to 0.');
        }

        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Email.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 255)) {
            throw new \InvalidArgumentException('invalid length for $email when calling PartialGroup., must be smaller than or equal to 255.');
        }
        if (!is_null($email) && (mb_strlen($email) < 0)) {
            throw new \InvalidArgumentException('invalid length for $email when calling PartialGroup., must be bigger than or equal to 0.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone Phone number.
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (!is_null($phone) && (mb_strlen($phone) > 255)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling PartialGroup., must be smaller than or equal to 255.');
        }
        if (!is_null($phone) && (mb_strlen($phone) < 0)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling PartialGroup., must be bigger than or equal to 0.');
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets is_brokerage_or_brokerage_agent
     *
     * @return bool
     */
    public function getIsBrokerageOrBrokerageAgent()
    {
        return $this->container['is_brokerage_or_brokerage_agent'];
    }

    /**
     * Sets is_brokerage_or_brokerage_agent
     *
     * @param bool $is_brokerage_or_brokerage_agent Does this group represent a brokerage or an agent who belongs to a brokerage?
     *
     * @return self
     */
    public function setIsBrokerageOrBrokerageAgent($is_brokerage_or_brokerage_agent)
    {
        $this->container['is_brokerage_or_brokerage_agent'] = $is_brokerage_or_brokerage_agent;

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


