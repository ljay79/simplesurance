# # InlineResponse200Products

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional] 
**product_type** | **string** |  | [optional] 
**insurance_company** | [**\OpenAPI\Client\Model\InlineResponse200InsuranceCompany**](InlineResponse200InsuranceCompany.md) |  | [optional] 
**specification** | [**\OpenAPI\Client\Model\InlineResponse200Specification**](InlineResponse200Specification.md) |  | [optional] 
**active_from** | [**\OpenAPI\Client\Model\UpdatedAt**](UpdatedAt.md) |  | [optional] 
**identifiers** | **string[]** | set of identifiers applicable to policies for the product | [optional] 
**tariffs** | [**\OpenAPI\Client\Model\InlineResponse200Tariffs[]**](InlineResponse200Tariffs.md) | set of tariffs for the product | [optional] 
**localized_documents** | [**\OpenAPI\Client\Model\InlineResponse200LocalizedDocuments[]**](InlineResponse200LocalizedDocuments.md) | Set of legal documents for the product. AVB and PIB are expected to be here. | [optional] 
**fallback_language** | [**\OpenAPI\Client\Model\Language**](Language.md) |  | [optional] 
**claim_limit** | [**\OpenAPI\Client\Model\InlineResponse200ClaimLimit[]**](InlineResponse200ClaimLimit.md) | Defines how many claims allowed per country | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


