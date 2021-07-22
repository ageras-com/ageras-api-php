# Ageras\Api\AffiliatesApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**affiliatesCampaignsIndex**](AffiliatesApi.md#affiliatesCampaignsIndex) | **GET** /affiliates/{affiliate_id}/campaigns | 
[**affiliatesIndex**](AffiliatesApi.md#affiliatesIndex) | **GET** /affiliates | 


# **affiliatesCampaignsIndex**
> \Ageras\Api\AffiliateCampaignResult affiliatesCampaignsIndex($affiliate_id , $criteria)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Ageras\Api\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Ageras\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');
// Configure HTTP basic authorization: login
Ageras\Api\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Ageras\Api\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Ageras\Api\Api\AffiliatesApi();
$affiliate_id = "affiliate_id_example"; // string | 
$criteria = [
        'is_active' => false; // bool | Determinate if affiliate campaigns is active or not.
        'limit' => 56; // int | Limit of campaigns per page. @var int
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->affiliatesCampaignsIndex($affiliate_id , $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesCampaignsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliate_id** | **string**|  |
 **is_active** | **bool**| Determinate if affiliate campaigns is active or not. | [optional] [default to false]
 **limit** | **int**| Limit of campaigns per page. @var int | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\AffiliateCampaignResult**](../Model/AffiliateCampaignResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **affiliatesIndex**
> \Ageras\Api\AffiliateResult affiliatesIndex($criteria)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Ageras\Api\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Ageras\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');
// Configure HTTP basic authorization: login
Ageras\Api\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Ageras\Api\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Ageras\Api\Api\AffiliatesApi();
$criteria = [
        'geo_code' => "geo_code_example"; // string | Affiliate geo code origin.
        'is_active' => false; // bool | Determinate if affiliate is active or not.
        'has_active_campaigns' => false; // bool | Determinate if affiliate has active campaigns. @var boolean
        'limit' => 56; // int | Limit of affiliates per page. @var int
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->affiliatesIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geo_code** | **string**| Affiliate geo code origin. | [optional]
 **is_active** | **bool**| Determinate if affiliate is active or not. | [optional] [default to false]
 **has_active_campaigns** | **bool**| Determinate if affiliate has active campaigns. @var boolean | [optional] [default to false]
 **limit** | **int**| Limit of affiliates per page. @var int | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\AffiliateResult**](../Model/AffiliateResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

