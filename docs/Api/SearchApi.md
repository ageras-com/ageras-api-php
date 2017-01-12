# Swagger\Client\SearchApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchIndex**](SearchApi.md#searchIndex) | **GET** /search | Search by criterias.
[**searchSuggestIndex**](SearchApi.md#searchSuggestIndex) | **GET** /search/suggest | Suggest by criteria.
[**searchTypeaheadIndex**](SearchApi.md#searchTypeaheadIndex) | **GET** /search/typeahead | Typeahead recommendations.


# **searchIndex**
> \Swagger\Client\Model\SearchResult searchIndex($limit, $page, $query)

Search by criterias.

Search by criterias.

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

$api_instance = new Swagger\Client\Api\SearchApi();
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->searchIndex($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResult**](../Model/SearchResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchSuggestIndex**
> \Swagger\Client\Model\SearchResult searchSuggestIndex($limit, $geo_code, $query, $type, $page)

Suggest by criteria.

Suggest by criteria.

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

$api_instance = new Swagger\Client\Api\SearchApi();
$limit = 56; // int | Limit the number of suggest resources pr. page.
$geo_code = "geo_code_example"; // string | Geo Location Code ( ISO 3166 ).
$query = "query_example"; // string | The search query to search by.
$type = "type_example"; // string | Type to search for.
$page = 56; // int | The page position in the result.

try {
    $result = $api_instance->searchSuggestIndex($limit, $geo_code, $query, $type, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchSuggestIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limit the number of suggest resources pr. page. | [optional]
 **geo_code** | **string**| Geo Location Code ( ISO 3166 ). | [optional]
 **query** | **string**| The search query to search by. | [optional]
 **type** | **string**| Type to search for. | [optional]
 **page** | **int**| The page position in the result. | [optional]

### Return type

[**\Swagger\Client\Model\SearchResult**](../Model/SearchResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchTypeaheadIndex**
> \Swagger\Client\Model\TypeaheadResult searchTypeaheadIndex($limit, $geo_code, $query, $type, $page)

Typeahead recommendations.

Typeahead recommendations.

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

$api_instance = new Swagger\Client\Api\SearchApi();
$limit = 56; // int | Limit the number of suggest resources pr. page.
$geo_code = "geo_code_example"; // string | Geo Location Code ( ISO 3166 ).
$query = "query_example"; // string | The search query to search by.
$type = "type_example"; // string | Type to search for.
$page = 56; // int | The page position in the result.

try {
    $result = $api_instance->searchTypeaheadIndex($limit, $geo_code, $query, $type, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchTypeaheadIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limit the number of suggest resources pr. page. | [optional]
 **geo_code** | **string**| Geo Location Code ( ISO 3166 ). | [optional]
 **query** | **string**| The search query to search by. | [optional]
 **type** | **string**| Type to search for. | [optional]
 **page** | **int**| The page position in the result. | [optional]

### Return type

[**\Swagger\Client\Model\TypeaheadResult**](../Model/TypeaheadResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

