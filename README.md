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

$uuid = "UUID";

try {
    $result = $apiInstance->getListingsId($uuid);
    echo $result["data"]["address"]["address_line_1"], "\n";
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->getListingsId: ', $e->getMessage(), PHP_EOL;
}
```

## API Endpoints

All URIs are relative to *https://api.aryeo.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AppointmentsApi* | [**getAppointments**](docs/Api/AppointmentsApi.md#getappointments) | **GET** /appointments | List all appointments.
*AppointmentsApi* | [**getAvailableDates**](docs/Api/AppointmentsApi.md#getavailabledates) | **GET** /scheduling/available-dates | Fetch available days for a user or group
*AppointmentsApi* | [**getAvailableTimeslots**](docs/Api/AppointmentsApi.md#getavailabletimeslots) | **GET** /scheduling/available-timeslots | Fetch available timeslots for a user or group
*AppointmentsApi* | [**getUnconfirmedAppointments**](docs/Api/AppointmentsApi.md#getunconfirmedappointments) | **GET** /unconfirmed-appointments | List all unconfirmed appointments.
*AppointmentsApi* | [**getUnconfirmedAppointmentsId**](docs/Api/AppointmentsApi.md#getunconfirmedappointmentsid) | **GET** /unconfirmed-appointments/{unconfirmed_appointment_id} | Retrieve an unconfirmed appointment.
*AppointmentsApi* | [**putAppointmentsAppointmentIdCancel**](docs/Api/AppointmentsApi.md#putappointmentsappointmentidcancel) | **PUT** /appointments/{appointment_id}/cancel | Cancel an appointment.
*AppointmentsApi* | [**putAppointmentsAppointmentIdReschedule**](docs/Api/AppointmentsApi.md#putappointmentsappointmentidreschedule) | **PUT** /appointments/{appointment_id}/reschedule | Reschedule an appointment.
*ListingsApi* | [**getListings**](docs/Api/ListingsApi.md#getlistings) | **GET** /listings | List all listings.
*ListingsApi* | [**getListingsId**](docs/Api/ListingsApi.md#getlistingsid) | **GET** /listings/{listing_id} | Retrieve a listing.
*OrdersApi* | [**getOrders**](docs/Api/OrdersApi.md#getorders) | **GET** /orders | List all orders.
*OrdersApi* | [**getOrdersId**](docs/Api/OrdersApi.md#getordersid) | **GET** /orders/{order_id} | Retrieve an order.
*OrdersApi* | [**getProducts**](docs/Api/OrdersApi.md#getproducts) | **GET** /products | List all products.
*OrdersApi* | [**postOrders**](docs/Api/OrdersApi.md#postorders) | **POST** /orders | Create an order.
*VendorsApi* | [**getVendors**](docs/Api/VendorsApi.md#getvendors) | **GET** /vendors | List all vendors.
*VendorsApi* | [**getVendorsId**](docs/Api/VendorsApi.md#getvendorsid) | **GET** /vendors/{vendor_id} | Retrieve a vendor.

## Models

- [Address](docs/Model/Address.md)
- [ApiError403](docs/Model/ApiError403.md)
- [ApiError404](docs/Model/ApiError404.md)
- [ApiError409](docs/Model/ApiError409.md)
- [ApiError500](docs/Model/ApiError500.md)
- [ApiFail422](docs/Model/ApiFail422.md)
- [Appointment](docs/Model/Appointment.md)
- [AppointmentCancelPutPayload](docs/Model/AppointmentCancelPutPayload.md)
- [AppointmentCollection](docs/Model/AppointmentCollection.md)
- [AppointmentReschedulePutPayload](docs/Model/AppointmentReschedulePutPayload.md)
- [AppointmentResource](docs/Model/AppointmentResource.md)
- [CalendarDay](docs/Model/CalendarDay.md)
- [CalendarDayCollection](docs/Model/CalendarDayCollection.md)
- [FloorPlan](docs/Model/FloorPlan.md)
- [Group](docs/Model/Group.md)
- [GroupCollection](docs/Model/GroupCollection.md)
- [GroupResource](docs/Model/GroupResource.md)
- [Image](docs/Model/Image.md)
- [InteractiveContent](docs/Model/InteractiveContent.md)
- [Listing](docs/Model/Listing.md)
- [ListingBuilding](docs/Model/ListingBuilding.md)
- [ListingCollection](docs/Model/ListingCollection.md)
- [ListingLot](docs/Model/ListingLot.md)
- [ListingPrice](docs/Model/ListingPrice.md)
- [ListingResource](docs/Model/ListingResource.md)
- [Order](docs/Model/Order.md)
- [OrderCollection](docs/Model/OrderCollection.md)
- [OrderForm](docs/Model/OrderForm.md)
- [OrderItem](docs/Model/OrderItem.md)
- [OrderPostPayload](docs/Model/OrderPostPayload.md)
- [OrderResource](docs/Model/OrderResource.md)
- [PaginationLinks](docs/Model/PaginationLinks.md)
- [PaginationMeta](docs/Model/PaginationMeta.md)
- [Product](docs/Model/Product.md)
- [ProductCategory](docs/Model/ProductCategory.md)
- [ProductCollection](docs/Model/ProductCollection.md)
- [ProductVariant](docs/Model/ProductVariant.md)
- [PropertyWebsite](docs/Model/PropertyWebsite.md)
- [SocialProfiles](docs/Model/SocialProfiles.md)
- [Timeslot](docs/Model/Timeslot.md)
- [TimeslotCollection](docs/Model/TimeslotCollection.md)
- [UnconfirmedAppointment](docs/Model/UnconfirmedAppointment.md)
- [UnconfirmedAppointmentCollection](docs/Model/UnconfirmedAppointmentCollection.md)
- [UnconfirmedAppointmentResource](docs/Model/UnconfirmedAppointmentResource.md)
- [User](docs/Model/User.md)
- [Video](docs/Model/Video.md)

## Authorization

### Token

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

jarrod@aryeo.com
