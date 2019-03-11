# Ageras\Api\MatchengineApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**matchengineMatchreportsIndex**](MatchengineApi.md#matchengineMatchreportsIndex) | **GET** /matchengine/matchreports | List match reports.


# **matchengineMatchreportsIndex**
> \Ageras\Api\MatchReportResult matchengineMatchreportsIndex($criteria)

List match reports.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
Ageras\Api\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Ageras\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');
// Configure HTTP basic authorization: login
Ageras\Api\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Ageras\Api\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Ageras\Api\Api\MatchengineApi();
$criteria = [
        'lead_id' => 56; // int | 
        'partner_id' => 56; // int | 
        'partner_business_unit_id' => "partner_business_unit_id_example"; // string | 
        'certifications_is_matching' => false; // bool | 
        'client_type_is_matching' => false; // bool | 
        'digital_work_preference_is_matching' => false; // bool | 
        'geo_distance_is_matching' => false; // bool | 
        'geo_distance_is_determinable' => false; // bool | 
        'industries_is_matching' => false; // bool | 
        'languages_is_matching' => false; // bool | 
        'languages_is_determinable' => false; // bool | 
        'revenues_is_matching' => false; // bool | 
        'revenues_is_determinable' => false; // bool | 
        'quote_fee_types_is_matching' => false; // bool | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->matchengineMatchreportsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchengineApi->matchengineMatchreportsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**|  | [optional]
 **partner_id** | **int**|  | [optional]
 **partner_business_unit_id** | **string**|  | [optional]
 **certifications_is_matching** | **bool**|  | [optional] [default to false]
 **client_type_is_matching** | **bool**|  | [optional] [default to false]
 **digital_work_preference_is_matching** | **bool**|  | [optional] [default to false]
 **geo_distance_is_matching** | **bool**|  | [optional] [default to false]
 **geo_distance_is_determinable** | **bool**|  | [optional] [default to false]
 **industries_is_matching** | **bool**|  | [optional] [default to false]
 **languages_is_matching** | **bool**|  | [optional] [default to false]
 **languages_is_determinable** | **bool**|  | [optional] [default to false]
 **revenues_is_matching** | **bool**|  | [optional] [default to false]
 **revenues_is_determinable** | **bool**|  | [optional] [default to false]
 **quote_fee_types_is_matching** | **bool**|  | [optional] [default to false]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\MatchReportResult**](../Model/MatchReportResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

