# Aryeo\ListingsApi

All URIs are relative to https://api.aryeo.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getListings()**](ListingsApi.md#getListings) | **GET** /listings | Get the listings available to a group.
[**getListingsId()**](ListingsApi.md#getListingsId) | **GET** /listings/{listing_id} | Get information about a listing.


## `getListings()`

```php
getListings($include, $filter_search, $filter_address, $filter_list_agent, $filter_status, $filter_active, $filter_price_gte, $filter_price_lte, $filter_square_feet_gte, $filter_square_feet_lte, $filter_bedrooms_gte, $filter_bedrooms_lte, $filter_bathrooms_gte, $filter_bathrooms_lte, $sort, $per_page, $page): \Aryeo\Model\ListingCollection
```

Get the listings available to a group.

Get the listings available to a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Token
$config = Aryeo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aryeo\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = images,videos,orders; // string | Comma separated list of optional data to include in the response.
$filter_search = 123 Main St; // string | Return listings that have fields matching this term.
$filter_address = 123 Main St; // string | Return listings that have an address matching this term.
$filter_list_agent = John Doe; // string | Return listings that have a listing agent or co-listing agent matching this term.
$filter_status = FOR_SALE; // string | Return listings that have a certain status.
$filter_active = true; // bool | Set as true to return listings that have an active status (e.g. active statuses include `COMING_SOON`, `FOR_SALE`, `FOR_LEASE`, `PENDING_SALE`, `PENDING_LEASE`, `SOLD`, `LEASED`).
$filter_price_gte = 100000; // float | Return listings where the price field is greater than or equal to this value.
$filter_price_lte = 4000000; // float | Return listings where the price field is less than or equal to this value.
$filter_square_feet_gte = 1000; // float | Return listings where the square feet field is greater than or equal to this value.
$filter_square_feet_lte = 5000; // float | Return listings where the square feet field is less than or equal to this value.
$filter_bedrooms_gte = 2; // int | Return listings where the bedrooms field is greater than or equal to this value.
$filter_bedrooms_lte = 4; // int | Return listings where the bedrooms field is less than or equal to this value.
$filter_bathrooms_gte = 2.5; // float | Return listings where the bathrooms field is greater than or equal to this value.
$filter_bathrooms_lte = 5; // float | Return listings where the bathrooms field is less than or equal to this value.
$sort = -created_at; // string | Comma separated list of fields used for sorting. Placing a minus symbol in front of a field name sorts in descending order. Defaults to `-created_at`.
$per_page = 25; // string | The number of items per page. Defaults to 25.
$page = 2; // string | The requested page. Defaults to 1.

try {
    $result = $apiInstance->getListings($include, $filter_search, $filter_address, $filter_list_agent, $filter_status, $filter_active, $filter_price_gte, $filter_price_lte, $filter_square_feet_gte, $filter_square_feet_lte, $filter_bedrooms_gte, $filter_bedrooms_lte, $filter_bathrooms_gte, $filter_bathrooms_lte, $sort, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->getListings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | **string**| Comma separated list of optional data to include in the response. | [optional]
 **filter_search** | **string**| Return listings that have fields matching this term. | [optional]
 **filter_address** | **string**| Return listings that have an address matching this term. | [optional]
 **filter_list_agent** | **string**| Return listings that have a listing agent or co-listing agent matching this term. | [optional]
 **filter_status** | **string**| Return listings that have a certain status. | [optional]
 **filter_active** | **bool**| Set as true to return listings that have an active status (e.g. active statuses include &#x60;COMING_SOON&#x60;, &#x60;FOR_SALE&#x60;, &#x60;FOR_LEASE&#x60;, &#x60;PENDING_SALE&#x60;, &#x60;PENDING_LEASE&#x60;, &#x60;SOLD&#x60;, &#x60;LEASED&#x60;). | [optional]
 **filter_price_gte** | **float**| Return listings where the price field is greater than or equal to this value. | [optional]
 **filter_price_lte** | **float**| Return listings where the price field is less than or equal to this value. | [optional]
 **filter_square_feet_gte** | **float**| Return listings where the square feet field is greater than or equal to this value. | [optional]
 **filter_square_feet_lte** | **float**| Return listings where the square feet field is less than or equal to this value. | [optional]
 **filter_bedrooms_gte** | **int**| Return listings where the bedrooms field is greater than or equal to this value. | [optional]
 **filter_bedrooms_lte** | **int**| Return listings where the bedrooms field is less than or equal to this value. | [optional]
 **filter_bathrooms_gte** | **float**| Return listings where the bathrooms field is greater than or equal to this value. | [optional]
 **filter_bathrooms_lte** | **float**| Return listings where the bathrooms field is less than or equal to this value. | [optional]
 **sort** | **string**| Comma separated list of fields used for sorting. Placing a minus symbol in front of a field name sorts in descending order. Defaults to &#x60;-created_at&#x60;. | [optional]
 **per_page** | **string**| The number of items per page. Defaults to 25. | [optional]
 **page** | **string**| The requested page. Defaults to 1. | [optional]

### Return type

[**\Aryeo\Model\ListingCollection**](../Model/ListingCollection.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListingsId()`

```php
getListingsId($listing_id, $include): \Aryeo\Model\ListingResource
```

Get information about a listing.

Get information about a listing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Token
$config = Aryeo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aryeo\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listing_id = 00000000-0000-0000-0000-000000000000; // string | The ID of a listing.
$include = images,videos,orders; // string | Comma separated list of optional data to include in the response.

try {
    $result = $apiInstance->getListingsId($listing_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->getListingsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listing_id** | [**string**](../Model/.md)| The ID of a listing. |
 **include** | **string**| Comma separated list of optional data to include in the response. | [optional]

### Return type

[**\Aryeo\Model\ListingResource**](../Model/ListingResource.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
