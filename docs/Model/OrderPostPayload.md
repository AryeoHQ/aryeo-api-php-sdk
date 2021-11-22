# # OrderPostPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fulfillment_status** | **string** | The fulfillment status of the order. Defaults to \&quot;UNFULFILLED\&quot;. | [optional]
**internal_notes** | **string** | Internal notes that will be attached to the order. Viewable only by the team. | [optional]
**address_id** | **string** | ID of the address to associate with the order. UUID Version 4. | [optional]
**customer_id** | **string** | ID of the customer to associate with the order. UUID Version 4. | [optional]
**notify** | **bool** | Indicates if the customer and creator notifications should be sent when creating the order. Requires an address and customer to be set in order for the notifications to be sent. | [optional]
**lock_download_for_payment** | **bool** | Indicates if the downloads for the attached listing should be locked while there is an outstanding balance on the order. | [optional]
**allow_payments_before_fulfillment** | **bool** | Indicates if the order will allow payments from the customer before the order is marked as fulfilled. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
