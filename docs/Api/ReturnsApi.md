# ServeXS\BolRetailer\v7\ReturnsApi

All URIs are relative to https://api.bol.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReturn()**](ReturnsApi.md#createReturn) | **POST** /retailer/returns | Create a return
[**getReturn()**](ReturnsApi.md#getReturn) | **GET** /retailer/returns/{return-id} | Get a return by return id
[**getReturns()**](ReturnsApi.md#getReturns) | **GET** /retailer/returns | Get returns
[**handleReturn()**](ReturnsApi.md#handleReturn) | **PUT** /retailer/returns/{rma-id} | Handle a return by rma id


## `createReturn()`

```php
createReturn($body): \ServeXS\BolRetailer\v7\Model\ProcessStatus
```

Create a return

Create a return, and automatically handle it with the provided handling result. When successfully created, the resulting return id is provided in the process status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ServeXS\BolRetailer\v7\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ServeXS\BolRetailer\v7\Model\CreateReturnRequest(); // \ServeXS\BolRetailer\v7\Model\CreateReturnRequest

try {
    $result = $apiInstance->createReturn($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->createReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ServeXS\BolRetailer\v7\Model\CreateReturnRequest**](../Model/CreateReturnRequest.md)|  | [optional]

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

## `getReturn()`

```php
getReturn($return_id): \ServeXS\BolRetailer\v7\Model\ModelReturn
```

Get a return by return id

Retrieve a return based on the return id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ServeXS\BolRetailer\v7\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$return_id = 'return_id_example'; // string | Unique identifier for a return.

try {
    $result = $apiInstance->getReturn($return_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->getReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_id** | **string**| Unique identifier for a return. |

### Return type

[**\ServeXS\BolRetailer\v7\Model\ModelReturn**](../Model/ModelReturn.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v7+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturns()`

```php
getReturns($page, $handled, $fulfilment_method): \ServeXS\BolRetailer\v7\Model\ReturnsResponse
```

Get returns

Get a paginated list of multi-item returns. Handled returns are sorted by date in descending order, while unhandled returns are sorted by date in ascending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ServeXS\BolRetailer\v7\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The page to get with a page size of 50.
$handled = True; // bool | The status of the returns you wish to see, shows either handled or unhandled returns.
$fulfilment_method = 'FBR'; // string | The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).

try {
    $result = $apiInstance->getReturns($page, $handled, $fulfilment_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->getReturns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page to get with a page size of 50. | [optional] [default to 1]
 **handled** | **bool**| The status of the returns you wish to see, shows either handled or unhandled returns. | [optional]
 **fulfilment_method** | **string**| The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). | [optional] [default to &#39;FBR&#39;]

### Return type

[**\ServeXS\BolRetailer\v7\Model\ReturnsResponse**](../Model/ReturnsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v7+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleReturn()`

```php
handleReturn($rma_id, $body): \ServeXS\BolRetailer\v7\Model\ProcessStatus
```

Handle a return by rma id

Allows the user to handle a return. This can be to either handle an open return, or change the handlingResult of an already handled return. Please refer to the Returns documentation for further details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ServeXS\BolRetailer\v7\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$rma_id = 56; // int | The RMA (Return Merchandise Authorization) identifier of the return.
$body = new \ServeXS\BolRetailer\v7\Model\ReturnRequest(); // \ServeXS\BolRetailer\v7\Model\ReturnRequest | The handling result requested by the retailer.

try {
    $result = $apiInstance->handleReturn($rma_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->handleReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rma_id** | **int**| The RMA (Return Merchandise Authorization) identifier of the return. |
 **body** | [**\ServeXS\BolRetailer\v7\Model\ReturnRequest**](../Model/ReturnRequest.md)| The handling result requested by the retailer. | [optional]

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
