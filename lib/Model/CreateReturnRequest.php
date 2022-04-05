<?php
/**
 * CreateReturnRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  ServeXS\BolRetailer\v7
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * v7 - Retailer API
 *
 * The bol.com API for retailers.
 *
 * The version of the OpenAPI document: 7.x
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ServeXS\BolRetailer\v7\Model;

use \ArrayAccess;
use \ServeXS\BolRetailer\v7\ObjectSerializer;

/**
 * CreateReturnRequest Class Doc Comment
 *
 * @category Class
 * @package  ServeXS\BolRetailer\v7
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateReturnRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateReturnRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order_item_id' => 'string',
        'quantity_returned' => 'int',
        'handling_result' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'order_item_id' => null,
        'quantity_returned' => 'int32',
        'handling_result' => null
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
        'order_item_id' => 'orderItemId',
        'quantity_returned' => 'quantityReturned',
        'handling_result' => 'handlingResult'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_item_id' => 'setOrderItemId',
        'quantity_returned' => 'setQuantityReturned',
        'handling_result' => 'setHandlingResult'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_item_id' => 'getOrderItemId',
        'quantity_returned' => 'getQuantityReturned',
        'handling_result' => 'getHandlingResult'
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

    const HANDLING_RESULT_RETURN_RECEIVED = 'RETURN_RECEIVED';
    const HANDLING_RESULT_EXCHANGE_PRODUCT = 'EXCHANGE_PRODUCT';
    const HANDLING_RESULT_RETURN_DOES_NOT_MEET_CONDITIONS = 'RETURN_DOES_NOT_MEET_CONDITIONS';
    const HANDLING_RESULT_REPAIR_PRODUCT = 'REPAIR_PRODUCT';
    const HANDLING_RESULT_CUSTOMER_KEEPS_PRODUCT_PAID = 'CUSTOMER_KEEPS_PRODUCT_PAID';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHandlingResultAllowableValues()
    {
        return [
            self::HANDLING_RESULT_RETURN_RECEIVED,
            self::HANDLING_RESULT_EXCHANGE_PRODUCT,
            self::HANDLING_RESULT_RETURN_DOES_NOT_MEET_CONDITIONS,
            self::HANDLING_RESULT_REPAIR_PRODUCT,
            self::HANDLING_RESULT_CUSTOMER_KEEPS_PRODUCT_PAID,
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
        $this->container['order_item_id'] = $data['order_item_id'] ?? null;
        $this->container['quantity_returned'] = $data['quantity_returned'] ?? null;
        $this->container['handling_result'] = $data['handling_result'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['order_item_id'] === null) {
            $invalidProperties[] = "'order_item_id' can't be null";
        }
        if ($this->container['quantity_returned'] === null) {
            $invalidProperties[] = "'quantity_returned' can't be null";
        }
        if (($this->container['quantity_returned'] > 9999)) {
            $invalidProperties[] = "invalid value for 'quantity_returned', must be smaller than or equal to 9999.";
        }

        if (($this->container['quantity_returned'] < 1)) {
            $invalidProperties[] = "invalid value for 'quantity_returned', must be bigger than or equal to 1.";
        }

        if ($this->container['handling_result'] === null) {
            $invalidProperties[] = "'handling_result' can't be null";
        }
        $allowedValues = $this->getHandlingResultAllowableValues();
        if (!is_null($this->container['handling_result']) && !in_array($this->container['handling_result'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'handling_result', must be one of '%s'",
                $this->container['handling_result'],
                implode("', '", $allowedValues)
            );
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
     * Gets order_item_id
     *
     * @return string
     */
    public function getOrderItemId()
    {
        return $this->container['order_item_id'];
    }

    /**
     * Sets order_item_id
     *
     * @param string $order_item_id The id for the order item. One order can have multiple order items, but the list can only take one item.
     *
     * @return self
     */
    public function setOrderItemId($order_item_id)
    {
        $this->container['order_item_id'] = $order_item_id;

        return $this;
    }

    /**
     * Gets quantity_returned
     *
     * @return int
     */
    public function getQuantityReturned()
    {
        return $this->container['quantity_returned'];
    }

    /**
     * Sets quantity_returned
     *
     * @param int $quantity_returned The quantity of items returned.
     *
     * @return self
     */
    public function setQuantityReturned($quantity_returned)
    {

        if (($quantity_returned > 9999)) {
            throw new \InvalidArgumentException('invalid value for $quantity_returned when calling CreateReturnRequest., must be smaller than or equal to 9999.');
        }
        if (($quantity_returned < 1)) {
            throw new \InvalidArgumentException('invalid value for $quantity_returned when calling CreateReturnRequest., must be bigger than or equal to 1.');
        }

        $this->container['quantity_returned'] = $quantity_returned;

        return $this;
    }

    /**
     * Gets handling_result
     *
     * @return string
     */
    public function getHandlingResult()
    {
        return $this->container['handling_result'];
    }

    /**
     * Sets handling_result
     *
     * @param string $handling_result The handling result requested by the retailer.
     *
     * @return self
     */
    public function setHandlingResult($handling_result)
    {
        $allowedValues = $this->getHandlingResultAllowableValues();
        if (!in_array($handling_result, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'handling_result', must be one of '%s'",
                    $handling_result,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['handling_result'] = $handling_result;

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


