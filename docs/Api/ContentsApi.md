# Ageras\Api\ContentsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contentsPagesAggregationsIndex**](ContentsApi.md#contentsPagesAggregationsIndex) | **GET** /contents/pages/aggregations | Aggreate the Pages by the letters
[**contentsPagesAggregationsIndex2**](ContentsApi.md#contentsPagesAggregationsIndex2) | **GET** /contents/{content_id}/pages/aggregations | Aggreate the Pages by the letters
[**contentsPagesGet**](ContentsApi.md#contentsPagesGet) | **GET** /contents/pages/{content_page_id} | Return a Page from a given id
[**contentsPagesGet2**](ContentsApi.md#contentsPagesGet2) | **GET** /contents/{content_id}/pages/{content_page_id} | Return a Page from a given id
[**contentsPagesIndex**](ContentsApi.md#contentsPagesIndex) | **GET** /contents/pages | List Pages
[**contentsPagesTypesIndex**](ContentsApi.md#contentsPagesTypesIndex) | **GET** /contents/pages/types | List content page types.


# **contentsPagesAggregationsIndex**
> \Ageras\Api\AggregationResult contentsPagesAggregationsIndex($page_id, $page_type, $page_type_id, $letter, $geo_code, $limit, $page, $query)

Aggreate the Pages by the letters

Aggreate the Pages by the letters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Ageras\Api\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Ageras\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');
// Configure HTTP basic authorization: login
Ageras\Api\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Ageras\Api\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Ageras\Api\Api\ContentsApi();
$page_id = "page_id_example"; // string | List of page identification(ID).
$page_type = "page_type_example"; // string | Filter pages by their type
$page_type_id = "page_type_id_example"; // string | Filter pages by their type id
$letter = "letter_example"; // string | Filter pages by first letter
$geo_code = "geo_code_example"; // string | Geo Code for the Content Page
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

$criteria = [
        'page_id' => "page_id_example"; // string | List of page identification(ID).
        'page_type' => "page_type_example"; // string | Filter pages by their type
        'page_type_id' => "page_type_id_example"; // string | Filter pages by their type id
        'letter' => "letter_example"; // string | Filter pages by first letter
        'geo_code' => "geo_code_example"; // string | Geo Code for the Content Page
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->contentsPagesAggregationsIndex($criteria = []);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsPagesAggregationsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_id** | **string**| List of page identification(ID). | [optional]
 **page_type** | **string**| Filter pages by their type | [optional]
 **page_type_id** | **string**| Filter pages by their type id | [optional]
 **letter** | **string**| Filter pages by first letter | [optional]
 **geo_code** | **string**| Geo Code for the Content Page | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\AggregationResult**](../Model/AggregationResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentsPagesAggregationsIndex2**
> \Ageras\Api\AggregationResult contentsPagesAggregationsIndex2($content_id, $page_id, $page_type, $page_type_id, $letter, $geo_code, $limit, $page, $query)

Aggreate the Pages by the letters

Aggreate the Pages by the letters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Ageras\Api\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Ageras\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');
// Configure HTTP basic authorization: login
Ageras\Api\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Ageras\Api\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Ageras\Api\Api\ContentsApi();
$content_id = "content_id_example"; // string | 
$page_id = "page_id_example"; // string | List of page identification(ID).
$page_type = "page_type_example"; // string | Filter pages by their type
$page_type_id = "page_type_id_example"; // string | Filter pages by their type id
$letter = "letter_example"; // string | Filter pages by first letter
$geo_code = "geo_code_example"; // string | Geo Code for the Content Page
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

$content_id = "content_id_example"; // string | 
$criteria = [
        'page_id' => "page_id_example"; // string | List of page identification(ID).
        'page_type' => "page_type_example"; // string | Filter pages by their type
        'page_type_id' => "page_type_id_example"; // string | Filter pages by their type id
        'letter' => "letter_example"; // string | Filter pages by first letter
        'geo_code' => "geo_code_example"; // string | Geo Code for the Content Page
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->contentsPagesAggregationsIndex2($content_id , $criteria = []);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsPagesAggregationsIndex2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_id** | **string**|  |
 **page_id** | **string**| List of page identification(ID). | [optional]
 **page_type** | **string**| Filter pages by their type | [optional]
 **page_type_id** | **string**| Filter pages by their type id | [optional]
 **letter** | **string**| Filter pages by first letter | [optional]
 **geo_code** | **string**| Geo Code for the Content Page | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\AggregationResult**](../Model/AggregationResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentsPagesGet**
> \Ageras\Api\ContentPageResource contentsPagesGet($content_page_id)

Return a Page from a given id

Return a Page from a given id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Ageras\Api\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Ageras\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');
// Configure HTTP basic authorization: login
Ageras\Api\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Ageras\Api\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Ageras\Api\Api\ContentsApi();
$content_page_id = "content_page_id_example"; // string | 

$content_page_id = "content_page_id_example"; // string | 

try {
    $result = $api_instance->contentsPagesGet($content_page_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsPagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_page_id** | **string**|  |

### Return type

[**\Ageras\Api\ContentPageResource**](../Model/ContentPageResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentsPagesGet2**
> \Ageras\Api\ContentPageResource contentsPagesGet2($content_id, $content_page_id)

Return a Page from a given id

Return a Page from a given id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Ageras\Api\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Ageras\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');
// Configure HTTP basic authorization: login
Ageras\Api\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Ageras\Api\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Ageras\Api\Api\ContentsApi();
$content_id = "content_id_example"; // string | 
$content_page_id = "content_page_id_example"; // string | 

$content_id = "content_id_example"; // string | 
$content_page_id = "content_page_id_example"; // string | 

try {
    $result = $api_instance->contentsPagesGet2($content_id,  $content_page_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsPagesGet2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_id** | **string**|  |
 **content_page_id** | **string**|  |

### Return type

[**\Ageras\Api\ContentPageResource**](../Model/ContentPageResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentsPagesIndex**
> \Ageras\Api\ContentPageResult contentsPagesIndex($page_id, $page_type, $page_type_id, $letter, $geo_code, $limit, $page, $query)

List Pages

List Pages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Ageras\Api\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Ageras\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');
// Configure HTTP basic authorization: login
Ageras\Api\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Ageras\Api\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Ageras\Api\Api\ContentsApi();
$page_id = "page_id_example"; // string | List of page identification(ID).
$page_type = "page_type_example"; // string | Filter pages by their type
$page_type_id = "page_type_id_example"; // string | Filter pages by their type id
$letter = "letter_example"; // string | Filter pages by first letter
$geo_code = "geo_code_example"; // string | Geo Code for the Content Page
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

$criteria = [
        'page_id' => "page_id_example"; // string | List of page identification(ID).
        'page_type' => "page_type_example"; // string | Filter pages by their type
        'page_type_id' => "page_type_id_example"; // string | Filter pages by their type id
        'letter' => "letter_example"; // string | Filter pages by first letter
        'geo_code' => "geo_code_example"; // string | Geo Code for the Content Page
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->contentsPagesIndex($criteria = []);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsPagesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_id** | **string**| List of page identification(ID). | [optional]
 **page_type** | **string**| Filter pages by their type | [optional]
 **page_type_id** | **string**| Filter pages by their type id | [optional]
 **letter** | **string**| Filter pages by first letter | [optional]
 **geo_code** | **string**| Geo Code for the Content Page | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\ContentPageResult**](../Model/ContentPageResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentsPagesTypesIndex**
> \Ageras\Api\ContentPageTypeResult contentsPagesTypesIndex($page_type_id, $geo_code, $limit, $page, $query)

List content page types.

List content page types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Ageras\Api\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Ageras\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');
// Configure HTTP basic authorization: login
Ageras\Api\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Ageras\Api\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Ageras\Api\Api\ContentsApi();
$page_type_id = "page_type_id_example"; // string | List of page type identification(ID).
$geo_code = "geo_code_example"; // string | geo
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

$criteria = [
        'page_type_id' => "page_type_id_example"; // string | List of page type identification(ID).
        'geo_code' => "geo_code_example"; // string | geo
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->contentsPagesTypesIndex($criteria = []);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentsApi->contentsPagesTypesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_type_id** | **string**| List of page type identification(ID). | [optional]
 **geo_code** | **string**| geo | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\ContentPageTypeResult**](../Model/ContentPageTypeResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

