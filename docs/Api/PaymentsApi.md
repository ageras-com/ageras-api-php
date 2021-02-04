# Ageras\Api\PaymentsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentsCardsCreate**](PaymentsApi.md#paymentsCardsCreate) | **POST** /payments/cards | Create a payment card.
[**paymentsCardsDelete**](PaymentsApi.md#paymentsCardsDelete) | **DELETE** /payments/cards/{card_id} | Delete a card for a given id.
[**paymentsCardsDelete_0**](PaymentsApi.md#paymentsCardsDelete_0) | **DELETE** /payments/{payment_id}/cards/{card_id} | Delete a card for a given id.
[**paymentsCardsGet**](PaymentsApi.md#paymentsCardsGet) | **GET** /payments/cards/{payment_card_id} | Get a Partner from a given partner_id.
[**paymentsCardsGet_0**](PaymentsApi.md#paymentsCardsGet_0) | **GET** /payments/{payment_id}/cards/{payment_card_id} | Get a Partner from a given partner_id.
[**paymentsCardsIndex**](PaymentsApi.md#paymentsCardsIndex) | **GET** /payments/cards | List payment cards.
[**paymentsMethodsActionsCreate**](PaymentsApi.md#paymentsMethodsActionsCreate) | **POST** /payments/methods/{payment_method_id}/actions | Execute an action on a payment method.
[**paymentsMethodsActionsCreate_0**](PaymentsApi.md#paymentsMethodsActionsCreate_0) | **POST** /payments/{payment_id}/methods/{payment_method_id}/actions | Execute an action on a payment method.


# **paymentsCardsCreate**
> \Ageras\Api\PaymentCardResource paymentsCardsCreate($payment_card_resource)

Create a payment card.

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
    $result = $api_instance->paymentsCardsCreate($payment_card_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsCardsCreate: ', $e->getMessage(), PHP_EOL;
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

# **paymentsCardsDelete**
> paymentsCardsDelete($card_id )

Delete a card for a given id.

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
$card_id = "card_id_example"; // string | 

try {
    $api_instance->paymentsCardsDelete($card_id );
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsCardsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentsCardsDelete_0**
> paymentsCardsDelete_0($payment_id,  $card_id )

Delete a card for a given id.

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
$card_id = "card_id_example"; // string | 

try {
    $api_instance->paymentsCardsDelete_0($payment_id,  $card_id );
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsCardsDelete_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **string**|  |
 **card_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentsCardsGet**
> \Ageras\Api\PaymentCardResource paymentsCardsGet($payment_card_id )

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
    $result = $api_instance->paymentsCardsGet($payment_card_id );
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

# **paymentsCardsGet_0**
> \Ageras\Api\PaymentCardResource paymentsCardsGet_0($payment_id,  $payment_card_id )

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
    $result = $api_instance->paymentsCardsGet_0($payment_id,  $payment_card_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsCardsGet_0: ', $e->getMessage(), PHP_EOL;
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
> \Ageras\Api\PaymentCardResult paymentsCardsIndex($criteria)

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
$criteria = [
        'payment_card_id' => "payment_card_id_example"; // string | Payment Card Id
        'partner_id' => "partner_id_example"; // string | Partner id for the payment cards to filter by.
        'partner_user_id' => "partner_user_id_example"; // string | Partner user id for the payment cards to filter by.
        'client_id' => "client_id_example"; // string | Client id for the payment cards to filter by.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->paymentsCardsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsCardsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_card_id** | **string**| Payment Card Id | [optional]
 **partner_id** | **string**| Partner id for the payment cards to filter by. | [optional]
 **partner_user_id** | **string**| Partner user id for the payment cards to filter by. | [optional]
 **client_id** | **string**| Client id for the payment cards to filter by. | [optional]
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

# **paymentsMethodsActionsCreate**
> \Ageras\Api\PaymentMethodResource paymentsMethodsActionsCreate($payment_method_id , $payment_method_action_resource)

Execute an action on a payment method.

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
$payment_method_id = "payment_method_id_example"; // string | 
$payment_method_action_resource = new \Ageras\Api\PaymentMethodActionResource(); // \Ageras\Api\PaymentMethodActionResource | 

try {
    $result = $api_instance->paymentsMethodsActionsCreate($payment_method_id , $payment_method_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsMethodsActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **string**|  |
 **payment_method_action_resource** | [**\Ageras\Api\PaymentMethodActionResource**](../Model/\Ageras\Api\PaymentMethodActionResource.md)|  |

### Return type

[**\Ageras\Api\PaymentMethodResource**](../Model/PaymentMethodResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentsMethodsActionsCreate_0**
> \Ageras\Api\PaymentMethodResource paymentsMethodsActionsCreate_0($payment_id,  $payment_method_id , $payment_method_action_resource)

Execute an action on a payment method.

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
$payment_method_id = "payment_method_id_example"; // string | 
$payment_method_action_resource = new \Ageras\Api\PaymentMethodActionResource(); // \Ageras\Api\PaymentMethodActionResource | 

try {
    $result = $api_instance->paymentsMethodsActionsCreate_0($payment_id,  $payment_method_id , $payment_method_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsMethodsActionsCreate_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **string**|  |
 **payment_method_id** | **string**|  |
 **payment_method_action_resource** | [**\Ageras\Api\PaymentMethodActionResource**](../Model/\Ageras\Api\PaymentMethodActionResource.md)|  |

### Return type

[**\Ageras\Api\PaymentMethodResource**](../Model/PaymentMethodResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

