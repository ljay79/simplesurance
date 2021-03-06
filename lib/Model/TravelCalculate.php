<?php
/**
 * TravelCalculate
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SISU POLICY API
 *
 * # Overview  Welcome to the simplesurance Policy API documentation. The API allows management (creating, viewing, canceling, etc.) of insurance policies. simplesurance offers a variety of insurance products, starting with smartphones and laptops, through bikes, glasses or watches and ending up with travel. We are constantly extending our catalog of products. All of our products can be managed via the Core API except for Travel. Travel requires a very specific set of input data in order to create a policy and therefore has a dedicated Travel API.   All the endpoints follow RESTful API principles. The documentation includes example requests and responses, to make the APIs easy to consume.  ## Environments and API Base URIs  simplesurance supports two environments:  1. Sandbox:  https://policy-api.sb-{partner-name}.sisu.sh  2. Production:  https://policy-api.simplesurance.de/  ## Sandbox environment  ### About  Sandbox is a development environment for integrating and testing simplesurance APIs. The sandbox version is not always the same as production. It may contain features that are in beta version, which means that they are not available in our production environment yet. Every partner has a dedicated sandbox environment that contains a predefined set of dummy accounts and transaction data.  ### API Access  You will receive an access token that must be supplied as a Bearer token within every service API call.  Details on the authentication process can be found in the Authentication section of this documentation.  ## Production environment  ### About  The production environment is designed for use within your application when going live with real customers. The environment is fully scalable, secure and facilitates the use of real customer data.  ### API Access  You will receive an access token that must be supplied as a Bearer token within every service API call. Production access tokens vary from the sandbox access token.  Details on the authentication process can be found in the Authentication section of this documentation.  ## Message formats  Standard HTTP verbs and status codes are used for requests and response statuses. Request and response payloads are JSON encoded data formatted. Communication with the APIs is handled over HTTPS protocol only.  | Data |Standard | |-----------|-------| | Strings encoding| UTF-8 | | Datetime | ISO 8601 | | Currency codes | ISO 4217 |  ## Idempotency  We support the idempotency of POST requests. All the requests that have request_id parameter can be idempotent. If the same value is passed in request_id parameter in multiple requests, only the first request will make changes in our system (e.g. create an insurance policy). The following requests will return cached data. Only successful requests are cached, so bad requests will not be cached even if the same request_id is passed. Cached responses contain a custom x-sisu-cached header with value true. x-xisu-process-date header contains the time when the original request was processed.  ## Code generation  It is possible to generate client SDK out of OpenAPI specifications which is available as part of this documentation (see: Download OpenAPI specification button). The client SDK can be generated in the language of your choice. We recommend using [OpenAPI Generator](https://github.com/OpenAPITools/openapi-generator).  # Authentication  <!-- ReDoc-Inject: <security-definitions> -->
 *
 * The version of the OpenAPI document: 0.2.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * TravelCalculate Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TravelCalculate implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TravelCalculate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product' => 'string',
        'destination' => '\OpenAPI\Client\Model\Country[]',
        'destination_group' => 'string',
        'start_date' => '\OpenAPI\Client\Model\UpdatedAt',
        'end_date' => '\OpenAPI\Client\Model\UpdatedAt',
        'country' => 'string',
        'language' => 'string',
        'travellers' => '\OpenAPI\Client\Model\Traveller[]',
        'request_id' => '\OpenAPI\Client\Model\RequestId',
        'travel_price' => '\OpenAPI\Client\Model\BillingPrice'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'product' => null,
        'destination' => null,
        'destination_group' => null,
        'start_date' => null,
        'end_date' => null,
        'country' => null,
        'language' => null,
        'travellers' => null,
        'request_id' => null,
        'travel_price' => null
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
        'product' => 'product',
        'destination' => 'destination',
        'destination_group' => 'destination_group',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'country' => 'country',
        'language' => 'language',
        'travellers' => 'travellers',
        'request_id' => 'request_id',
        'travel_price' => 'travel_price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product' => 'setProduct',
        'destination' => 'setDestination',
        'destination_group' => 'setDestinationGroup',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'country' => 'setCountry',
        'language' => 'setLanguage',
        'travellers' => 'setTravellers',
        'request_id' => 'setRequestId',
        'travel_price' => 'setTravelPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product' => 'getProduct',
        'destination' => 'getDestination',
        'destination_group' => 'getDestinationGroup',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'country' => 'getCountry',
        'language' => 'getLanguage',
        'travellers' => 'getTravellers',
        'request_id' => 'getRequestId',
        'travel_price' => 'getTravelPrice'
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

    const DESTINATION_GROUP_EUROPE = 'EUROPE';
    const DESTINATION_GROUP_WW_EXC = 'WW_EXC';
    const DESTINATION_GROUP_WW_INC = 'WW_INC';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDestinationGroupAllowableValues()
    {
        return [
            self::DESTINATION_GROUP_EUROPE,
            self::DESTINATION_GROUP_WW_EXC,
            self::DESTINATION_GROUP_WW_INC,
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
        $this->container['product'] = $data['product'] ?? null;
        $this->container['destination'] = $data['destination'] ?? null;
        $this->container['destination_group'] = $data['destination_group'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['travellers'] = $data['travellers'] ?? null;
        $this->container['request_id'] = $data['request_id'] ?? null;
        $this->container['travel_price'] = $data['travel_price'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['product'] === null) {
            $invalidProperties[] = "'product' can't be null";
        }
        $allowedValues = $this->getDestinationGroupAllowableValues();
        if (!is_null($this->container['destination_group']) && !in_array($this->container['destination_group'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'destination_group', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ((mb_strlen($this->container['country']) > 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['country']) < 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) > 2)) {
            $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) < 2)) {
            $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['travellers'] === null) {
            $invalidProperties[] = "'travellers' can't be null";
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
     * Gets product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string $product Insurance product name. To be provided by simplesurance
     *
     * @return self
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return \OpenAPI\Client\Model\Country[]|null
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param \OpenAPI\Client\Model\Country[]|null $destination Destination countries of the travel. Represented by ISO 3166-1 alpha-2 country code. <br>*At least one of ('destination_group' or 'destination') properties has to be provided.*
     *
     * @return self
     */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets destination_group
     *
     * @return string|null
     */
    public function getDestinationGroup()
    {
        return $this->container['destination_group'];
    }

    /**
     * Sets destination_group
     *
     * @param string|null $destination_group Destination group containing countries of the travel. <br>*At least one of ('destination_group' or 'destination') properties has to be provided.*
     *
     * @return self
     */
    public function setDestinationGroup($destination_group)
    {
        $allowedValues = $this->getDestinationGroupAllowableValues();
        if (!is_null($destination_group) && !in_array($destination_group, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'destination_group', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['destination_group'] = $destination_group;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \OpenAPI\Client\Model\UpdatedAt
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \OpenAPI\Client\Model\UpdatedAt $start_date start_date
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \OpenAPI\Client\Model\UpdatedAt
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \OpenAPI\Client\Model\UpdatedAt $end_date end_date
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country ISO 3166-1 alpha-2 country code  Country of the policy typically is a determining factor in the tax rate, claim handling language and Terms and Conditions document. For eg. if a policy is DE then the policy pdf and claims would typically be in DE.
     *
     * @return self
     */
    public function setCountry($country)
    {
        if ((mb_strlen($country) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling TravelCalculate., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($country) < 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling TravelCalculate., must be bigger than or equal to 2.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language ISO 639-1 language code  Language of the Terms and Conditions document.
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (!is_null($language) && (mb_strlen($language) > 2)) {
            throw new \InvalidArgumentException('invalid length for $language when calling TravelCalculate., must be smaller than or equal to 2.');
        }
        if (!is_null($language) && (mb_strlen($language) < 2)) {
            throw new \InvalidArgumentException('invalid length for $language when calling TravelCalculate., must be bigger than or equal to 2.');
        }

        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets travellers
     *
     * @return \OpenAPI\Client\Model\Traveller[]
     */
    public function getTravellers()
    {
        return $this->container['travellers'];
    }

    /**
     * Sets travellers
     *
     * @param \OpenAPI\Client\Model\Traveller[] $travellers Information about all travellers should be provided here, including the customer data, in case he/she is also a traveller.
     *
     * @return self
     */
    public function setTravellers($travellers)
    {
        $this->container['travellers'] = $travellers;

        return $this;
    }

    /**
     * Gets request_id
     *
     * @return \OpenAPI\Client\Model\RequestId|null
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param \OpenAPI\Client\Model\RequestId|null $request_id request_id
     *
     * @return self
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets travel_price
     *
     * @return \OpenAPI\Client\Model\BillingPrice|null
     */
    public function getTravelPrice()
    {
        return $this->container['travel_price'];
    }

    /**
     * Sets travel_price
     *
     * @param \OpenAPI\Client\Model\BillingPrice|null $travel_price travel_price
     *
     * @return self
     */
    public function setTravelPrice($travel_price)
    {
        $this->container['travel_price'] = $travel_price;

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
        return isset($this->container[$offset]) ?? null;
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


