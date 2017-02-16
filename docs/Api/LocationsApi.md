# Ageras\Api\LocationsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**locationsIndex**](LocationsApi.md#locationsIndex) | **GET** /locations | Search and find locations by different criterias.


# **locationsIndex**
> \Ageras\Api\LocationResult locationsIndex($code, $point, $sort, $limit, $page, $query)

Search and find locations by different criterias.

Search and find locations by different criterias.

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

$api_instance = new Ageras\Api\Api\LocationsApi();
$code = "code_example"; // string | Geographic Location Code.
$point = "point_example"; // string | Geo Location Point
$sort = "sort_example"; // string | Sort types for Locations
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->locationsIndex($code, $point, $sort, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Geographic Location Code. | [optional]
 **point** | **string**| Geo Location Point | [optional]
 **sort** | **string**| Sort types for Locations | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\LocationResult**](../Model/LocationResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

