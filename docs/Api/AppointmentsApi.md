# Aryeo\AppointmentsApi

All URIs are relative to https://api.aryeo.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAppointments()**](AppointmentsApi.md#getAppointments) | **GET** /appointments | List all appointments.
[**getUnconfirmedAppointments()**](AppointmentsApi.md#getUnconfirmedAppointments) | **GET** /unconfirmed-appointments | List all unconfirmed appointments.
[**getUnconfirmedAppointmentsId()**](AppointmentsApi.md#getUnconfirmedAppointmentsId) | **GET** /unconfirmed-appointments/{unconfirmed_appointment_id} | Retrieve an unconfirmed appointment.
[**putAppointmentsAppointmentIdCancel()**](AppointmentsApi.md#putAppointmentsAppointmentIdCancel) | **PUT** /appointments/{appointment_id}/cancel | Cancel an appointment.
[**putAppointmentsAppointmentIdReschedule()**](AppointmentsApi.md#putAppointmentsAppointmentIdReschedule) | **PUT** /appointments/{appointment_id}/reschedule | Reschedule an appointment.


## `getAppointments()`

```php
getAppointments($include, $filter_tense, $filter_start_at_gte, $filter_start_at_lte, $filter_user_ids, $sort, $per_page, $page): \Aryeo\Model\AppointmentCollection
```

List all appointments.

List all appointments. By default, returns a list of appointments that have been scheduled and have not been canceled

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Token
$config = Aryeo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aryeo\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = order,users; // string | Comma separated list of optional data to include in the response.
$filter_tense = UPCOMING; // string | Return appointments that are upcoming or in the past.
$filter_start_at_gte = 2021-01-01T13:00Z; // \DateTime | Return appointments where the start_at field is greater than or equal to this value. Effectively, appointments that start after this date.
$filter_start_at_lte = 2021-01-02T13:00Z; // \DateTime | Return appointments where the start_at field is less than or equal to this value. Effectively, appointments that start before this date.
$filter_user_ids = ["00000000-0000-4000-8000-000000000000"]; // array | The IDs of users whose appointments will be retrieved. UUID Version 4.
$sort = -created_at; // string | Comma separated list of fields used for sorting. Placing a minus symbol in front of a field name sorts in descending order. Defaults to `-start_at`.
$per_page = 25; // string | The number of items per page. Defaults to 25.
$page = 2; // string | The requested page. Defaults to 1.

try {
    $result = $apiInstance->getAppointments($include, $filter_tense, $filter_start_at_gte, $filter_start_at_lte, $filter_user_ids, $sort, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->getAppointments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | **string**| Comma separated list of optional data to include in the response. | [optional]
 **filter_tense** | **string**| Return appointments that are upcoming or in the past. | [optional]
 **filter_start_at_gte** | **\DateTime**| Return appointments where the start_at field is greater than or equal to this value. Effectively, appointments that start after this date. | [optional]
 **filter_start_at_lte** | **\DateTime**| Return appointments where the start_at field is less than or equal to this value. Effectively, appointments that start before this date. | [optional]
 **filter_user_ids** | [**array**](../Model/.md)| The IDs of users whose appointments will be retrieved. UUID Version 4. | [optional]
 **sort** | **string**| Comma separated list of fields used for sorting. Placing a minus symbol in front of a field name sorts in descending order. Defaults to &#x60;-start_at&#x60;. | [optional]
 **per_page** | **string**| The number of items per page. Defaults to 25. | [optional]
 **page** | **string**| The requested page. Defaults to 1. | [optional]

### Return type

[**\Aryeo\Model\AppointmentCollection**](../Model/AppointmentCollection.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUnconfirmedAppointments()`

```php
getUnconfirmedAppointments($include, $filter_user_ids, $sort, $per_page, $page): \Aryeo\Model\UnconfirmedAppointmentCollection
```

List all unconfirmed appointments.

List all unconfirmed appointments. These are appointments that have not been scheduled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Token
$config = Aryeo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aryeo\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = order,users; // string | Comma separated list of optional data to include in the response.
$filter_user_ids = ["00000000-0000-4000-8000-000000000000"]; // array | The IDs of users whose appointments will be retrieved. UUID Version 4.
$sort = -created_at; // string | Comma separated list of fields used for sorting. Placing a minus symbol in front of a field name sorts in descending order. Defaults to `-start_at`.
$per_page = 25; // string | The number of items per page. Defaults to 25.
$page = 2; // string | The requested page. Defaults to 1.

try {
    $result = $apiInstance->getUnconfirmedAppointments($include, $filter_user_ids, $sort, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->getUnconfirmedAppointments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | **string**| Comma separated list of optional data to include in the response. | [optional]
 **filter_user_ids** | [**array**](../Model/.md)| The IDs of users whose appointments will be retrieved. UUID Version 4. | [optional]
 **sort** | **string**| Comma separated list of fields used for sorting. Placing a minus symbol in front of a field name sorts in descending order. Defaults to &#x60;-start_at&#x60;. | [optional]
 **per_page** | **string**| The number of items per page. Defaults to 25. | [optional]
 **page** | **string**| The requested page. Defaults to 1. | [optional]

### Return type

[**\Aryeo\Model\UnconfirmedAppointmentCollection**](../Model/UnconfirmedAppointmentCollection.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUnconfirmedAppointmentsId()`

```php
getUnconfirmedAppointmentsId($unconfirmed_appointment_id, $include): \Aryeo\Model\UnconfirmedAppointmentResource
```

Retrieve an unconfirmed appointment.

Retrieves the details of an unconfirmed appointment with the given ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Token
$config = Aryeo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aryeo\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unconfirmed_appointment_id = 00000000-0000-0000-0000-000000000000; // string | The ID of an appointment.
$include = order,users; // string | Comma separated list of optional data to include in the response.

try {
    $result = $apiInstance->getUnconfirmedAppointmentsId($unconfirmed_appointment_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->getUnconfirmedAppointmentsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unconfirmed_appointment_id** | [**string**](../Model/.md)| The ID of an appointment. |
 **include** | **string**| Comma separated list of optional data to include in the response. | [optional]

### Return type

[**\Aryeo\Model\UnconfirmedAppointmentResource**](../Model/UnconfirmedAppointmentResource.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putAppointmentsAppointmentIdCancel()`

```php
putAppointmentsAppointmentIdCancel($appointment_id, $appointment_cancel_put_payload): \Aryeo\Model\AppointmentResource
```

Cancel an appointment.

Cancel an appointment. The appointments order's customer can be optionally notified of this change.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Token
$config = Aryeo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aryeo\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$appointment_id = 00000000-0000-0000-0000-000000000000; // string | The ID of an appointment.
$appointment_cancel_put_payload = new \Aryeo\Model\AppointmentCancelPutPayload(); // \Aryeo\Model\AppointmentCancelPutPayload

try {
    $result = $apiInstance->putAppointmentsAppointmentIdCancel($appointment_id, $appointment_cancel_put_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->putAppointmentsAppointmentIdCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appointment_id** | [**string**](../Model/.md)| The ID of an appointment. |
 **appointment_cancel_put_payload** | [**\Aryeo\Model\AppointmentCancelPutPayload**](../Model/AppointmentCancelPutPayload.md)|  | [optional]

### Return type

[**\Aryeo\Model\AppointmentResource**](../Model/AppointmentResource.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putAppointmentsAppointmentIdReschedule()`

```php
putAppointmentsAppointmentIdReschedule($appointment_id, $appointment_reschedule_put_payload): \Aryeo\Model\AppointmentResource
```

Reschedule an appointment.

Reschedule an appointment. The appointments order's customer can be optionally notified of this change.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Token
$config = Aryeo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aryeo\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$appointment_id = 00000000-0000-0000-0000-000000000000; // string | The ID of an appointment.
$appointment_reschedule_put_payload = new \Aryeo\Model\AppointmentReschedulePutPayload(); // \Aryeo\Model\AppointmentReschedulePutPayload

try {
    $result = $apiInstance->putAppointmentsAppointmentIdReschedule($appointment_id, $appointment_reschedule_put_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->putAppointmentsAppointmentIdReschedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appointment_id** | [**string**](../Model/.md)| The ID of an appointment. |
 **appointment_reschedule_put_payload** | [**\Aryeo\Model\AppointmentReschedulePutPayload**](../Model/AppointmentReschedulePutPayload.md)|  | [optional]

### Return type

[**\Aryeo\Model\AppointmentResource**](../Model/AppointmentResource.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
