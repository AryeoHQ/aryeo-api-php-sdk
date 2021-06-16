# Aryeo\VendorsApi

All URIs are relative to https://api.aryeo.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getVendors()**](VendorsApi.md#getVendors) | **GET** /vendors | Get vendors available to a group.
[**getVendorsSearch()**](VendorsApi.md#getVendorsSearch) | **GET** /vendors/search | Get vendors that can be added to the group&#39;s vendor list.


## `getVendors()`

```php
getVendors(): \Aryeo\Model\GroupCollection
```

Get vendors available to a group.

Get vendors available to a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = Aryeo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aryeo\Api\VendorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVendors();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorsApi->getVendors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Aryeo\Model\GroupCollection**](../Model/GroupCollection.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVendorsSearch()`

```php
getVendorsSearch($query, $per_page, $page): \Aryeo\Model\GroupCollection
```

Get vendors that can be added to the group's vendor list.

Get vendors that can be added to the group's vendor list, excluding those already available to a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = Aryeo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aryeo\Api\VendorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = Demo Photography Company; // string | A search query.
$per_page = 25; // string | The number of items per page. Defaults to 25.
$page = 2; // string | The requested page. Defaults to 1.

try {
    $result = $apiInstance->getVendorsSearch($query, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorsApi->getVendorsSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| A search query. | [optional]
 **per_page** | **string**| The number of items per page. Defaults to 25. | [optional]
 **page** | **string**| The requested page. Defaults to 1. | [optional]

### Return type

[**\Aryeo\Model\GroupCollection**](../Model/GroupCollection.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
