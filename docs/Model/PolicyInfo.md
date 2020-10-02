# # PolicyInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tax** | [**\OpenAPI\Client\Model\BillingPrice**](BillingPrice.md) |  | [optional] 
**documents** | [**\OpenAPI\Client\Model\PolicyInfoDocuments[]**](PolicyInfoDocuments.md) | Documents associated to the policy | [optional] 
**payment_url** | **string** |  | [optional] 
**policy_number** | **string** | Policy number | [optional] 
**installments** | [**\OpenAPI\Client\Model\Installements[]**](Installements.md) |  | [optional] 
**initial_payment_done** | **bool** | First payment of the policy. In the case of a onetime payment, it means the whole amount. In the case of a recurring payment, it means the first installment. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


