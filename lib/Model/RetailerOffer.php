<?php
/**
 * RetailerOffer
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
 * RetailerOffer Class Doc Comment
 *
 * @category Class
 * @package  ServeXS\BolRetailer\v7
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RetailerOffer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RetailerOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'offer_id' => 'string',
        'ean' => 'string',
        'reference' => 'string',
        'on_hold_by_retailer' => 'bool',
        'unknown_product_title' => 'string',
        'pricing' => '\ServeXS\BolRetailer\v7\Model\Pricing',
        'stock' => '\ServeXS\BolRetailer\v7\Model\Stock',
        'fulfilment' => '\ServeXS\BolRetailer\v7\Model\Fulfilment',
        'store' => '\ServeXS\BolRetailer\v7\Model\Store',
        'condition' => '\ServeXS\BolRetailer\v7\Model\Condition',
        'not_publishable_reasons' => '\ServeXS\BolRetailer\v7\Model\NotPublishableReason[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'offer_id' => null,
        'ean' => null,
        'reference' => null,
        'on_hold_by_retailer' => null,
        'unknown_product_title' => null,
        'pricing' => null,
        'stock' => null,
        'fulfilment' => null,
        'store' => null,
        'condition' => null,
        'not_publishable_reasons' => null
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
        'offer_id' => 'offerId',
        'ean' => 'ean',
        'reference' => 'reference',
        'on_hold_by_retailer' => 'onHoldByRetailer',
        'unknown_product_title' => 'unknownProductTitle',
        'pricing' => 'pricing',
        'stock' => 'stock',
        'fulfilment' => 'fulfilment',
        'store' => 'store',
        'condition' => 'condition',
        'not_publishable_reasons' => 'notPublishableReasons'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'offer_id' => 'setOfferId',
        'ean' => 'setEan',
        'reference' => 'setReference',
        'on_hold_by_retailer' => 'setOnHoldByRetailer',
        'unknown_product_title' => 'setUnknownProductTitle',
        'pricing' => 'setPricing',
        'stock' => 'setStock',
        'fulfilment' => 'setFulfilment',
        'store' => 'setStore',
        'condition' => 'setCondition',
        'not_publishable_reasons' => 'setNotPublishableReasons'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'offer_id' => 'getOfferId',
        'ean' => 'getEan',
        'reference' => 'getReference',
        'on_hold_by_retailer' => 'getOnHoldByRetailer',
        'unknown_product_title' => 'getUnknownProductTitle',
        'pricing' => 'getPricing',
        'stock' => 'getStock',
        'fulfilment' => 'getFulfilment',
        'store' => 'getStore',
        'condition' => 'getCondition',
        'not_publishable_reasons' => 'getNotPublishableReasons'
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
        $this->container['offer_id'] = $data['offer_id'] ?? null;
        $this->container['ean'] = $data['ean'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['on_hold_by_retailer'] = $data['on_hold_by_retailer'] ?? null;
        $this->container['unknown_product_title'] = $data['unknown_product_title'] ?? null;
        $this->container['pricing'] = $data['pricing'] ?? null;
        $this->container['stock'] = $data['stock'] ?? null;
        $this->container['fulfilment'] = $data['fulfilment'] ?? null;
        $this->container['store'] = $data['store'] ?? null;
        $this->container['condition'] = $data['condition'] ?? null;
        $this->container['not_publishable_reasons'] = $data['not_publishable_reasons'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['offer_id'] === null) {
            $invalidProperties[] = "'offer_id' can't be null";
        }
        if ($this->container['ean'] === null) {
            $invalidProperties[] = "'ean' can't be null";
        }
        if ($this->container['on_hold_by_retailer'] === null) {
            $invalidProperties[] = "'on_hold_by_retailer' can't be null";
        }
        if ($this->container['pricing'] === null) {
            $invalidProperties[] = "'pricing' can't be null";
        }
        if ($this->container['stock'] === null) {
            $invalidProperties[] = "'stock' can't be null";
        }
        if ($this->container['fulfilment'] === null) {
            $invalidProperties[] = "'fulfilment' can't be null";
        }
        if ($this->container['store'] === null) {
            $invalidProperties[] = "'store' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if ($this->container['not_publishable_reasons'] === null) {
            $invalidProperties[] = "'not_publishable_reasons' can't be null";
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
     * Gets offer_id
     *
     * @return string
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id
     *
     * @param string $offer_id Unique identifier for an offer.
     *
     * @return self
     */
    public function setOfferId($offer_id)
    {
        $this->container['offer_id'] = $offer_id;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string $ean The EAN number associated with this product. Note: in case an ISBN is provided, the ISBN will be replaced with the actual EAN belonging to this ISBN.
     *
     * @return self
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference A user-defined reference that helps you identify this particular offer when receiving data from us. This element can optionally be left empty and has a maximum amount of 20 characters.
     *
     * @return self
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets on_hold_by_retailer
     *
     * @return bool
     */
    public function getOnHoldByRetailer()
    {
        return $this->container['on_hold_by_retailer'];
    }

    /**
     * Sets on_hold_by_retailer
     *
     * @param bool $on_hold_by_retailer Indicates whether or not you want to put this offer for sale on the bol.com website. Defaults to false.
     *
     * @return self
     */
    public function setOnHoldByRetailer($on_hold_by_retailer)
    {
        $this->container['on_hold_by_retailer'] = $on_hold_by_retailer;

        return $this;
    }

    /**
     * Gets unknown_product_title
     *
     * @return string|null
     */
    public function getUnknownProductTitle()
    {
        return $this->container['unknown_product_title'];
    }

    /**
     * Sets unknown_product_title
     *
     * @param string|null $unknown_product_title In case the item is not known to bol.com you can use this field to identify this particular product. Note: in case the product is known to bol.com, the unknown product title will not be stored.
     *
     * @return self
     */
    public function setUnknownProductTitle($unknown_product_title)
    {
        $this->container['unknown_product_title'] = $unknown_product_title;

        return $this;
    }

    /**
     * Gets pricing
     *
     * @return \ServeXS\BolRetailer\v7\Model\Pricing
     */
    public function getPricing()
    {
        return $this->container['pricing'];
    }

    /**
     * Sets pricing
     *
     * @param \ServeXS\BolRetailer\v7\Model\Pricing $pricing pricing
     *
     * @return self
     */
    public function setPricing($pricing)
    {
        $this->container['pricing'] = $pricing;

        return $this;
    }

    /**
     * Gets stock
     *
     * @return \ServeXS\BolRetailer\v7\Model\Stock
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     *
     * @param \ServeXS\BolRetailer\v7\Model\Stock $stock stock
     *
     * @return self
     */
    public function setStock($stock)
    {
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets fulfilment
     *
     * @return \ServeXS\BolRetailer\v7\Model\Fulfilment
     */
    public function getFulfilment()
    {
        return $this->container['fulfilment'];
    }

    /**
     * Sets fulfilment
     *
     * @param \ServeXS\BolRetailer\v7\Model\Fulfilment $fulfilment fulfilment
     *
     * @return self
     */
    public function setFulfilment($fulfilment)
    {
        $this->container['fulfilment'] = $fulfilment;

        return $this;
    }

    /**
     * Gets store
     *
     * @return \ServeXS\BolRetailer\v7\Model\Store
     */
    public function getStore()
    {
        return $this->container['store'];
    }

    /**
     * Sets store
     *
     * @param \ServeXS\BolRetailer\v7\Model\Store $store store
     *
     * @return self
     */
    public function setStore($store)
    {
        $this->container['store'] = $store;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return \ServeXS\BolRetailer\v7\Model\Condition
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param \ServeXS\BolRetailer\v7\Model\Condition $condition condition
     *
     * @return self
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets not_publishable_reasons
     *
     * @return \ServeXS\BolRetailer\v7\Model\NotPublishableReason[]
     */
    public function getNotPublishableReasons()
    {
        return $this->container['not_publishable_reasons'];
    }

    /**
     * Sets not_publishable_reasons
     *
     * @param \ServeXS\BolRetailer\v7\Model\NotPublishableReason[] $not_publishable_reasons not_publishable_reasons
     *
     * @return self
     */
    public function setNotPublishableReasons($not_publishable_reasons)
    {
        $this->container['not_publishable_reasons'] = $not_publishable_reasons;

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

