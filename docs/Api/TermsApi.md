# Ageras\Api\TermsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**termsAcceptedIndex**](TermsApi.md#termsAcceptedIndex) | **GET** /terms/accepted | Get accepted terms.
[**termsActionsCreate**](TermsApi.md#termsActionsCreate) | **POST** /terms/{terms_id}/actions | Term actions.
[**termsGet**](TermsApi.md#termsGet) | **GET** /terms/{terms_id} | Retrieve a terms set from a given location_id.
[**termsIndex**](TermsApi.md#termsIndex) | **GET** /terms | Search and find terms by different criterias.


# **termsAcceptedIndex**
> \Ageras\Api\Model\TermsResult termsAcceptedIndex($criteria)

Get accepted terms.

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

$api_instance = new Ageras\Api\Api\TermsApi();
$criteria = [
        'acceptor_id' => 56; // int | 
        'acceptor_type' => "partner"; // string | 
        'terms_id' => "terms_id_example"; // string | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->termsAcceptedIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsApi->termsAcceptedIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acceptor_id** | **int**|  | [optional]
 **acceptor_type** | **string**|  | [optional] [default to partner]
 **terms_id** | **string**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\Model\TermsResult**](../Model/TermsResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **termsActionsCreate**
> \Ageras\Api\Model\TermsActionResource termsActionsCreate($terms_id , $terms_action_resource)

Term actions.

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

$api_instance = new Ageras\Api\Api\TermsApi();
$terms_id = "terms_id_example"; // string | 
$terms_action_resource = new \Ageras\Api\Model\TermsActionResource(); // \Ageras\Api\Model\TermsActionResource | 

try {
    $result = $api_instance->termsActionsCreate($terms_id , $terms_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsApi->termsActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **terms_id** | **string**|  |
 **terms_action_resource** | [**\Ageras\Api\Model\TermsActionResource**](../Model/TermsActionResource.md)|  |

### Return type

[**\Ageras\Api\Model\TermsActionResource**](../Model/TermsActionResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **termsGet**
> \Ageras\Api\Model\TermsResource termsGet($terms_id )

Retrieve a terms set from a given location_id.

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

$api_instance = new Ageras\Api\Api\TermsApi();
$terms_id = "terms_id_example"; // string | 

try {
    $result = $api_instance->termsGet($terms_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsApi->termsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **terms_id** | **string**|  |

### Return type

[**\Ageras\Api\Model\TermsResource**](../Model/TermsResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **termsIndex**
> \Ageras\Api\Model\TermsResult termsIndex($criteria)

Search and find terms by different criterias.

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

$api_instance = new Ageras\Api\Api\TermsApi();
$criteria = [
        'geo_code' => "geo_code_example"; // string | 
        'type' => "type_example"; // string | 
        'identifier' => "identifier_example"; // string | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->termsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsApi->termsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geo_code** | **string**|  | [optional]
 **type** | **string**|  | [optional]
 **identifier** | **string**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\Model\TermsResult**](../Model/TermsResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

