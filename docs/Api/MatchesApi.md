# Ageras\Api\MatchesApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**matchesIndex**](MatchesApi.md#matchesIndex) | **GET** /matches | 


# **matchesIndex**
> \Ageras\Api\MatchResult matchesIndex($criteria)



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

$api_instance = new Ageras\Api\Api\MatchesApi();
$criteria = [
        'lead_id' => "lead_id_example"; // string | Identifiers for the lead's
        'geo_code' => "geo_code_example"; // string | Geographic Location Code.
        'partner_id' => "partner_id_example"; // string | Partner Id
        'validator_id' => "validator_id_example"; // string | Validator Id
        'is_accepted' => false; // bool | Accepted
        'is_unaccepted' => false; // bool | Unaccepted
        'sort' => "accepted_at"; // string | Sort resource by.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->matchesIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatchesApi->matchesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**| Identifiers for the lead&#39;s | [optional]
 **geo_code** | **string**| Geographic Location Code. | [optional]
 **partner_id** | **string**| Partner Id | [optional]
 **validator_id** | **string**| Validator Id | [optional]
 **is_accepted** | **bool**| Accepted | [optional] [default to false]
 **is_unaccepted** | **bool**| Unaccepted | [optional] [default to false]
 **sort** | **string**| Sort resource by. | [optional] [default to accepted_at]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\MatchResult**](../Model/MatchResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

