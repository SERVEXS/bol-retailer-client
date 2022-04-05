<?php
/**
 * ReducedShipment
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
 * ReducedShipment Class Doc Comment
 *
 * @category Class
 * @package  ServeXS\BolRetailer\v7
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ReducedShipment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReducedShipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipment_id' => 'string',
        'shipment_date_time' => '\DateTime',
        'shipment_reference' => 'string',
        'order' => '\ServeXS\BolRetailer\v7\Model\ReducedShipmentOrder',
        'shipment_items' => '\ServeXS\BolRetailer\v7\Model\ReducedShipmentItem[]',
        'transport' => '\ServeXS\BolRetailer\v7\Model\ReducedTransport'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipment_id' => null,
        'shipment_date_time' => 'date-time',
        'shipment_reference' => null,
        'order' => null,
        'shipment_items' => null,
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
        'shipment_id' => 'shipmentId',
        'shipment_date_time' => 'shipmentDateTime',
        'shipment_reference' => 'shipmentReference',
        'order' => 'order',
        'shipment_items' => 'shipmentItems',
        'transport' => 'transport'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_id' => 'setShipmentId',
        'shipment_date_time' => 'setShipmentDateTime',
        'shipment_reference' => 'setShipmentReference',
        'order' => 'setOrder',
        'shipment_items' => 'setShipmentItems',
        'transport' => 'setTransport'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_id' => 'getShipmentId',
        'shipment_date_time' => 'getShipmentDateTime',
        'shipment_reference' => 'getShipmentReference',
        'order' => 'getOrder',
        'shipment_items' => 'getShipmentItems',
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
        $this->container['shipment_id'] = $data['shipment_id'] ?? null;
        $this->container['shipment_date_time'] = $data['shipment_date_time'] ?? null;
        $this->container['shipment_reference'] = $data['shipment_reference'] ?? null;
        $this->container['order'] = $data['order'] ?? null;
        $this->container['shipment_items'] = $data['shipment_items'] ?? null;
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

        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['shipment_items'] === null) {
            $invalidProperties[] = "'shipment_items' can't be null";
        }
        if ($this->container['transport'] === null) {
            $invalidProperties[] = "'transport' can't be null";
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
     * Gets shipment_id
     *
     * @return string|null
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param string|null $shipment_id A unique identifier for this shipment.
     *
     * @return self
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets shipment_date_time
     *
     * @return \DateTime|null
     */
    public function getShipmentDateTime()
    {
        return $this->container['shipment_date_time'];
    }

    /**
     * Sets shipment_date_time
     *
     * @param \DateTime|null $shipment_date_time The date and time in ISO 8601 format when the order item was shipped.
     *
     * @return self
     */
    public function setShipmentDateTime($shipment_date_time)
    {
        $this->container['shipment_date_time'] = $shipment_date_time;

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
     * @param string|null $shipment_reference Reference supplied by the user when this item was shipped.
     *
     * @return self
     */
    public function setShipmentReference($shipment_reference)
    {
        $this->container['shipment_reference'] = $shipment_reference;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \ServeXS\BolRetailer\v7\Model\ReducedShipmentOrder
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \ServeXS\BolRetailer\v7\Model\ReducedShipmentOrder $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets shipment_items
     *
     * @return \ServeXS\BolRetailer\v7\Model\ReducedShipmentItem[]
     */
    public function getShipmentItems()
    {
        return $this->container['shipment_items'];
    }

    /**
     * Sets shipment_items
     *
     * @param \ServeXS\BolRetailer\v7\Model\ReducedShipmentItem[] $shipment_items shipment_items
     *
     * @return self
     */
    public function setShipmentItems($shipment_items)
    {
        $this->container['shipment_items'] = $shipment_items;

        return $this;
    }

    /**
     * Gets transport
     *
     * @return \ServeXS\BolRetailer\v7\Model\ReducedTransport
     */
    public function getTransport()
    {
        return $this->container['transport'];
    }

    /**
     * Sets transport
     *
     * @param \ServeXS\BolRetailer\v7\Model\ReducedTransport $transport transport
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


