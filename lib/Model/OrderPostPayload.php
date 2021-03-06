<?php
/**
 * OrderPostPayload
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
 * OrderPostPayload Class Doc Comment
 *
 * @category Class
 * @description Payload for creating an order.
 * @package  Aryeo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderPostPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderPostPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fulfillment_status' => 'string',
        'internal_notes' => 'string',
        'address_id' => 'string',
        'customer_id' => 'string',
        'notify' => 'bool',
        'lock_download_for_payment' => 'bool',
        'allow_payments_before_fulfillment' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fulfillment_status' => null,
        'internal_notes' => null,
        'address_id' => 'uuid',
        'customer_id' => 'uuid',
        'notify' => null,
        'lock_download_for_payment' => null,
        'allow_payments_before_fulfillment' => null
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
        'fulfillment_status' => 'fulfillment_status',
        'internal_notes' => 'internal_notes',
        'address_id' => 'address_id',
        'customer_id' => 'customer_id',
        'notify' => 'notify',
        'lock_download_for_payment' => 'lock_download_for_payment',
        'allow_payments_before_fulfillment' => 'allow_payments_before_fulfillment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fulfillment_status' => 'setFulfillmentStatus',
        'internal_notes' => 'setInternalNotes',
        'address_id' => 'setAddressId',
        'customer_id' => 'setCustomerId',
        'notify' => 'setNotify',
        'lock_download_for_payment' => 'setLockDownloadForPayment',
        'allow_payments_before_fulfillment' => 'setAllowPaymentsBeforeFulfillment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fulfillment_status' => 'getFulfillmentStatus',
        'internal_notes' => 'getInternalNotes',
        'address_id' => 'getAddressId',
        'customer_id' => 'getCustomerId',
        'notify' => 'getNotify',
        'lock_download_for_payment' => 'getLockDownloadForPayment',
        'allow_payments_before_fulfillment' => 'getAllowPaymentsBeforeFulfillment'
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

    const FULFILLMENT_STATUS_FULFILLED = 'FULFILLED';
    const FULFILLMENT_STATUS_UNFULFILLED = 'UNFULFILLED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFulfillmentStatusAllowableValues()
    {
        return [
            self::FULFILLMENT_STATUS_FULFILLED,
            self::FULFILLMENT_STATUS_UNFULFILLED,
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
        $this->container['fulfillment_status'] = $data['fulfillment_status'] ?? null;
        $this->container['internal_notes'] = $data['internal_notes'] ?? null;
        $this->container['address_id'] = $data['address_id'] ?? null;
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['notify'] = $data['notify'] ?? null;
        $this->container['lock_download_for_payment'] = $data['lock_download_for_payment'] ?? null;
        $this->container['allow_payments_before_fulfillment'] = $data['allow_payments_before_fulfillment'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFulfillmentStatusAllowableValues();
        if (!is_null($this->container['fulfillment_status']) && !in_array($this->container['fulfillment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fulfillment_status', must be one of '%s'",
                $this->container['fulfillment_status'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['fulfillment_status']) && (mb_strlen($this->container['fulfillment_status']) > 255)) {
            $invalidProperties[] = "invalid value for 'fulfillment_status', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['fulfillment_status']) && (mb_strlen($this->container['fulfillment_status']) < 0)) {
            $invalidProperties[] = "invalid value for 'fulfillment_status', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['internal_notes']) && (mb_strlen($this->container['internal_notes']) > 2550)) {
            $invalidProperties[] = "invalid value for 'internal_notes', the character length must be smaller than or equal to 2550.";
        }

        if (!is_null($this->container['internal_notes']) && (mb_strlen($this->container['internal_notes']) < 0)) {
            $invalidProperties[] = "invalid value for 'internal_notes', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['address_id']) && (mb_strlen($this->container['address_id']) > 36)) {
            $invalidProperties[] = "invalid value for 'address_id', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['address_id']) && (mb_strlen($this->container['address_id']) < 36)) {
            $invalidProperties[] = "invalid value for 'address_id', the character length must be bigger than or equal to 36.";
        }

        if (!is_null($this->container['customer_id']) && (mb_strlen($this->container['customer_id']) > 36)) {
            $invalidProperties[] = "invalid value for 'customer_id', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['customer_id']) && (mb_strlen($this->container['customer_id']) < 36)) {
            $invalidProperties[] = "invalid value for 'customer_id', the character length must be bigger than or equal to 36.";
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
     * Gets fulfillment_status
     *
     * @return string|null
     */
    public function getFulfillmentStatus()
    {
        return $this->container['fulfillment_status'];
    }

    /**
     * Sets fulfillment_status
     *
     * @param string|null $fulfillment_status The fulfillment status of the order. Defaults to \"UNFULFILLED\".
     *
     * @return self
     */
    public function setFulfillmentStatus($fulfillment_status)
    {
        $allowedValues = $this->getFulfillmentStatusAllowableValues();
        if (!is_null($fulfillment_status) && !in_array($fulfillment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fulfillment_status', must be one of '%s'",
                    $fulfillment_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($fulfillment_status) && (mb_strlen($fulfillment_status) > 255)) {
            throw new \InvalidArgumentException('invalid length for $fulfillment_status when calling OrderPostPayload., must be smaller than or equal to 255.');
        }
        if (!is_null($fulfillment_status) && (mb_strlen($fulfillment_status) < 0)) {
            throw new \InvalidArgumentException('invalid length for $fulfillment_status when calling OrderPostPayload., must be bigger than or equal to 0.');
        }

        $this->container['fulfillment_status'] = $fulfillment_status;

        return $this;
    }

    /**
     * Gets internal_notes
     *
     * @return string|null
     */
    public function getInternalNotes()
    {
        return $this->container['internal_notes'];
    }

    /**
     * Sets internal_notes
     *
     * @param string|null $internal_notes Internal notes that will be attached to the order. Viewable only by the team.
     *
     * @return self
     */
    public function setInternalNotes($internal_notes)
    {
        if (!is_null($internal_notes) && (mb_strlen($internal_notes) > 2550)) {
            throw new \InvalidArgumentException('invalid length for $internal_notes when calling OrderPostPayload., must be smaller than or equal to 2550.');
        }
        if (!is_null($internal_notes) && (mb_strlen($internal_notes) < 0)) {
            throw new \InvalidArgumentException('invalid length for $internal_notes when calling OrderPostPayload., must be bigger than or equal to 0.');
        }

        $this->container['internal_notes'] = $internal_notes;

        return $this;
    }

    /**
     * Gets address_id
     *
     * @return string|null
     */
    public function getAddressId()
    {
        return $this->container['address_id'];
    }

    /**
     * Sets address_id
     *
     * @param string|null $address_id ID of the address to associate with the order. UUID Version 4.
     *
     * @return self
     */
    public function setAddressId($address_id)
    {
        if (!is_null($address_id) && (mb_strlen($address_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $address_id when calling OrderPostPayload., must be smaller than or equal to 36.');
        }
        if (!is_null($address_id) && (mb_strlen($address_id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $address_id when calling OrderPostPayload., must be bigger than or equal to 36.');
        }

        $this->container['address_id'] = $address_id;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string|null $customer_id ID of the customer to associate with the order. UUID Version 4.
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        if (!is_null($customer_id) && (mb_strlen($customer_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $customer_id when calling OrderPostPayload., must be smaller than or equal to 36.');
        }
        if (!is_null($customer_id) && (mb_strlen($customer_id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $customer_id when calling OrderPostPayload., must be bigger than or equal to 36.');
        }

        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets notify
     *
     * @return bool|null
     */
    public function getNotify()
    {
        return $this->container['notify'];
    }

    /**
     * Sets notify
     *
     * @param bool|null $notify Indicates if the customer and creator notifications should be sent when creating the order. Requires an address and customer to be set in order for the notifications to be sent.
     *
     * @return self
     */
    public function setNotify($notify)
    {
        $this->container['notify'] = $notify;

        return $this;
    }

    /**
     * Gets lock_download_for_payment
     *
     * @return bool|null
     */
    public function getLockDownloadForPayment()
    {
        return $this->container['lock_download_for_payment'];
    }

    /**
     * Sets lock_download_for_payment
     *
     * @param bool|null $lock_download_for_payment Indicates if the downloads for the attached listing should be locked while there is an outstanding balance on the order.
     *
     * @return self
     */
    public function setLockDownloadForPayment($lock_download_for_payment)
    {
        $this->container['lock_download_for_payment'] = $lock_download_for_payment;

        return $this;
    }

    /**
     * Gets allow_payments_before_fulfillment
     *
     * @return bool|null
     */
    public function getAllowPaymentsBeforeFulfillment()
    {
        return $this->container['allow_payments_before_fulfillment'];
    }

    /**
     * Sets allow_payments_before_fulfillment
     *
     * @param bool|null $allow_payments_before_fulfillment Indicates if the order will allow payments from the customer before the order is marked as fulfilled.
     *
     * @return self
     */
    public function setAllowPaymentsBeforeFulfillment($allow_payments_before_fulfillment)
    {
        $this->container['allow_payments_before_fulfillment'] = $allow_payments_before_fulfillment;

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


