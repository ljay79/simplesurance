# # TravelCreateAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
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


