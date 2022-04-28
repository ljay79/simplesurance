<?php
/**
 * CreatePoliciesRequestEntry
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
 * CreatePoliciesRequestEntry Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CreatePoliciesRequestEntry implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreatePoliciesRequestEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer' => '\OpenAPI\Client\Model\Customer',
        'holder' => '\OpenAPI\Client\Model\Customer',
        'gdpr_consent' => 'bool',
        'marketing_consent' => 'bool',
        'insured_objects' => '\OpenAPI\Client\Model\CreatePoliciesRequestEntryInsuredObjects[]',
        'product_code' => 'string',
        'category' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customer' => null,
        'holder' => null,
        'gdpr_consent' => null,
        'marketing_consent' => null,
        'insured_objects' => null,
        'product_code' => null,
        'category' => null
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
        'customer' => 'customer',
        'holder' => 'holder',
        'gdpr_consent' => 'gdpr_consent',
        'marketing_consent' => 'marketing_consent',
        'insured_objects' => 'insured_objects',
        'product_code' => 'product_code',
        'category' => 'category'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer' => 'setCustomer',
        'holder' => 'setHolder',
        'gdpr_consent' => 'setGdprConsent',
        'marketing_consent' => 'setMarketingConsent',
        'insured_objects' => 'setInsuredObjects',
        'product_code' => 'setProductCode',
        'category' => 'setCategory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer' => 'getCustomer',
        'holder' => 'getHolder',
        'gdpr_consent' => 'getGdprConsent',
        'marketing_consent' => 'getMarketingConsent',
        'insured_objects' => 'getInsuredObjects',
        'product_code' => 'getProductCode',
        'category' => 'getCategory'
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

    const CATEGORY_BABY_STROLLERS = 'CATEGORY_BABY_STROLLERS';
    const CATEGORY_TIRES = 'CATEGORY_TIRES';
    const CATEGORY_SMARTPHONE = 'CATEGORY_SMARTPHONE';
    const CATEGORY_MUSIC = 'CATEGORY_MUSIC';
    const CATEGORY_HOUSEHOLD_DEVICES = 'CATEGORY_HOUSEHOLD_DEVICES';
    const CATEGORY_SPORTS = 'CATEGORY_SPORTS';
    const CATEGORY_FURNITURE = 'CATEGORY_FURNITURE';
    const CATEGORY_TABLET = 'CATEGORY_TABLET';
    const CATEGORY_PC_COMPONENTS = 'CATEGORY_PC_COMPONENTS';
    const CATEGORY_SEL = 'CATEGORY_SEL';
    const CATEGORY_MEL = 'CATEGORY_MEL';
    const CATEGORY_CAR = 'CATEGORY_CAR';
    const CATEGORY_LAPTOP = 'CATEGORY_LAPTOP';
    const CATEGORY_DIY = 'CATEGORY_DIY';
    const CATEGORY_PEDELEC = 'CATEGORY_PEDELEC';
    const CATEGORY_CAMERA = 'CATEGORY_CAMERA';
    const CATEGORY_BIKE = 'CATEGORY_BIKE';
    const CATEGORY_GLASSES = 'CATEGORY_GLASSES';
    const CATEGORY_CYBER = 'CATEGORY_CYBER';
    const CATEGORY_WATCH = 'CATEGORY_WATCH';
    const CATEGORY_BUNDLE = 'CATEGORY_BUNDLE';
    const CATEGORY_HEALTH_SUPPLEMENT = 'CATEGORY_HEALTH_SUPPLEMENT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_BABY_STROLLERS,
            self::CATEGORY_TIRES,
            self::CATEGORY_SMARTPHONE,
            self::CATEGORY_MUSIC,
            self::CATEGORY_HOUSEHOLD_DEVICES,
            self::CATEGORY_SPORTS,
            self::CATEGORY_FURNITURE,
            self::CATEGORY_TABLET,
            self::CATEGORY_PC_COMPONENTS,
            self::CATEGORY_SEL,
            self::CATEGORY_MEL,
            self::CATEGORY_CAR,
            self::CATEGORY_LAPTOP,
            self::CATEGORY_DIY,
            self::CATEGORY_PEDELEC,
            self::CATEGORY_CAMERA,
            self::CATEGORY_BIKE,
            self::CATEGORY_GLASSES,
            self::CATEGORY_CYBER,
            self::CATEGORY_WATCH,
            self::CATEGORY_BUNDLE,
            self::CATEGORY_HEALTH_SUPPLEMENT,
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
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['holder'] = $data['holder'] ?? null;
        $this->container['gdpr_consent'] = $data['gdpr_consent'] ?? null;
        $this->container['marketing_consent'] = $data['marketing_consent'] ?? null;
        $this->container['insured_objects'] = $data['insured_objects'] ?? null;
        $this->container['product_code'] = $data['product_code'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
        }
        if ($this->container['gdpr_consent'] === null) {
            $invalidProperties[] = "'gdpr_consent' can't be null";
        }
        if ($this->container['product_code'] === null) {
            $invalidProperties[] = "'product_code' can't be null";
        }
        $allowedValues = $this->getCategoryAllowableValues();
        if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
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
     * Gets customer
     *
     * @return \OpenAPI\Client\Model\Customer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \OpenAPI\Client\Model\Customer $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets holder
     *
     * @return \OpenAPI\Client\Model\Customer|null
     */
    public function getHolder()
    {
        return $this->container['holder'];
    }

    /**
     * Sets holder
     *
     * @param \OpenAPI\Client\Model\Customer|null $holder holder
     *
     * @return self
     */
    public function setHolder($holder)
    {
        $this->container['holder'] = $holder;

        return $this;
    }

    /**
     * Gets gdpr_consent
     *
     * @return bool
     */
    public function getGdprConsent()
    {
        return $this->container['gdpr_consent'];
    }

    /**
     * Sets gdpr_consent
     *
     * @param bool $gdpr_consent This value must always be supplied as true. It is the partners responsibility to collect GDPR consent from the user.
     *
     * @return self
     */
    public function setGdprConsent($gdpr_consent)
    {
        $this->container['gdpr_consent'] = $gdpr_consent;

        return $this;
    }

    /**
     * Gets marketing_consent
     *
     * @return bool|null
     */
    public function getMarketingConsent()
    {
        return $this->container['marketing_consent'];
    }

    /**
     * Sets marketing_consent
     *
     * @param bool|null $marketing_consent marketing_consent
     *
     * @return self
     */
    public function setMarketingConsent($marketing_consent)
    {
        $this->container['marketing_consent'] = $marketing_consent;

        return $this;
    }

    /**
     * Gets insured_objects
     *
     * @return \OpenAPI\Client\Model\CreatePoliciesRequestEntryInsuredObjects[]|null
     */
    public function getInsuredObjects()
    {
        return $this->container['insured_objects'];
    }

    /**
     * Sets insured_objects
     *
     * @param \OpenAPI\Client\Model\CreatePoliciesRequestEntryInsuredObjects[]|null $insured_objects insured_objects
     *
     * @return self
     */
    public function setInsuredObjects($insured_objects)
    {
        $this->container['insured_objects'] = $insured_objects;

        return $this;
    }

    /**
     * Gets product_code
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->container['product_code'];
    }

    /**
     * Sets product_code
     *
     * @param string $product_code product_code
     *
     * @return self
     */
    public function setProductCode($product_code)
    {
        $this->container['product_code'] = $product_code;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $allowedValues = $this->getCategoryAllowableValues();
        if (!is_null($category) && !in_array($category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'category', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['category'] = $category;

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

