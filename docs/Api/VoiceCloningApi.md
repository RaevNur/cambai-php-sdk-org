# Camb.ai\VoiceCloningApi



All URIs are relative to https://client.camb.ai/apis, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomVoiceCreateCustomVoicePost()**](VoiceCloningApi.md#createCustomVoiceCreateCustomVoicePost) | **POST** /create-custom-voice | Create Custom Voice |
| [**createCustomVoiceCreateCustomVoicePost_0()**](VoiceCloningApi.md#createCustomVoiceCreateCustomVoicePost_0) | **POST** /create-custom-voice | Create Custom Voice |
| [**listVoicesListVoicesGet()**](VoiceCloningApi.md#listVoicesListVoicesGet) | **GET** /list-voices | List Voices |
| [**listVoicesListVoicesGet_0()**](VoiceCloningApi.md#listVoicesListVoicesGet_0) | **GET** /list-voices | List Voices |


## `createCustomVoiceCreateCustomVoicePost()`

```php
createCustomVoiceCreateCustomVoicePost($voice_name, $gender, $file, $run_id, $description, $publish_voice_to_market_place, $age, $language, $enhance_audio): \Camb.ai\Model\CreateCustomVoiceOut
```

Create Custom Voice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\VoiceCloningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voice_name = 'voice_name_example'; // string
$gender = new \Camb.ai\Model\Gender(); // \Camb.ai\Model\Gender
$file = '/path/to/file.txt'; // \SplFileObject | Voice reference file
$run_id = 56; // int
$description = 'description_example'; // string
$publish_voice_to_market_place = True; // bool
$age = 30; // int
$language = new \Camb.ai\Model\Languages(); // \Camb.ai\Model\Languages
$enhance_audio = True; // bool

try {
    $result = $apiInstance->createCustomVoiceCreateCustomVoicePost($voice_name, $gender, $file, $run_id, $description, $publish_voice_to_market_place, $age, $language, $enhance_audio);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceCloningApi->createCustomVoiceCreateCustomVoicePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voice_name** | **string**|  | |
| **gender** | [**\Camb.ai\Model\Gender**](../Model/Gender.md)|  | |
| **file** | **\SplFileObject****\SplFileObject**| Voice reference file | |
| **run_id** | **int**|  | [optional] |
| **description** | **string**|  | [optional] |
| **publish_voice_to_market_place** | **bool**|  | [optional] |
| **age** | **int**|  | [optional] [default to 30] |
| **language** | [**\Camb.ai\Model\Languages**](../Model/Languages.md)|  | [optional] |
| **enhance_audio** | **bool**|  | [optional] |

### Return type

[**\Camb.ai\Model\CreateCustomVoiceOut**](../Model/CreateCustomVoiceOut.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCustomVoiceCreateCustomVoicePost_0()`

```php
createCustomVoiceCreateCustomVoicePost_0($voice_name, $gender, $file, $run_id, $description, $publish_voice_to_market_place, $age, $language, $enhance_audio): \Camb.ai\Model\CreateCustomVoiceOut
```

Create Custom Voice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\VoiceCloningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voice_name = 'voice_name_example'; // string
$gender = new \Camb.ai\Model\Gender(); // \Camb.ai\Model\Gender
$file = '/path/to/file.txt'; // \SplFileObject | Voice reference file
$run_id = 56; // int
$description = 'description_example'; // string
$publish_voice_to_market_place = True; // bool
$age = 30; // int
$language = new \Camb.ai\Model\Languages(); // \Camb.ai\Model\Languages
$enhance_audio = True; // bool

try {
    $result = $apiInstance->createCustomVoiceCreateCustomVoicePost_0($voice_name, $gender, $file, $run_id, $description, $publish_voice_to_market_place, $age, $language, $enhance_audio);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceCloningApi->createCustomVoiceCreateCustomVoicePost_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voice_name** | **string**|  | |
| **gender** | [**\Camb.ai\Model\Gender**](../Model/Gender.md)|  | |
| **file** | **\SplFileObject****\SplFileObject**| Voice reference file | |
| **run_id** | **int**|  | [optional] |
| **description** | **string**|  | [optional] |
| **publish_voice_to_market_place** | **bool**|  | [optional] |
| **age** | **int**|  | [optional] [default to 30] |
| **language** | [**\Camb.ai\Model\Languages**](../Model/Languages.md)|  | [optional] |
| **enhance_audio** | **bool**|  | [optional] |

### Return type

[**\Camb.ai\Model\CreateCustomVoiceOut**](../Model/CreateCustomVoiceOut.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVoicesListVoicesGet()`

```php
listVoicesListVoicesGet($run_id): \Camb.ai\Model\ResponseListVoicesListVoicesGetInner[]
```

List Voices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\VoiceCloningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int

try {
    $result = $apiInstance->listVoicesListVoicesGet($run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceCloningApi->listVoicesListVoicesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | [optional] |

### Return type

[**\Camb.ai\Model\ResponseListVoicesListVoicesGetInner[]**](../Model/ResponseListVoicesListVoicesGetInner.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVoicesListVoicesGet_0()`

```php
listVoicesListVoicesGet_0($run_id): \Camb.ai\Model\ResponseListVoicesListVoicesGetInner[]
```

List Voices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\VoiceCloningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 56; // int

try {
    $result = $apiInstance->listVoicesListVoicesGet_0($run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceCloningApi->listVoicesListVoicesGet_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **int**|  | [optional] |

### Return type

[**\Camb.ai\Model\ResponseListVoicesListVoicesGetInner[]**](../Model/ResponseListVoicesListVoicesGetInner.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
