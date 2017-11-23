# Ageras\Api\ProductsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productsCreate**](ProductsApi.md#productsCreate) | **POST** /products | Create product.
[**productsIndex**](ProductsApi.md#productsIndex) | **GET** /products | List products.


# **productsCreate**
> \Ageras\Api\ProductResource productsCreate($product_resource)

Create product.

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

$api_instance = new Ageras\Api\Api\ProductsApi();
$product_resource = new \Ageras\Api\ProductResource(); // \Ageras\Api\ProductResource | 

try {
    $result = $api_instance->productsCreate($product_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_resource** | [**\Ageras\Api\ProductResource**](../Model/\Ageras\Api\ProductResource.md)|  |

### Return type

[**\Ageras\Api\ProductResource**](../Model/ProductResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsIndex**
> \Ageras\Api\ProductResult productsIndex($criteria)

List products.

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

$api_instance = new Ageras\Api\Api\ProductsApi();
$criteria = [
        'product_id' => 56; // int | Product id of Products to filter by.
        'employee_id' => 56; // int | Employee id of Products to filter by.
        'geo_code' => "geo_code_example"; // string | Geo code of Products to filter by.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->productsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product id of Products to filter by. | [optional]
 **employee_id** | **int**| Employee id of Products to filter by. | [optional]
 **geo_code** | **string**| Geo code of Products to filter by. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\ProductResult**](../Model/ProductResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

