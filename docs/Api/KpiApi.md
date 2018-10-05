# Ageras\Api\KpiApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**kpiIndex**](KpiApi.md#kpiIndex) | **GET** /kpi | List the different KPI&#39;s
[**kpiTargetsCreate**](KpiApi.md#kpiTargetsCreate) | **POST** /kpi/targets | Create kpi target
[**kpiValuesIndex**](KpiApi.md#kpiValuesIndex) | **GET** /kpi/values | Get employee performance KPIs.


# **kpiIndex**
> \Ageras\Api\KPIResult kpiIndex($criteria)

List the different KPI's

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

$api_instance = new Ageras\Api\Api\KpiApi();
$criteria = [
        'kpi_id' => "kpi_id_example"; // string | Identifiers for the kpi's
        'geo_code' => "geo_code_example"; // string | Geographic Location Code.
        'industry' => "industry_example"; // string | Industry code for the kpi
        'industry_id' => "industry_id_example"; // string | Industry id for the kpi
        'employee_id' => "employee_id_example"; // string | Employee Id
        'partner_id' => "partner_id_example"; // string | Partner Id
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->kpiIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpiApi->kpiIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpi_id** | **string**| Identifiers for the kpi&#39;s | [optional]
 **geo_code** | **string**| Geographic Location Code. | [optional]
 **industry** | **string**| Industry code for the kpi | [optional]
 **industry_id** | **string**| Industry id for the kpi | [optional]
 **employee_id** | **string**| Employee Id | [optional]
 **partner_id** | **string**| Partner Id | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\KPIResult**](../Model/KPIResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kpiTargetsCreate**
> \Ageras\Api\KpiTargetResource kpiTargetsCreate($kpi_target_resource)

Create kpi target

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

$api_instance = new Ageras\Api\Api\KpiApi();
$kpi_target_resource = new \Ageras\Api\KpiTargetResource(); // \Ageras\Api\KpiTargetResource | 

try {
    $result = $api_instance->kpiTargetsCreate($kpi_target_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpiApi->kpiTargetsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpi_target_resource** | [**\Ageras\Api\KpiTargetResource**](../Model/\Ageras\Api\KpiTargetResource.md)|  |

### Return type

[**\Ageras\Api\KpiTargetResource**](../Model/KpiTargetResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kpiValuesIndex**
> \Ageras\Api\KpiValueResult kpiValuesIndex($criteria)

Get employee performance KPIs.

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

$api_instance = new Ageras\Api\Api\KpiApi();
$criteria = [
        'kpi_identifier' => "kpi_identifier_example"; // string | Identifier for KPI.
        'employee_id' => "employee_id_example"; // string | Employee ID to get KPI values for.
        'temporal_scope' => "temporal_scope_example"; // string | Which scopes of time to retrieve KPI values for.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->kpiValuesIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpiApi->kpiValuesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpi_identifier** | **string**| Identifier for KPI. | [optional]
 **employee_id** | **string**| Employee ID to get KPI values for. | [optional]
 **temporal_scope** | **string**| Which scopes of time to retrieve KPI values for. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\KpiValueResult**](../Model/KpiValueResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

