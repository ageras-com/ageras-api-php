# Ageras\Api\ContactarchivesApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contactarchivesActionsCreate**](ContactarchivesApi.md#contactarchivesActionsCreate) | **POST** /contactarchives/{contact_archive_id}/actions | 
[**contactarchivesIndex**](ContactarchivesApi.md#contactarchivesIndex) | **GET** /contactarchives | 


# **contactarchivesActionsCreate**
> \Ageras\Api\ContactArchiveResource contactarchivesActionsCreate($contact_archive_id , $contact_archive_action_resource)



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

$api_instance = new Ageras\Api\Api\ContactarchivesApi();
$contact_archive_id = "contact_archive_id_example"; // string | 
$contact_archive_action_resource = new \Ageras\Api\ContactArchiveActionResource(); // \Ageras\Api\ContactArchiveActionResource | 

try {
    $result = $api_instance->contactarchivesActionsCreate($contact_archive_id , $contact_archive_action_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactarchivesApi->contactarchivesActionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_archive_id** | **string**|  |
 **contact_archive_action_resource** | [**\Ageras\Api\ContactArchiveActionResource**](../Model/\Ageras\Api\ContactArchiveActionResource.md)|  |

### Return type

[**\Ageras\Api\ContactArchiveResource**](../Model/ContactArchiveResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactarchivesIndex**
> \Ageras\Api\ContactArchiveResult contactarchivesIndex($criteria)



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

$api_instance = new Ageras\Api\Api\ContactarchivesApi();
$criteria = [
        'receiver_partner_id' => 56; // int | Id of partner in correspondence.
        'receiver_lead_id' => 56; // int | Id of lead in correspondence
        'contact_archive_id' => 56; // int | Id of contact archive item
        'sort' => "sent_at"; // string | Sort by.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->contactarchivesIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactarchivesApi->contactarchivesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiver_partner_id** | **int**| Id of partner in correspondence. | [optional]
 **receiver_lead_id** | **int**| Id of lead in correspondence | [optional]
 **contact_archive_id** | **int**| Id of contact archive item | [optional]
 **sort** | **string**| Sort by. | [optional] [default to sent_at]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\ContactArchiveResult**](../Model/ContactArchiveResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

