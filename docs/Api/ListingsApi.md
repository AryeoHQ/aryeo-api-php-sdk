# Aryeo\ListingsApi

All URIs are relative to https://api.aryeo.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getListings()**](ListingsApi.md#getListings) | **GET** /listings | Get the listings available to a group.
[**getListingsId()**](ListingsApi.md#getListingsId) | **GET** /listings/{id} | Get information about a listing.


## `getListings()`

```php
getListings($query, $per_page, $page, $status, $price, $bathrooms, $bedrooms): \Aryeo\Model\PartialListingCollection
```

Get the listings available to a group.

Get the listings available to a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = Aryeo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aryeo\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = thoroughbred trail; // string | A search query.
$per_page = 25; // string | The number of items per page. Defaults to 25.
$page = 2; // string | The requested page. Defaults to 1.
$status = coming_soon; // string | The status you want to scope down to, example sold,  coming_soon,  for_sale, sold
$price = 100000; // int | The price value and greater will be returned.
$bathrooms = 3.5; // float | Number of bathrooms minimum.
$bedrooms = 4; // int | Number of bedrooms minimum.

try {
    $result = $apiInstance->getListings($query, $per_page, $page, $status, $price, $bathrooms, $bedrooms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->getListings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| A search query. | [optional]
 **per_page** | **string**| The number of items per page. Defaults to 25. | [optional]
 **page** | **string**| The requested page. Defaults to 1. | [optional]
 **status** | **string**| The status you want to scope down to, example sold,  coming_soon,  for_sale, sold | [optional]
 **price** | **int**| The price value and greater will be returned. | [optional]
 **bathrooms** | **float**| Number of bathrooms minimum. | [optional]
 **bedrooms** | **int**| Number of bedrooms minimum. | [optional]

### Return type

[**\Aryeo\Model\PartialListingCollection**](../Model/PartialListingCollection.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListingsId()`

```php
getListingsId($id): \Aryeo\Model\ListingResource
```

Get information about a listing.

Get information about a listing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = Aryeo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aryeo\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 05a1c594-f469-483c-b490-51d790090593; // string | The UUID of a listing.

try {
    $result = $apiInstance->getListingsId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->getListingsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The UUID of a listing. |

### Return type

[**\Aryeo\Model\ListingResource**](../Model/ListingResource.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
