# # Appointment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the appointment. |
**status** | **string** | The status of the appointment. | [optional]
**title** | **string** | The title of the appointment. | [optional]
**description** | **string** | The multi-line description of the appointment. | [optional]
**start_at** | [**\DateTime**](\DateTime.md) | The date and time (ISO 8601 format) when the appointment is set to start. | [optional]
**end_at** | [**\DateTime**](\DateTime.md) | The date and time (ISO 8601 format) when the appointment is set to end. | [optional]
**duration** | **int** | The length of the appointment in minutes. | [optional]
**order** | [**\Aryeo\Model\Order**](Order.md) |  | [optional]
**users** | [**\Aryeo\Model\User[]**](User.md) | Users attached to the appointment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
