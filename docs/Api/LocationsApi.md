# Swagger\Client\LocationsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**locationsIndex**](LocationsApi.md#locationsIndex) | **GET** /locations | Search and find locations by different criterias.


# **locationsIndex**
> \Swagger\Client\Model\LocationResult locationsIndex($geo_code, $limit, $page, $query)

Search and find locations by different criterias.

Search and find locations by different criterias.

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

$api_instance = new Swagger\Client\Api\LocationsApi();
$geo_code = "geo_code_example"; // string | Geographic Location Code.
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->locationsIndex($geo_code, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geo_code** | **string**| Geographic Location Code. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\LocationResult**](../Model/LocationResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

