# Camb.ai\TranscriptionApi



All URIs are relative to https://client.camb.ai/apis, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTranscriptionTranscribePost()**](TranscriptionApi.md#createTranscriptionTranscribePost) | **POST** /transcribe | Create Transcription |
| [**createTranscriptionTranscribePost_0()**](TranscriptionApi.md#createTranscriptionTranscribePost_0) | **POST** /transcribe | Create Transcription |
| [**getTranscriptionResultTranscriptionResultRunIdGet()**](TranscriptionApi.md#getTranscriptionResultTranscriptionResultRunIdGet) | **GET** /transcription-result/{run_id} | Get Transcription Result |
| [**getTranscriptionResultTranscriptionResultRunIdGet_0()**](TranscriptionApi.md#getTranscriptionResultTranscriptionResultRunIdGet_0) | **GET** /transcription-result/{run_id} | Get Transcription Result |
| [**getTranscriptionResultsTranscriptionResultsPost()**](TranscriptionApi.md#getTranscriptionResultsTranscriptionResultsPost) | **POST** /transcription-results | Get Transcription Results |
| [**getTranscriptionResultsTranscriptionResultsPost_0()**](TranscriptionApi.md#getTranscriptionResultsTranscriptionResultsPost_0) | **POST** /transcription-results | Get Transcription Results |
| [**getTranscriptionTaskStatusTranscribeTaskIdGet()**](TranscriptionApi.md#getTranscriptionTaskStatusTranscribeTaskIdGet) | **GET** /transcribe/{task_id} | Get Transcription Task Status |
| [**getTranscriptionTaskStatusTranscribeTaskIdGet_0()**](TranscriptionApi.md#getTranscriptionTaskStatusTranscribeTaskIdGet_0) | **GET** /transcribe/{task_id} | Get Transcription Task Status |


## `createTranscriptionTranscribePost()`

```php
createTranscriptionTranscribePost($language, $run_id, $media_file, $media_url, $file, $audio_url, $project_name, $project_description, $folder_id): \Camb.ai\Model\OrchestratorPipelineCallResult
```

Create Transcription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TranscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = new \Camb.ai\Model\Languages(); // \Camb.ai\Model\Languages | Signed URL to audio file for transcription
$run_id = 56; // int
$media_file = '/path/to/file.txt'; // \SplFileObject
$media_url = 'media_url_example'; // string
$file = '/path/to/file.txt'; // \SplFileObject
$audio_url = 'audio_url_example'; // string
$project_name = 'project_name_example'; // string
$project_description = 'project_description_example'; // string
$folder_id = 56; // int

try {
    $result = $apiInstance->createTranscriptionTranscribePost($language, $run_id, $media_file, $media_url, $file, $audio_url, $project_name, $project_description, $folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranscriptionApi->createTranscriptionTranscribePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | [**\Camb.ai\Model\Languages**](../Model/Languages.md)| Signed URL to audio file for transcription | |
| **run_id** | **int**|  | [optional] |
| **media_file** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **media_url** | **string**|  | [optional] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **audio_url** | **string**|  | [optional] |
| **project_name** | **string**|  | [optional] |
| **project_description** | **string**|  | [optional] |
| **folder_id** | **int**|  | [optional] |

### Return type

[**\Camb.ai\Model\OrchestratorPipelineCallResult**](../Model/OrchestratorPipelineCallResult.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTranscriptionTranscribePost_0()`

```php
createTranscriptionTranscribePost_0($language, $run_id, $media_file, $media_url, $file, $audio_url, $project_name, $project_description, $folder_id): \Camb.ai\Model\OrchestratorPipelineCallResult
```

Create Transcription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TranscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = new \Camb.ai\Model\Languages(); // \Camb.ai\Model\Languages | Signed URL to audio file for transcription
$run_id = 56; // int
$media_file = '/path/to/file.txt'; // \SplFileObject
$media_url = 'media_url_example'; // string
$file = '/path/to/file.txt'; // \SplFileObject
$audio_url = 'audio_url_example'; // string
$project_name = 'project_name_example'; // string
$project_description = 'project_description_example'; // string
$folder_id = 56; // int

try {
    $result = $apiInstance->createTranscriptionTranscribePost_0($language, $run_id, $media_file, $media_url, $file, $audio_url, $project_name, $project_description, $folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranscriptionApi->createTranscriptionTranscribePost_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | [**\Camb.ai\Model\Languages**](../Model/Languages.md)| Signed URL to audio file for transcription | |
| **run_id** | **int**|  | [optional] |
| **media_file** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **media_url** | **string**|  | [optional] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **audio_url** | **string**|  | [optional] |
| **project_name** | **string**|  | [optional] |
| **project_description** | **string**|  | [optional] |
| **folder_id** | **int**|  | [optional] |

### Return type

[**\Camb.ai\Model\OrchestratorPipelineCallResult**](../Model/OrchestratorPipelineCallResult.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTranscriptionResultTranscriptionResultRunIdGet()`

```php
getTranscriptionResultTranscriptionResultRunIdGet($run_id, $word_level_timestamps): \Camb.ai\Model\TranscriptionResult
```

Get Transcription Result

NOTE: This endpoint should be called only by the users to get values for their runs via API. Further we need to validate if the user has access to the run_id, otherwise we should not return the output urls.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TranscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int
$word_level_timestamps = True; // bool

try {
    $result = $apiInstance->getTranscriptionResultTranscriptionResultRunIdGet($run_id, $word_level_timestamps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranscriptionApi->getTranscriptionResultTranscriptionResultRunIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | |
| **word_level_timestamps** | **bool**|  | [optional] |

### Return type

[**\Camb.ai\Model\TranscriptionResult**](../Model/TranscriptionResult.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTranscriptionResultTranscriptionResultRunIdGet_0()`

```php
getTranscriptionResultTranscriptionResultRunIdGet_0($run_id, $word_level_timestamps): \Camb.ai\Model\TranscriptionResult
```

Get Transcription Result

NOTE: This endpoint should be called only by the users to get values for their runs via API. Further we need to validate if the user has access to the run_id, otherwise we should not return the output urls.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TranscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int
$word_level_timestamps = True; // bool

try {
    $result = $apiInstance->getTranscriptionResultTranscriptionResultRunIdGet_0($run_id, $word_level_timestamps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranscriptionApi->getTranscriptionResultTranscriptionResultRunIdGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | |
| **word_level_timestamps** | **bool**|  | [optional] |

### Return type

[**\Camb.ai\Model\TranscriptionResult**](../Model/TranscriptionResult.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTranscriptionResultsTranscriptionResultsPost()`

```php
getTranscriptionResultsTranscriptionResultsPost($run_ids_request_payload, $run_id, $traceparent): array<string,\Camb.ai\Model\TranscriptionResult>
```

Get Transcription Results

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TranscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_ids_request_payload = new \Camb.ai\Model\RunIDsRequestPayload(); // \Camb.ai\Model\RunIDsRequestPayload
$run_id = 56; // int
$traceparent = 'traceparent_example'; // string

try {
    $result = $apiInstance->getTranscriptionResultsTranscriptionResultsPost($run_ids_request_payload, $run_id, $traceparent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranscriptionApi->getTranscriptionResultsTranscriptionResultsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_ids_request_payload** | [**\Camb.ai\Model\RunIDsRequestPayload**](../Model/RunIDsRequestPayload.md)|  | |
| **run_id** | **int**|  | [optional] |
| **traceparent** | **string**|  | [optional] |

### Return type

[**array<string,\Camb.ai\Model\TranscriptionResult>**](../Model/TranscriptionResult.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTranscriptionResultsTranscriptionResultsPost_0()`

```php
getTranscriptionResultsTranscriptionResultsPost_0($run_ids_request_payload, $run_id, $traceparent): array<string,\Camb.ai\Model\TranscriptionResult>
```

Get Transcription Results

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TranscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_ids_request_payload = new \Camb.ai\Model\RunIDsRequestPayload(); // \Camb.ai\Model\RunIDsRequestPayload
$run_id = 56; // int
$traceparent = 'traceparent_example'; // string

try {
    $result = $apiInstance->getTranscriptionResultsTranscriptionResultsPost_0($run_ids_request_payload, $run_id, $traceparent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranscriptionApi->getTranscriptionResultsTranscriptionResultsPost_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_ids_request_payload** | [**\Camb.ai\Model\RunIDsRequestPayload**](../Model/RunIDsRequestPayload.md)|  | |
| **run_id** | **int**|  | [optional] |
| **traceparent** | **string**|  | [optional] |

### Return type

[**array<string,\Camb.ai\Model\TranscriptionResult>**](../Model/TranscriptionResult.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTranscriptionTaskStatusTranscribeTaskIdGet()`

```php
getTranscriptionTaskStatusTranscribeTaskIdGet($task_id, $run_id): \Camb.ai\Model\OrchestratorPipelineResult
```

Get Transcription Task Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TranscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string
$run_id = 56; // int

try {
    $result = $apiInstance->getTranscriptionTaskStatusTranscribeTaskIdGet($task_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranscriptionApi->getTranscriptionTaskStatusTranscribeTaskIdGet: ', $e->getMessage(), PHP_EOL;
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

## `getTranscriptionTaskStatusTranscribeTaskIdGet_0()`

```php
getTranscriptionTaskStatusTranscribeTaskIdGet_0($task_id, $run_id): \Camb.ai\Model\OrchestratorPipelineResult
```

Get Transcription Task Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TranscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string
$run_id = 56; // int

try {
    $result = $apiInstance->getTranscriptionTaskStatusTranscribeTaskIdGet_0($task_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranscriptionApi->getTranscriptionTaskStatusTranscribeTaskIdGet_0: ', $e->getMessage(), PHP_EOL;
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
