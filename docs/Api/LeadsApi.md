# Swagger\Client\LeadsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**leadsCreate**](LeadsApi.md#leadsCreate) | **POST** /leads | Create a new Lead.
[**leadsDelete**](LeadsApi.md#leadsDelete) | **DELETE** /leads/{lead_id} | Delete a Lead from a given lead_id.
[**leadsGet**](LeadsApi.md#leadsGet) | **GET** /leads/{lead_id} | Return a Lead from a Lead Id.
[**leadsIndex**](LeadsApi.md#leadsIndex) | **GET** /leads | Search for Lead&#39;s by a given set of criteria.
[**leadsOffersCreate**](LeadsApi.md#leadsOffersCreate) | **POST** /leads/{lead_id}/offers | Create a new offer for a given Lead.
[**leadsOffersGet**](LeadsApi.md#leadsOffersGet) | **GET** /leads/offers/{lead_offer_id} | Get an offer by id.
[**leadsOffersGet2**](LeadsApi.md#leadsOffersGet2) | **GET** /leads/{lead_id}/offers/{lead_offer_id} | Get an offer by id.
[**leadsOffersIndex**](LeadsApi.md#leadsOffersIndex) | **GET** /leads/offers | List the offers connected to a given Lead.
[**leadsOffersIndex2**](LeadsApi.md#leadsOffersIndex2) | **GET** /leads/{lead_id}/offers | List the offers connected to a given Lead.
[**leadsTypesIndex**](LeadsApi.md#leadsTypesIndex) | **GET** /leads/types | Index lead types.
[**leadsUpdate**](LeadsApi.md#leadsUpdate) | **PUT** /leads/{lead_id} | Update Properties on a given Lead.


# **leadsCreate**
> \Swagger\Client\Model\LeadResource leadsCreate($lead_resource)

Create a new Lead.

Create a new Lead.

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

$api_instance = new Swagger\Client\Api\LeadsApi();
$lead_resource = new \Swagger\Client\Model\LeadResource(); // \Swagger\Client\Model\LeadResource | The given Lead Resource that should be created

try {
    $result = $api_instance->leadsCreate($lead_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_resource** | [**\Swagger\Client\Model\LeadResource**](../Model/\Swagger\Client\Model\LeadResource.md)| The given Lead Resource that should be created |

### Return type

[**\Swagger\Client\Model\LeadResource**](../Model/LeadResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsDelete**
> leadsDelete($lead_id)

Delete a Lead from a given lead_id.

Delete a Lead from a given lead_id.

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

$api_instance = new Swagger\Client\Api\LeadsApi();
$lead_id = "lead_id_example"; // string | 

try {
    $api_instance->leadsDelete($lead_id);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsGet**
> \Swagger\Client\Model\LeadResource leadsGet($lead_id)

Return a Lead from a Lead Id.

Return a Lead from a Lead Id.

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

$api_instance = new Swagger\Client\Api\LeadsApi();
$lead_id = "lead_id_example"; // string | The id the Lead to return

try {
    $result = $api_instance->leadsGet($lead_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**| The id the Lead to return |

### Return type

[**\Swagger\Client\Model\LeadResource**](../Model/LeadResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsIndex**
> \Swagger\Client\Model\LeadResult leadsIndex($lead_id, $needs_more_offers, $phone, $filter, $partner_id, $geo_code, $sort, $status, $limit, $page, $query)

Search for Lead's by a given set of criteria.

Search for Lead's by a given set of criteria.

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

$api_instance = new Swagger\Client\Api\LeadsApi();
$lead_id = "lead_id_example"; // string | List of leads identification(ID).
$needs_more_offers = false; // bool | Only list leads that need more offers.
$phone = "phone_example"; // string | Filter by a given phone number.
$filter = "none"; // string | Apply a pre-defined filter.
$partner_id = 56; // int | Provide a given partner id to filter by. Requires \"filter\" to be \"bought_by_partner\" or \"segmented_for_partner\".
$geo_code = "geo_code_example"; // string | Geographic Location Code.
$sort = "sort_example"; // string | Sort Leads by a given attribute.
$status = "unknown"; // string | Status for the given lead.
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->leadsIndex($lead_id, $needs_more_offers, $phone, $filter, $partner_id, $geo_code, $sort, $status, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**| List of leads identification(ID). | [optional]
 **needs_more_offers** | **bool**| Only list leads that need more offers. | [optional] [default to false]
 **phone** | **string**| Filter by a given phone number. | [optional]
 **filter** | **string**| Apply a pre-defined filter. | [optional] [default to none]
 **partner_id** | **int**| Provide a given partner id to filter by. Requires \&quot;filter\&quot; to be \&quot;bought_by_partner\&quot; or \&quot;segmented_for_partner\&quot;. | [optional]
 **geo_code** | **string**| Geographic Location Code. | [optional]
 **sort** | **string**| Sort Leads by a given attribute. | [optional]
 **status** | **string**| Status for the given lead. | [optional] [default to unknown]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\LeadResult**](../Model/LeadResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsOffersCreate**
> \Swagger\Client\Model\LeadOfferResource leadsOffersCreate($lead_id, $lead_offer_resource)

Create a new offer for a given Lead.

Create a new offer for a given Lead.

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

$api_instance = new Swagger\Client\Api\LeadsApi();
$lead_id = "lead_id_example"; // string | 
$lead_offer_resource = new \Swagger\Client\Model\LeadOfferResource(); // \Swagger\Client\Model\LeadOfferResource | 

try {
    $result = $api_instance->leadsOffersCreate($lead_id, $lead_offer_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsOffersCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **lead_offer_resource** | [**\Swagger\Client\Model\LeadOfferResource**](../Model/\Swagger\Client\Model\LeadOfferResource.md)|  |

### Return type

[**\Swagger\Client\Model\LeadOfferResource**](../Model/LeadOfferResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsOffersGet**
> \Swagger\Client\Model\LeadOfferResource leadsOffersGet($lead_offer_id)

Get an offer by id.

Get an offer by id.

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

$api_instance = new Swagger\Client\Api\LeadsApi();
$lead_offer_id = "lead_offer_id_example"; // string | 

try {
    $result = $api_instance->leadsOffersGet($lead_offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsOffersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_offer_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\LeadOfferResource**](../Model/LeadOfferResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsOffersGet2**
> \Swagger\Client\Model\LeadOfferResource leadsOffersGet2($lead_id, $lead_offer_id)

Get an offer by id.

Get an offer by id.

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

$api_instance = new Swagger\Client\Api\LeadsApi();
$lead_id = "lead_id_example"; // string | 
$lead_offer_id = "lead_offer_id_example"; // string | 

try {
    $result = $api_instance->leadsOffersGet2($lead_id, $lead_offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsOffersGet2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **lead_offer_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\LeadOfferResource**](../Model/LeadOfferResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsOffersIndex**
> \Swagger\Client\Model\LeadOfferResult leadsOffersIndex($lead_id, $lead_offer_id, $partner_id, $limit, $page, $query)

List the offers connected to a given Lead.

List the offers connected to a given Lead.

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

$api_instance = new Swagger\Client\Api\LeadsApi();
$lead_id = "lead_id_example"; // string | List of leads identification(ID).
$lead_offer_id = "lead_offer_id_example"; // string | List of lead offers identification(ID).
$partner_id = "partner_id_example"; // string | Offers belonging to a given partner.
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->leadsOffersIndex($lead_id, $lead_offer_id, $partner_id, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsOffersIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**| List of leads identification(ID). | [optional]
 **lead_offer_id** | **string**| List of lead offers identification(ID). | [optional]
 **partner_id** | **string**| Offers belonging to a given partner. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\LeadOfferResult**](../Model/LeadOfferResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsOffersIndex2**
> \Swagger\Client\Model\LeadOfferResult leadsOffersIndex2($lead_id, $lead_offer_id, $partner_id, $limit, $page, $query)

List the offers connected to a given Lead.

List the offers connected to a given Lead.

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

$api_instance = new Swagger\Client\Api\LeadsApi();
$lead_id = "lead_id_example"; // string | 
$lead_offer_id = "lead_offer_id_example"; // string | List of lead offers identification(ID).
$partner_id = "partner_id_example"; // string | Offers belonging to a given partner.
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->leadsOffersIndex2($lead_id, $lead_offer_id, $partner_id, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsOffersIndex2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **lead_offer_id** | **string**| List of lead offers identification(ID). | [optional]
 **partner_id** | **string**| Offers belonging to a given partner. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\LeadOfferResult**](../Model/LeadOfferResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsTypesIndex**
> \Swagger\Client\Model\LeadTypeResult leadsTypesIndex($type_id, $title, $geo_code, $limit, $page, $query)

Index lead types.

Index lead types.

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

$api_instance = new Swagger\Client\Api\LeadsApi();
$type_id = "type_id_example"; // string | Type ID. @var int
$title = "title_example"; // string | Type title in its native language. @var string
$geo_code = "geo_code_example"; // string | Industry geo code origin. @var string
$limit = 56; // int | Limit of industries per page. @var int
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->leadsTypesIndex($type_id, $title, $geo_code, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsTypesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type_id** | **string**| Type ID. @var int | [optional]
 **title** | **string**| Type title in its native language. @var string | [optional]
 **geo_code** | **string**| Industry geo code origin. @var string | [optional]
 **limit** | **int**| Limit of industries per page. @var int | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Swagger\Client\Model\LeadTypeResult**](../Model/LeadTypeResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsUpdate**
> \Swagger\Client\Model\LeadResource leadsUpdate($lead_id, $lead_resource)

Update Properties on a given Lead.

Update Properties on a given Lead.

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

$api_instance = new Swagger\Client\Api\LeadsApi();
$lead_id = "lead_id_example"; // string | 
$lead_resource = new \Swagger\Client\Model\LeadResource(); // \Swagger\Client\Model\LeadResource | 

try {
    $result = $api_instance->leadsUpdate($lead_id, $lead_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **lead_resource** | [**\Swagger\Client\Model\LeadResource**](../Model/\Swagger\Client\Model\LeadResource.md)|  |

### Return type

[**\Swagger\Client\Model\LeadResource**](../Model/LeadResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

