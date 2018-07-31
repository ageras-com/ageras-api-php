# Ageras\Api\DatafieldsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**datafieldsIndex**](DatafieldsApi.md#datafieldsIndex) | **GET** /datafields | List DataFields.


# **datafieldsIndex**
> \Ageras\Api\Model\DataFieldResult datafieldsIndex($criteria)

List DataFields.

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

$api_instance = new Ageras\Api\Api\DatafieldsApi();
$criteria = [
        'industry_id' => "industry_id_example"; // string | List data fields by industry_id
        'tag' => "tag_example"; // string | List data fields by tag
        'type' => "type_example"; // string | List data fields by type
        'is_active' => false; // bool | Filter by whether a data field is active
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->datafieldsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatafieldsApi->datafieldsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **industry_id** | **string**| List data fields by industry_id | [optional]
 **tag** | **string**| List data fields by tag | [optional]
 **type** | **string**| List data fields by type | [optional]
 **is_active** | **bool**| Filter by whether a data field is active | [optional] [default to false]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\Model\DataFieldResult**](../Model/DataFieldResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
