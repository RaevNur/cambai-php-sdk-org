# Camb.ai\TranslatedTextToSpeechApi



All URIs are relative to https://client.camb.ai/apis, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTranslatedTtsTranslatedTtsPost()**](TranslatedTextToSpeechApi.md#createTranslatedTtsTranslatedTtsPost) | **POST** /translated-tts | Create Translated Tts |


## `createTranslatedTtsTranslatedTtsPost()`

```php
createTranslatedTtsTranslatedTtsPost($create_translated_tts_request_payload, $run_id, $traceparent): \Camb.ai\Model\CreateTranslatedTTSOut
```

Create Translated Tts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Camb.ai\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Camb.ai\Api\TranslatedTextToSpeechApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_translated_tts_request_payload = new \Camb.ai\Model\CreateTranslatedTTSRequestPayload(); // \Camb.ai\Model\CreateTranslatedTTSRequestPayload
$run_id = 56; // int
$traceparent = 'traceparent_example'; // string

try {
    $result = $apiInstance->createTranslatedTtsTranslatedTtsPost($create_translated_tts_request_payload, $run_id, $traceparent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslatedTextToSpeechApi->createTranslatedTtsTranslatedTtsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_translated_tts_request_payload** | [**\Camb.ai\Model\CreateTranslatedTTSRequestPayload**](../Model/CreateTranslatedTTSRequestPayload.md)|  | |
| **run_id** | **int**|  | [optional] |
| **traceparent** | **string**|  | [optional] |

### Return type

[**\Camb.ai\Model\CreateTranslatedTTSOut**](../Model/CreateTranslatedTTSOut.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
