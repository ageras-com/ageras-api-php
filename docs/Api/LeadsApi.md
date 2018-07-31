# Ageras\Api\LeadsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**leadsActionsCreate**](LeadsApi.md#leadsActionsCreate) | **POST** /leads/{lead_id}/actions | Coupon action
[**leadsAggregationsIndex**](LeadsApi.md#leadsAggregationsIndex) | **GET** /leads/aggregations | List facets and aggregations for the Lead Search.
[**leadsCategoriesIndex**](LeadsApi.md#leadsCategoriesIndex) | **GET** /leads/categories | Index lead categories .
[**leadsCreate**](LeadsApi.md#leadsCreate) | **POST** /leads | Create a new Lead.
[**leadsDelete**](LeadsApi.md#leadsDelete) | **DELETE** /leads/{lead_id} | Delete a Lead from a given lead_id.
[**leadsExcludedpartnersCreate**](LeadsApi.md#leadsExcludedpartnersCreate) | **POST** /leads/{lead_id}/excludedpartners | Add partner to lead&#39;s excluded partner list
[**leadsExcludedpartnersDelete**](LeadsApi.md#leadsExcludedpartnersDelete) | **DELETE** /leads/{lead_id}/excludedpartners/{partner_id} | Remove partner from the lead&#39;s excluded partner list
[**leadsExcludedpartnersIndex**](LeadsApi.md#leadsExcludedpartnersIndex) | **GET** /leads/{lead_id}/excludedpartners | Show all excluded partners for a specific lead.
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
[**leadsQuotesDelete**](LeadsApi.md#leadsQuotesDelete) | **DELETE** /leads/{lead_id}/quotes/{lead_quote_id} | Delete a quote for a given Lead.
[**leadsQuotesGet**](LeadsApi.md#leadsQuotesGet) | **GET** /leads/quotes/{lead_quote_id} | Get an quote by id.
[**leadsQuotesGet2**](LeadsApi.md#leadsQuotesGet2) | **GET** /leads/{lead_id}/quotes/{lead_quote_id} | Get an quote by id.
[**leadsQuotesIndex**](LeadsApi.md#leadsQuotesIndex) | **GET** /leads/quotes | List the quotes connected to a given Lead.
[**leadsQuotesIndex2**](LeadsApi.md#leadsQuotesIndex2) | **GET** /leads/{lead_id}/quotes | List the quotes connected to a given Lead.
[**leadsQuotesItemsCreate**](LeadsApi.md#leadsQuotesItemsCreate) | **POST** /leads/{lead_id}/quotes/{lead_quote_id}/items | Create a new quote item for a given Quote.
[**leadsQuotesItemsDelete**](LeadsApi.md#leadsQuotesItemsDelete) | **DELETE** /leads/{lead_id}/quotes/{lead_quote_id}/items/{lead_quote_item_id} | Delete a quote item.
[**leadsQuotesItemsGet**](LeadsApi.md#leadsQuotesItemsGet) | **GET** /leads/{lead_id}/quotes/{lead_quote_id}/items/{lead_quote_item_id} | Get a quote item by id.
[**leadsQuotesItemsIndex**](LeadsApi.md#leadsQuotesItemsIndex) | **GET** /leads/{lead_id}/quotes/{lead_quote_id}/items | List the quote items connected to a given Quote.
[**leadsQuotesItemsUpdate**](LeadsApi.md#leadsQuotesItemsUpdate) | **PUT** /leads/{lead_id}/quotes/{lead_quote_id}/items/{lead_quote_item_id} | Update a quote item.
[**leadsQuotesProgressstepsIndex**](LeadsApi.md#leadsQuotesProgressstepsIndex) | **GET** /leads/quotes/progresssteps | Get quote progress statuses.
[**leadsQuotesUpdate**](LeadsApi.md#leadsQuotesUpdate) | **PUT** /leads/quotes/{lead_quote_id} | Update a quote.
[**leadsQuotesUpdate2**](LeadsApi.md#leadsQuotesUpdate2) | **PUT** /leads/{lead_id}/quotes/{lead_quote_id} | Update a quote.
[**leadsTypesIndex**](LeadsApi.md#leadsTypesIndex) | **GET** /leads/types | Index lead types.
[**leadsUpdate**](LeadsApi.md#leadsUpdate) | **PUT** /leads/{lead_id} | Update Properties on a given Lead.


# **leadsActionsCreate**
> \Ageras\Api\Model\LeadResource leadsActionsCreate($lead_id , $lead_action_resource)

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
$lead_action_resource = new \Ageras\Api\Model\LeadActionResource(); // \Ageras\Api\Model\LeadActionResource | 

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
 **lead_action_resource** | [**\Ageras\Api\Model\LeadActionResource**](../Model/LeadActionResource.md)|  |

### Return type

[**\Ageras\Api\Model\LeadResource**](../Model/LeadResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsAggregationsIndex**
> \Ageras\Api\Model\AggregationResult leadsAggregationsIndex($criteria)

List facets and aggregations for the Lead Search.

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
        'partner_id' => 56; // int | Provide a given partner id to filter by. Requires \"filter\" to be \"bought_by_partner\" or \"segmented_for_partner\".
        'geo_code' => "geo_code_example"; // string | Geographic Location Code.
        'sort' => "created_at"; // string | Sort Leads by a given attribute.
        'status' => "unknown"; // string | Status for the given lead.
        'client_id' => 56; // int | Lead's client
        'employee_id' => "employee_id_example"; // string | Lead's client's assigned employee ID
        'client_decision_postponed' => false; // bool | Client decision to choose a quote match is postponed or not.
        'all_quotes_published_before' => "all_quotes_published_before_example"; // string | Lead received its latest quote match before this date.
        'expires_within' => 56; // int | Get leads expiring within this many minutes.
        'industry' => "industry_example"; // string | Industry code for the given lead.
        'is_quotes_lead' => false; // bool | Get leads that are for quotes. @var bool
        'has_max_quotes' => false; // bool | Has maximum number of quotes. @var bool
        'has_accepted_quote' => false; // bool | Has an accepted quote. @var bool
        'has_rejected_quote' => false; // bool | Has a rejected quote. @var bool
        'segmented_for_partner_id' => 56; // int | Get leads that are segmented for this partner ID. @var int
        'relevant_for_partner_id' => 56; // int | Get leads that are relevant for this partner ID. @var int
        'no_quote_for_partner_id' => 56; // int | Get leads that do not have a quote for this partner ID. @var int
        'is_match_priority' => false; // bool | Is the lead prioritised for being matched? @var bool
        'is_completed_call_priority' => false; // bool | Is the lead prioritised for a completion call? @var bool
        'geo_point' => "geo_point_example"; // string | Location Point to sort leads by
        'geo_rect' => "geo_rect_example"; // string | Location Points to define an area to filter leads by. Provide the bottom left (southwest) and top right (northeast) corners of the reactangle separated by commas, e.g. \"52.19,12.42,52.85,14.22\".
        'geo_distance' => 56; // int | Location filter by distance
        'minimum_revenue_amount_excl_vat' => "minimum_revenue_amount_excl_vat_example"; // string | Get leads that will create at least this amount (in euros) of revenue if matched.
        'maximum_revenue_amount_excl_vat' => "maximum_revenue_amount_excl_vat_example"; // string | Get leads that will create no more than this amount (in euros) of revenue if matched.
        'lead_category' => "basic"; // string | Lead's category
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->leadsAggregationsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsAggregationsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**| List of leads identification(ID). | [optional]
 **phone** | **string**| Filter by a given phone number. | [optional]
 **partner_id** | **int**| Provide a given partner id to filter by. Requires \&quot;filter\&quot; to be \&quot;bought_by_partner\&quot; or \&quot;segmented_for_partner\&quot;. | [optional]
 **geo_code** | **string**| Geographic Location Code. | [optional]
 **sort** | **string**| Sort Leads by a given attribute. | [optional] [default to created_at]
 **status** | **string**| Status for the given lead. | [optional] [default to unknown]
 **client_id** | **int**| Lead&#39;s client | [optional]
 **employee_id** | **string**| Lead&#39;s client&#39;s assigned employee ID | [optional]
 **client_decision_postponed** | **bool**| Client decision to choose a quote match is postponed or not. | [optional] [default to false]
 **all_quotes_published_before** | **string**| Lead received its latest quote match before this date. | [optional]
 **expires_within** | **int**| Get leads expiring within this many minutes. | [optional]
 **industry** | **string**| Industry code for the given lead. | [optional]
 **is_quotes_lead** | **bool**| Get leads that are for quotes. @var bool | [optional] [default to false]
 **has_max_quotes** | **bool**| Has maximum number of quotes. @var bool | [optional] [default to false]
 **has_accepted_quote** | **bool**| Has an accepted quote. @var bool | [optional] [default to false]
 **has_rejected_quote** | **bool**| Has a rejected quote. @var bool | [optional] [default to false]
 **segmented_for_partner_id** | **int**| Get leads that are segmented for this partner ID. @var int | [optional]
 **relevant_for_partner_id** | **int**| Get leads that are relevant for this partner ID. @var int | [optional]
 **no_quote_for_partner_id** | **int**| Get leads that do not have a quote for this partner ID. @var int | [optional]
 **is_match_priority** | **bool**| Is the lead prioritised for being matched? @var bool | [optional] [default to false]
 **is_completed_call_priority** | **bool**| Is the lead prioritised for a completion call? @var bool | [optional] [default to false]
 **geo_point** | **string**| Location Point to sort leads by | [optional]
 **geo_rect** | **string**| Location Points to define an area to filter leads by. Provide the bottom left (southwest) and top right (northeast) corners of the reactangle separated by commas, e.g. \&quot;52.19,12.42,52.85,14.22\&quot;. | [optional]
 **geo_distance** | **int**| Location filter by distance | [optional]
 **minimum_revenue_amount_excl_vat** | **string**| Get leads that will create at least this amount (in euros) of revenue if matched. | [optional]
 **maximum_revenue_amount_excl_vat** | **string**| Get leads that will create no more than this amount (in euros) of revenue if matched. | [optional]
 **lead_category** | **string**| Lead&#39;s category | [optional] [default to basic]
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

# **leadsCategoriesIndex**
> \Ageras\Api\Model\LeadCategoryResult leadsCategoriesIndex($criteria)

Index lead categories .

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
        'id' => "id_example"; // string | Category id @var int
        'identifier' => "identifier_example"; // string | Category identifier @var string
        'title' => "title_example"; // string | Category title. @var string
        'limit' => 56; // int | Limit of industries per page. @var int
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->leadsCategoriesIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsCategoriesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Category id @var int | [optional]
 **identifier** | **string**| Category identifier @var string | [optional]
 **title** | **string**| Category title. @var string | [optional]
 **limit** | **int**| Limit of industries per page. @var int | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\Model\LeadCategoryResult**](../Model/LeadCategoryResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsCreate**
> \Ageras\Api\Model\LeadResource leadsCreate($lead_resource)

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
$lead_resource = new \Ageras\Api\Model\LeadResource(); // \Ageras\Api\Model\LeadResource | The given Lead Resource that should be created

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
 **lead_resource** | [**\Ageras\Api\Model\LeadResource**](../Model/LeadResource.md)| The given Lead Resource that should be created |

### Return type

[**\Ageras\Api\Model\LeadResource**](../Model/LeadResource.md)

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

# **leadsExcludedpartnersCreate**
> \Ageras\Api\Model\LeadResource leadsExcludedpartnersCreate($lead_id , $partner_suggest_resource)

Add partner to lead's excluded partner list

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
$partner_suggest_resource = new \Ageras\Api\Model\PartnerSuggestResource(); // \Ageras\Api\Model\PartnerSuggestResource | 

try {
    $result = $api_instance->leadsExcludedpartnersCreate($lead_id , $partner_suggest_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsExcludedpartnersCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **partner_suggest_resource** | [**\Ageras\Api\Model\PartnerSuggestResource**](../Model/PartnerSuggestResource.md)|  |

### Return type

[**\Ageras\Api\Model\LeadResource**](../Model/LeadResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsExcludedpartnersDelete**
> leadsExcludedpartnersDelete($lead_id,  $partner_id )

Remove partner from the lead's excluded partner list

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
$partner_id = "partner_id_example"; // string | 

try {
    $api_instance->leadsExcludedpartnersDelete($lead_id,  $partner_id );
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsExcludedpartnersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **partner_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsExcludedpartnersIndex**
> \Ageras\Api\Model\LeadPartnerResult leadsExcludedpartnersIndex($lead_id , $criteria)

Show all excluded partners for a specific lead.

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
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->leadsExcludedpartnersIndex($lead_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsExcludedpartnersIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\Model\LeadPartnerResult**](../Model/LeadPartnerResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsGet**
> \Ageras\Api\Model\LeadResource leadsGet($lead_id )

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

[**\Ageras\Api\Model\LeadResource**](../Model/LeadResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsIndex**
> \Ageras\Api\Model\LeadResult leadsIndex($criteria)

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
        'partner_id' => 56; // int | Provide a given partner id to filter by. Requires \"filter\" to be \"bought_by_partner\" or \"segmented_for_partner\".
        'geo_code' => "geo_code_example"; // string | Geographic Location Code.
        'sort' => "created_at"; // string | Sort Leads by a given attribute.
        'status' => "unknown"; // string | Status for the given lead.
        'client_id' => 56; // int | Lead's client
        'employee_id' => "employee_id_example"; // string | Lead's client's assigned employee ID
        'client_decision_postponed' => false; // bool | Client decision to choose a quote match is postponed or not.
        'all_quotes_published_before' => "all_quotes_published_before_example"; // string | Lead received its latest quote match before this date.
        'expires_within' => 56; // int | Get leads expiring within this many minutes.
        'industry' => "industry_example"; // string | Industry code for the given lead.
        'is_quotes_lead' => false; // bool | Get leads that are for quotes. @var bool
        'has_max_quotes' => false; // bool | Has maximum number of quotes. @var bool
        'has_accepted_quote' => false; // bool | Has an accepted quote. @var bool
        'has_rejected_quote' => false; // bool | Has a rejected quote. @var bool
        'segmented_for_partner_id' => 56; // int | Get leads that are segmented for this partner ID. @var int
        'relevant_for_partner_id' => 56; // int | Get leads that are relevant for this partner ID. @var int
        'no_quote_for_partner_id' => 56; // int | Get leads that do not have a quote for this partner ID. @var int
        'is_match_priority' => false; // bool | Is the lead prioritised for being matched? @var bool
        'is_completed_call_priority' => false; // bool | Is the lead prioritised for a completion call? @var bool
        'geo_point' => "geo_point_example"; // string | Location Point to sort leads by
        'geo_rect' => "geo_rect_example"; // string | Location Points to define an area to filter leads by. Provide the bottom left (southwest) and top right (northeast) corners of the reactangle separated by commas, e.g. \"52.19,12.42,52.85,14.22\".
        'geo_distance' => 56; // int | Location filter by distance
        'minimum_revenue_amount_excl_vat' => "minimum_revenue_amount_excl_vat_example"; // string | Get leads that will create at least this amount (in euros) of revenue if matched.
        'maximum_revenue_amount_excl_vat' => "maximum_revenue_amount_excl_vat_example"; // string | Get leads that will create no more than this amount (in euros) of revenue if matched.
        'lead_category' => "basic"; // string | Lead's category
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
 **partner_id** | **int**| Provide a given partner id to filter by. Requires \&quot;filter\&quot; to be \&quot;bought_by_partner\&quot; or \&quot;segmented_for_partner\&quot;. | [optional]
 **geo_code** | **string**| Geographic Location Code. | [optional]
 **sort** | **string**| Sort Leads by a given attribute. | [optional] [default to created_at]
 **status** | **string**| Status for the given lead. | [optional] [default to unknown]
 **client_id** | **int**| Lead&#39;s client | [optional]
 **employee_id** | **string**| Lead&#39;s client&#39;s assigned employee ID | [optional]
 **client_decision_postponed** | **bool**| Client decision to choose a quote match is postponed or not. | [optional] [default to false]
 **all_quotes_published_before** | **string**| Lead received its latest quote match before this date. | [optional]
 **expires_within** | **int**| Get leads expiring within this many minutes. | [optional]
 **industry** | **string**| Industry code for the given lead. | [optional]
 **is_quotes_lead** | **bool**| Get leads that are for quotes. @var bool | [optional] [default to false]
 **has_max_quotes** | **bool**| Has maximum number of quotes. @var bool | [optional] [default to false]
 **has_accepted_quote** | **bool**| Has an accepted quote. @var bool | [optional] [default to false]
 **has_rejected_quote** | **bool**| Has a rejected quote. @var bool | [optional] [default to false]
 **segmented_for_partner_id** | **int**| Get leads that are segmented for this partner ID. @var int | [optional]
 **relevant_for_partner_id** | **int**| Get leads that are relevant for this partner ID. @var int | [optional]
 **no_quote_for_partner_id** | **int**| Get leads that do not have a quote for this partner ID. @var int | [optional]
 **is_match_priority** | **bool**| Is the lead prioritised for being matched? @var bool | [optional] [default to false]
 **is_completed_call_priority** | **bool**| Is the lead prioritised for a completion call? @var bool | [optional] [default to false]
 **geo_point** | **string**| Location Point to sort leads by | [optional]
 **geo_rect** | **string**| Location Points to define an area to filter leads by. Provide the bottom left (southwest) and top right (northeast) corners of the reactangle separated by commas, e.g. \&quot;52.19,12.42,52.85,14.22\&quot;. | [optional]
 **geo_distance** | **int**| Location filter by distance | [optional]
 **minimum_revenue_amount_excl_vat** | **string**| Get leads that will create at least this amount (in euros) of revenue if matched. | [optional]
 **maximum_revenue_amount_excl_vat** | **string**| Get leads that will create no more than this amount (in euros) of revenue if matched. | [optional]
 **lead_category** | **string**| Lead&#39;s category | [optional] [default to basic]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\Model\LeadResult**](../Model/LeadResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsNotesCreate**
> \Ageras\Api\Model\LeadResource leadsNotesCreate($lead_id , $lead_note_resource)

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
$lead_note_resource = new \Ageras\Api\Model\LeadNoteResource(); // \Ageras\Api\Model\LeadNoteResource | 

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
 **lead_note_resource** | [**\Ageras\Api\Model\LeadNoteResource**](../Model/LeadNoteResource.md)|  |

### Return type

[**\Ageras\Api\Model\LeadResource**](../Model/LeadResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsOffersCreate**
> \Ageras\Api\Model\LeadOfferResource leadsOffersCreate($lead_id , $lead_offer_resource)

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
$lead_offer_resource = new \Ageras\Api\Model\LeadOfferResource(); // \Ageras\Api\Model\LeadOfferResource | 

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
 **lead_offer_resource** | [**\Ageras\Api\Model\LeadOfferResource**](../Model/LeadOfferResource.md)|  |

### Return type

[**\Ageras\Api\Model\LeadOfferResource**](../Model/LeadOfferResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsOffersGet**
> \Ageras\Api\Model\LeadOfferResource leadsOffersGet($lead_offer_id )

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

[**\Ageras\Api\Model\LeadOfferResource**](../Model/LeadOfferResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsOffersGet2**
> \Ageras\Api\Model\LeadOfferResource leadsOffersGet2($lead_id,  $lead_offer_id )

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

[**\Ageras\Api\Model\LeadOfferResource**](../Model/LeadOfferResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsOffersIndex**
> \Ageras\Api\Model\LeadOfferResult leadsOffersIndex($criteria)

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

[**\Ageras\Api\Model\LeadOfferResult**](../Model/LeadOfferResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsOffersIndex2**
> \Ageras\Api\Model\LeadOfferResult leadsOffersIndex2($lead_id , $criteria)

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

[**\Ageras\Api\Model\LeadOfferResult**](../Model/LeadOfferResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesActionsCreate**
> \Ageras\Api\Model\LeadQuoteResource leadsQuotesActionsCreate($lead_id,  $lead_quote_id , $lead_quote_action_resource)

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
$lead_quote_action_resource = new \Ageras\Api\Model\LeadQuoteActionResource(); // \Ageras\Api\Model\LeadQuoteActionResource | 

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
 **lead_quote_action_resource** | [**\Ageras\Api\Model\LeadQuoteActionResource**](../Model/LeadQuoteActionResource.md)|  |

### Return type

[**\Ageras\Api\Model\LeadQuoteResource**](../Model/LeadQuoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesCreate**
> \Ageras\Api\Model\LeadQuoteResource leadsQuotesCreate($lead_id , $lead_quote_resource)

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
$lead_quote_resource = new \Ageras\Api\Model\LeadQuoteResource(); // \Ageras\Api\Model\LeadQuoteResource | 

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
 **lead_quote_resource** | [**\Ageras\Api\Model\LeadQuoteResource**](../Model/LeadQuoteResource.md)|  |

### Return type

[**\Ageras\Api\Model\LeadQuoteResource**](../Model/LeadQuoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesDelete**
> leadsQuotesDelete($lead_id,  $lead_quote_id )

Delete a quote for a given Lead.

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
    $api_instance->leadsQuotesDelete($lead_id,  $lead_quote_id );
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsQuotesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **lead_quote_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesGet**
> \Ageras\Api\Model\LeadQuoteResource leadsQuotesGet($lead_quote_id )

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

[**\Ageras\Api\Model\LeadQuoteResource**](../Model/LeadQuoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesGet2**
> \Ageras\Api\Model\LeadQuoteResource leadsQuotesGet2($lead_id,  $lead_quote_id )

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

[**\Ageras\Api\Model\LeadQuoteResource**](../Model/LeadQuoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesIndex**
> \Ageras\Api\Model\LeadQuoteResult leadsQuotesIndex($criteria)

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
        'geo_code' => "geo_code_example"; // string | Geographic Location Code.
        'is_accepted' => false; // bool | Quote is accepted.
        'is_published' => false; // bool | Quote is published.
        'is_rejected' => false; // bool | Quote is rejected.
        'sort' => "created_at"; // string | Sort options.
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
 **geo_code** | **string**| Geographic Location Code. | [optional]
 **is_accepted** | **bool**| Quote is accepted. | [optional] [default to false]
 **is_published** | **bool**| Quote is published. | [optional] [default to false]
 **is_rejected** | **bool**| Quote is rejected. | [optional] [default to false]
 **sort** | **string**| Sort options. | [optional] [default to created_at]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\Model\LeadQuoteResult**](../Model/LeadQuoteResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesIndex2**
> \Ageras\Api\Model\LeadQuoteResult leadsQuotesIndex2($lead_id , $criteria)

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
        'geo_code' => "geo_code_example"; // string | Geographic Location Code.
        'is_accepted' => false; // bool | Quote is accepted.
        'is_published' => false; // bool | Quote is published.
        'is_rejected' => false; // bool | Quote is rejected.
        'sort' => "created_at"; // string | Sort options.
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
 **geo_code** | **string**| Geographic Location Code. | [optional]
 **is_accepted** | **bool**| Quote is accepted. | [optional] [default to false]
 **is_published** | **bool**| Quote is published. | [optional] [default to false]
 **is_rejected** | **bool**| Quote is rejected. | [optional] [default to false]
 **sort** | **string**| Sort options. | [optional] [default to created_at]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\Model\LeadQuoteResult**](../Model/LeadQuoteResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesItemsCreate**
> \Ageras\Api\Model\LeadQuoteItemResource leadsQuotesItemsCreate($lead_id,  $lead_quote_id , $lead_quote_item_resource)

Create a new quote item for a given Quote.

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
$lead_quote_item_resource = new \Ageras\Api\Model\LeadQuoteItemResource(); // \Ageras\Api\Model\LeadQuoteItemResource | 

try {
    $result = $api_instance->leadsQuotesItemsCreate($lead_id,  $lead_quote_id , $lead_quote_item_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsQuotesItemsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **lead_quote_id** | **string**|  |
 **lead_quote_item_resource** | [**\Ageras\Api\Model\LeadQuoteItemResource**](../Model/LeadQuoteItemResource.md)|  |

### Return type

[**\Ageras\Api\Model\LeadQuoteItemResource**](../Model/LeadQuoteItemResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesItemsDelete**
> leadsQuotesItemsDelete($lead_id,  $lead_quote_id,  $lead_quote_item_id )

Delete a quote item.

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
$lead_quote_item_id = "lead_quote_item_id_example"; // string | 

try {
    $api_instance->leadsQuotesItemsDelete($lead_id,  $lead_quote_id,  $lead_quote_item_id );
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsQuotesItemsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **lead_quote_id** | **string**|  |
 **lead_quote_item_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesItemsGet**
> \Ageras\Api\Model\LeadQuoteItemResource leadsQuotesItemsGet($lead_id,  $lead_quote_id,  $lead_quote_item_id )

Get a quote item by id.

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
$lead_quote_item_id = "lead_quote_item_id_example"; // string | 

try {
    $result = $api_instance->leadsQuotesItemsGet($lead_id,  $lead_quote_id,  $lead_quote_item_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsQuotesItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **lead_quote_id** | **string**|  |
 **lead_quote_item_id** | **string**|  |

### Return type

[**\Ageras\Api\Model\LeadQuoteItemResource**](../Model/LeadQuoteItemResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesItemsIndex**
> \Ageras\Api\Model\LeadQuoteItemResult leadsQuotesItemsIndex($lead_id,  $lead_quote_id , $criteria)

List the quote items connected to a given Quote.

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
$criteria = [
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->leadsQuotesItemsIndex($lead_id,  $lead_quote_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsQuotesItemsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **lead_quote_id** | **string**|  |
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\Model\LeadQuoteItemResult**](../Model/LeadQuoteItemResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesItemsUpdate**
> \Ageras\Api\Model\LeadQuoteItemResource leadsQuotesItemsUpdate($lead_id,  $lead_quote_id,  $lead_quote_item_id , $lead_quote_item_resource)

Update a quote item.

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
$lead_quote_item_id = "lead_quote_item_id_example"; // string | 
$lead_quote_item_resource = new \Ageras\Api\Model\LeadQuoteItemResource(); // \Ageras\Api\Model\LeadQuoteItemResource | 

try {
    $result = $api_instance->leadsQuotesItemsUpdate($lead_id,  $lead_quote_id,  $lead_quote_item_id , $lead_quote_item_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsQuotesItemsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **lead_quote_id** | **string**|  |
 **lead_quote_item_id** | **string**|  |
 **lead_quote_item_resource** | [**\Ageras\Api\Model\LeadQuoteItemResource**](../Model/LeadQuoteItemResource.md)|  |

### Return type

[**\Ageras\Api\Model\LeadQuoteItemResource**](../Model/LeadQuoteItemResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesProgressstepsIndex**
> \Ageras\Api\Model\LeadQuoteProgressResult leadsQuotesProgressstepsIndex($criteria)

Get quote progress statuses.

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
        'title' => "title_example"; // string | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->leadsQuotesProgressstepsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsQuotesProgressstepsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **title** | **string**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\Model\LeadQuoteProgressResult**](../Model/LeadQuoteProgressResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesUpdate**
> \Ageras\Api\Model\LeadQuoteResource leadsQuotesUpdate($lead_quote_id , $lead_quote_resource)

Update a quote.

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
$lead_quote_resource = new \Ageras\Api\Model\LeadQuoteResource(); // \Ageras\Api\Model\LeadQuoteResource | 

try {
    $result = $api_instance->leadsQuotesUpdate($lead_quote_id , $lead_quote_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsQuotesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_quote_id** | **string**|  |
 **lead_quote_resource** | [**\Ageras\Api\Model\LeadQuoteResource**](../Model/LeadQuoteResource.md)|  |

### Return type

[**\Ageras\Api\Model\LeadQuoteResource**](../Model/LeadQuoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesUpdate2**
> \Ageras\Api\Model\LeadQuoteResource leadsQuotesUpdate2($lead_id,  $lead_quote_id , $lead_quote_resource)

Update a quote.

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
$lead_quote_resource = new \Ageras\Api\Model\LeadQuoteResource(); // \Ageras\Api\Model\LeadQuoteResource | 

try {
    $result = $api_instance->leadsQuotesUpdate2($lead_id,  $lead_quote_id , $lead_quote_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsQuotesUpdate2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **lead_quote_id** | **string**|  |
 **lead_quote_resource** | [**\Ageras\Api\Model\LeadQuoteResource**](../Model/LeadQuoteResource.md)|  |

### Return type

[**\Ageras\Api\Model\LeadQuoteResource**](../Model/LeadQuoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsTypesIndex**
> \Ageras\Api\Model\LeadTypeResult leadsTypesIndex($criteria)

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

[**\Ageras\Api\Model\LeadTypeResult**](../Model/LeadTypeResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsUpdate**
> \Ageras\Api\Model\LeadResource leadsUpdate($lead_id , $lead_resource)

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
$lead_resource = new \Ageras\Api\Model\LeadResource(); // \Ageras\Api\Model\LeadResource | 

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
 **lead_resource** | [**\Ageras\Api\Model\LeadResource**](../Model/LeadResource.md)|  |

### Return type

[**\Ageras\Api\Model\LeadResource**](../Model/LeadResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

