# Camb.ai\TranslationApi



All URIs are relative to https://client.camb.ai/apis, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTranslationTranslatePost()**](TranslationApi.md#createTranslationTranslatePost) | **POST** /translate | Create Translation |
| [**createTranslationTranslatePost_0()**](TranslationApi.md#createTranslationTranslatePost_0) | **POST** /translate | Create Translation |
| [**getTranslationResultTranslationResultRunIdGet()**](TranslationApi.md#getTranslationResultTranslationResultRunIdGet) | **GET** /translation-result/{run_id} | Get Translation Result |
| [**getTranslationResultTranslationResultRunIdGet_0()**](TranslationApi.md#getTranslationResultTranslationResultRunIdGet_0) | **GET** /translation-result/{run_id} | Get Translation Result |
| [**getTranslationResultsTranslationResultsPost()**](TranslationApi.md#getTranslationResultsTranslationResultsPost) | **POST** /translation-results | Get Translation Results |
| [**getTranslationResultsTranslationResultsPost_0()**](TranslationApi.md#getTranslationResultsTranslationResultsPost_0) | **POST** /translation-results | Get Translation Results |
| [**getTranslationTaskStatusTranslateTaskIdGet()**](TranslationApi.md#getTranslationTaskStatusTranslateTaskIdGet) | **GET** /translate/{task_id} | Get Translation Task Status |
| [**getTranslationTaskStatusTranslateTaskIdGet_0()**](TranslationApi.md#getTranslationTaskStatusTranslateTaskIdGet_0) | **GET** /translate/{task_id} | Get Translation Task Status |
| [**translationStreamTranslationStreamPost()**](TranslationApi.md#translationStreamTranslationStreamPost) | **POST** /translation/stream | Translation Stream |
| [**translationStreamTranslationStreamPost_0()**](TranslationApi.md#translationStreamTranslationStreamPost_0) | **POST** /translation/stream | Translation Stream |


## `createTranslationTranslatePost()`

```php
createTranslationTranslatePost($create_translation_request_payload, $run_id): mixed
```

Create Translation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_translation_request_payload = new \Camb.ai\Model\CreateTranslationRequestPayload(); // \Camb.ai\Model\CreateTranslationRequestPayload
$run_id = 56; // int

try {
    $result = $apiInstance->createTranslationTranslatePost($create_translation_request_payload, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->createTranslationTranslatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_translation_request_payload** | [**\Camb.ai\Model\CreateTranslationRequestPayload**](../Model/CreateTranslationRequestPayload.md)|  | |
| **run_id** | **int**|  | [optional] |

### Return type

**mixed**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTranslationTranslatePost_0()`

```php
createTranslationTranslatePost_0($create_translation_request_payload, $run_id): mixed
```

Create Translation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_translation_request_payload = new \Camb.ai\Model\CreateTranslationRequestPayload(); // \Camb.ai\Model\CreateTranslationRequestPayload
$run_id = 56; // int

try {
    $result = $apiInstance->createTranslationTranslatePost_0($create_translation_request_payload, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->createTranslationTranslatePost_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_translation_request_payload** | [**\Camb.ai\Model\CreateTranslationRequestPayload**](../Model/CreateTranslationRequestPayload.md)|  | |
| **run_id** | **int**|  | [optional] |

### Return type

**mixed**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTranslationResultTranslationResultRunIdGet()`

```php
getTranslationResultTranslationResultRunIdGet($run_id, $traceparent): \Camb.ai\Model\TranslationResult
```

Get Translation Result

NOTE: This endpoint should be called only by the users to get values for their runs via API. Further we need to validate if the user has access to the run_id, otherwise we should not return the output urls.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int
$traceparent = 'traceparent_example'; // string

try {
    $result = $apiInstance->getTranslationResultTranslationResultRunIdGet($run_id, $traceparent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->getTranslationResultTranslationResultRunIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | |
| **traceparent** | **string**|  | [optional] |

### Return type

[**\Camb.ai\Model\TranslationResult**](../Model/TranslationResult.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTranslationResultTranslationResultRunIdGet_0()`

```php
getTranslationResultTranslationResultRunIdGet_0($run_id, $traceparent): \Camb.ai\Model\TranslationResult
```

Get Translation Result

NOTE: This endpoint should be called only by the users to get values for their runs via API. Further we need to validate if the user has access to the run_id, otherwise we should not return the output urls.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int
$traceparent = 'traceparent_example'; // string

try {
    $result = $apiInstance->getTranslationResultTranslationResultRunIdGet_0($run_id, $traceparent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->getTranslationResultTranslationResultRunIdGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | |
| **traceparent** | **string**|  | [optional] |

### Return type

[**\Camb.ai\Model\TranslationResult**](../Model/TranslationResult.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTranslationResultsTranslationResultsPost()`

```php
getTranslationResultsTranslationResultsPost($run_ids_request_payload, $run_id, $traceparent): array<string,\Camb.ai\Model\TranslationResult>
```

Get Translation Results

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_ids_request_payload = new \Camb.ai\Model\RunIDsRequestPayload(); // \Camb.ai\Model\RunIDsRequestPayload
$run_id = 56; // int
$traceparent = 'traceparent_example'; // string

try {
    $result = $apiInstance->getTranslationResultsTranslationResultsPost($run_ids_request_payload, $run_id, $traceparent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->getTranslationResultsTranslationResultsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_ids_request_payload** | [**\Camb.ai\Model\RunIDsRequestPayload**](../Model/RunIDsRequestPayload.md)|  | |
| **run_id** | **int**|  | [optional] |
| **traceparent** | **string**|  | [optional] |

### Return type

[**array<string,\Camb.ai\Model\TranslationResult>**](../Model/TranslationResult.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTranslationResultsTranslationResultsPost_0()`

```php
getTranslationResultsTranslationResultsPost_0($run_ids_request_payload, $run_id, $traceparent): array<string,\Camb.ai\Model\TranslationResult>
```

Get Translation Results

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_ids_request_payload = new \Camb.ai\Model\RunIDsRequestPayload(); // \Camb.ai\Model\RunIDsRequestPayload
$run_id = 56; // int
$traceparent = 'traceparent_example'; // string

try {
    $result = $apiInstance->getTranslationResultsTranslationResultsPost_0($run_ids_request_payload, $run_id, $traceparent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->getTranslationResultsTranslationResultsPost_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_ids_request_payload** | [**\Camb.ai\Model\RunIDsRequestPayload**](../Model/RunIDsRequestPayload.md)|  | |
| **run_id** | **int**|  | [optional] |
| **traceparent** | **string**|  | [optional] |

### Return type

[**array<string,\Camb.ai\Model\TranslationResult>**](../Model/TranslationResult.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTranslationTaskStatusTranslateTaskIdGet()`

```php
getTranslationTaskStatusTranslateTaskIdGet($task_id, $run_id): \Camb.ai\Model\OrchestratorPipelineResult
```

Get Translation Task Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string
$run_id = 56; // int

try {
    $result = $apiInstance->getTranslationTaskStatusTranslateTaskIdGet($task_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->getTranslationTaskStatusTranslateTaskIdGet: ', $e->getMessage(), PHP_EOL;
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

## `getTranslationTaskStatusTranslateTaskIdGet_0()`

```php
getTranslationTaskStatusTranslateTaskIdGet_0($task_id, $run_id): \Camb.ai\Model\OrchestratorPipelineResult
```

Get Translation Task Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string
$run_id = 56; // int

try {
    $result = $apiInstance->getTranslationTaskStatusTranslateTaskIdGet_0($task_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->getTranslationTaskStatusTranslateTaskIdGet_0: ', $e->getMessage(), PHP_EOL;
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

## `translationStreamTranslationStreamPost()`

```php
translationStreamTranslationStreamPost($create_translation_stream_request_payload, $traceparent): mixed
```

Translation Stream

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_translation_stream_request_payload = new \Camb.ai\Model\CreateTranslationStreamRequestPayload(); // \Camb.ai\Model\CreateTranslationStreamRequestPayload
$traceparent = 'traceparent_example'; // string

try {
    $result = $apiInstance->translationStreamTranslationStreamPost($create_translation_stream_request_payload, $traceparent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->translationStreamTranslationStreamPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_translation_stream_request_payload** | [**\Camb.ai\Model\CreateTranslationStreamRequestPayload**](../Model/CreateTranslationStreamRequestPayload.md)|  | |
| **traceparent** | **string**|  | [optional] |

### Return type

**mixed**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/event-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `translationStreamTranslationStreamPost_0()`

```php
translationStreamTranslationStreamPost_0($create_translation_stream_request_payload, $traceparent): mixed
```

Translation Stream

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_translation_stream_request_payload = new \Camb.ai\Model\CreateTranslationStreamRequestPayload(); // \Camb.ai\Model\CreateTranslationStreamRequestPayload
$traceparent = 'traceparent_example'; // string

try {
    $result = $apiInstance->translationStreamTranslationStreamPost_0($create_translation_stream_request_payload, $traceparent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->translationStreamTranslationStreamPost_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_translation_stream_request_payload** | [**\Camb.ai\Model\CreateTranslationStreamRequestPayload**](../Model/CreateTranslationStreamRequestPayload.md)|  | |
| **traceparent** | **string**|  | [optional] |

### Return type

**mixed**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/event-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
