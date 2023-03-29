# Ageras\Api\VouchersApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vouchersActionsCreate**](VouchersApi.md#vouchersActionsCreate) | **POST** /vouchers/{voucher_id}/actions | 


# **vouchersActionsCreate**
> \Ageras\Api\VoucherActionResource vouchersActionsCreate($voucher_id , $voucher_action_resource)



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

$api_instance = new Ageras\Api\Api\VouchersApi();
$voucher_id = "voucher_id_example"; // string | 
$voucher_action_resource = new \Ageras\Api\VoucherActionResource(); // \Ageras\Api\VoucherActionResource | 

try {
    $result = $api_instance->vouchersActionsCreate($voucher_id , $voucher_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->vouchersActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_id** | **string**|  |
 **voucher_action_resource** | [**\Ageras\Api\VoucherActionResource**](../Model/\Ageras\Api\VoucherActionResource.md)|  |

### Return type

[**\Ageras\Api\VoucherActionResource**](../Model/VoucherActionResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

