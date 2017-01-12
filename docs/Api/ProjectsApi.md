# Swagger\Client\ProjectsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectsCreate**](ProjectsApi.md#projectsCreate) | **POST** /projects | Create Project.
[**projectsDelete**](ProjectsApi.md#projectsDelete) | **DELETE** /projects/{project_id} | Delete a project for a given project id.
[**projectsEventsCreate**](ProjectsApi.md#projectsEventsCreate) | **POST** /projects/events | Create events for a given project.
[**projectsEventsCreate2**](ProjectsApi.md#projectsEventsCreate2) | **POST** /projects/{project_id}/events | Create events for a given project.
[**projectsEventsDelete**](ProjectsApi.md#projectsEventsDelete) | **DELETE** /projects/{project_id}/events/{project_event_id} | Delete a given project event.
[**projectsEventsGet**](ProjectsApi.md#projectsEventsGet) | **GET** /projects/events/{project_event_id} | Get event for a given project.
[**projectsEventsGet2**](ProjectsApi.md#projectsEventsGet2) | **GET** /projects/{project_id}/events/{project_event_id} | Get event for a given project.
[**projectsEventsIndex**](ProjectsApi.md#projectsEventsIndex) | **GET** /projects/events | List events for a given project.
[**projectsEventsIndex2**](ProjectsApi.md#projectsEventsIndex2) | **GET** /projects/{project_id}/events | List events for a given project.
[**projectsEventsUpdate**](ProjectsApi.md#projectsEventsUpdate) | **PUT** /projects/events/{project_event_id} | Update e events for project events.
[**projectsEventsUpdate2**](ProjectsApi.md#projectsEventsUpdate2) | **PUT** /projects/{project_id}/events/{project_event_id} | Update e events for project events.
[**projectsGet**](ProjectsApi.md#projectsGet) | **GET** /projects/{project_id} | Get a Project from a project id.
[**projectsIndex**](ProjectsApi.md#projectsIndex) | **GET** /projects | List Projects.
[**projectsNotesCreate**](ProjectsApi.md#projectsNotesCreate) | **POST** /projects/notes | Create a note for a given project.
[**projectsNotesCreate2**](ProjectsApi.md#projectsNotesCreate2) | **POST** /projects/{project_id}/notes | Create a note for a given project.
[**projectsNotesDelete**](ProjectsApi.md#projectsNotesDelete) | **DELETE** /projects/{project_id}/notes/{project_note_id} | Delete a project note.
[**projectsNotesGet**](ProjectsApi.md#projectsNotesGet) | **GET** /projects/notes/{project_note_id} | Get a note from Project and note id.
[**projectsNotesGet2**](ProjectsApi.md#projectsNotesGet2) | **GET** /projects/{project_id}/notes/{project_note_id} | Get a note from Project and note id.
[**projectsNotesIndex**](ProjectsApi.md#projectsNotesIndex) | **GET** /projects/notes | List notes from a given project.
[**projectsNotesIndex2**](ProjectsApi.md#projectsNotesIndex2) | **GET** /projects/{project_id}/notes | List notes from a given project.
[**projectsNotesUpdate**](ProjectsApi.md#projectsNotesUpdate) | **PUT** /projects/notes/{project_note_id} | Update a given project note.
[**projectsNotesUpdate2**](ProjectsApi.md#projectsNotesUpdate2) | **PUT** /projects/{project_id}/notes/{project_note_id} | Update a given project note.
[**projectsStatusesGet**](ProjectsApi.md#projectsStatusesGet) | **GET** /projects/{status}/statuses | Get a Project Status from Id.
[**projectsStatusesIndex**](ProjectsApi.md#projectsStatusesIndex) | **GET** /projects/statuses | List Available Project Statuses.
[**projectsUpdate**](ProjectsApi.md#projectsUpdate) | **PUT** /projects/{project_id} | Update a project.


# **projectsCreate**
> \Swagger\Client\Model\ProjectResource projectsCreate($project_resource)

Create Project.

Create Project.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_resource = new \Swagger\Client\Model\ProjectResource(); // \Swagger\Client\Model\ProjectResource | 

try {
    $result = $api_instance->projectsCreate($project_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_resource** | [**\Swagger\Client\Model\ProjectResource**](../Model/\Swagger\Client\Model\ProjectResource.md)|  |

### Return type

[**\Swagger\Client\Model\ProjectResource**](../Model/ProjectResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsDelete**
> projectsDelete($project_id)

Delete a project for a given project id.

Delete a project for a given project id.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 

try {
    $api_instance->projectsDelete($project_id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsEventsCreate**
> \Swagger\Client\Model\ProjectNoteResource projectsEventsCreate($project_event_resource)

Create events for a given project.

Create events for a given project.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_event_resource = new \Swagger\Client\Model\ProjectEventResource(); // \Swagger\Client\Model\ProjectEventResource | 

try {
    $result = $api_instance->projectsEventsCreate($project_event_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsEventsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_event_resource** | [**\Swagger\Client\Model\ProjectEventResource**](../Model/\Swagger\Client\Model\ProjectEventResource.md)|  |

### Return type

[**\Swagger\Client\Model\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsEventsCreate2**
> \Swagger\Client\Model\ProjectNoteResource projectsEventsCreate2($project_id, $project_event_resource)

Create events for a given project.

Create events for a given project.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 
$project_event_resource = new \Swagger\Client\Model\ProjectEventResource(); // \Swagger\Client\Model\ProjectEventResource | 

try {
    $result = $api_instance->projectsEventsCreate2($project_id, $project_event_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsEventsCreate2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **project_event_resource** | [**\Swagger\Client\Model\ProjectEventResource**](../Model/\Swagger\Client\Model\ProjectEventResource.md)|  |

### Return type

[**\Swagger\Client\Model\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsEventsDelete**
> projectsEventsDelete($project_id, $project_event_id)

Delete a given project event.

Delete a given project event.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 
$project_event_id = "project_event_id_example"; // string | 

try {
    $api_instance->projectsEventsDelete($project_id, $project_event_id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsEventsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **project_event_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsEventsGet**
> \Swagger\Client\Model\ProjectNoteResource projectsEventsGet($project_event_id)

Get event for a given project.

Get event for a given project.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_event_id = "project_event_id_example"; // string | 

try {
    $result = $api_instance->projectsEventsGet($project_event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsEventsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_event_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsEventsGet2**
> \Swagger\Client\Model\ProjectNoteResource projectsEventsGet2($project_id, $project_event_id)

Get event for a given project.

Get event for a given project.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 
$project_event_id = "project_event_id_example"; // string | 

try {
    $result = $api_instance->projectsEventsGet2($project_id, $project_event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsEventsGet2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **project_event_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsEventsIndex**
> \Swagger\Client\Model\ProjectNoteResult projectsEventsIndex($project_event_id, $project_id, $partner_id, $partner_user_id, $scheduled_from, $scheduled_to, $type, $limit, $page, $query)

List events for a given project.

List events for a given project.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_event_id = "project_event_id_example"; // string | Id for the Projects's events.
$project_id = "project_id_example"; // string | Project ID.
$partner_id = "partner_id_example"; // string | Partner Id.
$partner_user_id = "partner_user_id_example"; // string | Partner User Id.
$scheduled_from = "scheduled_from_example"; // string | Events scheduled from.
$scheduled_to = "scheduled_to_example"; // string | Events scheduled to.
$type = "unknown"; // string | Project Event Types.
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->projectsEventsIndex($project_event_id, $project_id, $partner_id, $partner_user_id, $scheduled_from, $scheduled_to, $type, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsEventsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_event_id** | **string**| Id for the Projects&#39;s events. | [optional]
 **project_id** | **string**| Project ID. | [optional]
 **partner_id** | **string**| Partner Id. | [optional]
 **partner_user_id** | **string**| Partner User Id. | [optional]
 **scheduled_from** | **string**| Events scheduled from. | [optional]
 **scheduled_to** | **string**| Events scheduled to. | [optional]
 **type** | **string**| Project Event Types. | [optional] [default to unknown]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\ProjectNoteResult**](../Model/ProjectNoteResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsEventsIndex2**
> \Swagger\Client\Model\ProjectNoteResult projectsEventsIndex2($project_id, $project_event_id, $partner_id, $partner_user_id, $scheduled_from, $scheduled_to, $type, $limit, $page, $query)

List events for a given project.

List events for a given project.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 
$project_event_id = "project_event_id_example"; // string | Id for the Projects's events.
$partner_id = "partner_id_example"; // string | Partner Id.
$partner_user_id = "partner_user_id_example"; // string | Partner User Id.
$scheduled_from = "scheduled_from_example"; // string | Events scheduled from.
$scheduled_to = "scheduled_to_example"; // string | Events scheduled to.
$type = "unknown"; // string | Project Event Types.
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->projectsEventsIndex2($project_id, $project_event_id, $partner_id, $partner_user_id, $scheduled_from, $scheduled_to, $type, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsEventsIndex2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **project_event_id** | **string**| Id for the Projects&#39;s events. | [optional]
 **partner_id** | **string**| Partner Id. | [optional]
 **partner_user_id** | **string**| Partner User Id. | [optional]
 **scheduled_from** | **string**| Events scheduled from. | [optional]
 **scheduled_to** | **string**| Events scheduled to. | [optional]
 **type** | **string**| Project Event Types. | [optional] [default to unknown]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\ProjectNoteResult**](../Model/ProjectNoteResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsEventsUpdate**
> \Swagger\Client\Model\ProjectNoteResource projectsEventsUpdate($project_event_id, $project_event_resource)

Update e events for project events.

Update e events for project events.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_event_id = "project_event_id_example"; // string | 
$project_event_resource = new \Swagger\Client\Model\ProjectEventResource(); // \Swagger\Client\Model\ProjectEventResource | 

try {
    $result = $api_instance->projectsEventsUpdate($project_event_id, $project_event_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsEventsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_event_id** | **string**|  |
 **project_event_resource** | [**\Swagger\Client\Model\ProjectEventResource**](../Model/\Swagger\Client\Model\ProjectEventResource.md)|  |

### Return type

[**\Swagger\Client\Model\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsEventsUpdate2**
> \Swagger\Client\Model\ProjectNoteResource projectsEventsUpdate2($project_id, $project_event_id, $project_event_resource)

Update e events for project events.

Update e events for project events.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 
$project_event_id = "project_event_id_example"; // string | 
$project_event_resource = new \Swagger\Client\Model\ProjectEventResource(); // \Swagger\Client\Model\ProjectEventResource | 

try {
    $result = $api_instance->projectsEventsUpdate2($project_id, $project_event_id, $project_event_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsEventsUpdate2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **project_event_id** | **string**|  |
 **project_event_resource** | [**\Swagger\Client\Model\ProjectEventResource**](../Model/\Swagger\Client\Model\ProjectEventResource.md)|  |

### Return type

[**\Swagger\Client\Model\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsGet**
> \Swagger\Client\Model\ProjectResource projectsGet($project_id)

Get a Project from a project id.

Get a Project from a project id.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 

try {
    $result = $api_instance->projectsGet($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ProjectResource**](../Model/ProjectResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsIndex**
> \Swagger\Client\Model\ProjectResult projectsIndex($project_id, $partner_id, $partner_user_id, $lead_id, $name, $geo_code, $status, $sort, $limit, $page, $query)

List Projects.

List Projects.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_id = "project_id_example"; // string | Project ID.
$partner_id = "partner_id_example"; // string | Partner Id.
$partner_user_id = "partner_user_id_example"; // string | Partner User Id.
$lead_id = "lead_id_example"; // string | Lead Id.
$name = "name_example"; // string | Project name in its native language.
$geo_code = "geo_code_example"; // string | Project geo code origin.
$status = "status_example"; // string | Project Status.
$sort = "sort_example"; // string | Sort projects
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->projectsIndex($project_id, $partner_id, $partner_user_id, $lead_id, $name, $geo_code, $status, $sort, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID. | [optional]
 **partner_id** | **string**| Partner Id. | [optional]
 **partner_user_id** | **string**| Partner User Id. | [optional]
 **lead_id** | **string**| Lead Id. | [optional]
 **name** | **string**| Project name in its native language. | [optional]
 **geo_code** | **string**| Project geo code origin. | [optional]
 **status** | **string**| Project Status. | [optional]
 **sort** | **string**| Sort projects | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\ProjectResult**](../Model/ProjectResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsNotesCreate**
> \Swagger\Client\Model\ProjectNoteResource projectsNotesCreate($project_note_resource)

Create a note for a given project.

Create a note for a given project.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_note_resource = new \Swagger\Client\Model\ProjectNoteResource(); // \Swagger\Client\Model\ProjectNoteResource | 

try {
    $result = $api_instance->projectsNotesCreate($project_note_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsNotesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_note_resource** | [**\Swagger\Client\Model\ProjectNoteResource**](../Model/\Swagger\Client\Model\ProjectNoteResource.md)|  |

### Return type

[**\Swagger\Client\Model\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsNotesCreate2**
> \Swagger\Client\Model\ProjectNoteResource projectsNotesCreate2($project_id, $project_note_resource)

Create a note for a given project.

Create a note for a given project.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 
$project_note_resource = new \Swagger\Client\Model\ProjectNoteResource(); // \Swagger\Client\Model\ProjectNoteResource | 

try {
    $result = $api_instance->projectsNotesCreate2($project_id, $project_note_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsNotesCreate2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **project_note_resource** | [**\Swagger\Client\Model\ProjectNoteResource**](../Model/\Swagger\Client\Model\ProjectNoteResource.md)|  |

### Return type

[**\Swagger\Client\Model\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsNotesDelete**
> projectsNotesDelete($project_id, $project_note_id)

Delete a project note.

Delete a project note.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 
$project_note_id = "project_note_id_example"; // string | 

try {
    $api_instance->projectsNotesDelete($project_id, $project_note_id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsNotesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **project_note_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsNotesGet**
> \Swagger\Client\Model\ProjectNoteResource projectsNotesGet($project_note_id)

Get a note from Project and note id.

Get a note from Project and note id.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_note_id = "project_note_id_example"; // string | 

try {
    $result = $api_instance->projectsNotesGet($project_note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsNotesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_note_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsNotesGet2**
> \Swagger\Client\Model\ProjectNoteResource projectsNotesGet2($project_id, $project_note_id)

Get a note from Project and note id.

Get a note from Project and note id.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 
$project_note_id = "project_note_id_example"; // string | 

try {
    $result = $api_instance->projectsNotesGet2($project_id, $project_note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsNotesGet2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **project_note_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsNotesIndex**
> \Swagger\Client\Model\ProjectNoteResult projectsNotesIndex($project_note_id, $project_id, $partner_id, $partner_user_id, $lead_id, $name, $geo_code, $status, $limit, $page, $query)

List notes from a given project.

List notes from a given project.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_note_id = "project_note_id_example"; // string | Id for the Project's notes.
$project_id = "project_id_example"; // string | Project ID.
$partner_id = "partner_id_example"; // string | Partner Id.
$partner_user_id = "partner_user_id_example"; // string | Partner User Id.
$lead_id = "lead_id_example"; // string | Lead Id.
$name = "name_example"; // string | Project name in its native language.
$geo_code = "geo_code_example"; // string | Project geo code origin.
$status = "status_example"; // string | Project Status.
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->projectsNotesIndex($project_note_id, $project_id, $partner_id, $partner_user_id, $lead_id, $name, $geo_code, $status, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsNotesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_note_id** | **string**| Id for the Project&#39;s notes. | [optional]
 **project_id** | **string**| Project ID. | [optional]
 **partner_id** | **string**| Partner Id. | [optional]
 **partner_user_id** | **string**| Partner User Id. | [optional]
 **lead_id** | **string**| Lead Id. | [optional]
 **name** | **string**| Project name in its native language. | [optional]
 **geo_code** | **string**| Project geo code origin. | [optional]
 **status** | **string**| Project Status. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\ProjectNoteResult**](../Model/ProjectNoteResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsNotesIndex2**
> \Swagger\Client\Model\ProjectNoteResult projectsNotesIndex2($project_id, $project_note_id, $partner_id, $partner_user_id, $lead_id, $name, $geo_code, $status, $limit, $page, $query)

List notes from a given project.

List notes from a given project.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 
$project_note_id = "project_note_id_example"; // string | Id for the Project's notes.
$partner_id = "partner_id_example"; // string | Partner Id.
$partner_user_id = "partner_user_id_example"; // string | Partner User Id.
$lead_id = "lead_id_example"; // string | Lead Id.
$name = "name_example"; // string | Project name in its native language.
$geo_code = "geo_code_example"; // string | Project geo code origin.
$status = "status_example"; // string | Project Status.
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->projectsNotesIndex2($project_id, $project_note_id, $partner_id, $partner_user_id, $lead_id, $name, $geo_code, $status, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsNotesIndex2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **project_note_id** | **string**| Id for the Project&#39;s notes. | [optional]
 **partner_id** | **string**| Partner Id. | [optional]
 **partner_user_id** | **string**| Partner User Id. | [optional]
 **lead_id** | **string**| Lead Id. | [optional]
 **name** | **string**| Project name in its native language. | [optional]
 **geo_code** | **string**| Project geo code origin. | [optional]
 **status** | **string**| Project Status. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\ProjectNoteResult**](../Model/ProjectNoteResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsNotesUpdate**
> \Swagger\Client\Model\ProjectNoteResource projectsNotesUpdate($project_note_id, $project_note_resource)

Update a given project note.

Update a given project note.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_note_id = "project_note_id_example"; // string | 
$project_note_resource = new \Swagger\Client\Model\ProjectNoteResource(); // \Swagger\Client\Model\ProjectNoteResource | 

try {
    $result = $api_instance->projectsNotesUpdate($project_note_id, $project_note_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsNotesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_note_id** | **string**|  |
 **project_note_resource** | [**\Swagger\Client\Model\ProjectNoteResource**](../Model/\Swagger\Client\Model\ProjectNoteResource.md)|  |

### Return type

[**\Swagger\Client\Model\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsNotesUpdate2**
> \Swagger\Client\Model\ProjectNoteResource projectsNotesUpdate2($project_id, $project_note_id, $project_note_resource)

Update a given project note.

Update a given project note.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 
$project_note_id = "project_note_id_example"; // string | 
$project_note_resource = new \Swagger\Client\Model\ProjectNoteResource(); // \Swagger\Client\Model\ProjectNoteResource | 

try {
    $result = $api_instance->projectsNotesUpdate2($project_id, $project_note_id, $project_note_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsNotesUpdate2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **project_note_id** | **string**|  |
 **project_note_resource** | [**\Swagger\Client\Model\ProjectNoteResource**](../Model/\Swagger\Client\Model\ProjectNoteResource.md)|  |

### Return type

[**\Swagger\Client\Model\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsStatusesGet**
> \Swagger\Client\Model\ProjectStatusResource projectsStatusesGet($status)

Get a Project Status from Id.

Get a Project Status from Id.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$status = "status_example"; // string | 

try {
    $result = $api_instance->projectsStatusesGet($status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsStatusesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**|  |

### Return type

[**\Swagger\Client\Model\ProjectStatusResource**](../Model/ProjectStatusResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsStatusesIndex**
> \Swagger\Client\Model\ProjectStatusResult projectsStatusesIndex($status, $limit, $page, $query)

List Available Project Statuses.

List Available Project Statuses.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$status = "status_example"; // string | 
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->projectsStatusesIndex($status, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsStatusesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\ProjectStatusResult**](../Model/ProjectStatusResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsUpdate**
> \Swagger\Client\Model\ProjectResource projectsUpdate($project_id, $project_resource)

Update a project.

Update a project.

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

$api_instance = new Swagger\Client\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 
$project_resource = new \Swagger\Client\Model\ProjectResource(); // \Swagger\Client\Model\ProjectResource | 

try {
    $result = $api_instance->projectsUpdate($project_id, $project_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **project_resource** | [**\Swagger\Client\Model\ProjectResource**](../Model/\Swagger\Client\Model\ProjectResource.md)|  |

### Return type

[**\Swagger\Client\Model\ProjectResource**](../Model/ProjectResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

