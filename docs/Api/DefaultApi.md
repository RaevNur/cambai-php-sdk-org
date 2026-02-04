# Camb.ai\DefaultApi



All URIs are relative to https://client.camb.ai/apis, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOpenapiSchemaOpenapiJsonGet()**](DefaultApi.md#getOpenapiSchemaOpenapiJsonGet) | **GET** /openapi.json | Get Openapi Schema |
| [**getRedocDocsRedocsGet()**](DefaultApi.md#getRedocDocsRedocsGet) | **GET** /redocs | Get Redoc Docs |
| [**getSwaggerDocsDocsGet()**](DefaultApi.md#getSwaggerDocsDocsGet) | **GET** /docs | Get Swagger Docs |


## `getOpenapiSchemaOpenapiJsonGet()`

```php
getOpenapiSchemaOpenapiJsonGet(): mixed
```

Get Openapi Schema

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: HTTPBasic
$config = Camb.ai\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camb.ai\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOpenapiSchemaOpenapiJsonGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOpenapiSchemaOpenapiJsonGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

[HTTPBasic](../../README.md#HTTPBasic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRedocDocsRedocsGet()`

```php
getRedocDocsRedocsGet(): mixed
```

Get Redoc Docs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: HTTPBasic
$config = Camb.ai\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camb.ai\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRedocDocsRedocsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getRedocDocsRedocsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

[HTTPBasic](../../README.md#HTTPBasic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSwaggerDocsDocsGet()`

```php
getSwaggerDocsDocsGet(): mixed
```

Get Swagger Docs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: HTTPBasic
$config = Camb.ai\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camb.ai\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSwaggerDocsDocsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSwaggerDocsDocsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

[HTTPBasic](../../README.md#HTTPBasic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
