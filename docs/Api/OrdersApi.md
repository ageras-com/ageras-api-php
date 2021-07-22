# Ageras\Api\OrdersApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ordersActionsCreate**](OrdersApi.md#ordersActionsCreate) | **POST** /orders/{order_id}/actions | 
[**ordersIndex**](OrdersApi.md#ordersIndex) | **GET** /orders | 


# **ordersActionsCreate**
> \Ageras\Api\OrderResource ordersActionsCreate($order_id , $order_action_resource)



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
$order_id = "order_id_example"; // string | 
$order_action_resource = new \Ageras\Api\OrderActionResource(); // \Ageras\Api\OrderActionResource | 

try {
    $result = $api_instance->ordersActionsCreate($order_id , $order_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**|  |
 **order_action_resource** | [**\Ageras\Api\OrderActionResource**](../Model/\Ageras\Api\OrderActionResource.md)|  |

### Return type

[**\Ageras\Api\OrderResource**](../Model/OrderResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersIndex**
> \Ageras\Api\OrderResult ordersIndex($criteria)



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
$criteria = [
        'order_id' => "order_id_example"; // string | Id of orders to retrieve
        'buyer_partner_id' => "buyer_partner_id_example"; // string | Partner Buyer id to filter by.
        'buyer_client_id' => "buyer_client_id_example"; // string | Client id to filter by.
        'geo_code' => "geo_code_example"; // string | Geographic Location Code.
        'status' => "status_example"; // string | Order status.
        'sort' => "sort_example"; // string | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->ordersIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Id of orders to retrieve | [optional]
 **buyer_partner_id** | **string**| Partner Buyer id to filter by. | [optional]
 **buyer_client_id** | **string**| Client id to filter by. | [optional]
 **geo_code** | **string**| Geographic Location Code. | [optional]
 **status** | **string**| Order status. | [optional]
 **sort** | **string**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\OrderResult**](../Model/OrderResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

