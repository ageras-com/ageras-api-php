# Ageras\Api\SalesopportunitiesApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesOpportunitiesAggregationsIndex**](SalesopportunitiesApi.md#salesOpportunitiesAggregationsIndex) | **GET** /sales-opportunities/aggregations | Index aggregations.
[**salesOpportunitiesCreate**](SalesopportunitiesApi.md#salesOpportunitiesCreate) | **POST** /sales-opportunities | Create sale opportunity.
[**salesOpportunitiesDelete**](SalesopportunitiesApi.md#salesOpportunitiesDelete) | **DELETE** /sales-opportunities/{sales_opportunity_id} | Delete Sales opportunity.
[**salesOpportunitiesIndex**](SalesopportunitiesApi.md#salesOpportunitiesIndex) | **GET** /sales-opportunities | Get list sales pipelines opportunities.
[**salesOpportunitiesUpdate**](SalesopportunitiesApi.md#salesOpportunitiesUpdate) | **PUT** /sales-opportunities/{sales_opportunity_id} | Create Sales opportunity resource.


# **salesOpportunitiesAggregationsIndex**
> \Ageras\Api\Model\SalesOpportunityResult salesOpportunitiesAggregationsIndex($criteria)

Index aggregations.

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

$api_instance = new Ageras\Api\Api\SalesopportunitiesApi();
$criteria = [
        'employee_id' => 56; // int | Employee ID.
        'month' => "month_example"; // string | Filter by month.
        'limit' => 56; // int | Limit.
        'geo_code' => "geo_code_example"; // string | Opportunities by geo code.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->salesOpportunitiesAggregationsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesopportunitiesApi->salesOpportunitiesAggregationsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **int**| Employee ID. | [optional]
 **month** | **string**| Filter by month. | [optional]
 **limit** | **int**| Limit. | [optional]
 **geo_code** | **string**| Opportunities by geo code. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\Model\SalesOpportunityResult**](../Model/SalesOpportunityResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOpportunitiesCreate**
> \Ageras\Api\Model\SalesOpportunityResource salesOpportunitiesCreate($sales_opportunity_resource)

Create sale opportunity.

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

$api_instance = new Ageras\Api\Api\SalesopportunitiesApi();
$sales_opportunity_resource = new \Ageras\Api\Model\SalesOpportunityResource(); // \Ageras\Api\Model\SalesOpportunityResource | 

try {
    $result = $api_instance->salesOpportunitiesCreate($sales_opportunity_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesopportunitiesApi->salesOpportunitiesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_opportunity_resource** | [**\Ageras\Api\Model\SalesOpportunityResource**](../Model/\Ageras\Api\Model\SalesOpportunityResource.md)|  |

### Return type

[**\Ageras\Api\Model\SalesOpportunityResource**](../Model/SalesOpportunityResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOpportunitiesDelete**
> salesOpportunitiesDelete($sales_opportunity_id )

Delete Sales opportunity.

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

$api_instance = new Ageras\Api\Api\SalesopportunitiesApi();
$sales_opportunity_id = "sales_opportunity_id_example"; // string | 

try {
    $api_instance->salesOpportunitiesDelete($sales_opportunity_id );
} catch (Exception $e) {
    echo 'Exception when calling SalesopportunitiesApi->salesOpportunitiesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_opportunity_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOpportunitiesIndex**
> \Ageras\Api\Model\SalesOpportunityResult salesOpportunitiesIndex($criteria)

Get list sales pipelines opportunities.

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

$api_instance = new Ageras\Api\Api\SalesopportunitiesApi();
$criteria = [
        'employee_id' => 56; // int | Employee ID.
        'month' => "month_example"; // string | Filter by month.
        'limit' => 56; // int | Limit.
        'geo_code' => "geo_code_example"; // string | Opportunities by geo code.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->salesOpportunitiesIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesopportunitiesApi->salesOpportunitiesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **int**| Employee ID. | [optional]
 **month** | **string**| Filter by month. | [optional]
 **limit** | **int**| Limit. | [optional]
 **geo_code** | **string**| Opportunities by geo code. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\Model\SalesOpportunityResult**](../Model/SalesOpportunityResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOpportunitiesUpdate**
> \Ageras\Api\Model\SalesOpportunityResource salesOpportunitiesUpdate($sales_opportunity_id , $sales_opportunity_resource)

Create Sales opportunity resource.

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

$api_instance = new Ageras\Api\Api\SalesopportunitiesApi();
$sales_opportunity_id = "sales_opportunity_id_example"; // string | 
$sales_opportunity_resource = new \Ageras\Api\Model\SalesOpportunityResource(); // \Ageras\Api\Model\SalesOpportunityResource | 

try {
    $result = $api_instance->salesOpportunitiesUpdate($sales_opportunity_id , $sales_opportunity_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesopportunitiesApi->salesOpportunitiesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_opportunity_id** | **string**|  |
 **sales_opportunity_resource** | [**\Ageras\Api\Model\SalesOpportunityResource**](../Model/\Ageras\Api\Model\SalesOpportunityResource.md)|  |

### Return type

[**\Ageras\Api\Model\SalesOpportunityResource**](../Model/SalesOpportunityResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

