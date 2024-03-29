# Ageras\Api\IndustriesApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**industriesGroupIndex**](IndustriesApi.md#industriesGroupIndex) | **GET** /industries/group | 
[**industriesIndex**](IndustriesApi.md#industriesIndex) | **GET** /industries | Get all industries.


# **industriesGroupIndex**
> \Ageras\Api\IndustryGroupResult industriesGroupIndex($criteria)



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

$api_instance = new Ageras\Api\Api\IndustriesApi();
$criteria = [
        'geo_code' => "geo_code_example"; // string | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->industriesGroupIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustriesApi->industriesGroupIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geo_code** | **string**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\IndustryGroupResult**](../Model/IndustryGroupResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **industriesIndex**
> \Ageras\Api\IndustryResult industriesIndex($criteria)

Get all industries.

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

$api_instance = new Ageras\Api\Api\IndustriesApi();
$criteria = [
        'industry_id' => "industry_id_example"; // string | Industry ID.
        'name' => "name_example"; // string | Industry name in its native language.
        'geo_code' => "geo_code_example"; // string | Industry geo code origin.
        'is_active' => false; // bool | Determinate if industry is active or not.
        'limit' => 56; // int | Limit of industries per page.
        'parent_industry_id' => "parent_industry_id_example"; // string | Parent industry to filter by.
        'identifier' => "identifier_example"; // string | identifier for the industry
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->industriesIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustriesApi->industriesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **industry_id** | **string**| Industry ID. | [optional]
 **name** | **string**| Industry name in its native language. | [optional]
 **geo_code** | **string**| Industry geo code origin. | [optional]
 **is_active** | **bool**| Determinate if industry is active or not. | [optional] [default to false]
 **limit** | **int**| Limit of industries per page. | [optional]
 **parent_industry_id** | **string**| Parent industry to filter by. | [optional]
 **identifier** | **string**| identifier for the industry | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\IndustryResult**](../Model/IndustryResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

