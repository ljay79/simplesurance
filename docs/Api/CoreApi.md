# SiSu\Client\CoreApi

All URIs are relative to *https://policy-api.simplesurance.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelPolicy**](CoreApi.md#cancelPolicy) | **POST** /policies/{policy_number}/cancel | 
[**createPolicies**](CoreApi.md#createPolicies) | **POST** /policies | 
[**getPolicy**](CoreApi.md#getPolicy) | **GET** /policies/{policy_number} | 
[**listPolicies**](CoreApi.md#listPolicies) | **GET** /policies | 



## cancelPolicy

> \SiSu\Client\Model\Ok cancelPolicy($policy_number, $cancel_policy_request)



Cancel a policy with given policy number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SiSu\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SiSu\Client\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$policy_number = new \stdClass; // object | 
$cancel_policy_request = new \SiSu\Client\Model\CancelPolicyRequest(); // \SiSu\Client\Model\CancelPolicyRequest | 

try {
    $result = $apiInstance->cancelPolicy($policy_number, $cancel_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->cancelPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **policy_number** | [**object**](../Model/.md)|  |
 **cancel_policy_request** | [**\SiSu\Client\Model\CancelPolicyRequest**](../Model/CancelPolicyRequest.md)|  |

### Return type

[**\SiSu\Client\Model\Ok**](../Model/Ok.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createPolicies

> \SiSu\Client\Model\CreatePoliciesResponse createPolicies($create_policies_request)



Creation of policies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SiSu\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SiSu\Client\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_policies_request = new \SiSu\Client\Model\CreatePoliciesRequest(); // \SiSu\Client\Model\CreatePoliciesRequest | 

try {
    $result = $apiInstance->createPolicies($create_policies_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->createPolicies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_policies_request** | [**\SiSu\Client\Model\CreatePoliciesRequest**](../Model/CreatePoliciesRequest.md)|  |

### Return type

[**\SiSu\Client\Model\CreatePoliciesResponse**](../Model/CreatePoliciesResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPolicy

> \SiSu\Client\Model\Policy getPolicy($policy_number)



Retrieve policy details from number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SiSu\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SiSu\Client\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$policy_number = new \stdClass; // object | 

try {
    $result = $apiInstance->getPolicy($policy_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->getPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **policy_number** | [**object**](../Model/.md)|  |

### Return type

[**\SiSu\Client\Model\Policy**](../Model/Policy.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listPolicies

> \SiSu\Client\Model\ListPoliciesResponse listPolicies($page, $per_page, $external_id, $policy_number, $email, $sorting_column, $sorting_direction)



List all the policies of autenticated user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SiSu\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SiSu\Client\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | 
$per_page = 56; // int | 
$external_id = 'external_id_example'; // string | 
$policy_number = 200000001231; // string | 
$email = 'email_example'; // string | 
$sorting_column = new \SiSu\Client\Model\\SiSu\Client\Model\ListPoliciesSorting(); // \SiSu\Client\Model\ListPoliciesSorting | 
$sorting_direction = 'sorting_direction_example'; // string | 

try {
    $result = $apiInstance->listPolicies($page, $per_page, $external_id, $policy_number, $email, $sorting_column, $sorting_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->listPolicies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  |
 **per_page** | **int**|  |
 **external_id** | **string**|  | [optional]
 **policy_number** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **sorting_column** | [**\SiSu\Client\Model\ListPoliciesSorting**](../Model/.md)|  | [optional]
 **sorting_direction** | **string**|  | [optional]

### Return type

[**\SiSu\Client\Model\ListPoliciesResponse**](../Model/ListPoliciesResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

