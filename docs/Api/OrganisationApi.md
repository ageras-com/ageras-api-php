# Ageras\Api\OrganisationApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**organisationEmployeesActionsCreate**](OrganisationApi.md#organisationEmployeesActionsCreate) | **POST** /organisation/employees/{employee_id}/actions | Perform an employee action.
[**organisationEmployeesActionsCreate_0**](OrganisationApi.md#organisationEmployeesActionsCreate_0) | **POST** /organisation/{organisation_id}/employees/{employee_id}/actions | Perform an employee action.
[**organisationEmployeesGet**](OrganisationApi.md#organisationEmployeesGet) | **GET** /organisation/employees/{employee_id} | Get an employee by a given employee id.
[**organisationEmployeesGet_0**](OrganisationApi.md#organisationEmployeesGet_0) | **GET** /organisation/{organisation_id}/employees/{employee_id} | Get an employee by a given employee id.
[**organisationEmployeesIndex**](OrganisationApi.md#organisationEmployeesIndex) | **GET** /organisation/employees | List and Search for employees working at Ageras.
[**organisationEmployeesKpiIndex**](OrganisationApi.md#organisationEmployeesKpiIndex) | **GET** /organisation/employees/kpi | List employee KPIs.
[**organisationEmployeesKpiIndex_0**](OrganisationApi.md#organisationEmployeesKpiIndex_0) | **GET** /organisation/organisation/employees/kpi | List employee KPIs.
[**organisationEmployeesKpiIndex_1**](OrganisationApi.md#organisationEmployeesKpiIndex_1) | **GET** /organisation/{organisation_id}/employees/kpi | List employee KPIs.
[**organisationEmployeesLeadpredictionsCreate**](OrganisationApi.md#organisationEmployeesLeadpredictionsCreate) | **POST** /organisation/employees/{employee_id}/leadpredictions | Create an employee lead prediction.
[**organisationEmployeesLeadpredictionsCreate_0**](OrganisationApi.md#organisationEmployeesLeadpredictionsCreate_0) | **POST** /organisation/{organisation_id}/employees/{employee_id}/leadpredictions | Create an employee lead prediction.
[**organisationEmployeesNotificationsIndex**](OrganisationApi.md#organisationEmployeesNotificationsIndex) | **GET** /organisation/employees/{employee_id}/notifications | List employee notifications.
[**organisationEmployeesNotificationsIndex_0**](OrganisationApi.md#organisationEmployeesNotificationsIndex_0) | **GET** /organisation/{organisation_id}/employees/{employee_id}/notifications | List employee notifications.


# **organisationEmployeesActionsCreate**
> \Ageras\Api\EmployeeResource organisationEmployeesActionsCreate($employee_id , $employee_action_resource)

Perform an employee action.

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

Perform an employee action.

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

Get an employee by a given employee id.

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

Get an employee by a given employee id.

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

List and Search for employees working at Ageras.

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

List employee KPIs.

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

List employee KPIs.

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

List employee KPIs.

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

Create an employee lead prediction.

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

Create an employee lead prediction.

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

List employee notifications.

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

List employee notifications.

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

