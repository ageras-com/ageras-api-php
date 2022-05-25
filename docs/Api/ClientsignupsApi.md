# Ageras\Api\ClientsignupsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clientsignupsActionsCreate**](ClientsignupsApi.md#clientsignupsActionsCreate) | **POST** /clientsignups/{client_sign_up_id}/actions | 
[**clientsignupsCreate**](ClientsignupsApi.md#clientsignupsCreate) | **POST** /clientsignups | 


# **clientsignupsActionsCreate**
> \Ageras\Api\ClientSignUpResource clientsignupsActionsCreate($client_sign_up_id , $client_sign_up_action_resource)



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

$api_instance = new Ageras\Api\Api\ClientsignupsApi();
$client_sign_up_id = "client_sign_up_id_example"; // string | 
$client_sign_up_action_resource = new \Ageras\Api\ClientSignUpActionResource(); // \Ageras\Api\ClientSignUpActionResource | 

try {
    $result = $api_instance->clientsignupsActionsCreate($client_sign_up_id , $client_sign_up_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsignupsApi->clientsignupsActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_sign_up_id** | **string**|  |
 **client_sign_up_action_resource** | [**\Ageras\Api\ClientSignUpActionResource**](../Model/\Ageras\Api\ClientSignUpActionResource.md)|  |

### Return type

[**\Ageras\Api\ClientSignUpResource**](../Model/ClientSignUpResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientsignupsCreate**
> \Ageras\Api\ClientSignUpResource clientsignupsCreate($client_sign_up_resource)



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

$api_instance = new Ageras\Api\Api\ClientsignupsApi();
$client_sign_up_resource = new \Ageras\Api\ClientSignUpResource(); // \Ageras\Api\ClientSignUpResource | 

try {
    $result = $api_instance->clientsignupsCreate($client_sign_up_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsignupsApi->clientsignupsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_sign_up_resource** | [**\Ageras\Api\ClientSignUpResource**](../Model/\Ageras\Api\ClientSignUpResource.md)|  |

### Return type

[**\Ageras\Api\ClientSignUpResource**](../Model/ClientSignUpResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

