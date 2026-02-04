# Camb.ai\LanguagesApi



All URIs are relative to https://client.camb.ai/apis, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSourceLanguagesSourceLanguagesGet()**](LanguagesApi.md#getSourceLanguagesSourceLanguagesGet) | **GET** /source-languages | Get Source Languages |
| [**getSourceLanguagesSourceLanguagesGet_0()**](LanguagesApi.md#getSourceLanguagesSourceLanguagesGet_0) | **GET** /source-languages | Get Source Languages |
| [**getTargetLanguagesTargetLanguagesGet()**](LanguagesApi.md#getTargetLanguagesTargetLanguagesGet) | **GET** /target-languages | Get Target Languages |
| [**getTargetLanguagesTargetLanguagesGet_0()**](LanguagesApi.md#getTargetLanguagesTargetLanguagesGet_0) | **GET** /target-languages | Get Target Languages |


## `getSourceLanguagesSourceLanguagesGet()`

```php
getSourceLanguagesSourceLanguagesGet($run_id): \Camb.ai\Model\LanguagePydanticModel[]
```

Get Source Languages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\LanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int

try {
    $result = $apiInstance->getSourceLanguagesSourceLanguagesGet($run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguagesApi->getSourceLanguagesSourceLanguagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | [optional] |

### Return type

[**\Camb.ai\Model\LanguagePydanticModel[]**](../Model/LanguagePydanticModel.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSourceLanguagesSourceLanguagesGet_0()`

```php
getSourceLanguagesSourceLanguagesGet_0($run_id): \Camb.ai\Model\LanguagePydanticModel[]
```

Get Source Languages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\LanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int

try {
    $result = $apiInstance->getSourceLanguagesSourceLanguagesGet_0($run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguagesApi->getSourceLanguagesSourceLanguagesGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | [optional] |

### Return type

[**\Camb.ai\Model\LanguagePydanticModel[]**](../Model/LanguagePydanticModel.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTargetLanguagesTargetLanguagesGet()`

```php
getTargetLanguagesTargetLanguagesGet($run_id): \Camb.ai\Model\LanguagePydanticModel[]
```

Get Target Languages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\LanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int

try {
    $result = $apiInstance->getTargetLanguagesTargetLanguagesGet($run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguagesApi->getTargetLanguagesTargetLanguagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | [optional] |

### Return type

[**\Camb.ai\Model\LanguagePydanticModel[]**](../Model/LanguagePydanticModel.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTargetLanguagesTargetLanguagesGet_0()`

```php
getTargetLanguagesTargetLanguagesGet_0($run_id): \Camb.ai\Model\LanguagePydanticModel[]
```

Get Target Languages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\LanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int

try {
    $result = $apiInstance->getTargetLanguagesTargetLanguagesGet_0($run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguagesApi->getTargetLanguagesTargetLanguagesGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | [optional] |

### Return type

[**\Camb.ai\Model\LanguagePydanticModel[]**](../Model/LanguagePydanticModel.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
