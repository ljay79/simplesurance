<?php
/**
 * BasePolicy
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
 * BasePolicy Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class BasePolicy implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BasePolicy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activated_at' => '\OpenAPI\Client\Model\UpdatedAt',
        'updated_at' => '\DateTime',
        'cancelled_at' => '\OpenAPI\Client\Model\UpdatedAt',
        'coverages' => 'string[]',
        'customer' => '\OpenAPI\Client\Model\BasePolicyCustomer',
        'holder' => '\OpenAPI\Client\Model\Customer',
        'documents' => '\OpenAPI\Client\Model\Items[]',
        'direct_claim_url' => 'string',
        'expires_at' => '\OpenAPI\Client\Model\UpdatedAt',
        'policy_number' => 'string',
        'identifiers' => '\OpenAPI\Client\Model\BasePolicyIdentifiers[]',
        'initial_payment_done' => '\OpenAPI\Client\Model\InitialPaymentDone',
        'installments' => '\OpenAPI\Client\Model\Installements[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'activated_at' => null,
        'updated_at' => 'date',
        'cancelled_at' => null,
        'coverages' => null,
        'customer' => null,
        'holder' => null,
        'documents' => null,
        'direct_claim_url' => null,
        'expires_at' => null,
        'policy_number' => null,
        'identifiers' => null,
        'initial_payment_done' => null,
        'installments' => null
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
        'activated_at' => 'activated_at',
        'updated_at' => 'updated_at',
        'cancelled_at' => 'cancelled_at',
        'coverages' => 'coverages',
        'customer' => 'customer',
        'holder' => 'holder',
        'documents' => 'documents',
        'direct_claim_url' => 'direct_claim_url',
        'expires_at' => 'expires_at',
        'policy_number' => 'policy_number',
        'identifiers' => 'identifiers',
        'initial_payment_done' => 'initial_payment_done',
        'installments' => 'installments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activated_at' => 'setActivatedAt',
        'updated_at' => 'setUpdatedAt',
        'cancelled_at' => 'setCancelledAt',
        'coverages' => 'setCoverages',
        'customer' => 'setCustomer',
        'holder' => 'setHolder',
        'documents' => 'setDocuments',
        'direct_claim_url' => 'setDirectClaimUrl',
        'expires_at' => 'setExpiresAt',
        'policy_number' => 'setPolicyNumber',
        'identifiers' => 'setIdentifiers',
        'initial_payment_done' => 'setInitialPaymentDone',
        'installments' => 'setInstallments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activated_at' => 'getActivatedAt',
        'updated_at' => 'getUpdatedAt',
        'cancelled_at' => 'getCancelledAt',
        'coverages' => 'getCoverages',
        'customer' => 'getCustomer',
        'holder' => 'getHolder',
        'documents' => 'getDocuments',
        'direct_claim_url' => 'getDirectClaimUrl',
        'expires_at' => 'getExpiresAt',
        'policy_number' => 'getPolicyNumber',
        'identifiers' => 'getIdentifiers',
        'initial_payment_done' => 'getInitialPaymentDone',
        'installments' => 'getInstallments'
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

    const COVERAGES_TRAVEL_MEDICAL_EMERGENCY = 'TRAVEL_MEDICAL_EMERGENCY';
    const COVERAGES_TRAVEL_MEDICAL_ASSISTANCE = 'TRAVEL_MEDICAL_ASSISTANCE';
    const COVERAGES_TRAVEL_MEDICAL_REPATRIATION = 'TRAVEL_MEDICAL_REPATRIATION';
    const COVERAGES_TRAVEL_MEDICAL_TRANSPORTATION = 'TRAVEL_MEDICAL_TRANSPORTATION';
    const COVERAGES_LUGGAGE_DELAY = 'LUGGAGE_DELAY';
    const COVERAGES_LUGGAGE_LOSS = 'LUGGAGE_LOSS';
    const COVERAGES_LUGGAGE_THEFT = 'LUGGAGE_THEFT';
    const COVERAGES_LUGGAGE_DAMAGE = 'LUGGAGE_DAMAGE';
    const COVERAGES_FLIGHT_DELAY = 'FLIGHT_DELAY';
    const COVERAGES_TRAVEL_CANCELLATION = 'TRAVEL_CANCELLATION';
    const COVERAGES_TRAVEL_CURTAILMENT = 'TRAVEL_CURTAILMENT';
    const COVERAGES_TRAVEL_CAR_RENTAL = 'TRAVEL_CAR_RENTAL';
    const COVERAGES_MOBILE_DEVICE_THEFT = 'MOBILE_DEVICE_THEFT';
    const COVERAGES_MOBILE_DEVICE_DAMAGE = 'MOBILE_DEVICE_DAMAGE';
    const COVERAGES_LOSS = 'LOSS';
    const COVERAGES_WARRANTY_EXTENSION = 'WARRANTY_EXTENSION';
    const COVERAGES_BANK_ACCOUNT_PROTECTION = 'BANK_ACCOUNT_PROTECTION';
    const COVERAGES_BUYER_PROTECTION = 'BUYER_PROTECTION';
    const COVERAGES_PERSONAL_ACCIDENT = 'PERSONAL_ACCIDENT';
    const COVERAGES_MOUNTAIN_RESCUE = 'MOUNTAIN_RESCUE';
    const COVERAGES_SKI_ACCIDENT = 'SKI_ACCIDENT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCoveragesAllowableValues()
    {
        return [
            self::COVERAGES_TRAVEL_MEDICAL_EMERGENCY,
            self::COVERAGES_TRAVEL_MEDICAL_ASSISTANCE,
            self::COVERAGES_TRAVEL_MEDICAL_REPATRIATION,
            self::COVERAGES_TRAVEL_MEDICAL_TRANSPORTATION,
            self::COVERAGES_LUGGAGE_DELAY,
            self::COVERAGES_LUGGAGE_LOSS,
            self::COVERAGES_LUGGAGE_THEFT,
            self::COVERAGES_LUGGAGE_DAMAGE,
            self::COVERAGES_FLIGHT_DELAY,
            self::COVERAGES_TRAVEL_CANCELLATION,
            self::COVERAGES_TRAVEL_CURTAILMENT,
            self::COVERAGES_TRAVEL_CAR_RENTAL,
            self::COVERAGES_MOBILE_DEVICE_THEFT,
            self::COVERAGES_MOBILE_DEVICE_DAMAGE,
            self::COVERAGES_LOSS,
            self::COVERAGES_WARRANTY_EXTENSION,
            self::COVERAGES_BANK_ACCOUNT_PROTECTION,
            self::COVERAGES_BUYER_PROTECTION,
            self::COVERAGES_PERSONAL_ACCIDENT,
            self::COVERAGES_MOUNTAIN_RESCUE,
            self::COVERAGES_SKI_ACCIDENT,
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
        $this->container['activated_at'] = $data['activated_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['cancelled_at'] = $data['cancelled_at'] ?? null;
        $this->container['coverages'] = $data['coverages'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['holder'] = $data['holder'] ?? null;
        $this->container['documents'] = $data['documents'] ?? null;
        $this->container['direct_claim_url'] = $data['direct_claim_url'] ?? null;
        $this->container['expires_at'] = $data['expires_at'] ?? null;
        $this->container['policy_number'] = $data['policy_number'] ?? null;
        $this->container['identifiers'] = $data['identifiers'] ?? null;
        $this->container['initial_payment_done'] = $data['initial_payment_done'] ?? null;
        $this->container['installments'] = $data['installments'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['initial_payment_done'] === null) {
            $invalidProperties[] = "'initial_payment_done' can't be null";
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
     * Gets activated_at
     *
     * @return \OpenAPI\Client\Model\UpdatedAt|null
     */
    public function getActivatedAt()
    {
        return $this->container['activated_at'];
    }

    /**
     * Sets activated_at
     *
     * @param \OpenAPI\Client\Model\UpdatedAt|null $activated_at activated_at
     *
     * @return self
     */
    public function setActivatedAt($activated_at)
    {
        $this->container['activated_at'] = $activated_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at ISO 8601 date format
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets cancelled_at
     *
     * @return \OpenAPI\Client\Model\UpdatedAt|null
     */
    public function getCancelledAt()
    {
        return $this->container['cancelled_at'];
    }

    /**
     * Sets cancelled_at
     *
     * @param \OpenAPI\Client\Model\UpdatedAt|null $cancelled_at cancelled_at
     *
     * @return self
     */
    public function setCancelledAt($cancelled_at)
    {
        $this->container['cancelled_at'] = $cancelled_at;

        return $this;
    }

    /**
     * Gets coverages
     *
     * @return string[]|null
     */
    public function getCoverages()
    {
        return $this->container['coverages'];
    }

    /**
     * Sets coverages
     *
     * @param string[]|null $coverages coverages
     *
     * @return self
     */
    public function setCoverages($coverages)
    {
        $allowedValues = $this->getCoveragesAllowableValues();
        if (!is_null($coverages) && array_diff($coverages, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'coverages', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['coverages'] = $coverages;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \OpenAPI\Client\Model\BasePolicyCustomer|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \OpenAPI\Client\Model\BasePolicyCustomer|null $customer customer
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
     * Gets documents
     *
     * @return \OpenAPI\Client\Model\Items[]|null
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \OpenAPI\Client\Model\Items[]|null $documents documents
     *
     * @return self
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets direct_claim_url
     *
     * @return string|null
     */
    public function getDirectClaimUrl()
    {
        return $this->container['direct_claim_url'];
    }

    /**
     * Sets direct_claim_url
     *
     * @param string|null $direct_claim_url direct URL to claim submission page for the created policy
     *
     * @return self
     */
    public function setDirectClaimUrl($direct_claim_url)
    {
        $this->container['direct_claim_url'] = $direct_claim_url;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return \OpenAPI\Client\Model\UpdatedAt|null
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param \OpenAPI\Client\Model\UpdatedAt|null $expires_at expires_at
     *
     * @return self
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets policy_number
     *
     * @return string|null
     */
    public function getPolicyNumber()
    {
        return $this->container['policy_number'];
    }

    /**
     * Sets policy_number
     *
     * @param string|null $policy_number policy_number
     *
     * @return self
     */
    public function setPolicyNumber($policy_number)
    {
        $this->container['policy_number'] = $policy_number;

        return $this;
    }

    /**
     * Gets identifiers
     *
     * @return \OpenAPI\Client\Model\BasePolicyIdentifiers[]|null
     */
    public function getIdentifiers()
    {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers
     *
     * @param \OpenAPI\Client\Model\BasePolicyIdentifiers[]|null $identifiers set of policy-specific identifiers (e.g. booking number, travel start date)
     *
     * @return self
     */
    public function setIdentifiers($identifiers)
    {
        $this->container['identifiers'] = $identifiers;

        return $this;
    }

    /**
     * Gets initial_payment_done
     *
     * @return \OpenAPI\Client\Model\InitialPaymentDone
     */
    public function getInitialPaymentDone()
    {
        return $this->container['initial_payment_done'];
    }

    /**
     * Sets initial_payment_done
     *
     * @param \OpenAPI\Client\Model\InitialPaymentDone $initial_payment_done initial_payment_done
     *
     * @return self
     */
    public function setInitialPaymentDone($initial_payment_done)
    {
        $this->container['initial_payment_done'] = $initial_payment_done;

        return $this;
    }

    /**
     * Gets installments
     *
     * @return \OpenAPI\Client\Model\Installements[]|null
     */
    public function getInstallments()
    {
        return $this->container['installments'];
    }

    /**
     * Sets installments
     *
     * @param \OpenAPI\Client\Model\Installements[]|null $installments installments
     *
     * @return self
     */
    public function setInstallments($installments)
    {
        $this->container['installments'] = $installments;

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


