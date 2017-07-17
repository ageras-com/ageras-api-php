# Ageras\Api\CvApi

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
> \Ageras\Api\Model\PartnerUserCvAwardResource cvAwardCreate($partner_user_id , $partner_user_cv_award_resource)

Create partner user award.

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
$partner_user_cv_award_resource = new \Ageras\Api\Model\PartnerUserCvAwardResource(); // \Ageras\Api\Model\PartnerUserCvAwardResource | 

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
 **partner_user_cv_award_resource** | [**\Ageras\Api\Model\PartnerUserCvAwardResource**](../Model/\Ageras\Api\Model\PartnerUserCvAwardResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerUserCvAwardResource**](../Model/PartnerUserCvAwardResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvAwardDelete**
> cvAwardDelete($partner_user_id,  $award_id )

Delete partner user award.

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
> \Ageras\Api\Model\PartnerUserCvAwardResource cvAwardUpdate($partner_user_id , $partner_user_cv_award_resource)

Update partner user award.

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
$partner_user_cv_award_resource = new \Ageras\Api\Model\PartnerUserCvAwardResource(); // \Ageras\Api\Model\PartnerUserCvAwardResource | 

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
 **partner_user_cv_award_resource** | [**\Ageras\Api\Model\PartnerUserCvAwardResource**](../Model/\Ageras\Api\Model\PartnerUserCvAwardResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerUserCvAwardResource**](../Model/PartnerUserCvAwardResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvBadgeCreate**
> \Ageras\Api\Model\CertificationResource cvBadgeCreate($partner_user_id , $partner_user_cv_badge_resource)

Create partner user badge.

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
$partner_user_cv_badge_resource = new \Ageras\Api\Model\PartnerUserCvBadgeResource(); // \Ageras\Api\Model\PartnerUserCvBadgeResource | 

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
 **partner_user_cv_badge_resource** | [**\Ageras\Api\Model\PartnerUserCvBadgeResource**](../Model/\Ageras\Api\Model\PartnerUserCvBadgeResource.md)|  |

### Return type

[**\Ageras\Api\Model\CertificationResource**](../Model/CertificationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvBadgeDelete**
> cvBadgeDelete($partner_user_id,  $badge_id )

Delete partner user badge.

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
> \Ageras\Api\Model\PartnerUserCvCourseResource cvCourseCreate($partner_user_id , $partner_user_cv_course_resource)

Create partner user course.

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
$partner_user_cv_course_resource = new \Ageras\Api\Model\PartnerUserCvCourseResource(); // \Ageras\Api\Model\PartnerUserCvCourseResource | 

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
 **partner_user_cv_course_resource** | [**\Ageras\Api\Model\PartnerUserCvCourseResource**](../Model/\Ageras\Api\Model\PartnerUserCvCourseResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerUserCvCourseResource**](../Model/PartnerUserCvCourseResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvCourseDelete**
> cvCourseDelete($partner_user_id,  $course_id )

Delete partner user course.

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
> \Ageras\Api\Model\PartnerUserCvCourseResource cvCourseUpdate($partner_user_id , $partner_user_cv_course_resource)

Update partner user course.

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
$partner_user_cv_course_resource = new \Ageras\Api\Model\PartnerUserCvCourseResource(); // \Ageras\Api\Model\PartnerUserCvCourseResource | 

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
 **partner_user_cv_course_resource** | [**\Ageras\Api\Model\PartnerUserCvCourseResource**](../Model/\Ageras\Api\Model\PartnerUserCvCourseResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerUserCvCourseResource**](../Model/PartnerUserCvCourseResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvDescriptionCreate**
> \Ageras\Api\Model\PartnerUserCvDescriptionResource cvDescriptionCreate($partner_user_id , $partner_user_cv_description_resource)

Create partner user description.

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
$partner_user_cv_description_resource = new \Ageras\Api\Model\PartnerUserCvDescriptionResource(); // \Ageras\Api\Model\PartnerUserCvDescriptionResource | 

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
 **partner_user_cv_description_resource** | [**\Ageras\Api\Model\PartnerUserCvDescriptionResource**](../Model/\Ageras\Api\Model\PartnerUserCvDescriptionResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerUserCvDescriptionResource**](../Model/PartnerUserCvDescriptionResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvDescriptionDelete**
> cvDescriptionDelete($partner_user_id,  $description_id )

Delete partner user description.

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
> \Ageras\Api\Model\PartnerUserCvDescriptionResource cvDescriptionUpdate($partner_user_id , $partner_user_cv_description_resource)

Update partner user description.

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
$partner_user_cv_description_resource = new \Ageras\Api\Model\PartnerUserCvDescriptionResource(); // \Ageras\Api\Model\PartnerUserCvDescriptionResource | 

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
 **partner_user_cv_description_resource** | [**\Ageras\Api\Model\PartnerUserCvDescriptionResource**](../Model/\Ageras\Api\Model\PartnerUserCvDescriptionResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerUserCvDescriptionResource**](../Model/PartnerUserCvDescriptionResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvEducationCreate**
> \Ageras\Api\Model\PartnerUserCvEducationResource cvEducationCreate($partner_user_id , $partner_user_cv_education_resource)

Create partner user education.

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
$partner_user_cv_education_resource = new \Ageras\Api\Model\PartnerUserCvEducationResource(); // \Ageras\Api\Model\PartnerUserCvEducationResource | 

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
 **partner_user_cv_education_resource** | [**\Ageras\Api\Model\PartnerUserCvEducationResource**](../Model/\Ageras\Api\Model\PartnerUserCvEducationResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerUserCvEducationResource**](../Model/PartnerUserCvEducationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvEducationDelete**
> cvEducationDelete($partner_user_id,  $education_id )

Delete partner user education.

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
> \Ageras\Api\Model\PartnerUserCvEducationResource cvEducationUpdate($partner_user_id , $partner_user_cv_education_resource)

Update partner user education.

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
$partner_user_cv_education_resource = new \Ageras\Api\Model\PartnerUserCvEducationResource(); // \Ageras\Api\Model\PartnerUserCvEducationResource | 

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
 **partner_user_cv_education_resource** | [**\Ageras\Api\Model\PartnerUserCvEducationResource**](../Model/\Ageras\Api\Model\PartnerUserCvEducationResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerUserCvEducationResource**](../Model/PartnerUserCvEducationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvExperienceCreate**
> \Ageras\Api\Model\PartnerUserCvExperienceResource cvExperienceCreate($partner_user_id , $partner_user_cv_experience_resource)

Create partner user experience.

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
$partner_user_cv_experience_resource = new \Ageras\Api\Model\PartnerUserCvExperienceResource(); // \Ageras\Api\Model\PartnerUserCvExperienceResource | 

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
 **partner_user_cv_experience_resource** | [**\Ageras\Api\Model\PartnerUserCvExperienceResource**](../Model/\Ageras\Api\Model\PartnerUserCvExperienceResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerUserCvExperienceResource**](../Model/PartnerUserCvExperienceResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvExperienceDelete**
> cvExperienceDelete($partner_user_id,  $experience_id )

Delete partner user experience.

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
> \Ageras\Api\Model\PartnerUserCvExperienceResource cvExperienceUpdate($partner_user_id , $partner_user_cv_experience_resource)

Update partner user experience.

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
$partner_user_cv_experience_resource = new \Ageras\Api\Model\PartnerUserCvExperienceResource(); // \Ageras\Api\Model\PartnerUserCvExperienceResource | 

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
 **partner_user_cv_experience_resource** | [**\Ageras\Api\Model\PartnerUserCvExperienceResource**](../Model/\Ageras\Api\Model\PartnerUserCvExperienceResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerUserCvExperienceResource**](../Model/PartnerUserCvExperienceResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvExpertiseCreate**
> \Ageras\Api\Model\PartnerUserCvExpertiseResource cvExpertiseCreate($partner_user_id , $partner_user_cv_expertise_resource)

Create partner user expertise.

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
$partner_user_cv_expertise_resource = new \Ageras\Api\Model\PartnerUserCvExpertiseResource(); // \Ageras\Api\Model\PartnerUserCvExpertiseResource | 

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
 **partner_user_cv_expertise_resource** | [**\Ageras\Api\Model\PartnerUserCvExpertiseResource**](../Model/\Ageras\Api\Model\PartnerUserCvExpertiseResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerUserCvExpertiseResource**](../Model/PartnerUserCvExpertiseResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvExpertiseDelete**
> cvExpertiseDelete($partner_user_id,  $expertise_id )

Delete partner user expertise.

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
> \Ageras\Api\Model\PartnerUserCvExpertiseResource cvExpertiseUpdate($partner_user_id , $partner_user_cv_expertise_resource)

Update partner user expertise.

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
$partner_user_cv_expertise_resource = new \Ageras\Api\Model\PartnerUserCvExpertiseResource(); // \Ageras\Api\Model\PartnerUserCvExpertiseResource | 

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
 **partner_user_cv_expertise_resource** | [**\Ageras\Api\Model\PartnerUserCvExpertiseResource**](../Model/\Ageras\Api\Model\PartnerUserCvExpertiseResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerUserCvExpertiseResource**](../Model/PartnerUserCvExpertiseResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvGet**
> \Ageras\Api\Model\PartnerUserCvResource cvGet($partner_user_id )

Get partner user cv.

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

[**\Ageras\Api\Model\PartnerUserCvResource**](../Model/PartnerUserCvResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvIndex**
> \Ageras\Api\Model\PartnerUserCvResult cvIndex($criteria)

Index all partner user CV for given partner.

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

[**\Ageras\Api\Model\PartnerUserCvResult**](../Model/PartnerUserCvResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvLanguageCreate**
> \Ageras\Api\Model\PartnerUserCvLanguageResource cvLanguageCreate($partner_user_id , $partner_user_cv_language_resource)

Create partner user language.

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
$partner_user_cv_language_resource = new \Ageras\Api\Model\PartnerUserCvLanguageResource(); // \Ageras\Api\Model\PartnerUserCvLanguageResource | 

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
 **partner_user_cv_language_resource** | [**\Ageras\Api\Model\PartnerUserCvLanguageResource**](../Model/\Ageras\Api\Model\PartnerUserCvLanguageResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerUserCvLanguageResource**](../Model/PartnerUserCvLanguageResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvLanguageDelete**
> cvLanguageDelete($partner_user_id,  $language_id )

Delete partner user language.

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
> \Ageras\Api\Model\PartnerUserCvLanguageResource cvLanguageUpdate($partner_user_id , $partner_user_cv_language_resource)

Update partner user language.

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
$partner_user_cv_language_resource = new \Ageras\Api\Model\PartnerUserCvLanguageResource(); // \Ageras\Api\Model\PartnerUserCvLanguageResource | 

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
 **partner_user_cv_language_resource** | [**\Ageras\Api\Model\PartnerUserCvLanguageResource**](../Model/\Ageras\Api\Model\PartnerUserCvLanguageResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerUserCvLanguageResource**](../Model/PartnerUserCvLanguageResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cvSocialDelete**
> cvSocialDelete($partner_user_id )

Delete partner user social media.

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

# **cvSocialDelete2**
> cvSocialDelete2($partner_user_id )

Delete partner user social media.

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
    $api_instance->cvSocialDelete2($partner_user_id );
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
> \Ageras\Api\Model\PartnerUserCvSocialMediaResource cvSocialUpdate($partner_user_id , $partner_user_cv_social_media_resource)

Update partner user social media.

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
$partner_user_cv_social_media_resource = new \Ageras\Api\Model\PartnerUserCvSocialMediaResource(); // \Ageras\Api\Model\PartnerUserCvSocialMediaResource | 

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
 **partner_user_cv_social_media_resource** | [**\Ageras\Api\Model\PartnerUserCvSocialMediaResource**](../Model/\Ageras\Api\Model\PartnerUserCvSocialMediaResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerUserCvSocialMediaResource**](../Model/PartnerUserCvSocialMediaResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

