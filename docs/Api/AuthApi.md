# Swagger\Client\AuthApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authCreate**](AuthApi.md#authCreate) | **POST** /auth | Authenticate user and receive a token.
[**authDelete**](AuthApi.md#authDelete) | **DELETE** /auth/token | Logout and end session/token.
[**authGet**](AuthApi.md#authGet) | **GET** /auth/token | Get information about the current Authenticated session.
[**authPasswordCreate**](AuthApi.md#authPasswordCreate) | **POST** /auth/password | Reset Password from a given reset token.
[**authPasswordUpdate**](AuthApi.md#authPasswordUpdate) | **PUT** /auth/password | Change Password.
[**authPasswordreminderCreate**](AuthApi.md#authPasswordreminderCreate) | **POST** /auth/passwordreminder | Request a password reminder e-mail.
[**authPermissionsIndex**](AuthApi.md#authPermissionsIndex) | **GET** /auth/permissions | List the Permissions for the given authenticated user.
[**authUpdate**](AuthApi.md#authUpdate) | **PUT** /auth/token | Renew authentication session.


# **authCreate**
> \Swagger\Client\Model\AuthResource authCreate($auth_resource)

Authenticate user and receive a token.

Authenticate user and receive a token.

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

$api_instance = new Swagger\Client\Api\AuthApi();
$auth_resource = new \Swagger\Client\Model\AuthResource(); // \Swagger\Client\Model\AuthResource | Authentication Resource with authorize information

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
 **auth_resource** | [**\Swagger\Client\Model\AuthResource**](../Model/\Swagger\Client\Model\AuthResource.md)| Authentication Resource with authorize information |

### Return type

[**\Swagger\Client\Model\AuthResource**](../Model/AuthResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authDelete**
> authDelete()

Logout and end session/token.

Logout and end session/token.

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

$api_instance = new Swagger\Client\Api\AuthApi();

try {
    $api_instance->authDelete();
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authDelete: ', $e->getMessage(), PHP_EOL;
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

# **authGet**
> \Swagger\Client\Model\AuthResource authGet()

Get information about the current Authenticated session.

Get information about the current Authenticated session.

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

$api_instance = new Swagger\Client\Api\AuthApi();

try {
    $result = $api_instance->authGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AuthResource**](../Model/AuthResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authPasswordCreate**
> \Swagger\Client\Model\PasswordResetResource authPasswordCreate($password_reset_resource)

Reset Password from a given reset token.

Reset Password from a given reset token.

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

$api_instance = new Swagger\Client\Api\AuthApi();
$password_reset_resource = new \Swagger\Client\Model\PasswordResetResource(); // \Swagger\Client\Model\PasswordResetResource | 

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
 **password_reset_resource** | [**\Swagger\Client\Model\PasswordResetResource**](../Model/\Swagger\Client\Model\PasswordResetResource.md)|  |

### Return type

[**\Swagger\Client\Model\PasswordResetResource**](../Model/PasswordResetResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authPasswordUpdate**
> \Swagger\Client\Model\PasswordResetResource authPasswordUpdate($password_reset_resource)

Change Password.

Change Password.

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

$api_instance = new Swagger\Client\Api\AuthApi();
$password_reset_resource = new \Swagger\Client\Model\PasswordResetResource(); // \Swagger\Client\Model\PasswordResetResource | 

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
 **password_reset_resource** | [**\Swagger\Client\Model\PasswordResetResource**](../Model/\Swagger\Client\Model\PasswordResetResource.md)|  |

### Return type

[**\Swagger\Client\Model\PasswordResetResource**](../Model/PasswordResetResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authPasswordreminderCreate**
> \Swagger\Client\Model\PasswordReminderResource authPasswordreminderCreate($password_reminder_resource)

Request a password reminder e-mail.

Request a password reminder e-mail.

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

$api_instance = new Swagger\Client\Api\AuthApi();
$password_reminder_resource = new \Swagger\Client\Model\PasswordReminderResource(); // \Swagger\Client\Model\PasswordReminderResource | 

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
 **password_reminder_resource** | [**\Swagger\Client\Model\PasswordReminderResource**](../Model/\Swagger\Client\Model\PasswordReminderResource.md)|  |

### Return type

[**\Swagger\Client\Model\PasswordReminderResource**](../Model/PasswordReminderResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authPermissionsIndex**
> \Swagger\Client\Model\PermissionResult authPermissionsIndex($limit, $page, $query)

List the Permissions for the given authenticated user.

List the Permissions for the given authenticated user.

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

$api_instance = new Swagger\Client\Api\AuthApi();
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->authPermissionsIndex($limit, $page, $query);
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

[**\Swagger\Client\Model\PermissionResult**](../Model/PermissionResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authUpdate**
> \Swagger\Client\Model\AuthResource authUpdate($auth_resource)

Renew authentication session.

Renew authentication session.

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

$api_instance = new Swagger\Client\Api\AuthApi();
$auth_resource = new \Swagger\Client\Model\AuthResource(); // \Swagger\Client\Model\AuthResource | 

try {
    $result = $api_instance->authUpdate($auth_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_resource** | [**\Swagger\Client\Model\AuthResource**](../Model/\Swagger\Client\Model\AuthResource.md)|  |

### Return type

[**\Swagger\Client\Model\AuthResource**](../Model/AuthResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

