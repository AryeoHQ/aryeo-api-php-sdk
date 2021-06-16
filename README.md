# Aryeo

# Introduction
The Aryeo API gives access to the Aryeo platform. You can use your favorite HTTP/REST library for interfacing with the Aryeo API, or you can use one of our SDKs. Our SDKs are procedurally generated and a great starting point for experimental testing. If there is an additional language or framework that you want to see supported, then please reach and out and make a contribution!

<p align="center"> <a href="https://github.com/AryeoHQ/aryeo-api-dart-sdk"><img src="https://raw.githubusercontent.com/AryeoHQ/aryeo-api-docs/master/public/images/dart.svg" alt="Dart" width="44" style="padding:10px;border: 1px solid #d3d3d3;border-radius: 5px;margin:4px;"/></a> <a href="https://github.com/AryeoHQ/aryeo-api-go-sdk"><img src="https://raw.githubusercontent.com/AryeoHQ/aryeo-api-docs/master/public/images/go.svg" alt="Go" width="44" style="padding:10px;border: 1px solid #d3d3d3;border-radius: 5px;margin:4px;"/></a> <a href="https://github.com/AryeoHQ/aryeo-api-js-sdk"><img src="https://raw.githubusercontent.com/AryeoHQ/aryeo-api-docs/master/public/images/js.svg" alt="Node JS" width="44" style="padding:10px;border: 1px solid #d3d3d3;border-radius: 5px;margin:4px;"/></a> <a href="https://github.com/AryeoHQ/aryeo-api-php-sdk"><img src="https://raw.githubusercontent.com/AryeoHQ/aryeo-api-docs/master/public/images/php.svg" alt="PHP" width="44" style="padding:10px;border: 1px solid #d3d3d3;border-radius: 5px;margin:4px;"/></a> <a href="https://github.com/AryeoHQ/aryeo-api-ruby-sdk"><img src="https://raw.githubusercontent.com/AryeoHQ/aryeo-api-docs/master/public/images/ruby.svg" alt="Ruby" width="44" style="padding:10px;border: 1px solid #d3d3d3;border-radius: 5px;margin:4px;"/></a> <a href="https://github.com/AryeoHQ/aryeo-api-rust-sdk"><img src="https://raw.githubusercontent.com/AryeoHQ/aryeo-api-docs/master/public/images/rust.svg" alt="Rust" width="44" style="padding:10px;border: 1px solid #d3d3d3;border-radius: 5px;margin:4px;"/></a> <a href="https://github.com/AryeoHQ/aryeo-api-swift-sdk"><img src="https://raw.githubusercontent.com/AryeoHQ/aryeo-api-docs/master/public/images/swift.svg" alt="Swift" width="44" style="padding:10px;border: 1px solid #d3d3d3;border-radius: 5px;margin:4px;"/></a> </p>

**Note**: Some SDKs may require you to manually add the `Accept` header to all Aryeo API requests. If so, use the value `application/json`.

# Authentication
To start using the Aryeo API, you will need to generate an API key from your group's developer settings. You can then authenticate to the Aryeo API by providing your key in the appropriate request header. Requests made without an API key will result in a `401 Unauthorized` error.


For more information, please visit [https://www.aryeo.com](https://www.aryeo.com).

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Aryeo/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.aryeo.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ListingsApi* | [**getListings**](docs/Api/ListingsApi.md#getlistings) | **GET** /listings | Get the listings available to a group.
*ListingsApi* | [**getListingsId**](docs/Api/ListingsApi.md#getlistingsid) | **GET** /listings/{id} | Get information about a listing.
*OrdersApi* | [**getOrders**](docs/Api/OrdersApi.md#getorders) | **GET** /orders | Get orders available to a group.
*OrdersApi* | [**postOrders**](docs/Api/OrdersApi.md#postorders) | **POST** /orders | Create an order.
*VendorsApi* | [**getVendors**](docs/Api/VendorsApi.md#getvendors) | **GET** /vendors | Get vendors available to a group.
*VendorsApi* | [**getVendorsSearch**](docs/Api/VendorsApi.md#getvendorssearch) | **GET** /vendors/search | Get vendors that can be added to the group&#39;s vendor list.

## Models

- [ApiError](docs/Model/ApiError.md)
- [Currency](docs/Model/Currency.md)
- [FloorPlan](docs/Model/FloorPlan.md)
- [Group](docs/Model/Group.md)
- [GroupAgentProperties](docs/Model/GroupAgentProperties.md)
- [GroupCollection](docs/Model/GroupCollection.md)
- [Image](docs/Model/Image.md)
- [InteractiveContent](docs/Model/InteractiveContent.md)
- [Listing](docs/Model/Listing.md)
- [ListingResource](docs/Model/ListingResource.md)
- [Order](docs/Model/Order.md)
- [OrderCollection](docs/Model/OrderCollection.md)
- [OrderForm](docs/Model/OrderForm.md)
- [OrderPostPayload](docs/Model/OrderPostPayload.md)
- [OrderResource](docs/Model/OrderResource.md)
- [PaginationLinks](docs/Model/PaginationLinks.md)
- [PaginationMeta](docs/Model/PaginationMeta.md)
- [PartialAddress](docs/Model/PartialAddress.md)
- [PartialGroup](docs/Model/PartialGroup.md)
- [PartialListing](docs/Model/PartialListing.md)
- [PartialListingCollection](docs/Model/PartialListingCollection.md)
- [ProductItem](docs/Model/ProductItem.md)
- [PropertyDetails](docs/Model/PropertyDetails.md)
- [PropertyWebsites](docs/Model/PropertyWebsites.md)
- [SocialProfiles](docs/Model/SocialProfiles.md)
- [User](docs/Model/User.md)
- [Video](docs/Model/Video.md)

## Authorization

### JWT

- **Type**: Bearer authentication (JWT)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

jarrod@aryeo.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Package version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
