# Ageras\Api\PromptsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**promptsActionsCreate**](PromptsApi.md#promptsActionsCreate) | **POST** /prompts/{prompt_id}/actions | 
[**promptsIndex**](PromptsApi.md#promptsIndex) | **GET** /prompts | 


# **promptsActionsCreate**
> \Ageras\Api\PromptResource promptsActionsCreate($prompt_id , $prompt_action_resource)



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

$api_instance = new Ageras\Api\Api\PromptsApi();
$prompt_id = "prompt_id_example"; // string | 
$prompt_action_resource = new \Ageras\Api\PromptActionResource(); // \Ageras\Api\PromptActionResource | 

try {
    $result = $api_instance->promptsActionsCreate($prompt_id , $prompt_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->promptsActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prompt_id** | **string**|  |
 **prompt_action_resource** | [**\Ageras\Api\PromptActionResource**](../Model/\Ageras\Api\PromptActionResource.md)|  |

### Return type

[**\Ageras\Api\PromptResource**](../Model/PromptResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promptsIndex**
> \Ageras\Api\PromptResult promptsIndex($criteria)



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

$api_instance = new Ageras\Api\Api\PromptsApi();
$criteria = [
        'show_expired' => false; // bool | 
        'partner_id' => 56; // int | 
        'partner_user_id' => 56; // int | 
        'type' => "unknown"; // string | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->promptsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->promptsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **show_expired** | **bool**|  | [optional] [default to false]
 **partner_id** | **int**|  | [optional]
 **partner_user_id** | **int**|  | [optional]
 **type** | **string**|  | [optional] [default to unknown]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\PromptResult**](../Model/PromptResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

