# TipoCrawler\SearchApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiSearchDetailsPost**](SearchApi.md#apiSearchDetailsPost) | **POST** /api/Search/details | 
[**apiSearchError500Post**](SearchApi.md#apiSearchError500Post) | **POST** /api/Search/Error500 | 
[**apiSearchPost**](SearchApi.md#apiSearchPost) | **POST** /api/Search | 


# **apiSearchDetailsPost**
> \TipoCrawler\Model\TipoDetailsResult apiSearchDetailsPost($model)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TipoCrawler\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \TipoCrawler\Model\DownloadViewModel(); // \TipoCrawler\Model\DownloadViewModel | 

try {
    $result = $apiInstance->apiSearchDetailsPost($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->apiSearchDetailsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\TipoCrawler\Model\DownloadViewModel**](../Model/DownloadViewModel.md)|  | [optional]

### Return type

[**\TipoCrawler\Model\TipoDetailsResult**](../Model/TipoDetailsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSearchError500Post**
> apiSearchError500Post()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TipoCrawler\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiSearchError500Post();
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->apiSearchError500Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSearchPost**
> \TipoCrawler\Model\TipoSearchResult apiSearchPost($model)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TipoCrawler\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \TipoCrawler\Model\FilterViewModel(); // \TipoCrawler\Model\FilterViewModel | 

try {
    $result = $apiInstance->apiSearchPost($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->apiSearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\TipoCrawler\Model\FilterViewModel**](../Model/FilterViewModel.md)|  | [optional]

### Return type

[**\TipoCrawler\Model\TipoSearchResult**](../Model/TipoSearchResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

