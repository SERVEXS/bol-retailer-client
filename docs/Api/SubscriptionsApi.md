# ServeXS\BolRetailer\v7\SubscriptionsApi

All URIs are relative to https://api.bol.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePushNotificationSubscription()**](SubscriptionsApi.md#deletePushNotificationSubscription) | **DELETE** /retailer/subscriptions/{subscription-id} | Delete push notification subscription
[**getPushNotificationSubscription()**](SubscriptionsApi.md#getPushNotificationSubscription) | **GET** /retailer/subscriptions/{subscription-id} | Get push notification subscription by id
[**getPushNotificationSubscriptions()**](SubscriptionsApi.md#getPushNotificationSubscriptions) | **GET** /retailer/subscriptions | Get push notification subscriptions
[**getSubscriptionKeys()**](SubscriptionsApi.md#getSubscriptionKeys) | **GET** /retailer/subscriptions/signature-keys | Retrieve public keys for push notification signature validation.
[**postPushNotificationSubscription()**](SubscriptionsApi.md#postPushNotificationSubscription) | **POST** /retailer/subscriptions | Create push notification subscription
[**postTestPushNotification()**](SubscriptionsApi.md#postTestPushNotification) | **POST** /retailer/subscriptions/test/{subscription-id} | Send test push notification for subscriptions
[**putPushNotificationSubscription()**](SubscriptionsApi.md#putPushNotificationSubscription) | **PUT** /retailer/subscriptions/{subscription-id} | Update push notification subscription


## `deletePushNotificationSubscription()`

```php
deletePushNotificationSubscription($subscription_id): \ServeXS\BolRetailer\v7\Model\ProcessStatus
```

Delete push notification subscription

Delete a push notification subscription with the provided id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ServeXS\BolRetailer\v7\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_id = 1234; // string | A unique identifier for the subscription.

try {
    $result = $apiInstance->deletePushNotificationSubscription($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->deletePushNotificationSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| A unique identifier for the subscription. |

### Return type

[**\ServeXS\BolRetailer\v7\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v7+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPushNotificationSubscription()`

```php
getPushNotificationSubscription($subscription_id): \ServeXS\BolRetailer\v7\Model\SubscriptionResponse
```

Get push notification subscription by id

Retrieve a configured and active push notification subscription with the provided id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ServeXS\BolRetailer\v7\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_id = 1234; // string | A unique identifier for the subscription.

try {
    $result = $apiInstance->getPushNotificationSubscription($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getPushNotificationSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| A unique identifier for the subscription. |

### Return type

[**\ServeXS\BolRetailer\v7\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v7+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPushNotificationSubscriptions()`

```php
getPushNotificationSubscriptions(): \ServeXS\BolRetailer\v7\Model\SubscriptionsResponse
```

Get push notification subscriptions

Retrieve a list of all configured and active push notification subscriptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ServeXS\BolRetailer\v7\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getPushNotificationSubscriptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getPushNotificationSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ServeXS\BolRetailer\v7\Model\SubscriptionsResponse**](../Model/SubscriptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v7+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionKeys()`

```php
getSubscriptionKeys(): \ServeXS\BolRetailer\v7\Model\KeySetResponse
```

Retrieve public keys for push notification signature validation.

Retrieve a list of public keys that should be used to validate the signature header for push notifications received from bol.com.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ServeXS\BolRetailer\v7\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getSubscriptionKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ServeXS\BolRetailer\v7\Model\KeySetResponse**](../Model/KeySetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v7+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPushNotificationSubscription()`

```php
postPushNotificationSubscription($body): \ServeXS\BolRetailer\v7\Model\ProcessStatus
```

Create push notification subscription

Create a push notification subscription for one (or more) of the available resources. The configured URL has to support https scheme.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ServeXS\BolRetailer\v7\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ServeXS\BolRetailer\v7\Model\CreateSubscriptionRequest(); // \ServeXS\BolRetailer\v7\Model\CreateSubscriptionRequest

try {
    $result = $apiInstance->postPushNotificationSubscription($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->postPushNotificationSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ServeXS\BolRetailer\v7\Model\CreateSubscriptionRequest**](../Model/CreateSubscriptionRequest.md)|  | [optional]

### Return type

[**\ServeXS\BolRetailer\v7\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v7+json`
- **Accept**: `application/vnd.retailer.v7+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTestPushNotification()`

```php
postTestPushNotification($subscription_id): \ServeXS\BolRetailer\v7\Model\ProcessStatus
```

Send test push notification for subscriptions

Send a test push notification to all subscriptions for the provided event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ServeXS\BolRetailer\v7\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_id = 1234; // string | A unique identifier for the subscription.

try {
    $result = $apiInstance->postTestPushNotification($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->postTestPushNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| A unique identifier for the subscription. |

### Return type

[**\ServeXS\BolRetailer\v7\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v7+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPushNotificationSubscription()`

```php
putPushNotificationSubscription($subscription_id, $body): \ServeXS\BolRetailer\v7\Model\ProcessStatus
```

Update push notification subscription

Update an existing push notification subscription with the supplied id. The configured URL has to support https scheme.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ServeXS\BolRetailer\v7\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_id = 1234; // string | A unique identifier for the subscription.
$body = new \ServeXS\BolRetailer\v7\Model\UpdateSubscriptionRequest(); // \ServeXS\BolRetailer\v7\Model\UpdateSubscriptionRequest

try {
    $result = $apiInstance->putPushNotificationSubscription($subscription_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->putPushNotificationSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| A unique identifier for the subscription. |
 **body** | [**\ServeXS\BolRetailer\v7\Model\UpdateSubscriptionRequest**](../Model/UpdateSubscriptionRequest.md)|  | [optional]

### Return type

[**\ServeXS\BolRetailer\v7\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v7+json`
- **Accept**: `application/vnd.retailer.v7+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
