# Aryeo\VendorsApi

All URIs are relative to https://api.aryeo.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getVendors()**](VendorsApi.md#getVendors) | **GET** /vendors | Get vendors available to a group.
[**getVendorsId()**](VendorsApi.md#getVendorsId) | **GET** /vendors/{vendor_id} | Get vendors available to a group.


## `getVendors()`

```php
getVendors($include): \Aryeo\Model\GroupCollection
```

Get vendors available to a group.

Get vendors available to a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Token
$config = Aryeo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aryeo\Api\VendorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = users; // string | Comma separated list of optional data to include in the response.

try {
    $result = $apiInstance->getVendors($include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorsApi->getVendors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | **string**| Comma separated list of optional data to include in the response. | [optional]

### Return type

[**\Aryeo\Model\GroupCollection**](../Model/GroupCollection.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVendorsId()`

```php
getVendorsId($vendor_id, $include): \Aryeo\Model\GroupResource
```

Get vendors available to a group.

Get information about a vendor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Token
$config = Aryeo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aryeo\Api\VendorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vendor_id = 00000000-0000-4000-8000-000000000000; // string | The ID of the group that is associated as a vendor. UUID Version 4.
$include = default_order_form; // string | Comma separated list of optional data to include in the response.

try {
    $result = $apiInstance->getVendorsId($vendor_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorsApi->getVendorsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vendor_id** | [**string**](../Model/.md)| The ID of the group that is associated as a vendor. UUID Version 4. |
 **include** | **string**| Comma separated list of optional data to include in the response. | [optional]

### Return type

[**\Aryeo\Model\GroupResource**](../Model/GroupResource.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
