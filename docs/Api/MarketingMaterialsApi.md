# Aryeo\MarketingMaterialsApi

All URIs are relative to https://api.aryeo.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**putMarketingMaterialsTemplatesUuidPublish()**](MarketingMaterialsApi.md#putMarketingMaterialsTemplatesUuidPublish) | **PUT** /marketing-materials/templates/{uuid}/publish | Publish a marketing material template.
[**putMarketingMaterialsUuidPublish()**](MarketingMaterialsApi.md#putMarketingMaterialsUuidPublish) | **PUT** /marketing-materials/{uuid}/publish | Publish a marketing material.


## `putMarketingMaterialsTemplatesUuidPublish()`

```php
putMarketingMaterialsTemplatesUuidPublish($uuid, $marketing_material_template_publish_payload)
```

Publish a marketing material template.

Publish a marketing material template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = Aryeo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aryeo\Api\MarketingMaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 05a1c594-f469-483c-b490-51d790090593; // string | UUID of the marketing material template record.
$marketing_material_template_publish_payload = new \Aryeo\Model\MarketingMaterialTemplatePublishPayload(); // \Aryeo\Model\MarketingMaterialTemplatePublishPayload

try {
    $apiInstance->putMarketingMaterialsTemplatesUuidPublish($uuid, $marketing_material_template_publish_payload);
} catch (Exception $e) {
    echo 'Exception when calling MarketingMaterialsApi->putMarketingMaterialsTemplatesUuidPublish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of the marketing material template record. |
 **marketing_material_template_publish_payload** | [**\Aryeo\Model\MarketingMaterialTemplatePublishPayload**](../Model/MarketingMaterialTemplatePublishPayload.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putMarketingMaterialsUuidPublish()`

```php
putMarketingMaterialsUuidPublish($uuid, $marketing_material_publish_payload)
```

Publish a marketing material.

Publish a marketing material.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = Aryeo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aryeo\Api\MarketingMaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 05a1c594-f469-483c-b490-51d790090593; // string | UUID of the marketing material record.
$marketing_material_publish_payload = new \Aryeo\Model\MarketingMaterialPublishPayload(); // \Aryeo\Model\MarketingMaterialPublishPayload

try {
    $apiInstance->putMarketingMaterialsUuidPublish($uuid, $marketing_material_publish_payload);
} catch (Exception $e) {
    echo 'Exception when calling MarketingMaterialsApi->putMarketingMaterialsUuidPublish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of the marketing material record. |
 **marketing_material_publish_payload** | [**\Aryeo\Model\MarketingMaterialPublishPayload**](../Model/MarketingMaterialPublishPayload.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
