# Camb.ai\ProjectSetupApi



All URIs are relative to https://client.camb.ai/apis, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProjectProjectSetupPost()**](ProjectSetupApi.md#createProjectProjectSetupPost) | **POST** /project-setup | Create Project |
| [**createProjectProjectSetupPost_0()**](ProjectSetupApi.md#createProjectProjectSetupPost_0) | **POST** /project-setup | Create Project |
| [**createProjectSetupTaskStatusProjectSetupTaskIdGet()**](ProjectSetupApi.md#createProjectSetupTaskStatusProjectSetupTaskIdGet) | **GET** /project-setup/{task_id} | Create Project Setup Task Status |
| [**createProjectSetupTaskStatusProjectSetupTaskIdGet_0()**](ProjectSetupApi.md#createProjectSetupTaskStatusProjectSetupTaskIdGet_0) | **GET** /project-setup/{task_id} | Create Project Setup Task Status |
| [**getProjectSetupResultProjectSetupResultRunIdGet()**](ProjectSetupApi.md#getProjectSetupResultProjectSetupResultRunIdGet) | **GET** /project-setup-result/{run_id} | Get Project Setup Result |
| [**getProjectSetupResultProjectSetupResultRunIdGet_0()**](ProjectSetupApi.md#getProjectSetupResultProjectSetupResultRunIdGet_0) | **GET** /project-setup-result/{run_id} | Get Project Setup Result |
| [**getProjectSetupRunsResultsProjectSetupResultsPost()**](ProjectSetupApi.md#getProjectSetupRunsResultsProjectSetupResultsPost) | **POST** /project-setup-results | Get Project Setup Runs Results |
| [**getProjectSetupRunsResultsProjectSetupResultsPost_0()**](ProjectSetupApi.md#getProjectSetupRunsResultsProjectSetupResultsPost_0) | **POST** /project-setup-results | Get Project Setup Runs Results |


## `createProjectProjectSetupPost()`

```php
createProjectProjectSetupPost($create_project_setup_request_payload, $run_id): \Camb.ai\Model\CreateProjectSetupOut
```

Create Project

Creates a new project setup with transcription capabilities.  This endpoint allows users to create a new project by providing media content (either as a file upload or URL), specifying source and target languages, and other project metadata. The function validates inputs, checks file size limitations, and initiates the project setup process.  Args:     request_payload (CreateProjectSetupRequestPayload): Complete project configuration             including media URL, source/target languages, project metadata, and             processing preferences such as audio track selection and dictionary choices.         api_key_obj_and_subscription: Dependency injection providing validated API key             object and associated subscription details for authorization and usage             limit enforcement.         traceparent (str | None, optional): OpenTelemetry trace parent header for             distributed tracing across microservices. Enables request correlation             and performance monitoring throughout the processing pipeline.  Returns:     Project setup response with project details and processing status.  Raises:     HTTPException:         - 400: If neither media_file nor media_url is provided         - 400: If uploaded file has no filename         - 413: If uploaded file exceeds size limit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\ProjectSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_project_setup_request_payload = new \Camb.ai\Model\CreateProjectSetupRequestPayload(); // \Camb.ai\Model\CreateProjectSetupRequestPayload
$run_id = 56; // int

try {
    $result = $apiInstance->createProjectProjectSetupPost($create_project_setup_request_payload, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSetupApi->createProjectProjectSetupPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_project_setup_request_payload** | [**\Camb.ai\Model\CreateProjectSetupRequestPayload**](../Model/CreateProjectSetupRequestPayload.md)|  | |
| **run_id** | **int**|  | [optional] |

### Return type

[**\Camb.ai\Model\CreateProjectSetupOut**](../Model/CreateProjectSetupOut.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProjectProjectSetupPost_0()`

```php
createProjectProjectSetupPost_0($create_project_setup_request_payload, $run_id): \Camb.ai\Model\CreateProjectSetupOut
```

Create Project

Creates a new project setup with transcription capabilities.  This endpoint allows users to create a new project by providing media content (either as a file upload or URL), specifying source and target languages, and other project metadata. The function validates inputs, checks file size limitations, and initiates the project setup process.  Args:     request_payload (CreateProjectSetupRequestPayload): Complete project configuration             including media URL, source/target languages, project metadata, and             processing preferences such as audio track selection and dictionary choices.         api_key_obj_and_subscription: Dependency injection providing validated API key             object and associated subscription details for authorization and usage             limit enforcement.         traceparent (str | None, optional): OpenTelemetry trace parent header for             distributed tracing across microservices. Enables request correlation             and performance monitoring throughout the processing pipeline.  Returns:     Project setup response with project details and processing status.  Raises:     HTTPException:         - 400: If neither media_file nor media_url is provided         - 400: If uploaded file has no filename         - 413: If uploaded file exceeds size limit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\ProjectSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_project_setup_request_payload = new \Camb.ai\Model\CreateProjectSetupRequestPayload(); // \Camb.ai\Model\CreateProjectSetupRequestPayload
$run_id = 56; // int

try {
    $result = $apiInstance->createProjectProjectSetupPost_0($create_project_setup_request_payload, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSetupApi->createProjectProjectSetupPost_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_project_setup_request_payload** | [**\Camb.ai\Model\CreateProjectSetupRequestPayload**](../Model/CreateProjectSetupRequestPayload.md)|  | |
| **run_id** | **int**|  | [optional] |

### Return type

[**\Camb.ai\Model\CreateProjectSetupOut**](../Model/CreateProjectSetupOut.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProjectSetupTaskStatusProjectSetupTaskIdGet()`

```php
createProjectSetupTaskStatusProjectSetupTaskIdGet($task_id, $run_id): \Camb.ai\Model\GetCreateProjectSetupResponse[]
```

Create Project Setup Task Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\ProjectSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string
$run_id = 56; // int

try {
    $result = $apiInstance->createProjectSetupTaskStatusProjectSetupTaskIdGet($task_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSetupApi->createProjectSetupTaskStatusProjectSetupTaskIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**|  | |
| **run_id** | **int**|  | [optional] |

### Return type

[**\Camb.ai\Model\GetCreateProjectSetupResponse[]**](../Model/GetCreateProjectSetupResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProjectSetupTaskStatusProjectSetupTaskIdGet_0()`

```php
createProjectSetupTaskStatusProjectSetupTaskIdGet_0($task_id, $run_id): \Camb.ai\Model\GetCreateProjectSetupResponse[]
```

Create Project Setup Task Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\ProjectSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string
$run_id = 56; // int

try {
    $result = $apiInstance->createProjectSetupTaskStatusProjectSetupTaskIdGet_0($task_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSetupApi->createProjectSetupTaskStatusProjectSetupTaskIdGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**|  | |
| **run_id** | **int**|  | [optional] |

### Return type

[**\Camb.ai\Model\GetCreateProjectSetupResponse[]**](../Model/GetCreateProjectSetupResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectSetupResultProjectSetupResultRunIdGet()`

```php
getProjectSetupResultProjectSetupResultRunIdGet($run_id): \Camb.ai\Model\GetCreateProjectSetupResponse
```

Get Project Setup Result

Retrieves the final result of a completed project setup.  This endpoint provides access to the final results of a completed project setup. It verifies that the authenticated user has access to the requested run_id and validates that the run is of the correct type (`DUB_PROJECT`) before returning results.  Note:     This endpoint should only be called by users to retrieve their run results via API.     Access validation is performed to ensure users can only access their own runs.  Args:     run_id: Positive integer ID of the project setup run.     api_key_obj: API key authentication data from dependency.     traceparent: OpenTelemetry trace header for distributed tracing.  Returns:     GetCreateProjectSetupResponse: Project setup results including run details.  Raises:     HTTPException:         - 404: If the run_id is not found         - 400: If the run type is not valid for this endpoint (must be DUB_PROJECT)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\ProjectSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int

try {
    $result = $apiInstance->getProjectSetupResultProjectSetupResultRunIdGet($run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSetupApi->getProjectSetupResultProjectSetupResultRunIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | |

### Return type

[**\Camb.ai\Model\GetCreateProjectSetupResponse**](../Model/GetCreateProjectSetupResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectSetupResultProjectSetupResultRunIdGet_0()`

```php
getProjectSetupResultProjectSetupResultRunIdGet_0($run_id): \Camb.ai\Model\GetCreateProjectSetupResponse
```

Get Project Setup Result

Retrieves the final result of a completed project setup.  This endpoint provides access to the final results of a completed project setup. It verifies that the authenticated user has access to the requested run_id and validates that the run is of the correct type (`DUB_PROJECT`) before returning results.  Note:     This endpoint should only be called by users to retrieve their run results via API.     Access validation is performed to ensure users can only access their own runs.  Args:     run_id: Positive integer ID of the project setup run.     api_key_obj: API key authentication data from dependency.     traceparent: OpenTelemetry trace header for distributed tracing.  Returns:     GetCreateProjectSetupResponse: Project setup results including run details.  Raises:     HTTPException:         - 404: If the run_id is not found         - 400: If the run type is not valid for this endpoint (must be DUB_PROJECT)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\ProjectSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int

try {
    $result = $apiInstance->getProjectSetupResultProjectSetupResultRunIdGet_0($run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSetupApi->getProjectSetupResultProjectSetupResultRunIdGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | |

### Return type

[**\Camb.ai\Model\GetCreateProjectSetupResponse**](../Model/GetCreateProjectSetupResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectSetupRunsResultsProjectSetupResultsPost()`

```php
getProjectSetupRunsResultsProjectSetupResultsPost($run_ids_request_payload, $run_id): \CambAiModelGetCreateProjectSetupResponse[]
```

Get Project Setup Runs Results

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\ProjectSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_ids_request_payload = new \Camb.ai\Model\RunIDsRequestPayload(); // \Camb.ai\Model\RunIDsRequestPayload
$run_id = 56; // int

try {
    $result = $apiInstance->getProjectSetupRunsResultsProjectSetupResultsPost($run_ids_request_payload, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSetupApi->getProjectSetupRunsResultsProjectSetupResultsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_ids_request_payload** | [**\Camb.ai\Model\RunIDsRequestPayload**](../Model/RunIDsRequestPayload.md)|  | |
| **run_id** | **int**|  | [optional] |

### Return type

[**\CambAiModelGetCreateProjectSetupResponse[]**](../Model/GetCreateProjectSetupResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectSetupRunsResultsProjectSetupResultsPost_0()`

```php
getProjectSetupRunsResultsProjectSetupResultsPost_0($run_ids_request_payload, $run_id): \CambAiModelGetCreateProjectSetupResponse[]
```

Get Project Setup Runs Results

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\ProjectSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_ids_request_payload = new \Camb.ai\Model\RunIDsRequestPayload(); // \Camb.ai\Model\RunIDsRequestPayload
$run_id = 56; // int

try {
    $result = $apiInstance->getProjectSetupRunsResultsProjectSetupResultsPost_0($run_ids_request_payload, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSetupApi->getProjectSetupRunsResultsProjectSetupResultsPost_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_ids_request_payload** | [**\Camb.ai\Model\RunIDsRequestPayload**](../Model/RunIDsRequestPayload.md)|  | |
| **run_id** | **int**|  | [optional] |

### Return type

[**\CambAiModelGetCreateProjectSetupResponse[]**](../Model/GetCreateProjectSetupResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
