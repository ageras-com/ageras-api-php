# Ageras\Api\CustomersApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customersActionsCreate**](CustomersApi.md#customersActionsCreate) | **POST** /customers/{client_id}/actions | 
[**customersPhoneverificationsCreate**](CustomersApi.md#customersPhoneverificationsCreate) | **POST** /customers/phoneverifications | 


# **customersActionsCreate**
> \Ageras\Api\PhoneVerificationResource customersActionsCreate($client_id , $phone_verification_action_resource)



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

$api_instance = new Ageras\Api\Api\CustomersApi();
$client_id = "client_id_example"; // string | 
$phone_verification_action_resource = new \Ageras\Api\PhoneVerificationActionResource(); // \Ageras\Api\PhoneVerificationActionResource | 

try {
    $result = $api_instance->customersActionsCreate($client_id , $phone_verification_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**|  |
 **phone_verification_action_resource** | [**\Ageras\Api\PhoneVerificationActionResource**](../Model/\Ageras\Api\PhoneVerificationActionResource.md)|  |

### Return type

[**\Ageras\Api\PhoneVerificationResource**](../Model/PhoneVerificationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersPhoneverificationsCreate**
> \Ageras\Api\PhoneVerificationResource customersPhoneverificationsCreate($phone_verification_resource)



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

$api_instance = new Ageras\Api\Api\CustomersApi();
$phone_verification_resource = new \Ageras\Api\PhoneVerificationResource(); // \Ageras\Api\PhoneVerificationResource | 

try {
    $result = $api_instance->customersPhoneverificationsCreate($phone_verification_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersPhoneverificationsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_verification_resource** | [**\Ageras\Api\PhoneVerificationResource**](../Model/\Ageras\Api\PhoneVerificationResource.md)|  |

### Return type

[**\Ageras\Api\PhoneVerificationResource**](../Model/PhoneVerificationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

