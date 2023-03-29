# Ageras\Api\PrepaymentsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**prepaymentsCreate**](PrepaymentsApi.md#prepaymentsCreate) | **POST** /prepayments | 


# **prepaymentsCreate**
> \Ageras\Api\PrepaymentResource prepaymentsCreate($prepayment_resource)



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

$api_instance = new Ageras\Api\Api\PrepaymentsApi();
$prepayment_resource = new \Ageras\Api\PrepaymentResource(); // \Ageras\Api\PrepaymentResource | 

try {
    $result = $api_instance->prepaymentsCreate($prepayment_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentsApi->prepaymentsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prepayment_resource** | [**\Ageras\Api\PrepaymentResource**](../Model/\Ageras\Api\PrepaymentResource.md)|  |

### Return type

[**\Ageras\Api\PrepaymentResource**](../Model/PrepaymentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

