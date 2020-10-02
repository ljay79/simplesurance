# # TravelCreateAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**integration_id** | **string** | This value is provided by simplesurance. The field is used to identify requests coming from the partner. | 
**booking_number** | **string** | Booking number of the travel. | [optional] 
**booking_date** | [**\OpenAPI\Client\Model\UpdatedAt**](UpdatedAt.md) |  | [optional] 
**customer** | [**\OpenAPI\Client\Model\Customer**](Customer.md) |  | 
**holder** | [**\OpenAPI\Client\Model\Customer**](Customer.md) |  | [optional] 
**external_id** | [**\OpenAPI\Client\Model\ExternalId**](ExternalId.md) |  | [optional] 
**gdpr_consent** | [**\OpenAPI\Client\Model\GdprConsent**](GdprConsent.md) |  | 
**travellers** | [**\OpenAPI\Client\Model\Traveller[]**](Traveller.md) | Information about all travellers should be provided here, including the customer data, in case he/she is also a traveller. | 
**request_id** | [**\OpenAPI\Client\Model\RequestId**](RequestId.md) |  | [optional] 
**travel_price** | [**\OpenAPI\Client\Model\BillingPrice**](BillingPrice.md) |  | [optional] 
**payment** | [**\OpenAPI\Client\Model\Payment**](Payment.md) |  | [optional] 
**is_test** | [**\OpenAPI\Client\Model\IsTest**](IsTest.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


