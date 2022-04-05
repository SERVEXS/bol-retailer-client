<?php
/**
 * BillingDetails
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
 * BillingDetails Class Doc Comment
 *
 * @category Class
 * @description The details of the customer that is responsible for the financial fulfillment of this order.
 * @package  ServeXS\BolRetailer\v7
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BillingDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BillingDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'salutation' => 'string',
        'first_name' => 'string',
        'surname' => 'string',
        'street_name' => 'string',
        'house_number' => 'string',
        'house_number_extension' => 'string',
        'extra_address_information' => 'string',
        'zip_code' => 'string',
        'city' => 'string',
        'country_code' => 'string',
        'email' => 'string',
        'company' => 'string',
        'vat_number' => 'string',
        'kvk_number' => 'string',
        'order_reference' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'salutation' => null,
        'first_name' => null,
        'surname' => null,
        'street_name' => null,
        'house_number' => null,
        'house_number_extension' => null,
        'extra_address_information' => null,
        'zip_code' => null,
        'city' => null,
        'country_code' => null,
        'email' => null,
        'company' => null,
        'vat_number' => null,
        'kvk_number' => null,
        'order_reference' => null
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
        'salutation' => 'salutation',
        'first_name' => 'firstName',
        'surname' => 'surname',
        'street_name' => 'streetName',
        'house_number' => 'houseNumber',
        'house_number_extension' => 'houseNumberExtension',
        'extra_address_information' => 'extraAddressInformation',
        'zip_code' => 'zipCode',
        'city' => 'city',
        'country_code' => 'countryCode',
        'email' => 'email',
        'company' => 'company',
        'vat_number' => 'vatNumber',
        'kvk_number' => 'kvkNumber',
        'order_reference' => 'orderReference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'salutation' => 'setSalutation',
        'first_name' => 'setFirstName',
        'surname' => 'setSurname',
        'street_name' => 'setStreetName',
        'house_number' => 'setHouseNumber',
        'house_number_extension' => 'setHouseNumberExtension',
        'extra_address_information' => 'setExtraAddressInformation',
        'zip_code' => 'setZipCode',
        'city' => 'setCity',
        'country_code' => 'setCountryCode',
        'email' => 'setEmail',
        'company' => 'setCompany',
        'vat_number' => 'setVatNumber',
        'kvk_number' => 'setKvkNumber',
        'order_reference' => 'setOrderReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'salutation' => 'getSalutation',
        'first_name' => 'getFirstName',
        'surname' => 'getSurname',
        'street_name' => 'getStreetName',
        'house_number' => 'getHouseNumber',
        'house_number_extension' => 'getHouseNumberExtension',
        'extra_address_information' => 'getExtraAddressInformation',
        'zip_code' => 'getZipCode',
        'city' => 'getCity',
        'country_code' => 'getCountryCode',
        'email' => 'getEmail',
        'company' => 'getCompany',
        'vat_number' => 'getVatNumber',
        'kvk_number' => 'getKvkNumber',
        'order_reference' => 'getOrderReference'
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

    const SALUTATION_MALE = 'MALE';
    const SALUTATION_FEMALE = 'FEMALE';
    const SALUTATION_UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSalutationAllowableValues()
    {
        return [
            self::SALUTATION_MALE,
            self::SALUTATION_FEMALE,
            self::SALUTATION_UNKNOWN,
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
        $this->container['salutation'] = $data['salutation'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['surname'] = $data['surname'] ?? null;
        $this->container['street_name'] = $data['street_name'] ?? null;
        $this->container['house_number'] = $data['house_number'] ?? null;
        $this->container['house_number_extension'] = $data['house_number_extension'] ?? null;
        $this->container['extra_address_information'] = $data['extra_address_information'] ?? null;
        $this->container['zip_code'] = $data['zip_code'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['company'] = $data['company'] ?? null;
        $this->container['vat_number'] = $data['vat_number'] ?? null;
        $this->container['kvk_number'] = $data['kvk_number'] ?? null;
        $this->container['order_reference'] = $data['order_reference'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSalutationAllowableValues();
        if (!is_null($this->container['salutation']) && !in_array($this->container['salutation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'salutation', must be one of '%s'",
                $this->container['salutation'],
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
     * Gets salutation
     *
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param string|null $salutation The salutation of the customer.
     *
     * @return self
     */
    public function setSalutation($salutation)
    {
        $allowedValues = $this->getSalutationAllowableValues();
        if (!is_null($salutation) && !in_array($salutation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'salutation', must be one of '%s'",
                    $salutation,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name The first name of the customer.
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string|null
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string|null $surname The surname of the customer.
     *
     * @return self
     */
    public function setSurname($surname)
    {
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets street_name
     *
     * @return string|null
     */
    public function getStreetName()
    {
        return $this->container['street_name'];
    }

    /**
     * Sets street_name
     *
     * @param string|null $street_name The street name.
     *
     * @return self
     */
    public function setStreetName($street_name)
    {
        $this->container['street_name'] = $street_name;

        return $this;
    }

    /**
     * Gets house_number
     *
     * @return string|null
     */
    public function getHouseNumber()
    {
        return $this->container['house_number'];
    }

    /**
     * Sets house_number
     *
     * @param string|null $house_number The house number.
     *
     * @return self
     */
    public function setHouseNumber($house_number)
    {
        $this->container['house_number'] = $house_number;

        return $this;
    }

    /**
     * Gets house_number_extension
     *
     * @return string|null
     */
    public function getHouseNumberExtension()
    {
        return $this->container['house_number_extension'];
    }

    /**
     * Sets house_number_extension
     *
     * @param string|null $house_number_extension The extension on the house number.
     *
     * @return self
     */
    public function setHouseNumberExtension($house_number_extension)
    {
        $this->container['house_number_extension'] = $house_number_extension;

        return $this;
    }

    /**
     * Gets extra_address_information
     *
     * @return string|null
     */
    public function getExtraAddressInformation()
    {
        return $this->container['extra_address_information'];
    }

    /**
     * Sets extra_address_information
     *
     * @param string|null $extra_address_information Additional information related to the address that helps in delivering the package.
     *
     * @return self
     */
    public function setExtraAddressInformation($extra_address_information)
    {
        $this->container['extra_address_information'] = $extra_address_information;

        return $this;
    }

    /**
     * Gets zip_code
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param string|null $zip_code The ZIP code in '1234AB' format for NL orders and '0000' format for BE orders.
     *
     * @return self
     */
    public function setZipCode($zip_code)
    {
        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city The name of the city.
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code The country code.
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email A scrambled email address that can be used to contact the customer.
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company The company name.
     *
     * @return self
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets vat_number
     *
     * @return string|null
     */
    public function getVatNumber()
    {
        return $this->container['vat_number'];
    }

    /**
     * Sets vat_number
     *
     * @param string|null $vat_number The Value Added Tax (VAT) / BTW number for business sellers situated in the Netherlands.
     *
     * @return self
     */
    public function setVatNumber($vat_number)
    {
        $this->container['vat_number'] = $vat_number;

        return $this;
    }

    /**
     * Gets kvk_number
     *
     * @return string|null
     */
    public function getKvkNumber()
    {
        return $this->container['kvk_number'];
    }

    /**
     * Sets kvk_number
     *
     * @param string|null $kvk_number The Kamer van Koophandel (kvk) number for organizations situated in the Netherlands or ondernemingsnummer for organizations situated in Belgium.
     *
     * @return self
     */
    public function setKvkNumber($kvk_number)
    {
        $this->container['kvk_number'] = $kvk_number;

        return $this;
    }

    /**
     * Gets order_reference
     *
     * @return string|null
     */
    public function getOrderReference()
    {
        return $this->container['order_reference'];
    }

    /**
     * Sets order_reference
     *
     * @param string|null $order_reference The order reference specified by the customer when ordering a product.
     *
     * @return self
     */
    public function setOrderReference($order_reference)
    {
        $this->container['order_reference'] = $order_reference;

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


