# Ageras\Api\BusinessmodelsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**businessModelsCreate**](BusinessmodelsApi.md#businessModelsCreate) | **POST** /business_models | Create business model.
[**businessModelsDelete**](BusinessmodelsApi.md#businessModelsDelete) | **DELETE** /business_models/{business_model_id} | Delete business model.
[**businessModelsGet**](BusinessmodelsApi.md#businessModelsGet) | **GET** /business_models/{business_model_id} | Return a business model
[**businessModelsIndex**](BusinessmodelsApi.md#businessModelsIndex) | **GET** /business_models | List business models.
[**businessModelsUpdate**](BusinessmodelsApi.md#businessModelsUpdate) | **PUT** /business_models/{business_model_id} | Update business model.


# **businessModelsCreate**
> \Ageras\Api\BusinessModelResource businessModelsCreate($business_model_resource)

Create business model.

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

$api_instance = new Ageras\Api\Api\BusinessmodelsApi();
$business_model_resource = new \Ageras\Api\BusinessModelResource(); // \Ageras\Api\BusinessModelResource | 

try {
    $result = $api_instance->businessModelsCreate($business_model_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessmodelsApi->businessModelsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_model_resource** | [**\Ageras\Api\BusinessModelResource**](../Model/\Ageras\Api\BusinessModelResource.md)|  |

### Return type

[**\Ageras\Api\BusinessModelResource**](../Model/BusinessModelResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessModelsDelete**
> businessModelsDelete($business_model_id )

Delete business model.

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

$api_instance = new Ageras\Api\Api\BusinessmodelsApi();
$business_model_id = "business_model_id_example"; // string | 

try {
    $api_instance->businessModelsDelete($business_model_id );
} catch (Exception $e) {
    echo 'Exception when calling BusinessmodelsApi->businessModelsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_model_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessModelsGet**
> \Ageras\Api\BusinessModelResource businessModelsGet($business_model_id )

Return a business model

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

$api_instance = new Ageras\Api\Api\BusinessmodelsApi();
$business_model_id = "business_model_id_example"; // string | Id of the business model

try {
    $result = $api_instance->businessModelsGet($business_model_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessmodelsApi->businessModelsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_model_id** | **string**| Id of the business model |

### Return type

[**\Ageras\Api\BusinessModelResource**](../Model/BusinessModelResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessModelsIndex**
> \Ageras\Api\BusinessModelResult businessModelsIndex($criteria)

List business models.

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

$api_instance = new Ageras\Api\Api\BusinessmodelsApi();
$criteria = [
        'business_model_id' => "business_model_id_example"; // string | 
        'identifier' => "identifier_example"; // string | 
        'geo_code' => "geo_code_example"; // string | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->businessModelsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessmodelsApi->businessModelsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_model_id** | **string**|  | [optional]
 **identifier** | **string**|  | [optional]
 **geo_code** | **string**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\BusinessModelResult**](../Model/BusinessModelResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessModelsUpdate**
> \Ageras\Api\BusinessModelResource businessModelsUpdate($business_model_id , $business_model_resource)

Update business model.

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

$api_instance = new Ageras\Api\Api\BusinessmodelsApi();
$business_model_id = "business_model_id_example"; // string | 
$business_model_resource = new \Ageras\Api\BusinessModelResource(); // \Ageras\Api\BusinessModelResource | 

try {
    $result = $api_instance->businessModelsUpdate($business_model_id , $business_model_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessmodelsApi->businessModelsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_model_id** | **string**|  |
 **business_model_resource** | [**\Ageras\Api\BusinessModelResource**](../Model/\Ageras\Api\BusinessModelResource.md)|  |

### Return type

[**\Ageras\Api\BusinessModelResource**](../Model/BusinessModelResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

