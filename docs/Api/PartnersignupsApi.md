# Ageras\Api\PartnersignupsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**partnersignupsActionsCreate**](PartnersignupsApi.md#partnersignupsActionsCreate) | **POST** /partnersignups/{partner_sign_up_id}/actions | 
[**partnersignupsCreate**](PartnersignupsApi.md#partnersignupsCreate) | **POST** /partnersignups | 
[**partnersignupsIndex**](PartnersignupsApi.md#partnersignupsIndex) | **GET** /partnersignups | 


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

# **partnersignupsIndex**
> \Ageras\Api\PartnerSignUpResult partnersignupsIndex($criteria)



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
$criteria = [
        'is_processed' => false; // bool | Get signups based on being processed.
        'processed_at_gte' => "processed_at_gte_example"; // string | Get signups processed at after a date.
        'processed_at_lte' => "processed_at_lte_example"; // string | Get signups processed at before a date.
        'expires_at_gte' => "expires_at_gte_example"; // string | Get signups expired at after a date.
        'expires_at_lte' => "expires_at_lte_example"; // string | Get signups expired at before a date.
        'geo_code' => "geo_code_example"; // string | Filter by geo codes.
        'industry_id' => "industry_id_example"; // string | Filter by industry.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersignupsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersignupsApi->partnersignupsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_processed** | **bool**| Get signups based on being processed. | [optional] [default to false]
 **processed_at_gte** | **string**| Get signups processed at after a date. | [optional]
 **processed_at_lte** | **string**| Get signups processed at before a date. | [optional]
 **expires_at_gte** | **string**| Get signups expired at after a date. | [optional]
 **expires_at_lte** | **string**| Get signups expired at before a date. | [optional]
 **geo_code** | **string**| Filter by geo codes. | [optional]
 **industry_id** | **string**| Filter by industry. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\PartnerSignUpResult**](../Model/PartnerSignUpResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

