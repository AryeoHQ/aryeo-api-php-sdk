# # UnconfirmedAppointment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the appointment. |
**title** | **string** | The title of the appointment. | [optional]
**description** | **string** | The multi-line description of the appointment. | [optional]
**order** | [**\Aryeo\Model\Order**](Order.md) |  | [optional]
**users** | [**\Aryeo\Model\User[]**](User.md) | Users attached to the appointment. | [optional]
**preference_type** | **string** | The type of preferred scheduling information provided by a customer to aid in scheduling this appointment. | [optional]
**preferred_start_at** | [**\DateTime**](\DateTime.md) | A preferred date and time (ISO 8601 format) for when the appointment could start. Only returned if unconfirmed appointment&#39;s preference type is TIME. | [optional]
**preferred_start_at_day** | [**\DateTime**](\DateTime.md) | A preferred date (ISO 8601 format) for when the appointment could start. Only returned if unconfirmed appointment&#39;s preference type is TIME_OF_DAY. | [optional]
**preferred_start_at_time_of_day** | **string** | A preferred time of day for when the appointment could start. Only returned if unconfirmed appointment&#39;s preference type is TIME_OF_DAY. | [optional]
**duration** | **int** | The estimated length of the appointment in minutes, if available. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
