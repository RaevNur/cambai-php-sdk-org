# Camb.ai\TextToVoiceApi



All URIs are relative to https://client.camb.ai/apis, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTextToVoiceTextToVoicePost()**](TextToVoiceApi.md#createTextToVoiceTextToVoicePost) | **POST** /text-to-voice | Create Text To Voice |
| [**createTextToVoiceTextToVoicePost_0()**](TextToVoiceApi.md#createTextToVoiceTextToVoicePost_0) | **POST** /text-to-voice | Create Text To Voice |
| [**getTextToVoiceResultTextToVoiceResultRunIdGet()**](TextToVoiceApi.md#getTextToVoiceResultTextToVoiceResultRunIdGet) | **GET** /text-to-voice-result/{run_id} | Get Text To Voice Result |
| [**getTextToVoiceResultTextToVoiceResultRunIdGet_0()**](TextToVoiceApi.md#getTextToVoiceResultTextToVoiceResultRunIdGet_0) | **GET** /text-to-voice-result/{run_id} | Get Text To Voice Result |
| [**getTextToVoiceStatusTextToVoiceTaskIdGet()**](TextToVoiceApi.md#getTextToVoiceStatusTextToVoiceTaskIdGet) | **GET** /text-to-voice/{task_id} | Get Text To Voice Status |
| [**getTextToVoiceStatusTextToVoiceTaskIdGet_0()**](TextToVoiceApi.md#getTextToVoiceStatusTextToVoiceTaskIdGet_0) | **GET** /text-to-voice/{task_id} | Get Text To Voice Status |


## `createTextToVoiceTextToVoicePost()`

```php
createTextToVoiceTextToVoicePost($create_text_to_voice_request_payload, $traceparent): \Camb.ai\Model\OrchestratorPipelineCallResult
```

Create Text To Voice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TextToVoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_text_to_voice_request_payload = new \Camb.ai\Model\CreateTextToVoiceRequestPayload(); // \Camb.ai\Model\CreateTextToVoiceRequestPayload
$traceparent = 'traceparent_example'; // string

try {
    $result = $apiInstance->createTextToVoiceTextToVoicePost($create_text_to_voice_request_payload, $traceparent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextToVoiceApi->createTextToVoiceTextToVoicePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_text_to_voice_request_payload** | [**\Camb.ai\Model\CreateTextToVoiceRequestPayload**](../Model/CreateTextToVoiceRequestPayload.md)|  | |
| **traceparent** | **string**|  | [optional] |

### Return type

[**\Camb.ai\Model\OrchestratorPipelineCallResult**](../Model/OrchestratorPipelineCallResult.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTextToVoiceTextToVoicePost_0()`

```php
createTextToVoiceTextToVoicePost_0($create_text_to_voice_request_payload, $traceparent): \Camb.ai\Model\OrchestratorPipelineCallResult
```

Create Text To Voice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TextToVoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_text_to_voice_request_payload = new \Camb.ai\Model\CreateTextToVoiceRequestPayload(); // \Camb.ai\Model\CreateTextToVoiceRequestPayload
$traceparent = 'traceparent_example'; // string

try {
    $result = $apiInstance->createTextToVoiceTextToVoicePost_0($create_text_to_voice_request_payload, $traceparent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextToVoiceApi->createTextToVoiceTextToVoicePost_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_text_to_voice_request_payload** | [**\Camb.ai\Model\CreateTextToVoiceRequestPayload**](../Model/CreateTextToVoiceRequestPayload.md)|  | |
| **traceparent** | **string**|  | [optional] |

### Return type

[**\Camb.ai\Model\OrchestratorPipelineCallResult**](../Model/OrchestratorPipelineCallResult.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTextToVoiceResultTextToVoiceResultRunIdGet()`

```php
getTextToVoiceResultTextToVoiceResultRunIdGet($run_id): \Camb.ai\Model\GetTextToVoiceResultOut
```

Get Text To Voice Result

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TextToVoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int

try {
    $result = $apiInstance->getTextToVoiceResultTextToVoiceResultRunIdGet($run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextToVoiceApi->getTextToVoiceResultTextToVoiceResultRunIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | |

### Return type

[**\Camb.ai\Model\GetTextToVoiceResultOut**](../Model/GetTextToVoiceResultOut.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTextToVoiceResultTextToVoiceResultRunIdGet_0()`

```php
getTextToVoiceResultTextToVoiceResultRunIdGet_0($run_id): \Camb.ai\Model\GetTextToVoiceResultOut
```

Get Text To Voice Result

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TextToVoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int

try {
    $result = $apiInstance->getTextToVoiceResultTextToVoiceResultRunIdGet_0($run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextToVoiceApi->getTextToVoiceResultTextToVoiceResultRunIdGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | |

### Return type

[**\Camb.ai\Model\GetTextToVoiceResultOut**](../Model/GetTextToVoiceResultOut.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTextToVoiceStatusTextToVoiceTaskIdGet()`

```php
getTextToVoiceStatusTextToVoiceTaskIdGet($task_id, $run_id, $traceparent): \Camb.ai\Model\OrchestratorPipelineResult
```

Get Text To Voice Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TextToVoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string
$run_id = 56; // int
$traceparent = 'traceparent_example'; // string

try {
    $result = $apiInstance->getTextToVoiceStatusTextToVoiceTaskIdGet($task_id, $run_id, $traceparent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextToVoiceApi->getTextToVoiceStatusTextToVoiceTaskIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**|  | |
| **run_id** | **int**|  | [optional] |
| **traceparent** | **string**|  | [optional] |

### Return type

[**\Camb.ai\Model\OrchestratorPipelineResult**](../Model/OrchestratorPipelineResult.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTextToVoiceStatusTextToVoiceTaskIdGet_0()`

```php
getTextToVoiceStatusTextToVoiceTaskIdGet_0($task_id, $run_id, $traceparent): \Camb.ai\Model\OrchestratorPipelineResult
```

Get Text To Voice Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TextToVoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string
$run_id = 56; // int
$traceparent = 'traceparent_example'; // string

try {
    $result = $apiInstance->getTextToVoiceStatusTextToVoiceTaskIdGet_0($task_id, $run_id, $traceparent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextToVoiceApi->getTextToVoiceStatusTextToVoiceTaskIdGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**|  | |
| **run_id** | **int**|  | [optional] |
| **traceparent** | **string**|  | [optional] |

### Return type

[**\Camb.ai\Model\OrchestratorPipelineResult**](../Model/OrchestratorPipelineResult.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
