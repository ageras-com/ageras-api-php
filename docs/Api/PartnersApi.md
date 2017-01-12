# Swagger\Client\PartnersApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**partnersAggregationsIndex**](PartnersApi.md#partnersAggregationsIndex) | **GET** /partners/aggregations | List facets and aggregations for the Partner Search.
[**partnersCertificationsCreate**](PartnersApi.md#partnersCertificationsCreate) | **POST** /partners/{partner_id}/certifications | Attach certification to partner.
[**partnersCertificationsDelete**](PartnersApi.md#partnersCertificationsDelete) | **DELETE** /partners/{partner_id}/certifications/{id} | Detach certification from partner.
[**partnersCertificationsGet**](PartnersApi.md#partnersCertificationsGet) | **GET** /partners/{partner_id}/certifications/{certification_id} | Get Partner certification.
[**partnersCertificationsIndex**](PartnersApi.md#partnersCertificationsIndex) | **GET** /partners/{partner_id}/certifications | Get partner certifications.
[**partnersContentsDelete**](PartnersApi.md#partnersContentsDelete) | **DELETE** /partners/{partner_id}/contents/{content_key} | Delete content for a given partner.
[**partnersContentsGet**](PartnersApi.md#partnersContentsGet) | **GET** /partners/{partner_id}/contents/{content_key} | Get the content of a given partner.
[**partnersContentsUpdate**](PartnersApi.md#partnersContentsUpdate) | **PUT** /partners/{partner_id}/contents/{content_key} | Update content for a given partner.
[**partnersCouponsIndex**](PartnersApi.md#partnersCouponsIndex) | **GET** /partners/{partner_id}/coupons | List Partner Coupons.
[**partnersCreate**](PartnersApi.md#partnersCreate) | **POST** /partners | Create a Partner.
[**partnersDelete**](PartnersApi.md#partnersDelete) | **DELETE** /partners/{partner_id} | Delete a Partner.
[**partnersGet**](PartnersApi.md#partnersGet) | **GET** /partners/{partner_id} | Get a Partner from a given partner_id.
[**partnersIndex**](PartnersApi.md#partnersIndex) | **GET** /partners | List Partners.
[**partnersIndustriesCreate**](PartnersApi.md#partnersIndustriesCreate) | **POST** /partners/{partner_id}/industries | Attach industry to partner.
[**partnersIndustriesDelete**](PartnersApi.md#partnersIndustriesDelete) | **DELETE** /partners/{partner_id}/industries/{industry_id} | Detach industry from partner.
[**partnersIndustriesGet**](PartnersApi.md#partnersIndustriesGet) | **GET** /partners/{partner_id}/industries/{industry_id} | Get a given industry for partner.
[**partnersIndustriesIndex**](PartnersApi.md#partnersIndustriesIndex) | **GET** /partners/{partner_id}/industries | Get partner industries.
[**partnersLeadtypesCreate**](PartnersApi.md#partnersLeadtypesCreate) | **POST** /partners/{partner_id}/lead_types | Attach type to partner.
[**partnersLeadtypesDelete**](PartnersApi.md#partnersLeadtypesDelete) | **DELETE** /partners/{partner_id}/lead_types/{lead_type_id} | Detach type from partner.
[**partnersLeadtypesGet**](PartnersApi.md#partnersLeadtypesGet) | **GET** /partners/lead_types/{lead_type_id} | Retrieve a given lead type.
[**partnersLeadtypesGet2**](PartnersApi.md#partnersLeadtypesGet2) | **GET** /partners/{partner_id}/lead_types/{lead_type_id} | Retrieve a given lead type.
[**partnersLeadtypesIndex**](PartnersApi.md#partnersLeadtypesIndex) | **GET** /partners/lead_types | Get partner types criteria.
[**partnersLeadtypesIndex2**](PartnersApi.md#partnersLeadtypesIndex2) | **GET** /partners/{partner_id}/lead_types | Get partner types criteria.
[**partnersNotesCreate**](PartnersApi.md#partnersNotesCreate) | **POST** /partners/notes | Create Partner notes.
[**partnersNotesCreate2**](PartnersApi.md#partnersNotesCreate2) | **POST** /partners/{partner_id}/notes | Create Partner notes.
[**partnersNotesGet**](PartnersApi.md#partnersNotesGet) | **GET** /partners/{partner_id}/notes/{partner_note_id} | Retrieve a given partner note by partner id and partner_note_id.
[**partnersNotesIndex**](PartnersApi.md#partnersNotesIndex) | **GET** /partners/notes | Retrieve lists of notes.
[**partnersNotesIndex2**](PartnersApi.md#partnersNotesIndex2) | **GET** /partners/{partner_id}/notes | Retrieve lists of notes.
[**partnersSubscriptionsActionsCreate**](PartnersApi.md#partnersSubscriptionsActionsCreate) | **POST** /partners/{partner_id}/subscriptions/{subscription_id}/actions | Cancel subscription.
[**partnersSubscriptionsCreate**](PartnersApi.md#partnersSubscriptionsCreate) | **POST** /partners/{partner_id}/subscriptions | Subscribe a partner.
[**partnersSubscriptionsIndex**](PartnersApi.md#partnersSubscriptionsIndex) | **GET** /partners/{partner_id}/subscriptions | Get partner&#39;s subscriptions.
[**partnersSuggestIndex**](PartnersApi.md#partnersSuggestIndex) | **GET** /partners/suggest | Suggest Partners to search for.
[**partnersTransactionsIndex**](PartnersApi.md#partnersTransactionsIndex) | **GET** /partners/{partner_id}/transactions | List Transactions for a given Partner.
[**partnersUpdate**](PartnersApi.md#partnersUpdate) | **PUT** /partners/{partner_id} | Update a Partner.
[**partnersUsersContentsDelete**](PartnersApi.md#partnersUsersContentsDelete) | **DELETE** /partners/users/{partner_user_id}/contents/{content_key} | Delete content for a given partner user.
[**partnersUsersContentsDelete2**](PartnersApi.md#partnersUsersContentsDelete2) | **DELETE** /partners/{partner_id}/users/{partner_user_id}/contents/{content_key} | Delete content for a given partner user.
[**partnersUsersContentsGet**](PartnersApi.md#partnersUsersContentsGet) | **GET** /partners/users/{partner_user_id}/contents/{content_key} | Get the content of a given partner user.
[**partnersUsersContentsGet2**](PartnersApi.md#partnersUsersContentsGet2) | **GET** /partners/{partner_id}/users/{partner_user_id}/contents/{content_key} | Get the content of a given partner user.
[**partnersUsersContentsUpdate**](PartnersApi.md#partnersUsersContentsUpdate) | **PUT** /partners/users/{partner_user_id}/contents/{content_key} | Update content for a given partner user.
[**partnersUsersContentsUpdate2**](PartnersApi.md#partnersUsersContentsUpdate2) | **PUT** /partners/{partner_id}/users/{partner_user_id}/contents/{content_key} | Update content for a given partner user.
[**partnersUsersCreate**](PartnersApi.md#partnersUsersCreate) | **POST** /partners/users | Create a partner user.
[**partnersUsersCreate2**](PartnersApi.md#partnersUsersCreate2) | **POST** /partners/{partner_id}/users | Create a partner user.
[**partnersUsersDelete**](PartnersApi.md#partnersUsersDelete) | **DELETE** /partners/{partner_id}/users/{partner_user_id} | Delete partner user from partner.
[**partnersUsersGet**](PartnersApi.md#partnersUsersGet) | **GET** /partners/users/{partner_user_id} | Get a Partner User by a given partner_user_id.
[**partnersUsersGet2**](PartnersApi.md#partnersUsersGet2) | **GET** /partners/{partner_id}/users/{partner_user_id} | Get a Partner User by a given partner_user_id.
[**partnersUsersIndex**](PartnersApi.md#partnersUsersIndex) | **GET** /partners/users | List partner users.
[**partnersUsersIndex2**](PartnersApi.md#partnersUsersIndex2) | **GET** /partners/{partner_id}/users | List partner users.
[**partnersUsersUpdate**](PartnersApi.md#partnersUsersUpdate) | **PUT** /partners/users/{partner_user_id} | Update partner user profile.
[**partnersUsersUpdate2**](PartnersApi.md#partnersUsersUpdate2) | **PUT** /partners/{partner_id}/users/{partner_user_id} | Update partner user profile.


# **partnersAggregationsIndex**
> \Swagger\Client\Model\PartnerResult partnersAggregationsIndex($partner_id, $state, $is_enabled, $employee_id, $geo_code, $satisfaction, $punches_use_speed, $sort, $limit, $page, $query)

List facets and aggregations for the Partner Search.

List facets and aggregations for the Partner Search.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | Partner id of the partners to filter by.
$state = "state_example"; // string | States for the partners.
$is_enabled = false; // bool | 
$employee_id = "employee_id_example"; // string | Employee id of the partners to filter by.
$geo_code = "geo_code_example"; // string | Geographic Location Code.
$satisfaction = "satisfaction_example"; // string | Partner Satisfaction Ratio.
$punches_use_speed = "punches_use_speed_example"; // string | Punches use speed.
$sort = "sort_example"; // string | Sort Partner's by a given property.
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->partnersAggregationsIndex($partner_id, $state, $is_enabled, $employee_id, $geo_code, $satisfaction, $punches_use_speed, $sort, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersAggregationsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**| Partner id of the partners to filter by. | [optional]
 **state** | **string**| States for the partners. | [optional]
 **is_enabled** | **bool**|  | [optional] [default to false]
 **employee_id** | **string**| Employee id of the partners to filter by. | [optional]
 **geo_code** | **string**| Geographic Location Code. | [optional]
 **satisfaction** | **string**| Partner Satisfaction Ratio. | [optional]
 **punches_use_speed** | **string**| Punches use speed. | [optional]
 **sort** | **string**| Sort Partner&#39;s by a given property. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\PartnerResult**](../Model/PartnerResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersCertificationsCreate**
> \Swagger\Client\Model\CertificationResource partnersCertificationsCreate($partner_id, $certification_resource)

Attach certification to partner.

Attach certification to partner.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$certification_resource = new \Swagger\Client\Model\CertificationResource(); // \Swagger\Client\Model\CertificationResource | 

try {
    $result = $api_instance->partnersCertificationsCreate($partner_id, $certification_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersCertificationsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **certification_resource** | [**\Swagger\Client\Model\CertificationResource**](../Model/\Swagger\Client\Model\CertificationResource.md)|  |

### Return type

[**\Swagger\Client\Model\CertificationResource**](../Model/CertificationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersCertificationsDelete**
> partnersCertificationsDelete($partner_id, $id)

Detach certification from partner.

Detach certification from partner.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $api_instance->partnersCertificationsDelete($partner_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersCertificationsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersCertificationsGet**
> \Swagger\Client\Model\CertificationResource partnersCertificationsGet($partner_id, $certification_id)

Get Partner certification.

Get Partner certification.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$certification_id = "certification_id_example"; // string | 

try {
    $result = $api_instance->partnersCertificationsGet($partner_id, $certification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersCertificationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **certification_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CertificationResource**](../Model/CertificationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersCertificationsIndex**
> \Swagger\Client\Model\CertificationResult partnersCertificationsIndex($partner_id, $types, $geo_code, $limit, $page, $query)

Get partner certifications.

Get partner certifications.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$types = "types_example"; // string | Partner type enum. @var array
$geo_code = "geo_code_example"; // string | 
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->partnersCertificationsIndex($partner_id, $types, $geo_code, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersCertificationsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **types** | **string**| Partner type enum. @var array | [optional]
 **geo_code** | **string**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\CertificationResult**](../Model/CertificationResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersContentsDelete**
> partnersContentsDelete($partner_id, $content_key)

Delete content for a given partner.

Delete content for a given partner.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$content_key = "content_key_example"; // string | 

try {
    $api_instance->partnersContentsDelete($partner_id, $content_key);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersContentsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **content_key** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersContentsGet**
> \Swagger\Client\Model\PartnerContentResource partnersContentsGet($partner_id, $content_key)

Get the content of a given partner.

Get the content of a given partner.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$content_key = "content_key_example"; // string | 

try {
    $result = $api_instance->partnersContentsGet($partner_id, $content_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersContentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **content_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\PartnerContentResource**](../Model/PartnerContentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersContentsUpdate**
> \Swagger\Client\Model\PartnerContentResource partnersContentsUpdate($partner_id, $content_key, $partner_content_resource)

Update content for a given partner.

Update content for a given partner.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$content_key = "content_key_example"; // string | 
$partner_content_resource = new \Swagger\Client\Model\PartnerContentResource(); // \Swagger\Client\Model\PartnerContentResource | 

try {
    $result = $api_instance->partnersContentsUpdate($partner_id, $content_key, $partner_content_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersContentsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **content_key** | **string**|  |
 **partner_content_resource** | [**\Swagger\Client\Model\PartnerContentResource**](../Model/\Swagger\Client\Model\PartnerContentResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerContentResource**](../Model/PartnerContentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersCouponsIndex**
> \Swagger\Client\Model\PartnerCouponResult partnersCouponsIndex($partner_id, $show_expired, $show_deactivated, $show_empty, $limit, $page, $query)

List Partner Coupons.

List Partner Coupons.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$show_expired = false; // bool | Only show expired partner coupons.
$show_deactivated = false; // bool | Only show deactivated partner coupons.
$show_empty = false; // bool | Should empty partner coupons be included in the result.
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->partnersCouponsIndex($partner_id, $show_expired, $show_deactivated, $show_empty, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersCouponsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **show_expired** | **bool**| Only show expired partner coupons. | [optional] [default to false]
 **show_deactivated** | **bool**| Only show deactivated partner coupons. | [optional] [default to false]
 **show_empty** | **bool**| Should empty partner coupons be included in the result. | [optional] [default to false]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\PartnerCouponResult**](../Model/PartnerCouponResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersCreate**
> \Swagger\Client\Model\PartnerResource partnersCreate($partner_resource)

Create a Partner.

Create a Partner.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_resource = new \Swagger\Client\Model\PartnerResource(); // \Swagger\Client\Model\PartnerResource | 

try {
    $result = $api_instance->partnersCreate($partner_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_resource** | [**\Swagger\Client\Model\PartnerResource**](../Model/\Swagger\Client\Model\PartnerResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerResource**](../Model/PartnerResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersDelete**
> partnersDelete($partner_id)

Delete a Partner.

Delete a Partner.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 

try {
    $api_instance->partnersDelete($partner_id);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersGet**
> \Swagger\Client\Model\PartnerResource partnersGet($partner_id)

Get a Partner from a given partner_id.

Get a Partner from a given partner_id.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 

try {
    $result = $api_instance->partnersGet($partner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\PartnerResource**](../Model/PartnerResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersIndex**
> \Swagger\Client\Model\PartnerResult partnersIndex($partner_id, $state, $is_enabled, $employee_id, $geo_code, $satisfaction, $punches_use_speed, $sort, $limit, $page, $query)

List Partners.

List Partners.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | Partner id of the partners to filter by.
$state = "state_example"; // string | States for the partners.
$is_enabled = false; // bool | 
$employee_id = "employee_id_example"; // string | Employee id of the partners to filter by.
$geo_code = "geo_code_example"; // string | Geographic Location Code.
$satisfaction = "satisfaction_example"; // string | Partner Satisfaction Ratio.
$punches_use_speed = "punches_use_speed_example"; // string | Punches use speed.
$sort = "sort_example"; // string | Sort Partner's by a given property.
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->partnersIndex($partner_id, $state, $is_enabled, $employee_id, $geo_code, $satisfaction, $punches_use_speed, $sort, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**| Partner id of the partners to filter by. | [optional]
 **state** | **string**| States for the partners. | [optional]
 **is_enabled** | **bool**|  | [optional] [default to false]
 **employee_id** | **string**| Employee id of the partners to filter by. | [optional]
 **geo_code** | **string**| Geographic Location Code. | [optional]
 **satisfaction** | **string**| Partner Satisfaction Ratio. | [optional]
 **punches_use_speed** | **string**| Punches use speed. | [optional]
 **sort** | **string**| Sort Partner&#39;s by a given property. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\PartnerResult**](../Model/PartnerResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersIndustriesCreate**
> \Swagger\Client\Model\PartnerIndustryResource partnersIndustriesCreate($partner_id, $partner_industry_resource)

Attach industry to partner.

Attach industry to partner.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_industry_resource = new \Swagger\Client\Model\PartnerIndustryResource(); // \Swagger\Client\Model\PartnerIndustryResource | 

try {
    $result = $api_instance->partnersIndustriesCreate($partner_id, $partner_industry_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersIndustriesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_industry_resource** | [**\Swagger\Client\Model\PartnerIndustryResource**](../Model/\Swagger\Client\Model\PartnerIndustryResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerIndustryResource**](../Model/PartnerIndustryResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersIndustriesDelete**
> partnersIndustriesDelete($partner_id, $industry_id)

Detach industry from partner.

Detach industry from partner.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$industry_id = "industry_id_example"; // string | 

try {
    $api_instance->partnersIndustriesDelete($partner_id, $industry_id);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersIndustriesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **industry_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersIndustriesGet**
> \Swagger\Client\Model\PartnerIndustryResource partnersIndustriesGet($partner_id, $industry_id)

Get a given industry for partner.

Get a given industry for partner.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$industry_id = "industry_id_example"; // string | 

try {
    $result = $api_instance->partnersIndustriesGet($partner_id, $industry_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersIndustriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **industry_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\PartnerIndustryResource**](../Model/PartnerIndustryResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersIndustriesIndex**
> \Swagger\Client\Model\PartnerIndustryResult partnersIndustriesIndex($partner_id, $geo_code, $limit, $page, $query)

Get partner industries.

Get partner industries.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$geo_code = "geo_code_example"; // string | 
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->partnersIndustriesIndex($partner_id, $geo_code, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersIndustriesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **geo_code** | **string**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\PartnerIndustryResult**](../Model/PartnerIndustryResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersLeadtypesCreate**
> \Swagger\Client\Model\PartnerTypesResource partnersLeadtypesCreate($partner_id, $lead_type_resource)

Attach type to partner.

Attach type to partner.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$lead_type_resource = new \Swagger\Client\Model\LeadTypeResource(); // \Swagger\Client\Model\LeadTypeResource | 

try {
    $result = $api_instance->partnersLeadtypesCreate($partner_id, $lead_type_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersLeadtypesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **lead_type_resource** | [**\Swagger\Client\Model\LeadTypeResource**](../Model/\Swagger\Client\Model\LeadTypeResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerTypesResource**](../Model/PartnerTypesResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersLeadtypesDelete**
> partnersLeadtypesDelete($partner_id, $lead_type_id)

Detach type from partner.

Detach type from partner.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$lead_type_id = "lead_type_id_example"; // string | 

try {
    $api_instance->partnersLeadtypesDelete($partner_id, $lead_type_id);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersLeadtypesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **lead_type_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersLeadtypesGet**
> \Swagger\Client\Model\PartnerTypesResource partnersLeadtypesGet($lead_type_id)

Retrieve a given lead type.

Retrieve a given lead type.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$lead_type_id = "lead_type_id_example"; // string | 

try {
    $result = $api_instance->partnersLeadtypesGet($lead_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersLeadtypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_type_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\PartnerTypesResource**](../Model/PartnerTypesResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersLeadtypesGet2**
> \Swagger\Client\Model\PartnerTypesResource partnersLeadtypesGet2($partner_id, $lead_type_id)

Retrieve a given lead type.

Retrieve a given lead type.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$lead_type_id = "lead_type_id_example"; // string | 

try {
    $result = $api_instance->partnersLeadtypesGet2($partner_id, $lead_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersLeadtypesGet2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **lead_type_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\PartnerTypesResource**](../Model/PartnerTypesResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersLeadtypesIndex**
> \Swagger\Client\Model\PartnerTypesResult partnersLeadtypesIndex($partner_id, $types, $geo_code, $limit, $page, $query)

Get partner types criteria.

Get partner types criteria.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = 56; // int | Partner ID. @var int
$types = "types_example"; // string | Partner type enum. @var array
$geo_code = "geo_code_example"; // string | 
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->partnersLeadtypesIndex($partner_id, $types, $geo_code, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersLeadtypesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **int**| Partner ID. @var int | [optional]
 **types** | **string**| Partner type enum. @var array | [optional]
 **geo_code** | **string**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\PartnerTypesResult**](../Model/PartnerTypesResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersLeadtypesIndex2**
> \Swagger\Client\Model\PartnerTypesResult partnersLeadtypesIndex2($partner_id, $types, $geo_code, $limit, $page, $query)

Get partner types criteria.

Get partner types criteria.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$types = "types_example"; // string | Partner type enum. @var array
$geo_code = "geo_code_example"; // string | 
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->partnersLeadtypesIndex2($partner_id, $types, $geo_code, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersLeadtypesIndex2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **types** | **string**| Partner type enum. @var array | [optional]
 **geo_code** | **string**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\PartnerTypesResult**](../Model/PartnerTypesResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersNotesCreate**
> \Swagger\Client\Model\PartnerNoteResource partnersNotesCreate($partner_note_resource)

Create Partner notes.

Create Partner notes.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_note_resource = new \Swagger\Client\Model\PartnerNoteResource(); // \Swagger\Client\Model\PartnerNoteResource | 

try {
    $result = $api_instance->partnersNotesCreate($partner_note_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersNotesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_note_resource** | [**\Swagger\Client\Model\PartnerNoteResource**](../Model/\Swagger\Client\Model\PartnerNoteResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerNoteResource**](../Model/PartnerNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersNotesCreate2**
> \Swagger\Client\Model\PartnerNoteResource partnersNotesCreate2($partner_id, $partner_note_resource)

Create Partner notes.

Create Partner notes.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_note_resource = new \Swagger\Client\Model\PartnerNoteResource(); // \Swagger\Client\Model\PartnerNoteResource | 

try {
    $result = $api_instance->partnersNotesCreate2($partner_id, $partner_note_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersNotesCreate2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_note_resource** | [**\Swagger\Client\Model\PartnerNoteResource**](../Model/\Swagger\Client\Model\PartnerNoteResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerNoteResource**](../Model/PartnerNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersNotesGet**
> \Swagger\Client\Model\PartnerNoteResource partnersNotesGet($partner_id, $partner_note_id)

Retrieve a given partner note by partner id and partner_note_id.

Retrieve a given partner note by partner id and partner_note_id.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_note_id = "partner_note_id_example"; // string | 

try {
    $result = $api_instance->partnersNotesGet($partner_id, $partner_note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersNotesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_note_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\PartnerNoteResource**](../Model/PartnerNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersNotesIndex**
> \Swagger\Client\Model\PartnerNoteResult partnersNotesIndex($partner_id, $types, $limit, $page, $query)

Retrieve lists of notes.

Retrieve lists of notes.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = 56; // int | 
$types = "all"; // string | 
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->partnersNotesIndex($partner_id, $types, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersNotesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **int**|  | [optional]
 **types** | **string**|  | [optional] [default to all]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\PartnerNoteResult**](../Model/PartnerNoteResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersNotesIndex2**
> \Swagger\Client\Model\PartnerNoteResult partnersNotesIndex2($partner_id, $types, $limit, $page, $query)

Retrieve lists of notes.

Retrieve lists of notes.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$types = "all"; // string | 
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->partnersNotesIndex2($partner_id, $types, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersNotesIndex2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **types** | **string**|  | [optional] [default to all]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\PartnerNoteResult**](../Model/PartnerNoteResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersSubscriptionsActionsCreate**
> \Swagger\Client\Model\PartnerSubscriptionActionResource partnersSubscriptionsActionsCreate($partner_id, $subscription_id, $partner_subscription_action_resource)

Cancel subscription.

Cancel subscription.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$subscription_id = "subscription_id_example"; // string | 
$partner_subscription_action_resource = new \Swagger\Client\Model\PartnerSubscriptionActionResource(); // \Swagger\Client\Model\PartnerSubscriptionActionResource | 

try {
    $result = $api_instance->partnersSubscriptionsActionsCreate($partner_id, $subscription_id, $partner_subscription_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersSubscriptionsActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **subscription_id** | **string**|  |
 **partner_subscription_action_resource** | [**\Swagger\Client\Model\PartnerSubscriptionActionResource**](../Model/\Swagger\Client\Model\PartnerSubscriptionActionResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerSubscriptionActionResource**](../Model/PartnerSubscriptionActionResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersSubscriptionsCreate**
> \Swagger\Client\Model\PartnerSubscriptionResource partnersSubscriptionsCreate($partner_id, $partner_subscription_resource)

Subscribe a partner.

Subscribe a partner.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_subscription_resource = new \Swagger\Client\Model\PartnerSubscriptionResource(); // \Swagger\Client\Model\PartnerSubscriptionResource | 

try {
    $result = $api_instance->partnersSubscriptionsCreate($partner_id, $partner_subscription_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersSubscriptionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_subscription_resource** | [**\Swagger\Client\Model\PartnerSubscriptionResource**](../Model/\Swagger\Client\Model\PartnerSubscriptionResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerSubscriptionResource**](../Model/PartnerSubscriptionResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersSubscriptionsIndex**
> \Swagger\Client\Model\PartnerSubscriptionResult partnersSubscriptionsIndex($partner_id, $limit, $page, $query)

Get partner's subscriptions.

Get partner's subscriptions.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->partnersSubscriptionsIndex($partner_id, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersSubscriptionsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\PartnerSubscriptionResult**](../Model/PartnerSubscriptionResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersSuggestIndex**
> \Swagger\Client\Model\PartnerSuggestResult partnersSuggestIndex($limit, $geo_code, $query, $type, $page)

Suggest Partners to search for.

Suggest Partners to search for.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$limit = 56; // int | Limit the number of suggest resources pr. page.
$geo_code = "geo_code_example"; // string | Geo Location Code ( ISO 3166 ).
$query = "query_example"; // string | The search query to search by.
$type = "type_example"; // string | Type to search for.
$page = 56; // int | The page position in the result.

try {
    $result = $api_instance->partnersSuggestIndex($limit, $geo_code, $query, $type, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersSuggestIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limit the number of suggest resources pr. page. | [optional]
 **geo_code** | **string**| Geo Location Code ( ISO 3166 ). | [optional]
 **query** | **string**| The search query to search by. | [optional]
 **type** | **string**| Type to search for. | [optional]
 **page** | **int**| The page position in the result. | [optional]

### Return type

[**\Swagger\Client\Model\PartnerSuggestResult**](../Model/PartnerSuggestResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersTransactionsIndex**
> \Swagger\Client\Model\PartnerCouponTransactionResult partnersTransactionsIndex($partner_id, $limit, $page, $query)

List Transactions for a given Partner.

List Transactions for a given Partner.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->partnersTransactionsIndex($partner_id, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersTransactionsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\PartnerCouponTransactionResult**](../Model/PartnerCouponTransactionResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUpdate**
> \Swagger\Client\Model\PartnerResource partnersUpdate($partner_id, $partner_resource)

Update a Partner.

Update a Partner.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_resource = new \Swagger\Client\Model\PartnerResource(); // \Swagger\Client\Model\PartnerResource | 

try {
    $result = $api_instance->partnersUpdate($partner_id, $partner_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_resource** | [**\Swagger\Client\Model\PartnerResource**](../Model/\Swagger\Client\Model\PartnerResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerResource**](../Model/PartnerResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersContentsDelete**
> partnersUsersContentsDelete($partner_user_id, $content_key)

Delete content for a given partner user.

Delete content for a given partner user.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_user_id = "partner_user_id_example"; // string | 
$content_key = "content_key_example"; // string | 

try {
    $api_instance->partnersUsersContentsDelete($partner_user_id, $content_key);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersUsersContentsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **content_key** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersContentsDelete2**
> partnersUsersContentsDelete2($partner_id, $partner_user_id, $content_key)

Delete content for a given partner user.

Delete content for a given partner user.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_user_id = "partner_user_id_example"; // string | 
$content_key = "content_key_example"; // string | 

try {
    $api_instance->partnersUsersContentsDelete2($partner_id, $partner_user_id, $content_key);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersUsersContentsDelete2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_user_id** | **string**|  |
 **content_key** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersContentsGet**
> \Swagger\Client\Model\PartnerContentResource partnersUsersContentsGet($partner_user_id, $content_key)

Get the content of a given partner user.

Get the content of a given partner user.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_user_id = "partner_user_id_example"; // string | 
$content_key = "content_key_example"; // string | 

try {
    $result = $api_instance->partnersUsersContentsGet($partner_user_id, $content_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersUsersContentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **content_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\PartnerContentResource**](../Model/PartnerContentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersContentsGet2**
> \Swagger\Client\Model\PartnerContentResource partnersUsersContentsGet2($partner_id, $partner_user_id, $content_key)

Get the content of a given partner user.

Get the content of a given partner user.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_user_id = "partner_user_id_example"; // string | 
$content_key = "content_key_example"; // string | 

try {
    $result = $api_instance->partnersUsersContentsGet2($partner_id, $partner_user_id, $content_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersUsersContentsGet2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_user_id** | **string**|  |
 **content_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\PartnerContentResource**](../Model/PartnerContentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersContentsUpdate**
> \Swagger\Client\Model\PartnerContentResource partnersUsersContentsUpdate($partner_user_id, $content_key, $partner_content_resource)

Update content for a given partner user.

Update content for a given partner user.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_user_id = "partner_user_id_example"; // string | 
$content_key = "content_key_example"; // string | 
$partner_content_resource = new \Swagger\Client\Model\PartnerContentResource(); // \Swagger\Client\Model\PartnerContentResource | 

try {
    $result = $api_instance->partnersUsersContentsUpdate($partner_user_id, $content_key, $partner_content_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersUsersContentsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **content_key** | **string**|  |
 **partner_content_resource** | [**\Swagger\Client\Model\PartnerContentResource**](../Model/\Swagger\Client\Model\PartnerContentResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerContentResource**](../Model/PartnerContentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersContentsUpdate2**
> \Swagger\Client\Model\PartnerContentResource partnersUsersContentsUpdate2($partner_id, $partner_user_id, $content_key, $partner_content_resource)

Update content for a given partner user.

Update content for a given partner user.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_user_id = "partner_user_id_example"; // string | 
$content_key = "content_key_example"; // string | 
$partner_content_resource = new \Swagger\Client\Model\PartnerContentResource(); // \Swagger\Client\Model\PartnerContentResource | 

try {
    $result = $api_instance->partnersUsersContentsUpdate2($partner_id, $partner_user_id, $content_key, $partner_content_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersUsersContentsUpdate2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_user_id** | **string**|  |
 **content_key** | **string**|  |
 **partner_content_resource** | [**\Swagger\Client\Model\PartnerContentResource**](../Model/\Swagger\Client\Model\PartnerContentResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerContentResource**](../Model/PartnerContentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersCreate**
> \Swagger\Client\Model\PartnerUserResource partnersUsersCreate($partner_user_resource)

Create a partner user.

Create a partner user.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_user_resource = new \Swagger\Client\Model\PartnerUserResource(); // \Swagger\Client\Model\PartnerUserResource | 

try {
    $result = $api_instance->partnersUsersCreate($partner_user_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersUsersCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_resource** | [**\Swagger\Client\Model\PartnerUserResource**](../Model/\Swagger\Client\Model\PartnerUserResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerUserResource**](../Model/PartnerUserResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersCreate2**
> \Swagger\Client\Model\PartnerUserResource partnersUsersCreate2($partner_id, $partner_user_resource)

Create a partner user.

Create a partner user.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_user_resource = new \Swagger\Client\Model\PartnerUserResource(); // \Swagger\Client\Model\PartnerUserResource | 

try {
    $result = $api_instance->partnersUsersCreate2($partner_id, $partner_user_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersUsersCreate2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_user_resource** | [**\Swagger\Client\Model\PartnerUserResource**](../Model/\Swagger\Client\Model\PartnerUserResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerUserResource**](../Model/PartnerUserResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersDelete**
> partnersUsersDelete($partner_id, $partner_user_id)

Delete partner user from partner.

Delete partner user from partner.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_user_id = "partner_user_id_example"; // string | 

try {
    $api_instance->partnersUsersDelete($partner_id, $partner_user_id);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersUsersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_user_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersGet**
> \Swagger\Client\Model\PartnerUserResource partnersUsersGet($partner_user_id)

Get a Partner User by a given partner_user_id.

Get a Partner User by a given partner_user_id.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_user_id = "partner_user_id_example"; // string | 

try {
    $result = $api_instance->partnersUsersGet($partner_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersUsersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\PartnerUserResource**](../Model/PartnerUserResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersGet2**
> \Swagger\Client\Model\PartnerUserResource partnersUsersGet2($partner_id, $partner_user_id)

Get a Partner User by a given partner_user_id.

Get a Partner User by a given partner_user_id.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_user_id = "partner_user_id_example"; // string | 

try {
    $result = $api_instance->partnersUsersGet2($partner_id, $partner_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersUsersGet2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_user_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\PartnerUserResource**](../Model/PartnerUserResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersIndex**
> \Swagger\Client\Model\PartnerUserResult partnersUsersIndex($partner_user_id, $partner_id, $sort, $limit, $page, $query)

List partner users.

List partner users.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_user_id = "partner_user_id_example"; // string | Partner User Id.
$partner_id = "partner_id_example"; // string | Partner id for the partner users to filter by.
$sort = "sort_example"; // string | 
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->partnersUsersIndex($partner_user_id, $partner_id, $sort, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersUsersIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**| Partner User Id. | [optional]
 **partner_id** | **string**| Partner id for the partner users to filter by. | [optional]
 **sort** | **string**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\PartnerUserResult**](../Model/PartnerUserResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersIndex2**
> \Swagger\Client\Model\PartnerUserResult partnersUsersIndex2($partner_id, $partner_user_id, $sort, $limit, $page, $query)

List partner users.

List partner users.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_user_id = "partner_user_id_example"; // string | Partner User Id.
$sort = "sort_example"; // string | 
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->partnersUsersIndex2($partner_id, $partner_user_id, $sort, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersUsersIndex2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_user_id** | **string**| Partner User Id. | [optional]
 **sort** | **string**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\PartnerUserResult**](../Model/PartnerUserResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersUpdate**
> \Swagger\Client\Model\PartnerUserResource partnersUsersUpdate($partner_user_id, $partner_user_resource)

Update partner user profile.

Update partner user profile.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_resource = new \Swagger\Client\Model\PartnerUserResource(); // \Swagger\Client\Model\PartnerUserResource | 

try {
    $result = $api_instance->partnersUsersUpdate($partner_user_id, $partner_user_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersUsersUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_user_id** | **string**|  |
 **partner_user_resource** | [**\Swagger\Client\Model\PartnerUserResource**](../Model/\Swagger\Client\Model\PartnerUserResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerUserResource**](../Model/PartnerUserResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersUpdate2**
> \Swagger\Client\Model\PartnerUserResource partnersUsersUpdate2($partner_id, $partner_user_id, $partner_user_resource)

Update partner user profile.

Update partner user profile.

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

$api_instance = new Swagger\Client\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_resource = new \Swagger\Client\Model\PartnerUserResource(); // \Swagger\Client\Model\PartnerUserResource | 

try {
    $result = $api_instance->partnersUsersUpdate2($partner_id, $partner_user_id, $partner_user_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersUsersUpdate2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_user_id** | **string**|  |
 **partner_user_resource** | [**\Swagger\Client\Model\PartnerUserResource**](../Model/\Swagger\Client\Model\PartnerUserResource.md)|  |

### Return type

[**\Swagger\Client\Model\PartnerUserResource**](../Model/PartnerUserResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

