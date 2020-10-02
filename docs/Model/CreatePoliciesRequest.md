# # CreatePoliciesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country** | [**\OpenAPI\Client\Model\Country**](Country.md) |  | 
**external_id** | **string** | Identifier of a sale/customer in an external system. You can use your own policy id here. | [optional] 
**integration_id** | **string** | This value is provided by simplesurance. The field is used to identify requests coming from the partner. | 
**language** | [**\OpenAPI\Client\Model\Language**](Language.md) |  | [optional] 
**policies** | [**\OpenAPI\Client\Model\CreatePoliciesRequestEntry[]**](CreatePoliciesRequestEntry.md) |  | 
**request_id** | [**\OpenAPI\Client\Model\RequestId**](RequestId.md) |  | [optional] 
**payment** | [**\OpenAPI\Client\Model\CreatePoliciesRequestPayment**](CreatePoliciesRequestPayment.md) |  | [optional] 
**coupon_code** | **string** | Discount code to be used for the created policies | [optional] 
**is_test** | **bool** | Send true in the case of creating a test certificate. Should always be used when creating test policies in simplesurance production environment. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


