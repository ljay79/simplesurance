# OpenAPIClient-php

# Overview

Welcome to the simplesurance Policy API documentation. The API allows management (creating, viewing, canceling, etc.) of insurance policies. simplesurance
offers a variety of insurance products, starting with smartphones and laptops, through bikes, glasses or watches and ending up with travel. We are constantly extending our catalog of products.
All of our products can be managed via the Core API except for Travel. Travel requires a very specific set of input data in order to create a policy and therefore has a dedicated Travel API.


All the endpoints follow RESTful API principles. The documentation includes example requests and responses, to make the APIs easy to consume.

## Environments and API Base URIs

simplesurance supports two environments:

1. Sandbox:  https://policy-api.sb-{partner-name}.sisu.sh

2. Production:  https://policy-api.simplesurance.de/

## Sandbox environment

### About

Sandbox is a development environment for integrating and testing simplesurance APIs. The sandbox version is not always the same as production. It may contain features that are in beta version, which means that they are not available in our production environment yet. Every partner has a dedicated sandbox environment that contains a predefined set of dummy accounts and transaction data.

### API Access

You will receive an access token that must be supplied as a Bearer token within every service API call.

Details on the authentication process can be found in the Authentication section of this documentation.

## Production environment

### About

The production environment is designed for use within your application when going live with real customers. The environment is fully scalable, secure and facilitates the use of real customer data.

### API Access

You will receive an access token that must be supplied as a Bearer token within every service API call. Production access tokens vary from the sandbox access token.

Details on the authentication process can be found in the Authentication section of this documentation.

## Message formats

Standard HTTP verbs and status codes are used for requests and response statuses. Request and response payloads are JSON encoded data formatted. Communication with the APIs is handled over HTTPS protocol only.

| Data |Standard |
|-----------|-------|
| Strings encoding| UTF-8 |
| Datetime | ISO 8601 |
| Currency codes | ISO 4217 |

## Idempotency

We support the idempotency of POST requests. All the requests that have request_id parameter can be idempotent. If the same value is passed in request_id parameter in multiple requests, only the first request will make changes in our system (e.g. create an insurance policy). The following requests will return cached data. Only successful requests are cached, so bad requests will not be cached even if the same request_id is passed. Cached responses contain a custom x-sisu-cached header with value true.
x-xisu-process-date header contains the time when the original request was processed.

## Code generation

