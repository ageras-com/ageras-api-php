# Ageras\Api\FormsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**formsIndex**](FormsApi.md#formsIndex) | **GET** /forms | 
[**formsResponsesCreate**](FormsApi.md#formsResponsesCreate) | **POST** /forms/{form_id}/responses | 


# **formsIndex**
> \Ageras\Api\FormResult formsIndex($criteria)



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

$api_instance = new Ageras\Api\Api\FormsApi();
$criteria = [
        'industry_id' => 56; // int | 
        'type_id' => 56; // int | 
        'geo_code' => "geo_code_example"; // string | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->formsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->formsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **industry_id** | **int**|  | [optional]
 **type_id** | **int**|  | [optional]
 **geo_code** | **string**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\FormResult**](../Model/FormResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formsResponsesCreate**
> \Ageras\Api\FormResponseResource formsResponsesCreate($form_id , $form_response_resource)



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

$api_instance = new Ageras\Api\Api\FormsApi();
$form_id = "form_id_example"; // string | 
$form_response_resource = new \Ageras\Api\FormResponseResource(); // \Ageras\Api\FormResponseResource | 

try {
    $result = $api_instance->formsResponsesCreate($form_id , $form_response_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->formsResponsesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **form_id** | **string**|  |
 **form_response_resource** | [**\Ageras\Api\FormResponseResource**](../Model/\Ageras\Api\FormResponseResource.md)|  |

### Return type

[**\Ageras\Api\FormResponseResource**](../Model/FormResponseResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

