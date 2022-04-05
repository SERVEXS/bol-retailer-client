<?php
/**
 * ReducedPromotion
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
 * ReducedPromotion Class Doc Comment
 *
 * @category Class
 * @description A single promotion.
 * @package  ServeXS\BolRetailer\v7
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ReducedPromotion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReducedPromotion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'promotion_id' => 'string',
        'title' => 'string',
        'start_date_time' => '\DateTime',
        'end_date_time' => '\DateTime',
        'countries' => '\ServeXS\BolRetailer\v7\Model\CountryCode[]',
        'promotion_type' => 'string',
        'retailer_specific_promotion' => 'bool',
        'campaign' => '\ServeXS\BolRetailer\v7\Model\Campaign'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'promotion_id' => null,
        'title' => null,
        'start_date_time' => 'date-time',
        'end_date_time' => 'date-time',
        'countries' => null,
        'promotion_type' => null,
        'retailer_specific_promotion' => null,
        'campaign' => null
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
        'promotion_id' => 'promotionId',
        'title' => 'title',
        'start_date_time' => 'startDateTime',
        'end_date_time' => 'endDateTime',
        'countries' => 'countries',
        'promotion_type' => 'promotionType',
        'retailer_specific_promotion' => 'retailerSpecificPromotion',
        'campaign' => 'campaign'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'promotion_id' => 'setPromotionId',
        'title' => 'setTitle',
        'start_date_time' => 'setStartDateTime',
        'end_date_time' => 'setEndDateTime',
        'countries' => 'setCountries',
        'promotion_type' => 'setPromotionType',
        'retailer_specific_promotion' => 'setRetailerSpecificPromotion',
        'campaign' => 'setCampaign'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'promotion_id' => 'getPromotionId',
        'title' => 'getTitle',
        'start_date_time' => 'getStartDateTime',
        'end_date_time' => 'getEndDateTime',
        'countries' => 'getCountries',
        'promotion_type' => 'getPromotionType',
        'retailer_specific_promotion' => 'getRetailerSpecificPromotion',
        'campaign' => 'getCampaign'
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

    const PROMOTION_TYPE_AWARENESS = 'AWARENESS';
    const PROMOTION_TYPE_PRICE_OFF = 'PRICE_OFF';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPromotionTypeAllowableValues()
    {
        return [
            self::PROMOTION_TYPE_AWARENESS,
            self::PROMOTION_TYPE_PRICE_OFF,
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
        $this->container['promotion_id'] = $data['promotion_id'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['start_date_time'] = $data['start_date_time'] ?? null;
        $this->container['end_date_time'] = $data['end_date_time'] ?? null;
        $this->container['countries'] = $data['countries'] ?? null;
        $this->container['promotion_type'] = $data['promotion_type'] ?? null;
        $this->container['retailer_specific_promotion'] = $data['retailer_specific_promotion'] ?? null;
        $this->container['campaign'] = $data['campaign'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['promotion_id'] === null) {
            $invalidProperties[] = "'promotion_id' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['start_date_time'] === null) {
            $invalidProperties[] = "'start_date_time' can't be null";
        }
        if ($this->container['end_date_time'] === null) {
            $invalidProperties[] = "'end_date_time' can't be null";
        }
        if ($this->container['countries'] === null) {
            $invalidProperties[] = "'countries' can't be null";
        }
        if ($this->container['promotion_type'] === null) {
            $invalidProperties[] = "'promotion_type' can't be null";
        }
        $allowedValues = $this->getPromotionTypeAllowableValues();
        if (!is_null($this->container['promotion_type']) && !in_array($this->container['promotion_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'promotion_type', must be one of '%s'",
                $this->container['promotion_type'],
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
     * Gets promotion_id
     *
     * @return string
     */
    public function getPromotionId()
    {
        return $this->container['promotion_id'];
    }

    /**
     * Sets promotion_id
     *
     * @param string $promotion_id The identifier of the promotion.
     *
     * @return self
     */
    public function setPromotionId($promotion_id)
    {
        $this->container['promotion_id'] = $promotion_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title The title of the promotion.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets start_date_time
     *
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        return $this->container['start_date_time'];
    }

    /**
     * Sets start_date_time
     *
     * @param \DateTime $start_date_time The starting date and time of the promotion.
     *
     * @return self
     */
    public function setStartDateTime($start_date_time)
    {
        $this->container['start_date_time'] = $start_date_time;

        return $this;
    }

    /**
     * Gets end_date_time
     *
     * @return \DateTime
     */
    public function getEndDateTime()
    {
        return $this->container['end_date_time'];
    }

    /**
     * Sets end_date_time
     *
     * @param \DateTime $end_date_time The ending date and time of the promotion.
     *
     * @return self
     */
    public function setEndDateTime($end_date_time)
    {
        $this->container['end_date_time'] = $end_date_time;

        return $this;
    }

    /**
     * Gets countries
     *
     * @return \ServeXS\BolRetailer\v7\Model\CountryCode[]
     */
    public function getCountries()
    {
        return $this->container['countries'];
    }

    /**
     * Sets countries
     *
     * @param \ServeXS\BolRetailer\v7\Model\CountryCode[] $countries countries
     *
     * @return self
     */
    public function setCountries($countries)
    {
        $this->container['countries'] = $countries;

        return $this;
    }

    /**
     * Gets promotion_type
     *
     * @return string
     */
    public function getPromotionType()
    {
        return $this->container['promotion_type'];
    }

    /**
     * Sets promotion_type
     *
     * @param string $promotion_type The type of the promotion.
     *
     * @return self
     */
    public function setPromotionType($promotion_type)
    {
        $allowedValues = $this->getPromotionTypeAllowableValues();
        if (!in_array($promotion_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'promotion_type', must be one of '%s'",
                    $promotion_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['promotion_type'] = $promotion_type;

        return $this;
    }

    /**
     * Gets retailer_specific_promotion
     *
     * @return bool|null
     */
    public function getRetailerSpecificPromotion()
    {
        return $this->container['retailer_specific_promotion'];
    }

    /**
     * Sets retailer_specific_promotion
     *
     * @param bool|null $retailer_specific_promotion Indicates whether the promotion is retailer specific or open to the platform.
     *
     * @return self
     */
    public function setRetailerSpecificPromotion($retailer_specific_promotion)
    {
        $this->container['retailer_specific_promotion'] = $retailer_specific_promotion;

        return $this;
    }

    /**
     * Gets campaign
     *
     * @return \ServeXS\BolRetailer\v7\Model\Campaign|null
     */
    public function getCampaign()
    {
        return $this->container['campaign'];
    }

    /**
     * Sets campaign
     *
     * @param \ServeXS\BolRetailer\v7\Model\Campaign|null $campaign campaign
     *
     * @return self
     */
    public function setCampaign($campaign)
    {
        $this->container['campaign'] = $campaign;

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


