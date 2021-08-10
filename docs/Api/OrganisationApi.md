# Ageras\Api\OrganisationApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**organisationEmployeesActionsCreate**](OrganisationApi.md#organisationEmployeesActionsCreate) | **POST** /organisation/employees/{employee_id}/actions | 
[**organisationEmployeesActionsCreate_0**](OrganisationApi.md#organisationEmployeesActionsCreate_0) | **POST** /organisation/{organisation_id}/employees/{employee_id}/actions | 
[**organisationEmployeesGet**](OrganisationApi.md#organisationEmployeesGet) | **GET** /organisation/employees/{employee_id} | 
[**organisationEmployeesGet_0**](OrganisationApi.md#organisationEmployeesGet_0) | **GET** /organisation/{organisation_id}/employees/{employee_id} | 
[**organisationEmployeesIndex**](OrganisationApi.md#organisationEmployeesIndex) | **GET** /organisation/employees | 
[**organisationEmployeesKpiIndex**](OrganisationApi.md#organisationEmployeesKpiIndex) | **GET** /organisation/employees/kpi | 
[**organisationEmployeesKpiIndex_0**](OrganisationApi.md#organisationEmployeesKpiIndex_0) | **GET** /organisation/organisation/employees/kpi | 
[**organisationEmployeesKpiIndex_1**](OrganisationApi.md#organisationEmployeesKpiIndex_1) | **GET** /organisation/{organisation_id}/employees/kpi | 
[**organisationEmployeesLeadpredictionsCreate**](OrganisationApi.md#organisationEmployeesLeadpredictionsCreate) | **POST** /organisation/employees/{employee_id}/leadpredictions | 
[**organisationEmployeesLeadpredictionsCreate_0**](OrganisationApi.md#organisationEmployeesLeadpredictionsCreate_0) | **POST** /organisation/{organisation_id}/employees/{employee_id}/leadpredictions | 
[**organisationEmployeesNotificationsIndex**](OrganisationApi.md#organisationEmployeesNotificationsIndex) | **GET** /organisation/employees/{employee_id}/notifications | 
[**organisationEmployeesNotificationsIndex_0**](OrganisationApi.md#organisationEmployeesNotificationsIndex_0) | **GET** /organisation/{organisation_id}/employees/{employee_id}/notifications | 
[**organisationFrontendemployeesIndex**](OrganisationApi.md#organisationFrontendemployeesIndex) | **GET** /organisation/frontendemployees | 


# **organisationEmployeesActionsCreate**
> \Ageras\Api\EmployeeResource organisationEmployeesActionsCreate($employee_id , $employee_action_resource)



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

$api_instance = new Ageras\Api\Api\OrganisationApi();
$employee_id = "employee_id_example"; // string | 
$employee_action_resource = new \Ageras\Api\EmployeeActionResource(); // \Ageras\Api\EmployeeActionResource | 

try {
    $result = $api_instance->organisationEmployeesActionsCreate($employee_id , $employee_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->organisationEmployeesActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**|  |
 **employee_action_resource** | [**\Ageras\Api\EmployeeActionResource**](../Model/\Ageras\Api\EmployeeActionResource.md)|  |

### Return type

[**\Ageras\Api\EmployeeResource**](../Model/EmployeeResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organisationEmployeesActionsCreate_0**
> \Ageras\Api\EmployeeResource organisationEmployeesActionsCreate_0($organisation_id,  $employee_id , $employee_action_resource)



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

$api_instance = new Ageras\Api\Api\OrganisationApi();
$organisation_id = "organisation_id_example"; // string | 
$employee_id = "employee_id_example"; // string | 
$employee_action_resource = new \Ageras\Api\EmployeeActionResource(); // \Ageras\Api\EmployeeActionResource | 

try {
    $result = $api_instance->organisationEmployeesActionsCreate_0($organisation_id,  $employee_id , $employee_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->organisationEmployeesActionsCreate_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisation_id** | **string**|  |
 **employee_id** | **string**|  |
 **employee_action_resource** | [**\Ageras\Api\EmployeeActionResource**](../Model/\Ageras\Api\EmployeeActionResource.md)|  |

### Return type

[**\Ageras\Api\EmployeeResource**](../Model/EmployeeResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organisationEmployeesGet**
> \Ageras\Api\EmployeeResource organisationEmployeesGet($employee_id )



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

$api_instance = new Ageras\Api\Api\OrganisationApi();
$employee_id = "employee_id_example"; // string | 

try {
    $result = $api_instance->organisationEmployeesGet($employee_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->organisationEmployeesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**|  |

### Return type

[**\Ageras\Api\EmployeeResource**](../Model/EmployeeResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organisationEmployeesGet_0**
> \Ageras\Api\EmployeeResource organisationEmployeesGet_0($organisation_id,  $employee_id )



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

$api_instance = new Ageras\Api\Api\OrganisationApi();
$organisation_id = "organisation_id_example"; // string | 
$employee_id = "employee_id_example"; // string | 

try {
    $result = $api_instance->organisationEmployeesGet_0($organisation_id,  $employee_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->organisationEmployeesGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisation_id** | **string**|  |
 **employee_id** | **string**|  |

### Return type

[**\Ageras\Api\EmployeeResource**](../Model/EmployeeResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organisationEmployeesIndex**
> \Ageras\Api\EmployeeResult organisationEmployeesIndex($criteria)



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

$api_instance = new Ageras\Api\Api\OrganisationApi();
$criteria = [
        'employee_id' => "employee_id_example"; // string | Id for the employees.
        'geo_code' => "geo_code_example"; // string | Geo Location Code ( ISO 3166 ).
        'limit' => 56; // int | Number of employees to return pr. page.
        'role_id' => "role_id_example"; // string | The Role that the employee is member of.
        'sort' => "first_name"; // string | Attribute to sort by.
        'is_active' => false; // bool | Active Employee Status ( true / false )
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->organisationEmployeesIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->organisationEmployeesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**| Id for the employees. | [optional]
 **geo_code** | **string**| Geo Location Code ( ISO 3166 ). | [optional]
 **limit** | **int**| Number of employees to return pr. page. | [optional]
 **role_id** | **string**| The Role that the employee is member of. | [optional]
 **sort** | **string**| Attribute to sort by. | [optional] [default to first_name]
 **is_active** | **bool**| Active Employee Status ( true / false ) | [optional] [default to false]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\EmployeeResult**](../Model/EmployeeResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organisationEmployeesKpiIndex**
> \Ageras\Api\EmployeeKpiResult organisationEmployeesKpiIndex($criteria)



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

$api_instance = new Ageras\Api\Api\OrganisationApi();
$criteria = [
        'employee_id' => "employee_id_example"; // string | Id for the employees.
        'geo_code' => "geo_code_example"; // string | Geo Location Code ( ISO 3166 ).
        'limit' => 56; // int | Number of employees to return pr. page.
        'role_id' => "role_id_example"; // string | The Role that the employee is member of.
        'sort' => "first_name"; // string | Attribute to sort by.
        'is_active' => false; // bool | Active Employee Status ( true / false )
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->organisationEmployeesKpiIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->organisationEmployeesKpiIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**| Id for the employees. | [optional]
 **geo_code** | **string**| Geo Location Code ( ISO 3166 ). | [optional]
 **limit** | **int**| Number of employees to return pr. page. | [optional]
 **role_id** | **string**| The Role that the employee is member of. | [optional]
 **sort** | **string**| Attribute to sort by. | [optional] [default to first_name]
 **is_active** | **bool**| Active Employee Status ( true / false ) | [optional] [default to false]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\EmployeeKpiResult**](../Model/EmployeeKpiResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organisationEmployeesKpiIndex_0**
> \Ageras\Api\EmployeeKpiResult organisationEmployeesKpiIndex_0($criteria)



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

$api_instance = new Ageras\Api\Api\OrganisationApi();
$criteria = [
        'employee_id' => "employee_id_example"; // string | Id for the employees.
        'geo_code' => "geo_code_example"; // string | Geo Location Code ( ISO 3166 ).
        'limit' => 56; // int | Number of employees to return pr. page.
        'role_id' => "role_id_example"; // string | The Role that the employee is member of.
        'sort' => "first_name"; // string | Attribute to sort by.
        'is_active' => false; // bool | Active Employee Status ( true / false )
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->organisationEmployeesKpiIndex_0($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->organisationEmployeesKpiIndex_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**| Id for the employees. | [optional]
 **geo_code** | **string**| Geo Location Code ( ISO 3166 ). | [optional]
 **limit** | **int**| Number of employees to return pr. page. | [optional]
 **role_id** | **string**| The Role that the employee is member of. | [optional]
 **sort** | **string**| Attribute to sort by. | [optional] [default to first_name]
 **is_active** | **bool**| Active Employee Status ( true / false ) | [optional] [default to false]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\EmployeeKpiResult**](../Model/EmployeeKpiResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organisationEmployeesKpiIndex_1**
> \Ageras\Api\EmployeeKpiResult organisationEmployeesKpiIndex_1($organisation_id , $criteria)



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

$api_instance = new Ageras\Api\Api\OrganisationApi();
$organisation_id = "organisation_id_example"; // string | 
$criteria = [
        'employee_id' => "employee_id_example"; // string | Id for the employees.
        'geo_code' => "geo_code_example"; // string | Geo Location Code ( ISO 3166 ).
        'limit' => 56; // int | Number of employees to return pr. page.
        'role_id' => "role_id_example"; // string | The Role that the employee is member of.
        'sort' => "first_name"; // string | Attribute to sort by.
        'is_active' => false; // bool | Active Employee Status ( true / false )
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->organisationEmployeesKpiIndex_1($organisation_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->organisationEmployeesKpiIndex_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisation_id** | **string**|  |
 **employee_id** | **string**| Id for the employees. | [optional]
 **geo_code** | **string**| Geo Location Code ( ISO 3166 ). | [optional]
 **limit** | **int**| Number of employees to return pr. page. | [optional]
 **role_id** | **string**| The Role that the employee is member of. | [optional]
 **sort** | **string**| Attribute to sort by. | [optional] [default to first_name]
 **is_active** | **bool**| Active Employee Status ( true / false ) | [optional] [default to false]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\EmployeeKpiResult**](../Model/EmployeeKpiResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organisationEmployeesLeadpredictionsCreate**
> \Ageras\Api\EmployeeLeadPredictionResource organisationEmployeesLeadpredictionsCreate($employee_id , $employee_lead_prediction_resource)



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

$api_instance = new Ageras\Api\Api\OrganisationApi();
$employee_id = "employee_id_example"; // string | 
$employee_lead_prediction_resource = new \Ageras\Api\EmployeeLeadPredictionResource(); // \Ageras\Api\EmployeeLeadPredictionResource | 

try {
    $result = $api_instance->organisationEmployeesLeadpredictionsCreate($employee_id , $employee_lead_prediction_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->organisationEmployeesLeadpredictionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**|  |
 **employee_lead_prediction_resource** | [**\Ageras\Api\EmployeeLeadPredictionResource**](../Model/\Ageras\Api\EmployeeLeadPredictionResource.md)|  |

### Return type

[**\Ageras\Api\EmployeeLeadPredictionResource**](../Model/EmployeeLeadPredictionResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organisationEmployeesLeadpredictionsCreate_0**
> \Ageras\Api\EmployeeLeadPredictionResource organisationEmployeesLeadpredictionsCreate_0($organisation_id,  $employee_id , $employee_lead_prediction_resource)



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

$api_instance = new Ageras\Api\Api\OrganisationApi();
$organisation_id = "organisation_id_example"; // string | 
$employee_id = "employee_id_example"; // string | 
$employee_lead_prediction_resource = new \Ageras\Api\EmployeeLeadPredictionResource(); // \Ageras\Api\EmployeeLeadPredictionResource | 

try {
    $result = $api_instance->organisationEmployeesLeadpredictionsCreate_0($organisation_id,  $employee_id , $employee_lead_prediction_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->organisationEmployeesLeadpredictionsCreate_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisation_id** | **string**|  |
 **employee_id** | **string**|  |
 **employee_lead_prediction_resource** | [**\Ageras\Api\EmployeeLeadPredictionResource**](../Model/\Ageras\Api\EmployeeLeadPredictionResource.md)|  |

### Return type

[**\Ageras\Api\EmployeeLeadPredictionResource**](../Model/EmployeeLeadPredictionResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organisationEmployeesNotificationsIndex**
> \Ageras\Api\EmployeeNotificationResult organisationEmployeesNotificationsIndex($employee_id , $criteria)



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

$api_instance = new Ageras\Api\Api\OrganisationApi();
$employee_id = "employee_id_example"; // string | 
$criteria = [
        'is_seen' => false; // bool | Filter by whether or not a notification has been seen.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->organisationEmployeesNotificationsIndex($employee_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->organisationEmployeesNotificationsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**|  |
 **is_seen** | **bool**| Filter by whether or not a notification has been seen. | [optional] [default to false]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\EmployeeNotificationResult**](../Model/EmployeeNotificationResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organisationEmployeesNotificationsIndex_0**
> \Ageras\Api\EmployeeNotificationResult organisationEmployeesNotificationsIndex_0($organisation_id,  $employee_id , $criteria)



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

$api_instance = new Ageras\Api\Api\OrganisationApi();
$organisation_id = "organisation_id_example"; // string | 
$employee_id = "employee_id_example"; // string | 
$criteria = [
        'is_seen' => false; // bool | Filter by whether or not a notification has been seen.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->organisationEmployeesNotificationsIndex_0($organisation_id,  $employee_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->organisationEmployeesNotificationsIndex_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisation_id** | **string**|  |
 **employee_id** | **string**|  |
 **is_seen** | **bool**| Filter by whether or not a notification has been seen. | [optional] [default to false]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\EmployeeNotificationResult**](../Model/EmployeeNotificationResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organisationFrontendemployeesIndex**
> \Ageras\Api\FrontendEmployeeResult organisationFrontendemployeesIndex($criteria)



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

$api_instance = new Ageras\Api\Api\OrganisationApi();
$criteria = [
        'frontend_employee_team_id' => "frontend_employee_team_id_example"; // string | IDs of frontend employee teams
        'employee_id' => "employee_id_example"; // string | IDs of employees this frontend employee is associated with
        'geo_code' => "geo_code_example"; // string | Geo Location Code ( ISO 3166 ).
        'is_active' => false; // bool | Return only frontend employees that have an active employee assigned
        'has_team' => false; // bool | Return only frontend employees that are assigned to a team
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->organisationFrontendemployeesIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->organisationFrontendemployeesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **frontend_employee_team_id** | **string**| IDs of frontend employee teams | [optional]
 **employee_id** | **string**| IDs of employees this frontend employee is associated with | [optional]
 **geo_code** | **string**| Geo Location Code ( ISO 3166 ). | [optional]
 **is_active** | **bool**| Return only frontend employees that have an active employee assigned | [optional] [default to false]
 **has_team** | **bool**| Return only frontend employees that are assigned to a team | [optional] [default to false]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\FrontendEmployeeResult**](../Model/FrontendEmployeeResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

