# Ageras\Api\PartnersignupsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**partnersignupsActionsCreate**](PartnersignupsApi.md#partnersignupsActionsCreate) | **POST** /partnersignups/{partner_sign_up_id}/actions | 
[**partnersignupsCreate**](PartnersignupsApi.md#partnersignupsCreate) | **POST** /partnersignups | 


# **partnersignupsActionsCreate**
> \Ageras\Api\PartnerSignUpResource partnersignupsActionsCreate($partner_sign_up_id , $partner_sign_up_action_resource)



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

$api_instance = new Ageras\Api\Api\PartnersignupsApi();
$partner_sign_up_id = "partner_sign_up_id_example"; // string | 
$partner_sign_up_action_resource = new \Ageras\Api\PartnerSignUpActionResource(); // \Ageras\Api\PartnerSignUpActionResource | 

try {
    $result = $api_instance->partnersignupsActionsCreate($partner_sign_up_id , $partner_sign_up_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersignupsApi->partnersignupsActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_sign_up_id** | **string**|  |
 **partner_sign_up_action_resource** | [**\Ageras\Api\PartnerSignUpActionResource**](../Model/\Ageras\Api\PartnerSignUpActionResource.md)|  |

### Return type

[**\Ageras\Api\PartnerSignUpResource**](../Model/PartnerSignUpResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersignupsCreate**
> \Ageras\Api\PartnerSignUpResource partnersignupsCreate($partner_sign_up_resource)



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

$api_instance = new Ageras\Api\Api\PartnersignupsApi();
$partner_sign_up_resource = new \Ageras\Api\PartnerSignUpResource(); // \Ageras\Api\PartnerSignUpResource | 

try {
    $result = $api_instance->partnersignupsCreate($partner_sign_up_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersignupsApi->partnersignupsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_sign_up_resource** | [**\Ageras\Api\PartnerSignUpResource**](../Model/\Ageras\Api\PartnerSignUpResource.md)|  |

### Return type

[**\Ageras\Api\PartnerSignUpResource**](../Model/PartnerSignUpResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

