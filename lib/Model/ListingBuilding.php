<?php
/**
 * ListingBuilding
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
 * ListingBuilding Class Doc Comment
 *
 * @category Class
 * @description Structural data of the primary building on a listing. Includes everything from square footage of certain spaces to construction dates.
 * @package  Aryeo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ListingBuilding implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListingBuilding';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bedrooms' => 'int',
        'bathrooms' => 'float',
        'square_feet' => 'float',
        'year_built' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bedrooms' => null,
        'bathrooms' => null,
        'square_feet' => null,
        'year_built' => null
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
        'bedrooms' => 'bedrooms',
        'bathrooms' => 'bathrooms',
        'square_feet' => 'square_feet',
        'year_built' => 'year_built'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bedrooms' => 'setBedrooms',
        'bathrooms' => 'setBathrooms',
        'square_feet' => 'setSquareFeet',
        'year_built' => 'setYearBuilt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bedrooms' => 'getBedrooms',
        'bathrooms' => 'getBathrooms',
        'square_feet' => 'getSquareFeet',
        'year_built' => 'getYearBuilt'
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
        $this->container['bedrooms'] = $data['bedrooms'] ?? null;
        $this->container['bathrooms'] = $data['bathrooms'] ?? null;
        $this->container['square_feet'] = $data['square_feet'] ?? null;
        $this->container['year_built'] = $data['year_built'] ?? null;
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
     * Gets bedrooms
     *
     * @return int|null
     */
    public function getBedrooms()
    {
        return $this->container['bedrooms'];
    }

    /**
     * Sets bedrooms
     *
     * @param int|null $bedrooms Total number of bedrooms.
     *
     * @return self
     */
    public function setBedrooms($bedrooms)
    {
        $this->container['bedrooms'] = $bedrooms;

        return $this;
    }

    /**
     * Gets bathrooms
     *
     * @return float|null
     */
    public function getBathrooms()
    {
        return $this->container['bathrooms'];
    }

    /**
     * Sets bathrooms
     *
     * @param float|null $bathrooms Sum of the number of bathrooms. Represented as a number in order to support half-baths.
     *
     * @return self
     */
    public function setBathrooms($bathrooms)
    {
        $this->container['bathrooms'] = $bathrooms;

        return $this;
    }

    /**
     * Gets square_feet
     *
     * @return float|null
     */
    public function getSquareFeet()
    {
        return $this->container['square_feet'];
    }

    /**
     * Sets square_feet
     *
     * @param float|null $square_feet Total number of square feet.
     *
     * @return self
     */
    public function setSquareFeet($square_feet)
    {
        $this->container['square_feet'] = $square_feet;

        return $this;
    }

    /**
     * Gets year_built
     *
     * @return int|null
     */
    public function getYearBuilt()
    {
        return $this->container['year_built'];
    }

    /**
     * Sets year_built
     *
     * @param int|null $year_built Year the property was built.
     *
     * @return self
     */
    public function setYearBuilt($year_built)
    {
        $this->container['year_built'] = $year_built;

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


