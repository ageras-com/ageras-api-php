# Ageras\Api\NotificationsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**notificationsActionsCreate**](NotificationsApi.md#notificationsActionsCreate) | **POST** /notifications/actions | Perform an action on one or more notifications
[**notificationsActionsCreate2**](NotificationsApi.md#notificationsActionsCreate2) | **POST** /notifications/{notification_id}/actions | Perform an action on one or more notifications
[**notificationsGet**](NotificationsApi.md#notificationsGet) | **GET** /notifications/{notification_id} | Get single notification
[**notificationsIndex**](NotificationsApi.md#notificationsIndex) | **GET** /notifications | List notifications


# **notificationsActionsCreate**
> \Ageras\Api\Model\NotificationResource notificationsActionsCreate($notification_action_resource)

Perform an action on one or more notifications

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

$api_instance = new Ageras\Api\Api\NotificationsApi();
$notification_action_resource = new \Ageras\Api\Model\NotificationActionResource(); // \Ageras\Api\Model\NotificationActionResource | 

try {
    $result = $api_instance->notificationsActionsCreate($notification_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->notificationsActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_action_resource** | [**\Ageras\Api\Model\NotificationActionResource**](../Model/NotificationActionResource.md)|  |

### Return type

[**\Ageras\Api\Model\NotificationResource**](../Model/NotificationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationsActionsCreate2**
> \Ageras\Api\Model\NotificationResource notificationsActionsCreate2($notification_id , $notification_action_resource)

Perform an action on one or more notifications

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

$api_instance = new Ageras\Api\Api\NotificationsApi();
$notification_id = "notification_id_example"; // string | 
$notification_action_resource = new \Ageras\Api\Model\NotificationActionResource(); // \Ageras\Api\Model\NotificationActionResource | 

try {
    $result = $api_instance->notificationsActionsCreate2($notification_id , $notification_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->notificationsActionsCreate2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **string**|  |
 **notification_action_resource** | [**\Ageras\Api\Model\NotificationActionResource**](../Model/NotificationActionResource.md)|  |

### Return type

[**\Ageras\Api\Model\NotificationResource**](../Model/NotificationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationsGet**
> \Ageras\Api\Model\NotificationResource notificationsGet($notification_id )

Get single notification

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

$api_instance = new Ageras\Api\Api\NotificationsApi();
$notification_id = "notification_id_example"; // string | 

try {
    $result = $api_instance->notificationsGet($notification_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->notificationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **string**|  |

### Return type

[**\Ageras\Api\Model\NotificationResource**](../Model/NotificationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationsIndex**
> \Ageras\Api\Model\NotificationResult notificationsIndex($criteria)

List notifications

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

$api_instance = new Ageras\Api\Api\NotificationsApi();
$criteria = [
        'geo_code' => "geo_code_example"; // string | Geo Code
        'sort' => "relevance"; // string | Sort notifications
        'created_after' => "created_after_example"; // string | Only show notifications created after a given date
        'partner_user_id' => "partner_user_id_example"; // string | Id's of the partner users to filter
        'client_id' => "client_id_example"; // string | Id's of the clients to filter
        'employee_id' => "employee_id_example"; // string | Id's of the employees to filter
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->notificationsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->notificationsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geo_code** | **string**| Geo Code | [optional]
 **sort** | **string**| Sort notifications | [optional] [default to relevance]
 **created_after** | **string**| Only show notifications created after a given date | [optional]
 **partner_user_id** | **string**| Id&#39;s of the partner users to filter | [optional]
 **client_id** | **string**| Id&#39;s of the clients to filter | [optional]
 **employee_id** | **string**| Id&#39;s of the employees to filter | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\Model\NotificationResult**](../Model/NotificationResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

