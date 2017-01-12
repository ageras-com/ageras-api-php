# Swagger\Client\CvApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cvAwardCreate**](CvApi.md#cvAwardCreate) | **POST** /cv/{partner_user_id}/award | Create partner user award.
[**cvAwardDelete**](CvApi.md#cvAwardDelete) | **DELETE** /cv/{partner_user_id}/award/{award_id} | Delete partner user award.
[**cvAwardUpdate**](CvApi.md#cvAwardUpdate) | **PUT** /cv/{partner_user_id}/award | Update partner user award.
[**cvBadgeCreate**](CvApi.md#cvBadgeCreate) | **POST** /cv/{partner_user_id}/badge | Create partner user badge.
[**cvBadgeDelete**](CvApi.md#cvBadgeDelete) | **DELETE** /cv/{partner_user_id}/badge/{badge_id} | Delete partner user badge.
[**cvCourseCreate**](CvApi.md#cvCourseCreate) | **POST** /cv/{partner_user_id}/course | Create partner user course.
[**cvCourseDelete**](CvApi.md#cvCourseDelete) | **DELETE** /cv/{partner_user_id}/course/{course_id} | Delete partner user course.
[**cvCourseUpdate**](CvApi.md#cvCourseUpdate) | **PUT** /cv/{partner_user_id}/course | Update partner user course.
[**cvDescriptionCreate**](CvApi.md#cvDescriptionCreate) | **POST** /cv/{partner_user_id}/description | Create partner user description.
[**cvDescriptionDelete**](CvApi.md#cvDescriptionDelete) | **DELETE** /cv/{partner_user_id}/description/{description_id} | Delete partner user description.
[**cvDescriptionUpdate**](CvApi.md#cvDescriptionUpdate) | **PUT** /cv/{partner_user_id}/description | Update partner user description.
[**cvEducationCreate**](CvApi.md#cvEducationCreate) | **POST** /cv/{partner_user_id}/education | Create partner user education.
[**cvEducationDelete**](CvApi.md#cvEducationDelete) | **DELETE** /cv/{partner_user_id}/education/{education_id} | Delete partner user education.
[**cvEducationUpdate**](CvApi.md#cvEducationUpdate) | **PUT** /cv/{partner_user_id}/education | Update partner user education.
[**cvExperienceCreate**](CvApi.md#cvExperienceCreate) | **POST** /cv/{partner_user_id}/experience | Create partner user experience.
[**cvExperienceDelete**](CvApi.md#cvExperienceDelete) | **DELETE** /cv/{partner_user_id}/experience/{experience_id} | Delete partner user experience.
[**cvExperienceUpdate**](CvApi.md#cvExperienceUpdate) | **PUT** /cv/{partner_user_id}/experience | Update partner user experience.
[**cvExpertiseCreate**](CvApi.md#cvExpertiseCreate) | **POST** /cv/{partner_user_id}/expertise | Create partner user expertise.
[**cvExpertiseDelete**](CvApi.md#cvExpertiseDelete) | **DELETE** /cv/{partner_user_id}/expertise/{expertise_id} | Delete partner user expertise.
[**cvExpertiseUpdate**](CvApi.md#cvExpertiseUpdate) | **PUT** /cv/{partner_user_id}/expertise | Update partner user expertise.
[**cvGet**](CvApi.md#cvGet) | **GET** /cv/{partner_user_id} | Get partner user cv.
[**cvIndex**](CvApi.md#cvIndex) | **GET** /cv | Index all partner user CV for given partner.
[**cvLanguageCreate**](CvApi.md#cvLanguageCreate) | **POST** /cv/{partner_user_id}/language | Create partner user language.
[**cvLanguageDelete**](CvApi.md#cvLanguageDelete) | **DELETE** /cv/{partner_user_id}/language/{language_id} | Delete partner user language.
[**cvLanguageUpdate**](CvApi.md#cvLanguageUpdate) | **PUT** /cv/{partner_user_id}/language | Update partner user language.
[**cvSocialDelete**](CvApi.md#cvSocialDelete) | **DELETE** /cv/cv/{partner_user_id}/social | Delete partner user social media.
[**cvSocialDelete2**](CvApi.md#cvSocialDelete2) | **DELETE** /cv/{partner_user_id}/social | Delete partner user social media.
[**cvSocialUpdate**](CvApi.md#cvSocialUpdate) | **PUT** /cv/{partner_user_id}/social | Update partner user social media.


# **cvAwardCreate**
> \Swagger\Client\Model\PartnerUserCvAwardResource cvAwardCreate($partner_user_id, $partner_user_cv_award_resource)

Create partner user award.

Create partner user award.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_award_resource = new \Swagger\Client\Model\PartnerUserCvAwardResource(); // \Swagger\Client\Model\PartnerUserCvAwardResource | 

try {
    $result = $api_instance->cvAwardCreate($partner_user_id, $partner_user_cv_award_resource);
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
 **partner_user_cv_award_resource** | [**\Swagger\Client\Model\PartnerUserCvAwardResource**](../Model/\Swagger\Client\Model\PartnerUserCvAwardResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerUserCvAwardResource**](../Model/PartnerUserCvAwardResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvAwardDelete**
> cvAwardDelete($partner_user_id, $award_id)

Delete partner user award.

Delete partner user award.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$award_id = "award_id_example"; // string | 

try {
    $api_instance->cvAwardDelete($partner_user_id, $award_id);
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
> \Swagger\Client\Model\PartnerUserCvAwardResource cvAwardUpdate($partner_user_id, $partner_user_cv_award_resource)

Update partner user award.

Update partner user award.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_award_resource = new \Swagger\Client\Model\PartnerUserCvAwardResource(); // \Swagger\Client\Model\PartnerUserCvAwardResource | 

try {
    $result = $api_instance->cvAwardUpdate($partner_user_id, $partner_user_cv_award_resource);
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
 **partner_user_cv_award_resource** | [**\Swagger\Client\Model\PartnerUserCvAwardResource**](../Model/\Swagger\Client\Model\PartnerUserCvAwardResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerUserCvAwardResource**](../Model/PartnerUserCvAwardResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvBadgeCreate**
> \Swagger\Client\Model\CertificationResource cvBadgeCreate($partner_user_id, $partner_user_cv_badge_resource)

Create partner user badge.

Create partner user badge.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_badge_resource = new \Swagger\Client\Model\PartnerUserCvBadgeResource(); // \Swagger\Client\Model\PartnerUserCvBadgeResource | 

try {
    $result = $api_instance->cvBadgeCreate($partner_user_id, $partner_user_cv_badge_resource);
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
 **partner_user_cv_badge_resource** | [**\Swagger\Client\Model\PartnerUserCvBadgeResource**](../Model/\Swagger\Client\Model\PartnerUserCvBadgeResource.md)|  |

### Return type

[**\Swagger\Client\Model\CertificationResource**](../Model/CertificationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvBadgeDelete**
> cvBadgeDelete($partner_user_id, $badge_id)

Delete partner user badge.

Delete partner user badge.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$badge_id = "badge_id_example"; // string | 

try {
    $api_instance->cvBadgeDelete($partner_user_id, $badge_id);
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
> \Swagger\Client\Model\PartnerUserCvCourseResource cvCourseCreate($partner_user_id, $partner_user_cv_course_resource)

Create partner user course.

Create partner user course.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_course_resource = new \Swagger\Client\Model\PartnerUserCvCourseResource(); // \Swagger\Client\Model\PartnerUserCvCourseResource | 

try {
    $result = $api_instance->cvCourseCreate($partner_user_id, $partner_user_cv_course_resource);
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
 **partner_user_cv_course_resource** | [**\Swagger\Client\Model\PartnerUserCvCourseResource**](../Model/\Swagger\Client\Model\PartnerUserCvCourseResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerUserCvCourseResource**](../Model/PartnerUserCvCourseResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvCourseDelete**
> cvCourseDelete($partner_user_id, $course_id)

Delete partner user course.

Delete partner user course.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$course_id = "course_id_example"; // string | 

try {
    $api_instance->cvCourseDelete($partner_user_id, $course_id);
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
> \Swagger\Client\Model\PartnerUserCvCourseResource cvCourseUpdate($partner_user_id, $partner_user_cv_course_resource)

Update partner user course.

Update partner user course.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_course_resource = new \Swagger\Client\Model\PartnerUserCvCourseResource(); // \Swagger\Client\Model\PartnerUserCvCourseResource | 

try {
    $result = $api_instance->cvCourseUpdate($partner_user_id, $partner_user_cv_course_resource);
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
 **partner_user_cv_course_resource** | [**\Swagger\Client\Model\PartnerUserCvCourseResource**](../Model/\Swagger\Client\Model\PartnerUserCvCourseResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerUserCvCourseResource**](../Model/PartnerUserCvCourseResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvDescriptionCreate**
> \Swagger\Client\Model\PartnerUserCvDescriptionResource cvDescriptionCreate($partner_user_id, $partner_user_cv_description_resource)

Create partner user description.

Create partner user description.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_description_resource = new \Swagger\Client\Model\PartnerUserCvDescriptionResource(); // \Swagger\Client\Model\PartnerUserCvDescriptionResource | 

try {
    $result = $api_instance->cvDescriptionCreate($partner_user_id, $partner_user_cv_description_resource);
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
 **partner_user_cv_description_resource** | [**\Swagger\Client\Model\PartnerUserCvDescriptionResource**](../Model/\Swagger\Client\Model\PartnerUserCvDescriptionResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerUserCvDescriptionResource**](../Model/PartnerUserCvDescriptionResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvDescriptionDelete**
> cvDescriptionDelete($partner_user_id, $description_id)

Delete partner user description.

Delete partner user description.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$description_id = "description_id_example"; // string | 

try {
    $api_instance->cvDescriptionDelete($partner_user_id, $description_id);
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
> \Swagger\Client\Model\PartnerUserCvDescriptionResource cvDescriptionUpdate($partner_user_id, $partner_user_cv_description_resource)

Update partner user description.

Update partner user description.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_description_resource = new \Swagger\Client\Model\PartnerUserCvDescriptionResource(); // \Swagger\Client\Model\PartnerUserCvDescriptionResource | 

try {
    $result = $api_instance->cvDescriptionUpdate($partner_user_id, $partner_user_cv_description_resource);
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
 **partner_user_cv_description_resource** | [**\Swagger\Client\Model\PartnerUserCvDescriptionResource**](../Model/\Swagger\Client\Model\PartnerUserCvDescriptionResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerUserCvDescriptionResource**](../Model/PartnerUserCvDescriptionResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvEducationCreate**
> \Swagger\Client\Model\PartnerUserCvEducationResource cvEducationCreate($partner_user_id, $partner_user_cv_education_resource)

Create partner user education.

Create partner user education.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_education_resource = new \Swagger\Client\Model\PartnerUserCvEducationResource(); // \Swagger\Client\Model\PartnerUserCvEducationResource | 

try {
    $result = $api_instance->cvEducationCreate($partner_user_id, $partner_user_cv_education_resource);
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
 **partner_user_cv_education_resource** | [**\Swagger\Client\Model\PartnerUserCvEducationResource**](../Model/\Swagger\Client\Model\PartnerUserCvEducationResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerUserCvEducationResource**](../Model/PartnerUserCvEducationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvEducationDelete**
> cvEducationDelete($partner_user_id, $education_id)

Delete partner user education.

Delete partner user education.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$education_id = "education_id_example"; // string | 

try {
    $api_instance->cvEducationDelete($partner_user_id, $education_id);
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
> \Swagger\Client\Model\PartnerUserCvEducationResource cvEducationUpdate($partner_user_id, $partner_user_cv_education_resource)

Update partner user education.

Update partner user education.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_education_resource = new \Swagger\Client\Model\PartnerUserCvEducationResource(); // \Swagger\Client\Model\PartnerUserCvEducationResource | 

try {
    $result = $api_instance->cvEducationUpdate($partner_user_id, $partner_user_cv_education_resource);
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
 **partner_user_cv_education_resource** | [**\Swagger\Client\Model\PartnerUserCvEducationResource**](../Model/\Swagger\Client\Model\PartnerUserCvEducationResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerUserCvEducationResource**](../Model/PartnerUserCvEducationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvExperienceCreate**
> \Swagger\Client\Model\PartnerUserCvExperienceResource cvExperienceCreate($partner_user_id, $partner_user_cv_experience_resource)

Create partner user experience.

Create partner user experience.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_experience_resource = new \Swagger\Client\Model\PartnerUserCvExperienceResource(); // \Swagger\Client\Model\PartnerUserCvExperienceResource | 

try {
    $result = $api_instance->cvExperienceCreate($partner_user_id, $partner_user_cv_experience_resource);
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
 **partner_user_cv_experience_resource** | [**\Swagger\Client\Model\PartnerUserCvExperienceResource**](../Model/\Swagger\Client\Model\PartnerUserCvExperienceResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerUserCvExperienceResource**](../Model/PartnerUserCvExperienceResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvExperienceDelete**
> cvExperienceDelete($partner_user_id, $experience_id)

Delete partner user experience.

Delete partner user experience.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$experience_id = "experience_id_example"; // string | 

try {
    $api_instance->cvExperienceDelete($partner_user_id, $experience_id);
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
> \Swagger\Client\Model\PartnerUserCvExperienceResource cvExperienceUpdate($partner_user_id, $partner_user_cv_experience_resource)

Update partner user experience.

Update partner user experience.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_experience_resource = new \Swagger\Client\Model\PartnerUserCvExperienceResource(); // \Swagger\Client\Model\PartnerUserCvExperienceResource | 

try {
    $result = $api_instance->cvExperienceUpdate($partner_user_id, $partner_user_cv_experience_resource);
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
 **partner_user_cv_experience_resource** | [**\Swagger\Client\Model\PartnerUserCvExperienceResource**](../Model/\Swagger\Client\Model\PartnerUserCvExperienceResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerUserCvExperienceResource**](../Model/PartnerUserCvExperienceResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvExpertiseCreate**
> \Swagger\Client\Model\PartnerUserCvExpertiseResource cvExpertiseCreate($partner_user_id, $partner_user_cv_expertise_resource)

Create partner user expertise.

Create partner user expertise.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_expertise_resource = new \Swagger\Client\Model\PartnerUserCvExpertiseResource(); // \Swagger\Client\Model\PartnerUserCvExpertiseResource | 

try {
    $result = $api_instance->cvExpertiseCreate($partner_user_id, $partner_user_cv_expertise_resource);
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
 **partner_user_cv_expertise_resource** | [**\Swagger\Client\Model\PartnerUserCvExpertiseResource**](../Model/\Swagger\Client\Model\PartnerUserCvExpertiseResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerUserCvExpertiseResource**](../Model/PartnerUserCvExpertiseResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvExpertiseDelete**
> cvExpertiseDelete($partner_user_id, $expertise_id)

Delete partner user expertise.

Delete partner user expertise.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$expertise_id = "expertise_id_example"; // string | 

try {
    $api_instance->cvExpertiseDelete($partner_user_id, $expertise_id);
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
> \Swagger\Client\Model\PartnerUserCvExpertiseResource cvExpertiseUpdate($partner_user_id, $partner_user_cv_expertise_resource)

Update partner user expertise.

Update partner user expertise.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_expertise_resource = new \Swagger\Client\Model\PartnerUserCvExpertiseResource(); // \Swagger\Client\Model\PartnerUserCvExpertiseResource | 

try {
    $result = $api_instance->cvExpertiseUpdate($partner_user_id, $partner_user_cv_expertise_resource);
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
 **partner_user_cv_expertise_resource** | [**\Swagger\Client\Model\PartnerUserCvExpertiseResource**](../Model/\Swagger\Client\Model\PartnerUserCvExpertiseResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerUserCvExpertiseResource**](../Model/PartnerUserCvExpertiseResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvGet**
> \Swagger\Client\Model\PartnerUserCvResource cvGet($partner_user_id)

Get partner user cv.

Get partner user cv.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 

try {
    $result = $api_instance->cvGet($partner_user_id);
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

[**\Swagger\Client\Model\PartnerUserCvResource**](../Model/PartnerUserCvResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvIndex**
> \Swagger\Client\Model\PartnerUserCvResult cvIndex($partner_id, $partner_user_id, $limit, $page, $query)

Index all partner user CV for given partner.

Index all partner user CV for given partner.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_id = 56; // int | 
$partner_user_id = 56; // int | 
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->cvIndex($partner_id, $partner_user_id, $limit, $page, $query);
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

[**\Swagger\Client\Model\PartnerUserCvResult**](../Model/PartnerUserCvResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvLanguageCreate**
> \Swagger\Client\Model\PartnerUserCvLanguageResource cvLanguageCreate($partner_user_id, $partner_user_cv_language_resource)

Create partner user language.

Create partner user language.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_language_resource = new \Swagger\Client\Model\PartnerUserCvLanguageResource(); // \Swagger\Client\Model\PartnerUserCvLanguageResource | 

try {
    $result = $api_instance->cvLanguageCreate($partner_user_id, $partner_user_cv_language_resource);
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
 **partner_user_cv_language_resource** | [**\Swagger\Client\Model\PartnerUserCvLanguageResource**](../Model/\Swagger\Client\Model\PartnerUserCvLanguageResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerUserCvLanguageResource**](../Model/PartnerUserCvLanguageResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvLanguageDelete**
> cvLanguageDelete($partner_user_id, $language_id)

Delete partner user language.

Delete partner user language.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$language_id = "language_id_example"; // string | 

try {
    $api_instance->cvLanguageDelete($partner_user_id, $language_id);
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
> \Swagger\Client\Model\PartnerUserCvLanguageResource cvLanguageUpdate($partner_user_id, $partner_user_cv_language_resource)

Update partner user language.

Update partner user language.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_language_resource = new \Swagger\Client\Model\PartnerUserCvLanguageResource(); // \Swagger\Client\Model\PartnerUserCvLanguageResource | 

try {
    $result = $api_instance->cvLanguageUpdate($partner_user_id, $partner_user_cv_language_resource);
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
 **partner_user_cv_language_resource** | [**\Swagger\Client\Model\PartnerUserCvLanguageResource**](../Model/\Swagger\Client\Model\PartnerUserCvLanguageResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerUserCvLanguageResource**](../Model/PartnerUserCvLanguageResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvSocialDelete**
> cvSocialDelete($partner_user_id)

Delete partner user social media.

Delete partner user social media.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 

try {
    $api_instance->cvSocialDelete($partner_user_id);
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

# **cvSocialDelete2**
> cvSocialDelete2($partner_user_id)

Delete partner user social media.

Delete partner user social media.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 

try {
    $api_instance->cvSocialDelete2($partner_user_id);
} catch (Exception $e) {
    echo 'Exception when calling CvApi->cvSocialDelete2: ', $e->getMessage(), PHP_EOL;
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
> \Swagger\Client\Model\PartnerUserCvSocialMediaResource cvSocialUpdate($partner_user_id, $partner_user_cv_social_media_resource)

Update partner user social media.

Update partner user social media.

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

$api_instance = new Swagger\Client\Api\CvApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_cv_social_media_resource = new \Swagger\Client\Model\PartnerUserCvSocialMediaResource(); // \Swagger\Client\Model\PartnerUserCvSocialMediaResource | 

try {
    $result = $api_instance->cvSocialUpdate($partner_user_id, $partner_user_cv_social_media_resource);
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
 **partner_user_cv_social_media_resource** | [**\Swagger\Client\Model\PartnerUserCvSocialMediaResource**](../Model/\Swagger\Client\Model\PartnerUserCvSocialMediaResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerUserCvSocialMediaResource**](../Model/PartnerUserCvSocialMediaResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

