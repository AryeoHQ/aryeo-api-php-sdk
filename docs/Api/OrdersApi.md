# Aryeo\OrdersApi

All URIs are relative to https://api.aryeo.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrders()**](OrdersApi.md#getOrders) | **GET** /orders | List all orders.
[**getProducts()**](OrdersApi.md#getProducts) | **GET** /products | Get products available to a group.
[**postOrders()**](OrdersApi.md#postOrders) | **POST** /orders | Create an order.


## `getOrders()`

```php
getOrders($sort, $per_page, $page): \Aryeo\Model\OrderCollection
```

List all orders.

Lists all orders of a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Token
$config = Aryeo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aryeo\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort = -created_at; // string | Comma separated list of fields used for sorting. Placing a minus symbol in front of a field name sorts in descending order. Defaults to `-created_at`.
$per_page = 25; // string | The number of items per page. Defaults to 25.
$page = 2; // string | The requested page. Defaults to 1.

try {
    $result = $apiInstance->getOrders($sort, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| Comma separated list of fields used for sorting. Placing a minus symbol in front of a field name sorts in descending order. Defaults to &#x60;-created_at&#x60;. | [optional]
 **per_page** | **string**| The number of items per page. Defaults to 25. | [optional]
 **page** | **string**| The requested page. Defaults to 1. | [optional]

### Return type

[**\Aryeo\Model\OrderCollection**](../Model/OrderCollection.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProducts()`

```php
getProducts($sort, $per_page, $page, $filter_search, $filter_category_ids, $filter_type): \Aryeo\Model\ProductCollection
```

Get products available to a group.

Get products of a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Token
$config = Aryeo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aryeo\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort = -created_at; // string | Comma separated list of fields used for sorting. Placing a minus symbol in front of a field name sorts in descending order. Defaults to `title`.
$per_page = 25; // string | The number of items per page. Defaults to 25.
$page = 2; // string | The requested page. Defaults to 1.
$filter_search = 'filter_search_example'; // string | Return products that have fields matching this term.
$filter_category_ids = 'filter_category_ids_example'; // string | Return products in the given categories.
$filter_type = 'filter_type_example'; // string | Return products matching the given type. Allowed values are: MAIN, ADDON.

try {
    $result = $apiInstance->getProducts($sort, $per_page, $page, $filter_search, $filter_category_ids, $filter_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| Comma separated list of fields used for sorting. Placing a minus symbol in front of a field name sorts in descending order. Defaults to &#x60;title&#x60;. | [optional]
 **per_page** | **string**| The number of items per page. Defaults to 25. | [optional]
 **page** | **string**| The requested page. Defaults to 1. | [optional]
 **filter_search** | **string**| Return products that have fields matching this term. | [optional]
 **filter_category_ids** | **string**| Return products in the given categories. | [optional]
 **filter_type** | **string**| Return products matching the given type. Allowed values are: MAIN, ADDON. | [optional]

### Return type

[**\Aryeo\Model\ProductCollection**](../Model/ProductCollection.md)

### Authorization

[Token](../../README.md#Token)

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


// Configure Bearer authorization: Token
$config = Aryeo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aryeo\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_post_payload = new \Aryeo\Model\OrderPostPayload(); // \Aryeo\Model\OrderPostPayload | OrderPostPayload

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
 **order_post_payload** | [**\Aryeo\Model\OrderPostPayload**](../Model/OrderPostPayload.md)| OrderPostPayload | [optional]

### Return type

[**\Aryeo\Model\OrderResource**](../Model/OrderResource.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
