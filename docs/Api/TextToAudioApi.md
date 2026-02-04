# Camb.ai\TextToAudioApi



All URIs are relative to https://client.camb.ai/apis, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTextToAudioTextToSoundPost()**](TextToAudioApi.md#createTextToAudioTextToSoundPost) | **POST** /text-to-sound | Create Text To Audio |
| [**getTextToAudioResultTextToSoundResultRunIdGet()**](TextToAudioApi.md#getTextToAudioResultTextToSoundResultRunIdGet) | **GET** /text-to-sound-result/{run_id} | Get Text To Audio Result |
| [**getTextToAudioStatusTextToSoundTaskIdGet()**](TextToAudioApi.md#getTextToAudioStatusTextToSoundTaskIdGet) | **GET** /text-to-sound/{task_id} | Get Text To Audio Status |
| [**getTextToSoundResultsTextToSoundResultsPost()**](TextToAudioApi.md#getTextToSoundResultsTextToSoundResultsPost) | **POST** /text-to-sound-results | Get Text To Sound Results |


## `createTextToAudioTextToSoundPost()`

```php
createTextToAudioTextToSoundPost($create_text_to_audio_request_payload, $run_id, $traceparent): \Camb.ai\Model\OrchestratorPipelineCallResult
```

Create Text To Audio

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TextToAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_text_to_audio_request_payload = new \Camb.ai\Model\CreateTextToAudioRequestPayload(); // \Camb.ai\Model\CreateTextToAudioRequestPayload
$run_id = 56; // int
$traceparent = 'traceparent_example'; // string

try {
    $result = $apiInstance->createTextToAudioTextToSoundPost($create_text_to_audio_request_payload, $run_id, $traceparent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextToAudioApi->createTextToAudioTextToSoundPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_text_to_audio_request_payload** | [**\Camb.ai\Model\CreateTextToAudioRequestPayload**](../Model/CreateTextToAudioRequestPayload.md)|  | |
| **run_id** | **int**|  | [optional] |
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

## `getTextToAudioResultTextToSoundResultRunIdGet()`

```php
getTextToAudioResultTextToSoundResultRunIdGet($run_id, $output_type): \SplFileObject
```

Get Text To Audio Result

Retrieve the Text-to-Audio (TTA) result for a given run.  This endpoint validates the provided run ID and retrieves the associated Text-to-Audio output. It supports two output formats: - RAW_BYTES: Streams the audio file in WAV format. - FILE_URL: Returns a pre-signed URL for downloading the audio file.  The endpoint ensures that the run type is valid for Text-to-Audio processing and that the storage preferences are applied accordingly.  Args:     run_id (int): Unique identifier for the TTA run.     traceparent (Optional[str]): Trace header for distributed tracing.     api_key_obj (dict): API key object containing authentication and storage preferences.     output_type (OutputType): Desired output format. Defaults to RAW_BYTES.  Returns:     StreamingResponse | GetTTAOut:         - StreamingResponse: If output_type is RAW_BYTES, a streaming response with the audio in WAV format.         - GetTTAOut: If output_type is FILE_URL, a pre-signed URL to access the audio file.  Raises:     HTTPException:         - 400 BAD REQUEST: If the run type is invalid for a TTA run.         - 500 INTERNAL SERVER ERROR: If the audio file cannot be fetched or streamed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TextToAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int
$output_type = NULL; // mixed | Output format for the Text To Speech result

try {
    $result = $apiInstance->getTextToAudioResultTextToSoundResultRunIdGet($run_id, $output_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextToAudioApi->getTextToAudioResultTextToSoundResultRunIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | |
| **output_type** | [**mixed**](../Model/.md)| Output format for the Text To Speech result | [optional] |

### Return type

**\SplFileObject**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `audio/wav`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTextToAudioStatusTextToSoundTaskIdGet()`

```php
getTextToAudioStatusTextToSoundTaskIdGet($task_id, $run_id): \Camb.ai\Model\OrchestratorPipelineResult
```

Get Text To Audio Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TextToAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string
$run_id = 56; // int

try {
    $result = $apiInstance->getTextToAudioStatusTextToSoundTaskIdGet($task_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextToAudioApi->getTextToAudioStatusTextToSoundTaskIdGet: ', $e->getMessage(), PHP_EOL;
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

## `getTextToSoundResultsTextToSoundResultsPost()`

```php
getTextToSoundResultsTextToSoundResultsPost($run_ids_request_payload, $run_id, $traceparent): array<string,\Camb.ai\Model\TextToAudioResult>
```

Get Text To Sound Results

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TextToAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_ids_request_payload = new \Camb.ai\Model\RunIDsRequestPayload(); // \Camb.ai\Model\RunIDsRequestPayload
$run_id = 56; // int
$traceparent = 'traceparent_example'; // string

try {
    $result = $apiInstance->getTextToSoundResultsTextToSoundResultsPost($run_ids_request_payload, $run_id, $traceparent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextToAudioApi->getTextToSoundResultsTextToSoundResultsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_ids_request_payload** | [**\Camb.ai\Model\RunIDsRequestPayload**](../Model/RunIDsRequestPayload.md)|  | |
| **run_id** | **int**|  | [optional] |
| **traceparent** | **string**|  | [optional] |

### Return type

[**array<string,\Camb.ai\Model\TextToAudioResult>**](../Model/TextToAudioResult.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
