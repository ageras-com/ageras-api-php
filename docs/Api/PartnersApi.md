# Ageras\Api\PartnersApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**partnersActionsCreate**](PartnersApi.md#partnersActionsCreate) | **POST** /partners/{partner_id}/actions | Partner actions.
[**partnersAggregationsIndex**](PartnersApi.md#partnersAggregationsIndex) | **GET** /partners/aggregations | List facets and aggregations for the Partner Search.
[**partnersBankaccountsCreate**](PartnersApi.md#partnersBankaccountsCreate) | **POST** /partners/{partner_id}/bankaccounts | Subscribe a partner.
[**partnersBankaccountsIndex**](PartnersApi.md#partnersBankaccountsIndex) | **GET** /partners/{partner_id}/bankaccounts | Get partner&#39;s bank accounts.
[**partnersBusinessunitsCreate**](PartnersApi.md#partnersBusinessunitsCreate) | **POST** /partners/{partner_id}/businessunits | Create partner business unit.
[**partnersBusinessunitsDelete**](PartnersApi.md#partnersBusinessunitsDelete) | **DELETE** /partners/{partner_id}/businessunits/{partner_businessunit_id} | Delete a partner business unit
[**partnersBusinessunitsGet**](PartnersApi.md#partnersBusinessunitsGet) | **GET** /partners/{partner_id}/businessunits/{partner_business_unit_id} | Get a single partner business unit.
[**partnersBusinessunitsIndex**](PartnersApi.md#partnersBusinessunitsIndex) | **GET** /partners/businessunits | List partner business units.
[**partnersBusinessunitsIndustriesIndex**](PartnersApi.md#partnersBusinessunitsIndustriesIndex) | **GET** /partners/{partner_id}/businessunits/{partner_business_unit_id}/industries | List business unit industries.
[**partnersBusinessunitsIndustriesUpdate**](PartnersApi.md#partnersBusinessunitsIndustriesUpdate) | **PUT** /partners/{partner_id}/businessunits/{partner_business_unit_id}/industries | Update business unit industries.
[**partnersBusinessunitsRevenuerangesCreate**](PartnersApi.md#partnersBusinessunitsRevenuerangesCreate) | **POST** /partners/{partner_id}/businessunits/{partner_business_unit_id}/revenueranges | Create a business unit revenue range.
[**partnersBusinessunitsSectorsIndex**](PartnersApi.md#partnersBusinessunitsSectorsIndex) | **GET** /partners/{partner_id}/businessunits/{partner_business_unit_id}/sectors | List business unit sectors.
[**partnersBusinessunitsSectorsUpdate**](PartnersApi.md#partnersBusinessunitsSectorsUpdate) | **PUT** /partners/{partner_id}/businessunits/{partner_business_unit_id}/sectors | Update partner business unit sectors.
[**partnersBusinessunitsTypesIndex**](PartnersApi.md#partnersBusinessunitsTypesIndex) | **GET** /partners/{partner_id}/businessunits/{partner_business_unit_id}/types | List business unit types.
[**partnersBusinessunitsTypesUpdate**](PartnersApi.md#partnersBusinessunitsTypesUpdate) | **PUT** /partners/{partner_id}/businessunits/{partner_business_unit_id}/types | Update partner business unit types.
[**partnersBusinessunitsUpdate**](PartnersApi.md#partnersBusinessunitsUpdate) | **PUT** /partners/{partner_id}/businessunits/{partner_business_unit_id} | Update partner business unit.
[**partnersCertificationsCreate**](PartnersApi.md#partnersCertificationsCreate) | **POST** /partners/{partner_id}/certifications | Attach certification to partner.
[**partnersCertificationsDelete**](PartnersApi.md#partnersCertificationsDelete) | **DELETE** /partners/{partner_id}/certifications/{certification_id} | Detach certification from partner.
[**partnersCertificationsGet**](PartnersApi.md#partnersCertificationsGet) | **GET** /partners/{partner_id}/certifications/{certification_id} | Get Partner certification.
[**partnersCertificationsIndex**](PartnersApi.md#partnersCertificationsIndex) | **GET** /partners/{partner_id}/certifications | Get partner certifications.
[**partnersCertificationsUpdate**](PartnersApi.md#partnersCertificationsUpdate) | **PUT** /partners/{partner_id}/certifications | Update partner certifications.
[**partnersContentsDelete**](PartnersApi.md#partnersContentsDelete) | **DELETE** /partners/{partner_id}/contents/{content_key} | Delete content for a given partner.
[**partnersContentsGet**](PartnersApi.md#partnersContentsGet) | **GET** /partners/{partner_id}/contents/{content_key} | Get the content of a given partner.
[**partnersContentsUpdate**](PartnersApi.md#partnersContentsUpdate) | **PUT** /partners/{partner_id}/contents/{content_key} | Update content for a given partner.
[**partnersCouponsActionsCreate**](PartnersApi.md#partnersCouponsActionsCreate) | **POST** /partners/{partner_id}/coupons/{coupon_id}/actions | Coupon action
[**partnersCouponsCreate**](PartnersApi.md#partnersCouponsCreate) | **POST** /partners/{partner_id}/coupons | Create a new partner coupon.
[**partnersCouponsIndex**](PartnersApi.md#partnersCouponsIndex) | **GET** /partners/{partner_id}/coupons | List Partner Coupons.
[**partnersCreate**](PartnersApi.md#partnersCreate) | **POST** /partners | Create a Partner.
[**partnersDelete**](PartnersApi.md#partnersDelete) | **DELETE** /partners/{partner_id} | Delete a Partner.
[**partnersDeliverablesCreate**](PartnersApi.md#partnersDeliverablesCreate) | **POST** /partners/deliverables | Create Deliverable for partners
[**partnersDeliverablesCreate2**](PartnersApi.md#partnersDeliverablesCreate2) | **POST** /partners/{partner_id}/deliverables | Create Deliverable for partners
[**partnersDeliverablesGet**](PartnersApi.md#partnersDeliverablesGet) | **GET** /partners/deliverables/{partnerDeliverable_id} | Retrieve a single deliverable id
[**partnersDeliverablesGet2**](PartnersApi.md#partnersDeliverablesGet2) | **GET** /partners/{partner_id}/deliverables/{partnerDeliverable_id} | Retrieve a single deliverable id
[**partnersDeliverablesIndex**](PartnersApi.md#partnersDeliverablesIndex) | **GET** /partners/deliverables | List Partner deliverables
[**partnersDeliverablesIndex2**](PartnersApi.md#partnersDeliverablesIndex2) | **GET** /partners/{partner_id}/deliverables | List Partner deliverables
[**partnersDeliverablesLinesCreate**](PartnersApi.md#partnersDeliverablesLinesCreate) | **POST** /partners/deliverables/{partnerDeliverable_id}/lines | Create item for Partner Deliverable
[**partnersDeliverablesLinesCreate2**](PartnersApi.md#partnersDeliverablesLinesCreate2) | **POST** /partners/{partner_id}/deliverables/{partnerDeliverable_id}/lines | Create item for Partner Deliverable
[**partnersDeliverablesLinesDelete**](PartnersApi.md#partnersDeliverablesLinesDelete) | **DELETE** /partners/deliverables/{partnerDeliverable_id}/lines/{partnerDeliverableLine_id} | Delete item from Partner Deliverable
[**partnersDeliverablesLinesDelete2**](PartnersApi.md#partnersDeliverablesLinesDelete2) | **DELETE** /partners/{partner_id}/deliverables/{partnerDeliverable_id}/lines/{partnerDeliverableLine_id} | Delete item from Partner Deliverable
[**partnersDeliverablesLinesGet**](PartnersApi.md#partnersDeliverablesLinesGet) | **GET** /partners/deliverables/{partnerDeliverable_id}/lines/{partnerDeliverableLine_id} | Get Partner Deliverable Item
[**partnersDeliverablesLinesGet2**](PartnersApi.md#partnersDeliverablesLinesGet2) | **GET** /partners/{partner_id}/deliverables/{partnerDeliverable_id}/lines/{partnerDeliverableLine_id} | Get Partner Deliverable Item
[**partnersDeliverablesLinesIndex**](PartnersApi.md#partnersDeliverablesLinesIndex) | **GET** /partners/deliverables/{partnerDeliverable_id}/lines | List Partner Deliverable Items
[**partnersDeliverablesLinesIndex2**](PartnersApi.md#partnersDeliverablesLinesIndex2) | **GET** /partners/{partner_id}/deliverables/{partnerDeliverable_id}/lines | List Partner Deliverable Items
[**partnersDeliverablesLinesUpdate**](PartnersApi.md#partnersDeliverablesLinesUpdate) | **PUT** /partners/deliverables/{partnerDeliverable_id}/lines/{partnerDeliverableLine_id} | Update item for Partner Deliverable
[**partnersDeliverablesLinesUpdate2**](PartnersApi.md#partnersDeliverablesLinesUpdate2) | **PUT** /partners/{partner_id}/deliverables/{partnerDeliverable_id}/lines/{partnerDeliverableLine_id} | Update item for Partner Deliverable
[**partnersDeliverablesUpdate**](PartnersApi.md#partnersDeliverablesUpdate) | **PUT** /partners/deliverables/{partnerDeliverable_id} | Update Partner Deliverable
[**partnersDeliverablesUpdate2**](PartnersApi.md#partnersDeliverablesUpdate2) | **PUT** /partners/{partner_id}/deliverables/{partnerDeliverable_id} | Update Partner Deliverable
[**partnersDiscountsCreate**](PartnersApi.md#partnersDiscountsCreate) | **POST** /partners/{partner_id}/discounts | Discount for a partner.
[**partnersDiscountsDelete**](PartnersApi.md#partnersDiscountsDelete) | **DELETE** /partners/{partner_id}/discounts/{partner_package_type_discount_id} | Delete a partner discount
[**partnersDiscountsIndex**](PartnersApi.md#partnersDiscountsIndex) | **GET** /partners/{partner_id}/discounts | Get partner&#39;s discounts.
[**partnersFeesCreate**](PartnersApi.md#partnersFeesCreate) | **POST** /partners/{partner_id}/fees | Create partner fee
[**partnersFeesDelete**](PartnersApi.md#partnersFeesDelete) | **DELETE** /partners/{partner_id}/fees/{id} | Delete a partner fee
[**partnersFeesIndex**](PartnersApi.md#partnersFeesIndex) | **GET** /partners/fees | Get all partner fees.
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
[**partnersRevenuerangesCreate**](PartnersApi.md#partnersRevenuerangesCreate) | **POST** /partners/{partner_id}/revenueranges | Create a revenue range.
[**partnersSectorsIndex**](PartnersApi.md#partnersSectorsIndex) | **GET** /partners/{partner_id}/sectors | Get partner sectors.
[**partnersSectorsUpdate**](PartnersApi.md#partnersSectorsUpdate) | **PUT** /partners/{partner_id}/sectors | Update partner sectors.
[**partnersSubscriptionsActionsCreate**](PartnersApi.md#partnersSubscriptionsActionsCreate) | **POST** /partners/{partner_id}/subscriptions/{subscription_id}/actions | Cancel subscription.
[**partnersSubscriptionsCreate**](PartnersApi.md#partnersSubscriptionsCreate) | **POST** /partners/{partner_id}/subscriptions | Subscribe a partner.
[**partnersSubscriptionsIndex**](PartnersApi.md#partnersSubscriptionsIndex) | **GET** /partners/{partner_id}/subscriptions | Get partner&#39;s subscriptions.
[**partnersSubscriptionsPricesCreate**](PartnersApi.md#partnersSubscriptionsPricesCreate) | **POST** /partners/{partner_id}/subscriptions/{subscription_id}/prices | Create a new subscription price effective at a specific date
[**partnersSubscriptionsPricesDelete**](PartnersApi.md#partnersSubscriptionsPricesDelete) | **DELETE** /partners/{partner_id}/subscriptions/{subscription_id}/prices/{subscription_price_id} | Delete a future subscription price
[**partnersSubscriptionsPricesIndex**](PartnersApi.md#partnersSubscriptionsPricesIndex) | **GET** /partners/{partner_id}/subscriptions/{subscription_id}/prices | List the subscription&#39;s prices.
[**partnersSubscriptionsUpdate**](PartnersApi.md#partnersSubscriptionsUpdate) | **PUT** /partners/{partner_id}/subscriptions | Update partner subscription.
[**partnersSuggestIndex**](PartnersApi.md#partnersSuggestIndex) | **GET** /partners/suggest | Suggest Partners to search for.
[**partnersTitlesIndex**](PartnersApi.md#partnersTitlesIndex) | **GET** /partners/titles | Get all partner titles.
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
[**partnersVerificationsIndex**](PartnersApi.md#partnersVerificationsIndex) | **GET** /partners/verifications | Get Partner verifications.
[**partnersVerificationsIndex2**](PartnersApi.md#partnersVerificationsIndex2) | **GET** /partners/{partner_id}/verifications | Get Partner verifications.
[**partnersVerificationsUpdate**](PartnersApi.md#partnersVerificationsUpdate) | **PUT** /partners/{partner_id}/verifications | Update Partner verification data.


# **partnersActionsCreate**
> \Ageras\Api\PartnerResource partnersActionsCreate($partner_id , $partner_action_resource)

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
$partner_action_resource = new \Ageras\Api\PartnerActionResource(); // \Ageras\Api\PartnerActionResource | 

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
 **partner_action_resource** | [**\Ageras\Api\PartnerActionResource**](../Model/\Ageras\Api\PartnerActionResource.md)|  |

### Return type

[**\Ageras\Api\PartnerResource**](../Model/PartnerResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersAggregationsIndex**
> \Ageras\Api\AggregationResult partnersAggregationsIndex($criteria)

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
        'package_type' => "package_type_example"; // string | Partner subscription package type
        'segmented_for_lead_id' => 56; // int | Get partners segmented for this lead ID
        'badge_id' => "badge_id_example"; // string | 
        'digital_leads' => "digital_leads_example"; // string | 
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
 **package_type** | **string**| Partner subscription package type | [optional]
 **segmented_for_lead_id** | **int**| Get partners segmented for this lead ID | [optional]
 **badge_id** | **string**|  | [optional]
 **digital_leads** | **string**|  | [optional]
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

# **partnersBankaccountsCreate**
> \Ageras\Api\PartnerBankaccountResource partnersBankaccountsCreate($partner_id , $partner_bankaccount_resource)

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
$partner_bankaccount_resource = new \Ageras\Api\PartnerBankaccountResource(); // \Ageras\Api\PartnerBankaccountResource | 

try {
    $result = $api_instance->partnersBankaccountsCreate($partner_id , $partner_bankaccount_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersBankaccountsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_bankaccount_resource** | [**\Ageras\Api\PartnerBankaccountResource**](../Model/\Ageras\Api\PartnerBankaccountResource.md)|  |

### Return type

[**\Ageras\Api\PartnerBankaccountResource**](../Model/PartnerBankaccountResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersBankaccountsIndex**
> \Ageras\Api\PartnerBankaccountResult partnersBankaccountsIndex($partner_id , $criteria)

Get partner's bank accounts.

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
    $result = $api_instance->partnersBankaccountsIndex($partner_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersBankaccountsIndex: ', $e->getMessage(), PHP_EOL;
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

[**\Ageras\Api\PartnerBankaccountResult**](../Model/PartnerBankaccountResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersBusinessunitsCreate**
> \Ageras\Api\PartnerBusinessUnitResource partnersBusinessunitsCreate($partner_id , $partner_business_unit_resource)

Create partner business unit.

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
$partner_business_unit_resource = new \Ageras\Api\PartnerBusinessUnitResource(); // \Ageras\Api\PartnerBusinessUnitResource | 

try {
    $result = $api_instance->partnersBusinessunitsCreate($partner_id , $partner_business_unit_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersBusinessunitsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_business_unit_resource** | [**\Ageras\Api\PartnerBusinessUnitResource**](../Model/\Ageras\Api\PartnerBusinessUnitResource.md)|  |

### Return type

[**\Ageras\Api\PartnerBusinessUnitResource**](../Model/PartnerBusinessUnitResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersBusinessunitsDelete**
> partnersBusinessunitsDelete($partner_id,  $partner_businessunit_id )

Delete a partner business unit

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
$partner_businessunit_id = "partner_businessunit_id_example"; // string | 

try {
    $api_instance->partnersBusinessunitsDelete($partner_id,  $partner_businessunit_id );
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersBusinessunitsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_businessunit_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersBusinessunitsGet**
> \Ageras\Api\PartnerBusinessUnitResource partnersBusinessunitsGet($partner_id,  $partner_business_unit_id )

Get a single partner business unit.

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
$partner_business_unit_id = "partner_business_unit_id_example"; // string | 

try {
    $result = $api_instance->partnersBusinessunitsGet($partner_id,  $partner_business_unit_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersBusinessunitsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_business_unit_id** | **string**|  |

### Return type

[**\Ageras\Api\PartnerBusinessUnitResource**](../Model/PartnerBusinessUnitResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersBusinessunitsIndex**
> \Ageras\Api\PartnerBusinessUnitResult partnersBusinessunitsIndex($criteria)

List partner business units.

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
        'id' => "id_example"; // string | Primary ID.
        'partner_id' => "partner_id_example"; // string | Partner ID.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersBusinessunitsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersBusinessunitsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Primary ID. | [optional]
 **partner_id** | **string**| Partner ID. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\PartnerBusinessUnitResult**](../Model/PartnerBusinessUnitResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersBusinessunitsIndustriesIndex**
> \Ageras\Api\PartnerBusinessUnitIndustryResult partnersBusinessunitsIndustriesIndex($partner_id,  $partner_business_unit_id , $criteria)

List business unit industries.

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
$partner_business_unit_id = "partner_business_unit_id_example"; // string | 
$criteria = [
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersBusinessunitsIndustriesIndex($partner_id,  $partner_business_unit_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersBusinessunitsIndustriesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_business_unit_id** | **string**|  |
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\PartnerBusinessUnitIndustryResult**](../Model/PartnerBusinessUnitIndustryResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersBusinessunitsIndustriesUpdate**
> \Ageras\Api\PartnerBusinessUnitIndustriesResource partnersBusinessunitsIndustriesUpdate($partner_id,  $partner_business_unit_id , $partner_business_unit_industries_resource)

Update business unit industries.

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
$partner_business_unit_id = "partner_business_unit_id_example"; // string | 
$partner_business_unit_industries_resource = new \Ageras\Api\PartnerBusinessUnitIndustriesResource(); // \Ageras\Api\PartnerBusinessUnitIndustriesResource | 

try {
    $result = $api_instance->partnersBusinessunitsIndustriesUpdate($partner_id,  $partner_business_unit_id , $partner_business_unit_industries_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersBusinessunitsIndustriesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_business_unit_id** | **string**|  |
 **partner_business_unit_industries_resource** | [**\Ageras\Api\PartnerBusinessUnitIndustriesResource**](../Model/\Ageras\Api\PartnerBusinessUnitIndustriesResource.md)|  |

### Return type

[**\Ageras\Api\PartnerBusinessUnitIndustriesResource**](../Model/PartnerBusinessUnitIndustriesResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersBusinessunitsRevenuerangesCreate**
> \Ageras\Api\PartnerBusinessUnitRevenueRangeResource partnersBusinessunitsRevenuerangesCreate($partner_id,  $partner_business_unit_id , $partner_business_unit_revenue_range_resource)

Create a business unit revenue range.

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
$partner_business_unit_id = "partner_business_unit_id_example"; // string | 
$partner_business_unit_revenue_range_resource = new \Ageras\Api\PartnerBusinessUnitRevenueRangeResource(); // \Ageras\Api\PartnerBusinessUnitRevenueRangeResource | 

try {
    $result = $api_instance->partnersBusinessunitsRevenuerangesCreate($partner_id,  $partner_business_unit_id , $partner_business_unit_revenue_range_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersBusinessunitsRevenuerangesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_business_unit_id** | **string**|  |
 **partner_business_unit_revenue_range_resource** | [**\Ageras\Api\PartnerBusinessUnitRevenueRangeResource**](../Model/\Ageras\Api\PartnerBusinessUnitRevenueRangeResource.md)|  |

### Return type

[**\Ageras\Api\PartnerBusinessUnitRevenueRangeResource**](../Model/PartnerBusinessUnitRevenueRangeResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersBusinessunitsSectorsIndex**
> \Ageras\Api\SectorResult partnersBusinessunitsSectorsIndex($partner_id,  $partner_business_unit_id , $criteria)

List business unit sectors.

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
$partner_business_unit_id = "partner_business_unit_id_example"; // string | 
$criteria = [
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersBusinessunitsSectorsIndex($partner_id,  $partner_business_unit_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersBusinessunitsSectorsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_business_unit_id** | **string**|  |
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\SectorResult**](../Model/SectorResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersBusinessunitsSectorsUpdate**
> \Ageras\Api\PartnerSectorsResource partnersBusinessunitsSectorsUpdate($partner_id,  $partner_business_unit_id , $partner_sectors_resource)

Update partner business unit sectors.

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
$partner_business_unit_id = "partner_business_unit_id_example"; // string | 
$partner_sectors_resource = new \Ageras\Api\PartnerSectorsResource(); // \Ageras\Api\PartnerSectorsResource | 

try {
    $result = $api_instance->partnersBusinessunitsSectorsUpdate($partner_id,  $partner_business_unit_id , $partner_sectors_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersBusinessunitsSectorsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_business_unit_id** | **string**|  |
 **partner_sectors_resource** | [**\Ageras\Api\PartnerSectorsResource**](../Model/\Ageras\Api\PartnerSectorsResource.md)|  |

### Return type

[**\Ageras\Api\PartnerSectorsResource**](../Model/PartnerSectorsResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersBusinessunitsTypesIndex**
> \Ageras\Api\PartnerBusinessUnitTypeResult partnersBusinessunitsTypesIndex($partner_id,  $partner_business_unit_id , $criteria)

List business unit types.

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
$partner_business_unit_id = "partner_business_unit_id_example"; // string | 
$criteria = [
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersBusinessunitsTypesIndex($partner_id,  $partner_business_unit_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersBusinessunitsTypesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_business_unit_id** | **string**|  |
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\PartnerBusinessUnitTypeResult**](../Model/PartnerBusinessUnitTypeResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersBusinessunitsTypesUpdate**
> \Ageras\Api\PartnerBusinessUnitTypesResource partnersBusinessunitsTypesUpdate($partner_id,  $partner_business_unit_id , $partner_business_unit_types_resource)

Update partner business unit types.

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
$partner_business_unit_id = "partner_business_unit_id_example"; // string | 
$partner_business_unit_types_resource = new \Ageras\Api\PartnerBusinessUnitTypesResource(); // \Ageras\Api\PartnerBusinessUnitTypesResource | 

try {
    $result = $api_instance->partnersBusinessunitsTypesUpdate($partner_id,  $partner_business_unit_id , $partner_business_unit_types_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersBusinessunitsTypesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_business_unit_id** | **string**|  |
 **partner_business_unit_types_resource** | [**\Ageras\Api\PartnerBusinessUnitTypesResource**](../Model/\Ageras\Api\PartnerBusinessUnitTypesResource.md)|  |

### Return type

[**\Ageras\Api\PartnerBusinessUnitTypesResource**](../Model/PartnerBusinessUnitTypesResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersBusinessunitsUpdate**
> \Ageras\Api\PartnerBusinessUnitResource partnersBusinessunitsUpdate($partner_id,  $partner_business_unit_id , $partner_business_unit_resource)

Update partner business unit.

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
$partner_business_unit_id = "partner_business_unit_id_example"; // string | 
$partner_business_unit_resource = new \Ageras\Api\PartnerBusinessUnitResource(); // \Ageras\Api\PartnerBusinessUnitResource | 

try {
    $result = $api_instance->partnersBusinessunitsUpdate($partner_id,  $partner_business_unit_id , $partner_business_unit_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersBusinessunitsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_business_unit_id** | **string**|  |
 **partner_business_unit_resource** | [**\Ageras\Api\PartnerBusinessUnitResource**](../Model/\Ageras\Api\PartnerBusinessUnitResource.md)|  |

### Return type

[**\Ageras\Api\PartnerBusinessUnitResource**](../Model/PartnerBusinessUnitResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersCertificationsCreate**
> \Ageras\Api\CertificationResource partnersCertificationsCreate($partner_id , $certification_resource)

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
$certification_resource = new \Ageras\Api\CertificationResource(); // \Ageras\Api\CertificationResource | 

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
 **certification_resource** | [**\Ageras\Api\CertificationResource**](../Model/\Ageras\Api\CertificationResource.md)|  |

### Return type

[**\Ageras\Api\CertificationResource**](../Model/CertificationResource.md)

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
> \Ageras\Api\CertificationResource partnersCertificationsGet($partner_id,  $certification_id )

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

[**\Ageras\Api\CertificationResource**](../Model/CertificationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersCertificationsIndex**
> \Ageras\Api\CertificationResult partnersCertificationsIndex($partner_id , $criteria)

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

[**\Ageras\Api\CertificationResult**](../Model/CertificationResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersCertificationsUpdate**
> \Ageras\Api\PartnerCertificationsResource partnersCertificationsUpdate($partner_id , $partner_certifications_resource)

Update partner certifications.

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
$partner_certifications_resource = new \Ageras\Api\PartnerCertificationsResource(); // \Ageras\Api\PartnerCertificationsResource | 

try {
    $result = $api_instance->partnersCertificationsUpdate($partner_id , $partner_certifications_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersCertificationsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_certifications_resource** | [**\Ageras\Api\PartnerCertificationsResource**](../Model/\Ageras\Api\PartnerCertificationsResource.md)|  |

### Return type

[**\Ageras\Api\PartnerCertificationsResource**](../Model/PartnerCertificationsResource.md)

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
> \Ageras\Api\PartnerContentResource partnersContentsGet($partner_id,  $content_key )

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

[**\Ageras\Api\PartnerContentResource**](../Model/PartnerContentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersContentsUpdate**
> \Ageras\Api\PartnerContentResource partnersContentsUpdate($partner_id,  $content_key , $partner_content_resource)

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
$partner_content_resource = new \Ageras\Api\PartnerContentResource(); // \Ageras\Api\PartnerContentResource | 

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
 **partner_content_resource** | [**\Ageras\Api\PartnerContentResource**](../Model/\Ageras\Api\PartnerContentResource.md)|  |

### Return type

[**\Ageras\Api\PartnerContentResource**](../Model/PartnerContentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersCouponsActionsCreate**
> \Ageras\Api\PartnerCouponResource partnersCouponsActionsCreate($partner_id,  $coupon_id , $partner_coupon_action_resource)

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
$partner_coupon_action_resource = new \Ageras\Api\PartnerCouponActionResource(); // \Ageras\Api\PartnerCouponActionResource | 

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
 **partner_coupon_action_resource** | [**\Ageras\Api\PartnerCouponActionResource**](../Model/\Ageras\Api\PartnerCouponActionResource.md)|  |

### Return type

[**\Ageras\Api\PartnerCouponResource**](../Model/PartnerCouponResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersCouponsCreate**
> \Ageras\Api\PartnerCouponResource partnersCouponsCreate($partner_id , $partner_coupon_resource)

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
$partner_coupon_resource = new \Ageras\Api\PartnerCouponResource(); // \Ageras\Api\PartnerCouponResource | 

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
 **partner_coupon_resource** | [**\Ageras\Api\PartnerCouponResource**](../Model/\Ageras\Api\PartnerCouponResource.md)|  |

### Return type

[**\Ageras\Api\PartnerCouponResource**](../Model/PartnerCouponResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersCouponsIndex**
> \Ageras\Api\PartnerCouponResult partnersCouponsIndex($partner_id , $criteria)

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

[**\Ageras\Api\PartnerCouponResult**](../Model/PartnerCouponResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersCreate**
> \Ageras\Api\PartnerResource partnersCreate($partner_resource)

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
$partner_resource = new \Ageras\Api\PartnerResource(); // \Ageras\Api\PartnerResource | 

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
 **partner_resource** | [**\Ageras\Api\PartnerResource**](../Model/\Ageras\Api\PartnerResource.md)|  |

### Return type

[**\Ageras\Api\PartnerResource**](../Model/PartnerResource.md)

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

# **partnersDeliverablesCreate**
> \Ageras\Api\PartnerDeliverableResource partnersDeliverablesCreate($partner_deliverable_resource)

Create Deliverable for partners

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
$partner_deliverable_resource = new \Ageras\Api\PartnerDeliverableResource(); // \Ageras\Api\PartnerDeliverableResource | 

try {
    $result = $api_instance->partnersDeliverablesCreate($partner_deliverable_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersDeliverablesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_deliverable_resource** | [**\Ageras\Api\PartnerDeliverableResource**](../Model/\Ageras\Api\PartnerDeliverableResource.md)|  |

### Return type

[**\Ageras\Api\PartnerDeliverableResource**](../Model/PartnerDeliverableResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersDeliverablesCreate2**
> \Ageras\Api\PartnerDeliverableResource partnersDeliverablesCreate2($partner_id , $partner_deliverable_resource)

Create Deliverable for partners

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
$partner_deliverable_resource = new \Ageras\Api\PartnerDeliverableResource(); // \Ageras\Api\PartnerDeliverableResource | 

try {
    $result = $api_instance->partnersDeliverablesCreate2($partner_id , $partner_deliverable_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersDeliverablesCreate2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_deliverable_resource** | [**\Ageras\Api\PartnerDeliverableResource**](../Model/\Ageras\Api\PartnerDeliverableResource.md)|  |

### Return type

[**\Ageras\Api\PartnerDeliverableResource**](../Model/PartnerDeliverableResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersDeliverablesGet**
> \Ageras\Api\PartnerDeliverableResource partnersDeliverablesGet($partner_deliverable_id )

Retrieve a single deliverable id

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
$partner_deliverable_id = "partner_deliverable_id_example"; // string | 

try {
    $result = $api_instance->partnersDeliverablesGet($partner_deliverable_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersDeliverablesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_deliverable_id** | **string**|  |

### Return type

[**\Ageras\Api\PartnerDeliverableResource**](../Model/PartnerDeliverableResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersDeliverablesGet2**
> \Ageras\Api\PartnerDeliverableResource partnersDeliverablesGet2($partner_id,  $partner_deliverable_id )

Retrieve a single deliverable id

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
$partner_deliverable_id = "partner_deliverable_id_example"; // string | 

try {
    $result = $api_instance->partnersDeliverablesGet2($partner_id,  $partner_deliverable_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersDeliverablesGet2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_deliverable_id** | **string**|  |

### Return type

[**\Ageras\Api\PartnerDeliverableResource**](../Model/PartnerDeliverableResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersDeliverablesIndex**
> \Ageras\Api\PartnerDeliverableResult partnersDeliverablesIndex($criteria)

List Partner deliverables

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
        'client_id' => "client_id_example"; // string | Client id for the clients to filter by
        'lead_id' => "lead_id_example"; // string | Lead id for the lead to filter by
        'partner_id' => "partner_id_example"; // string | Partner id of the partners to filter by.
        'partner_deliverable_id' => "partner_deliverable_id_example"; // string | Partner deliverable id of the partners to filter by.
        'status' => "status_example"; // string | States for the partners.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersDeliverablesIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersDeliverablesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Client id for the clients to filter by | [optional]
 **lead_id** | **string**| Lead id for the lead to filter by | [optional]
 **partner_id** | **string**| Partner id of the partners to filter by. | [optional]
 **partner_deliverable_id** | **string**| Partner deliverable id of the partners to filter by. | [optional]
 **status** | **string**| States for the partners. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\PartnerDeliverableResult**](../Model/PartnerDeliverableResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersDeliverablesIndex2**
> \Ageras\Api\PartnerDeliverableResult partnersDeliverablesIndex2($partner_id , $criteria)

List Partner deliverables

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
        'client_id' => "client_id_example"; // string | Client id for the clients to filter by
        'lead_id' => "lead_id_example"; // string | Lead id for the lead to filter by
        'partner_deliverable_id' => "partner_deliverable_id_example"; // string | Partner deliverable id of the partners to filter by.
        'status' => "status_example"; // string | States for the partners.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersDeliverablesIndex2($partner_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersDeliverablesIndex2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **client_id** | **string**| Client id for the clients to filter by | [optional]
 **lead_id** | **string**| Lead id for the lead to filter by | [optional]
 **partner_deliverable_id** | **string**| Partner deliverable id of the partners to filter by. | [optional]
 **status** | **string**| States for the partners. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\PartnerDeliverableResult**](../Model/PartnerDeliverableResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersDeliverablesLinesCreate**
> \Ageras\Api\PartnerDeliverableLineResource partnersDeliverablesLinesCreate($partner_deliverable_id , $partner_deliverable_line_resource)

Create item for Partner Deliverable

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
$partner_deliverable_id = "partner_deliverable_id_example"; // string | 
$partner_deliverable_line_resource = new \Ageras\Api\PartnerDeliverableLineResource(); // \Ageras\Api\PartnerDeliverableLineResource | 

try {
    $result = $api_instance->partnersDeliverablesLinesCreate($partner_deliverable_id , $partner_deliverable_line_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersDeliverablesLinesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_deliverable_id** | **string**|  |
 **partner_deliverable_line_resource** | [**\Ageras\Api\PartnerDeliverableLineResource**](../Model/\Ageras\Api\PartnerDeliverableLineResource.md)|  |

### Return type

[**\Ageras\Api\PartnerDeliverableLineResource**](../Model/PartnerDeliverableLineResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersDeliverablesLinesCreate2**
> \Ageras\Api\PartnerDeliverableLineResource partnersDeliverablesLinesCreate2($partner_id,  $partner_deliverable_id , $partner_deliverable_line_resource)

Create item for Partner Deliverable

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
$partner_deliverable_id = "partner_deliverable_id_example"; // string | 
$partner_deliverable_line_resource = new \Ageras\Api\PartnerDeliverableLineResource(); // \Ageras\Api\PartnerDeliverableLineResource | 

try {
    $result = $api_instance->partnersDeliverablesLinesCreate2($partner_id,  $partner_deliverable_id , $partner_deliverable_line_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersDeliverablesLinesCreate2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_deliverable_id** | **string**|  |
 **partner_deliverable_line_resource** | [**\Ageras\Api\PartnerDeliverableLineResource**](../Model/\Ageras\Api\PartnerDeliverableLineResource.md)|  |

### Return type

[**\Ageras\Api\PartnerDeliverableLineResource**](../Model/PartnerDeliverableLineResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersDeliverablesLinesDelete**
> partnersDeliverablesLinesDelete($partner_deliverable_id,  $partner_deliverable_line_id )

Delete item from Partner Deliverable

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
$partner_deliverable_id = "partner_deliverable_id_example"; // string | 
$partner_deliverable_line_id = "partner_deliverable_line_id_example"; // string | 

try {
    $api_instance->partnersDeliverablesLinesDelete($partner_deliverable_id,  $partner_deliverable_line_id );
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersDeliverablesLinesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_deliverable_id** | **string**|  |
 **partner_deliverable_line_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersDeliverablesLinesDelete2**
> partnersDeliverablesLinesDelete2($partner_id,  $partner_deliverable_id,  $partner_deliverable_line_id )

Delete item from Partner Deliverable

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
$partner_deliverable_id = "partner_deliverable_id_example"; // string | 
$partner_deliverable_line_id = "partner_deliverable_line_id_example"; // string | 

try {
    $api_instance->partnersDeliverablesLinesDelete2($partner_id,  $partner_deliverable_id,  $partner_deliverable_line_id );
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersDeliverablesLinesDelete2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_deliverable_id** | **string**|  |
 **partner_deliverable_line_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersDeliverablesLinesGet**
> \Ageras\Api\PartnerDeliverableLineResource partnersDeliverablesLinesGet($partner_deliverable_id,  $partner_deliverable_line_id )

Get Partner Deliverable Item

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
$partner_deliverable_id = "partner_deliverable_id_example"; // string | 
$partner_deliverable_line_id = "partner_deliverable_line_id_example"; // string | 

try {
    $result = $api_instance->partnersDeliverablesLinesGet($partner_deliverable_id,  $partner_deliverable_line_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersDeliverablesLinesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_deliverable_id** | **string**|  |
 **partner_deliverable_line_id** | **string**|  |

### Return type

[**\Ageras\Api\PartnerDeliverableLineResource**](../Model/PartnerDeliverableLineResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersDeliverablesLinesGet2**
> \Ageras\Api\PartnerDeliverableLineResource partnersDeliverablesLinesGet2($partner_id,  $partner_deliverable_id,  $partner_deliverable_line_id )

Get Partner Deliverable Item

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
$partner_deliverable_id = "partner_deliverable_id_example"; // string | 
$partner_deliverable_line_id = "partner_deliverable_line_id_example"; // string | 

try {
    $result = $api_instance->partnersDeliverablesLinesGet2($partner_id,  $partner_deliverable_id,  $partner_deliverable_line_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersDeliverablesLinesGet2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_deliverable_id** | **string**|  |
 **partner_deliverable_line_id** | **string**|  |

### Return type

[**\Ageras\Api\PartnerDeliverableLineResource**](../Model/PartnerDeliverableLineResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersDeliverablesLinesIndex**
> \Ageras\Api\PartnerDeliverableLineResult partnersDeliverablesLinesIndex($partner_deliverable_id , $criteria)

List Partner Deliverable Items

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
$partner_deliverable_id = "partner_deliverable_id_example"; // string | 
$criteria = [
        'client_id' => "client_id_example"; // string | Client id for the clients to filter by
        'lead_id' => "lead_id_example"; // string | Lead id for the lead to filter by
        'partner_id' => "partner_id_example"; // string | Partner id of the partners to filter by.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersDeliverablesLinesIndex($partner_deliverable_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersDeliverablesLinesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_deliverable_id** | **string**|  |
 **client_id** | **string**| Client id for the clients to filter by | [optional]
 **lead_id** | **string**| Lead id for the lead to filter by | [optional]
 **partner_id** | **string**| Partner id of the partners to filter by. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\PartnerDeliverableLineResult**](../Model/PartnerDeliverableLineResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersDeliverablesLinesIndex2**
> \Ageras\Api\PartnerDeliverableLineResult partnersDeliverablesLinesIndex2($partner_id,  $partner_deliverable_id , $criteria)

List Partner Deliverable Items

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
$partner_deliverable_id = "partner_deliverable_id_example"; // string | 
$criteria = [
        'client_id' => "client_id_example"; // string | Client id for the clients to filter by
        'lead_id' => "lead_id_example"; // string | Lead id for the lead to filter by
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersDeliverablesLinesIndex2($partner_id,  $partner_deliverable_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersDeliverablesLinesIndex2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_deliverable_id** | **string**|  |
 **client_id** | **string**| Client id for the clients to filter by | [optional]
 **lead_id** | **string**| Lead id for the lead to filter by | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\PartnerDeliverableLineResult**](../Model/PartnerDeliverableLineResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersDeliverablesLinesUpdate**
> \Ageras\Api\PartnerDeliverableLineResource partnersDeliverablesLinesUpdate($partner_deliverable_id,  $partner_deliverable_line_id , $partner_deliverable_line_resource)

Update item for Partner Deliverable

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
$partner_deliverable_id = "partner_deliverable_id_example"; // string | 
$partner_deliverable_line_id = "partner_deliverable_line_id_example"; // string | 
$partner_deliverable_line_resource = new \Ageras\Api\PartnerDeliverableLineResource(); // \Ageras\Api\PartnerDeliverableLineResource | 

try {
    $result = $api_instance->partnersDeliverablesLinesUpdate($partner_deliverable_id,  $partner_deliverable_line_id , $partner_deliverable_line_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersDeliverablesLinesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_deliverable_id** | **string**|  |
 **partner_deliverable_line_id** | **string**|  |
 **partner_deliverable_line_resource** | [**\Ageras\Api\PartnerDeliverableLineResource**](../Model/\Ageras\Api\PartnerDeliverableLineResource.md)|  |

### Return type

[**\Ageras\Api\PartnerDeliverableLineResource**](../Model/PartnerDeliverableLineResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersDeliverablesLinesUpdate2**
> \Ageras\Api\PartnerDeliverableLineResource partnersDeliverablesLinesUpdate2($partner_id,  $partner_deliverable_id,  $partner_deliverable_line_id , $partner_deliverable_line_resource)

Update item for Partner Deliverable

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
$partner_deliverable_id = "partner_deliverable_id_example"; // string | 
$partner_deliverable_line_id = "partner_deliverable_line_id_example"; // string | 
$partner_deliverable_line_resource = new \Ageras\Api\PartnerDeliverableLineResource(); // \Ageras\Api\PartnerDeliverableLineResource | 

try {
    $result = $api_instance->partnersDeliverablesLinesUpdate2($partner_id,  $partner_deliverable_id,  $partner_deliverable_line_id , $partner_deliverable_line_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersDeliverablesLinesUpdate2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_deliverable_id** | **string**|  |
 **partner_deliverable_line_id** | **string**|  |
 **partner_deliverable_line_resource** | [**\Ageras\Api\PartnerDeliverableLineResource**](../Model/\Ageras\Api\PartnerDeliverableLineResource.md)|  |

### Return type

[**\Ageras\Api\PartnerDeliverableLineResource**](../Model/PartnerDeliverableLineResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersDeliverablesUpdate**
> \Ageras\Api\PartnerDeliverableResource partnersDeliverablesUpdate($partner_deliverable_id , $partner_deliverable_resource)

Update Partner Deliverable

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
$partner_deliverable_id = "partner_deliverable_id_example"; // string | 
$partner_deliverable_resource = new \Ageras\Api\PartnerDeliverableResource(); // \Ageras\Api\PartnerDeliverableResource | 

try {
    $result = $api_instance->partnersDeliverablesUpdate($partner_deliverable_id , $partner_deliverable_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersDeliverablesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_deliverable_id** | **string**|  |
 **partner_deliverable_resource** | [**\Ageras\Api\PartnerDeliverableResource**](../Model/\Ageras\Api\PartnerDeliverableResource.md)|  |

### Return type

[**\Ageras\Api\PartnerDeliverableResource**](../Model/PartnerDeliverableResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersDeliverablesUpdate2**
> \Ageras\Api\PartnerDeliverableResource partnersDeliverablesUpdate2($partner_id,  $partner_deliverable_id , $partner_deliverable_resource)

Update Partner Deliverable

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
$partner_deliverable_id = "partner_deliverable_id_example"; // string | 
$partner_deliverable_resource = new \Ageras\Api\PartnerDeliverableResource(); // \Ageras\Api\PartnerDeliverableResource | 

try {
    $result = $api_instance->partnersDeliverablesUpdate2($partner_id,  $partner_deliverable_id , $partner_deliverable_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersDeliverablesUpdate2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_deliverable_id** | **string**|  |
 **partner_deliverable_resource** | [**\Ageras\Api\PartnerDeliverableResource**](../Model/\Ageras\Api\PartnerDeliverableResource.md)|  |

### Return type

[**\Ageras\Api\PartnerDeliverableResource**](../Model/PartnerDeliverableResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersDiscountsCreate**
> \Ageras\Api\PartnerDiscountResource partnersDiscountsCreate($partner_id , $partner_discount_resource)

Discount for a partner.

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
$partner_discount_resource = new \Ageras\Api\PartnerDiscountResource(); // \Ageras\Api\PartnerDiscountResource | 

try {
    $result = $api_instance->partnersDiscountsCreate($partner_id , $partner_discount_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersDiscountsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_discount_resource** | [**\Ageras\Api\PartnerDiscountResource**](../Model/\Ageras\Api\PartnerDiscountResource.md)|  |

### Return type

[**\Ageras\Api\PartnerDiscountResource**](../Model/PartnerDiscountResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersDiscountsDelete**
> partnersDiscountsDelete($partner_id,  $partner_package_type_discount_id )

Delete a partner discount

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
$partner_package_type_discount_id = "partner_package_type_discount_id_example"; // string | 

try {
    $api_instance->partnersDiscountsDelete($partner_id,  $partner_package_type_discount_id );
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersDiscountsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_package_type_discount_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersDiscountsIndex**
> \Ageras\Api\PartnerDiscountResult partnersDiscountsIndex($partner_id , $criteria)

Get partner's discounts.

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
        'is_active' => "is_active_example"; // string | Only include active discounts.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersDiscountsIndex($partner_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersDiscountsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **is_active** | **string**| Only include active discounts. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\PartnerDiscountResult**](../Model/PartnerDiscountResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersFeesCreate**
> \Ageras\Api\PartnerFeeResource partnersFeesCreate($partner_id , $partner_fee_resource)

Create partner fee

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
$partner_fee_resource = new \Ageras\Api\PartnerFeeResource(); // \Ageras\Api\PartnerFeeResource | 

try {
    $result = $api_instance->partnersFeesCreate($partner_id , $partner_fee_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersFeesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_fee_resource** | [**\Ageras\Api\PartnerFeeResource**](../Model/\Ageras\Api\PartnerFeeResource.md)|  |

### Return type

[**\Ageras\Api\PartnerFeeResource**](../Model/PartnerFeeResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersFeesDelete**
> partnersFeesDelete($partner_id,  $id )

Delete a partner fee

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
$id = "id_example"; // string | 

try {
    $api_instance->partnersFeesDelete($partner_id,  $id );
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersFeesDelete: ', $e->getMessage(), PHP_EOL;
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

# **partnersFeesIndex**
> \Ageras\Api\PartnerFeeResult partnersFeesIndex($criteria)

Get all partner fees.

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
        'id' => 56; // int | 
        'partner_id' => 56; // int | Partner ID. @var int
        'effective_at' => "effective_at_example"; // string | effective from date.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersFeesIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersFeesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | [optional]
 **partner_id** | **int**| Partner ID. @var int | [optional]
 **effective_at** | **string**| effective from date. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\PartnerFeeResult**](../Model/PartnerFeeResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersGet**
> \Ageras\Api\PartnerResource partnersGet($partner_id )

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

[**\Ageras\Api\PartnerResource**](../Model/PartnerResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersIndex**
> \Ageras\Api\PartnerResult partnersIndex($criteria)

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
        'package_type' => "package_type_example"; // string | Partner subscription package type
        'segmented_for_lead_id' => 56; // int | Get partners segmented for this lead ID
        'badge_id' => "badge_id_example"; // string | 
        'digital_leads' => "digital_leads_example"; // string | 
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
 **package_type** | **string**| Partner subscription package type | [optional]
 **segmented_for_lead_id** | **int**| Get partners segmented for this lead ID | [optional]
 **badge_id** | **string**|  | [optional]
 **digital_leads** | **string**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\PartnerResult**](../Model/PartnerResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersIndustriesCreate**
> \Ageras\Api\PartnerIndustryResource partnersIndustriesCreate($partner_id , $partner_industry_resource)

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
$partner_industry_resource = new \Ageras\Api\PartnerIndustryResource(); // \Ageras\Api\PartnerIndustryResource | 

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
 **partner_industry_resource** | [**\Ageras\Api\PartnerIndustryResource**](../Model/\Ageras\Api\PartnerIndustryResource.md)|  |

### Return type

[**\Ageras\Api\PartnerIndustryResource**](../Model/PartnerIndustryResource.md)

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
> \Ageras\Api\PartnerIndustryResource partnersIndustriesGet($partner_id,  $industry_id )

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

[**\Ageras\Api\PartnerIndustryResource**](../Model/PartnerIndustryResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersIndustriesIndex**
> \Ageras\Api\PartnerIndustryResult partnersIndustriesIndex($partner_id , $criteria)

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

[**\Ageras\Api\PartnerIndustryResult**](../Model/PartnerIndustryResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersLeadtypesCreate**
> \Ageras\Api\PartnerTypesResource partnersLeadtypesCreate($partner_id , $lead_type_resource)

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
$lead_type_resource = new \Ageras\Api\LeadTypeResource(); // \Ageras\Api\LeadTypeResource | 

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
 **lead_type_resource** | [**\Ageras\Api\LeadTypeResource**](../Model/\Ageras\Api\LeadTypeResource.md)|  |

### Return type

[**\Ageras\Api\PartnerTypesResource**](../Model/PartnerTypesResource.md)

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
> \Ageras\Api\PartnerTypesResource partnersLeadtypesGet($lead_type_id )

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

[**\Ageras\Api\PartnerTypesResource**](../Model/PartnerTypesResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersLeadtypesGet2**
> \Ageras\Api\PartnerTypesResource partnersLeadtypesGet2($partner_id,  $lead_type_id )

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

[**\Ageras\Api\PartnerTypesResource**](../Model/PartnerTypesResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersLeadtypesIndex**
> \Ageras\Api\PartnerTypesResult partnersLeadtypesIndex($criteria)

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

[**\Ageras\Api\PartnerTypesResult**](../Model/PartnerTypesResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersLeadtypesIndex2**
> \Ageras\Api\PartnerTypesResult partnersLeadtypesIndex2($partner_id , $criteria)

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

[**\Ageras\Api\PartnerTypesResult**](../Model/PartnerTypesResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersNotesCreate**
> \Ageras\Api\PartnerNoteResource partnersNotesCreate($partner_note_resource)

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
$partner_note_resource = new \Ageras\Api\PartnerNoteResource(); // \Ageras\Api\PartnerNoteResource | 

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
 **partner_note_resource** | [**\Ageras\Api\PartnerNoteResource**](../Model/\Ageras\Api\PartnerNoteResource.md)|  |

### Return type

[**\Ageras\Api\PartnerNoteResource**](../Model/PartnerNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersNotesCreate2**
> \Ageras\Api\PartnerNoteResource partnersNotesCreate2($partner_id , $partner_note_resource)

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
$partner_note_resource = new \Ageras\Api\PartnerNoteResource(); // \Ageras\Api\PartnerNoteResource | 

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
 **partner_note_resource** | [**\Ageras\Api\PartnerNoteResource**](../Model/\Ageras\Api\PartnerNoteResource.md)|  |

### Return type

[**\Ageras\Api\PartnerNoteResource**](../Model/PartnerNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersNotesGet**
> \Ageras\Api\PartnerNoteResource partnersNotesGet($partner_id,  $partner_note_id )

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

[**\Ageras\Api\PartnerNoteResource**](../Model/PartnerNoteResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersNotesIndex**
> \Ageras\Api\PartnerNoteResult partnersNotesIndex($criteria)

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

[**\Ageras\Api\PartnerNoteResult**](../Model/PartnerNoteResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersNotesIndex2**
> \Ageras\Api\PartnerNoteResult partnersNotesIndex2($partner_id , $criteria)

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

[**\Ageras\Api\PartnerNoteResult**](../Model/PartnerNoteResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersRevenuerangesCreate**
> \Ageras\Api\PartnerRevenueRangeResource partnersRevenuerangesCreate($partner_id , $partner_revenue_range_resource)

Create a revenue range.

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
$partner_revenue_range_resource = new \Ageras\Api\PartnerRevenueRangeResource(); // \Ageras\Api\PartnerRevenueRangeResource | 

try {
    $result = $api_instance->partnersRevenuerangesCreate($partner_id , $partner_revenue_range_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersRevenuerangesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_revenue_range_resource** | [**\Ageras\Api\PartnerRevenueRangeResource**](../Model/\Ageras\Api\PartnerRevenueRangeResource.md)|  |

### Return type

[**\Ageras\Api\PartnerRevenueRangeResource**](../Model/PartnerRevenueRangeResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersSectorsIndex**
> \Ageras\Api\SectorResult partnersSectorsIndex($partner_id , $criteria)

Get partner sectors.

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
    $result = $api_instance->partnersSectorsIndex($partner_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersSectorsIndex: ', $e->getMessage(), PHP_EOL;
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

[**\Ageras\Api\SectorResult**](../Model/SectorResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersSectorsUpdate**
> \Ageras\Api\PartnerSectorsResource partnersSectorsUpdate($partner_id , $partner_sectors_resource)

Update partner sectors.

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
$partner_sectors_resource = new \Ageras\Api\PartnerSectorsResource(); // \Ageras\Api\PartnerSectorsResource | 

try {
    $result = $api_instance->partnersSectorsUpdate($partner_id , $partner_sectors_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersSectorsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_sectors_resource** | [**\Ageras\Api\PartnerSectorsResource**](../Model/\Ageras\Api\PartnerSectorsResource.md)|  |

### Return type

[**\Ageras\Api\PartnerSectorsResource**](../Model/PartnerSectorsResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersSubscriptionsActionsCreate**
> \Ageras\Api\PartnerSubscriptionActionResource partnersSubscriptionsActionsCreate($partner_id,  $subscription_id , $partner_subscription_action_resource)

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
$partner_subscription_action_resource = new \Ageras\Api\PartnerSubscriptionActionResource(); // \Ageras\Api\PartnerSubscriptionActionResource | 

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
 **partner_subscription_action_resource** | [**\Ageras\Api\PartnerSubscriptionActionResource**](../Model/\Ageras\Api\PartnerSubscriptionActionResource.md)|  |

### Return type

[**\Ageras\Api\PartnerSubscriptionActionResource**](../Model/PartnerSubscriptionActionResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersSubscriptionsCreate**
> \Ageras\Api\PartnerSubscriptionResource partnersSubscriptionsCreate($partner_id , $partner_subscription_resource)

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
$partner_subscription_resource = new \Ageras\Api\PartnerSubscriptionResource(); // \Ageras\Api\PartnerSubscriptionResource | 

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
 **partner_subscription_resource** | [**\Ageras\Api\PartnerSubscriptionResource**](../Model/\Ageras\Api\PartnerSubscriptionResource.md)|  |

### Return type

[**\Ageras\Api\PartnerSubscriptionResource**](../Model/PartnerSubscriptionResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersSubscriptionsIndex**
> \Ageras\Api\PartnerSubscriptionResult partnersSubscriptionsIndex($partner_id , $criteria)

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
        'is_active' => "is_active_example"; // string | Only include active subscriptions.
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
 **is_active** | **string**| Only include active subscriptions. | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\PartnerSubscriptionResult**](../Model/PartnerSubscriptionResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersSubscriptionsPricesCreate**
> \Ageras\Api\PartnerSubscriptionPriceResource partnersSubscriptionsPricesCreate($partner_id,  $subscription_id , $partner_subscription_price_resource)

Create a new subscription price effective at a specific date

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
$partner_subscription_price_resource = new \Ageras\Api\PartnerSubscriptionPriceResource(); // \Ageras\Api\PartnerSubscriptionPriceResource | 

try {
    $result = $api_instance->partnersSubscriptionsPricesCreate($partner_id,  $subscription_id , $partner_subscription_price_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersSubscriptionsPricesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **subscription_id** | **string**|  |
 **partner_subscription_price_resource** | [**\Ageras\Api\PartnerSubscriptionPriceResource**](../Model/\Ageras\Api\PartnerSubscriptionPriceResource.md)|  |

### Return type

[**\Ageras\Api\PartnerSubscriptionPriceResource**](../Model/PartnerSubscriptionPriceResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersSubscriptionsPricesDelete**
> partnersSubscriptionsPricesDelete($partner_id,  $subscription_id,  $subscription_price_id )

Delete a future subscription price

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
$subscription_price_id = "subscription_price_id_example"; // string | 

try {
    $api_instance->partnersSubscriptionsPricesDelete($partner_id,  $subscription_id,  $subscription_price_id );
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersSubscriptionsPricesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **subscription_id** | **string**|  |
 **subscription_price_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersSubscriptionsPricesIndex**
> \Ageras\Api\PartnerSubscriptionPriceResult partnersSubscriptionsPricesIndex($partner_id,  $subscription_id , $criteria)

List the subscription's prices.

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
$criteria = [
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersSubscriptionsPricesIndex($partner_id,  $subscription_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersSubscriptionsPricesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **subscription_id** | **string**|  |
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\PartnerSubscriptionPriceResult**](../Model/PartnerSubscriptionPriceResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersSubscriptionsUpdate**
> \Ageras\Api\PartnerSubscriptionResource partnersSubscriptionsUpdate($partner_id , $partner_subscription_resource)

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
$partner_subscription_resource = new \Ageras\Api\PartnerSubscriptionResource(); // \Ageras\Api\PartnerSubscriptionResource | 

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
 **partner_subscription_resource** | [**\Ageras\Api\PartnerSubscriptionResource**](../Model/\Ageras\Api\PartnerSubscriptionResource.md)|  |

### Return type

[**\Ageras\Api\PartnerSubscriptionResource**](../Model/PartnerSubscriptionResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersSuggestIndex**
> \Ageras\Api\PartnerSuggestResult partnersSuggestIndex($criteria)

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

[**\Ageras\Api\PartnerSuggestResult**](../Model/PartnerSuggestResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersTitlesIndex**
> \Ageras\Api\PartnerTitleResult partnersTitlesIndex($criteria)

Get all partner titles.

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
        'id' => 56; // int | 
        'identifier' => "identifier_example"; // string | 
        'industry_id' => 56; // int | 
        'industry_identifier' => "industry_identifier_example"; // string | 
        'geo_code' => "geo_code_example"; // string | 
        'sort' => "sort_example"; // string | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersTitlesIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersTitlesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | [optional]
 **identifier** | **string**|  | [optional]
 **industry_id** | **int**|  | [optional]
 **industry_identifier** | **string**|  | [optional]
 **geo_code** | **string**|  | [optional]
 **sort** | **string**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\PartnerTitleResult**](../Model/PartnerTitleResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersTransactionsIndex**
> \Ageras\Api\PartnerCouponTransactionResult partnersTransactionsIndex($partner_id , $criteria)

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

[**\Ageras\Api\PartnerCouponTransactionResult**](../Model/PartnerCouponTransactionResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUpdate**
> \Ageras\Api\PartnerResource partnersUpdate($partner_id , $partner_resource)

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
$partner_resource = new \Ageras\Api\PartnerResource(); // \Ageras\Api\PartnerResource | 

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
 **partner_resource** | [**\Ageras\Api\PartnerResource**](../Model/\Ageras\Api\PartnerResource.md)|  |

### Return type

[**\Ageras\Api\PartnerResource**](../Model/PartnerResource.md)

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
> \Ageras\Api\PartnerContentResource partnersUsersContentsGet($partner_user_id,  $content_key )

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

[**\Ageras\Api\PartnerContentResource**](../Model/PartnerContentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersContentsGet2**
> \Ageras\Api\PartnerContentResource partnersUsersContentsGet2($partner_id,  $partner_user_id,  $content_key )

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

[**\Ageras\Api\PartnerContentResource**](../Model/PartnerContentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersContentsUpdate**
> \Ageras\Api\PartnerContentResource partnersUsersContentsUpdate($partner_user_id,  $content_key , $partner_content_resource)

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
$partner_content_resource = new \Ageras\Api\PartnerContentResource(); // \Ageras\Api\PartnerContentResource | 

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
 **partner_content_resource** | [**\Ageras\Api\PartnerContentResource**](../Model/\Ageras\Api\PartnerContentResource.md)|  |

### Return type

[**\Ageras\Api\PartnerContentResource**](../Model/PartnerContentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersContentsUpdate2**
> \Ageras\Api\PartnerContentResource partnersUsersContentsUpdate2($partner_id,  $partner_user_id,  $content_key , $partner_content_resource)

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
$partner_content_resource = new \Ageras\Api\PartnerContentResource(); // \Ageras\Api\PartnerContentResource | 

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
 **partner_content_resource** | [**\Ageras\Api\PartnerContentResource**](../Model/\Ageras\Api\PartnerContentResource.md)|  |

### Return type

[**\Ageras\Api\PartnerContentResource**](../Model/PartnerContentResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersCreate**
> \Ageras\Api\PartnerUserResource partnersUsersCreate($partner_user_resource)

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
$partner_user_resource = new \Ageras\Api\PartnerUserResource(); // \Ageras\Api\PartnerUserResource | 

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
 **partner_user_resource** | [**\Ageras\Api\PartnerUserResource**](../Model/\Ageras\Api\PartnerUserResource.md)|  |

### Return type

[**\Ageras\Api\PartnerUserResource**](../Model/PartnerUserResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersCreate2**
> \Ageras\Api\PartnerUserResource partnersUsersCreate2($partner_id , $partner_user_resource)

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
$partner_user_resource = new \Ageras\Api\PartnerUserResource(); // \Ageras\Api\PartnerUserResource | 

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
 **partner_user_resource** | [**\Ageras\Api\PartnerUserResource**](../Model/\Ageras\Api\PartnerUserResource.md)|  |

### Return type

[**\Ageras\Api\PartnerUserResource**](../Model/PartnerUserResource.md)

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
> \Ageras\Api\PartnerUserResource partnersUsersGet($partner_user_id )

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

[**\Ageras\Api\PartnerUserResource**](../Model/PartnerUserResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersGet2**
> \Ageras\Api\PartnerUserResource partnersUsersGet2($partner_id,  $partner_user_id )

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

[**\Ageras\Api\PartnerUserResource**](../Model/PartnerUserResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersIndex**
> \Ageras\Api\PartnerUserResult partnersUsersIndex($criteria)

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

[**\Ageras\Api\PartnerUserResult**](../Model/PartnerUserResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersIndex2**
> \Ageras\Api\PartnerUserResult partnersUsersIndex2($partner_id , $criteria)

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

[**\Ageras\Api\PartnerUserResult**](../Model/PartnerUserResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersUpdate**
> \Ageras\Api\PartnerUserResource partnersUsersUpdate($partner_user_id , $partner_user_resource)

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
$partner_user_resource = new \Ageras\Api\PartnerUserResource(); // \Ageras\Api\PartnerUserResource | 

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
 **partner_user_resource** | [**\Ageras\Api\PartnerUserResource**](../Model/\Ageras\Api\PartnerUserResource.md)|  |

### Return type

[**\Ageras\Api\PartnerUserResource**](../Model/PartnerUserResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersUsersUpdate2**
> \Ageras\Api\PartnerUserResource partnersUsersUpdate2($partner_id,  $partner_user_id , $partner_user_resource)

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
$partner_user_resource = new \Ageras\Api\PartnerUserResource(); // \Ageras\Api\PartnerUserResource | 

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
 **partner_user_resource** | [**\Ageras\Api\PartnerUserResource**](../Model/\Ageras\Api\PartnerUserResource.md)|  |

### Return type

[**\Ageras\Api\PartnerUserResource**](../Model/PartnerUserResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersVerificationsIndex**
> \Ageras\Api\PartnerVerificationResult partnersVerificationsIndex($criteria)

Get Partner verifications.

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
        'partner_id' => "partner_id_example"; // string | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->partnersVerificationsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersVerificationsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\PartnerVerificationResult**](../Model/PartnerVerificationResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersVerificationsIndex2**
> \Ageras\Api\PartnerVerificationResult partnersVerificationsIndex2($partner_id , $criteria)

Get Partner verifications.

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
    $result = $api_instance->partnersVerificationsIndex2($partner_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersVerificationsIndex2: ', $e->getMessage(), PHP_EOL;
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

[**\Ageras\Api\PartnerVerificationResult**](../Model/PartnerVerificationResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersVerificationsUpdate**
> \Ageras\Api\PartnerVerificationResource partnersVerificationsUpdate($partner_id , $partner_verification_resource)

Update Partner verification data.

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
$partner_verification_resource = new \Ageras\Api\PartnerVerificationResource(); // \Ageras\Api\PartnerVerificationResource | 

try {
    $result = $api_instance->partnersVerificationsUpdate($partner_id , $partner_verification_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersVerificationsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**|  |
 **partner_verification_resource** | [**\Ageras\Api\PartnerVerificationResource**](../Model/\Ageras\Api\PartnerVerificationResource.md)|  |

### Return type

[**\Ageras\Api\PartnerVerificationResource**](../Model/PartnerVerificationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

