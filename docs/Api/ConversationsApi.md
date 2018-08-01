# Ageras\Api\ConversationsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**conversationsActionsCreate**](ConversationsApi.md#conversationsActionsCreate) | **POST** /conversations/{conversation_id}/actions | Conversation action
[**conversationsAttachmentsCreate**](ConversationsApi.md#conversationsAttachmentsCreate) | **POST** /conversations/attachments | Create a new attachment
[**conversationsAttachmentsCreate2**](ConversationsApi.md#conversationsAttachmentsCreate2) | **POST** /conversations/{conversation_id}/attachments | Create a new attachment
[**conversationsAttachmentsGet**](ConversationsApi.md#conversationsAttachmentsGet) | **GET** /conversations/attachments/{attachment_id} | Get an attachment
[**conversationsAttachmentsGet2**](ConversationsApi.md#conversationsAttachmentsGet2) | **GET** /conversations/{conversation_id}/attachments/{attachment_id} | Get an attachment
[**conversationsAttachmentsIndex**](ConversationsApi.md#conversationsAttachmentsIndex) | **GET** /conversations/attachments | List conversation&#39;s attachments
[**conversationsAttachmentsIndex2**](ConversationsApi.md#conversationsAttachmentsIndex2) | **GET** /conversations/{conversation_id}/attachments | List conversation&#39;s attachments
[**conversationsCreate**](ConversationsApi.md#conversationsCreate) | **POST** /conversations | Create a new conversation.
[**conversationsGet**](ConversationsApi.md#conversationsGet) | **GET** /conversations/{conversation_id} | Get a conversations by conversation_id.
[**conversationsIndex**](ConversationsApi.md#conversationsIndex) | **GET** /conversations | List conversations.
[**conversationsMessagesAttachmentsCreate**](ConversationsApi.md#conversationsMessagesAttachmentsCreate) | **POST** /conversations/conversations/messages/attachments | Create a new attachment
[**conversationsMessagesAttachmentsCreate2**](ConversationsApi.md#conversationsMessagesAttachmentsCreate2) | **POST** /conversations/messages/attachments | Create a new attachment
[**conversationsMessagesAttachmentsCreate4**](ConversationsApi.md#conversationsMessagesAttachmentsCreate4) | **POST** /conversations/{conversation_id}/messages/attachments | Create a new attachment
[**conversationsMessagesAttachmentsGet**](ConversationsApi.md#conversationsMessagesAttachmentsGet) | **GET** /conversations/conversations/messages/attachments/{attachment_id} | get a message attachment
[**conversationsMessagesAttachmentsGet2**](ConversationsApi.md#conversationsMessagesAttachmentsGet2) | **GET** /conversations/messages/attachments/{attachment_id} | get a message attachment
[**conversationsMessagesAttachmentsGet4**](ConversationsApi.md#conversationsMessagesAttachmentsGet4) | **GET** /conversations/{conversation_id}/messages/attachments/{attachment_id} | get a message attachment
[**conversationsMessagesAttachmentsIndex**](ConversationsApi.md#conversationsMessagesAttachmentsIndex) | **GET** /conversations/conversations/messages/attachments | List message attachments
[**conversationsMessagesAttachmentsIndex2**](ConversationsApi.md#conversationsMessagesAttachmentsIndex2) | **GET** /conversations/messages/attachments | List message attachments
[**conversationsMessagesAttachmentsIndex4**](ConversationsApi.md#conversationsMessagesAttachmentsIndex4) | **GET** /conversations/{conversation_id}/messages/attachments | List message attachments
[**conversationsMessagesCreate**](ConversationsApi.md#conversationsMessagesCreate) | **POST** /conversations/messages | Create a new message
[**conversationsMessagesCreate2**](ConversationsApi.md#conversationsMessagesCreate2) | **POST** /conversations/{conversation_id}/messages | Create a new message
[**conversationsMessagesGet**](ConversationsApi.md#conversationsMessagesGet) | **GET** /conversations/messages/{message_id} | Get message by message_id
[**conversationsMessagesGet2**](ConversationsApi.md#conversationsMessagesGet2) | **GET** /conversations/{conversation_id}/messages/{message_id} | Get message by message_id
[**conversationsMessagesIndex**](ConversationsApi.md#conversationsMessagesIndex) | **GET** /conversations/messages | Get messages by conversation_id.
[**conversationsMessagesIndex2**](ConversationsApi.md#conversationsMessagesIndex2) | **GET** /conversations/{conversation_id}/messages | Get messages by conversation_id.


# **conversationsActionsCreate**
> \Ageras\Api\ConversationResource conversationsActionsCreate($conversation_id , $conversation_action_resource)

Conversation action

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
$conversation_action_resource = new \Ageras\Api\ConversationActionResource(); // \Ageras\Api\ConversationActionResource | 

try {
    $result = $api_instance->conversationsActionsCreate($conversation_id , $conversation_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_id** | **string**|  |
 **conversation_action_resource** | [**\Ageras\Api\ConversationActionResource**](../Model/\Ageras\Api\ConversationActionResource.md)|  |

### Return type

[**\Ageras\Api\ConversationResource**](../Model/ConversationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsAttachmentsCreate**
> \Ageras\Api\AttachmentResource conversationsAttachmentsCreate($attachment_resource)

Create a new attachment

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
$attachment_resource = new \Ageras\Api\AttachmentResource(); // \Ageras\Api\AttachmentResource | 

try {
    $result = $api_instance->conversationsAttachmentsCreate($attachment_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsAttachmentsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_resource** | [**\Ageras\Api\AttachmentResource**](../Model/\Ageras\Api\AttachmentResource.md)|  |

### Return type

[**\Ageras\Api\AttachmentResource**](../Model/AttachmentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsAttachmentsCreate2**
> \Ageras\Api\AttachmentResource conversationsAttachmentsCreate2($conversation_id , $attachment_resource)

Create a new attachment

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
$attachment_resource = new \Ageras\Api\AttachmentResource(); // \Ageras\Api\AttachmentResource | 

try {
    $result = $api_instance->conversationsAttachmentsCreate2($conversation_id , $attachment_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsAttachmentsCreate2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_id** | **string**|  |
 **attachment_resource** | [**\Ageras\Api\AttachmentResource**](../Model/\Ageras\Api\AttachmentResource.md)|  |

### Return type

[**\Ageras\Api\AttachmentResource**](../Model/AttachmentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsAttachmentsGet**
> \Ageras\Api\AttachmentResource conversationsAttachmentsGet($attachment_id )

Get an attachment

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
$attachment_id = "attachment_id_example"; // string | 

try {
    $result = $api_instance->conversationsAttachmentsGet($attachment_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsAttachmentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **string**|  |

### Return type

[**\Ageras\Api\AttachmentResource**](../Model/AttachmentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsAttachmentsGet2**
> \Ageras\Api\AttachmentResource conversationsAttachmentsGet2($conversation_id,  $attachment_id )

Get an attachment

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
$attachment_id = "attachment_id_example"; // string | 

try {
    $result = $api_instance->conversationsAttachmentsGet2($conversation_id,  $attachment_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsAttachmentsGet2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_id** | **string**|  |
 **attachment_id** | **string**|  |

### Return type

[**\Ageras\Api\AttachmentResource**](../Model/AttachmentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsAttachmentsIndex**
> \Ageras\Api\AttachmentResult conversationsAttachmentsIndex($criteria)

List conversation's attachments

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
        'conversation_id' => "conversation_id_example"; // string | Conversation id @var int
        'message_id' => "message_id_example"; // string | Message ID. @var int
        'sort' => "created_at"; // string | Sort messages
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->conversationsAttachmentsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsAttachmentsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_id** | **string**| Conversation id @var int | [optional]
 **message_id** | **string**| Message ID. @var int | [optional]
 **sort** | **string**| Sort messages | [optional] [default to created_at]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\AttachmentResult**](../Model/AttachmentResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsAttachmentsIndex2**
> \Ageras\Api\AttachmentResult conversationsAttachmentsIndex2($conversation_id , $criteria)

List conversation's attachments

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
$criteria = [
        'message_id' => "message_id_example"; // string | Message ID. @var int
        'sort' => "created_at"; // string | Sort messages
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->conversationsAttachmentsIndex2($conversation_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsAttachmentsIndex2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_id** | **string**|  |
 **message_id** | **string**| Message ID. @var int | [optional]
 **sort** | **string**| Sort messages | [optional] [default to created_at]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\AttachmentResult**](../Model/AttachmentResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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
        'sort' => "latest_activity"; // string | 
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
 **sort** | **string**|  | [optional] [default to latest_activity]
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

# **conversationsMessagesAttachmentsCreate**
> \Ageras\Api\AttachmentResource conversationsMessagesAttachmentsCreate($attachment_resource)

Create a new attachment

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
$attachment_resource = new \Ageras\Api\AttachmentResource(); // \Ageras\Api\AttachmentResource | 

try {
    $result = $api_instance->conversationsMessagesAttachmentsCreate($attachment_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesAttachmentsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_resource** | [**\Ageras\Api\AttachmentResource**](../Model/\Ageras\Api\AttachmentResource.md)|  |

### Return type

[**\Ageras\Api\AttachmentResource**](../Model/AttachmentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsMessagesAttachmentsCreate2**
> \Ageras\Api\AttachmentResource conversationsMessagesAttachmentsCreate2($attachment_resource)

Create a new attachment

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
$attachment_resource = new \Ageras\Api\AttachmentResource(); // \Ageras\Api\AttachmentResource | 

try {
    $result = $api_instance->conversationsMessagesAttachmentsCreate2($attachment_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesAttachmentsCreate2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_resource** | [**\Ageras\Api\AttachmentResource**](../Model/\Ageras\Api\AttachmentResource.md)|  |

### Return type

[**\Ageras\Api\AttachmentResource**](../Model/AttachmentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsMessagesAttachmentsCreate4**
> \Ageras\Api\AttachmentResource conversationsMessagesAttachmentsCreate4($conversation_id , $attachment_resource)

Create a new attachment

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
$attachment_resource = new \Ageras\Api\AttachmentResource(); // \Ageras\Api\AttachmentResource | 

try {
    $result = $api_instance->conversationsMessagesAttachmentsCreate4($conversation_id , $attachment_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesAttachmentsCreate4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_id** | **string**|  |
 **attachment_resource** | [**\Ageras\Api\AttachmentResource**](../Model/\Ageras\Api\AttachmentResource.md)|  |

### Return type

[**\Ageras\Api\AttachmentResource**](../Model/AttachmentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsMessagesAttachmentsGet**
> \Ageras\Api\AttachmentResource conversationsMessagesAttachmentsGet($attachment_id )

get a message attachment

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
$attachment_id = "attachment_id_example"; // string | 

try {
    $result = $api_instance->conversationsMessagesAttachmentsGet($attachment_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesAttachmentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **string**|  |

### Return type

[**\Ageras\Api\AttachmentResource**](../Model/AttachmentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsMessagesAttachmentsGet2**
> \Ageras\Api\AttachmentResource conversationsMessagesAttachmentsGet2($attachment_id )

get a message attachment

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
$attachment_id = "attachment_id_example"; // string | 

try {
    $result = $api_instance->conversationsMessagesAttachmentsGet2($attachment_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesAttachmentsGet2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **string**|  |

### Return type

[**\Ageras\Api\AttachmentResource**](../Model/AttachmentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsMessagesAttachmentsGet4**
> \Ageras\Api\AttachmentResource conversationsMessagesAttachmentsGet4($conversation_id,  $attachment_id )

get a message attachment

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
$attachment_id = "attachment_id_example"; // string | 

try {
    $result = $api_instance->conversationsMessagesAttachmentsGet4($conversation_id,  $attachment_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesAttachmentsGet4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_id** | **string**|  |
 **attachment_id** | **string**|  |

### Return type

[**\Ageras\Api\AttachmentResource**](../Model/AttachmentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsMessagesAttachmentsIndex**
> \Ageras\Api\AttachmentResult conversationsMessagesAttachmentsIndex($criteria)

List message attachments

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
        'conversation_id' => "conversation_id_example"; // string | Conversation id @var int
        'message_id' => "message_id_example"; // string | Message ID. @var int
        'sort' => "created_at"; // string | Sort messages
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->conversationsMessagesAttachmentsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesAttachmentsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_id** | **string**| Conversation id @var int | [optional]
 **message_id** | **string**| Message ID. @var int | [optional]
 **sort** | **string**| Sort messages | [optional] [default to created_at]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\AttachmentResult**](../Model/AttachmentResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsMessagesAttachmentsIndex2**
> \Ageras\Api\AttachmentResult conversationsMessagesAttachmentsIndex2($criteria)

List message attachments

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
        'conversation_id' => "conversation_id_example"; // string | Conversation id @var int
        'message_id' => "message_id_example"; // string | Message ID. @var int
        'sort' => "created_at"; // string | Sort messages
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->conversationsMessagesAttachmentsIndex2($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesAttachmentsIndex2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_id** | **string**| Conversation id @var int | [optional]
 **message_id** | **string**| Message ID. @var int | [optional]
 **sort** | **string**| Sort messages | [optional] [default to created_at]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\AttachmentResult**](../Model/AttachmentResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsMessagesAttachmentsIndex4**
> \Ageras\Api\AttachmentResult conversationsMessagesAttachmentsIndex4($conversation_id , $criteria)

List message attachments

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
$criteria = [
        'message_id' => "message_id_example"; // string | Message ID. @var int
        'sort' => "created_at"; // string | Sort messages
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->conversationsMessagesAttachmentsIndex4($conversation_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesAttachmentsIndex4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_id** | **string**|  |
 **message_id** | **string**| Message ID. @var int | [optional]
 **sort** | **string**| Sort messages | [optional] [default to created_at]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\AttachmentResult**](../Model/AttachmentResult.md)

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

# **conversationsMessagesGet**
> \Ageras\Api\MessageResource conversationsMessagesGet($message_id )

Get message by message_id

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
$message_id = "message_id_example"; // string | 

try {
    $result = $api_instance->conversationsMessagesGet($message_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_id** | **string**|  |

### Return type

[**\Ageras\Api\MessageResource**](../Model/MessageResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsMessagesGet2**
> \Ageras\Api\MessageResource conversationsMessagesGet2($conversation_id,  $message_id )

Get message by message_id

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
$message_id = "message_id_example"; // string | 

try {
    $result = $api_instance->conversationsMessagesGet2($conversation_id,  $message_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesGet2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_id** | **string**|  |
 **message_id** | **string**|  |

### Return type

[**\Ageras\Api\MessageResource**](../Model/MessageResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsMessagesIndex**
> \Ageras\Api\MessageResult conversationsMessagesIndex($criteria)

Get messages by conversation_id.

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
        'conversation_id' => "conversation_id_example"; // string | Conversation id @var int
        'message_id' => "message_id_example"; // string | Message ID. @var int
        'participant_id' => 56; // int | Message Participant ID. @var int
        'unread_by_participant_id' => 56; // int | Parameter for getting unread messages by participant_id @var int
        'sort' => "created_at"; // string | Sort messages
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->conversationsMessagesIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_id** | **string**| Conversation id @var int | [optional]
 **message_id** | **string**| Message ID. @var int | [optional]
 **participant_id** | **int**| Message Participant ID. @var int | [optional]
 **unread_by_participant_id** | **int**| Parameter for getting unread messages by participant_id @var int | [optional]
 **sort** | **string**| Sort messages | [optional] [default to created_at]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\MessageResult**](../Model/MessageResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationsMessagesIndex2**
> \Ageras\Api\MessageResult conversationsMessagesIndex2($conversation_id , $criteria)

Get messages by conversation_id.

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
$criteria = [
        'message_id' => "message_id_example"; // string | Message ID. @var int
        'participant_id' => 56; // int | Message Participant ID. @var int
        'unread_by_participant_id' => 56; // int | Parameter for getting unread messages by participant_id @var int
        'sort' => "created_at"; // string | Sort messages
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->conversationsMessagesIndex2($conversation_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesIndex2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_id** | **string**|  |
 **message_id** | **string**| Message ID. @var int | [optional]
 **participant_id** | **int**| Message Participant ID. @var int | [optional]
 **unread_by_participant_id** | **int**| Parameter for getting unread messages by participant_id @var int | [optional]
 **sort** | **string**| Sort messages | [optional] [default to created_at]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\MessageResult**](../Model/MessageResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

