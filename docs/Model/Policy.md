# # Policy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activated_at** | [**\SiSu\Client\Model\UpdatedAt**](UpdatedAt.md) |  | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | ISO 8601 date format | [optional] 
**cancelled_at** | [**\SiSu\Client\Model\UpdatedAt**](UpdatedAt.md) |  | [optional] 
**coverages** | **string[]** |  | [optional] 
**customer** | [**\SiSu\Client\Model\BasePolicyCustomer**](BasePolicyCustomer.md) |  | [optional] 
**holder** | [**\SiSu\Client\Model\Customer**](Customer.md) |  | [optional] 
**documents** | [**\SiSu\Client\Model\Items[]**](Items.md) |  | [optional] 
**direct_claim_url** | **string** | direct URL to claim submission page for the created policy | [optional] 
**expires_at** | [**\SiSu\Client\Model\UpdatedAt**](UpdatedAt.md) |  | [optional] 
**policy_number** | **string** |  | [optional] 
**identifiers** | [**\SiSu\Client\Model\BasePolicyIdentifiers[]**](BasePolicyIdentifiers.md) | set of policy-specific identifiers (e.g. booking number, travel start date) | [optional] 
**initial_payment_done** | [**\SiSu\Client\Model\InitialPaymentDone**](InitialPaymentDone.md) |  | 
**installments** | [**\SiSu\Client\Model\Installements[]**](Installements.md) |  | [optional] 
**created_at** | [**\SiSu\Client\Model\UpdatedAt**](UpdatedAt.md) |  | [optional] 
**insured_objects** | [**\SiSu\Client\Model\Items[]**](Items.md) |  | [optional] 
**tariff_name** | **string** | Display name of the product which is translated into the customer&#39;s local language. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


