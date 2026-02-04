# Camb.ai\AudioSeparationApi



All URIs are relative to https://client.camb.ai/apis, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAudioSeparationAudioSeparationPost()**](AudioSeparationApi.md#createAudioSeparationAudioSeparationPost) | **POST** /audio-separation | Create Audio Separation |
| [**getAudioSeparationRunInfoAudioSeparationResultRunIdGet()**](AudioSeparationApi.md#getAudioSeparationRunInfoAudioSeparationResultRunIdGet) | **GET** /audio-separation-result/{run_id} | Get Audio Separation Run Info |
| [**getAudioSeparationRunsResultsAudioSeparationResultsPost()**](AudioSeparationApi.md#getAudioSeparationRunsResultsAudioSeparationResultsPost) | **POST** /audio-separation-results | Get Audio Separation Runs Results |
| [**getAudioSeparationStatusAudioSeparationTaskIdGet()**](AudioSeparationApi.md#getAudioSeparationStatusAudioSeparationTaskIdGet) | **GET** /audio-separation/{task_id} | Get Audio Separation Status |


## `createAudioSeparationAudioSeparationPost()`

```php
createAudioSeparationAudioSeparationPost($run_id, $traceparent, $media_file, $project_name, $project_description, $folder_id): \Camb.ai\Model\OrchestratorPipelineCallResult
```

Create Audio Separation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\AudioSeparationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int
$traceparent = 'traceparent_example'; // string
$media_file = '/path/to/file.txt'; // \SplFileObject
$project_name = 'project_name_example'; // string
$project_description = 'project_description_example'; // string
$folder_id = 56; // int

try {
    $result = $apiInstance->createAudioSeparationAudioSeparationPost($run_id, $traceparent, $media_file, $project_name, $project_description, $folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudioSeparationApi->createAudioSeparationAudioSeparationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | [optional] |
| **traceparent** | **string**|  | [optional] |
| **media_file** | **\SplFileObject****\SplFileObject**|  | [optional] |
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

## `getAudioSeparationRunInfoAudioSeparationResultRunIdGet()`

```php
getAudioSeparationRunInfoAudioSeparationResultRunIdGet($run_id): \Camb.ai\Model\GetAudioSeparationResultOut
```

Get Audio Separation Run Info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\AudioSeparationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int

try {
    $result = $apiInstance->getAudioSeparationRunInfoAudioSeparationResultRunIdGet($run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudioSeparationApi->getAudioSeparationRunInfoAudioSeparationResultRunIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | |

### Return type

[**\Camb.ai\Model\GetAudioSeparationResultOut**](../Model/GetAudioSeparationResultOut.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAudioSeparationRunsResultsAudioSeparationResultsPost()`

```php
getAudioSeparationRunsResultsAudioSeparationResultsPost($run_ids_request_payload, $run_id, $traceparent): array<string,\Camb.ai\Model\GetAudioSeparationResultOut>
```

Get Audio Separation Runs Results

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\AudioSeparationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_ids_request_payload = new \Camb.ai\Model\RunIDsRequestPayload(); // \Camb.ai\Model\RunIDsRequestPayload
$run_id = 56; // int
$traceparent = 'traceparent_example'; // string

try {
    $result = $apiInstance->getAudioSeparationRunsResultsAudioSeparationResultsPost($run_ids_request_payload, $run_id, $traceparent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudioSeparationApi->getAudioSeparationRunsResultsAudioSeparationResultsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_ids_request_payload** | [**\Camb.ai\Model\RunIDsRequestPayload**](../Model/RunIDsRequestPayload.md)|  | |
| **run_id** | **int**|  | [optional] |
| **traceparent** | **string**|  | [optional] |

### Return type

[**array<string,\Camb.ai\Model\GetAudioSeparationResultOut>**](../Model/GetAudioSeparationResultOut.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAudioSeparationStatusAudioSeparationTaskIdGet()`

```php
getAudioSeparationStatusAudioSeparationTaskIdGet($task_id, $run_id): \Camb.ai\Model\OrchestratorPipelineResult
```

Get Audio Separation Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\AudioSeparationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string
$run_id = 56; // int

try {
    $result = $apiInstance->getAudioSeparationStatusAudioSeparationTaskIdGet($task_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudioSeparationApi->getAudioSeparationStatusAudioSeparationTaskIdGet: ', $e->getMessage(), PHP_EOL;
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
