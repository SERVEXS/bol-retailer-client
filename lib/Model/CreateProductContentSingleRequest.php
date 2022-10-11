<?php
/**
 * CreateProductContentSingleRequest
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
 * CreateProductContentSingleRequest Class Doc Comment
 *
 * @category Class
 * @package  ServeXS\BolRetailer\v7
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateProductContentSingleRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateProductContentSingleRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'language' => 'string',
        'attributes' => '\ServeXS\BolRetailer\v7\Model\Attribute[]',
        'assets' => '\ServeXS\BolRetailer\v7\Model\Asset[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'language' => null,
        'attributes' => null,
        'assets' => null
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
        'language' => 'language',
        'attributes' => 'attributes',
        'assets' => 'assets'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'language' => 'setLanguage',
        'attributes' => 'setAttributes',
        'assets' => 'setAssets'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'language' => 'getLanguage',
        'attributes' => 'getAttributes',
        'assets' => 'getAssets'
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

    const LANGUAGE_NL = 'nl';
    const LANGUAGE_NL_BE = 'nl-BE';
    const LANGUAGE_FR = 'fr';
    const LANGUAGE_FR_BE = 'fr-BE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_NL,
            self::LANGUAGE_NL_BE,
            self::LANGUAGE_FR,
            self::LANGUAGE_FR_BE,
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
        $this->container['language'] = $data['language'] ?? null;
        $this->container['attributes'] = $data['attributes'] ?? null;
        $this->container['assets'] = $data['assets'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        $allowedValues = $this->getLanguageAllowableValues();
        if (!is_null($this->container['language']) && !in_array($this->container['language'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'language', must be one of '%s'",
                $this->container['language'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['attributes'] === null) {
            $invalidProperties[] = "'attributes' can't be null";
        }
        if ((count($this->container['attributes']) > 150)) {
            $invalidProperties[] = "invalid value for 'attributes', number of items must be less than or equal to 150.";
        }

        if ((count($this->container['attributes']) < 1)) {
            $invalidProperties[] = "invalid value for 'attributes', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['assets']) && (count($this->container['assets']) > 30)) {
            $invalidProperties[] = "invalid value for 'assets', number of items must be less than or equal to 30.";
        }

        if (!is_null($this->container['assets']) && (count($this->container['assets']) < 0)) {
            $invalidProperties[] = "invalid value for 'assets', number of items must be greater than or equal to 0.";
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
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language The language in which content is submitted.
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $allowedValues = $this->getLanguageAllowableValues();
        if (!in_array($language, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'language', must be one of '%s'",
                    $language,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \ServeXS\BolRetailer\v7\Model\Attribute[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \ServeXS\BolRetailer\v7\Model\Attribute[] $attributes A list of attributes.
     *
     * @return self
     */
    public function setAttributes($attributes)
    {

        if ((count($attributes) > 150)) {
            throw new \InvalidArgumentException('invalid value for $attributes when calling CreateProductContentSingleRequest., number of items must be less than or equal to 150.');
        }
        if ((count($attributes) < 1)) {
            throw new \InvalidArgumentException('invalid length for $attributes when calling CreateProductContentSingleRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets assets
     *
     * @return \ServeXS\BolRetailer\v7\Model\Asset[]|null
     */
    public function getAssets()
    {
        return $this->container['assets'];
    }

    /**
     * Sets assets
     *
     * @param \ServeXS\BolRetailer\v7\Model\Asset[]|null $assets assets
     *
     * @return self
     */
    public function setAssets($assets)
    {

        if (!is_null($assets) && (count($assets) > 30)) {
            throw new \InvalidArgumentException('invalid value for $assets when calling CreateProductContentSingleRequest., number of items must be less than or equal to 30.');
        }
        if (!is_null($assets) && (count($assets) < 0)) {
            throw new \InvalidArgumentException('invalid length for $assets when calling CreateProductContentSingleRequest., number of items must be greater than or equal to 0.');
        }
        $this->container['assets'] = $assets;

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


