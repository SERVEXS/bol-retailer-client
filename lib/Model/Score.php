<?php
/**
 * Score
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
 * Score Class Doc Comment
 *
 * @category Class
 * @description The score for this measurement. In case there are no scores for an indicator, this element is omitted from the response.
 * @package  ServeXS\BolRetailer\v7
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Score implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Score';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'conforms' => 'bool',
        'numerator' => 'int',
        'denominator' => 'int',
        'value' => 'float',
        'distance_to_norm' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'conforms' => null,
        'numerator' => 'int32',
        'denominator' => 'int32',
        'value' => 'float',
        'distance_to_norm' => 'float'
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
        'conforms' => 'conforms',
        'numerator' => 'numerator',
        'denominator' => 'denominator',
        'value' => 'value',
        'distance_to_norm' => 'distanceToNorm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conforms' => 'setConforms',
        'numerator' => 'setNumerator',
        'denominator' => 'setDenominator',
        'value' => 'setValue',
        'distance_to_norm' => 'setDistanceToNorm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conforms' => 'getConforms',
        'numerator' => 'getNumerator',
        'denominator' => 'getDenominator',
        'value' => 'getValue',
        'distance_to_norm' => 'getDistanceToNorm'
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
        $this->container['conforms'] = $data['conforms'] ?? null;
        $this->container['numerator'] = $data['numerator'] ?? null;
        $this->container['denominator'] = $data['denominator'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['distance_to_norm'] = $data['distance_to_norm'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['conforms'] === null) {
            $invalidProperties[] = "'conforms' can't be null";
        }
        if ($this->container['numerator'] === null) {
            $invalidProperties[] = "'numerator' can't be null";
        }
        if ($this->container['denominator'] === null) {
            $invalidProperties[] = "'denominator' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['distance_to_norm'] === null) {
            $invalidProperties[] = "'distance_to_norm' can't be null";
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
     * Gets conforms
     *
     * @return bool
     */
    public function getConforms()
    {
        return $this->container['conforms'];
    }

    /**
     * Sets conforms
     *
     * @param bool $conforms Indicates whether the score conforms to the bol.com service norm or not.
     *
     * @return self
     */
    public function setConforms($conforms)
    {
        $this->container['conforms'] = $conforms;

        return $this;
    }

    /**
     * Gets numerator
     *
     * @return int
     */
    public function getNumerator()
    {
        return $this->container['numerator'];
    }

    /**
     * Sets numerator
     *
     * @param int $numerator The top part of the fraction (above the line). This usually is the smaller number compared to the denominator.
     *
     * @return self
     */
    public function setNumerator($numerator)
    {
        $this->container['numerator'] = $numerator;

        return $this;
    }

    /**
     * Gets denominator
     *
     * @return int
     */
    public function getDenominator()
    {
        return $this->container['denominator'];
    }

    /**
     * Sets denominator
     *
     * @param int $denominator The lower part of the fraction (below the line). This usually is the larger number compared to the the numerator.
     *
     * @return self
     */
    public function setDenominator($denominator)
    {
        $this->container['denominator'] = $denominator;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float $value The score for this measurement (denominator divided by the numerator).
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets distance_to_norm
     *
     * @return float
     */
    public function getDistanceToNorm()
    {
        return $this->container['distance_to_norm'];
    }

    /**
     * Sets distance_to_norm
     *
     * @param float $distance_to_norm The difference between the score and the bol.com service norm.
     *
     * @return self
     */
    public function setDistanceToNorm($distance_to_norm)
    {
        $this->container['distance_to_norm'] = $distance_to_norm;

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


