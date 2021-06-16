# Aryeo\OrdersApi

All URIs are relative to https://api.aryeo.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrders()**](OrdersApi.md#getOrders) | **GET** /orders | Get orders available to a group.
[**postOrders()**](OrdersApi.md#postOrders) | **POST** /orders | Create an order.


## `getOrders()`

```php
getOrders(): \Aryeo\Model\OrderCollection
```

Get orders available to a group.

Get orders of a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = Aryeo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aryeo\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Aryeo\Model\OrderCollection**](../Model/OrderCollection.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOrders()`

```php
postOrders($order_post_payload): \Aryeo\Model\OrderResource
```

Create an order.

Create an order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = Aryeo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aryeo\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_post_payload = new \Aryeo\Model\OrderPostPayload(); // \Aryeo\Model\OrderPostPayload

try {
    $result = $apiInstance->postOrders($order_post_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->postOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_post_payload** | [**\Aryeo\Model\OrderPostPayload**](../Model/OrderPostPayload.md)|  | [optional]

### Return type

[**\Aryeo\Model\OrderResource**](../Model/OrderResource.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
