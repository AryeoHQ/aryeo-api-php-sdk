<?php
/**
 * Image
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
 * Image Class Doc Comment
 *
 * @category Class
 * @description A visual representation of something.
 * @package  Aryeo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Image implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Image';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'thumbnail_url' => 'string',
        'large_url' => 'string',
        'original_url' => 'string',
        'index' => 'int',
        'caption' => 'string',
        'display_in_gallery' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'thumbnail_url' => 'uri',
        'large_url' => 'uri',
        'original_url' => 'uri',
        'index' => null,
        'caption' => null,
        'display_in_gallery' => null
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
        'thumbnail_url' => 'thumbnail_url',
        'large_url' => 'large_url',
        'original_url' => 'original_url',
        'index' => 'index',
        'caption' => 'caption',
        'display_in_gallery' => 'display_in_gallery'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'thumbnail_url' => 'setThumbnailUrl',
        'large_url' => 'setLargeUrl',
        'original_url' => 'setOriginalUrl',
        'index' => 'setIndex',
        'caption' => 'setCaption',
        'display_in_gallery' => 'setDisplayInGallery'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'thumbnail_url' => 'getThumbnailUrl',
        'large_url' => 'getLargeUrl',
        'original_url' => 'getOriginalUrl',
        'index' => 'getIndex',
        'caption' => 'getCaption',
        'display_in_gallery' => 'getDisplayInGallery'
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
        $this->container['thumbnail_url'] = $data['thumbnail_url'] ?? null;
        $this->container['large_url'] = $data['large_url'] ?? null;
        $this->container['original_url'] = $data['original_url'] ?? null;
        $this->container['index'] = $data['index'] ?? null;
        $this->container['caption'] = $data['caption'] ?? null;
        $this->container['display_in_gallery'] = $data['display_in_gallery'] ?? null;
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
        if ($this->container['thumbnail_url'] === null) {
            $invalidProperties[] = "'thumbnail_url' can't be null";
        }
        if ((mb_strlen($this->container['thumbnail_url']) > 65535)) {
            $invalidProperties[] = "invalid value for 'thumbnail_url', the character length must be smaller than or equal to 65535.";
        }

        if ((mb_strlen($this->container['thumbnail_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'thumbnail_url', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['large_url'] === null) {
            $invalidProperties[] = "'large_url' can't be null";
        }
        if ((mb_strlen($this->container['large_url']) > 65535)) {
            $invalidProperties[] = "invalid value for 'large_url', the character length must be smaller than or equal to 65535.";
        }

        if ((mb_strlen($this->container['large_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'large_url', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['original_url'] === null) {
            $invalidProperties[] = "'original_url' can't be null";
        }
        if ((mb_strlen($this->container['original_url']) > 65535)) {
            $invalidProperties[] = "invalid value for 'original_url', the character length must be smaller than or equal to 65535.";
        }

        if ((mb_strlen($this->container['original_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'original_url', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['caption']) && (mb_strlen($this->container['caption']) > 255)) {
            $invalidProperties[] = "invalid value for 'caption', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['caption']) && (mb_strlen($this->container['caption']) < 1)) {
            $invalidProperties[] = "invalid value for 'caption', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['display_in_gallery'] === null) {
            $invalidProperties[] = "'display_in_gallery' can't be null";
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id ID of the image.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets thumbnail_url
     *
     * @return string
     */
    public function getThumbnailUrl()
    {
        return $this->container['thumbnail_url'];
    }

    /**
     * Sets thumbnail_url
     *
     * @param string $thumbnail_url A URL for a thumbnail-sized version of the image.
     *
     * @return self
     */
    public function setThumbnailUrl($thumbnail_url)
    {
        if ((mb_strlen($thumbnail_url) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $thumbnail_url when calling Image., must be smaller than or equal to 65535.');
        }
        if ((mb_strlen($thumbnail_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $thumbnail_url when calling Image., must be bigger than or equal to 1.');
        }

        $this->container['thumbnail_url'] = $thumbnail_url;

        return $this;
    }

    /**
     * Gets large_url
     *
     * @return string
     */
    public function getLargeUrl()
    {
        return $this->container['large_url'];
    }

    /**
     * Sets large_url
     *
     * @param string $large_url A URL for a large version of the image.
     *
     * @return self
     */
    public function setLargeUrl($large_url)
    {
        if ((mb_strlen($large_url) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $large_url when calling Image., must be smaller than or equal to 65535.');
        }
        if ((mb_strlen($large_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $large_url when calling Image., must be bigger than or equal to 1.');
        }

        $this->container['large_url'] = $large_url;

        return $this;
    }

    /**
     * Gets original_url
     *
     * @return string
     */
    public function getOriginalUrl()
    {
        return $this->container['original_url'];
    }

    /**
     * Sets original_url
     *
     * @param string $original_url A URL for the original, full-resolution version of the image. Useful for downloading.
     *
     * @return self
     */
    public function setOriginalUrl($original_url)
    {
        if ((mb_strlen($original_url) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $original_url when calling Image., must be smaller than or equal to 65535.');
        }
        if ((mb_strlen($original_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $original_url when calling Image., must be bigger than or equal to 1.');
        }

        $this->container['original_url'] = $original_url;

        return $this;
    }

    /**
     * Gets index
     *
     * @return int|null
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int|null $index The order in which the image should be displayed amongst other related images.
     *
     * @return self
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets caption
     *
     * @return string|null
     */
    public function getCaption()
    {
        return $this->container['caption'];
    }

    /**
     * Sets caption
     *
     * @param string|null $caption A brief explanation of the image.
     *
     * @return self
     */
    public function setCaption($caption)
    {
        if (!is_null($caption) && (mb_strlen($caption) > 255)) {
            throw new \InvalidArgumentException('invalid length for $caption when calling Image., must be smaller than or equal to 255.');
        }
        if (!is_null($caption) && (mb_strlen($caption) < 1)) {
            throw new \InvalidArgumentException('invalid length for $caption when calling Image., must be bigger than or equal to 1.');
        }

        $this->container['caption'] = $caption;

        return $this;
    }

    /**
     * Gets display_in_gallery
     *
     * @return bool
     */
    public function getDisplayInGallery()
    {
        return $this->container['display_in_gallery'];
    }

    /**
     * Sets display_in_gallery
     *
     * @param bool $display_in_gallery Should the image be displayed in a gallery?
     *
     * @return self
     */
    public function setDisplayInGallery($display_in_gallery)
    {
        $this->container['display_in_gallery'] = $display_in_gallery;

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


