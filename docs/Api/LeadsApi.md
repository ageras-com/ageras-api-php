# Ageras\Api\LeadsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**leadsActionsCreate**](LeadsApi.md#leadsActionsCreate) | **POST** /leads/{lead_id}/actions | Coupon action
[**leadsCreate**](LeadsApi.md#leadsCreate) | **POST** /leads | Create a new Lead.
[**leadsDelete**](LeadsApi.md#leadsDelete) | **DELETE** /leads/{lead_id} | Delete a Lead from a given lead_id.
[**leadsGet**](LeadsApi.md#leadsGet) | **GET** /leads/{lead_id} | Return a Lead from a Lead Id.
[**leadsIndex**](LeadsApi.md#leadsIndex) | **GET** /leads | Search for Lead&#39;s by a given set of criteria.
[**leadsNotesCreate**](LeadsApi.md#leadsNotesCreate) | **POST** /leads/{lead_id}/notes | Create lead note
[**leadsOffersCreate**](LeadsApi.md#leadsOffersCreate) | **POST** /leads/{lead_id}/offers | Create a new offer for a given Lead.
[**leadsOffersGet**](LeadsApi.md#leadsOffersGet) | **GET** /leads/offers/{lead_offer_id} | Get an offer by id.
[**leadsOffersGet2**](LeadsApi.md#leadsOffersGet2) | **GET** /leads/{lead_id}/offers/{lead_offer_id} | Get an offer by id.
[**leadsOffersIndex**](LeadsApi.md#leadsOffersIndex) | **GET** /leads/offers | List the offers connected to a given Lead.
[**leadsOffersIndex2**](LeadsApi.md#leadsOffersIndex2) | **GET** /leads/{lead_id}/offers | List the offers connected to a given Lead.
[**leadsQuotesActionsCreate**](LeadsApi.md#leadsQuotesActionsCreate) | **POST** /leads/{lead_id}/quotes/{lead_quote_id}/actions | Publish a given quote, accept it and other actions.
[**leadsQuotesCreate**](LeadsApi.md#leadsQuotesCreate) | **POST** /leads/{lead_id}/quotes | Create a new quote for a given Lead.
[**leadsQuotesGet**](LeadsApi.md#leadsQuotesGet) | **GET** /leads/quotes/{lead_quote_id} | Get an quote by id.
[**leadsQuotesGet2**](LeadsApi.md#leadsQuotesGet2) | **GET** /leads/{lead_id}/quotes/{lead_quote_id} | Get an quote by id.
[**leadsQuotesIndex**](LeadsApi.md#leadsQuotesIndex) | **GET** /leads/quotes | List the quotes connected to a given Lead.
[**leadsQuotesIndex2**](LeadsApi.md#leadsQuotesIndex2) | **GET** /leads/{lead_id}/quotes | List the quotes connected to a given Lead.
[**leadsTypesIndex**](LeadsApi.md#leadsTypesIndex) | **GET** /leads/types | Index lead types.
[**leadsUpdate**](LeadsApi.md#leadsUpdate) | **PUT** /leads/{lead_id} | Update Properties on a given Lead.


# **leadsActionsCreate**
> \Ageras\Api\LeadResource leadsActionsCreate($lead_id , $lead_action_resource)

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

$api_instance = new Ageras\Api\Api\LeadsApi();
$lead_id = "lead_id_example"; // string | 
$lead_action_resource = new \Ageras\Api\LeadActionResource(); // \Ageras\Api\LeadActionResource | 

try {
    $result = $api_instance->leadsActionsCreate($lead_id , $lead_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **lead_action_resource** | [**\Ageras\Api\LeadActionResource**](../Model/\Ageras\Api\LeadActionResource.md)|  |

### Return type

[**\Ageras\Api\LeadResource**](../Model/LeadResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsCreate**
> \Ageras\Api\LeadResource leadsCreate($lead_resource)

Create a new Lead.

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

$api_instance = new Ageras\Api\Api\LeadsApi();
$lead_resource = new \Ageras\Api\LeadResource(); // \Ageras\Api\LeadResource | The given Lead Resource that should be created

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
 **lead_resource** | [**\Ageras\Api\LeadResource**](../Model/\Ageras\Api\LeadResource.md)| The given Lead Resource that should be created |

### Return type

[**\Ageras\Api\LeadResource**](../Model/LeadResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsDelete**
> leadsDelete($lead_id )

Delete a Lead from a given lead_id.

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

$api_instance = new Ageras\Api\Api\LeadsApi();
$lead_id = "lead_id_example"; // string | 

try {
    $api_instance->leadsDelete($lead_id );
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
> \Ageras\Api\LeadResource leadsGet($lead_id )

Return a Lead from a Lead Id.

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

$api_instance = new Ageras\Api\Api\LeadsApi();
$lead_id = "lead_id_example"; // string | The id the Lead to return

try {
    $result = $api_instance->leadsGet($lead_id );
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

[**\Ageras\Api\LeadResource**](../Model/LeadResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsIndex**
> \Ageras\Api\LeadResult leadsIndex($criteria)

Search for Lead's by a given set of criteria.

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

$api_instance = new Ageras\Api\Api\LeadsApi();
$criteria = [
        'lead_id' => "lead_id_example"; // string | List of leads identification(ID).
        'phone' => "phone_example"; // string | Filter by a given phone number.
        'filter' => "filter_example"; // string | Apply a pre-defined filter.
        'partner_filter' => "none"; // string | Apply a pre-defined partner filter.
        'partner_id' => 56; // int | Provide a given partner id to filter by. Requires \"filter\" to be \"bought_by_partner\" or \"segmented_for_partner\".
        'geo_code' => "geo_code_example"; // string | Geographic Location Code.
        'sort' => "created_at"; // string | Sort Leads by a given attribute.
        'status' => "unknown"; // string | Status for the given lead.
        'client_id' => 56; // int | Lead's client
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->leadsIndex($criteria);
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
 **phone** | **string**| Filter by a given phone number. | [optional]
 **filter** | **string**| Apply a pre-defined filter. | [optional]
 **partner_filter** | **string**| Apply a pre-defined partner filter. | [optional] [default to none]
 **partner_id** | **int**| Provide a given partner id to filter by. Requires \&quot;filter\&quot; to be \&quot;bought_by_partner\&quot; or \&quot;segmented_for_partner\&quot;. | [optional]
 **geo_code** | **string**| Geographic Location Code. | [optional]
 **sort** | **string**| Sort Leads by a given attribute. | [optional] [default to created_at]
 **status** | **string**| Status for the given lead. | [optional] [default to unknown]
 **client_id** | **int**| Lead&#39;s client | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\LeadResult**](../Model/LeadResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsNotesCreate**
> \Ageras\Api\LeadResource leadsNotesCreate($lead_id , $lead_note_resource)

Create lead note

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

$api_instance = new Ageras\Api\Api\LeadsApi();
$lead_id = "lead_id_example"; // string | 
$lead_note_resource = new \Ageras\Api\LeadNoteResource(); // \Ageras\Api\LeadNoteResource | 

try {
    $result = $api_instance->leadsNotesCreate($lead_id , $lead_note_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsNotesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **lead_note_resource** | [**\Ageras\Api\LeadNoteResource**](../Model/\Ageras\Api\LeadNoteResource.md)|  |

### Return type

[**\Ageras\Api\LeadResource**](../Model/LeadResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsOffersCreate**
> \Ageras\Api\LeadOfferResource leadsOffersCreate($lead_id , $lead_offer_resource)

Create a new offer for a given Lead.

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

$api_instance = new Ageras\Api\Api\LeadsApi();
$lead_id = "lead_id_example"; // string | 
$lead_offer_resource = new \Ageras\Api\LeadOfferResource(); // \Ageras\Api\LeadOfferResource | 

try {
    $result = $api_instance->leadsOffersCreate($lead_id , $lead_offer_resource);
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
 **lead_offer_resource** | [**\Ageras\Api\LeadOfferResource**](../Model/\Ageras\Api\LeadOfferResource.md)|  |

### Return type

[**\Ageras\Api\LeadOfferResource**](../Model/LeadOfferResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsOffersGet**
> \Ageras\Api\LeadOfferResource leadsOffersGet($lead_offer_id )

Get an offer by id.

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

$api_instance = new Ageras\Api\Api\LeadsApi();
$lead_offer_id = "lead_offer_id_example"; // string | 

try {
    $result = $api_instance->leadsOffersGet($lead_offer_id );
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

[**\Ageras\Api\LeadOfferResource**](../Model/LeadOfferResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsOffersGet2**
> \Ageras\Api\LeadOfferResource leadsOffersGet2($lead_id,  $lead_offer_id )

Get an offer by id.

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

$api_instance = new Ageras\Api\Api\LeadsApi();
$lead_id = "lead_id_example"; // string | 
$lead_offer_id = "lead_offer_id_example"; // string | 

try {
    $result = $api_instance->leadsOffersGet2($lead_id,  $lead_offer_id );
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

[**\Ageras\Api\LeadOfferResource**](../Model/LeadOfferResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsOffersIndex**
> \Ageras\Api\LeadOfferResult leadsOffersIndex($criteria)

List the offers connected to a given Lead.

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

$api_instance = new Ageras\Api\Api\LeadsApi();
$criteria = [
        'client_id' => "client_id_example"; // string | List of client ids
        'lead_id' => "lead_id_example"; // string | List of leads identification(ID).
        'lead_offer_id' => "lead_offer_id_example"; // string | List of lead offers identification(ID).
        'partner_id' => "partner_id_example"; // string | Offers belonging to a given partner.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->leadsOffersIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsOffersIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| List of client ids | [optional]
 **lead_id** | **string**| List of leads identification(ID). | [optional]
 **lead_offer_id** | **string**| List of lead offers identification(ID). | [optional]
 **partner_id** | **string**| Offers belonging to a given partner. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\LeadOfferResult**](../Model/LeadOfferResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsOffersIndex2**
> \Ageras\Api\LeadOfferResult leadsOffersIndex2($lead_id , $criteria)

List the offers connected to a given Lead.

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

$api_instance = new Ageras\Api\Api\LeadsApi();
$lead_id = "lead_id_example"; // string | 
$criteria = [
        'client_id' => "client_id_example"; // string | List of client ids
        'lead_offer_id' => "lead_offer_id_example"; // string | List of lead offers identification(ID).
        'partner_id' => "partner_id_example"; // string | Offers belonging to a given partner.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->leadsOffersIndex2($lead_id , $criteria);
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
 **client_id** | **string**| List of client ids | [optional]
 **lead_offer_id** | **string**| List of lead offers identification(ID). | [optional]
 **partner_id** | **string**| Offers belonging to a given partner. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\LeadOfferResult**](../Model/LeadOfferResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesActionsCreate**
> \Ageras\Api\LeadQuoteResource leadsQuotesActionsCreate($lead_id,  $lead_quote_id , $lead_quote_action_resource)

Publish a given quote, accept it and other actions.

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

$api_instance = new Ageras\Api\Api\LeadsApi();
$lead_id = "lead_id_example"; // string | 
$lead_quote_id = "lead_quote_id_example"; // string | 
$lead_quote_action_resource = new \Ageras\Api\LeadQuoteActionResource(); // \Ageras\Api\LeadQuoteActionResource | 

try {
    $result = $api_instance->leadsQuotesActionsCreate($lead_id,  $lead_quote_id , $lead_quote_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsQuotesActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **lead_quote_id** | **string**|  |
 **lead_quote_action_resource** | [**\Ageras\Api\LeadQuoteActionResource**](../Model/\Ageras\Api\LeadQuoteActionResource.md)|  |

### Return type

[**\Ageras\Api\LeadQuoteResource**](../Model/LeadQuoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesCreate**
> \Ageras\Api\LeadQuoteResource leadsQuotesCreate($lead_id , $lead_quote_resource)

Create a new quote for a given Lead.

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

$api_instance = new Ageras\Api\Api\LeadsApi();
$lead_id = "lead_id_example"; // string | 
$lead_quote_resource = new \Ageras\Api\LeadQuoteResource(); // \Ageras\Api\LeadQuoteResource | 

try {
    $result = $api_instance->leadsQuotesCreate($lead_id , $lead_quote_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsQuotesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **lead_quote_resource** | [**\Ageras\Api\LeadQuoteResource**](../Model/\Ageras\Api\LeadQuoteResource.md)|  |

### Return type

[**\Ageras\Api\LeadQuoteResource**](../Model/LeadQuoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesGet**
> \Ageras\Api\LeadQuoteResource leadsQuotesGet($lead_quote_id )

Get an quote by id.

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

$api_instance = new Ageras\Api\Api\LeadsApi();
$lead_quote_id = "lead_quote_id_example"; // string | 

try {
    $result = $api_instance->leadsQuotesGet($lead_quote_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsQuotesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_quote_id** | **string**|  |

### Return type

[**\Ageras\Api\LeadQuoteResource**](../Model/LeadQuoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesGet2**
> \Ageras\Api\LeadQuoteResource leadsQuotesGet2($lead_id,  $lead_quote_id )

Get an quote by id.

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

$api_instance = new Ageras\Api\Api\LeadsApi();
$lead_id = "lead_id_example"; // string | 
$lead_quote_id = "lead_quote_id_example"; // string | 

try {
    $result = $api_instance->leadsQuotesGet2($lead_id,  $lead_quote_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsQuotesGet2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **lead_quote_id** | **string**|  |

### Return type

[**\Ageras\Api\LeadQuoteResource**](../Model/LeadQuoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesIndex**
> \Ageras\Api\LeadQuoteResult leadsQuotesIndex($criteria)

List the quotes connected to a given Lead.

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

$api_instance = new Ageras\Api\Api\LeadsApi();
$criteria = [
        'client_id' => "client_id_example"; // string | List of quotes by client_id
        'lead_id' => "lead_id_example"; // string | List of leads identification(ID).
        'lead_quote_id' => "lead_quote_id_example"; // string | List of lead quotes identification(ID).
        'partner_id' => "partner_id_example"; // string | Offers belonging to a given partner.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->leadsQuotesIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsQuotesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| List of quotes by client_id | [optional]
 **lead_id** | **string**| List of leads identification(ID). | [optional]
 **lead_quote_id** | **string**| List of lead quotes identification(ID). | [optional]
 **partner_id** | **string**| Offers belonging to a given partner. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\LeadQuoteResult**](../Model/LeadQuoteResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesIndex2**
> \Ageras\Api\LeadQuoteResult leadsQuotesIndex2($lead_id , $criteria)

List the quotes connected to a given Lead.

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

$api_instance = new Ageras\Api\Api\LeadsApi();
$lead_id = "lead_id_example"; // string | 
$criteria = [
        'client_id' => "client_id_example"; // string | List of quotes by client_id
        'lead_quote_id' => "lead_quote_id_example"; // string | List of lead quotes identification(ID).
        'partner_id' => "partner_id_example"; // string | Offers belonging to a given partner.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->leadsQuotesIndex2($lead_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsQuotesIndex2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **client_id** | **string**| List of quotes by client_id | [optional]
 **lead_quote_id** | **string**| List of lead quotes identification(ID). | [optional]
 **partner_id** | **string**| Offers belonging to a given partner. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\LeadQuoteResult**](../Model/LeadQuoteResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsTypesIndex**
> \Ageras\Api\LeadTypeResult leadsTypesIndex($criteria)

Index lead types.

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

$api_instance = new Ageras\Api\Api\LeadsApi();
$criteria = [
        'type_id' => "type_id_example"; // string | Type ID. @var int
        'title' => "title_example"; // string | Type title in its native language. @var string
        'geo_code' => "geo_code_example"; // string | Industry geo code origin. @var string
        'limit' => 56; // int | Limit of industries per page. @var int
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->leadsTypesIndex($criteria);
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

[**\Ageras\Api\LeadTypeResult**](../Model/LeadTypeResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsUpdate**
> \Ageras\Api\LeadResource leadsUpdate($lead_id , $lead_resource)

Update Properties on a given Lead.

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

$api_instance = new Ageras\Api\Api\LeadsApi();
$lead_id = "lead_id_example"; // string | 
$lead_resource = new \Ageras\Api\LeadResource(); // \Ageras\Api\LeadResource | 

try {
    $result = $api_instance->leadsUpdate($lead_id , $lead_resource);
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
 **lead_resource** | [**\Ageras\Api\LeadResource**](../Model/\Ageras\Api\LeadResource.md)|  |

### Return type

[**\Ageras\Api\LeadResource**](../Model/LeadResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

