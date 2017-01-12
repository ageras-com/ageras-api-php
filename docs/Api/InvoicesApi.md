# Swagger\Client\InvoicesApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invoicesGet**](InvoicesApi.md#invoicesGet) | **GET** /invoices/{invoice_id} | Get an Invoice from a given invoice_id.
[**invoicesIndex**](InvoicesApi.md#invoicesIndex) | **GET** /invoices | Search and find invoices by specific criterias.


# **invoicesGet**
> \Swagger\Client\Model\InvoiceResource invoicesGet($invoice_id)

Get an Invoice from a given invoice_id.

Get an Invoice from a given invoice_id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('jwt', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('jwt', 'Bearer');
// Configure HTTP basic authorization: login
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\InvoicesApi();
$invoice_id = "invoice_id_example"; // string | 

try {
    $result = $api_instance->invoicesGet($invoice_id);
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

[**\Swagger\Client\Model\InvoiceResource**](../Model/InvoiceResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesIndex**
> \Swagger\Client\Model\InvoiceResult invoicesIndex($invoice_id, $partner_id, $is_paid, $is_overdue, $sort, $limit, $page, $query)

Search and find invoices by specific criterias.

Search and find invoices by specific criterias.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('jwt', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('jwt', 'Bearer');
// Configure HTTP basic authorization: login
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\InvoicesApi();
$invoice_id = "invoice_id_example"; // string | Invoice Id.
$partner_id = "partner_id_example"; // string | Filter Invoices by a given Partner.
$is_paid = false; // bool | Filter invoices by whether or not they are paid.
$is_overdue = false; // bool | Filter invoices by whether they are overdue or not. An overdue is an invoice where the payment date has been reached but the invoice hasn't been paid.
$sort = "sort_example"; // string | Desired sorting.
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->invoicesIndex($invoice_id, $partner_id, $is_paid, $is_overdue, $sort, $limit, $page, $query);
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
 **is_paid** | **bool**| Filter invoices by whether or not they are paid. | [optional] [default to false]
 **is_overdue** | **bool**| Filter invoices by whether they are overdue or not. An overdue is an invoice where the payment date has been reached but the invoice hasn&#39;t been paid. | [optional] [default to false]
 **sort** | **string**| Desired sorting. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\InvoiceResult**](../Model/InvoiceResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

