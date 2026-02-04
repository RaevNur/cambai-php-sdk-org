# Camb.ai\FoldersApi



All URIs are relative to https://client.camb.ai/apis, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFolderFoldersCreatePost()**](FoldersApi.md#createFolderFoldersCreatePost) | **POST** /folders/create | Create Folder |
| [**createFolderFoldersCreatePost_0()**](FoldersApi.md#createFolderFoldersCreatePost_0) | **POST** /folders/create | Create Folder |
| [**listFoldersFoldersGet()**](FoldersApi.md#listFoldersFoldersGet) | **GET** /folders | List Folders |
| [**listFoldersFoldersGet_0()**](FoldersApi.md#listFoldersFoldersGet_0) | **GET** /folders | List Folders |


## `createFolderFoldersCreatePost()`

```php
createFolderFoldersCreatePost($create_folder_payload, $run_id): mixed
```

Create Folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_folder_payload = new \Camb.ai\Model\CreateFolderPayload(); // \Camb.ai\Model\CreateFolderPayload
$run_id = 56; // int

try {
    $result = $apiInstance->createFolderFoldersCreatePost($create_folder_payload, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->createFolderFoldersCreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_folder_payload** | [**\Camb.ai\Model\CreateFolderPayload**](../Model/CreateFolderPayload.md)|  | |
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

## `createFolderFoldersCreatePost_0()`

```php
createFolderFoldersCreatePost_0($create_folder_payload, $run_id): mixed
```

Create Folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_folder_payload = new \Camb.ai\Model\CreateFolderPayload(); // \Camb.ai\Model\CreateFolderPayload
$run_id = 56; // int

try {
    $result = $apiInstance->createFolderFoldersCreatePost_0($create_folder_payload, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->createFolderFoldersCreatePost_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_folder_payload** | [**\Camb.ai\Model\CreateFolderPayload**](../Model/CreateFolderPayload.md)|  | |
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

## `listFoldersFoldersGet()`

```php
listFoldersFoldersGet($limit, $search_query, $run_id): \Camb.ai\Model\Folder[]
```

List Folders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int
$search_query = 'search_query_example'; // string
$run_id = 56; // int

try {
    $result = $apiInstance->listFoldersFoldersGet($limit, $search_query, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->listFoldersFoldersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**|  | [optional] |
| **search_query** | **string**|  | [optional] |
| **run_id** | **int**|  | [optional] |

### Return type

[**\Camb.ai\Model\Folder[]**](../Model/Folder.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFoldersFoldersGet_0()`

```php
listFoldersFoldersGet_0($limit, $search_query, $run_id): \Camb.ai\Model\Folder[]
```

List Folders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int
$search_query = 'search_query_example'; // string
$run_id = 56; // int

try {
    $result = $apiInstance->listFoldersFoldersGet_0($limit, $search_query, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->listFoldersFoldersGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**|  | [optional] |
| **search_query** | **string**|  | [optional] |
| **run_id** | **int**|  | [optional] |

### Return type

[**\Camb.ai\Model\Folder[]**](../Model/Folder.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
