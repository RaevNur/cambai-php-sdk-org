# Camb.ai\DictionariesApi



All URIs are relative to https://client.camb.ai/apis, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addTermToDictionaryDictionariesDictionaryIdAddTermPost()**](DictionariesApi.md#addTermToDictionaryDictionariesDictionaryIdAddTermPost) | **POST** /dictionaries/{dictionary_id}/add-term | Add Term To Dictionary |
| [**createDictionaryFromFileDictionariesCreateFromFilePost()**](DictionariesApi.md#createDictionaryFromFileDictionariesCreateFromFilePost) | **POST** /dictionaries/create-from-file | Create Dictionary From File |
| [**deleteDictionaryDictionariesDictionaryIdDelete()**](DictionariesApi.md#deleteDictionaryDictionariesDictionaryIdDelete) | **DELETE** /dictionaries/{dictionary_id} | Delete Dictionary |
| [**deleteDictionaryTermDictionariesTermDictionaryIdTermIdDelete()**](DictionariesApi.md#deleteDictionaryTermDictionariesTermDictionaryIdTermIdDelete) | **DELETE** /dictionaries/term/{dictionary_id}/{term_id} | Delete Dictionary Term |
| [**getDictionariesDictionariesGet()**](DictionariesApi.md#getDictionariesDictionariesGet) | **GET** /dictionaries | Get Dictionaries |
| [**getDictionaryDetailsDictionariesDictionaryIdFullDetailsGet()**](DictionariesApi.md#getDictionaryDetailsDictionariesDictionaryIdFullDetailsGet) | **GET** /dictionaries/{dictionary_id}/full-details | Get Dictionary Details |
| [**getDictionaryInfoDictionariesDictionaryIdGet()**](DictionariesApi.md#getDictionaryInfoDictionariesDictionaryIdGet) | **GET** /dictionaries/{dictionary_id} | Get Dictionary Info |
| [**updateTermTranslationInDictionaryUsingTermIdDictionariesTermDictionaryIdTermIdPut()**](DictionariesApi.md#updateTermTranslationInDictionaryUsingTermIdDictionariesTermDictionaryIdTermIdPut) | **PUT** /dictionaries/term/{dictionary_id}/{term_id} | Update Term Translation In Dictionary Using Term Id |


## `addTermToDictionaryDictionariesDictionaryIdAddTermPost()`

```php
addTermToDictionaryDictionariesDictionaryIdAddTermPost($dictionary_id, $add_dictionary_term_payload, $run_id): mixed
```

Add Term To Dictionary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\DictionariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_id = 56; // int
$add_dictionary_term_payload = new \Camb.ai\Model\AddDictionaryTermPayload(); // \Camb.ai\Model\AddDictionaryTermPayload
$run_id = 56; // int

try {
    $result = $apiInstance->addTermToDictionaryDictionariesDictionaryIdAddTermPost($dictionary_id, $add_dictionary_term_payload, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionariesApi->addTermToDictionaryDictionariesDictionaryIdAddTermPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_id** | **int**|  | |
| **add_dictionary_term_payload** | [**\Camb.ai\Model\AddDictionaryTermPayload**](../Model/AddDictionaryTermPayload.md)|  | |
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

## `createDictionaryFromFileDictionariesCreateFromFilePost()`

```php
createDictionaryFromFileDictionariesCreateFromFilePost($dictionary_file, $dictionary_name, $run_id, $dictionary_description): mixed
```

Create Dictionary From File

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\DictionariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_file = '/path/to/file.txt'; // \SplFileObject | CSV or Excel Sheet Matching the required structure for a dictionary.
$dictionary_name = 'dictionary_name_example'; // string | The name of the dictonary to be created. This is mainly used for organizational purposes.
$run_id = 56; // int
$dictionary_description = 'dictionary_description_example'; // string

try {
    $result = $apiInstance->createDictionaryFromFileDictionariesCreateFromFilePost($dictionary_file, $dictionary_name, $run_id, $dictionary_description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionariesApi->createDictionaryFromFileDictionariesCreateFromFilePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_file** | **\SplFileObject****\SplFileObject**| CSV or Excel Sheet Matching the required structure for a dictionary. | |
| **dictionary_name** | **string**| The name of the dictonary to be created. This is mainly used for organizational purposes. | |
| **run_id** | **int**|  | [optional] |
| **dictionary_description** | **string**|  | [optional] |

### Return type

**mixed**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDictionaryDictionariesDictionaryIdDelete()`

```php
deleteDictionaryDictionariesDictionaryIdDelete($dictionary_id, $run_id): mixed
```

Delete Dictionary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\DictionariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_id = 56; // int
$run_id = 56; // int

try {
    $result = $apiInstance->deleteDictionaryDictionariesDictionaryIdDelete($dictionary_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionariesApi->deleteDictionaryDictionariesDictionaryIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_id** | **int**|  | |
| **run_id** | **int**|  | [optional] |

### Return type

**mixed**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDictionaryTermDictionariesTermDictionaryIdTermIdDelete()`

```php
deleteDictionaryTermDictionariesTermDictionaryIdTermIdDelete($dictionary_id, $term_id, $run_id): mixed
```

Delete Dictionary Term

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\DictionariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_id = 56; // int
$term_id = 56; // int
$run_id = 56; // int

try {
    $result = $apiInstance->deleteDictionaryTermDictionariesTermDictionaryIdTermIdDelete($dictionary_id, $term_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionariesApi->deleteDictionaryTermDictionariesTermDictionaryIdTermIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_id** | **int**|  | |
| **term_id** | **int**|  | |
| **run_id** | **int**|  | [optional] |

### Return type

**mixed**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDictionariesDictionariesGet()`

```php
getDictionariesDictionariesGet($run_id): \Camb.ai\Model\DictionaryWithTerms[]
```

Get Dictionaries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\DictionariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int

try {
    $result = $apiInstance->getDictionariesDictionariesGet($run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionariesApi->getDictionariesDictionariesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | [optional] |

### Return type

[**\Camb.ai\Model\DictionaryWithTerms[]**](../Model/DictionaryWithTerms.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDictionaryDetailsDictionariesDictionaryIdFullDetailsGet()`

```php
getDictionaryDetailsDictionariesDictionaryIdFullDetailsGet($dictionary_id, $limit, $search_term, $run_id): \Camb.ai\Model\DictionaryWithTerms
```

Get Dictionary Details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\DictionariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_id = 56; // int
$limit = 56; // int | Limit how many terms are returned when fetching the dictionary details.
$search_term = 'search_term_example'; // string
$run_id = 56; // int

try {
    $result = $apiInstance->getDictionaryDetailsDictionariesDictionaryIdFullDetailsGet($dictionary_id, $limit, $search_term, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionariesApi->getDictionaryDetailsDictionariesDictionaryIdFullDetailsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_id** | **int**|  | |
| **limit** | **int**| Limit how many terms are returned when fetching the dictionary details. | [optional] |
| **search_term** | **string**|  | [optional] |
| **run_id** | **int**|  | [optional] |

### Return type

[**\Camb.ai\Model\DictionaryWithTerms**](../Model/DictionaryWithTerms.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDictionaryInfoDictionariesDictionaryIdGet()`

```php
getDictionaryInfoDictionariesDictionaryIdGet($dictionary_id, $run_id): \Camb.ai\Model\DictionaryWithTerms
```

Get Dictionary Info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\DictionariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_id = 56; // int
$run_id = 56; // int

try {
    $result = $apiInstance->getDictionaryInfoDictionariesDictionaryIdGet($dictionary_id, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionariesApi->getDictionaryInfoDictionariesDictionaryIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_id** | **int**|  | |
| **run_id** | **int**|  | [optional] |

### Return type

[**\Camb.ai\Model\DictionaryWithTerms**](../Model/DictionaryWithTerms.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTermTranslationInDictionaryUsingTermIdDictionariesTermDictionaryIdTermIdPut()`

```php
updateTermTranslationInDictionaryUsingTermIdDictionariesTermDictionaryIdTermIdPut($dictionary_id, $term_id, $update_term_translations_payload, $run_id): mixed
```

Update Term Translation In Dictionary Using Term Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\DictionariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_id = 56; // int
$term_id = 56; // int
$update_term_translations_payload = new \Camb.ai\Model\UpdateTermTranslationsPayload(); // \Camb.ai\Model\UpdateTermTranslationsPayload
$run_id = 56; // int

try {
    $result = $apiInstance->updateTermTranslationInDictionaryUsingTermIdDictionariesTermDictionaryIdTermIdPut($dictionary_id, $term_id, $update_term_translations_payload, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionariesApi->updateTermTranslationInDictionaryUsingTermIdDictionariesTermDictionaryIdTermIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_id** | **int**|  | |
| **term_id** | **int**|  | |
| **update_term_translations_payload** | [**\Camb.ai\Model\UpdateTermTranslationsPayload**](../Model/UpdateTermTranslationsPayload.md)|  | |
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
