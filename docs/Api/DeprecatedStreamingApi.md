# Camb.ai\DeprecatedStreamingApi



All URIs are relative to https://client.camb.ai/apis, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createStreamV1StreamPost()**](DeprecatedStreamingApi.md#createStreamV1StreamPost) | **POST** /v1/stream | Create Stream |
| [**getProbeStreamV1StreamProbePost()**](DeprecatedStreamingApi.md#getProbeStreamV1StreamProbePost) | **POST** /v1/stream/probe | Get Probe Stream |
| [**getStreamResultV1StreamStreamIdGet()**](DeprecatedStreamingApi.md#getStreamResultV1StreamStreamIdGet) | **GET** /v1/stream/{stream_id} | Get Stream Result |
| [**stopStreamV1StreamStreamIdStopGet()**](DeprecatedStreamingApi.md#stopStreamV1StreamStreamIdStopGet) | **GET** /v1/stream/{stream_id}/stop | Stop Stream |


## `createStreamV1StreamPost()`

```php
createStreamV1StreamPost($create_stream_request_payload): \Camb.ai\Model\CreateStreamOut
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


$apiInstance = new Camb.ai\Api\DeprecatedStreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_stream_request_payload = new \Camb.ai\Model\CreateStreamRequestPayload(); // \Camb.ai\Model\CreateStreamRequestPayload

try {
    $result = $apiInstance->createStreamV1StreamPost($create_stream_request_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeprecatedStreamingApi->createStreamV1StreamPost: ', $e->getMessage(), PHP_EOL;
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

## `getProbeStreamV1StreamProbePost()`

```php
getProbeStreamV1StreamProbePost($get_probe_stream_in, $run_id, $traceparent): \Camb.ai\Model\GetProbeStreamOut
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


$apiInstance = new Camb.ai\Api\DeprecatedStreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_probe_stream_in = new \Camb.ai\Model\GetProbeStreamIn(); // \Camb.ai\Model\GetProbeStreamIn
$run_id = 56; // int
$traceparent = 'traceparent_example'; // string

try {
    $result = $apiInstance->getProbeStreamV1StreamProbePost($get_probe_stream_in, $run_id, $traceparent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeprecatedStreamingApi->getProbeStreamV1StreamProbePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_probe_stream_in** | [**\Camb.ai\Model\GetProbeStreamIn**](../Model/GetProbeStreamIn.md)|  | |
| **run_id** | **int**|  | [optional] |
| **traceparent** | **string**|  | [optional] |

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

## `getStreamResultV1StreamStreamIdGet()`

```php
getStreamResultV1StreamStreamIdGet($stream_id, $run_id): array<string,mixed>
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


$apiInstance = new Camb.ai\Api\DeprecatedStreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stream_id = 56; // int
$run_id = 56; // int

try {
    $result = $apiInstance->getStreamResultV1StreamStreamIdGet($stream_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeprecatedStreamingApi->getStreamResultV1StreamStreamIdGet: ', $e->getMessage(), PHP_EOL;
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

## `stopStreamV1StreamStreamIdStopGet()`

```php
stopStreamV1StreamStreamIdStopGet($stream_id, $run_id): array<string,mixed>
```

Stop Stream

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\DeprecatedStreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stream_id = 56; // int
$run_id = 56; // int

try {
    $result = $apiInstance->stopStreamV1StreamStreamIdStopGet($stream_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeprecatedStreamingApi->stopStreamV1StreamStreamIdStopGet: ', $e->getMessage(), PHP_EOL;
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
