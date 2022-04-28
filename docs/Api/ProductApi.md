# SiSu\Client\ProductApi

All URIs are relative to *https://policy-api.simplesurance.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listProducts**](ProductApi.md#listProducts) | **GET** /products | 



## listProducts

> \SiSu\Client\Model\InlineResponse200 listProducts($page, $per_page, $categories, $countries, $product_types, $integration_type, $sorting_column, $sorting_direction)



List all the products of autenticated user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SiSu\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SiSu\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | 
$per_page = 56; // int | 
$categories = array('categories_example'); // string[] | 
$countries = array('countries_example'); // string[] | 
$product_types = array('product_types_example'); // string[] | 
$integration_type = 'integration_type_example'; // string | 
$sorting_column = 'sorting_column_example'; // string | 
$sorting_direction = new \stdClass; // object | 

try {
    $result = $apiInstance->listProducts($page, $per_page, $categories, $countries, $product_types, $integration_type, $sorting_column, $sorting_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->listProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  |
 **per_page** | **int**|  |
 **categories** | [**string[]**](../Model/string.md)|  | [optional]
 **countries** | [**string[]**](../Model/string.md)|  | [optional]
 **product_types** | [**string[]**](../Model/string.md)|  | [optional]
 **integration_type** | **string**|  | [optional]
 **sorting_column** | **string**|  | [optional]
 **sorting_direction** | [**object**](../Model/.md)|  | [optional]

### Return type

[**\SiSu\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

