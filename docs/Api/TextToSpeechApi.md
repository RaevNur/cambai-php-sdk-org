# Camb.ai\TextToSpeechApi



All URIs are relative to https://client.camb.ai/apis, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTtsTtsPost()**](TextToSpeechApi.md#createTtsTtsPost) | **POST** /tts | Create Tts |
| [**getTtsResultDiscordDiscordTtsTaskIdGet()**](TextToSpeechApi.md#getTtsResultDiscordDiscordTtsTaskIdGet) | **GET** /discord/tts/{task_id} | Get Tts Result Discord |
| [**getTtsResultTtsTaskIdGet()**](TextToSpeechApi.md#getTtsResultTtsTaskIdGet) | **GET** /tts/{task_id} | Get Tts Result |
| [**getTtsResultsTtsResultsPost()**](TextToSpeechApi.md#getTtsResultsTtsResultsPost) | **POST** /tts-results | Get Tts Results |
| [**getTtsRunInfoTtsResultRunIdGet()**](TextToSpeechApi.md#getTtsRunInfoTtsResultRunIdGet) | **GET** /tts-result/{run_id} | Get Tts Run Info |
| [**ttsTtsStreamPost()**](TextToSpeechApi.md#ttsTtsStreamPost) | **POST** /tts-stream | Tts |


## `createTtsTtsPost()`

```php
createTtsTtsPost($create_tts_request_payload, $run_id): \Camb.ai\Model\CreateTTSOut
```

Create Tts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TextToSpeechApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_tts_request_payload = new \Camb.ai\Model\CreateTTSRequestPayload(); // \Camb.ai\Model\CreateTTSRequestPayload
$run_id = 56; // int

try {
    $result = $apiInstance->createTtsTtsPost($create_tts_request_payload, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextToSpeechApi->createTtsTtsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_tts_request_payload** | [**\Camb.ai\Model\CreateTTSRequestPayload**](../Model/CreateTTSRequestPayload.md)|  | |
| **run_id** | **int**|  | [optional] |

### Return type

[**\Camb.ai\Model\CreateTTSOut**](../Model/CreateTTSOut.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTtsResultDiscordDiscordTtsTaskIdGet()`

```php
getTtsResultDiscordDiscordTtsTaskIdGet($task_id, $run_id): \Camb.ai\Model\OrchestratorPipelineResult
```

Get Tts Result Discord

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TextToSpeechApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string
$run_id = 56; // int

try {
    $result = $apiInstance->getTtsResultDiscordDiscordTtsTaskIdGet($task_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextToSpeechApi->getTtsResultDiscordDiscordTtsTaskIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**|  | |
| **run_id** | **int**|  | [optional] |

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

## `getTtsResultTtsTaskIdGet()`

```php
getTtsResultTtsTaskIdGet($task_id, $run_id): \Camb.ai\Model\OrchestratorPipelineResult
```

Get Tts Result

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TextToSpeechApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string
$run_id = 56; // int

try {
    $result = $apiInstance->getTtsResultTtsTaskIdGet($task_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextToSpeechApi->getTtsResultTtsTaskIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**|  | |
| **run_id** | **int**|  | [optional] |

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

## `getTtsResultsTtsResultsPost()`

```php
getTtsResultsTtsResultsPost($run_ids_request_payload, $run_id, $traceparent): array<string,\Camb.ai\Model\ResponseGetTtsResultsTtsResultsPostValue>
```

Get Tts Results

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TextToSpeechApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_ids_request_payload = new \Camb.ai\Model\RunIDsRequestPayload(); // \Camb.ai\Model\RunIDsRequestPayload
$run_id = 56; // int
$traceparent = 'traceparent_example'; // string

try {
    $result = $apiInstance->getTtsResultsTtsResultsPost($run_ids_request_payload, $run_id, $traceparent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextToSpeechApi->getTtsResultsTtsResultsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_ids_request_payload** | [**\Camb.ai\Model\RunIDsRequestPayload**](../Model/RunIDsRequestPayload.md)|  | |
| **run_id** | **int**|  | [optional] |
| **traceparent** | **string**|  | [optional] |

### Return type

[**array<string,\Camb.ai\Model\ResponseGetTtsResultsTtsResultsPostValue>**](../Model/ResponseGetTtsResultsTtsResultsPostValue.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTtsRunInfoTtsResultRunIdGet()`

```php
getTtsRunInfoTtsResultRunIdGet($run_id, $output_type): \Camb.ai\Model\ResponseGetTtsRunInfoTtsResultRunIdGet
```

Get Tts Run Info

Retrieves the result of a Text To Speech (TTS) run.  This endpoint validates the provided `run_id` and fetches the corresponding TTS-generated audio. The user must have valid access to the run. The function supports two output formats: - `RAW_BYTES`: Streams the audio file directly. - `FILE_URL`: Returns a pre-signed URL to download the audio file.  Args:     run_id (int): Unique identifier for the TTS run.     api_key_obj (dict): API key object used for authentication and storage preferences.     traceparent (Optional[str]): Traceparent header for distributed tracing.     output_type (OutputType, optional): Determines the output format. Defaults to `RAW_BYTES`.  Returns:     StreamingResponse | GetTTSOut:         - If `output_type = RAW_BYTES`: A streaming response containing the TTS-generated audio in FLAC format.         - If `output_type = FILE_URL`: A URL pointing to the stored TTS-generated audio file.  Raises:     HTTPException:         - 400 BAD REQUEST if the run ID is invalid or does not belong to a TTS process.         - 500 INTERNAL SERVER ERROR if fetching or streaming the audio fails.  Assumptions:     - The user has valid access to the `run_id`.     - The `run_id` corresponds to a valid TTS run.     - There is only **one** dialogue associated with the given `run_id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TextToSpeechApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int
$output_type = NULL; // mixed | Output format for the Text To Speech result

try {
    $result = $apiInstance->getTtsRunInfoTtsResultRunIdGet($run_id, $output_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextToSpeechApi->getTtsRunInfoTtsResultRunIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | |
| **output_type** | [**mixed**](../Model/.md)| Output format for the Text To Speech result | [optional] |

### Return type

[**\Camb.ai\Model\ResponseGetTtsRunInfoTtsResultRunIdGet**](../Model/ResponseGetTtsRunInfoTtsResultRunIdGet.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ttsTtsStreamPost()`

```php
ttsTtsStreamPost($create_stream_tts_request_payload): mixed
```

Tts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TextToSpeechApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_stream_tts_request_payload = new \Camb.ai\Model\CreateStreamTTSRequestPayload(); // \Camb.ai\Model\CreateStreamTTSRequestPayload

try {
    $result = $apiInstance->ttsTtsStreamPost($create_stream_tts_request_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextToSpeechApi->ttsTtsStreamPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_stream_tts_request_payload** | [**\Camb.ai\Model\CreateStreamTTSRequestPayload**](../Model/CreateStreamTTSRequestPayload.md)|  | |

### Return type

**mixed**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `audio/wav`, `audio/flac`, `audio/aac`, `audio/mpeg`, `audio/x-pcm`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
