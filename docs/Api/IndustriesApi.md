# Swagger\Client\IndustriesApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**industriesIndex**](IndustriesApi.md#industriesIndex) | **GET** /industries | List Industries and filter by parent industry.


# **industriesIndex**
> \Swagger\Client\Model\IndustryResult industriesIndex($industry_id, $name, $geo_code, $status, $limit, $parent_industry_id, $page, $query)

List Industries and filter by parent industry.

List Industries and filter by parent industry.

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

$api_instance = new Swagger\Client\Api\IndustriesApi();
$industry_id = "industry_id_example"; // string | Industry ID.
$name = "name_example"; // string | Industry name in its native language.
$geo_code = "geo_code_example"; // string | Industry geo code origin.
$status = false; // bool | Determinate if industry is active or not.
$limit = 56; // int | Limit of industries per page.
$parent_industry_id = 56; // int | Parent industry to filter by.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->industriesIndex($industry_id, $name, $geo_code, $status, $limit, $parent_industry_id, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustriesApi->industriesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **industry_id** | **string**| Industry ID. | [optional]
 **name** | **string**| Industry name in its native language. | [optional]
 **geo_code** | **string**| Industry geo code origin. | [optional]
 **status** | **bool**| Determinate if industry is active or not. | [optional] [default to false]
 **limit** | **int**| Limit of industries per page. | [optional]
 **parent_industry_id** | **int**| Parent industry to filter by. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\IndustryResult**](../Model/IndustryResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

