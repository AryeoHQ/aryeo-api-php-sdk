<?php
/**
 * InteractiveContent
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
 * InteractiveContent Class Doc Comment
 *
 * @category Class
 * @description A 3D virtual tour.
 * @package  Aryeo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InteractiveContent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InteractiveContent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'display_type' => 'string',
        'content_type' => 'string',
        'url' => 'string',
        'thumbnail_url' => 'string'
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
        'display_type' => null,
        'content_type' => null,
        'url' => 'uri',
        'thumbnail_url' => 'uri'
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
        'display_type' => 'display_type',
        'content_type' => 'content_type',
        'url' => 'url',
        'thumbnail_url' => 'thumbnail_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'display_type' => 'setDisplayType',
        'content_type' => 'setContentType',
        'url' => 'setUrl',
        'thumbnail_url' => 'setThumbnailUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'display_type' => 'getDisplayType',
        'content_type' => 'getContentType',
        'url' => 'getUrl',
        'thumbnail_url' => 'getThumbnailUrl'
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

    const DISPLAY_TYPE_BRANDED = 'BRANDED';
    const DISPLAY_TYPE_UNBRANDED = 'UNBRANDED';
    const DISPLAY_TYPE_BOTH = 'BOTH';
    const CONTENT_TYPE_MATTERPORT = 'MATTERPORT';
    const CONTENT_TYPE_OTHER = 'OTHER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDisplayTypeAllowableValues()
    {
        return [
            self::DISPLAY_TYPE_BRANDED,
            self::DISPLAY_TYPE_UNBRANDED,
            self::DISPLAY_TYPE_BOTH,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContentTypeAllowableValues()
    {
        return [
            self::CONTENT_TYPE_MATTERPORT,
            self::CONTENT_TYPE_OTHER,
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
        $this->container['display_type'] = $data['display_type'] ?? null;
        $this->container['content_type'] = $data['content_type'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['thumbnail_url'] = $data['thumbnail_url'] ?? null;
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

        if ($this->container['display_type'] === null) {
            $invalidProperties[] = "'display_type' can't be null";
        }
        $allowedValues = $this->getDisplayTypeAllowableValues();
        if (!is_null($this->container['display_type']) && !in_array($this->container['display_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'display_type', must be one of '%s'",
                $this->container['display_type'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['display_type']) > 65535)) {
            $invalidProperties[] = "invalid value for 'display_type', the character length must be smaller than or equal to 65535.";
        }

        if ((mb_strlen($this->container['display_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'display_type', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['content_type'] === null) {
            $invalidProperties[] = "'content_type' can't be null";
        }
        $allowedValues = $this->getContentTypeAllowableValues();
        if (!is_null($this->container['content_type']) && !in_array($this->container['content_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'content_type', must be one of '%s'",
                $this->container['content_type'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['content_type']) > 65535)) {
            $invalidProperties[] = "invalid value for 'content_type', the character length must be smaller than or equal to 65535.";
        }

        if ((mb_strlen($this->container['content_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'content_type', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ((mb_strlen($this->container['url']) > 65535)) {
            $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 65535.";
        }

        if ((mb_strlen($this->container['url']) < 1)) {
            $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['thumbnail_url']) && (mb_strlen($this->container['thumbnail_url']) > 65535)) {
            $invalidProperties[] = "invalid value for 'thumbnail_url', the character length must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['thumbnail_url']) && (mb_strlen($this->container['thumbnail_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'thumbnail_url', the character length must be bigger than or equal to 1.";
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
     * @param string $id ID of the content. UUID Version 4.
     *
     * @return self
     */
    public function setId($id)
    {
        if ((mb_strlen($id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $id when calling InteractiveContent., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id when calling InteractiveContent., must be bigger than or equal to 36.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets display_type
     *
     * @return string
     */
    public function getDisplayType()
    {
        return $this->container['display_type'];
    }

    /**
     * Sets display_type
     *
     * @param string $display_type Is the content branded, unbranded, or both?
     *
     * @return self
     */
    public function setDisplayType($display_type)
    {
        $allowedValues = $this->getDisplayTypeAllowableValues();
        if (!in_array($display_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'display_type', must be one of '%s'",
                    $display_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($display_type) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $display_type when calling InteractiveContent., must be smaller than or equal to 65535.');
        }
        if ((mb_strlen($display_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $display_type when calling InteractiveContent., must be bigger than or equal to 1.');
        }

        $this->container['display_type'] = $display_type;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param string $content_type The type of interactive content.
     *
     * @return self
     */
    public function setContentType($content_type)
    {
        $allowedValues = $this->getContentTypeAllowableValues();
        if (!in_array($content_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'content_type', must be one of '%s'",
                    $content_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($content_type) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $content_type when calling InteractiveContent., must be smaller than or equal to 65535.');
        }
        if ((mb_strlen($content_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $content_type when calling InteractiveContent., must be bigger than or equal to 1.');
        }

        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url URL for the content.
     *
     * @return self
     */
    public function setUrl($url)
    {
        if ((mb_strlen($url) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $url when calling InteractiveContent., must be smaller than or equal to 65535.');
        }
        if ((mb_strlen($url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $url when calling InteractiveContent., must be bigger than or equal to 1.');
        }

        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets thumbnail_url
     *
     * @return string|null
     */
    public function getThumbnailUrl()
    {
        return $this->container['thumbnail_url'];
    }

    /**
     * Sets thumbnail_url
     *
     * @param string|null $thumbnail_url A URL for a thumbnail-sized preview of the content.
     *
     * @return self
     */
    public function setThumbnailUrl($thumbnail_url)
    {
        if (!is_null($thumbnail_url) && (mb_strlen($thumbnail_url) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $thumbnail_url when calling InteractiveContent., must be smaller than or equal to 65535.');
        }
        if (!is_null($thumbnail_url) && (mb_strlen($thumbnail_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $thumbnail_url when calling InteractiveContent., must be bigger than or equal to 1.');
        }

        $this->container['thumbnail_url'] = $thumbnail_url;

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


