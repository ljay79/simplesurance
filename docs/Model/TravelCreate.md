# # TravelCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product** | **string** | Insurance product name. To be provided by simplesurance | 
**destination** | [**\SiSu\Client\Model\Country[]**](Country.md) | Destination countries of the travel. Represented by ISO 3166-1 alpha-2 country code. &lt;br&gt;*At least one of (&#39;destination_group&#39; or &#39;destination&#39;) properties has to be provided.* | [optional] 
**destination_group** | **string** | Destination group containing countries of the travel. &lt;br&gt;*At least one of (&#39;destination_group&#39; or &#39;destination&#39;) properties has to be provided.* | [optional] 
**start_date** | [**\SiSu\Client\Model\UpdatedAt**](UpdatedAt.md) |  | 
**end_date** | [**\SiSu\Client\Model\UpdatedAt**](UpdatedAt.md) |  | 
**country** | **string** | ISO 3166-1 alpha-2 country code  Country of the policy typically is a determining factor in the tax rate, claim handling language and Terms and Conditions document. For eg. if a policy is DE then the policy pdf and claims would typically be in DE. | 
**language** | **string** | ISO 639-1 language code  Language of the Terms and Conditions document. | [optional] 
**integration_id** | **string** | This value is provided by simplesurance. The field is used to identify requests coming from the partner. | 
**booking_number** | **string** | Booking number of the travel. | [optional] 
**booking_date** | [**\SiSu\Client\Model\UpdatedAt**](UpdatedAt.md) |  | [optional] 
**customer** | [**\SiSu\Client\Model\Customer**](Customer.md) |  | 
**holder** | [**\SiSu\Client\Model\Customer**](Customer.md) |  | [optional] 
**external_id** | [**\SiSu\Client\Model\ExternalId**](ExternalId.md) |  | [optional] 
**gdpr_consent** | [**\SiSu\Client\Model\GdprConsent**](GdprConsent.md) |  | 
**travellers** | [**\SiSu\Client\Model\Traveller[]**](Traveller.md) | Information about all travellers should be provided here, including the customer data, in case he/she is also a traveller. | 
**request_id** | [**\SiSu\Client\Model\RequestId**](RequestId.md) |  | [optional] 
**travel_price** | [**\SiSu\Client\Model\BillingPrice**](BillingPrice.md) |  | [optional] 
**payment** | [**\SiSu\Client\Model\Payment**](Payment.md) |  | [optional] 
**is_test** | [**\SiSu\Client\Model\IsTest**](IsTest.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


