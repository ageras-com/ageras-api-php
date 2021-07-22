# Ageras\Api\SoftconversionsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**softconversionsCreate**](SoftconversionsApi.md#softconversionsCreate) | **POST** /softconversions | 


# **softconversionsCreate**
> \Ageras\Api\SoftConversionResource softconversionsCreate($soft_conversion_resource)



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

$api_instance = new Ageras\Api\Api\SoftconversionsApi();
$soft_conversion_resource = new \Ageras\Api\SoftConversionResource(); // \Ageras\Api\SoftConversionResource | 

try {
    $result = $api_instance->softconversionsCreate($soft_conversion_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftconversionsApi->softconversionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **soft_conversion_resource** | [**\Ageras\Api\SoftConversionResource**](../Model/\Ageras\Api\SoftConversionResource.md)|  |

### Return type

[**\Ageras\Api\SoftConversionResource**](../Model/SoftConversionResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

