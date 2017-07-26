# Ageras\Api\OrdersApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ordersActionsCreate**](OrdersApi.md#ordersActionsCreate) | **POST** /orders/actions | Coupon action


# **ordersActionsCreate**
> \Ageras\Api\OrderResource ordersActionsCreate($order_action_resource)

Coupon action

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

$api_instance = new Ageras\Api\Api\OrdersApi();
$order_action_resource = new \Ageras\Api\OrderActionResource(); // \Ageras\Api\OrderActionResource | 

try {
    $result = $api_instance->ordersActionsCreate($order_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_action_resource** | [**\Ageras\Api\OrderActionResource**](../Model/\Ageras\Api\OrderActionResource.md)|  |

### Return type

[**\Ageras\Api\OrderResource**](../Model/OrderResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

