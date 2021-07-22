# Ageras\Api\CvApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cvAwardCreate**](CvApi.md#cvAwardCreate) | **POST** /cv/{partner_user_id}/award | 
[**cvAwardDelete**](CvApi.md#cvAwardDelete) | **DELETE** /cv/{partner_user_id}/award/{award_id} | 
[**cvAwardUpdate**](CvApi.md#cvAwardUpdate) | **PUT** /cv/{partner_user_id}/award | 
[**cvBadgeCreate**](CvApi.md#cvBadgeCreate) | **POST** /cv/{partner_user_id}/badge | 
[**cvBadgeDelete**](CvApi.md#cvBadgeDelete) | **DELETE** /cv/{partner_user_id}/badge/{badge_id} | 
[**cvCourseCreate**](CvApi.md#cvCourseCreate) | **POST** /cv/{partner_user_id}/course | 
[**cvCourseDelete**](CvApi.md#cvCourseDelete) | **DELETE** /cv/{partner_user_id}/course/{course_id} | 
[**cvCourseUpdate**](CvApi.md#cvCourseUpdate) | **PUT** /cv/{partner_user_id}/course | 
[**cvDescriptionCreate**](CvApi.md#cvDescriptionCreate) | **POST** /cv/{partner_user_id}/description | 
[**cvDescriptionDelete**](CvApi.md#cvDescriptionDelete) | **DELETE** /cv/{partner_user_id}/description/{description_id} | 
[**cvDescriptionUpdate**](CvApi.md#cvDescriptionUpdate) | **PUT** /cv/{partner_user_id}/description | 
[**cvEducationCreate**](CvApi.md#cvEducationCreate) | **POST** /cv/{partner_user_id}/education | 
[**cvEducationDelete**](CvApi.md#cvEducationDelete) | **DELETE** /cv/{partner_user_id}/education/{education_id} | 
[**cvEducationUpdate**](CvApi.md#cvEducationUpdate) | **PUT** /cv/{partner_user_id}/education | 
[**cvExperienceCreate**](CvApi.md#cvExperienceCreate) | **POST** /cv/{partner_user_id}/experience | 
[**cvExperienceDelete**](CvApi.md#cvExperienceDelete) | **DELETE** /cv/{partner_user_id}/experience/{experience_id} | 
[**cvExperienceUpdate**](CvApi.md#cvExperienceUpdate) | **PUT** /cv/{partner_user_id}/experience | 
[**cvExpertiseCreate**](CvApi.md#cvExpertiseCreate) | **POST** /cv/{partner_user_id}/expertise | 
[**cvExpertiseDelete**](CvApi.md#cvExpertiseDelete) | **DELETE** /cv/{partner_user_id}/expertise/{expertise_id} | 
[**cvExpertiseUpdate**](CvApi.md#cvExpertiseUpdate) | **PUT** /cv/{partner_user_id}/expertise | 
[**cvGet**](CvApi.md#cvGet) | **GET** /cv/{partner_user_id} | 
[**cvIndex**](CvApi.md#cvIndex) | **GET** /cv | 
[**cvLanguageCreate**](CvApi.md#cvLanguageCreate) | **POST** /cv/{partner_user_id}/language | 
[**cvLanguageDelete**](CvApi.md#cvLanguageDelete) | **DELETE** /cv/{partner_user_id}/language/{language_id} | 
[**cvLanguageUpdate**](CvApi.md#cvLanguageUpdate) | **PUT** /cv/{partner_user_id}/language | 
[**cvSocialDelete**](CvApi.md#cvSocialDelete) | **DELETE** /cv/cv/{partner_user_id}/social | 
[**cvSocialDelete_0**](CvApi.md#cvSocialDelete_0) | **DELETE** /cv/{partner_user_id}/social | 
[**cvSocialUpdate**](CvApi.md#cvSocialUpdate) | **PUT** /cv/{partner_user_id}/social | 


# **cvAwardCreate**
> \Ageras\Api\PartnerUserCvAwardResource cvAwardCreate($partner_user_id , $partner_user_cv_award_resource)



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_award_resource = new \Ageras\Api\PartnerUserCvAwardResource(); // \Ageras\Api\PartnerUserCvAwardResource | 

try {
    $result = $api_instance->cvAwardCreate($partner_user_id , $partner_user_cv_award_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvAwardCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **partner_user_cv_award_resource** | [**\Ageras\Api\PartnerUserCvAwardResource**](../Model/\Ageras\Api\PartnerUserCvAwardResource.md)|  |

### Return type

[**\Ageras\Api\PartnerUserCvAwardResource**](../Model/PartnerUserCvAwardResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvAwardDelete**
> cvAwardDelete($partner_user_id,  $award_id )



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$award_id = "award_id_example"; // string | 

try {
    $api_instance->cvAwardDelete($partner_user_id,  $award_id );
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvAwardDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **award_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvAwardUpdate**
> \Ageras\Api\PartnerUserCvAwardResource cvAwardUpdate($partner_user_id , $partner_user_cv_award_resource)



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_award_resource = new \Ageras\Api\PartnerUserCvAwardResource(); // \Ageras\Api\PartnerUserCvAwardResource | 

try {
    $result = $api_instance->cvAwardUpdate($partner_user_id , $partner_user_cv_award_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvAwardUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **partner_user_cv_award_resource** | [**\Ageras\Api\PartnerUserCvAwardResource**](../Model/\Ageras\Api\PartnerUserCvAwardResource.md)|  |

### Return type

[**\Ageras\Api\PartnerUserCvAwardResource**](../Model/PartnerUserCvAwardResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvBadgeCreate**
> \Ageras\Api\CertificationResource cvBadgeCreate($partner_user_id , $partner_user_cv_badge_resource)



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_badge_resource = new \Ageras\Api\PartnerUserCvBadgeResource(); // \Ageras\Api\PartnerUserCvBadgeResource | 

try {
    $result = $api_instance->cvBadgeCreate($partner_user_id , $partner_user_cv_badge_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvBadgeCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **partner_user_cv_badge_resource** | [**\Ageras\Api\PartnerUserCvBadgeResource**](../Model/\Ageras\Api\PartnerUserCvBadgeResource.md)|  |

### Return type

[**\Ageras\Api\CertificationResource**](../Model/CertificationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvBadgeDelete**
> cvBadgeDelete($partner_user_id,  $badge_id )



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$badge_id = "badge_id_example"; // string | 

try {
    $api_instance->cvBadgeDelete($partner_user_id,  $badge_id );
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvBadgeDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **badge_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvCourseCreate**
> \Ageras\Api\PartnerUserCvCourseResource cvCourseCreate($partner_user_id , $partner_user_cv_course_resource)



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_course_resource = new \Ageras\Api\PartnerUserCvCourseResource(); // \Ageras\Api\PartnerUserCvCourseResource | 

try {
    $result = $api_instance->cvCourseCreate($partner_user_id , $partner_user_cv_course_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvCourseCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **partner_user_cv_course_resource** | [**\Ageras\Api\PartnerUserCvCourseResource**](../Model/\Ageras\Api\PartnerUserCvCourseResource.md)|  |

### Return type

[**\Ageras\Api\PartnerUserCvCourseResource**](../Model/PartnerUserCvCourseResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvCourseDelete**
> cvCourseDelete($partner_user_id,  $course_id )



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$course_id = "course_id_example"; // string | 

try {
    $api_instance->cvCourseDelete($partner_user_id,  $course_id );
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvCourseDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **course_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvCourseUpdate**
> \Ageras\Api\PartnerUserCvCourseResource cvCourseUpdate($partner_user_id , $partner_user_cv_course_resource)



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_course_resource = new \Ageras\Api\PartnerUserCvCourseResource(); // \Ageras\Api\PartnerUserCvCourseResource | 

try {
    $result = $api_instance->cvCourseUpdate($partner_user_id , $partner_user_cv_course_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvCourseUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **partner_user_cv_course_resource** | [**\Ageras\Api\PartnerUserCvCourseResource**](../Model/\Ageras\Api\PartnerUserCvCourseResource.md)|  |

### Return type

[**\Ageras\Api\PartnerUserCvCourseResource**](../Model/PartnerUserCvCourseResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvDescriptionCreate**
> \Ageras\Api\PartnerUserCvDescriptionResource cvDescriptionCreate($partner_user_id , $partner_user_cv_description_resource)



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_description_resource = new \Ageras\Api\PartnerUserCvDescriptionResource(); // \Ageras\Api\PartnerUserCvDescriptionResource | 

try {
    $result = $api_instance->cvDescriptionCreate($partner_user_id , $partner_user_cv_description_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvDescriptionCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **partner_user_cv_description_resource** | [**\Ageras\Api\PartnerUserCvDescriptionResource**](../Model/\Ageras\Api\PartnerUserCvDescriptionResource.md)|  |

### Return type

[**\Ageras\Api\PartnerUserCvDescriptionResource**](../Model/PartnerUserCvDescriptionResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvDescriptionDelete**
> cvDescriptionDelete($partner_user_id,  $description_id )



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$description_id = "description_id_example"; // string | 

try {
    $api_instance->cvDescriptionDelete($partner_user_id,  $description_id );
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvDescriptionDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **description_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvDescriptionUpdate**
> \Ageras\Api\PartnerUserCvDescriptionResource cvDescriptionUpdate($partner_user_id , $partner_user_cv_description_resource)



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_description_resource = new \Ageras\Api\PartnerUserCvDescriptionResource(); // \Ageras\Api\PartnerUserCvDescriptionResource | 

try {
    $result = $api_instance->cvDescriptionUpdate($partner_user_id , $partner_user_cv_description_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvDescriptionUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **partner_user_cv_description_resource** | [**\Ageras\Api\PartnerUserCvDescriptionResource**](../Model/\Ageras\Api\PartnerUserCvDescriptionResource.md)|  |

### Return type

[**\Ageras\Api\PartnerUserCvDescriptionResource**](../Model/PartnerUserCvDescriptionResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvEducationCreate**
> \Ageras\Api\PartnerUserCvEducationResource cvEducationCreate($partner_user_id , $partner_user_cv_education_resource)



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_education_resource = new \Ageras\Api\PartnerUserCvEducationResource(); // \Ageras\Api\PartnerUserCvEducationResource | 

try {
    $result = $api_instance->cvEducationCreate($partner_user_id , $partner_user_cv_education_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvEducationCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **partner_user_cv_education_resource** | [**\Ageras\Api\PartnerUserCvEducationResource**](../Model/\Ageras\Api\PartnerUserCvEducationResource.md)|  |

### Return type

[**\Ageras\Api\PartnerUserCvEducationResource**](../Model/PartnerUserCvEducationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvEducationDelete**
> cvEducationDelete($partner_user_id,  $education_id )



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$education_id = "education_id_example"; // string | 

try {
    $api_instance->cvEducationDelete($partner_user_id,  $education_id );
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvEducationDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **education_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvEducationUpdate**
> \Ageras\Api\PartnerUserCvEducationResource cvEducationUpdate($partner_user_id , $partner_user_cv_education_resource)



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_education_resource = new \Ageras\Api\PartnerUserCvEducationResource(); // \Ageras\Api\PartnerUserCvEducationResource | 

try {
    $result = $api_instance->cvEducationUpdate($partner_user_id , $partner_user_cv_education_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvEducationUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **partner_user_cv_education_resource** | [**\Ageras\Api\PartnerUserCvEducationResource**](../Model/\Ageras\Api\PartnerUserCvEducationResource.md)|  |

### Return type

[**\Ageras\Api\PartnerUserCvEducationResource**](../Model/PartnerUserCvEducationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvExperienceCreate**
> \Ageras\Api\PartnerUserCvExperienceResource cvExperienceCreate($partner_user_id , $partner_user_cv_experience_resource)



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_experience_resource = new \Ageras\Api\PartnerUserCvExperienceResource(); // \Ageras\Api\PartnerUserCvExperienceResource | 

try {
    $result = $api_instance->cvExperienceCreate($partner_user_id , $partner_user_cv_experience_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvExperienceCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **partner_user_cv_experience_resource** | [**\Ageras\Api\PartnerUserCvExperienceResource**](../Model/\Ageras\Api\PartnerUserCvExperienceResource.md)|  |

### Return type

[**\Ageras\Api\PartnerUserCvExperienceResource**](../Model/PartnerUserCvExperienceResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvExperienceDelete**
> cvExperienceDelete($partner_user_id,  $experience_id )



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$experience_id = "experience_id_example"; // string | 

try {
    $api_instance->cvExperienceDelete($partner_user_id,  $experience_id );
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvExperienceDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **experience_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvExperienceUpdate**
> \Ageras\Api\PartnerUserCvExperienceResource cvExperienceUpdate($partner_user_id , $partner_user_cv_experience_resource)



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_experience_resource = new \Ageras\Api\PartnerUserCvExperienceResource(); // \Ageras\Api\PartnerUserCvExperienceResource | 

try {
    $result = $api_instance->cvExperienceUpdate($partner_user_id , $partner_user_cv_experience_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvExperienceUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **partner_user_cv_experience_resource** | [**\Ageras\Api\PartnerUserCvExperienceResource**](../Model/\Ageras\Api\PartnerUserCvExperienceResource.md)|  |

### Return type

[**\Ageras\Api\PartnerUserCvExperienceResource**](../Model/PartnerUserCvExperienceResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvExpertiseCreate**
> \Ageras\Api\PartnerUserCvExpertiseResource cvExpertiseCreate($partner_user_id , $partner_user_cv_expertise_resource)



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_expertise_resource = new \Ageras\Api\PartnerUserCvExpertiseResource(); // \Ageras\Api\PartnerUserCvExpertiseResource | 

try {
    $result = $api_instance->cvExpertiseCreate($partner_user_id , $partner_user_cv_expertise_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvExpertiseCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **partner_user_cv_expertise_resource** | [**\Ageras\Api\PartnerUserCvExpertiseResource**](../Model/\Ageras\Api\PartnerUserCvExpertiseResource.md)|  |

### Return type

[**\Ageras\Api\PartnerUserCvExpertiseResource**](../Model/PartnerUserCvExpertiseResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvExpertiseDelete**
> cvExpertiseDelete($partner_user_id,  $expertise_id )



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$expertise_id = "expertise_id_example"; // string | 

try {
    $api_instance->cvExpertiseDelete($partner_user_id,  $expertise_id );
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvExpertiseDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **expertise_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvExpertiseUpdate**
> \Ageras\Api\PartnerUserCvExpertiseResource cvExpertiseUpdate($partner_user_id , $partner_user_cv_expertise_resource)



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_expertise_resource = new \Ageras\Api\PartnerUserCvExpertiseResource(); // \Ageras\Api\PartnerUserCvExpertiseResource | 

try {
    $result = $api_instance->cvExpertiseUpdate($partner_user_id , $partner_user_cv_expertise_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvExpertiseUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **partner_user_cv_expertise_resource** | [**\Ageras\Api\PartnerUserCvExpertiseResource**](../Model/\Ageras\Api\PartnerUserCvExpertiseResource.md)|  |

### Return type

[**\Ageras\Api\PartnerUserCvExpertiseResource**](../Model/PartnerUserCvExpertiseResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvGet**
> \Ageras\Api\PartnerUserCvResource cvGet($partner_user_id )



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 

try {
    $result = $api_instance->cvGet($partner_user_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |

### Return type

[**\Ageras\Api\PartnerUserCvResource**](../Model/PartnerUserCvResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvIndex**
> \Ageras\Api\PartnerUserCvResult cvIndex($criteria)



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

$api_instance = new Ageras\Api\Api\CvApi();
$criteria = [
        'partner_id' => 56; // int | 
        'partner_user_id' => 56; // int | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->cvIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **int**|  | [optional]
 **partner_user_id** | **int**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\PartnerUserCvResult**](../Model/PartnerUserCvResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvLanguageCreate**
> \Ageras\Api\PartnerUserCvLanguageResource cvLanguageCreate($partner_user_id , $partner_user_cv_language_resource)



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_language_resource = new \Ageras\Api\PartnerUserCvLanguageResource(); // \Ageras\Api\PartnerUserCvLanguageResource | 

try {
    $result = $api_instance->cvLanguageCreate($partner_user_id , $partner_user_cv_language_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvLanguageCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **partner_user_cv_language_resource** | [**\Ageras\Api\PartnerUserCvLanguageResource**](../Model/\Ageras\Api\PartnerUserCvLanguageResource.md)|  |

### Return type

[**\Ageras\Api\PartnerUserCvLanguageResource**](../Model/PartnerUserCvLanguageResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvLanguageDelete**
> cvLanguageDelete($partner_user_id,  $language_id )



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$language_id = "language_id_example"; // string | 

try {
    $api_instance->cvLanguageDelete($partner_user_id,  $language_id );
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvLanguageDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **language_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvLanguageUpdate**
> \Ageras\Api\PartnerUserCvLanguageResource cvLanguageUpdate($partner_user_id , $partner_user_cv_language_resource)



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_language_resource = new \Ageras\Api\PartnerUserCvLanguageResource(); // \Ageras\Api\PartnerUserCvLanguageResource | 

try {
    $result = $api_instance->cvLanguageUpdate($partner_user_id , $partner_user_cv_language_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvLanguageUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **partner_user_cv_language_resource** | [**\Ageras\Api\PartnerUserCvLanguageResource**](../Model/\Ageras\Api\PartnerUserCvLanguageResource.md)|  |

### Return type

[**\Ageras\Api\PartnerUserCvLanguageResource**](../Model/PartnerUserCvLanguageResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvSocialDelete**
> cvSocialDelete($partner_user_id )



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 

try {
    $api_instance->cvSocialDelete($partner_user_id );
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvSocialDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvSocialDelete_0**
> cvSocialDelete_0($partner_user_id )



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 

try {
    $api_instance->cvSocialDelete_0($partner_user_id );
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvSocialDelete_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvSocialUpdate**
> \Ageras\Api\PartnerUserCvSocialMediaResource cvSocialUpdate($partner_user_id , $partner_user_cv_social_media_resource)



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

$api_instance = new Ageras\Api\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_social_media_resource = new \Ageras\Api\PartnerUserCvSocialMediaResource(); // \Ageras\Api\PartnerUserCvSocialMediaResource | 

try {
    $result = $api_instance->cvSocialUpdate($partner_user_id , $partner_user_cv_social_media_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvSocialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **partner_user_cv_social_media_resource** | [**\Ageras\Api\PartnerUserCvSocialMediaResource**](../Model/\Ageras\Api\PartnerUserCvSocialMediaResource.md)|  |

### Return type

[**\Ageras\Api\PartnerUserCvSocialMediaResource**](../Model/PartnerUserCvSocialMediaResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

