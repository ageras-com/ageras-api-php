# Ageras\Api\AuthApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authCreate**](AuthApi.md#authCreate) | **POST** /auth | 
[**authDelete**](AuthApi.md#authDelete) | **DELETE** /auth/{auth_id} | 
[**authGet**](AuthApi.md#authGet) | **GET** /auth/{auth_id} | 
[**authPasswordCreate**](AuthApi.md#authPasswordCreate) | **POST** /auth/password | 
[**authPasswordUpdate**](AuthApi.md#authPasswordUpdate) | **PUT** /auth/password | 
[**authPasswordreminderCreate**](AuthApi.md#authPasswordreminderCreate) | **POST** /auth/passwordreminder | 
[**authPermissionsIndex**](AuthApi.md#authPermissionsIndex) | **GET** /auth/permissions | 
[**authTokenDelete**](AuthApi.md#authTokenDelete) | **DELETE** /auth/token | 
[**authTokenGet**](AuthApi.md#authTokenGet) | **GET** /auth/token | 
[**authTokenUpdate**](AuthApi.md#authTokenUpdate) | **PUT** /auth/token | 
[**authUpdate**](AuthApi.md#authUpdate) | **PUT** /auth/{auth_id} | 


# **authCreate**
> \Ageras\Api\AuthResource authCreate($auth_resource)



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

$api_instance = new Ageras\Api\Api\AuthApi();
$auth_resource = new \Ageras\Api\AuthResource(); // \Ageras\Api\AuthResource | 

try {
    $result = $api_instance->authCreate($auth_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_resource** | [**\Ageras\Api\AuthResource**](../Model/\Ageras\Api\AuthResource.md)|  |

### Return type

[**\Ageras\Api\AuthResource**](../Model/AuthResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authDelete**
> authDelete($auth_id )



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

$api_instance = new Ageras\Api\Api\AuthApi();
$auth_id = "auth_id_example"; // string | 

try {
    $api_instance->authDelete($auth_id );
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authGet**
> \Ageras\Api\AuthResource authGet($auth_id )



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

$api_instance = new Ageras\Api\Api\AuthApi();
$auth_id = "auth_id_example"; // string | 

try {
    $result = $api_instance->authGet($auth_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_id** | **string**|  |

### Return type

[**\Ageras\Api\AuthResource**](../Model/AuthResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authPasswordCreate**
> \Ageras\Api\PasswordResetResource authPasswordCreate($password_reset_resource)



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

$api_instance = new Ageras\Api\Api\AuthApi();
$password_reset_resource = new \Ageras\Api\PasswordResetResource(); // \Ageras\Api\PasswordResetResource | 

try {
    $result = $api_instance->authPasswordCreate($password_reset_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authPasswordCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **password_reset_resource** | [**\Ageras\Api\PasswordResetResource**](../Model/\Ageras\Api\PasswordResetResource.md)|  |

### Return type

[**\Ageras\Api\PasswordResetResource**](../Model/PasswordResetResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authPasswordUpdate**
> \Ageras\Api\PasswordResetResource authPasswordUpdate($password_reset_resource)



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

$api_instance = new Ageras\Api\Api\AuthApi();
$password_reset_resource = new \Ageras\Api\PasswordResetResource(); // \Ageras\Api\PasswordResetResource | 

try {
    $result = $api_instance->authPasswordUpdate($password_reset_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authPasswordUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **password_reset_resource** | [**\Ageras\Api\PasswordResetResource**](../Model/\Ageras\Api\PasswordResetResource.md)|  |

### Return type

[**\Ageras\Api\PasswordResetResource**](../Model/PasswordResetResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authPasswordreminderCreate**
> \Ageras\Api\PasswordReminderResource authPasswordreminderCreate($password_reminder_resource)



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

$api_instance = new Ageras\Api\Api\AuthApi();
$password_reminder_resource = new \Ageras\Api\PasswordReminderResource(); // \Ageras\Api\PasswordReminderResource | 

try {
    $result = $api_instance->authPasswordreminderCreate($password_reminder_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authPasswordreminderCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **password_reminder_resource** | [**\Ageras\Api\PasswordReminderResource**](../Model/\Ageras\Api\PasswordReminderResource.md)|  |

### Return type

[**\Ageras\Api\PasswordReminderResource**](../Model/PasswordReminderResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authPermissionsIndex**
> \Ageras\Api\PermissionResult authPermissionsIndex($criteria)



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

$api_instance = new Ageras\Api\Api\AuthApi();
$criteria = [
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->authPermissionsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authPermissionsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\PermissionResult**](../Model/PermissionResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authTokenDelete**
> authTokenDelete()



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

$api_instance = new Ageras\Api\Api\AuthApi();

try {
    $api_instance->authTokenDelete();
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authTokenDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authTokenGet**
> \Ageras\Api\AuthResource authTokenGet()



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

$api_instance = new Ageras\Api\Api\AuthApi();

try {
    $result = $api_instance->authTokenGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ageras\Api\AuthResource**](../Model/AuthResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authTokenUpdate**
> \Ageras\Api\AuthResource authTokenUpdate($auth_resource)



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

$api_instance = new Ageras\Api\Api\AuthApi();
$auth_resource = new \Ageras\Api\AuthResource(); // \Ageras\Api\AuthResource | 

try {
    $result = $api_instance->authTokenUpdate($auth_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authTokenUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_resource** | [**\Ageras\Api\AuthResource**](../Model/\Ageras\Api\AuthResource.md)|  |

### Return type

[**\Ageras\Api\AuthResource**](../Model/AuthResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authUpdate**
> \Ageras\Api\AuthResource authUpdate($auth_id , $auth_resource)



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

$api_instance = new Ageras\Api\Api\AuthApi();
$auth_id = "auth_id_example"; // string | 
$auth_resource = new \Ageras\Api\AuthResource(); // \Ageras\Api\AuthResource | 

try {
    $result = $api_instance->authUpdate($auth_id , $auth_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_id** | **string**|  |
 **auth_resource** | [**\Ageras\Api\AuthResource**](../Model/\Ageras\Api\AuthResource.md)|  |

### Return type

[**\Ageras\Api\AuthResource**](../Model/AuthResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

