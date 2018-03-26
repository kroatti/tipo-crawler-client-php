# Swagger\Client\SearchApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiSearchDetailsPost**](SearchApi.md#apiSearchDetailsPost) | **POST** /api/Search/details | 
[**apiSearchPost**](SearchApi.md#apiSearchPost) | **POST** /api/Search | 


# **apiSearchDetailsPost**
> \Swagger\Client\Model\TipoDetailsResult apiSearchDetailsPost($model)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \Swagger\Client\Model\DownloadViewModel(); // \Swagger\Client\Model\DownloadViewModel | 

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
 **model** | [**\Swagger\Client\Model\DownloadViewModel**](../Model/DownloadViewModel.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TipoDetailsResult**](../Model/TipoDetailsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSearchPost**
> \Swagger\Client\Model\TipoSearchResult apiSearchPost($model)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = new \Swagger\Client\Model\FilterViewModel(); // \Swagger\Client\Model\FilterViewModel | 

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
 **model** | [**\Swagger\Client\Model\FilterViewModel**](../Model/FilterViewModel.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TipoSearchResult**](../Model/TipoSearchResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

