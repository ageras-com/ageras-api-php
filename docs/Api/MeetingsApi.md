# Ageras\Api\MeetingsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**meetingsActionsCreate**](MeetingsApi.md#meetingsActionsCreate) | **POST** /meetings/actions | 


# **meetingsActionsCreate**
> \Ageras\Api\MeetingActionResource meetingsActionsCreate($meeting_action_resource)



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

$api_instance = new Ageras\Api\Api\MeetingsApi();
$meeting_action_resource = new \Ageras\Api\MeetingActionResource(); // \Ageras\Api\MeetingActionResource | 

try {
    $result = $api_instance->meetingsActionsCreate($meeting_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingsActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_action_resource** | [**\Ageras\Api\MeetingActionResource**](../Model/\Ageras\Api\MeetingActionResource.md)|  |

### Return type

[**\Ageras\Api\MeetingActionResource**](../Model/MeetingActionResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

