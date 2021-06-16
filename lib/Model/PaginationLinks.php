<?php
/**
 * PaginationLinks
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
 * PaginationLinks Class Doc Comment
 *
 * @category Class
 * @description Related links for a paginated response.
 * @package  Aryeo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaginationLinks implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaginationLinks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'first' => 'string',
        'last' => 'string',
        'prev' => 'string',
        'next' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'first' => null,
        'last' => null,
        'prev' => null,
        'next' => null
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
        'first' => 'first',
        'last' => 'last',
        'prev' => 'prev',
        'next' => 'next'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first' => 'setFirst',
        'last' => 'setLast',
        'prev' => 'setPrev',
        'next' => 'setNext'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first' => 'getFirst',
        'last' => 'getLast',
        'prev' => 'getPrev',
        'next' => 'getNext'
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
        $this->container['first'] = $data['first'] ?? null;
        $this->container['last'] = $data['last'] ?? null;
        $this->container['prev'] = $data['prev'] ?? null;
        $this->container['next'] = $data['next'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['first'] === null) {
            $invalidProperties[] = "'first' can't be null";
        }
        if ((mb_strlen($this->container['first']) > 65535)) {
            $invalidProperties[] = "invalid value for 'first', the character length must be smaller than or equal to 65535.";
        }

        if ((mb_strlen($this->container['first']) < 1)) {
            $invalidProperties[] = "invalid value for 'first', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['last'] === null) {
            $invalidProperties[] = "'last' can't be null";
        }
        if ((mb_strlen($this->container['last']) > 65535)) {
            $invalidProperties[] = "invalid value for 'last', the character length must be smaller than or equal to 65535.";
        }

        if ((mb_strlen($this->container['last']) < 1)) {
            $invalidProperties[] = "invalid value for 'last', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['prev']) && (mb_strlen($this->container['prev']) > 65535)) {
            $invalidProperties[] = "invalid value for 'prev', the character length must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['prev']) && (mb_strlen($this->container['prev']) < 1)) {
            $invalidProperties[] = "invalid value for 'prev', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['next']) && (mb_strlen($this->container['next']) > 65535)) {
            $invalidProperties[] = "invalid value for 'next', the character length must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['next']) && (mb_strlen($this->container['next']) < 1)) {
            $invalidProperties[] = "invalid value for 'next', the character length must be bigger than or equal to 1.";
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
     * Gets first
     *
     * @return string
     */
    public function getFirst()
    {
        return $this->container['first'];
    }

    /**
     * Sets first
     *
     * @param string $first The first page.
     *
     * @return self
     */
    public function setFirst($first)
    {
        if ((mb_strlen($first) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $first when calling PaginationLinks., must be smaller than or equal to 65535.');
        }
        if ((mb_strlen($first) < 1)) {
            throw new \InvalidArgumentException('invalid length for $first when calling PaginationLinks., must be bigger than or equal to 1.');
        }

        $this->container['first'] = $first;

        return $this;
    }

    /**
     * Gets last
     *
     * @return string
     */
    public function getLast()
    {
        return $this->container['last'];
    }

    /**
     * Sets last
     *
     * @param string $last The last page.
     *
     * @return self
     */
    public function setLast($last)
    {
        if ((mb_strlen($last) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $last when calling PaginationLinks., must be smaller than or equal to 65535.');
        }
        if ((mb_strlen($last) < 1)) {
            throw new \InvalidArgumentException('invalid length for $last when calling PaginationLinks., must be bigger than or equal to 1.');
        }

        $this->container['last'] = $last;

        return $this;
    }

    /**
     * Gets prev
     *
     * @return string|null
     */
    public function getPrev()
    {
        return $this->container['prev'];
    }

    /**
     * Sets prev
     *
     * @param string|null $prev The previous page. This is specified as either `string` or `null` purely for contract testing purposes. The model which is autogenerated from this definition will be thrown out and written by-hand.
     *
     * @return self
     */
    public function setPrev($prev)
    {
        if (!is_null($prev) && (mb_strlen($prev) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $prev when calling PaginationLinks., must be smaller than or equal to 65535.');
        }
        if (!is_null($prev) && (mb_strlen($prev) < 1)) {
            throw new \InvalidArgumentException('invalid length for $prev when calling PaginationLinks., must be bigger than or equal to 1.');
        }

        $this->container['prev'] = $prev;

        return $this;
    }

    /**
     * Gets next
     *
     * @return string|null
     */
    public function getNext()
    {
        return $this->container['next'];
    }

    /**
     * Sets next
     *
     * @param string|null $next The next page. This is specified as either `string` or `null` purely for contract testing purposes. The model which is autogenerated from this definition will be thrown out and written by-hand.
     *
     * @return self
     */
    public function setNext($next)
    {
        if (!is_null($next) && (mb_strlen($next) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $next when calling PaginationLinks., must be smaller than or equal to 65535.');
        }
        if (!is_null($next) && (mb_strlen($next) < 1)) {
            throw new \InvalidArgumentException('invalid length for $next when calling PaginationLinks., must be bigger than or equal to 1.');
        }

        $this->container['next'] = $next;

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

