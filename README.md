# Aryeo SDK

## Introduction

This is an auto-generated client SDK for interfacing with the Aryeo API. We support a variety of languages and frameworks that are a great starting point for experimenting with the API. If there is an additional language or framework that you want to see supported, then please reach out and make a contribution!

<p align="center"> <a href="https://github.com/AryeoHQ/aryeo-api-dart-sdk"><img src="https://raw.githubusercontent.com/AryeoHQ/aryeo-api-docs/master/public/images/dart.svg" alt="Dart" width="44" style="padding:10px;border: 1px solid #d3d3d3;border-radius: 5px;margin:4px;"/></a> <a href="https://github.com/AryeoHQ/aryeo-api-go-sdk"><img src="https://raw.githubusercontent.com/AryeoHQ/aryeo-api-docs/master/public/images/go.svg" alt="Go" width="44" style="padding:10px;border: 1px solid #d3d3d3;border-radius: 5px;margin:4px;"/></a> <a href="https://github.com/AryeoHQ/aryeo-api-js-sdk"><img src="https://raw.githubusercontent.com/AryeoHQ/aryeo-api-docs/master/public/images/js.svg" alt="Node JS" width="44" style="padding:10px;border: 1px solid #d3d3d3;border-radius: 5px;margin:4px;"/></a> <a href="https://github.com/AryeoHQ/aryeo-api-php-sdk"><img src="https://raw.githubusercontent.com/AryeoHQ/aryeo-api-docs/master/public/images/php.svg" alt="PHP" width="44" style="padding:10px;border: 1px solid #d3d3d3;border-radius: 5px;margin:4px;"/></a> <a href="https://github.com/AryeoHQ/aryeo-api-ruby-sdk"><img src="https://raw.githubusercontent.com/AryeoHQ/aryeo-api-docs/master/public/images/ruby.svg" alt="Ruby" width="44" style="padding:10px;border: 1px solid #d3d3d3;border-radius: 5px;margin:4px;"/></a> <a href="https://github.com/AryeoHQ/aryeo-api-rust-sdk"><img src="https://raw.githubusercontent.com/AryeoHQ/aryeo-api-docs/master/public/images/rust.svg" alt="Rust" width="44" style="padding:10px;border: 1px solid #d3d3d3;border-radius: 5px;margin:4px;"/></a> <a href="https://github.com/AryeoHQ/aryeo-api-swift-sdk"><img src="https://raw.githubusercontent.com/AryeoHQ/aryeo-api-docs/master/public/images/swift.svg" alt="Swift" width="44" style="padding:10px;border: 1px solid #d3d3d3;border-radius: 5px;margin:4px;"/></a> </p>

## Authentication

To start using the Aryeo API, you will need to generate an API key from your group's developer settings. Then, make sure to provide your API key as a bearer token. Requests made without an API key will result in a `401 Unauthorized` error.

Example: `Authorization: Bearer {API_KEY}`

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

```json
    "require": {
        "aryeohq/aryeo-api-php-sdk": "dev-master"
    },
    "repositories": [
        {
            "url": "git@github.com:AryeoHQ/aryeo-api-php-sdk.git",
            "type": "vcs"
        }
    ]
```

## Getting Started

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Aryeo\Configuration::getDefaultConfiguration()->setAccessToken('API_KEY');

$apiInstance = new Aryeo\Api\ListingsApi(null, $config);

$id = "UUID";

try {
    $result = $apiInstance->getListingsId($id);
    echo $result["data"]["address"]["address_line_1"], "\n";
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->getListingsId: ', $e->getMessage(), PHP_EOL;
}
```

## API Endpoints

All URIs are relative to *https://api.aryeo.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ListingsApi* | [**getListings**](docs/Api/ListingsApi.md#getlistings) | **GET** /listings | Get the listings available to a group.
*ListingsApi* | [**getListingsId**](docs/Api/ListingsApi.md#getlistingsid) | **GET** /listings/{id} | Get information about a listing.
*MarketingMaterialsApi* | [**putMarketingMaterialsUuidPublish**](docs/Api/MarketingMaterialsApi.md#putmarketingmaterialsuuidpublish) | **PUT** /marketing-materials/{uuid}/publish | Publish a marketing material.
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
- [MarketingMaterialPublishPayload](docs/Model/MarketingMaterialPublishPayload.md)
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
