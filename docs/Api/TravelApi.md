# OpenAPI\Client\TravelApi

All URIs are relative to *https://policy-api.simplesurance.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**calculateTravelPolicy**](TravelApi.md#calculateTravelPolicy) | **POST** /travel/policies/calculate | 
[**cancelTravelPolicy**](TravelApi.md#cancelTravelPolicy) | **POST** /travel/policies/{policy_number}/cancel | 
[**createTravelPolicy**](TravelApi.md#createTravelPolicy) | **POST** /travel/policies | 
[**getTravelPolicy**](TravelApi.md#getTravelPolicy) | **GET** /travel/policies/{policy_number} | 
[**listTravelPolicies**](TravelApi.md#listTravelPolicies) | **GET** /travel/policies | 



## calculateTravelPolicy

> \OpenAPI\Client\Model\TravelCalculation calculateTravelPolicy($travel_calculate)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TravelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$travel_calculate = new \OpenAPI\Client\Model\TravelCalculate(); // \OpenAPI\Client\Model\TravelCalculate | 

try {
    $result = $apiInstance->calculateTravelPolicy($travel_calculate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelApi->calculateTravelPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **travel_calculate** | [**\OpenAPI\Client\Model\TravelCalculate**](../Model/TravelCalculate.md)|  |

### Return type

[**\OpenAPI\Client\Model\TravelCalculation**](../Model/TravelCalculation.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## cancelTravelPolicy

> \OpenAPI\Client\Model\Refund cancelTravelPolicy($policy_number, $cancel_policy_request)



Cancel a policy with given policy number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TravelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$policy_number = new \stdClass; // object | 
$cancel_policy_request = new \OpenAPI\Client\Model\CancelPolicyRequest(); // \OpenAPI\Client\Model\CancelPolicyRequest | 

try {
    $result = $apiInstance->cancelTravelPolicy($policy_number, $cancel_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelApi->cancelTravelPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **policy_number** | [**object**](../Model/.md)|  |
 **cancel_policy_request** | [**\OpenAPI\Client\Model\CancelPolicyRequest**](../Model/CancelPolicyRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\Refund**](../Model/Refund.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createTravelPolicy

> \OpenAPI\Client\Model\PolicyInfo createTravelPolicy($travel_create)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TravelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$travel_create = new \OpenAPI\Client\Model\TravelCreate(); // \OpenAPI\Client\Model\TravelCreate | 

try {
    $result = $apiInstance->createTravelPolicy($travel_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelApi->createTravelPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **travel_create** | [**\OpenAPI\Client\Model\TravelCreate**](../Model/TravelCreate.md)|  |

### Return type

[**\OpenAPI\Client\Model\PolicyInfo**](../Model/PolicyInfo.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTravelPolicy

> \OpenAPI\Client\Model\Policy getTravelPolicy($policy_number)



Gets the travel policy belonging to the provided policy number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TravelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$policy_number = new \stdClass; // object | 

try {
    $result = $apiInstance->getTravelPolicy($policy_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelApi->getTravelPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **policy_number** | [**object**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\Policy**](../Model/Policy.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listTravelPolicies

> \OpenAPI\Client\Model\ListPoliciesResponse listTravelPolicies($page, $per_page, $external_id, $policy_number, $email, $sorting_column, $sorting_direction)



List all the policies of autenticated user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TravelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | 
$per_page = 56; // int | 
$external_id = 'external_id_example'; // string | 
$policy_number = new \stdClass; // object | 
$email = 'email_example'; // string | 
$sorting_column = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ListPoliciesSorting(); // \OpenAPI\Client\Model\ListPoliciesSorting | 
$sorting_direction = new \stdClass; // object | 

try {
    $result = $apiInstance->listTravelPolicies($page, $per_page, $external_id, $policy_number, $email, $sorting_column, $sorting_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelApi->listTravelPolicies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  |
 **per_page** | **int**|  |
 **external_id** | **string**|  | [optional]
 **policy_number** | [**object**](../Model/.md)|  | [optional]
 **email** | **string**|  | [optional]
 **sorting_column** | [**\OpenAPI\Client\Model\ListPoliciesSorting**](../Model/.md)|  | [optional]
 **sorting_direction** | [**object**](../Model/.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ListPoliciesResponse**](../Model/ListPoliciesResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

