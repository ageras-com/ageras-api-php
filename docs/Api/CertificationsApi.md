# Swagger\Client\CertificationsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**certificationsIndex**](CertificationsApi.md#certificationsIndex) | **GET** /certifications | Get all available certifications.


# **certificationsIndex**
> \Swagger\Client\Model\CertificationResult certificationsIndex($geo_code, $limit, $page, $industry_id, $query)

Get all available certifications.

Get all available certifications.

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

$api_instance = new Swagger\Client\Api\CertificationsApi();
$geo_code = "geo_code_example"; // string | 
$limit = 56; // int | 
$page = 56; // int | 
$industry_id = 56; // int | 
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->certificationsIndex($geo_code, $limit, $page, $industry_id, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificationsApi->certificationsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geo_code** | **string**|  | [optional]
 **limit** | **int**|  | [optional]
 **page** | **int**|  | [optional]
 **industry_id** | **int**|  | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\CertificationResult**](../Model/CertificationResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

