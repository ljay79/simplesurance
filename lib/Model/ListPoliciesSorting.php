<?php
/**
 * ListPoliciesSorting
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
use \SiSu\Client\ObjectSerializer;

/**
 * ListPoliciesSorting Class Doc Comment
 *
 * @category Class
 * @package  SiSu\Client
 * @author   SiSu Generator team
 * @link     https://openapi-generator.tech
 */
class ListPoliciesSorting
{
    /**
     * Possible values of this enum
     */
    const POLICY_NUMBER = 'POLICY_NUMBER';
    const ACTIVATED_AT = 'ACTIVATED_AT';
    const UPDATED_AT = 'UPDATED_AT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::POLICY_NUMBER,
            self::ACTIVATED_AT,
            self::UPDATED_AT,
        ];
    }
}


