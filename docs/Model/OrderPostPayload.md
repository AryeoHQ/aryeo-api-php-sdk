# # OrderPostPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fulfillment_status** | **string** | The fulfillment status of the order. Defaults to \&quot;UNFULFILLED\&quot;. | [optional]
**internal_notes** | **string** | Internal notes that will be attached to the order. Viewable only by the team. | [optional]
**payment_status** | **string** | The payment status of the order. Defaults to \&quot;UNPAID\&quot;. | [optional]
**address_id** | **string** | ID of the address to associate with the order. UUID Version 4. | [optional]
**customer_id** | **string** | ID of the customer to associate with the order. UUID Version 4. | [optional]
**notify** | **bool** | Indicates if the customer and creator notifications should be sent when creating the order. Requires an address and customer to be set in order for the notifications to be sent. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
