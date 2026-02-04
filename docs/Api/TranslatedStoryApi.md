# Camb.ai\TranslatedStoryApi



All URIs are relative to https://client.camb.ai/apis, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTranslationForExistingStoryTranslatedStoryRunIdPost()**](TranslatedStoryApi.md#createTranslationForExistingStoryTranslatedStoryRunIdPost) | **POST** /translated-story/{run_id} | Create Translation For Existing Story |
| [**getTranslatedStoryRunInfoTranslatedStoryResultRunIdTargetLanguageGet()**](TranslatedStoryApi.md#getTranslatedStoryRunInfoTranslatedStoryResultRunIdTargetLanguageGet) | **GET** /translated-story-result/{run_id}/{target_language} | Get Translated Story Run Info |
| [**getTranslatedStoryStatusTranslatedStoryTaskIdGet()**](TranslatedStoryApi.md#getTranslatedStoryStatusTranslatedStoryTaskIdGet) | **GET** /translated-story/{task_id} | Get Translated Story Status |


## `createTranslationForExistingStoryTranslatedStoryRunIdPost()`

```php
createTranslationForExistingStoryTranslatedStoryRunIdPost($run_id, $create_translation_for_existing_story_request_payload): \Camb.ai\Model\AddTargetLanguageOut
```

Create Translation For Existing Story

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TranslatedStoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int
$create_translation_for_existing_story_request_payload = new \Camb.ai\Model\CreateTranslationForExistingStoryRequestPayload(); // \Camb.ai\Model\CreateTranslationForExistingStoryRequestPayload

try {
    $result = $apiInstance->createTranslationForExistingStoryTranslatedStoryRunIdPost($run_id, $create_translation_for_existing_story_request_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslatedStoryApi->createTranslationForExistingStoryTranslatedStoryRunIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | |
| **create_translation_for_existing_story_request_payload** | [**\Camb.ai\Model\CreateTranslationForExistingStoryRequestPayload**](../Model/CreateTranslationForExistingStoryRequestPayload.md)|  | |

### Return type

[**\Camb.ai\Model\AddTargetLanguageOut**](../Model/AddTargetLanguageOut.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTranslatedStoryRunInfoTranslatedStoryResultRunIdTargetLanguageGet()`

```php
getTranslatedStoryRunInfoTranslatedStoryResultRunIdTargetLanguageGet($run_id, $target_language, $include_transcript): array<string,mixed>
```

Get Translated Story Run Info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TranslatedStoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int
$target_language = new \Camb.ai\Model\\Camb.ai\Model\Languages(); // \Camb.ai\Model\Languages
$include_transcript = True; // bool | Whether to include the transcription in the response for fetching the result of a Stories Translation run.

try {
    $result = $apiInstance->getTranslatedStoryRunInfoTranslatedStoryResultRunIdTargetLanguageGet($run_id, $target_language, $include_transcript);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslatedStoryApi->getTranslatedStoryRunInfoTranslatedStoryResultRunIdTargetLanguageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | |
| **target_language** | [**\Camb.ai\Model\Languages**](../Model/.md)|  | |
| **include_transcript** | **bool**| Whether to include the transcription in the response for fetching the result of a Stories Translation run. | [optional] |

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

## `getTranslatedStoryStatusTranslatedStoryTaskIdGet()`

```php
getTranslatedStoryStatusTranslatedStoryTaskIdGet($task_id, $run_id): \Camb.ai\Model\OrchestratorPipelineResult
```

Get Translated Story Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TranslatedStoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string
$run_id = 56; // int

try {
    $result = $apiInstance->getTranslatedStoryStatusTranslatedStoryTaskIdGet($task_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslatedStoryApi->getTranslatedStoryStatusTranslatedStoryTaskIdGet: ', $e->getMessage(), PHP_EOL;
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
