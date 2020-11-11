<?php
/**
 * InlineResponse200Products
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  SiSu\Client
 * @author   SiSu Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SISU POLICY API
 *
 * # Overview  Welcome to the simplesurance Policy API documentation. The API allows management (creating, viewing, canceling, etc.) of insurance policies. simplesurance offers a variety of insurance products, starting with smartphones and laptops, through bikes, glasses or watches and ending up with travel. We are constantly extending our catalog of products. All of our products can be managed via the Core API except for Travel. Travel requires a very specific set of input data in order to create a policy and therefore has a dedicated Travel API.   All the endpoints follow RESTful API principles. The documentation includes example requests and responses, to make the APIs easy to consume.  ## Environments and API Base URIs  simplesurance supports two environments:  1. Sandbox:  https://policy-api.sb-{partner-name}.sisu.sh  2. Production:  https://policy-api.simplesurance.de/  ## Sandbox environment  ### About  Sandbox is a development environment for integrating and testing simplesurance APIs. The sandbox version is not always the same as production. It may contain features that are in beta version, which means that they are not available in our production environment yet. Every partner has a dedicated sandbox environment that contains a predefined set of dummy accounts and transaction data.  ### API Access  You will receive an access token that must be supplied as a Bearer token within every service API call.  Details on the authentication process can be found in the Authentication section of this documentation.  ## Production environment  ### About  The production environment is designed for use within your application when going live with real customers. The environment is fully scalable, secure and facilitates the use of real customer data.  ### API Access  You will receive an access token that must be supplied as a Bearer token within every service API call. Production access tokens vary from the sandbox access token.  Details on the authentication process can be found in the Authentication section of this documentation.  ## Message formats  Standard HTTP verbs and status codes are used for requests and response statuses. Request and response payloads are JSON encoded data formatted. Communication with the APIs is handled over HTTPS protocol only.  | Data |Standard | |-----------|-------| | Strings encoding| UTF-8 | | Datetime | ISO 8601 | | Currency codes | ISO 4217 |  ## Idempotency  We support the idempotency of POST requests. All the requests that have request_id parameter can be idempotent. If the same value is passed in request_id parameter in multiple requests, only the first request will make changes in our system (e.g. create an insurance policy). The following requests will return cached data. Only successful requests are cached, so bad requests will not be cached even if the same request_id is passed. Cached responses contain a custom x-sisu-cached header with value true. x-xisu-process-date header contains the time when the original request was processed.  ## Code generation  It is possible to generate client SDK out of SiSu specifications which is available as part of this documentation (see: Download SiSu specification button). The client SDK can be generated in the language of your choice. We recommend using [SiSu Generator](https://github.com/SiSuTools/openapi-generator).  # Authentication  <!-- ReDoc-Inject: <security-definitions> -->
 *
 * The version of the SiSu document: 0.2.1
 * 
 * Generated by: https://openapi-generator.tech
 * SiSu Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by SiSu Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SiSu\Client\Model;

use \ArrayAccess;
use \SiSu\Client\ObjectSerializer;

/**
 * InlineResponse200Products Class Doc Comment
 *
 * @category Class
 * @package  SiSu\Client
 * @author   SiSu Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineResponse200Products implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_products';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'product_type' => 'string',
        'insurance_company' => '\SiSu\Client\Model\InlineResponse200InsuranceCompany',
        'specification' => '\SiSu\Client\Model\InlineResponse200Specification',
        'active_from' => '\DateTime',
        'identifiers' => 'string[]',
        'tariffs' => '\SiSu\Client\Model\InlineResponse200Tariffs[]',
        'localized_documents' => '\SiSu\Client\Model\InlineResponse200LocalizedDocuments[]',
        'fallback_language' => '\SiSu\Client\Model\Language',
        'claim_limit' => '\SiSu\Client\Model\InlineResponse200ClaimLimit[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'product_type' => null,
        'insurance_company' => null,
        'specification' => null,
        'active_from' => null,
        'identifiers' => null,
        'tariffs' => null,
        'localized_documents' => null,
        'fallback_language' => null,
        'claim_limit' => null
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
        'name' => 'name',
        'product_type' => 'product_type',
        'insurance_company' => 'insurance_company',
        'specification' => 'specification',
        'active_from' => 'active_from',
        'identifiers' => 'identifiers',
        'tariffs' => 'tariffs',
        'localized_documents' => 'localized_documents',
        'fallback_language' => 'fallback_language',
        'claim_limit' => 'claim_limit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'product_type' => 'setProductType',
        'insurance_company' => 'setInsuranceCompany',
        'specification' => 'setSpecification',
        'active_from' => 'setActiveFrom',
        'identifiers' => 'setIdentifiers',
        'tariffs' => 'setTariffs',
        'localized_documents' => 'setLocalizedDocuments',
        'fallback_language' => 'setFallbackLanguage',
        'claim_limit' => 'setClaimLimit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'product_type' => 'getProductType',
        'insurance_company' => 'getInsuranceCompany',
        'specification' => 'getSpecification',
        'active_from' => 'getActiveFrom',
        'identifiers' => 'getIdentifiers',
        'tariffs' => 'getTariffs',
        'localized_documents' => 'getLocalizedDocuments',
        'fallback_language' => 'getFallbackLanguage',
        'claim_limit' => 'getClaimLimit'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['product_type'] = $data['product_type'] ?? null;
        $this->container['insurance_company'] = $data['insurance_company'] ?? null;
        $this->container['specification'] = $data['specification'] ?? null;
        $this->container['active_from'] = $data['active_from'] ?? null;
        $this->container['identifiers'] = $data['identifiers'] ?? null;
        $this->container['tariffs'] = $data['tariffs'] ?? null;
        $this->container['localized_documents'] = $data['localized_documents'] ?? null;
        $this->container['fallback_language'] = $data['fallback_language'] ?? null;
        $this->container['claim_limit'] = $data['claim_limit'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets product_type
     *
     * @return string|null
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type
     *
     * @param string|null $product_type product_type
     *
     * @return self
     */
    public function setProductType($product_type)
    {
        $this->container['product_type'] = $product_type;

        return $this;
    }

    /**
     * Gets insurance_company
     *
     * @return \SiSu\Client\Model\InlineResponse200InsuranceCompany|null
     */
    public function getInsuranceCompany()
    {
        return $this->container['insurance_company'];
    }

    /**
     * Sets insurance_company
     *
     * @param \SiSu\Client\Model\InlineResponse200InsuranceCompany|null $insurance_company insurance_company
     *
     * @return self
     */
    public function setInsuranceCompany($insurance_company)
    {
        $this->container['insurance_company'] = $insurance_company;

        return $this;
    }

    /**
     * Gets specification
     *
     * @return \SiSu\Client\Model\InlineResponse200Specification|null
     */
    public function getSpecification()
    {
        return $this->container['specification'];
    }

    /**
     * Sets specification
     *
     * @param \SiSu\Client\Model\InlineResponse200Specification|null $specification specification
     *
     * @return self
     */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;

        return $this;
    }

    /**
     * Gets active_from
     *
     * @return \DateTime|null
     */
    public function getActiveFrom()
    {
        return $this->container['active_from'];
    }

    /**
     * Sets active_from
     *
     * @param \DateTime|null $active_from active_from
     *
     * @return self
     */
    public function setActiveFrom($active_from)
    {
        $this->container['active_from'] = $active_from;

        return $this;
    }

    /**
     * Gets identifiers
     *
     * @return string[]|null
     */
    public function getIdentifiers()
    {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers
     *
     * @param string[]|null $identifiers set of identifiers applicable to policies for the product
     *
     * @return self
     */
    public function setIdentifiers($identifiers)
    {
        $this->container['identifiers'] = $identifiers;

        return $this;
    }

    /**
     * Gets tariffs
     *
     * @return \SiSu\Client\Model\InlineResponse200Tariffs[]|null
     */
    public function getTariffs()
    {
        return $this->container['tariffs'];
    }

    /**
     * Sets tariffs
     *
     * @param \SiSu\Client\Model\InlineResponse200Tariffs[]|null $tariffs set of tariffs for the product
     *
     * @return self
     */
    public function setTariffs($tariffs)
    {
        $this->container['tariffs'] = $tariffs;

        return $this;
    }

    /**
     * Gets localized_documents
     *
     * @return \SiSu\Client\Model\InlineResponse200LocalizedDocuments[]|null
     */
    public function getLocalizedDocuments()
    {
        return $this->container['localized_documents'];
    }

    /**
     * Sets localized_documents
     *
     * @param \SiSu\Client\Model\InlineResponse200LocalizedDocuments[]|null $localized_documents Set of legal documents for the product. AVB and PIB are expected to be here.
     *
     * @return self
     */
    public function setLocalizedDocuments($localized_documents)
    {
        $this->container['localized_documents'] = $localized_documents;

        return $this;
    }

    /**
     * Gets fallback_language
     *
     * @return \SiSu\Client\Model\Language|null
     */
    public function getFallbackLanguage()
    {
        return $this->container['fallback_language'];
    }

    /**
     * Sets fallback_language
     *
     * @param \SiSu\Client\Model\Language|null $fallback_language fallback_language
     *
     * @return self
     */
    public function setFallbackLanguage($fallback_language)
    {
        $this->container['fallback_language'] = $fallback_language;

        return $this;
    }

    /**
     * Gets claim_limit
     *
     * @return \SiSu\Client\Model\InlineResponse200ClaimLimit[]|null
     */
    public function getClaimLimit()
    {
        return $this->container['claim_limit'];
    }

    /**
     * Sets claim_limit
     *
     * @param \SiSu\Client\Model\InlineResponse200ClaimLimit[]|null $claim_limit Defines how many claims allowed per country
     *
     * @return self
     */
    public function setClaimLimit($claim_limit)
    {
        $this->container['claim_limit'] = $claim_limit;

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


