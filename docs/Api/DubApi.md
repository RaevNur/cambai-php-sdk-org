# Camb.ai\DubApi



All URIs are relative to https://client.camb.ai/apis, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**endToEndDubbingDubPost()**](DubApi.md#endToEndDubbingDubPost) | **POST** /dub | End To End Dubbing |
| [**getDubbedOutputInAltFormatDubAltFormatRunIdLanguagePost()**](DubApi.md#getDubbedOutputInAltFormatDubAltFormatRunIdLanguagePost) | **POST** /dub-alt-format/{run_id}/{language} | Get Dubbed Output In Alt Format |
| [**getDubbedOutputInAltFormatStatusDubAltFormatTaskIdGet()**](DubApi.md#getDubbedOutputInAltFormatStatusDubAltFormatTaskIdGet) | **GET** /dub-alt-format/{task_id} | Get Dubbed Output In Alt Format Status |
| [**getDubbedRunInfoDubResultRunIdGet()**](DubApi.md#getDubbedRunInfoDubResultRunIdGet) | **GET** /dub-result/{run_id} | Get Dubbed Run Info |
| [**getDubbedRunTranscriptTranscriptRunIdLanguageGet()**](DubApi.md#getDubbedRunTranscriptTranscriptRunIdLanguageGet) | **GET** /transcript/{run_id}/{language} | Get Dubbed Run Transcript |
| [**getDubbingRunsResultsDubbingResultsPost()**](DubApi.md#getDubbingRunsResultsDubbingResultsPost) | **POST** /dubbing-results | Get Dubbing Runs Results |
| [**getEndToEndDubbingStatusDubTaskIdGet()**](DubApi.md#getEndToEndDubbingStatusDubTaskIdGet) | **GET** /dub/{task_id} | Get End To End Dubbing Status |
| [**pollDiscordDubTaskDiscordDubTaskIdGet()**](DubApi.md#pollDiscordDubTaskDiscordDubTaskIdGet) | **GET** /discord/dub/{task_id} | Poll Discord Dub Task |
| [**pollTwitterDubTaskTwitterDubTaskIdGet()**](DubApi.md#pollTwitterDubTaskTwitterDubTaskIdGet) | **GET** /twitter/dub/{task_id} | Poll Twitter Dub Task |


## `endToEndDubbingDubPost()`

```php
endToEndDubbingDubPost($end_to_end_dubbing_request_payload, $run_id): \Camb.ai\Model\OrchestratorPipelineCallResult
```

End To End Dubbing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\DubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$end_to_end_dubbing_request_payload = new \Camb.ai\Model\EndToEndDubbingRequestPayload(); // \Camb.ai\Model\EndToEndDubbingRequestPayload
$run_id = 56; // int

try {
    $result = $apiInstance->endToEndDubbingDubPost($end_to_end_dubbing_request_payload, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DubApi->endToEndDubbingDubPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **end_to_end_dubbing_request_payload** | [**\Camb.ai\Model\EndToEndDubbingRequestPayload**](../Model/EndToEndDubbingRequestPayload.md)|  | |
| **run_id** | **int**|  | [optional] |

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

## `getDubbedOutputInAltFormatDubAltFormatRunIdLanguagePost()`

```php
getDubbedOutputInAltFormatDubAltFormatRunIdLanguagePost($run_id, $language, $dubbed_output_in_alt_format_request_payload): \Camb.ai\Model\ResponseGetDubbedOutputInAltFormatDubAltFormatRunIdLanguagePost
```

Get Dubbed Output In Alt Format

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\DubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int
$language = new \Camb.ai\Model\\Camb.ai\Model\Languages(); // \Camb.ai\Model\Languages
$dubbed_output_in_alt_format_request_payload = new \Camb.ai\Model\DubbedOutputInAltFormatRequestPayload(); // \Camb.ai\Model\DubbedOutputInAltFormatRequestPayload

try {
    $result = $apiInstance->getDubbedOutputInAltFormatDubAltFormatRunIdLanguagePost($run_id, $language, $dubbed_output_in_alt_format_request_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DubApi->getDubbedOutputInAltFormatDubAltFormatRunIdLanguagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | |
| **language** | [**\Camb.ai\Model\Languages**](../Model/.md)|  | |
| **dubbed_output_in_alt_format_request_payload** | [**\Camb.ai\Model\DubbedOutputInAltFormatRequestPayload**](../Model/DubbedOutputInAltFormatRequestPayload.md)|  | |

### Return type

[**\Camb.ai\Model\ResponseGetDubbedOutputInAltFormatDubAltFormatRunIdLanguagePost**](../Model/ResponseGetDubbedOutputInAltFormatDubAltFormatRunIdLanguagePost.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDubbedOutputInAltFormatStatusDubAltFormatTaskIdGet()`

```php
getDubbedOutputInAltFormatStatusDubAltFormatTaskIdGet($task_id, $run_id): \Camb.ai\Model\OrchestratorPipelineResult
```

Get Dubbed Output In Alt Format Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\DubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string
$run_id = 56; // int

try {
    $result = $apiInstance->getDubbedOutputInAltFormatStatusDubAltFormatTaskIdGet($task_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DubApi->getDubbedOutputInAltFormatStatusDubAltFormatTaskIdGet: ', $e->getMessage(), PHP_EOL;
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

## `getDubbedRunInfoDubResultRunIdGet()`

```php
getDubbedRunInfoDubResultRunIdGet($run_id): \Camb.ai\Model\ResponseGetDubbedRunInfoDubResultRunIdGet
```

Get Dubbed Run Info

NOTE: This endpoint should be called only by the users to get values for their runs via API. Further we need to validate if the user has access to the run_id, otherwise we should not return the output urls.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\DubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int

try {
    $result = $apiInstance->getDubbedRunInfoDubResultRunIdGet($run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DubApi->getDubbedRunInfoDubResultRunIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | |

### Return type

[**\Camb.ai\Model\ResponseGetDubbedRunInfoDubResultRunIdGet**](../Model/ResponseGetDubbedRunInfoDubResultRunIdGet.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDubbedRunTranscriptTranscriptRunIdLanguageGet()`

```php
getDubbedRunTranscriptTranscriptRunIdLanguageGet($run_id, $language, $format_type, $data_type): array<string,string>
```

Get Dubbed Run Transcript

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\DubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int
$language = new \Camb.ai\Model\\Camb.ai\Model\Languages(); // \Camb.ai\Model\Languages
$format_type = new \Camb.ai\Model\\CambAiModelTranscriptFileFormat(); // \CambAiModelTranscriptFileFormat | Format to use for the transcription. Either `srt`, `vtt` or `txt`. Defaults to `txt`.
$data_type = new \Camb.ai\Model\\CambAiModelTranscriptDataType(); // \CambAiModelTranscriptDataType | Data type for the transcription being returned. Returns the raw data of the transcription or a presigned url for the file that holds the transcription data.

try {
    $result = $apiInstance->getDubbedRunTranscriptTranscriptRunIdLanguageGet($run_id, $language, $format_type, $data_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DubApi->getDubbedRunTranscriptTranscriptRunIdLanguageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | |
| **language** | [**\Camb.ai\Model\Languages**](../Model/.md)|  | |
| **format_type** | [**\CambAiModelTranscriptFileFormat**](../Model/.md)| Format to use for the transcription. Either &#x60;srt&#x60;, &#x60;vtt&#x60; or &#x60;txt&#x60;. Defaults to &#x60;txt&#x60;. | [optional] |
| **data_type** | [**\CambAiModelTranscriptDataType**](../Model/.md)| Data type for the transcription being returned. Returns the raw data of the transcription or a presigned url for the file that holds the transcription data. | [optional] |

### Return type

**array<string,string>**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDubbingRunsResultsDubbingResultsPost()`

```php
getDubbingRunsResultsDubbingResultsPost($run_ids_request_payload, $run_id, $traceparent): array<string,\Camb.ai\Model\ResponseGetDubbingRunsResultsDubbingResultsPostValue>
```

Get Dubbing Runs Results

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\DubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_ids_request_payload = new \Camb.ai\Model\RunIDsRequestPayload(); // \Camb.ai\Model\RunIDsRequestPayload
$run_id = 56; // int
$traceparent = 'traceparent_example'; // string

try {
    $result = $apiInstance->getDubbingRunsResultsDubbingResultsPost($run_ids_request_payload, $run_id, $traceparent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DubApi->getDubbingRunsResultsDubbingResultsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_ids_request_payload** | [**\Camb.ai\Model\RunIDsRequestPayload**](../Model/RunIDsRequestPayload.md)|  | |
| **run_id** | **int**|  | [optional] |
| **traceparent** | **string**|  | [optional] |

### Return type

[**array<string,\Camb.ai\Model\ResponseGetDubbingRunsResultsDubbingResultsPostValue>**](../Model/ResponseGetDubbingRunsResultsDubbingResultsPostValue.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEndToEndDubbingStatusDubTaskIdGet()`

```php
getEndToEndDubbingStatusDubTaskIdGet($task_id, $run_id): \Camb.ai\Model\OrchestratorPipelineResult
```

Get End To End Dubbing Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\DubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string
$run_id = 56; // int

try {
    $result = $apiInstance->getEndToEndDubbingStatusDubTaskIdGet($task_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DubApi->getEndToEndDubbingStatusDubTaskIdGet: ', $e->getMessage(), PHP_EOL;
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

## `pollDiscordDubTaskDiscordDubTaskIdGet()`

```php
pollDiscordDubTaskDiscordDubTaskIdGet($task_id, $run_id): \Camb.ai\Model\OrchestratorPipelineResult
```

Poll Discord Dub Task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\DubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string
$run_id = 56; // int

try {
    $result = $apiInstance->pollDiscordDubTaskDiscordDubTaskIdGet($task_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DubApi->pollDiscordDubTaskDiscordDubTaskIdGet: ', $e->getMessage(), PHP_EOL;
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

## `pollTwitterDubTaskTwitterDubTaskIdGet()`

```php
pollTwitterDubTaskTwitterDubTaskIdGet($task_id, $run_id): \Camb.ai\Model\OrchestratorPipelineResult
```

Poll Twitter Dub Task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\DubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string
$run_id = 56; // int

try {
    $result = $apiInstance->pollTwitterDubTaskTwitterDubTaskIdGet($task_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DubApi->pollTwitterDubTaskTwitterDubTaskIdGet: ', $e->getMessage(), PHP_EOL;
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
