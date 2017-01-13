# Ageras\Api\OrganisationApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**organisationEmployeesGet**](OrganisationApi.md#organisationEmployeesGet) | **GET** /organisation/employees/{employee_id} | Get an employee by a given employee id.
[**organisationEmployeesGet2**](OrganisationApi.md#organisationEmployeesGet2) | **GET** /organisation/{organisation_id}/employees/{employee_id} | Get an employee by a given employee id.
[**organisationEmployeesIndex**](OrganisationApi.md#organisationEmployeesIndex) | **GET** /organisation/employees | List and Search for employees working at Ageras.


# **organisationEmployeesGet**
> \Ageras\Api\EmployeeResource organisationEmployeesGet($employee_id)

Get an employee by a given employee id.

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
    $result = $api_instance->organisationEmployeesGet($employee_id);
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

# **organisationEmployeesGet2**
> \Ageras\Api\EmployeeResource organisationEmployeesGet2($organisation_id, $employee_id)

Get an employee by a given employee id.

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
    $result = $api_instance->organisationEmployeesGet2($organisation_id, $employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->organisationEmployeesGet2: ', $e->getMessage(), PHP_EOL;
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
> \Ageras\Api\EmployeeResult organisationEmployeesIndex($employee_id, $geo_code, $limit, $role_id, $sort, $page, $query)

List and Search for employees working at Ageras.

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
$employee_id = "employee_id_example"; // string | Id for the employees.
$geo_code = "geo_code_example"; // string | Geo Location Code ( ISO 3166 ).
$limit = 56; // int | Number of employees to return pr. page.
$role_id = "role_id_example"; // string | The Role that the employee is member of.
$sort = "sort_example"; // string | Attribute to sort by.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->organisationEmployeesIndex($employee_id, $geo_code, $limit, $role_id, $sort, $page, $query);
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
 **sort** | **string**| Attribute to sort by. | [optional]
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

