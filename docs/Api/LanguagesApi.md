# Swagger\Client\LanguagesApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**languagesIndex**](LanguagesApi.md#languagesIndex) | **GET** /languages | List Languages available.


# **languagesIndex**
> \Swagger\Client\Model\LanguageResult languagesIndex($geo_code, $iso_code, $language, $native, $limit, $page, $query)

List Languages available.

List Languages available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('jwt', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('jwt', 'Bearer');
// Configure HTTP basic authorization: login
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\LanguagesApi();
$geo_code = "geo_code_example"; // string | Geo code to display language - default en.
$iso_code = "iso_code_example"; // string | Language iso code.
$language = "language_example"; // string | Language translation in geo code.
$native = "native_example"; // string | Language in native language.
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->languagesIndex($geo_code, $iso_code, $language, $native, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguagesApi->languagesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geo_code** | **string**| Geo code to display language - default en. | [optional]
 **iso_code** | **string**| Language iso code. | [optional]
 **language** | **string**| Language translation in geo code. | [optional]
 **native** | **string**| Language in native language. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\LanguageResult**](../Model/LanguageResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

