# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the order. |
**display_id** | **int** | A vanity id to be displayed for the order. For example, \&quot;Order #1000\&quot;. |
**total_price_cents** | **int** | The total price of the order given in cents. |
**currency** | [**\Aryeo\Model\Currency**](Currency.md) |  |
**payment_status** | **string** | The payment status of the order. |
**payment_url** | **string** | A URL for to pay for the order. | [optional]
**listing** | [**\Aryeo\Model\PartialListing**](PartialListing.md) |  | [optional]
**fulfillment_status** | **string** | The fulfillment status of the order. |
**status_url** | **string** | A URL to see the order&#39;s status. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
