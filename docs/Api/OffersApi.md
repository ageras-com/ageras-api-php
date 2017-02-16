# Ageras\Api\OffersApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**offersActionsCreate**](OffersApi.md#offersActionsCreate) | **POST** /offers/{offer_id}/actions | Perform an action on an offer.
[**offersGet**](OffersApi.md#offersGet) | **GET** /offers/{offer_id} | Get an offer by id.
[**offersIndex**](OffersApi.md#offersIndex) | **GET** /offers | Get all partner offer.


# **offersActionsCreate**
> \Ageras\Api\PartnerOfferResource offersActionsCreate($offer_id, $offer_action_resource)

Perform an action on an offer.

Perform an action on an offer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Ageras\Api\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Ageras\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');
// Configure HTTP basic authorization: login
Ageras\Api\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Ageras\Api\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Ageras\Api\Api\OffersApi();
$offer_id = "offer_id_example"; // string | 
$offer_action_resource = new \Ageras\Api\OfferActionResource(); // \Ageras\Api\OfferActionResource | 

try {
    $result = $api_instance->offersActionsCreate($offer_id, $offer_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**|  |
 **offer_action_resource** | [**\Ageras\Api\OfferActionResource**](../Model/\Ageras\Api\OfferActionResource.md)|  |

### Return type

[**\Ageras\Api\PartnerOfferResource**](../Model/PartnerOfferResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **offersGet**
> \Ageras\Api\PartnerOfferResource offersGet($offer_id)

Get an offer by id.

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

$api_instance = new Ageras\Api\Api\OffersApi();
$offer_id = "offer_id_example"; // string | 

try {
    $result = $api_instance->offersGet($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**|  |

### Return type

[**\Ageras\Api\PartnerOfferResource**](../Model/PartnerOfferResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **offersIndex**
> \Ageras\Api\PartnerOfferResult offersIndex($show_expired, $show_accepted, $partner_id, $sort, $action, $geo_code, $type, $limit, $page, $query)

Get all partner offer.

Get all partner offer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Ageras\Api\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Ageras\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');
// Configure HTTP basic authorization: login
Ageras\Api\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Ageras\Api\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Ageras\Api\Api\OffersApi();
$show_expired = false; // bool | Include expired partners in the result.
$show_accepted = false; // bool | Show accepted partner.
$partner_id = 56; // int | Partner id of Offers to filter by.
$sort = "sort_example"; // string | Order by price asc or desc.
$action = "action_example"; // string | Action to take.
$geo_code = "geo_code_example"; // string | Offer geo code.
$type = "partner"; // string | Type of Offer
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->offersIndex($show_expired, $show_accepted, $partner_id, $sort, $action, $geo_code, $type, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **show_expired** | **bool**| Include expired partners in the result. | [optional] [default to false]
 **show_accepted** | **bool**| Show accepted partner. | [optional] [default to false]
 **partner_id** | **int**| Partner id of Offers to filter by. | [optional]
 **sort** | **string**| Order by price asc or desc. | [optional]
 **action** | **string**| Action to take. | [optional]
 **geo_code** | **string**| Offer geo code. | [optional]
 **type** | **string**| Type of Offer | [optional] [default to partner]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\PartnerOfferResult**](../Model/PartnerOfferResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

