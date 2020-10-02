<?php
/**
 * TravelCreateAllOf
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
 * TravelCreateAllOf Class Doc Comment
 *
 * @category Class
 * @package  SiSu\Client
 * @author   SiSu Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TravelCreateAllOf implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TravelCreate_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'integration_id' => 'string',
        'booking_number' => 'string',
        'booking_date' => '\SiSu\Client\Model\UpdatedAt',
        'customer' => '\SiSu\Client\Model\Customer',
        'holder' => '\SiSu\Client\Model\Customer',
        'external_id' => '\SiSu\Client\Model\ExternalId',
        'gdpr_consent' => '\SiSu\Client\Model\GdprConsent',
        'travellers' => '\SiSu\Client\Model\Traveller[]',
        'request_id' => '\SiSu\Client\Model\RequestId',
        'travel_price' => '\SiSu\Client\Model\BillingPrice',
        'payment' => '\SiSu\Client\Model\Payment',
        'is_test' => '\SiSu\Client\Model\IsTest'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'integration_id' => null,
        'booking_number' => null,
        'booking_date' => null,
        'customer' => null,
        'holder' => null,
        'external_id' => null,
        'gdpr_consent' => null,
        'travellers' => null,
        'request_id' => null,
        'travel_price' => null,
        'payment' => null,
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
        'integration_id' => 'integration_id',
        'booking_number' => 'booking_number',
        'booking_date' => 'booking_date',
        'customer' => 'customer',
        'holder' => 'holder',
        'external_id' => 'external_id',
        'gdpr_consent' => 'gdpr_consent',
        'travellers' => 'travellers',
        'request_id' => 'request_id',
        'travel_price' => 'travel_price',
        'payment' => 'payment',
        'is_test' => 'is_test'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'integration_id' => 'setIntegrationId',
        'booking_number' => 'setBookingNumber',
        'booking_date' => 'setBookingDate',
        'customer' => 'setCustomer',
        'holder' => 'setHolder',
        'external_id' => 'setExternalId',
        'gdpr_consent' => 'setGdprConsent',
        'travellers' => 'setTravellers',
        'request_id' => 'setRequestId',
        'travel_price' => 'setTravelPrice',
        'payment' => 'setPayment',
        'is_test' => 'setIsTest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'integration_id' => 'getIntegrationId',
        'booking_number' => 'getBookingNumber',
        'booking_date' => 'getBookingDate',
        'customer' => 'getCustomer',
        'holder' => 'getHolder',
        'external_id' => 'getExternalId',
        'gdpr_consent' => 'getGdprConsent',
        'travellers' => 'getTravellers',
        'request_id' => 'getRequestId',
        'travel_price' => 'getTravelPrice',
        'payment' => 'getPayment',
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
        $this->container['integration_id'] = $data['integration_id'] ?? null;
        $this->container['booking_number'] = $data['booking_number'] ?? null;
        $this->container['booking_date'] = $data['booking_date'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['holder'] = $data['holder'] ?? null;
        $this->container['external_id'] = $data['external_id'] ?? null;
        $this->container['gdpr_consent'] = $data['gdpr_consent'] ?? null;
        $this->container['travellers'] = $data['travellers'] ?? null;
        $this->container['request_id'] = $data['request_id'] ?? null;
        $this->container['travel_price'] = $data['travel_price'] ?? null;
        $this->container['payment'] = $data['payment'] ?? null;
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

        if ($this->container['integration_id'] === null) {
            $invalidProperties[] = "'integration_id' can't be null";
        }
        if ((mb_strlen($this->container['integration_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'integration_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
        }
        if ($this->container['gdpr_consent'] === null) {
            $invalidProperties[] = "'gdpr_consent' can't be null";
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
            throw new \InvalidArgumentException('invalid length for $integration_id when calling TravelCreateAllOf., must be bigger than or equal to 1.');
        }

        $this->container['integration_id'] = $integration_id;

        return $this;
    }

    /**
     * Gets booking_number
     *
     * @return string|null
     */
    public function getBookingNumber()
    {
        return $this->container['booking_number'];
    }

    /**
     * Sets booking_number
     *
     * @param string|null $booking_number Booking number of the travel.
     *
     * @return self
     */
    public function setBookingNumber($booking_number)
    {
        $this->container['booking_number'] = $booking_number;

        return $this;
    }

    /**
     * Gets booking_date
     *
     * @return \SiSu\Client\Model\UpdatedAt|null
     */
    public function getBookingDate()
    {
        return $this->container['booking_date'];
    }

    /**
     * Sets booking_date
     *
     * @param \SiSu\Client\Model\UpdatedAt|null $booking_date booking_date
     *
     * @return self
     */
    public function setBookingDate($booking_date)
    {
        $this->container['booking_date'] = $booking_date;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \SiSu\Client\Model\Customer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \SiSu\Client\Model\Customer $customer customer
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
     * @return \SiSu\Client\Model\Customer|null
     */
    public function getHolder()
    {
        return $this->container['holder'];
    }

    /**
     * Sets holder
     *
     * @param \SiSu\Client\Model\Customer|null $holder holder
     *
     * @return self
     */
    public function setHolder($holder)
    {
        $this->container['holder'] = $holder;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return \SiSu\Client\Model\ExternalId|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param \SiSu\Client\Model\ExternalId|null $external_id external_id
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets gdpr_consent
     *
     * @return \SiSu\Client\Model\GdprConsent
     */
    public function getGdprConsent()
    {
        return $this->container['gdpr_consent'];
    }

    /**
     * Sets gdpr_consent
     *
     * @param \SiSu\Client\Model\GdprConsent $gdpr_consent gdpr_consent
     *
     * @return self
     */
    public function setGdprConsent($gdpr_consent)
    {
        $this->container['gdpr_consent'] = $gdpr_consent;

        return $this;
    }

    /**
     * Gets travellers
     *
     * @return \SiSu\Client\Model\Traveller[]
     */
    public function getTravellers()
    {
        return $this->container['travellers'];
    }

    /**
     * Sets travellers
     *
     * @param \SiSu\Client\Model\Traveller[] $travellers Information about all travellers should be provided here, including the customer data, in case he/she is also a traveller.
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
     * @return \SiSu\Client\Model\RequestId|null
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param \SiSu\Client\Model\RequestId|null $request_id request_id
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
     * @return \SiSu\Client\Model\BillingPrice|null
     */
    public function getTravelPrice()
    {
        return $this->container['travel_price'];
    }

    /**
     * Sets travel_price
     *
     * @param \SiSu\Client\Model\BillingPrice|null $travel_price travel_price
     *
     * @return self
     */
    public function setTravelPrice($travel_price)
    {
        $this->container['travel_price'] = $travel_price;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \SiSu\Client\Model\Payment|null
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \SiSu\Client\Model\Payment|null $payment payment
     *
     * @return self
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets is_test
     *
     * @return \SiSu\Client\Model\IsTest|null
     */
    public function getIsTest()
    {
        return $this->container['is_test'];
    }

    /**
     * Sets is_test
     *
     * @param \SiSu\Client\Model\IsTest|null $is_test is_test
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


