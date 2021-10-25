# Ageras\Api\ClientsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clientsAllocationsuggestionsActionsCreate**](ClientsApi.md#clientsAllocationsuggestionsActionsCreate) | **POST** /clients/{client_id}/allocationsuggestions/actions | 
[**clientsAllocationsuggestionsIndex**](ClientsApi.md#clientsAllocationsuggestionsIndex) | **GET** /clients/{client_id}/allocationsuggestions | 
[**clientsBrowserpushsubscriptionsCreate**](ClientsApi.md#clientsBrowserpushsubscriptionsCreate) | **POST** /clients/{client_id}/browserpushsubscriptions | 
[**clientsGet**](ClientsApi.md#clientsGet) | **GET** /clients/{client_id} | 
[**clientsUpdate**](ClientsApi.md#clientsUpdate) | **PUT** /clients/{client_id} | 


# **clientsAllocationsuggestionsActionsCreate**
> \Ageras\Api\ClientAllocationSuggestionActionResource clientsAllocationsuggestionsActionsCreate($client_id , $client_allocation_suggestion_action_resource)



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

$api_instance = new Ageras\Api\Api\ClientsApi();
$client_id = "client_id_example"; // string | 
$client_allocation_suggestion_action_resource = new \Ageras\Api\ClientAllocationSuggestionActionResource(); // \Ageras\Api\ClientAllocationSuggestionActionResource | 

try {
    $result = $api_instance->clientsAllocationsuggestionsActionsCreate($client_id , $client_allocation_suggestion_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientsAllocationsuggestionsActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**|  |
 **client_allocation_suggestion_action_resource** | [**\Ageras\Api\ClientAllocationSuggestionActionResource**](../Model/\Ageras\Api\ClientAllocationSuggestionActionResource.md)|  |

### Return type

[**\Ageras\Api\ClientAllocationSuggestionActionResource**](../Model/ClientAllocationSuggestionActionResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientsAllocationsuggestionsIndex**
> \Ageras\Api\ClientAllocationSuggestionResult clientsAllocationsuggestionsIndex($client_id , $criteria)



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

$api_instance = new Ageras\Api\Api\ClientsApi();
$client_id = "client_id_example"; // string | 
$criteria = [
        'lead_id' => 56; // int | 
        'is_accepted' => false; // bool | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->clientsAllocationsuggestionsIndex($client_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientsAllocationsuggestionsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**|  |
 **lead_id** | **int**|  | [optional]
 **is_accepted** | **bool**|  | [optional] [default to false]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\ClientAllocationSuggestionResult**](../Model/ClientAllocationSuggestionResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientsBrowserpushsubscriptionsCreate**
> \Ageras\Api\BrowserPushSubscriptionResource clientsBrowserpushsubscriptionsCreate($client_id , $browser_push_subscription_resource)



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

$api_instance = new Ageras\Api\Api\ClientsApi();
$client_id = "client_id_example"; // string | 
$browser_push_subscription_resource = new \Ageras\Api\BrowserPushSubscriptionResource(); // \Ageras\Api\BrowserPushSubscriptionResource | 

try {
    $result = $api_instance->clientsBrowserpushsubscriptionsCreate($client_id , $browser_push_subscription_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientsBrowserpushsubscriptionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**|  |
 **browser_push_subscription_resource** | [**\Ageras\Api\BrowserPushSubscriptionResource**](../Model/\Ageras\Api\BrowserPushSubscriptionResource.md)|  |

### Return type

[**\Ageras\Api\BrowserPushSubscriptionResource**](../Model/BrowserPushSubscriptionResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientsGet**
> \Ageras\Api\ClientResource clientsGet($client_id )



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

$api_instance = new Ageras\Api\Api\ClientsApi();
$client_id = "client_id_example"; // string | 

try {
    $result = $api_instance->clientsGet($client_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**|  |

### Return type

[**\Ageras\Api\ClientResource**](../Model/ClientResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientsUpdate**
> \Ageras\Api\ClientResource clientsUpdate($client_id , $client_resource)



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

$api_instance = new Ageras\Api\Api\ClientsApi();
$client_id = "client_id_example"; // string | 
$client_resource = new \Ageras\Api\ClientResource(); // \Ageras\Api\ClientResource | 

try {
    $result = $api_instance->clientsUpdate($client_id , $client_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**|  |
 **client_resource** | [**\Ageras\Api\ClientResource**](../Model/\Ageras\Api\ClientResource.md)|  |

### Return type

[**\Ageras\Api\ClientResource**](../Model/ClientResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

