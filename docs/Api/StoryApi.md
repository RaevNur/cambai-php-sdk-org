# Camb.ai\StoryApi



All URIs are relative to https://client.camb.ai/apis, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createStoryStoryPost()**](StoryApi.md#createStoryStoryPost) | **POST** /story | Create Story |
| [**getStoriesRunsResultsStoriesResultsPost()**](StoryApi.md#getStoriesRunsResultsStoriesResultsPost) | **POST** /stories-results | Get Stories Runs Results |
| [**getStoryRunInfoStoryResultRunIdGet()**](StoryApi.md#getStoryRunInfoStoryResultRunIdGet) | **GET** /story-result/{run_id} | Get Story Run Info |
| [**getStoryStatusStoryTaskIdGet()**](StoryApi.md#getStoryStatusStoryTaskIdGet) | **GET** /story/{task_id} | Get Story Status |
| [**setupStoryStorySetupPost()**](StoryApi.md#setupStoryStorySetupPost) | **POST** /story-setup | Setup Story |


## `createStoryStoryPost()`

```php
createStoryStoryPost($file, $source_language, $run_id, $title, $description, $narrator_voice_id, $folder_id, $chosen_dictionaries): \Camb.ai\Model\ResponseCreateStoryStoryPost
```

Create Story

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\StoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject | Text File or Word Document (Docx) for Creating a Story.
$source_language = new \Camb.ai\Model\Languages(); // \Camb.ai\Model\Languages
$run_id = 56; // int
$title = 'title_example'; // string
$description = 'description_example'; // string
$narrator_voice_id = 56; // int
$folder_id = 56; // int
$chosen_dictionaries = array(56); // int[]

try {
    $result = $apiInstance->createStoryStoryPost($file, $source_language, $run_id, $title, $description, $narrator_voice_id, $folder_id, $chosen_dictionaries);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoryApi->createStoryStoryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| Text File or Word Document (Docx) for Creating a Story. | |
| **source_language** | [**\Camb.ai\Model\Languages**](../Model/Languages.md)|  | |
| **run_id** | **int**|  | [optional] |
| **title** | **string**|  | [optional] |
| **description** | **string**|  | [optional] |
| **narrator_voice_id** | **int**|  | [optional] |
| **folder_id** | **int**|  | [optional] |
| **chosen_dictionaries** | [**int[]**](../Model/int.md)|  | [optional] |

### Return type

[**\Camb.ai\Model\ResponseCreateStoryStoryPost**](../Model/ResponseCreateStoryStoryPost.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStoriesRunsResultsStoriesResultsPost()`

```php
getStoriesRunsResultsStoriesResultsPost($run_ids_request_payload, $run_id, $traceparent): array<string,array<string,mixed>>
```

Get Stories Runs Results

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\StoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_ids_request_payload = new \Camb.ai\Model\RunIDsRequestPayload(); // \Camb.ai\Model\RunIDsRequestPayload
$run_id = 56; // int
$traceparent = 'traceparent_example'; // string

try {
    $result = $apiInstance->getStoriesRunsResultsStoriesResultsPost($run_ids_request_payload, $run_id, $traceparent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoryApi->getStoriesRunsResultsStoriesResultsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_ids_request_payload** | [**\Camb.ai\Model\RunIDsRequestPayload**](../Model/RunIDsRequestPayload.md)|  | |
| **run_id** | **int**|  | [optional] |
| **traceparent** | **string**|  | [optional] |

### Return type

**array<string,array<string,mixed>>**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStoryRunInfoStoryResultRunIdGet()`

```php
getStoryRunInfoStoryResultRunIdGet($run_id, $include_transcript): array<string,mixed>
```

Get Story Run Info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\StoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int
$include_transcript = True; // bool | Whether to include the transcription in the response for fetching the result of a Stories run.

try {
    $result = $apiInstance->getStoryRunInfoStoryResultRunIdGet($run_id, $include_transcript);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoryApi->getStoryRunInfoStoryResultRunIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | |
| **include_transcript** | **bool**| Whether to include the transcription in the response for fetching the result of a Stories run. | [optional] |

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

## `getStoryStatusStoryTaskIdGet()`

```php
getStoryStatusStoryTaskIdGet($task_id, $run_id): \Camb.ai\Model\OrchestratorPipelineResult
```

Get Story Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\StoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string
$run_id = 56; // int

try {
    $result = $apiInstance->getStoryStatusStoryTaskIdGet($task_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoryApi->getStoryStatusStoryTaskIdGet: ', $e->getMessage(), PHP_EOL;
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

## `setupStoryStorySetupPost()`

```php
setupStoryStorySetupPost($file, $source_language, $run_id, $title, $description, $narrator_voice_id, $folder_id, $chosen_dictionaries): \Camb.ai\Model\ResponseSetupStoryStorySetupPost
```

Setup Story

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\StoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject | Text File or Word Document (Docx) for Creating a Story.
$source_language = new \Camb.ai\Model\Languages(); // \Camb.ai\Model\Languages
$run_id = 56; // int
$title = 'title_example'; // string
$description = 'description_example'; // string
$narrator_voice_id = 56; // int
$folder_id = 56; // int
$chosen_dictionaries = array(56); // int[]

try {
    $result = $apiInstance->setupStoryStorySetupPost($file, $source_language, $run_id, $title, $description, $narrator_voice_id, $folder_id, $chosen_dictionaries);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoryApi->setupStoryStorySetupPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| Text File or Word Document (Docx) for Creating a Story. | |
| **source_language** | [**\Camb.ai\Model\Languages**](../Model/Languages.md)|  | |
| **run_id** | **int**|  | [optional] |
| **title** | **string**|  | [optional] |
| **description** | **string**|  | [optional] |
| **narrator_voice_id** | **int**|  | [optional] |
| **folder_id** | **int**|  | [optional] |
| **chosen_dictionaries** | [**int[]**](../Model/int.md)|  | [optional] |

### Return type

[**\Camb.ai\Model\ResponseSetupStoryStorySetupPost**](../Model/ResponseSetupStoryStorySetupPost.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
