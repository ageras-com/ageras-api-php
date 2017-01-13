# Ageras\Api\PaymentsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentsCardsGet**](PaymentsApi.md#paymentsCardsGet) | **GET** /payments/cards/{payment_card_id} | Get a Partner from a given partner_id.
[**paymentsCardsGet2**](PaymentsApi.md#paymentsCardsGet2) | **GET** /payments/{payment_id}/cards/{payment_card_id} | Get a Partner from a given partner_id.
[**paymentsCardsIndex**](PaymentsApi.md#paymentsCardsIndex) | **GET** /payments/cards | List payment cards.
[**paymentsEpayCardsCreate**](PaymentsApi.md#paymentsEpayCardsCreate) | **POST** /payments/epay/cards | Create an epay payment card.
[**paymentsEpayWindowCreate**](PaymentsApi.md#paymentsEpayWindowCreate) | **POST** /payments/epay/window | Create epay window.


# **paymentsCardsGet**
> \Ageras\Api\PaymentCardResource paymentsCardsGet($payment_card_id)

Get a Partner from a given partner_id.

Get a Partner from a given partner_id.

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

$api_instance = new Ageras\Api\Api\PaymentsApi();
$payment_card_id = "payment_card_id_example"; // string | 

try {
    $result = $api_instance->paymentsCardsGet($payment_card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsCardsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_card_id** | **string**|  |

### Return type

[**\Ageras\Api\PaymentCardResource**](../Model/PaymentCardResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentsCardsGet2**
> \Ageras\Api\PaymentCardResource paymentsCardsGet2($payment_id, $payment_card_id)

Get a Partner from a given partner_id.

Get a Partner from a given partner_id.

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

$api_instance = new Ageras\Api\Api\PaymentsApi();
$payment_id = "payment_id_example"; // string | 
$payment_card_id = "payment_card_id_example"; // string | 

try {
    $result = $api_instance->paymentsCardsGet2($payment_id, $payment_card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsCardsGet2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **string**|  |
 **payment_card_id** | **string**|  |

### Return type

[**\Ageras\Api\PaymentCardResource**](../Model/PaymentCardResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentsCardsIndex**
> \Ageras\Api\PaymentCardResult paymentsCardsIndex($partner_id, $limit, $page, $query)

List payment cards.

List payment cards.

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

$api_instance = new Ageras\Api\Api\PaymentsApi();
$partner_id = 56; // int | Partner id for the partner payment cards to filter by.
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->paymentsCardsIndex($partner_id, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsCardsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **int**| Partner id for the partner payment cards to filter by. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\PaymentCardResult**](../Model/PaymentCardResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentsEpayCardsCreate**
> \Ageras\Api\PaymentCardResource paymentsEpayCardsCreate($payment_card_resource)

Create an epay payment card.

Create an epay payment card.

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

$api_instance = new Ageras\Api\Api\PaymentsApi();
$payment_card_resource = new \Ageras\Api\PaymentCardResource(); // \Ageras\Api\PaymentCardResource | 

try {
    $result = $api_instance->paymentsEpayCardsCreate($payment_card_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsEpayCardsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_card_resource** | [**\Ageras\Api\PaymentCardResource**](../Model/\Ageras\Api\PaymentCardResource.md)|  |

### Return type

[**\Ageras\Api\PaymentCardResource**](../Model/PaymentCardResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentsEpayWindowCreate**
> \Ageras\Api\PaymentWindowResource paymentsEpayWindowCreate($payment_window_resource)

Create epay window.

Create epay window.

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

$api_instance = new Ageras\Api\Api\PaymentsApi();
$payment_window_resource = new \Ageras\Api\PaymentWindowResource(); // \Ageras\Api\PaymentWindowResource | 

try {
    $result = $api_instance->paymentsEpayWindowCreate($payment_window_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsEpayWindowCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_window_resource** | [**\Ageras\Api\PaymentWindowResource**](../Model/\Ageras\Api\PaymentWindowResource.md)|  |

### Return type

[**\Ageras\Api\PaymentWindowResource**](../Model/PaymentWindowResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