It is possible to generate client SDK out of OpenAPI specifications which is available as part of this documentation (see: Download OpenAPI specification button).
The client SDK can be generated in the language of your choice. We recommend using [OpenAPI Generator](https://github.com/OpenAPITools/openapi-generator).

# Authentication

<!-- ReDoc-Inject: <security-definitions> -->

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 0.2.1
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 7.2 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$policy_number = new \stdClass; // object | 
$cancel_policy_request = new \OpenAPI\Client\Model\CancelPolicyRequest(); // \OpenAPI\Client\Model\CancelPolicyRequest | 

try {
    $result = $apiInstance->cancelPolicy($policy_number, $cancel_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->cancelPolicy: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://policy-api.simplesurance.de*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CoreApi* | [**cancelPolicy**](docs/Api/CoreApi.md#cancelpolicy) | **POST** /policies/{policy_number}/cancel | 
*CoreApi* | [**createPolicies**](docs/Api/CoreApi.md#createpolicies) | **POST** /policies | 
*CoreApi* | [**getPolicy**](docs/Api/CoreApi.md#getpolicy) | **GET** /policies/{policy_number} | 
*CoreApi* | [**listPolicies**](docs/Api/CoreApi.md#listpolicies) | **GET** /policies | 
*ProductApi* | [**listProducts**](docs/Api/ProductApi.md#listproducts) | **GET** /products | 
*TravelApi* | [**calculateTravelPolicy**](docs/Api/TravelApi.md#calculatetravelpolicy) | **POST** /travel/policies/calculate | 
*TravelApi* | [**cancelTravelPolicy**](docs/Api/TravelApi.md#canceltravelpolicy) | **POST** /travel/policies/{policy_number}/cancel | 
*TravelApi* | [**createTravelPolicy**](docs/Api/TravelApi.md#createtravelpolicy) | **POST** /travel/policies | 
*TravelApi* | [**getTravelPolicy**](docs/Api/TravelApi.md#gettravelpolicy) | **GET** /travel/policies/{policy_number} | 
*TravelApi* | [**listTravelPolicies**](docs/Api/TravelApi.md#listtravelpolicies) | **GET** /travel/policies | 


## Documentation For Models

 - [BasePolicy](docs/Model/BasePolicy.md)
 - [BasePolicyCustomer](docs/Model/BasePolicyCustomer.md)
 - [BasePolicyCustomerAddress](docs/Model/BasePolicyCustomerAddress.md)
 - [BasePolicyIdentifiers](docs/Model/BasePolicyIdentifiers.md)
 - [CancelPolicyRequest](docs/Model/CancelPolicyRequest.md)
 - [CancellationReason](docs/Model/CancellationReason.md)
 - [CreatePoliciesRequest](docs/Model/CreatePoliciesRequest.md)
 - [CreatePoliciesRequestEntry](docs/Model/CreatePoliciesRequestEntry.md)
 - [CreatePoliciesRequestEntryInsuredObjects](docs/Model/CreatePoliciesRequestEntryInsuredObjects.md)
 - [CreatePoliciesRequestPayment](docs/Model/CreatePoliciesRequestPayment.md)
 - [CreatePoliciesRequestPaymentAcceptanceParams](docs/Model/CreatePoliciesRequestPaymentAcceptanceParams.md)
 - [CreatePoliciesResponse](docs/Model/CreatePoliciesResponse.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse200ClaimLimit](docs/Model/InlineResponse200ClaimLimit.md)
 - [InlineResponse200GeneralDeductibles](docs/Model/InlineResponse200GeneralDeductibles.md)
 - [InlineResponse200InsuranceCompany](docs/Model/InlineResponse200InsuranceCompany.md)
 - [InlineResponse200LocalizedDocuments](docs/Model/InlineResponse200LocalizedDocuments.md)
 - [InlineResponse200PaymentSchema](docs/Model/InlineResponse200PaymentSchema.md)
 - [InlineResponse200ProductCodes](docs/Model/InlineResponse200ProductCodes.md)
 - [InlineResponse200Products](docs/Model/InlineResponse200Products.md)
 - [InlineResponse200Specification](docs/Model/InlineResponse200Specification.md)
 - [InlineResponse200Tariffs](docs/Model/InlineResponse200Tariffs.md)
 - [InlineResponse400](docs/Model/InlineResponse400.md)
 - [InlineResponse400Errors](docs/Model/InlineResponse400Errors.md)
 - [InlineResponse409](docs/Model/InlineResponse409.md)
 - [Installements](docs/Model/Installements.md)
 - [ListPoliciesResponse](docs/Model/ListPoliciesResponse.md)
 - [ListPoliciesSorting](docs/Model/ListPoliciesSorting.md)
 - [Ok](docs/Model/Ok.md)
 - [Policy](docs/Model/Policy.md)
 - [PolicyAllOf](docs/Model/PolicyAllOf.md)
 - [PolicyInfo](docs/Model/PolicyInfo.md)
 - [PolicyInfoDocuments](docs/Model/PolicyInfoDocuments.md)
 - [Refund](docs/Model/Refund.md)
 - [RefundBillingPrice](docs/Model/RefundBillingPrice.md)
 - [TravelCalculate](docs/Model/TravelCalculate.md)
 - [TravelCalculateAllOf](docs/Model/TravelCalculateAllOf.md)
 - [TravelCalculation](docs/Model/TravelCalculation.md)
 - [TravelCreate](docs/Model/TravelCreate.md)
 - [TravelCreateAllOf](docs/Model/TravelCreateAllOf.md)
 - [Traveller](docs/Model/Traveller.md)
 - [TravellerAllOf](docs/Model/TravellerAllOf.md)
 - [TravellerBaseInfo](docs/Model/TravellerBaseInfo.md)
 - [TripBaseInfo](docs/Model/TripBaseInfo.md)


## Documentation For Authorization



## Bearer


- **Type**: Bearer authentication


## Author



