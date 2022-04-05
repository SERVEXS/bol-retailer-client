<?php
/**
 * ShipmentRequest
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
 * OpenAPI Generator version: 5.2.1
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
 * ShipmentRequest Class Doc Comment
 *
 * @category Class
 * @package  ServeXS\BolRetailer\v7
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ShipmentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order_items' => '\ServeXS\BolRetailer\v7\Model\OrderItem[]',
        'shipment_reference' => 'string',
        'shipping_label_id' => 'string',
        'transport' => '\ServeXS\BolRetailer\v7\Model\TransportInstruction'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'order_items' => null,
        'shipment_reference' => null,
        'shipping_label_id' => null,
        'transport' => null
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
        'order_items' => 'orderItems',
        'shipment_reference' => 'shipmentReference',
        'shipping_label_id' => 'shippingLabelId',
        'transport' => 'transport'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_items' => 'setOrderItems',
        'shipment_reference' => 'setShipmentReference',
        'shipping_label_id' => 'setShippingLabelId',
        'transport' => 'setTransport'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_items' => 'getOrderItems',
        'shipment_reference' => 'getShipmentReference',
        'shipping_label_id' => 'getShippingLabelId',
        'transport' => 'getTransport'
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
        $this->container['order_items'] = $data['order_items'] ?? null;
        $this->container['shipment_reference'] = $data['shipment_reference'] ?? null;
        $this->container['shipping_label_id'] = $data['shipping_label_id'] ?? null;
        $this->container['transport'] = $data['transport'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['order_items'] === null) {
            $invalidProperties[] = "'order_items' can't be null";
        }
        if ((count($this->container['order_items']) > 1)) {
            $invalidProperties[] = "invalid value for 'order_items', number of items must be less than or equal to 1.";
        }

        if ((count($this->container['order_items']) < 1)) {
            $invalidProperties[] = "invalid value for 'order_items', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['shipment_reference']) && (mb_strlen($this->container['shipment_reference']) > 90)) {
            $invalidProperties[] = "invalid value for 'shipment_reference', the character length must be smaller than or equal to 90.";
        }

        if (!is_null($this->container['shipment_reference']) && (mb_strlen($this->container['shipment_reference']) < 0)) {
            $invalidProperties[] = "invalid value for 'shipment_reference', the character length must be bigger than or equal to 0.";
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
     * Gets order_items
     *
     * @return \ServeXS\BolRetailer\v7\Model\OrderItem[]
     */
    public function getOrderItems()
    {
        return $this->container['order_items'];
    }

    /**
     * Sets order_items
     *
     * @param \ServeXS\BolRetailer\v7\Model\OrderItem[] $order_items Single element list with the order item to ship.
     *
     * @return self
     */
    public function setOrderItems($order_items)
    {

        if ((count($order_items) > 1)) {
            throw new \InvalidArgumentException('invalid value for $order_items when calling ShipmentRequest., number of items must be less than or equal to 1.');
        }
        if ((count($order_items) < 1)) {
            throw new \InvalidArgumentException('invalid length for $order_items when calling ShipmentRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['order_items'] = $order_items;

        return $this;
    }

    /**
     * Gets shipment_reference
     *
     * @return string|null
     */
    public function getShipmentReference()
    {
        return $this->container['shipment_reference'];
    }

    /**
     * Sets shipment_reference
     *
     * @param string|null $shipment_reference A user-defined reference that you can provide to add to the shipment. Can be used for own administration purposes. Only 'null' or non-empty strings accepted.
     *
     * @return self
     */
    public function setShipmentReference($shipment_reference)
    {
        if (!is_null($shipment_reference) && (mb_strlen($shipment_reference) > 90)) {
            throw new \InvalidArgumentException('invalid length for $shipment_reference when calling ShipmentRequest., must be smaller than or equal to 90.');
        }
        if (!is_null($shipment_reference) && (mb_strlen($shipment_reference) < 0)) {
            throw new \InvalidArgumentException('invalid length for $shipment_reference when calling ShipmentRequest., must be bigger than or equal to 0.');
        }

        $this->container['shipment_reference'] = $shipment_reference;

        return $this;
    }

    /**
     * Gets shipping_label_id
     *
     * @return string|null
     */
    public function getShippingLabelId()
    {
        return $this->container['shipping_label_id'];
    }

    /**
     * Sets shipping_label_id
     *
     * @param string|null $shipping_label_id The identifier of the purchased shipping label.
     *
     * @return self
     */
    public function setShippingLabelId($shipping_label_id)
    {
        $this->container['shipping_label_id'] = $shipping_label_id;

        return $this;
    }

    /**
     * Gets transport
     *
     * @return \ServeXS\BolRetailer\v7\Model\TransportInstruction|null
     */
    public function getTransport()
    {
        return $this->container['transport'];
    }

    /**
     * Sets transport
     *
     * @param \ServeXS\BolRetailer\v7\Model\TransportInstruction|null $transport transport
     *
     * @return self
     */
    public function setTransport($transport)
    {
        $this->container['transport'] = $transport;

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


