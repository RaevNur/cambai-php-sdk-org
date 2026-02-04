# Camb.ai\StreamingApi



All URIs are relative to https://client.camb.ai/apis, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createStreamStreamPost()**](StreamingApi.md#createStreamStreamPost) | **POST** /stream | Create Stream |
| [**destroyStreamStreamStreamIdDelete()**](StreamingApi.md#destroyStreamStreamStreamIdDelete) | **DELETE** /stream/{stream_id} | Destroy Stream |
| [**getProbeStreamStreamProbePost()**](StreamingApi.md#getProbeStreamStreamProbePost) | **POST** /stream/probe | Get Probe Stream |
| [**getStreamResultStreamStreamIdGet()**](StreamingApi.md#getStreamResultStreamStreamIdGet) | **GET** /stream/{stream_id} | Get Stream Result |
| [**patchStreamDataStreamStreamIdPatch()**](StreamingApi.md#patchStreamDataStreamStreamIdPatch) | **PATCH** /stream/{stream_id} | Patch Stream Data |


## `createStreamStreamPost()`

```php
createStreamStreamPost($create_stream_request_payload): \Camb.ai\Model\CreateStreamOut
```

Create Stream

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\StreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_stream_request_payload = new \Camb.ai\Model\CreateStreamRequestPayload(); // \Camb.ai\Model\CreateStreamRequestPayload

try {
    $result = $apiInstance->createStreamStreamPost($create_stream_request_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamingApi->createStreamStreamPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_stream_request_payload** | [**\Camb.ai\Model\CreateStreamRequestPayload**](../Model/CreateStreamRequestPayload.md)|  | |

### Return type

[**\Camb.ai\Model\CreateStreamOut**](../Model/CreateStreamOut.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destroyStreamStreamStreamIdDelete()`

```php
destroyStreamStreamStreamIdDelete($stream_id, $run_id): array<string,mixed>
```

Destroy Stream

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\StreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stream_id = 56; // int
$run_id = 56; // int

try {
    $result = $apiInstance->destroyStreamStreamStreamIdDelete($stream_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamingApi->destroyStreamStreamStreamIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stream_id** | **int**|  | |
| **run_id** | **int**|  | [optional] |

### Return type

**array<string,mixed>**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProbeStreamStreamProbePost()`

```php
getProbeStreamStreamProbePost($get_probe_stream_in, $run_id): \Camb.ai\Model\GetProbeStreamOut
```

Get Probe Stream

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\StreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_probe_stream_in = new \Camb.ai\Model\GetProbeStreamIn(); // \Camb.ai\Model\GetProbeStreamIn
$run_id = 56; // int

try {
    $result = $apiInstance->getProbeStreamStreamProbePost($get_probe_stream_in, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamingApi->getProbeStreamStreamProbePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_probe_stream_in** | [**\Camb.ai\Model\GetProbeStreamIn**](../Model/GetProbeStreamIn.md)|  | |
| **run_id** | **int**|  | [optional] |

### Return type

[**\Camb.ai\Model\GetProbeStreamOut**](../Model/GetProbeStreamOut.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStreamResultStreamStreamIdGet()`

```php
getStreamResultStreamStreamIdGet($stream_id, $run_id): array<string,mixed>
```

Get Stream Result

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\StreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stream_id = 56; // int
$run_id = 56; // int

try {
    $result = $apiInstance->getStreamResultStreamStreamIdGet($stream_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamingApi->getStreamResultStreamStreamIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stream_id** | **int**|  | |
| **run_id** | **int**|  | [optional] |

### Return type

**array<string,mixed>**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchStreamDataStreamStreamIdPatch()`

```php
patchStreamDataStreamStreamIdPatch($stream_id, $update_stream_data_request_payload, $run_id): array<string,mixed>
```

Patch Stream Data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\StreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stream_id = 56; // int
$update_stream_data_request_payload = new \Camb.ai\Model\UpdateStreamDataRequestPayload(); // \Camb.ai\Model\UpdateStreamDataRequestPayload
$run_id = 56; // int

try {
    $result = $apiInstance->patchStreamDataStreamStreamIdPatch($stream_id, $update_stream_data_request_payload, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamingApi->patchStreamDataStreamStreamIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stream_id** | **int**|  | |
| **update_stream_data_request_payload** | [**\Camb.ai\Model\UpdateStreamDataRequestPayload**](../Model/UpdateStreamDataRequestPayload.md)|  | |
| **run_id** | **int**|  | [optional] |

### Return type

**array<string,mixed>**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
