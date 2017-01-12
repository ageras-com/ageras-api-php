# Swagger\Client\MlApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mlMatchingIndex**](MlApi.md#mlMatchingIndex) | **GET** /ml/matching | Match making


# **mlMatchingIndex**
> \Swagger\Client\Model\MatchResult mlMatchingIndex($partner_id, $lead_id, $limit, $page, $query)

Match making

Match making

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

$api_instance = new Swagger\Client\Api\MlApi();
$partner_id = "partner_id_example"; // string | Partner ID. @var int
$lead_id = "lead_id_example"; // string | Lead ID. @var int
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->mlMatchingIndex($partner_id, $lead_id, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MlApi->mlMatchingIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**| Partner ID. @var int | [optional]
 **lead_id** | **string**| Lead ID. @var int | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\MatchResult**](../Model/MatchResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

