# Ageras\Api\ConversationsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**conversationsCreate**](ConversationsApi.md#conversationsCreate) | **POST** /conversations | Create a new conversation.
[**conversationsGet**](ConversationsApi.md#conversationsGet) | **GET** /conversations/{conversation_id} | Get a conversations by conversation_id.
[**conversationsIndex**](ConversationsApi.md#conversationsIndex) | **GET** /conversations | List conversations.
[**conversationsMessagesCreate**](ConversationsApi.md#conversationsMessagesCreate) | **POST** /conversations/messages | Create a new message
[**conversationsMessagesCreate2**](ConversationsApi.md#conversationsMessagesCreate2) | **POST** /conversations/{conversation_id}/messages | Create a new message


# **conversationsCreate**
> \Ageras\Api\ConversationResource conversationsCreate($conversation_resource)

Create a new conversation.

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

$api_instance = new Ageras\Api\Api\ConversationsApi();
$conversation_resource = new \Ageras\Api\ConversationResource(); // \Ageras\Api\ConversationResource | 

try {
    $result = $api_instance->conversationsCreate($conversation_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_resource** | [**\Ageras\Api\ConversationResource**](../Model/\Ageras\Api\ConversationResource.md)|  |

### Return type

[**\Ageras\Api\ConversationResource**](../Model/ConversationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsGet**
> \Ageras\Api\ConversationResource conversationsGet($conversation_id )

Get a conversations by conversation_id.

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

$api_instance = new Ageras\Api\Api\ConversationsApi();
$conversation_id = "conversation_id_example"; // string | 

try {
    $result = $api_instance->conversationsGet($conversation_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_id** | **string**|  |

### Return type

[**\Ageras\Api\ConversationResource**](../Model/ConversationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsIndex**
> \Ageras\Api\ConversationResult conversationsIndex($criteria)

List conversations.

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

$api_instance = new Ageras\Api\Api\ConversationsApi();
$criteria = [
        'conversation_id' => "conversation_id_example"; // string | Conversation id.
        'project_id' => "project_id_example"; // string | Project id
        'partner_id' => "partner_id_example"; // string | Partner id
        'partner_user_id' => "partner_user_id_example"; // string | Partner user id
        'client_id' => "client_id_example"; // string | Client id
        'employee_id' => "employee_id_example"; // string | Employee id
        'lead_id' => "lead_id_example"; // string | Lead id
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->conversationsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_id** | **string**| Conversation id. | [optional]
 **project_id** | **string**| Project id | [optional]
 **partner_id** | **string**| Partner id | [optional]
 **partner_user_id** | **string**| Partner user id | [optional]
 **client_id** | **string**| Client id | [optional]
 **employee_id** | **string**| Employee id | [optional]
 **lead_id** | **string**| Lead id | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\ConversationResult**](../Model/ConversationResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsMessagesCreate**
> \Ageras\Api\MessageResource conversationsMessagesCreate($message_resource)

Create a new message

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

$api_instance = new Ageras\Api\Api\ConversationsApi();
$message_resource = new \Ageras\Api\MessageResource(); // \Ageras\Api\MessageResource | 

try {
    $result = $api_instance->conversationsMessagesCreate($message_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_resource** | [**\Ageras\Api\MessageResource**](../Model/\Ageras\Api\MessageResource.md)|  |

### Return type

[**\Ageras\Api\MessageResource**](../Model/MessageResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsMessagesCreate2**
> \Ageras\Api\MessageResource conversationsMessagesCreate2($conversation_id , $message_resource)

Create a new message

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

$api_instance = new Ageras\Api\Api\ConversationsApi();
$conversation_id = "conversation_id_example"; // string | 
$message_resource = new \Ageras\Api\MessageResource(); // \Ageras\Api\MessageResource | 

try {
    $result = $api_instance->conversationsMessagesCreate2($conversation_id , $message_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesCreate2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_id** | **string**|  |
 **message_resource** | [**\Ageras\Api\MessageResource**](../Model/\Ageras\Api\MessageResource.md)|  |

### Return type

[**\Ageras\Api\MessageResource**](../Model/MessageResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

