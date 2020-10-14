# Ageras\Api\PhonesApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**phonesActionsCreate**](PhonesApi.md#phonesActionsCreate) | **POST** /phones/{phone_id}/actions | Phone actions.


# **phonesActionsCreate**
> \Ageras\Api\PhoneResource phonesActionsCreate($phone_id , $phone_action_resource)

Phone actions.

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

$api_instance = new Ageras\Api\Api\PhonesApi();
$phone_id = "phone_id_example"; // string | 
$phone_action_resource = new \Ageras\Api\PhoneActionResource(); // \Ageras\Api\PhoneActionResource | 

try {
    $result = $api_instance->phonesActionsCreate($phone_id , $phone_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesApi->phonesActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_id** | **string**|  |
 **phone_action_resource** | [**\Ageras\Api\PhoneActionResource**](../Model/\Ageras\Api\PhoneActionResource.md)|  |

### Return type

[**\Ageras\Api\PhoneResource**](../Model/PhoneResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

