# Swagger\Client\TasksApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tasksCreate**](TasksApi.md#tasksCreate) | **POST** /tasks | Create a new task.
[**tasksDelete**](TasksApi.md#tasksDelete) | **DELETE** /tasks/{task_id} | Delete a given task by its task_id.
[**tasksGet**](TasksApi.md#tasksGet) | **GET** /tasks/{task_id} | Get a given task by its given task_id.
[**tasksIndex**](TasksApi.md#tasksIndex) | **GET** /tasks | List tasks by employee, asseigned_employee, etc.
[**tasksPrioritiesGet**](TasksApi.md#tasksPrioritiesGet) | **GET** /tasks/priorities/{priority_id} | Get a priority from a given id.
[**tasksPrioritiesGet2**](TasksApi.md#tasksPrioritiesGet2) | **GET** /tasks/{task_id}/priorities/{priority_id} | Get a priority from a given id.
[**tasksPrioritiesIndex**](TasksApi.md#tasksPrioritiesIndex) | **GET** /tasks/priorities | List priorities.
[**tasksStatusesGet**](TasksApi.md#tasksStatusesGet) | **GET** /tasks/statuses/{status_id} | Get a status from a status_id.
[**tasksStatusesGet2**](TasksApi.md#tasksStatusesGet2) | **GET** /tasks/{task_id}/statuses/{status_id} | Get a status from a status_id.
[**tasksStatusesIndex**](TasksApi.md#tasksStatusesIndex) | **GET** /tasks/statuses | List statuses.
[**tasksTaskablesCreate**](TasksApi.md#tasksTaskablesCreate) | **POST** /tasks/{task_id}/taskables | create a new taskable for a given task.
[**tasksTaskablesDelete**](TasksApi.md#tasksTaskablesDelete) | **DELETE** /tasks/{task_id}/taskables/{taskable_id} | delete a taskable and remove it from the given task.
[**tasksTaskablesGet**](TasksApi.md#tasksTaskablesGet) | **GET** /tasks/{task_id}/taskables/{taskable_id} | Get a taskable item from a given taskable id.
[**tasksTaskablesIndex**](TasksApi.md#tasksTaskablesIndex) | **GET** /tasks/{task_id}/taskables | List the taskables for a given task.
[**tasksUpdate**](TasksApi.md#tasksUpdate) | **PUT** /tasks/{task_id} | Update a given task by its task_id.


# **tasksCreate**
> \Swagger\Client\Model\TaskResource tasksCreate($task_resource)

Create a new task.

Create a new task.

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

$api_instance = new Swagger\Client\Api\TasksApi();
$task_resource = new \Swagger\Client\Model\TaskResource(); // \Swagger\Client\Model\TaskResource | 

try {
    $result = $api_instance->tasksCreate($task_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_resource** | [**\Swagger\Client\Model\TaskResource**](../Model/\Swagger\Client\Model\TaskResource.md)|  |

### Return type

[**\Swagger\Client\Model\TaskResource**](../Model/TaskResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tasksDelete**
> tasksDelete($task_id)

Delete a given task by its task_id.

Delete a given task by its task_id.

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

$api_instance = new Swagger\Client\Api\TasksApi();
$task_id = "task_id_example"; // string | 

try {
    $api_instance->tasksDelete($task_id);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tasksGet**
> \Swagger\Client\Model\TaskResource tasksGet($task_id)

Get a given task by its given task_id.

Get a given task by its given task_id.

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

$api_instance = new Swagger\Client\Api\TasksApi();
$task_id = "task_id_example"; // string | 

try {
    $result = $api_instance->tasksGet($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TaskResource**](../Model/TaskResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tasksIndex**
> \Swagger\Client\Model\TaskResult tasksIndex($task_id, $geo_code, $employee_id, $completed_by_employee_id, $assigned_employee_id, $partner_id, $lead_id, $status, $limit, $include_done, $page, $query)

List tasks by employee, asseigned_employee, etc.

List tasks by employee, asseigned_employee, etc.

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

$api_instance = new Swagger\Client\Api\TasksApi();
$task_id = "task_id_example"; // string | Task id's to filter by.
$geo_code = "geo_code_example"; // string | 
$employee_id = "employee_id_example"; // string | 
$completed_by_employee_id = "completed_by_employee_id_example"; // string | Filter by tasks that are completed by a given employee_id.
$assigned_employee_id = "assigned_employee_id_example"; // string | Filter by tasks that are assigned to a given employee_id.
$partner_id = "partner_id_example"; // string | Query tasks associated to a given partner.
$lead_id = "lead_id_example"; // string | Query tasks associated to a given lead.
$status = "status_example"; // string | Status for the tasks to be filtered by.
$limit = 56; // int | Number of resources to return.
$include_done = false; // bool | 
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->tasksIndex($task_id, $geo_code, $employee_id, $completed_by_employee_id, $assigned_employee_id, $partner_id, $lead_id, $status, $limit, $include_done, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Task id&#39;s to filter by. | [optional]
 **geo_code** | **string**|  | [optional]
 **employee_id** | **string**|  | [optional]
 **completed_by_employee_id** | **string**| Filter by tasks that are completed by a given employee_id. | [optional]
 **assigned_employee_id** | **string**| Filter by tasks that are assigned to a given employee_id. | [optional]
 **partner_id** | **string**| Query tasks associated to a given partner. | [optional]
 **lead_id** | **string**| Query tasks associated to a given lead. | [optional]
 **status** | **string**| Status for the tasks to be filtered by. | [optional]
 **limit** | **int**| Number of resources to return. | [optional]
 **include_done** | **bool**|  | [optional] [default to false]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\TaskResult**](../Model/TaskResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tasksPrioritiesGet**
> \Swagger\Client\Model\TaskPriorityResource tasksPrioritiesGet($priority_id)

Get a priority from a given id.

Get a priority from a given id.

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

$api_instance = new Swagger\Client\Api\TasksApi();
$priority_id = "priority_id_example"; // string | 

try {
    $result = $api_instance->tasksPrioritiesGet($priority_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksPrioritiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **priority_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TaskPriorityResource**](../Model/TaskPriorityResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tasksPrioritiesGet2**
> \Swagger\Client\Model\TaskPriorityResource tasksPrioritiesGet2($task_id, $priority_id)

Get a priority from a given id.

Get a priority from a given id.

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

$api_instance = new Swagger\Client\Api\TasksApi();
$task_id = "task_id_example"; // string | 
$priority_id = "priority_id_example"; // string | 

try {
    $result = $api_instance->tasksPrioritiesGet2($task_id, $priority_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksPrioritiesGet2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**|  |
 **priority_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TaskPriorityResource**](../Model/TaskPriorityResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tasksPrioritiesIndex**
> \Swagger\Client\Model\TaskPriorityResult tasksPrioritiesIndex($priority_id, $limit, $page, $query)

List priorities.

List priorities.

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

$api_instance = new Swagger\Client\Api\TasksApi();
$priority_id = "priority_id_example"; // string | 
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->tasksPrioritiesIndex($priority_id, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksPrioritiesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **priority_id** | **string**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\TaskPriorityResult**](../Model/TaskPriorityResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tasksStatusesGet**
> \Swagger\Client\Model\TaskStatusResource tasksStatusesGet($status_id)

Get a status from a status_id.

Get a status from a status_id.

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

$api_instance = new Swagger\Client\Api\TasksApi();
$status_id = "status_id_example"; // string | 

try {
    $result = $api_instance->tasksStatusesGet($status_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksStatusesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TaskStatusResource**](../Model/TaskStatusResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tasksStatusesGet2**
> \Swagger\Client\Model\TaskStatusResource tasksStatusesGet2($task_id, $status_id)

Get a status from a status_id.

Get a status from a status_id.

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

$api_instance = new Swagger\Client\Api\TasksApi();
$task_id = "task_id_example"; // string | 
$status_id = "status_id_example"; // string | 

try {
    $result = $api_instance->tasksStatusesGet2($task_id, $status_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksStatusesGet2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**|  |
 **status_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TaskStatusResource**](../Model/TaskStatusResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tasksStatusesIndex**
> \Swagger\Client\Model\TaskStatusResult tasksStatusesIndex($status_id, $limit, $page, $query)

List statuses.

List statuses.

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

$api_instance = new Swagger\Client\Api\TasksApi();
$status_id = "status_id_example"; // string | 
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->tasksStatusesIndex($status_id, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksStatusesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status_id** | **string**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\TaskStatusResult**](../Model/TaskStatusResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tasksTaskablesCreate**
> \Swagger\Client\Model\TaskableResource tasksTaskablesCreate($task_id, $taskable_resource)

create a new taskable for a given task.

create a new taskable for a given task.

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

$api_instance = new Swagger\Client\Api\TasksApi();
$task_id = "task_id_example"; // string | 
$taskable_resource = new \Swagger\Client\Model\TaskableResource(); // \Swagger\Client\Model\TaskableResource | 

try {
    $result = $api_instance->tasksTaskablesCreate($task_id, $taskable_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksTaskablesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**|  |
 **taskable_resource** | [**\Swagger\Client\Model\TaskableResource**](../Model/\Swagger\Client\Model\TaskableResource.md)|  |

### Return type

[**\Swagger\Client\Model\TaskableResource**](../Model/TaskableResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tasksTaskablesDelete**
> tasksTaskablesDelete($task_id, $taskable_id)

delete a taskable and remove it from the given task.

delete a taskable and remove it from the given task.

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

$api_instance = new Swagger\Client\Api\TasksApi();
$task_id = "task_id_example"; // string | 
$taskable_id = "taskable_id_example"; // string | 

try {
    $api_instance->tasksTaskablesDelete($task_id, $taskable_id);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksTaskablesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**|  |
 **taskable_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tasksTaskablesGet**
> \Swagger\Client\Model\TaskableResource tasksTaskablesGet($task_id, $taskable_id)

Get a taskable item from a given taskable id.

Get a taskable item from a given taskable id.

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

$api_instance = new Swagger\Client\Api\TasksApi();
$task_id = "task_id_example"; // string | 
$taskable_id = "taskable_id_example"; // string | 

try {
    $result = $api_instance->tasksTaskablesGet($task_id, $taskable_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksTaskablesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**|  |
 **taskable_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TaskableResource**](../Model/TaskableResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tasksTaskablesIndex**
> \Swagger\Client\Model\TaskableResult tasksTaskablesIndex($task_id, $taskable_id, $limit, $page, $query)

List the taskables for a given task.

List the taskables for a given task.

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

$api_instance = new Swagger\Client\Api\TasksApi();
$task_id = "task_id_example"; // string | 
$taskable_id = "taskable_id_example"; // string | 
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->tasksTaskablesIndex($task_id, $taskable_id, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksTaskablesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**|  |
 **taskable_id** | **string**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\TaskableResult**](../Model/TaskableResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tasksUpdate**
> \Swagger\Client\Model\TaskResource tasksUpdate($task_id, $task_resource)

Update a given task by its task_id.

Update a given task by its task_id.

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

$api_instance = new Swagger\Client\Api\TasksApi();
$task_id = "task_id_example"; // string | 
$task_resource = new \Swagger\Client\Model\TaskResource(); // \Swagger\Client\Model\TaskResource | 

try {
    $result = $api_instance->tasksUpdate($task_id, $task_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**|  |
 **task_resource** | [**\Swagger\Client\Model\TaskResource**](../Model/\Swagger\Client\Model\TaskResource.md)|  |

### Return type

[**\Swagger\Client\Model\TaskResource**](../Model/TaskResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

