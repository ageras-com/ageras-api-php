# Ageras\Api\PartnersApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**partnersActionsCreate**](PartnersApi.md#partnersActionsCreate) | **POST** /partners/{partner_id}/actions | Partner actions.
[**partnersAggregationsIndex**](PartnersApi.md#partnersAggregationsIndex) | **GET** /partners/aggregations | List facets and aggregations for the Partner Search.
[**partnersCertificationsCreate**](PartnersApi.md#partnersCertificationsCreate) | **POST** /partners/{partner_id}/certifications | Attach certification to partner.
[**partnersCertificationsDelete**](PartnersApi.md#partnersCertificationsDelete) | **DELETE** /partners/{partner_id}/certifications/{certification_id} | Detach certification from partner.
[**partnersCertificationsGet**](PartnersApi.md#partnersCertificationsGet) | **GET** /partners/{partner_id}/certifications/{certification_id} | Get Partner certification.
[**partnersCertificationsIndex**](PartnersApi.md#partnersCertificationsIndex) | **GET** /partners/{partner_id}/certifications | Get partner certifications.
[**partnersContentsDelete**](PartnersApi.md#partnersContentsDelete) | **DELETE** /partners/{partner_id}/contents/{content_key} | Delete content for a given partner.
[**partnersContentsGet**](PartnersApi.md#partnersContentsGet) | **GET** /partners/{partner_id}/contents/{content_key} | Get the content of a given partner.
[**partnersContentsUpdate**](PartnersApi.md#partnersContentsUpdate) | **PUT** /partners/{partner_id}/contents/{content_key} | Update content for a given partner.
[**partnersCouponsActionsCreate**](PartnersApi.md#partnersCouponsActionsCreate) | **POST** /partners/{partner_id}/coupons/{coupon_id}/actions | Coupon action
[**partnersCouponsCreate**](PartnersApi.md#partnersCouponsCreate) | **POST** /partners/{partner_id}/coupons | Create a new partner coupon.
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
[**partnersRefillsCreate**](PartnersApi.md#partnersRefillsCreate) | **POST** /partners/{partner_id}/refills | Create partner refill.
[**partnersRefillsIndex**](PartnersApi.md#partnersRefillsIndex) | **GET** /partners/{partner_id}/refills | Get partner refills.
[**partnersSubscriptionsActionsCreate**](PartnersApi.md#partnersSubscriptionsActionsCreate) | **POST** /partners/{partner_id}/subscriptions/{subscription_id}/actions | Cancel subscription.
[**partnersSubscriptionsCreate**](PartnersApi.md#partnersSubscriptionsCreate) | **POST** /partners/{partner_id}/subscriptions | Subscribe a partner.
[**partnersSubscriptionsIndex**](PartnersApi.md#partnersSubscriptionsIndex) | **GET** /partners/{partner_id}/subscriptions | Get partner&#39;s subscriptions.
[**partnersSubscriptionsUpdate**](PartnersApi.md#partnersSubscriptionsUpdate) | **PUT** /partners/{partner_id}/subscriptions | Update partner subscription.
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


# **partnersActionsCreate**
> \Ageras\Api\Model\PartnerResource partnersActionsCreate($partner_id , $partner_action_resource)

Partner actions.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_action_resource = new \Ageras\Api\Model\PartnerActionResource(); // \Ageras\Api\Model\PartnerActionResource | 

try {
    $result = $api_instance->partnersActionsCreate($partner_id , $partner_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_action_resource** | [**\Ageras\Api\Model\PartnerActionResource**](../Model/\Ageras\Api\Model\PartnerActionResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerResource**](../Model/PartnerResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersAggregationsIndex**
> \Ageras\Api\Model\AggregationResult partnersAggregationsIndex($criteria)

List facets and aggregations for the Partner Search.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$criteria = [
        'partner_id' => "partner_id_example"; // string | Partner id of the partners to filter by.
        'state' => "state_example"; // string | States for the partners.
        'is_enabled' => false; // bool | 
        'employee_id' => "employee_id_example"; // string | Employee id of the partners to filter by.
        'geo_code' => "geo_code_example"; // string | Geographic Location Code.
        'satisfaction' => "satisfaction_example"; // string | Partner Satisfaction Ratio.
        'punches_use_speed' => "punches_use_speed_example"; // string | Punches use speed.
        'refill_offer_id' => "refill_offer_id_example"; // string | Filter the partners by their refill offers
        'industry_id' => "industry_id_example"; // string | Filter the partners by their industry ids
        'industry' => "industry_example"; // string | Filter the partners by their industry identifiers
        'geo_point' => "geo_point_example"; // string | Location Point to sort partners by
        'geo_rect' => "geo_rect_example"; // string | Location Points to define an area to filter partners by. Provide the bottom left (southwest) and top right (northeast) corners of the reactangle separated by commas, e.g. \"52.19,12.42,52.85,14.22\".
        'geo_distance' => 56; // int | Location filter by distance
        'sort' => "relevance"; // string | Sort Partner's by a given property.
        'canvas_status' => "canvas_status_example"; // string | Canvas Status
        'is_public' => false; // bool | Only show partners that are visible to the public
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersAggregationsIndex($criteria);
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
 **refill_offer_id** | **string**| Filter the partners by their refill offers | [optional]
 **industry_id** | **string**| Filter the partners by their industry ids | [optional]
 **industry** | **string**| Filter the partners by their industry identifiers | [optional]
 **geo_point** | **string**| Location Point to sort partners by | [optional]
 **geo_rect** | **string**| Location Points to define an area to filter partners by. Provide the bottom left (southwest) and top right (northeast) corners of the reactangle separated by commas, e.g. \&quot;52.19,12.42,52.85,14.22\&quot;. | [optional]
 **geo_distance** | **int**| Location filter by distance | [optional]
 **sort** | **string**| Sort Partner&#39;s by a given property. | [optional] [default to relevance]
 **canvas_status** | **string**| Canvas Status | [optional]
 **is_public** | **bool**| Only show partners that are visible to the public | [optional] [default to false]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\Model\AggregationResult**](../Model/AggregationResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersCertificationsCreate**
> \Ageras\Api\Model\CertificationResource partnersCertificationsCreate($partner_id , $certification_resource)

Attach certification to partner.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$certification_resource = new \Ageras\Api\Model\CertificationResource(); // \Ageras\Api\Model\CertificationResource | 

try {
    $result = $api_instance->partnersCertificationsCreate($partner_id , $certification_resource);
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
 **certification_resource** | [**\Ageras\Api\Model\CertificationResource**](../Model/\Ageras\Api\Model\CertificationResource.md)|  |

### Return type

[**\Ageras\Api\Model\CertificationResource**](../Model/CertificationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersCertificationsDelete**
> partnersCertificationsDelete($partner_id,  $certification_id )

Detach certification from partner.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$certification_id = "certification_id_example"; // string | 

try {
    $api_instance->partnersCertificationsDelete($partner_id,  $certification_id );
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersCertificationsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **certification_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersCertificationsGet**
> \Ageras\Api\Model\CertificationResource partnersCertificationsGet($partner_id,  $certification_id )

Get Partner certification.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$certification_id = "certification_id_example"; // string | 

try {
    $result = $api_instance->partnersCertificationsGet($partner_id,  $certification_id );
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

[**\Ageras\Api\Model\CertificationResource**](../Model/CertificationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersCertificationsIndex**
> \Ageras\Api\Model\CertificationResult partnersCertificationsIndex($partner_id , $criteria)

Get partner certifications.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$criteria = [
        'types' => "types_example"; // string | Partner type enum. @var array
        'geo_code' => "geo_code_example"; // string | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersCertificationsIndex($partner_id , $criteria);
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

[**\Ageras\Api\Model\CertificationResult**](../Model/CertificationResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersContentsDelete**
> partnersContentsDelete($partner_id,  $content_key )

Delete content for a given partner.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$content_key = "content_key_example"; // string | 

try {
    $api_instance->partnersContentsDelete($partner_id,  $content_key );
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
> \Ageras\Api\Model\PartnerContentResource partnersContentsGet($partner_id,  $content_key )

Get the content of a given partner.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$content_key = "content_key_example"; // string | 

try {
    $result = $api_instance->partnersContentsGet($partner_id,  $content_key );
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

[**\Ageras\Api\Model\PartnerContentResource**](../Model/PartnerContentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersContentsUpdate**
> \Ageras\Api\Model\PartnerContentResource partnersContentsUpdate($partner_id,  $content_key , $partner_content_resource)

Update content for a given partner.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$content_key = "content_key_example"; // string | 
$partner_content_resource = new \Ageras\Api\Model\PartnerContentResource(); // \Ageras\Api\Model\PartnerContentResource | 

try {
    $result = $api_instance->partnersContentsUpdate($partner_id,  $content_key , $partner_content_resource);
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
 **partner_content_resource** | [**\Ageras\Api\Model\PartnerContentResource**](../Model/\Ageras\Api\Model\PartnerContentResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerContentResource**](../Model/PartnerContentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersCouponsActionsCreate**
> \Ageras\Api\Model\PartnerCouponResource partnersCouponsActionsCreate($partner_id,  $coupon_id , $partner_coupon_action_resource)

Coupon action

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$coupon_id = "coupon_id_example"; // string | 
$partner_coupon_action_resource = new \Ageras\Api\Model\PartnerCouponActionResource(); // \Ageras\Api\Model\PartnerCouponActionResource | 

try {
    $result = $api_instance->partnersCouponsActionsCreate($partner_id,  $coupon_id , $partner_coupon_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersCouponsActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **coupon_id** | **string**|  |
 **partner_coupon_action_resource** | [**\Ageras\Api\Model\PartnerCouponActionResource**](../Model/\Ageras\Api\Model\PartnerCouponActionResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerCouponResource**](../Model/PartnerCouponResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersCouponsCreate**
> \Ageras\Api\Model\PartnerCouponResource partnersCouponsCreate($partner_id , $partner_coupon_resource)

Create a new partner coupon.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_coupon_resource = new \Ageras\Api\Model\PartnerCouponResource(); // \Ageras\Api\Model\PartnerCouponResource | 

try {
    $result = $api_instance->partnersCouponsCreate($partner_id , $partner_coupon_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersCouponsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_coupon_resource** | [**\Ageras\Api\Model\PartnerCouponResource**](../Model/\Ageras\Api\Model\PartnerCouponResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerCouponResource**](../Model/PartnerCouponResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersCouponsIndex**
> \Ageras\Api\Model\PartnerCouponResult partnersCouponsIndex($partner_id , $criteria)

List Partner Coupons.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$criteria = [
        'show_expired' => false; // bool | Only show expired partner coupons.
        'show_deactivated' => false; // bool | Only show deactivated partner coupons.
        'show_empty' => false; // bool | Should empty partner coupons be included in the result.
        'sort' => "created_at"; // string | Sort the coupons by different values
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersCouponsIndex($partner_id , $criteria);
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
 **sort** | **string**| Sort the coupons by different values | [optional] [default to created_at]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\Model\PartnerCouponResult**](../Model/PartnerCouponResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersCreate**
> \Ageras\Api\Model\PartnerResource partnersCreate($partner_resource)

Create a Partner.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_resource = new \Ageras\Api\Model\PartnerResource(); // \Ageras\Api\Model\PartnerResource | 

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
 **partner_resource** | [**\Ageras\Api\Model\PartnerResource**](../Model/\Ageras\Api\Model\PartnerResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerResource**](../Model/PartnerResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersDelete**
> partnersDelete($partner_id )

Delete a Partner.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 

try {
    $api_instance->partnersDelete($partner_id );
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
> \Ageras\Api\Model\PartnerResource partnersGet($partner_id )

Get a Partner from a given partner_id.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 

try {
    $result = $api_instance->partnersGet($partner_id );
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

[**\Ageras\Api\Model\PartnerResource**](../Model/PartnerResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersIndex**
> \Ageras\Api\Model\PartnerResult partnersIndex($criteria)

List Partners.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$criteria = [
        'partner_id' => "partner_id_example"; // string | Partner id of the partners to filter by.
        'state' => "state_example"; // string | States for the partners.
        'is_enabled' => false; // bool | 
        'employee_id' => "employee_id_example"; // string | Employee id of the partners to filter by.
        'geo_code' => "geo_code_example"; // string | Geographic Location Code.
        'satisfaction' => "satisfaction_example"; // string | Partner Satisfaction Ratio.
        'punches_use_speed' => "punches_use_speed_example"; // string | Punches use speed.
        'refill_offer_id' => "refill_offer_id_example"; // string | Filter the partners by their refill offers
        'industry_id' => "industry_id_example"; // string | Filter the partners by their industry ids
        'industry' => "industry_example"; // string | Filter the partners by their industry identifiers
        'geo_point' => "geo_point_example"; // string | Location Point to sort partners by
        'geo_rect' => "geo_rect_example"; // string | Location Points to define an area to filter partners by. Provide the bottom left (southwest) and top right (northeast) corners of the reactangle separated by commas, e.g. \"52.19,12.42,52.85,14.22\".
        'geo_distance' => 56; // int | Location filter by distance
        'sort' => "relevance"; // string | Sort Partner's by a given property.
        'canvas_status' => "canvas_status_example"; // string | Canvas Status
        'is_public' => false; // bool | Only show partners that are visible to the public
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersIndex($criteria);
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
 **refill_offer_id** | **string**| Filter the partners by their refill offers | [optional]
 **industry_id** | **string**| Filter the partners by their industry ids | [optional]
 **industry** | **string**| Filter the partners by their industry identifiers | [optional]
 **geo_point** | **string**| Location Point to sort partners by | [optional]
 **geo_rect** | **string**| Location Points to define an area to filter partners by. Provide the bottom left (southwest) and top right (northeast) corners of the reactangle separated by commas, e.g. \&quot;52.19,12.42,52.85,14.22\&quot;. | [optional]
 **geo_distance** | **int**| Location filter by distance | [optional]
 **sort** | **string**| Sort Partner&#39;s by a given property. | [optional] [default to relevance]
 **canvas_status** | **string**| Canvas Status | [optional]
 **is_public** | **bool**| Only show partners that are visible to the public | [optional] [default to false]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\Model\PartnerResult**](../Model/PartnerResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersIndustriesCreate**
> \Ageras\Api\Model\PartnerIndustryResource partnersIndustriesCreate($partner_id , $partner_industry_resource)

Attach industry to partner.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_industry_resource = new \Ageras\Api\Model\PartnerIndustryResource(); // \Ageras\Api\Model\PartnerIndustryResource | 

try {
    $result = $api_instance->partnersIndustriesCreate($partner_id , $partner_industry_resource);
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
 **partner_industry_resource** | [**\Ageras\Api\Model\PartnerIndustryResource**](../Model/\Ageras\Api\Model\PartnerIndustryResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerIndustryResource**](../Model/PartnerIndustryResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersIndustriesDelete**
> partnersIndustriesDelete($partner_id,  $industry_id )

Detach industry from partner.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$industry_id = "industry_id_example"; // string | 

try {
    $api_instance->partnersIndustriesDelete($partner_id,  $industry_id );
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
> \Ageras\Api\Model\PartnerIndustryResource partnersIndustriesGet($partner_id,  $industry_id )

Get a given industry for partner.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$industry_id = "industry_id_example"; // string | 

try {
    $result = $api_instance->partnersIndustriesGet($partner_id,  $industry_id );
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

[**\Ageras\Api\Model\PartnerIndustryResource**](../Model/PartnerIndustryResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersIndustriesIndex**
> \Ageras\Api\Model\PartnerIndustryResult partnersIndustriesIndex($partner_id , $criteria)

Get partner industries.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$criteria = [
        'geo_code' => "geo_code_example"; // string | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersIndustriesIndex($partner_id , $criteria);
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

[**\Ageras\Api\Model\PartnerIndustryResult**](../Model/PartnerIndustryResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersLeadtypesCreate**
> \Ageras\Api\Model\PartnerTypesResource partnersLeadtypesCreate($partner_id , $lead_type_resource)

Attach type to partner.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$lead_type_resource = new \Ageras\Api\Model\LeadTypeResource(); // \Ageras\Api\Model\LeadTypeResource | 

try {
    $result = $api_instance->partnersLeadtypesCreate($partner_id , $lead_type_resource);
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
 **lead_type_resource** | [**\Ageras\Api\Model\LeadTypeResource**](../Model/\Ageras\Api\Model\LeadTypeResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerTypesResource**](../Model/PartnerTypesResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersLeadtypesDelete**
> partnersLeadtypesDelete($partner_id,  $lead_type_id )

Detach type from partner.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$lead_type_id = "lead_type_id_example"; // string | 

try {
    $api_instance->partnersLeadtypesDelete($partner_id,  $lead_type_id );
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
> \Ageras\Api\Model\PartnerTypesResource partnersLeadtypesGet($lead_type_id )

Retrieve a given lead type.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$lead_type_id = "lead_type_id_example"; // string | 

try {
    $result = $api_instance->partnersLeadtypesGet($lead_type_id );
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

[**\Ageras\Api\Model\PartnerTypesResource**](../Model/PartnerTypesResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersLeadtypesGet2**
> \Ageras\Api\Model\PartnerTypesResource partnersLeadtypesGet2($partner_id,  $lead_type_id )

Retrieve a given lead type.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$lead_type_id = "lead_type_id_example"; // string | 

try {
    $result = $api_instance->partnersLeadtypesGet2($partner_id,  $lead_type_id );
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

[**\Ageras\Api\Model\PartnerTypesResource**](../Model/PartnerTypesResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersLeadtypesIndex**
> \Ageras\Api\Model\PartnerTypesResult partnersLeadtypesIndex($criteria)

Get partner types criteria.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$criteria = [
        'partner_id' => 56; // int | Partner ID. @var int
        'types' => "types_example"; // string | Partner type enum. @var array
        'geo_code' => "geo_code_example"; // string | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersLeadtypesIndex($criteria);
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

[**\Ageras\Api\Model\PartnerTypesResult**](../Model/PartnerTypesResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersLeadtypesIndex2**
> \Ageras\Api\Model\PartnerTypesResult partnersLeadtypesIndex2($partner_id , $criteria)

Get partner types criteria.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$criteria = [
        'types' => "types_example"; // string | Partner type enum. @var array
        'geo_code' => "geo_code_example"; // string | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersLeadtypesIndex2($partner_id , $criteria);
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

[**\Ageras\Api\Model\PartnerTypesResult**](../Model/PartnerTypesResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersNotesCreate**
> \Ageras\Api\Model\PartnerNoteResource partnersNotesCreate($partner_note_resource)

Create Partner notes.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_note_resource = new \Ageras\Api\Model\PartnerNoteResource(); // \Ageras\Api\Model\PartnerNoteResource | 

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
 **partner_note_resource** | [**\Ageras\Api\Model\PartnerNoteResource**](../Model/\Ageras\Api\Model\PartnerNoteResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerNoteResource**](../Model/PartnerNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersNotesCreate2**
> \Ageras\Api\Model\PartnerNoteResource partnersNotesCreate2($partner_id , $partner_note_resource)

Create Partner notes.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_note_resource = new \Ageras\Api\Model\PartnerNoteResource(); // \Ageras\Api\Model\PartnerNoteResource | 

try {
    $result = $api_instance->partnersNotesCreate2($partner_id , $partner_note_resource);
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
 **partner_note_resource** | [**\Ageras\Api\Model\PartnerNoteResource**](../Model/\Ageras\Api\Model\PartnerNoteResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerNoteResource**](../Model/PartnerNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersNotesGet**
> \Ageras\Api\Model\PartnerNoteResource partnersNotesGet($partner_id,  $partner_note_id )

Retrieve a given partner note by partner id and partner_note_id.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_note_id = "partner_note_id_example"; // string | 

try {
    $result = $api_instance->partnersNotesGet($partner_id,  $partner_note_id );
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

[**\Ageras\Api\Model\PartnerNoteResource**](../Model/PartnerNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersNotesIndex**
> \Ageras\Api\Model\PartnerNoteResult partnersNotesIndex($criteria)

Retrieve lists of notes.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$criteria = [
        'partner_id' => 56; // int | 
        'types' => "all"; // string | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersNotesIndex($criteria);
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

[**\Ageras\Api\Model\PartnerNoteResult**](../Model/PartnerNoteResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersNotesIndex2**
> \Ageras\Api\Model\PartnerNoteResult partnersNotesIndex2($partner_id , $criteria)

Retrieve lists of notes.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$criteria = [
        'types' => "all"; // string | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersNotesIndex2($partner_id , $criteria);
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

[**\Ageras\Api\Model\PartnerNoteResult**](../Model/PartnerNoteResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersRefillsCreate**
> \Ageras\Api\Model\PartnerRefillResource partnersRefillsCreate($partner_id , $partner_refill_resource)

Create partner refill.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_refill_resource = new \Ageras\Api\Model\PartnerRefillResource(); // \Ageras\Api\Model\PartnerRefillResource | 

try {
    $result = $api_instance->partnersRefillsCreate($partner_id , $partner_refill_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersRefillsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_refill_resource** | [**\Ageras\Api\Model\PartnerRefillResource**](../Model/\Ageras\Api\Model\PartnerRefillResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerRefillResource**](../Model/PartnerRefillResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersRefillsIndex**
> \Ageras\Api\Model\PartnerRefillResult partnersRefillsIndex($partner_id , $criteria)

Get partner refills.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$criteria = [
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersRefillsIndex($partner_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersRefillsIndex: ', $e->getMessage(), PHP_EOL;
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

[**\Ageras\Api\Model\PartnerRefillResult**](../Model/PartnerRefillResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersSubscriptionsActionsCreate**
> \Ageras\Api\Model\PartnerSubscriptionActionResource partnersSubscriptionsActionsCreate($partner_id,  $subscription_id , $partner_subscription_action_resource)

Cancel subscription.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$subscription_id = "subscription_id_example"; // string | 
$partner_subscription_action_resource = new \Ageras\Api\Model\PartnerSubscriptionActionResource(); // \Ageras\Api\Model\PartnerSubscriptionActionResource | 

try {
    $result = $api_instance->partnersSubscriptionsActionsCreate($partner_id,  $subscription_id , $partner_subscription_action_resource);
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
 **partner_subscription_action_resource** | [**\Ageras\Api\Model\PartnerSubscriptionActionResource**](../Model/\Ageras\Api\Model\PartnerSubscriptionActionResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerSubscriptionActionResource**](../Model/PartnerSubscriptionActionResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersSubscriptionsCreate**
> \Ageras\Api\Model\PartnerSubscriptionResource partnersSubscriptionsCreate($partner_id , $partner_subscription_resource)

Subscribe a partner.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_subscription_resource = new \Ageras\Api\Model\PartnerSubscriptionResource(); // \Ageras\Api\Model\PartnerSubscriptionResource | 

try {
    $result = $api_instance->partnersSubscriptionsCreate($partner_id , $partner_subscription_resource);
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
 **partner_subscription_resource** | [**\Ageras\Api\Model\PartnerSubscriptionResource**](../Model/\Ageras\Api\Model\PartnerSubscriptionResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerSubscriptionResource**](../Model/PartnerSubscriptionResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersSubscriptionsIndex**
> \Ageras\Api\Model\PartnerSubscriptionResult partnersSubscriptionsIndex($partner_id , $criteria)

Get partner's subscriptions.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$criteria = [
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersSubscriptionsIndex($partner_id , $criteria);
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

[**\Ageras\Api\Model\PartnerSubscriptionResult**](../Model/PartnerSubscriptionResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersSubscriptionsUpdate**
> \Ageras\Api\Model\PartnerSubscriptionResource partnersSubscriptionsUpdate($partner_id , $partner_subscription_resource)

Update partner subscription.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_subscription_resource = new \Ageras\Api\Model\PartnerSubscriptionResource(); // \Ageras\Api\Model\PartnerSubscriptionResource | 

try {
    $result = $api_instance->partnersSubscriptionsUpdate($partner_id , $partner_subscription_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersSubscriptionsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_subscription_resource** | [**\Ageras\Api\Model\PartnerSubscriptionResource**](../Model/\Ageras\Api\Model\PartnerSubscriptionResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerSubscriptionResource**](../Model/PartnerSubscriptionResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersSuggestIndex**
> \Ageras\Api\Model\PartnerSuggestResult partnersSuggestIndex($criteria)

Suggest Partners to search for.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$criteria = [
        'limit' => 56; // int | Limit the number of suggest resources pr. page.
        'geo_code' => "geo_code_example"; // string | Geo Location Code ( ISO 3166 ).
        'query' => "query_example"; // string | The search query to search by.
        'type' => "type_example"; // string | Type to search for.
        'partner_state' => "partner_state_example"; // string | Partner state.
        'page' => 56; // int | The page position in the result.
    ];

try {
    $result = $api_instance->partnersSuggestIndex($criteria);
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
 **partner_state** | **string**| Partner state. | [optional]
 **page** | **int**| The page position in the result. | [optional]

### Return type

[**\Ageras\Api\Model\PartnerSuggestResult**](../Model/PartnerSuggestResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersTransactionsIndex**
> \Ageras\Api\Model\PartnerCouponTransactionResult partnersTransactionsIndex($partner_id , $criteria)

List Transactions for a given Partner.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$criteria = [
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersTransactionsIndex($partner_id , $criteria);
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

[**\Ageras\Api\Model\PartnerCouponTransactionResult**](../Model/PartnerCouponTransactionResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUpdate**
> \Ageras\Api\Model\PartnerResource partnersUpdate($partner_id , $partner_resource)

Update a Partner.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_resource = new \Ageras\Api\Model\PartnerResource(); // \Ageras\Api\Model\PartnerResource | 

try {
    $result = $api_instance->partnersUpdate($partner_id , $partner_resource);
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
 **partner_resource** | [**\Ageras\Api\Model\PartnerResource**](../Model/\Ageras\Api\Model\PartnerResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerResource**](../Model/PartnerResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersContentsDelete**
> partnersUsersContentsDelete($partner_user_id,  $content_key )

Delete content for a given partner user.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_user_id = "partner_user_id_example"; // string | 
$content_key = "content_key_example"; // string | 

try {
    $api_instance->partnersUsersContentsDelete($partner_user_id,  $content_key );
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
> partnersUsersContentsDelete2($partner_id,  $partner_user_id,  $content_key )

Delete content for a given partner user.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_user_id = "partner_user_id_example"; // string | 
$content_key = "content_key_example"; // string | 

try {
    $api_instance->partnersUsersContentsDelete2($partner_id,  $partner_user_id,  $content_key );
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
> \Ageras\Api\Model\PartnerContentResource partnersUsersContentsGet($partner_user_id,  $content_key )

Get the content of a given partner user.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_user_id = "partner_user_id_example"; // string | 
$content_key = "content_key_example"; // string | 

try {
    $result = $api_instance->partnersUsersContentsGet($partner_user_id,  $content_key );
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

[**\Ageras\Api\Model\PartnerContentResource**](../Model/PartnerContentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersContentsGet2**
> \Ageras\Api\Model\PartnerContentResource partnersUsersContentsGet2($partner_id,  $partner_user_id,  $content_key )

Get the content of a given partner user.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_user_id = "partner_user_id_example"; // string | 
$content_key = "content_key_example"; // string | 

try {
    $result = $api_instance->partnersUsersContentsGet2($partner_id,  $partner_user_id,  $content_key );
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

[**\Ageras\Api\Model\PartnerContentResource**](../Model/PartnerContentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersContentsUpdate**
> \Ageras\Api\Model\PartnerContentResource partnersUsersContentsUpdate($partner_user_id,  $content_key , $partner_content_resource)

Update content for a given partner user.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_user_id = "partner_user_id_example"; // string | 
$content_key = "content_key_example"; // string | 
$partner_content_resource = new \Ageras\Api\Model\PartnerContentResource(); // \Ageras\Api\Model\PartnerContentResource | 

try {
    $result = $api_instance->partnersUsersContentsUpdate($partner_user_id,  $content_key , $partner_content_resource);
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
 **partner_content_resource** | [**\Ageras\Api\Model\PartnerContentResource**](../Model/\Ageras\Api\Model\PartnerContentResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerContentResource**](../Model/PartnerContentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersContentsUpdate2**
> \Ageras\Api\Model\PartnerContentResource partnersUsersContentsUpdate2($partner_id,  $partner_user_id,  $content_key , $partner_content_resource)

Update content for a given partner user.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_user_id = "partner_user_id_example"; // string | 
$content_key = "content_key_example"; // string | 
$partner_content_resource = new \Ageras\Api\Model\PartnerContentResource(); // \Ageras\Api\Model\PartnerContentResource | 

try {
    $result = $api_instance->partnersUsersContentsUpdate2($partner_id,  $partner_user_id,  $content_key , $partner_content_resource);
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
 **partner_content_resource** | [**\Ageras\Api\Model\PartnerContentResource**](../Model/\Ageras\Api\Model\PartnerContentResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerContentResource**](../Model/PartnerContentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersCreate**
> \Ageras\Api\Model\PartnerUserResource partnersUsersCreate($partner_user_resource)

Create a partner user.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_user_resource = new \Ageras\Api\Model\PartnerUserResource(); // \Ageras\Api\Model\PartnerUserResource | 

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
 **partner_user_resource** | [**\Ageras\Api\Model\PartnerUserResource**](../Model/\Ageras\Api\Model\PartnerUserResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerUserResource**](../Model/PartnerUserResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersCreate2**
> \Ageras\Api\Model\PartnerUserResource partnersUsersCreate2($partner_id , $partner_user_resource)

Create a partner user.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_user_resource = new \Ageras\Api\Model\PartnerUserResource(); // \Ageras\Api\Model\PartnerUserResource | 

try {
    $result = $api_instance->partnersUsersCreate2($partner_id , $partner_user_resource);
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
 **partner_user_resource** | [**\Ageras\Api\Model\PartnerUserResource**](../Model/\Ageras\Api\Model\PartnerUserResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerUserResource**](../Model/PartnerUserResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersDelete**
> partnersUsersDelete($partner_id,  $partner_user_id )

Delete partner user from partner.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_user_id = "partner_user_id_example"; // string | 

try {
    $api_instance->partnersUsersDelete($partner_id,  $partner_user_id );
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
> \Ageras\Api\Model\PartnerUserResource partnersUsersGet($partner_user_id )

Get a Partner User by a given partner_user_id.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_user_id = "partner_user_id_example"; // string | 

try {
    $result = $api_instance->partnersUsersGet($partner_user_id );
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

[**\Ageras\Api\Model\PartnerUserResource**](../Model/PartnerUserResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersGet2**
> \Ageras\Api\Model\PartnerUserResource partnersUsersGet2($partner_id,  $partner_user_id )

Get a Partner User by a given partner_user_id.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_user_id = "partner_user_id_example"; // string | 

try {
    $result = $api_instance->partnersUsersGet2($partner_id,  $partner_user_id );
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

[**\Ageras\Api\Model\PartnerUserResource**](../Model/PartnerUserResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersIndex**
> \Ageras\Api\Model\PartnerUserResult partnersUsersIndex($criteria)

List partner users.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$criteria = [
        'partner_user_id' => "partner_user_id_example"; // string | Partner User Id.
        'partner_id' => "partner_id_example"; // string | Partner id for the partner users to filter by.
        'sort' => "sort_example"; // string | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersUsersIndex($criteria);
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

[**\Ageras\Api\Model\PartnerUserResult**](../Model/PartnerUserResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersIndex2**
> \Ageras\Api\Model\PartnerUserResult partnersUsersIndex2($partner_id , $criteria)

List partner users.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$criteria = [
        'partner_user_id' => "partner_user_id_example"; // string | Partner User Id.
        'sort' => "sort_example"; // string | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersUsersIndex2($partner_id , $criteria);
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

[**\Ageras\Api\Model\PartnerUserResult**](../Model/PartnerUserResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersUpdate**
> \Ageras\Api\Model\PartnerUserResource partnersUsersUpdate($partner_user_id , $partner_user_resource)

Update partner user profile.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_resource = new \Ageras\Api\Model\PartnerUserResource(); // \Ageras\Api\Model\PartnerUserResource | 

try {
    $result = $api_instance->partnersUsersUpdate($partner_user_id , $partner_user_resource);
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
 **partner_user_resource** | [**\Ageras\Api\Model\PartnerUserResource**](../Model/\Ageras\Api\Model\PartnerUserResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerUserResource**](../Model/PartnerUserResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersUpdate2**
> \Ageras\Api\Model\PartnerUserResource partnersUsersUpdate2($partner_id,  $partner_user_id , $partner_user_resource)

Update partner user profile.

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

$api_instance = new Ageras\Api\Api\PartnersApi();
$partner_id = "partner_id_example"; // string | 
$partner_user_id = "partner_user_id_example"; // string | 
$partner_user_resource = new \Ageras\Api\Model\PartnerUserResource(); // \Ageras\Api\Model\PartnerUserResource | 

try {
    $result = $api_instance->partnersUsersUpdate2($partner_id,  $partner_user_id , $partner_user_resource);
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
 **partner_user_resource** | [**\Ageras\Api\Model\PartnerUserResource**](../Model/\Ageras\Api\Model\PartnerUserResource.md)|  |

### Return type

[**\Ageras\Api\Model\PartnerUserResource**](../Model/PartnerUserResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

