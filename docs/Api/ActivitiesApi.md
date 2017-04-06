# Ageras\Api\ActivitiesApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activitiesIndex**](ActivitiesApi.md#activitiesIndex) | **GET** /activities | List Activities.


# **activitiesIndex**
> \Ageras\Api\ActivityResult activitiesIndex($activity_id, $partner_id, $lead_id, $client_id, $employee_id, $partner_user_id, $type, $limit, $page, $query)

List Activities.

List Activities.

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

$api_instance = new Ageras\Api\Api\ActivitiesApi();
$activity_id = "activity_id_example"; // string | 
$partner_id = "partner_id_example"; // string | 
$lead_id = "lead_id_example"; // string | 
$client_id = "client_id_example"; // string | 
$employee_id = "employee_id_example"; // string | 
$partner_user_id = "partner_user_id_example"; // string | 
$type = "type_example"; // string | 
$limit = 56; // int | The number of resources to be returned.
$page = 56; // int | The page position in the result.
$query = "query_example"; // string | The search wildcard.

try {
    $result = $api_instance->activitiesIndex($activity_id, $partner_id, $lead_id, $client_id, $employee_id, $partner_user_id, $type, $limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->activitiesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **string**|  | [optional]
 **partner_id** | **string**|  | [optional]
 **lead_id** | **string**|  | [optional]
 **client_id** | **string**|  | [optional]
 **employee_id** | **string**|  | [optional]
 **partner_user_id** | **string**|  | [optional]
 **type** | **string**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\ActivityResult**](../Model/ActivityResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

