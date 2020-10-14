# Ageras\Api\LeadsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**leadsActionsCreate**](LeadsApi.md#leadsActionsCreate) | **POST** /leads/{lead_id}/actions | Coupon action
[**leadsAggregationsIndex**](LeadsApi.md#leadsAggregationsIndex) | **GET** /leads/aggregations | List facets and aggregations for the Lead Search.
[**leadsAllocationsCreate**](LeadsApi.md#leadsAllocationsCreate) | **POST** /leads/{lead_id}/allocations | Allocate partners to a lead.
[**leadsAllocationsIndex**](LeadsApi.md#leadsAllocationsIndex) | **GET** /leads/allocations | List a lead&#39;s allocation.
[**leadsCategoriesIndex**](LeadsApi.md#leadsCategoriesIndex) | **GET** /leads/categories | Index lead categories .
[**leadsCertificationsCreate**](LeadsApi.md#leadsCertificationsCreate) | **POST** /leads/{lead_id}/certifications | Add a certification to a lead.
[**leadsCertificationsDelete**](LeadsApi.md#leadsCertificationsDelete) | **DELETE** /leads/{lead_id}/certifications/{certification_id} | Delete a certification from a lead.
[**leadsCertificationsIndex**](LeadsApi.md#leadsCertificationsIndex) | **GET** /leads/{lead_id}/certifications | List a lead&#39;s certifications.
[**leadsCertificationsUpdate**](LeadsApi.md#leadsCertificationsUpdate) | **PUT** /leads/{lead_id}/certifications | Replace a lead&#39;s certifications.
[**leadsCreate**](LeadsApi.md#leadsCreate) | **POST** /leads | Create a new Lead.
[**leadsDelete**](LeadsApi.md#leadsDelete) | **DELETE** /leads/{lead_id} | Delete a Lead from a given lead_id.
[**leadsDemopartnersIndex**](LeadsApi.md#leadsDemopartnersIndex) | **GET** /leads/demopartners/{partner_id} | List leads a demo partner could expect to see if they sign up.
[**leadsDemopartnersIndex2**](LeadsApi.md#leadsDemopartnersIndex2) | **GET** /leads/{lead_id}/demopartners/{partner_id} | List leads a demo partner could expect to see if they sign up.
[**leadsExcludedpartnersCreate**](LeadsApi.md#leadsExcludedpartnersCreate) | **POST** /leads/{lead_id}/excludedpartners | Add partner to lead&#39;s excluded partner list
[**leadsExcludedpartnersDelete**](LeadsApi.md#leadsExcludedpartnersDelete) | **DELETE** /leads/{lead_id}/excludedpartners/{partner_id} | Remove partner from the lead&#39;s excluded partner list
[**leadsExcludedpartnersIndex**](LeadsApi.md#leadsExcludedpartnersIndex) | **GET** /leads/{lead_id}/excludedpartners | Show all excluded partners for a specific lead.
[**leadsGet**](LeadsApi.md#leadsGet) | **GET** /leads/{lead_id} | Return a Lead from a Lead Id.
[**leadsIndex**](LeadsApi.md#leadsIndex) | **GET** /leads | Search for Lead&#39;s by a given set of criteria.
[**leadsNotesCreate**](LeadsApi.md#leadsNotesCreate) | **POST** /leads/{lead_id}/notes | Create lead note
[**leadsQuotefeesCreate**](LeadsApi.md#leadsQuotefeesCreate) | **POST** /leads/{lead_id}/quotefees | Create lead quote_fee.
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
[**leadsSegmentationsubgeoregionsIndex**](LeadsApi.md#leadsSegmentationsubgeoregionsIndex) | **GET** /leads/{lead_id}/segmentationsubgeoregions | List a lead&#39;s sub geo regions.
[**leadsSegmentationsubgeoregionsUpdate**](LeadsApi.md#leadsSegmentationsubgeoregionsUpdate) | **PUT** /leads/{lead_id}/segmentationsubgeoregions | Update a lead&#39;s sub geo regions.
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

# **leadsAggregationsIndex**
> \Ageras\Api\AggregationResult leadsAggregationsIndex($criteria)

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
        'geo_code' => ""; // string | Geographic Location Code.
        'sort' => "created_at"; // string | Sort Leads by a given attribute.
        'status' => "status_example"; // string | Status for the given lead.
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
        'no_quote_for_partner_id' => 56; // int | Get leads that do not have a quote for this partner ID. @var int
        'is_match_priority' => false; // bool | Is the lead prioritised for being matched? @var bool
        'is_completed_call_priority' => false; // bool | Is the lead prioritised for a completion call? @var bool
        'geo_point' => "geo_point_example"; // string | Location Point to sort leads by
        'geo_rect' => "geo_rect_example"; // string | Location Points to define an area to filter leads by. Provide the bottom left (southwest) and top right (northeast) corners of the reactangle separated by commas, e.g. \"52.19,12.42,52.85,14.22\".
        'geo_distance' => 56; // int | Location filter by distance
        'minimum_revenue_amount_excl_vat' => "minimum_revenue_amount_excl_vat_example"; // string | Get leads that will create at least this amount (in euros) of revenue if matched.
        'maximum_revenue_amount_excl_vat' => "maximum_revenue_amount_excl_vat_example"; // string | Get leads that will create no more than this amount (in euros) of revenue if matched.
        'lead_category' => "basic"; // string | Lead's category
        'validator_id' => "validator_id_example"; // string | Lead's validator
        'is_given_up' => false; // bool | Is the lead given up on?
        'industry_id' => "industry_id_example"; // string | Filter the leads by their industry ids
        'call_count_before_validation_lt' => 56; // int | Lead must have less than this many calls before validation occurred.
        'is_validation_postponed' => false; // bool | Is the lead's validation postponed?
        'created_at_lte' => "created_at_lte_example"; // string | Get leads created before this date (inclusive).
        'created_at_gte' => "created_at_gte_example"; // string | Get leads created after this date (inclusive).
        'latest_called_at_before' => "latest_called_at_before_example"; // string | Find leads with a latest call before this date.
        'segmentation_criteria' => "segmentation_criteria_example"; // string | Which criteria to segment on, e.g. language.
        'segmented_for_partner_business_unit_id' => 56; // int | List leads that are segmented for a business unit.
        'sub_geo_region_name' => "sub_geo_region_name_example"; // string | List leads in any of these sub geo regions. E.g. 'Aarhus', 'Copenhagen'.
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
 **geo_code** | **string**| Geographic Location Code. | [optional] [default to ]
 **sort** | **string**| Sort Leads by a given attribute. | [optional] [default to created_at]
 **status** | **string**| Status for the given lead. | [optional]
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
 **no_quote_for_partner_id** | **int**| Get leads that do not have a quote for this partner ID. @var int | [optional]
 **is_match_priority** | **bool**| Is the lead prioritised for being matched? @var bool | [optional] [default to false]
 **is_completed_call_priority** | **bool**| Is the lead prioritised for a completion call? @var bool | [optional] [default to false]
 **geo_point** | **string**| Location Point to sort leads by | [optional]
 **geo_rect** | **string**| Location Points to define an area to filter leads by. Provide the bottom left (southwest) and top right (northeast) corners of the reactangle separated by commas, e.g. \&quot;52.19,12.42,52.85,14.22\&quot;. | [optional]
 **geo_distance** | **int**| Location filter by distance | [optional]
 **minimum_revenue_amount_excl_vat** | **string**| Get leads that will create at least this amount (in euros) of revenue if matched. | [optional]
 **maximum_revenue_amount_excl_vat** | **string**| Get leads that will create no more than this amount (in euros) of revenue if matched. | [optional]
 **lead_category** | **string**| Lead&#39;s category | [optional] [default to basic]
 **validator_id** | **string**| Lead&#39;s validator | [optional]
 **is_given_up** | **bool**| Is the lead given up on? | [optional] [default to false]
 **industry_id** | **string**| Filter the leads by their industry ids | [optional]
 **call_count_before_validation_lt** | **int**| Lead must have less than this many calls before validation occurred. | [optional]
 **is_validation_postponed** | **bool**| Is the lead&#39;s validation postponed? | [optional] [default to false]
 **created_at_lte** | **string**| Get leads created before this date (inclusive). | [optional]
 **created_at_gte** | **string**| Get leads created after this date (inclusive). | [optional]
 **latest_called_at_before** | **string**| Find leads with a latest call before this date. | [optional]
 **segmentation_criteria** | **string**| Which criteria to segment on, e.g. language. | [optional]
 **segmented_for_partner_business_unit_id** | **int**| List leads that are segmented for a business unit. | [optional]
 **sub_geo_region_name** | **string**| List leads in any of these sub geo regions. E.g. &#39;Aarhus&#39;, &#39;Copenhagen&#39;. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\AggregationResult**](../Model/AggregationResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsAllocationsCreate**
> \Ageras\Api\LeadAllocationsResource leadsAllocationsCreate($lead_id , $lead_allocations_resource)

Allocate partners to a lead.

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
$lead_allocations_resource = new \Ageras\Api\LeadAllocationsResource(); // \Ageras\Api\LeadAllocationsResource | 

try {
    $result = $api_instance->leadsAllocationsCreate($lead_id , $lead_allocations_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsAllocationsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **lead_allocations_resource** | [**\Ageras\Api\LeadAllocationsResource**](../Model/\Ageras\Api\LeadAllocationsResource.md)|  |

### Return type

[**\Ageras\Api\LeadAllocationsResource**](../Model/LeadAllocationsResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsAllocationsIndex**
> \Ageras\Api\LeadPartnerAllocationResult leadsAllocationsIndex($criteria)

List a lead's allocation.

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
        'lead_id' => 56; // int | Lead ID.
        'partner_id' => 56; // int | Partner ID.
        'partner_business_unit_id' => "partner_business_unit_id_example"; // string | Business Unit ID.
        'starts_at' => "starts_at_example"; // string | 
        'ends_at' => "ends_at_example"; // string | 
        'has_business_unit' => false; // bool | 
        'sort' => "created_at"; // string | 
        'is_used' => false; // bool | Filter by the allocation being used or unused.
        'is_processed' => false; // bool | Filter by the allocation being used or unused.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->leadsAllocationsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsAllocationsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead ID. | [optional]
 **partner_id** | **int**| Partner ID. | [optional]
 **partner_business_unit_id** | **string**| Business Unit ID. | [optional]
 **starts_at** | **string**|  | [optional]
 **ends_at** | **string**|  | [optional]
 **has_business_unit** | **bool**|  | [optional] [default to false]
 **sort** | **string**|  | [optional] [default to created_at]
 **is_used** | **bool**| Filter by the allocation being used or unused. | [optional] [default to false]
 **is_processed** | **bool**| Filter by the allocation being used or unused. | [optional] [default to false]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\LeadPartnerAllocationResult**](../Model/LeadPartnerAllocationResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsCategoriesIndex**
> \Ageras\Api\LeadCategoryResult leadsCategoriesIndex($criteria)

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

[**\Ageras\Api\LeadCategoryResult**](../Model/LeadCategoryResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsCertificationsCreate**
> \Ageras\Api\CertificationResource leadsCertificationsCreate($lead_id , $certification_resource)

Add a certification to a lead.

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
$certification_resource = new \Ageras\Api\CertificationResource(); // \Ageras\Api\CertificationResource | 

try {
    $result = $api_instance->leadsCertificationsCreate($lead_id , $certification_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsCertificationsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **certification_resource** | [**\Ageras\Api\CertificationResource**](../Model/\Ageras\Api\CertificationResource.md)|  |

### Return type

[**\Ageras\Api\CertificationResource**](../Model/CertificationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsCertificationsDelete**
> leadsCertificationsDelete($lead_id,  $certification_id )

Delete a certification from a lead.

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
$certification_id = "certification_id_example"; // string | 

try {
    $api_instance->leadsCertificationsDelete($lead_id,  $certification_id );
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsCertificationsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **certification_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsCertificationsIndex**
> \Ageras\Api\CertificationResult leadsCertificationsIndex($lead_id , $criteria)

List a lead's certifications.

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
        'is_segmentable' => false; // bool | Is the certification used for segmentation?
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->leadsCertificationsIndex($lead_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsCertificationsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **is_segmentable** | **bool**| Is the certification used for segmentation? | [optional] [default to false]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\CertificationResult**](../Model/CertificationResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsCertificationsUpdate**
> \Ageras\Api\CertificationResource leadsCertificationsUpdate($lead_id , $lead_certifications_resource)

Replace a lead's certifications.

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
$lead_certifications_resource = new \Ageras\Api\LeadCertificationsResource(); // \Ageras\Api\LeadCertificationsResource | 

try {
    $result = $api_instance->leadsCertificationsUpdate($lead_id , $lead_certifications_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsCertificationsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **lead_certifications_resource** | [**\Ageras\Api\LeadCertificationsResource**](../Model/\Ageras\Api\LeadCertificationsResource.md)|  |

### Return type

[**\Ageras\Api\CertificationResource**](../Model/CertificationResource.md)

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

# **leadsDemopartnersIndex**
> \Ageras\Api\LeadResult leadsDemopartnersIndex($partner_id )

List leads a demo partner could expect to see if they sign up.

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
$partner_id = "partner_id_example"; // string | 

try {
    $result = $api_instance->leadsDemopartnersIndex($partner_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsDemopartnersIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |

### Return type

[**\Ageras\Api\LeadResult**](../Model/LeadResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsDemopartnersIndex2**
> \Ageras\Api\LeadResult leadsDemopartnersIndex2($lead_id,  $partner_id )

List leads a demo partner could expect to see if they sign up.

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
    $result = $api_instance->leadsDemopartnersIndex2($lead_id,  $partner_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsDemopartnersIndex2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **partner_id** | **string**|  |

### Return type

[**\Ageras\Api\LeadResult**](../Model/LeadResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsExcludedpartnersCreate**
> \Ageras\Api\LeadResource leadsExcludedpartnersCreate($lead_id , $partner_suggest_resource)

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
$partner_suggest_resource = new \Ageras\Api\PartnerSuggestResource(); // \Ageras\Api\PartnerSuggestResource | 

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
 **partner_suggest_resource** | [**\Ageras\Api\PartnerSuggestResource**](../Model/\Ageras\Api\PartnerSuggestResource.md)|  |

### Return type

[**\Ageras\Api\LeadResource**](../Model/LeadResource.md)

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
> \Ageras\Api\LeadPartnerResult leadsExcludedpartnersIndex($lead_id , $criteria)

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

[**\Ageras\Api\LeadPartnerResult**](../Model/LeadPartnerResult.md)

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
        'partner_id' => 56; // int | Provide a given partner id to filter by. Requires \"filter\" to be \"bought_by_partner\" or \"segmented_for_partner\".
        'geo_code' => ""; // string | Geographic Location Code.
        'sort' => "created_at"; // string | Sort Leads by a given attribute.
        'status' => "status_example"; // string | Status for the given lead.
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
        'no_quote_for_partner_id' => 56; // int | Get leads that do not have a quote for this partner ID. @var int
        'is_match_priority' => false; // bool | Is the lead prioritised for being matched? @var bool
        'is_completed_call_priority' => false; // bool | Is the lead prioritised for a completion call? @var bool
        'geo_point' => "geo_point_example"; // string | Location Point to sort leads by
        'geo_rect' => "geo_rect_example"; // string | Location Points to define an area to filter leads by. Provide the bottom left (southwest) and top right (northeast) corners of the reactangle separated by commas, e.g. \"52.19,12.42,52.85,14.22\".
        'geo_distance' => 56; // int | Location filter by distance
        'minimum_revenue_amount_excl_vat' => "minimum_revenue_amount_excl_vat_example"; // string | Get leads that will create at least this amount (in euros) of revenue if matched.
        'maximum_revenue_amount_excl_vat' => "maximum_revenue_amount_excl_vat_example"; // string | Get leads that will create no more than this amount (in euros) of revenue if matched.
        'lead_category' => "basic"; // string | Lead's category
        'validator_id' => "validator_id_example"; // string | Lead's validator
        'is_given_up' => false; // bool | Is the lead given up on?
        'industry_id' => "industry_id_example"; // string | Filter the leads by their industry ids
        'call_count_before_validation_lt' => 56; // int | Lead must have less than this many calls before validation occurred.
        'is_validation_postponed' => false; // bool | Is the lead's validation postponed?
        'created_at_lte' => "created_at_lte_example"; // string | Get leads created before this date (inclusive).
        'created_at_gte' => "created_at_gte_example"; // string | Get leads created after this date (inclusive).
        'latest_called_at_before' => "latest_called_at_before_example"; // string | Find leads with a latest call before this date.
        'segmentation_criteria' => "segmentation_criteria_example"; // string | Which criteria to segment on, e.g. language.
        'segmented_for_partner_business_unit_id' => 56; // int | List leads that are segmented for a business unit.
        'sub_geo_region_name' => "sub_geo_region_name_example"; // string | List leads in any of these sub geo regions. E.g. 'Aarhus', 'Copenhagen'.
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
 **geo_code** | **string**| Geographic Location Code. | [optional] [default to ]
 **sort** | **string**| Sort Leads by a given attribute. | [optional] [default to created_at]
 **status** | **string**| Status for the given lead. | [optional]
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
 **no_quote_for_partner_id** | **int**| Get leads that do not have a quote for this partner ID. @var int | [optional]
 **is_match_priority** | **bool**| Is the lead prioritised for being matched? @var bool | [optional] [default to false]
 **is_completed_call_priority** | **bool**| Is the lead prioritised for a completion call? @var bool | [optional] [default to false]
 **geo_point** | **string**| Location Point to sort leads by | [optional]
 **geo_rect** | **string**| Location Points to define an area to filter leads by. Provide the bottom left (southwest) and top right (northeast) corners of the reactangle separated by commas, e.g. \&quot;52.19,12.42,52.85,14.22\&quot;. | [optional]
 **geo_distance** | **int**| Location filter by distance | [optional]
 **minimum_revenue_amount_excl_vat** | **string**| Get leads that will create at least this amount (in euros) of revenue if matched. | [optional]
 **maximum_revenue_amount_excl_vat** | **string**| Get leads that will create no more than this amount (in euros) of revenue if matched. | [optional]
 **lead_category** | **string**| Lead&#39;s category | [optional] [default to basic]
 **validator_id** | **string**| Lead&#39;s validator | [optional]
 **is_given_up** | **bool**| Is the lead given up on? | [optional] [default to false]
 **industry_id** | **string**| Filter the leads by their industry ids | [optional]
 **call_count_before_validation_lt** | **int**| Lead must have less than this many calls before validation occurred. | [optional]
 **is_validation_postponed** | **bool**| Is the lead&#39;s validation postponed? | [optional] [default to false]
 **created_at_lte** | **string**| Get leads created before this date (inclusive). | [optional]
 **created_at_gte** | **string**| Get leads created after this date (inclusive). | [optional]
 **latest_called_at_before** | **string**| Find leads with a latest call before this date. | [optional]
 **segmentation_criteria** | **string**| Which criteria to segment on, e.g. language. | [optional]
 **segmented_for_partner_business_unit_id** | **int**| List leads that are segmented for a business unit. | [optional]
 **sub_geo_region_name** | **string**| List leads in any of these sub geo regions. E.g. &#39;Aarhus&#39;, &#39;Copenhagen&#39;. | [optional]
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

# **leadsQuotefeesCreate**
> \Ageras\Api\LeadQuoteFeeResource leadsQuotefeesCreate($lead_id , $lead_quote_fee_resource)

Create lead quote_fee.

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
$lead_quote_fee_resource = new \Ageras\Api\LeadQuoteFeeResource(); // \Ageras\Api\LeadQuoteFeeResource | 

try {
    $result = $api_instance->leadsQuotefeesCreate($lead_id , $lead_quote_fee_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsQuotefeesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **lead_quote_fee_resource** | [**\Ageras\Api\LeadQuoteFeeResource**](../Model/\Ageras\Api\LeadQuoteFeeResource.md)|  |

### Return type

[**\Ageras\Api\LeadQuoteFeeResource**](../Model/LeadQuoteFeeResource.md)

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
        'geo_code' => "geo_code_example"; // string | Geographic Location Code.
        'is_accepted' => false; // bool | Quote is accepted.
        'is_published' => false; // bool | Quote is published.
        'is_rejected' => false; // bool | Quote is rejected.
        'sort' => "created_at"; // string | Sort options.
        'lead_category_type' => "lead_category_type_example"; // string | Filter by lead category type.
        'reservation_is_expired' => false; // bool | Quote's reservation is expired.
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
 **lead_category_type** | **string**| Filter by lead category type. | [optional]
 **reservation_is_expired** | **bool**| Quote&#39;s reservation is expired. | [optional] [default to false]
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
        'geo_code' => "geo_code_example"; // string | Geographic Location Code.
        'is_accepted' => false; // bool | Quote is accepted.
        'is_published' => false; // bool | Quote is published.
        'is_rejected' => false; // bool | Quote is rejected.
        'sort' => "created_at"; // string | Sort options.
        'lead_category_type' => "lead_category_type_example"; // string | Filter by lead category type.
        'reservation_is_expired' => false; // bool | Quote's reservation is expired.
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
 **lead_category_type** | **string**| Filter by lead category type. | [optional]
 **reservation_is_expired** | **bool**| Quote&#39;s reservation is expired. | [optional] [default to false]
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

# **leadsQuotesItemsCreate**
> \Ageras\Api\LeadQuoteItemResource leadsQuotesItemsCreate($lead_id,  $lead_quote_id , $lead_quote_item_resource)

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
$lead_quote_item_resource = new \Ageras\Api\LeadQuoteItemResource(); // \Ageras\Api\LeadQuoteItemResource | 

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
 **lead_quote_item_resource** | [**\Ageras\Api\LeadQuoteItemResource**](../Model/\Ageras\Api\LeadQuoteItemResource.md)|  |

### Return type

[**\Ageras\Api\LeadQuoteItemResource**](../Model/LeadQuoteItemResource.md)

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
> \Ageras\Api\LeadQuoteItemResource leadsQuotesItemsGet($lead_id,  $lead_quote_id,  $lead_quote_item_id )

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

[**\Ageras\Api\LeadQuoteItemResource**](../Model/LeadQuoteItemResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesItemsIndex**
> \Ageras\Api\LeadQuoteItemResult leadsQuotesItemsIndex($lead_id,  $lead_quote_id , $criteria)

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

[**\Ageras\Api\LeadQuoteItemResult**](../Model/LeadQuoteItemResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesItemsUpdate**
> \Ageras\Api\LeadQuoteItemResource leadsQuotesItemsUpdate($lead_id,  $lead_quote_id,  $lead_quote_item_id , $lead_quote_item_resource)

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
$lead_quote_item_resource = new \Ageras\Api\LeadQuoteItemResource(); // \Ageras\Api\LeadQuoteItemResource | 

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
 **lead_quote_item_resource** | [**\Ageras\Api\LeadQuoteItemResource**](../Model/\Ageras\Api\LeadQuoteItemResource.md)|  |

### Return type

[**\Ageras\Api\LeadQuoteItemResource**](../Model/LeadQuoteItemResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesProgressstepsIndex**
> \Ageras\Api\LeadQuoteProgressResult leadsQuotesProgressstepsIndex($criteria)

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

[**\Ageras\Api\LeadQuoteProgressResult**](../Model/LeadQuoteProgressResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesUpdate**
> \Ageras\Api\LeadQuoteResource leadsQuotesUpdate($lead_quote_id , $lead_quote_resource)

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
$lead_quote_resource = new \Ageras\Api\LeadQuoteResource(); // \Ageras\Api\LeadQuoteResource | 

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
 **lead_quote_resource** | [**\Ageras\Api\LeadQuoteResource**](../Model/\Ageras\Api\LeadQuoteResource.md)|  |

### Return type

[**\Ageras\Api\LeadQuoteResource**](../Model/LeadQuoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsQuotesUpdate2**
> \Ageras\Api\LeadQuoteResource leadsQuotesUpdate2($lead_id,  $lead_quote_id , $lead_quote_resource)

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
$lead_quote_resource = new \Ageras\Api\LeadQuoteResource(); // \Ageras\Api\LeadQuoteResource | 

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
 **lead_quote_resource** | [**\Ageras\Api\LeadQuoteResource**](../Model/\Ageras\Api\LeadQuoteResource.md)|  |

### Return type

[**\Ageras\Api\LeadQuoteResource**](../Model/LeadQuoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsSegmentationsubgeoregionsIndex**
> \Ageras\Api\SegmentationSubGeoRegionResult leadsSegmentationsubgeoregionsIndex($lead_id , $criteria)

List a lead's sub geo regions.

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
    $result = $api_instance->leadsSegmentationsubgeoregionsIndex($lead_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsSegmentationsubgeoregionsIndex: ', $e->getMessage(), PHP_EOL;
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

[**\Ageras\Api\SegmentationSubGeoRegionResult**](../Model/SegmentationSubGeoRegionResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsSegmentationsubgeoregionsUpdate**
> \Ageras\Api\SegmentationSubGeoRegionsResource leadsSegmentationsubgeoregionsUpdate($lead_id , $segmentation_sub_geo_regions_resource)

Update a lead's sub geo regions.

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
$segmentation_sub_geo_regions_resource = new \Ageras\Api\SegmentationSubGeoRegionsResource(); // \Ageras\Api\SegmentationSubGeoRegionsResource | 

try {
    $result = $api_instance->leadsSegmentationsubgeoregionsUpdate($lead_id , $segmentation_sub_geo_regions_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsSegmentationsubgeoregionsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **segmentation_sub_geo_regions_resource** | [**\Ageras\Api\SegmentationSubGeoRegionsResource**](../Model/\Ageras\Api\SegmentationSubGeoRegionsResource.md)|  |

### Return type

[**\Ageras\Api\SegmentationSubGeoRegionsResource**](../Model/SegmentationSubGeoRegionsResource.md)

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

