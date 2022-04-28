# # CancelPolicyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cancelled_at** | [**\SiSu\Client\Model\UpdatedAt**](UpdatedAt.md) |  | [optional] 
**reason** | [**\SiSu\Client\Model\CancellationReason**](CancellationReason.md) |  | 
**is_external_number** | **bool** | If true, provided ID will be matched against the external policy ID instead of simplesurance policy number. | [optional] 
**request_id** | **string** | Unique request identifier. Repeated requests with the same id will not be processed multiple times, but cached response will be returned instead. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


