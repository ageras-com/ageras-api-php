# Ageras\Api\ProjectsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectsCreate**](ProjectsApi.md#projectsCreate) | **POST** /projects | 
[**projectsDelete**](ProjectsApi.md#projectsDelete) | **DELETE** /projects/{project_id} | 
[**projectsEventsCreate**](ProjectsApi.md#projectsEventsCreate) | **POST** /projects/events | 
[**projectsEventsCreate_0**](ProjectsApi.md#projectsEventsCreate_0) | **POST** /projects/{project_id}/events | 
[**projectsEventsDelete**](ProjectsApi.md#projectsEventsDelete) | **DELETE** /projects/{project_id}/events/{project_event_id} | 
[**projectsEventsGet**](ProjectsApi.md#projectsEventsGet) | **GET** /projects/events/{project_event_id} | 
[**projectsEventsGet_0**](ProjectsApi.md#projectsEventsGet_0) | **GET** /projects/{project_id}/events/{project_event_id} | 
[**projectsEventsIndex**](ProjectsApi.md#projectsEventsIndex) | **GET** /projects/events | 
[**projectsEventsIndex_0**](ProjectsApi.md#projectsEventsIndex_0) | **GET** /projects/{project_id}/events | 
[**projectsEventsUpdate**](ProjectsApi.md#projectsEventsUpdate) | **PUT** /projects/events/{project_event_id} | 
[**projectsEventsUpdate_0**](ProjectsApi.md#projectsEventsUpdate_0) | **PUT** /projects/{project_id}/events/{project_event_id} | 
[**projectsGet**](ProjectsApi.md#projectsGet) | **GET** /projects/{project_id} | 
[**projectsIndex**](ProjectsApi.md#projectsIndex) | **GET** /projects | 
[**projectsNotesCreate**](ProjectsApi.md#projectsNotesCreate) | **POST** /projects/notes | 
[**projectsNotesCreate_0**](ProjectsApi.md#projectsNotesCreate_0) | **POST** /projects/{project_id}/notes | 
[**projectsNotesDelete**](ProjectsApi.md#projectsNotesDelete) | **DELETE** /projects/{project_id}/notes/{project_note_id} | 
[**projectsNotesGet**](ProjectsApi.md#projectsNotesGet) | **GET** /projects/notes/{project_note_id} | 
[**projectsNotesGet_0**](ProjectsApi.md#projectsNotesGet_0) | **GET** /projects/{project_id}/notes/{project_note_id} | 
[**projectsNotesIndex**](ProjectsApi.md#projectsNotesIndex) | **GET** /projects/notes | 
[**projectsNotesIndex_0**](ProjectsApi.md#projectsNotesIndex_0) | **GET** /projects/{project_id}/notes | 
[**projectsNotesUpdate**](ProjectsApi.md#projectsNotesUpdate) | **PUT** /projects/notes/{project_note_id} | 
[**projectsNotesUpdate_0**](ProjectsApi.md#projectsNotesUpdate_0) | **PUT** /projects/{project_id}/notes/{project_note_id} | 
[**projectsStatusesGet**](ProjectsApi.md#projectsStatusesGet) | **GET** /projects/{status}/statuses | 
[**projectsStatusesIndex**](ProjectsApi.md#projectsStatusesIndex) | **GET** /projects/statuses | 
[**projectsUpdate**](ProjectsApi.md#projectsUpdate) | **PUT** /projects/{project_id} | 


# **projectsCreate**
> \Ageras\Api\ProjectResource projectsCreate($project_resource)



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$project_resource = new \Ageras\Api\ProjectResource(); // \Ageras\Api\ProjectResource | 

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
 **project_resource** | [**\Ageras\Api\ProjectResource**](../Model/\Ageras\Api\ProjectResource.md)|  |

### Return type

[**\Ageras\Api\ProjectResource**](../Model/ProjectResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsDelete**
> projectsDelete($project_id )



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 

try {
    $api_instance->projectsDelete($project_id );
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
> \Ageras\Api\ProjectNoteResource projectsEventsCreate($project_event_resource)



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$project_event_resource = new \Ageras\Api\ProjectEventResource(); // \Ageras\Api\ProjectEventResource | 

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
 **project_event_resource** | [**\Ageras\Api\ProjectEventResource**](../Model/\Ageras\Api\ProjectEventResource.md)|  |

### Return type

[**\Ageras\Api\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsEventsCreate_0**
> \Ageras\Api\ProjectNoteResource projectsEventsCreate_0($project_id , $project_event_resource)



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 
$project_event_resource = new \Ageras\Api\ProjectEventResource(); // \Ageras\Api\ProjectEventResource | 

try {
    $result = $api_instance->projectsEventsCreate_0($project_id , $project_event_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsEventsCreate_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **project_event_resource** | [**\Ageras\Api\ProjectEventResource**](../Model/\Ageras\Api\ProjectEventResource.md)|  |

### Return type

[**\Ageras\Api\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsEventsDelete**
> projectsEventsDelete($project_id,  $project_event_id )



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 
$project_event_id = "project_event_id_example"; // string | 

try {
    $api_instance->projectsEventsDelete($project_id,  $project_event_id );
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
> \Ageras\Api\ProjectNoteResource projectsEventsGet($project_event_id )



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$project_event_id = "project_event_id_example"; // string | 

try {
    $result = $api_instance->projectsEventsGet($project_event_id );
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

[**\Ageras\Api\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsEventsGet_0**
> \Ageras\Api\ProjectNoteResource projectsEventsGet_0($project_id,  $project_event_id )



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 
$project_event_id = "project_event_id_example"; // string | 

try {
    $result = $api_instance->projectsEventsGet_0($project_id,  $project_event_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsEventsGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **project_event_id** | **string**|  |

### Return type

[**\Ageras\Api\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsEventsIndex**
> \Ageras\Api\ProjectNoteResult projectsEventsIndex($criteria)



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$criteria = [
        'project_event_id' => "project_event_id_example"; // string | Id for the Projects's events.
        'project_id' => "project_id_example"; // string | Project ID.
        'partner_id' => "partner_id_example"; // string | Partner Id.
        'partner_user_id' => "partner_user_id_example"; // string | Partner User Id.
        'scheduled_from' => "scheduled_from_example"; // string | Events scheduled from.
        'scheduled_to' => "scheduled_to_example"; // string | Events scheduled to.
        'type' => "unknown"; // string | Project Event Types.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->projectsEventsIndex($criteria);
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

[**\Ageras\Api\ProjectNoteResult**](../Model/ProjectNoteResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsEventsIndex_0**
> \Ageras\Api\ProjectNoteResult projectsEventsIndex_0($project_id , $criteria)



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 
$criteria = [
        'project_event_id' => "project_event_id_example"; // string | Id for the Projects's events.
        'partner_id' => "partner_id_example"; // string | Partner Id.
        'partner_user_id' => "partner_user_id_example"; // string | Partner User Id.
        'scheduled_from' => "scheduled_from_example"; // string | Events scheduled from.
        'scheduled_to' => "scheduled_to_example"; // string | Events scheduled to.
        'type' => "unknown"; // string | Project Event Types.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->projectsEventsIndex_0($project_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsEventsIndex_0: ', $e->getMessage(), PHP_EOL;
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

[**\Ageras\Api\ProjectNoteResult**](../Model/ProjectNoteResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsEventsUpdate**
> \Ageras\Api\ProjectNoteResource projectsEventsUpdate($project_event_id , $project_event_resource)



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$project_event_id = "project_event_id_example"; // string | 
$project_event_resource = new \Ageras\Api\ProjectEventResource(); // \Ageras\Api\ProjectEventResource | 

try {
    $result = $api_instance->projectsEventsUpdate($project_event_id , $project_event_resource);
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
 **project_event_resource** | [**\Ageras\Api\ProjectEventResource**](../Model/\Ageras\Api\ProjectEventResource.md)|  |

### Return type

[**\Ageras\Api\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsEventsUpdate_0**
> \Ageras\Api\ProjectNoteResource projectsEventsUpdate_0($project_id,  $project_event_id , $project_event_resource)



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 
$project_event_id = "project_event_id_example"; // string | 
$project_event_resource = new \Ageras\Api\ProjectEventResource(); // \Ageras\Api\ProjectEventResource | 

try {
    $result = $api_instance->projectsEventsUpdate_0($project_id,  $project_event_id , $project_event_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsEventsUpdate_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **project_event_id** | **string**|  |
 **project_event_resource** | [**\Ageras\Api\ProjectEventResource**](../Model/\Ageras\Api\ProjectEventResource.md)|  |

### Return type

[**\Ageras\Api\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsGet**
> \Ageras\Api\ProjectResource projectsGet($project_id )



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 

try {
    $result = $api_instance->projectsGet($project_id );
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

[**\Ageras\Api\ProjectResource**](../Model/ProjectResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsIndex**
> \Ageras\Api\ProjectResult projectsIndex($criteria)



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$criteria = [
        'project_id' => "project_id_example"; // string | Project ID.
        'partner_id' => "partner_id_example"; // string | Partner Id.
        'partner_user_id' => "partner_user_id_example"; // string | Partner User Id.
        'lead_id' => "lead_id_example"; // string | Lead Id.
        'name' => "name_example"; // string | Project name in its native language.
        'geo_code' => "geo_code_example"; // string | Project geo code origin.
        'status' => "status_example"; // string | Project Status.
        'progress' => "progress_example"; // string | Project quote progress.
        'sort' => "created_at"; // string | Sort projects
        'is_archived' => false; // bool | Filter projects that are archived.
        'is_lead_validated' => false; // bool | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->projectsIndex($criteria);
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
 **progress** | **string**| Project quote progress. | [optional]
 **sort** | **string**| Sort projects | [optional] [default to created_at]
 **is_archived** | **bool**| Filter projects that are archived. | [optional] [default to false]
 **is_lead_validated** | **bool**|  | [optional] [default to false]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\ProjectResult**](../Model/ProjectResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsNotesCreate**
> \Ageras\Api\ProjectNoteResource projectsNotesCreate($project_note_resource)



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$project_note_resource = new \Ageras\Api\ProjectNoteResource(); // \Ageras\Api\ProjectNoteResource | 

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
 **project_note_resource** | [**\Ageras\Api\ProjectNoteResource**](../Model/\Ageras\Api\ProjectNoteResource.md)|  |

### Return type

[**\Ageras\Api\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsNotesCreate_0**
> \Ageras\Api\ProjectNoteResource projectsNotesCreate_0($project_id , $project_note_resource)



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 
$project_note_resource = new \Ageras\Api\ProjectNoteResource(); // \Ageras\Api\ProjectNoteResource | 

try {
    $result = $api_instance->projectsNotesCreate_0($project_id , $project_note_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsNotesCreate_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **project_note_resource** | [**\Ageras\Api\ProjectNoteResource**](../Model/\Ageras\Api\ProjectNoteResource.md)|  |

### Return type

[**\Ageras\Api\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsNotesDelete**
> projectsNotesDelete($project_id,  $project_note_id )



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 
$project_note_id = "project_note_id_example"; // string | 

try {
    $api_instance->projectsNotesDelete($project_id,  $project_note_id );
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
> \Ageras\Api\ProjectNoteResource projectsNotesGet($project_note_id )



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$project_note_id = "project_note_id_example"; // string | 

try {
    $result = $api_instance->projectsNotesGet($project_note_id );
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

[**\Ageras\Api\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsNotesGet_0**
> \Ageras\Api\ProjectNoteResource projectsNotesGet_0($project_id,  $project_note_id )



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 
$project_note_id = "project_note_id_example"; // string | 

try {
    $result = $api_instance->projectsNotesGet_0($project_id,  $project_note_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsNotesGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **project_note_id** | **string**|  |

### Return type

[**\Ageras\Api\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsNotesIndex**
> \Ageras\Api\ProjectNoteResult projectsNotesIndex($criteria)



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$criteria = [
        'project_note_id' => "project_note_id_example"; // string | Id for the Project's notes.
        'project_id' => "project_id_example"; // string | Project ID.
        'partner_id' => "partner_id_example"; // string | Partner Id.
        'partner_user_id' => "partner_user_id_example"; // string | Partner User Id.
        'lead_id' => "lead_id_example"; // string | Lead Id.
        'name' => "name_example"; // string | Project name in its native language.
        'geo_code' => "geo_code_example"; // string | Project geo code origin.
        'status' => "status_example"; // string | Project Status.
        'sort' => "created_at"; // string | Sort project notes
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->projectsNotesIndex($criteria);
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
 **sort** | **string**| Sort project notes | [optional] [default to created_at]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\ProjectNoteResult**](../Model/ProjectNoteResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsNotesIndex_0**
> \Ageras\Api\ProjectNoteResult projectsNotesIndex_0($project_id , $criteria)



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 
$criteria = [
        'project_note_id' => "project_note_id_example"; // string | Id for the Project's notes.
        'partner_id' => "partner_id_example"; // string | Partner Id.
        'partner_user_id' => "partner_user_id_example"; // string | Partner User Id.
        'lead_id' => "lead_id_example"; // string | Lead Id.
        'name' => "name_example"; // string | Project name in its native language.
        'geo_code' => "geo_code_example"; // string | Project geo code origin.
        'status' => "status_example"; // string | Project Status.
        'sort' => "created_at"; // string | Sort project notes
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->projectsNotesIndex_0($project_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsNotesIndex_0: ', $e->getMessage(), PHP_EOL;
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
 **sort** | **string**| Sort project notes | [optional] [default to created_at]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\ProjectNoteResult**](../Model/ProjectNoteResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsNotesUpdate**
> \Ageras\Api\ProjectNoteResource projectsNotesUpdate($project_note_id , $project_note_resource)



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$project_note_id = "project_note_id_example"; // string | 
$project_note_resource = new \Ageras\Api\ProjectNoteResource(); // \Ageras\Api\ProjectNoteResource | 

try {
    $result = $api_instance->projectsNotesUpdate($project_note_id , $project_note_resource);
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
 **project_note_resource** | [**\Ageras\Api\ProjectNoteResource**](../Model/\Ageras\Api\ProjectNoteResource.md)|  |

### Return type

[**\Ageras\Api\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsNotesUpdate_0**
> \Ageras\Api\ProjectNoteResource projectsNotesUpdate_0($project_id,  $project_note_id , $project_note_resource)



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 
$project_note_id = "project_note_id_example"; // string | 
$project_note_resource = new \Ageras\Api\ProjectNoteResource(); // \Ageras\Api\ProjectNoteResource | 

try {
    $result = $api_instance->projectsNotesUpdate_0($project_id,  $project_note_id , $project_note_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsNotesUpdate_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **project_note_id** | **string**|  |
 **project_note_resource** | [**\Ageras\Api\ProjectNoteResource**](../Model/\Ageras\Api\ProjectNoteResource.md)|  |

### Return type

[**\Ageras\Api\ProjectNoteResource**](../Model/ProjectNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsStatusesGet**
> \Ageras\Api\ProjectStatusResource projectsStatusesGet($status )



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$status = "status_example"; // string | 

try {
    $result = $api_instance->projectsStatusesGet($status );
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

[**\Ageras\Api\ProjectStatusResource**](../Model/ProjectStatusResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsStatusesIndex**
> \Ageras\Api\ProjectStatusResult projectsStatusesIndex($criteria)



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$criteria = [
        'status' => "status_example"; // string | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->projectsStatusesIndex($criteria);
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

[**\Ageras\Api\ProjectStatusResult**](../Model/ProjectStatusResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsUpdate**
> \Ageras\Api\ProjectResource projectsUpdate($project_id , $project_resource)



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

$api_instance = new Ageras\Api\Api\ProjectsApi();
$project_id = "project_id_example"; // string | 
$project_resource = new \Ageras\Api\ProjectResource(); // \Ageras\Api\ProjectResource | 

try {
    $result = $api_instance->projectsUpdate($project_id , $project_resource);
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
 **project_resource** | [**\Ageras\Api\ProjectResource**](../Model/\Ageras\Api\ProjectResource.md)|  |

### Return type

[**\Ageras\Api\ProjectResource**](../Model/ProjectResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

