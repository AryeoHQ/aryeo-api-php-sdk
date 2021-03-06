<?php
/**
 * PropertyWebsite
 *
 * PHP version 7.3
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
 * PropertyWebsite Class Doc Comment
 *
 * @category Class
 * @description Website (in branded and unbranded versions) that displays information about a property.
 * @package  Aryeo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PropertyWebsite implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PropertyWebsite';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'branded_url' => 'string',
        'unbranded_url' => 'string'
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
        'branded_url' => 'uri',
        'unbranded_url' => 'uri'
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
        'branded_url' => 'branded_url',
        'unbranded_url' => 'unbranded_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'branded_url' => 'setBrandedUrl',
        'unbranded_url' => 'setUnbrandedUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'branded_url' => 'getBrandedUrl',
        'unbranded_url' => 'getUnbrandedUrl'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['branded_url'] = $data['branded_url'] ?? null;
        $this->container['unbranded_url'] = $data['unbranded_url'] ?? null;
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
        if ((mb_strlen($this->container['id']) > 36)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
        }

        if ((mb_strlen($this->container['id']) < 36)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
        }

        if ($this->container['branded_url'] === null) {
            $invalidProperties[] = "'branded_url' can't be null";
        }
        if ((mb_strlen($this->container['branded_url']) > 65535)) {
            $invalidProperties[] = "invalid value for 'branded_url', the character length must be smaller than or equal to 65535.";
        }

        if ((mb_strlen($this->container['branded_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'branded_url', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['unbranded_url'] === null) {
            $invalidProperties[] = "'unbranded_url' can't be null";
        }
        if ((mb_strlen($this->container['unbranded_url']) > 65535)) {
            $invalidProperties[] = "invalid value for 'unbranded_url', the character length must be smaller than or equal to 65535.";
        }

        if ((mb_strlen($this->container['unbranded_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'unbranded_url', the character length must be bigger than or equal to 1.";
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
     * @param string $id ID of the website. UUID Version 4.
     *
     * @return self
     */
    public function setId($id)
    {
        if ((mb_strlen($id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $id when calling PropertyWebsite., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id when calling PropertyWebsite., must be bigger than or equal to 36.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets branded_url
     *
     * @return string
     */
    public function getBrandedUrl()
    {
        return $this->container['branded_url'];
    }

    /**
     * Sets branded_url
     *
     * @param string $branded_url URL for branded version of website.
     *
     * @return self
     */
    public function setBrandedUrl($branded_url)
    {
        if ((mb_strlen($branded_url) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $branded_url when calling PropertyWebsite., must be smaller than or equal to 65535.');
        }
        if ((mb_strlen($branded_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $branded_url when calling PropertyWebsite., must be bigger than or equal to 1.');
        }

        $this->container['branded_url'] = $branded_url;

        return $this;
    }

    /**
     * Gets unbranded_url
     *
     * @return string
     */
    public function getUnbrandedUrl()
    {
        return $this->container['unbranded_url'];
    }

    /**
     * Sets unbranded_url
     *
     * @param string $unbranded_url URL for unbranded version of website.
     *
     * @return self
     */
    public function setUnbrandedUrl($unbranded_url)
    {
        if ((mb_strlen($unbranded_url) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $unbranded_url when calling PropertyWebsite., must be smaller than or equal to 65535.');
        }
        if ((mb_strlen($unbranded_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $unbranded_url when calling PropertyWebsite., must be bigger than or equal to 1.');
        }

        $this->container['unbranded_url'] = $unbranded_url;

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


