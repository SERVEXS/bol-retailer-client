# ServeXS\BolRetailer\v7\ProductContentApi

All URIs are relative to https://api.bol.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUploadReport()**](ProductContentApi.md#getUploadReport) | **GET** /retailer/content/upload-report/{upload-id} | Get an upload report by upload id
[**postProductContent()**](ProductContentApi.md#postProductContent) | **POST** /retailer/content/products | Create content for a product


## `getUploadReport()`

```php
getUploadReport($upload_id): \ServeXS\BolRetailer\v7\Model\UploadReportResponse
```

Get an upload report by upload id

Gets the upload report of the product content submitted by upload id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ServeXS\BolRetailer\v7\Api\ProductContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$upload_id = 'upload_id_example'; // string | The identifier of the upload report.

try {
    $result = $apiInstance->getUploadReport($upload_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductContentApi->getUploadReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_id** | **string**| The identifier of the upload report. |

### Return type

[**\ServeXS\BolRetailer\v7\Model\UploadReportResponse**](../Model/UploadReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v7+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProductContent()`

```php
postProductContent($body): \ServeXS\BolRetailer\v7\Model\ProcessStatus
```

Create content for a product

Create content for an existing product.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ServeXS\BolRetailer\v7\Api\ProductContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ServeXS\BolRetailer\v7\Model\CreateProductContentSingleRequest(); // \ServeXS\BolRetailer\v7\Model\CreateProductContentSingleRequest

try {
    $result = $apiInstance->postProductContent($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductContentApi->postProductContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ServeXS\BolRetailer\v7\Model\CreateProductContentSingleRequest**](../Model/CreateProductContentSingleRequest.md)|  | [optional]

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
