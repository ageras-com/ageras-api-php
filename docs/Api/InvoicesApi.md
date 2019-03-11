# Ageras\Api\InvoicesApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invoicesGet**](InvoicesApi.md#invoicesGet) | **GET** /invoices/{invoice_id} | Get an Invoice from a given invoice_id.
[**invoicesIndex**](InvoicesApi.md#invoicesIndex) | **GET** /invoices | Search and find invoices by specific criterias.
[**invoicesRefundrequestsActionsCreate**](InvoicesApi.md#invoicesRefundrequestsActionsCreate) | **POST** /invoices/{invoice_id}/refundrequests/{voucher_refund_request_id}/actions | Perform an action on a refund reuqest.
[**invoicesRefundrequestsCreate**](InvoicesApi.md#invoicesRefundrequestsCreate) | **POST** /invoices/{invoice_id}/refundrequests | Create refund request for a given invoice_id.
[**invoicesRefundrequestsGet**](InvoicesApi.md#invoicesRefundrequestsGet) | **GET** /invoices/refundrequests/{voucher_refund_request_id} | Get a refund request by ID.
[**invoicesRefundrequestsGet2**](InvoicesApi.md#invoicesRefundrequestsGet2) | **GET** /invoices/{invoice_id}/refundrequests/{voucher_refund_request_id} | Get a refund request by ID.
[**invoicesRefundrequestsIndex**](InvoicesApi.md#invoicesRefundrequestsIndex) | **GET** /invoices/refundrequests | Get refund requests from a given invoice_id.
[**invoicesRefundrequestsIndex2**](InvoicesApi.md#invoicesRefundrequestsIndex2) | **GET** /invoices/{voucher_id}/refundrequests | Get refund requests from a given invoice_id.


# **invoicesGet**
> \Ageras\Api\InvoiceResource invoicesGet($invoice_id )

Get an Invoice from a given invoice_id.

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

$api_instance = new Ageras\Api\Api\InvoicesApi();
$invoice_id = "invoice_id_example"; // string | 

try {
    $result = $api_instance->invoicesGet($invoice_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **string**|  |

### Return type

[**\Ageras\Api\InvoiceResource**](../Model/InvoiceResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesIndex**
> \Ageras\Api\InvoiceResult invoicesIndex($criteria)

Search and find invoices by specific criterias.

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

$api_instance = new Ageras\Api\Api\InvoicesApi();
$criteria = [
        'invoice_id' => "invoice_id_example"; // string | Invoice Id.
        'partner_id' => "partner_id_example"; // string | Filter Invoices by a given Partner.
        'client_id' => "client_id_example"; // string | Filter Invoices by a given Client.
        'is_paid' => false; // bool | Filter invoices by whether or not they are paid.
        'is_overdue' => false; // bool | Filter invoices by whether they are overdue or not. An overdue is an invoice where the payment date has been reached but the invoice hasn't been paid.
        'sort' => "created_at"; // string | Desired sorting.
        'geo_code' => "geo_code_example"; // string | Geographic Location Code.
        'invoice_number' => "invoice_number_example"; // string | Invoice Number.
        'has_subscription_line_item' => false; // bool | Filter invoices by whether they are related to subscription or not.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->invoicesIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **string**| Invoice Id. | [optional]
 **partner_id** | **string**| Filter Invoices by a given Partner. | [optional]
 **client_id** | **string**| Filter Invoices by a given Client. | [optional]
 **is_paid** | **bool**| Filter invoices by whether or not they are paid. | [optional] [default to false]
 **is_overdue** | **bool**| Filter invoices by whether they are overdue or not. An overdue is an invoice where the payment date has been reached but the invoice hasn&#39;t been paid. | [optional] [default to false]
 **sort** | **string**| Desired sorting. | [optional] [default to created_at]
 **geo_code** | **string**| Geographic Location Code. | [optional]
 **invoice_number** | **string**| Invoice Number. | [optional]
 **has_subscription_line_item** | **bool**| Filter invoices by whether they are related to subscription or not. | [optional] [default to false]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\InvoiceResult**](../Model/InvoiceResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesRefundrequestsActionsCreate**
> \Ageras\Api\VoucherRefundRequestResource invoicesRefundrequestsActionsCreate($invoice_id,  $voucher_refund_request_id , $voucher_refund_request_action_resource)

Perform an action on a refund reuqest.

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

$api_instance = new Ageras\Api\Api\InvoicesApi();
$invoice_id = "invoice_id_example"; // string | 
$voucher_refund_request_id = "voucher_refund_request_id_example"; // string | 
$voucher_refund_request_action_resource = new \Ageras\Api\VoucherRefundRequestActionResource(); // \Ageras\Api\VoucherRefundRequestActionResource | 

try {
    $result = $api_instance->invoicesRefundrequestsActionsCreate($invoice_id,  $voucher_refund_request_id , $voucher_refund_request_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesRefundrequestsActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **string**|  |
 **voucher_refund_request_id** | **string**|  |
 **voucher_refund_request_action_resource** | [**\Ageras\Api\VoucherRefundRequestActionResource**](../Model/\Ageras\Api\VoucherRefundRequestActionResource.md)|  |

### Return type

[**\Ageras\Api\VoucherRefundRequestResource**](../Model/VoucherRefundRequestResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesRefundrequestsCreate**
> \Ageras\Api\VoucherRefundRequestResource invoicesRefundrequestsCreate($invoice_id , $voucher_refund_request_resource)

Create refund request for a given invoice_id.

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

$api_instance = new Ageras\Api\Api\InvoicesApi();
$invoice_id = "invoice_id_example"; // string | 
$voucher_refund_request_resource = new \Ageras\Api\VoucherRefundRequestResource(); // \Ageras\Api\VoucherRefundRequestResource | 

try {
    $result = $api_instance->invoicesRefundrequestsCreate($invoice_id , $voucher_refund_request_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesRefundrequestsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **string**|  |
 **voucher_refund_request_resource** | [**\Ageras\Api\VoucherRefundRequestResource**](../Model/\Ageras\Api\VoucherRefundRequestResource.md)|  |

### Return type

[**\Ageras\Api\VoucherRefundRequestResource**](../Model/VoucherRefundRequestResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesRefundrequestsGet**
> \Ageras\Api\VoucherRefundRequestResource invoicesRefundrequestsGet($voucher_refund_request_id )

Get a refund request by ID.

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

$api_instance = new Ageras\Api\Api\InvoicesApi();
$voucher_refund_request_id = "voucher_refund_request_id_example"; // string | 

try {
    $result = $api_instance->invoicesRefundrequestsGet($voucher_refund_request_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesRefundrequestsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_refund_request_id** | **string**|  |

### Return type

[**\Ageras\Api\VoucherRefundRequestResource**](../Model/VoucherRefundRequestResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesRefundrequestsGet2**
> \Ageras\Api\VoucherRefundRequestResource invoicesRefundrequestsGet2($invoice_id,  $voucher_refund_request_id )

Get a refund request by ID.

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

$api_instance = new Ageras\Api\Api\InvoicesApi();
$invoice_id = "invoice_id_example"; // string | 
$voucher_refund_request_id = "voucher_refund_request_id_example"; // string | 

try {
    $result = $api_instance->invoicesRefundrequestsGet2($invoice_id,  $voucher_refund_request_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesRefundrequestsGet2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **string**|  |
 **voucher_refund_request_id** | **string**|  |

### Return type

[**\Ageras\Api\VoucherRefundRequestResource**](../Model/VoucherRefundRequestResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesRefundrequestsIndex**
> \Ageras\Api\VoucherRefundRequestResult invoicesRefundrequestsIndex($criteria)

Get refund requests from a given invoice_id.

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

$api_instance = new Ageras\Api\Api\InvoicesApi();
$criteria = [
        'id' => "id_example"; // string | Voucher refund request id.
        'voucher_id' => "voucher_id_example"; // string | Invoice Id.
        'partner_id' => "partner_id_example"; // string | Filter Invoices by a given Partner.
        'sort' => "created_at"; // string | Desired sorting.
        'status' => "status_example"; // string | Voucher refund request status.
        'geo_code' => "geo_code_example"; // string | Partner geo code.
        'assigned_employee_id' => "assigned_employee_id_example"; // string | Filter by assigned employee ID.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->invoicesRefundrequestsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesRefundrequestsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Voucher refund request id. | [optional]
 **voucher_id** | **string**| Invoice Id. | [optional]
 **partner_id** | **string**| Filter Invoices by a given Partner. | [optional]
 **sort** | **string**| Desired sorting. | [optional] [default to created_at]
 **status** | **string**| Voucher refund request status. | [optional]
 **geo_code** | **string**| Partner geo code. | [optional]
 **assigned_employee_id** | **string**| Filter by assigned employee ID. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\VoucherRefundRequestResult**](../Model/VoucherRefundRequestResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesRefundrequestsIndex2**
> \Ageras\Api\VoucherRefundRequestResult invoicesRefundrequestsIndex2($voucher_id , $criteria)

Get refund requests from a given invoice_id.

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

$api_instance = new Ageras\Api\Api\InvoicesApi();
$voucher_id = "voucher_id_example"; // string | 
$criteria = [
        'id' => "id_example"; // string | Voucher refund request id.
        'partner_id' => "partner_id_example"; // string | Filter Invoices by a given Partner.
        'sort' => "created_at"; // string | Desired sorting.
        'status' => "status_example"; // string | Voucher refund request status.
        'geo_code' => "geo_code_example"; // string | Partner geo code.
        'assigned_employee_id' => "assigned_employee_id_example"; // string | Filter by assigned employee ID.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->invoicesRefundrequestsIndex2($voucher_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesRefundrequestsIndex2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_id** | **string**|  |
 **id** | **string**| Voucher refund request id. | [optional]
 **partner_id** | **string**| Filter Invoices by a given Partner. | [optional]
 **sort** | **string**| Desired sorting. | [optional] [default to created_at]
 **status** | **string**| Voucher refund request status. | [optional]
 **geo_code** | **string**| Partner geo code. | [optional]
 **assigned_employee_id** | **string**| Filter by assigned employee ID. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\VoucherRefundRequestResult**](../Model/VoucherRefundRequestResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

