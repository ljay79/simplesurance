<?php
/**
 * CreatePoliciesRequest
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
 * CreatePoliciesRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CreatePoliciesRequest implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreatePoliciesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'country' => '\OpenAPI\Client\Model\Country',
        'external_id' => 'string',
        'integration_id' => 'string',
        'language' => '\OpenAPI\Client\Model\Language',
        'policies' => '\OpenAPI\Client\Model\CreatePoliciesRequestEntry[]',
        'request_id' => '\OpenAPI\Client\Model\RequestId',
        'payment' => '\OpenAPI\Client\Model\CreatePoliciesRequestPayment',
        'coupon_code' => 'string',
        'is_test' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'country' => null,
        'external_id' => null,
        'integration_id' => null,
        'language' => null,
        'policies' => null,
        'request_id' => null,
        'payment' => null,
        'coupon_code' => null,
        'is_test' => null
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
        'country' => 'country',
        'external_id' => 'external_id',
        'integration_id' => 'integration_id',
        'language' => 'language',
        'policies' => 'policies',
        'request_id' => 'request_id',
        'payment' => 'payment',
        'coupon_code' => 'coupon_code',
        'is_test' => 'is_test'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
        'external_id' => 'setExternalId',
        'integration_id' => 'setIntegrationId',
        'language' => 'setLanguage',
        'policies' => 'setPolicies',
        'request_id' => 'setRequestId',
        'payment' => 'setPayment',
        'coupon_code' => 'setCouponCode',
        'is_test' => 'setIsTest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
        'external_id' => 'getExternalId',
        'integration_id' => 'getIntegrationId',
        'language' => 'getLanguage',
        'policies' => 'getPolicies',
        'request_id' => 'getRequestId',
        'payment' => 'getPayment',
        'coupon_code' => 'getCouponCode',
        'is_test' => 'getIsTest'
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
        $this->container['country'] = $data['country'] ?? null;
        $this->container['external_id'] = $data['external_id'] ?? null;
        $this->container['integration_id'] = $data['integration_id'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['policies'] = $data['policies'] ?? null;
        $this->container['request_id'] = $data['request_id'] ?? null;
        $this->container['payment'] = $data['payment'] ?? null;
        $this->container['coupon_code'] = $data['coupon_code'] ?? null;
        $this->container['is_test'] = $data['is_test'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['integration_id'] === null) {
            $invalidProperties[] = "'integration_id' can't be null";
        }
        if ((mb_strlen($this->container['integration_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'integration_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['policies'] === null) {
            $invalidProperties[] = "'policies' can't be null";
        }
        if (!is_null($this->container['coupon_code']) && (mb_strlen($this->container['coupon_code']) > 20)) {
            $invalidProperties[] = "invalid value for 'coupon_code', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['coupon_code']) && (mb_strlen($this->container['coupon_code']) < 13)) {
            $invalidProperties[] = "invalid value for 'coupon_code', the character length must be bigger than or equal to 13.";
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
     * Gets country
     *
     * @return \OpenAPI\Client\Model\Country
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \OpenAPI\Client\Model\Country $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id Identifier of a sale/customer in an external system. You can use your own policy id here.
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets integration_id
     *
     * @return string
     */
    public function getIntegrationId()
    {
        return $this->container['integration_id'];
    }

    /**
     * Sets integration_id
     *
     * @param string $integration_id This value is provided by simplesurance. The field is used to identify requests coming from the partner.
     *
     * @return self
     */
    public function setIntegrationId($integration_id)
    {

        if ((mb_strlen($integration_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $integration_id when calling CreatePoliciesRequest., must be bigger than or equal to 1.');
        }

        $this->container['integration_id'] = $integration_id;

        return $this;
    }

    /**
     * Gets language
     *
     * @return \OpenAPI\Client\Model\Language|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \OpenAPI\Client\Model\Language|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets policies
     *
     * @return \OpenAPI\Client\Model\CreatePoliciesRequestEntry[]
     */
    public function getPolicies()
    {
        return $this->container['policies'];
    }

    /**
     * Sets policies
     *
     * @param \OpenAPI\Client\Model\CreatePoliciesRequestEntry[] $policies policies
     *
     * @return self
     */
    public function setPolicies($policies)
    {
        $this->container['policies'] = $policies;

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
     * Gets payment
     *
     * @return \OpenAPI\Client\Model\CreatePoliciesRequestPayment|null
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \OpenAPI\Client\Model\CreatePoliciesRequestPayment|null $payment payment
     *
     * @return self
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets coupon_code
     *
     * @return string|null
     */
    public function getCouponCode()
    {
        return $this->container['coupon_code'];
    }

    /**
     * Sets coupon_code
     *
     * @param string|null $coupon_code Discount code to be used for the created policies
     *
     * @return self
     */
    public function setCouponCode($coupon_code)
    {
        if (!is_null($coupon_code) && (mb_strlen($coupon_code) > 20)) {
            throw new \InvalidArgumentException('invalid length for $coupon_code when calling CreatePoliciesRequest., must be smaller than or equal to 20.');
        }
        if (!is_null($coupon_code) && (mb_strlen($coupon_code) < 13)) {
            throw new \InvalidArgumentException('invalid length for $coupon_code when calling CreatePoliciesRequest., must be bigger than or equal to 13.');
        }

        $this->container['coupon_code'] = $coupon_code;

        return $this;
    }

    /**
     * Gets is_test
     *
     * @return bool|null
     */
    public function getIsTest()
    {
        return $this->container['is_test'];
    }

    /**
     * Sets is_test
     *
     * @param bool|null $is_test Send true in the case of creating a test certificate. Should always be used when creating test policies in simplesurance production environment.
     *
     * @return self
     */
    public function setIsTest($is_test)
    {
        $this->container['is_test'] = $is_test;

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


