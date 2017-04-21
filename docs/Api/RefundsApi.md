# Ageras\Api\RefundsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**refundsCreate**](RefundsApi.md#refundsCreate) | **POST** /refunds | Post refund request.
[**refundsCreate2**](RefundsApi.md#refundsCreate2) | **POST** /refunds/{refund_id} | Post refund request.
[**refundsGet**](RefundsApi.md#refundsGet) | **GET** /refunds/{refund_id} | Get a single refund request.
[**refundsIndex**](RefundsApi.md#refundsIndex) | **GET** /refunds | List refund requests.


# **refundsCreate**
> \Ageras\Api\RefundResource refundsCreate()

Post refund request.

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

$api_instance = new Ageras\Api\Api\RefundsApi();

try {
    $result = $api_instance->refundsCreate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->refundsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ageras\Api\RefundResource**](../Model/RefundResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundsCreate2**
> \Ageras\Api\RefundResource refundsCreate2($refund_id )

Post refund request.

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

$api_instance = new Ageras\Api\Api\RefundsApi();
$refund_id = "refund_id_example"; // string | 

try {
    $result = $api_instance->refundsCreate2($refund_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->refundsCreate2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_id** | **string**|  |

### Return type

[**\Ageras\Api\RefundResource**](../Model/RefundResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundsGet**
> \Ageras\Api\RefundResource refundsGet($refund_id )

Get a single refund request.

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

$api_instance = new Ageras\Api\Api\RefundsApi();
$refund_id = "refund_id_example"; // string | 

try {
    $result = $api_instance->refundsGet($refund_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->refundsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_id** | **string**|  |

### Return type

[**\Ageras\Api\RefundResource**](../Model/RefundResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundsIndex**
> \Ageras\Api\RefundResult refundsIndex($criteria)

List refund requests.

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

$api_instance = new Ageras\Api\Api\RefundsApi();
$criteria = [
        'partner_id' => "partner_id_example"; // string | Partner ID. @var int
        'sort' => "created_at"; // string | Sort resource by. @var string
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->refundsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->refundsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**| Partner ID. @var int | [optional]
 **sort** | **string**| Sort resource by. @var string | [optional] [default to created_at]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\RefundResult**](../Model/RefundResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

