# # BasePolicy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activated_at** | [**\OpenAPI\Client\Model\UpdatedAt**](UpdatedAt.md) |  | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | ISO 8601 date format | [optional] 
**cancelled_at** | [**\OpenAPI\Client\Model\UpdatedAt**](UpdatedAt.md) |  | [optional] 
**coverages** | **string[]** |  | [optional] 
**customer** | [**\OpenAPI\Client\Model\BasePolicyCustomer**](BasePolicyCustomer.md) |  | [optional] 
**holder** | [**\OpenAPI\Client\Model\Customer**](Customer.md) |  | [optional] 
**documents** | [**\OpenAPI\Client\Model\Items[]**](Items.md) |  | [optional] 
**direct_claim_url** | **string** | direct URL to claim submission page for the created policy | [optional] 
**expires_at** | [**\OpenAPI\Client\Model\UpdatedAt**](UpdatedAt.md) |  | [optional] 
**policy_number** | **string** |  | [optional] 
**identifiers** | [**\OpenAPI\Client\Model\BasePolicyIdentifiers[]**](BasePolicyIdentifiers.md) | set of policy-specific identifiers (e.g. booking number, travel start date) | [optional] 
**initial_payment_done** | [**\OpenAPI\Client\Model\InitialPaymentDone**](InitialPaymentDone.md) |  | 
**installments** | [**\OpenAPI\Client\Model\Installements[]**](Installements.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


