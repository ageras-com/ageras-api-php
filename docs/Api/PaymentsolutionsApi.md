# Ageras\Api\PaymentsolutionsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentsolutionsIndex**](PaymentsolutionsApi.md#paymentsolutionsIndex) | **GET** /paymentsolutions | List payment solutions or get available payment solutions for partner filtering by partner_id.


# **paymentsolutionsIndex**
> \Ageras\Api\Model\PaymentSolutionResult paymentsolutionsIndex($criteria)

List payment solutions or get available payment solutions for partner filtering by partner_id.

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

$api_instance = new Ageras\Api\Api\PaymentsolutionsApi();
$criteria = [
        'partner_id' => "partner_id_example"; // string | Partner id for the payment solutions to filter by.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->paymentsolutionsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsolutionsApi->paymentsolutionsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**| Partner id for the payment solutions to filter by. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\Model\PaymentSolutionResult**](../Model/PaymentSolutionResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

