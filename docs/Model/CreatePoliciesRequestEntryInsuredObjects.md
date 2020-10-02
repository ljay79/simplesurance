# # CreatePoliciesRequestEntryInsuredObjects

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**identifiers** | [**\OpenAPI\Client\Model\Items[]**](Items.md) | Required identifiers vary based on product category    | Category | Required Identifiers |   |-----------|-------|   | CATEGORY_SMARTPHONE | SERIAL_NUMBER or (PRODUCT_NAME and INVOICE_NUMBER) or (PRODUCT_NAME and ORDER_NUMBER) |   | CATEGORY_TABLET | SERIAL_NUMBER or (PRODUCT_NAME and INVOICE_NUMBER) or (PRODUCT_NAME and ORDER_NUMBER) |   | CATEGORY_CAMERA | SERIAL_NUMBER or (PRODUCT_NAME and INVOICE_NUMBER) or (PRODUCT_NAME and ORDER_NUMBER) |   | CATEGORY_LAPTOP | SERIAL_NUMBER or (PRODUCT_NAME and INVOICE_NUMBER) or (PRODUCT_NAME and ORDER_NUMBER) |   | CATEGORY_MEL | SERIAL_NUMBER or (PRODUCT_NAME and INVOICE_NUMBER) or (PRODUCT_NAME and ORDER_NUMBER) |   | CATEGORY_SEL | SERIAL_NUMBER or (PRODUCT_NAME and INVOICE_NUMBER) or (PRODUCT_NAME and ORDER_NUMBER) |   | CATEGORY_PC_COMPONENTS | SERIAL_NUMBER or (PRODUCT_NAME and INVOICE_NUMBER) or (PRODUCT_NAME and ORDER_NUMBER) |   | CATEGORY_HOUSEHOLD_DEVICES | SERIAL_NUMBER or (PRODUCT_NAME and INVOICE_NUMBER) or (PRODUCT_NAME and ORDER_NUMBER) |   | CATEGORY_DIY | SERIAL_NUMBER or (PRODUCT_NAME and INVOICE_NUMBER) or (PRODUCT_NAME and ORDER_NUMBER) |   | CATEGORY_TIRES | SERIAL_NUMBER or (PRODUCT_NAME and INVOICE_NUMBER) or (PRODUCT_NAME and ORDER_NUMBER) |   | CATEGORY_FURNITURE | SERIAL_NUMBER or (PRODUCT_NAME and INVOICE_NUMBER) or (PRODUCT_NAME and ORDER_NUMBER) |   | CATEGORY_MUSIC | SERIAL_NUMBER or (PRODUCT_NAME and INVOICE_NUMBER) or (PRODUCT_NAME and ORDER_NUMBER) |   | CATEGORY_BABY_STROLLERS | SERIAL_NUMBER or (PRODUCT_NAME and INVOICE_NUMBER) or (PRODUCT_NAME and ORDER_NUMBER) |   | CATEGORY_SPORTS | SERIAL_NUMBER or (PRODUCT_NAME and INVOICE_NUMBER) or (PRODUCT_NAME and ORDER_NUMBER) |   | CATEGORY_CAR | LICENCE_PLATE_DISTRICT, LICENCE_PLATE_NUMBER |   | CATEGORY_BIKE | FRAME_NUMBER or (PRODUCT_NAME and INVOICE_NUMBER) or (PRODUCT_NAME and ORDER_NUMBER) |   | CATEGORY_PEDELEC | FRAME_NUMBER or (PRODUCT_NAME and INVOICE_NUMBER) or (PRODUCT_NAME and ORDER_NUMBER) |   | CATEGORY_GLASSES | FRAME_NUMBER or (PRODUCT_NAME and INVOICE_NUMBER) or (PRODUCT_NAME and ORDER_NUMBER) |   | CATEGORY_CYBER | n/a |   | CATEGORY_WATCH | n/a |   | CATEGORY_BUNDLE | n/a |   | CATEGORY_HEALTH_SUPPLEMENT | n/a |  Additionally, if a product has WARRANTY_EXTENSION coverage, also PURCHASE_DATE identifier is required. | [optional] 
**extras** | [**\OpenAPI\Client\Model\Items[]**](Items.md) | Additional coverages | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

