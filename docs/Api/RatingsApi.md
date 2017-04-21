# Ageras\Api\RatingsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ratingsGet**](RatingsApi.md#ratingsGet) | **GET** /ratings/{rating_id} | Return a rating from a rating ID.
[**ratingsIndex**](RatingsApi.md#ratingsIndex) | **GET** /ratings | Search for Lead&#39;s by a given set of criteria.
[**ratingsUpdate**](RatingsApi.md#ratingsUpdate) | **PUT** /ratings/{rating_id} | Update a rating.


# **ratingsGet**
> \Ageras\Api\RatingResource ratingsGet($rating_id )

Return a rating from a rating ID.

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

$api_instance = new Ageras\Api\Api\RatingsApi();
$rating_id = "rating_id_example"; // string | The id the Rating to return

try {
    $result = $api_instance->ratingsGet($rating_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatingsApi->ratingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rating_id** | **string**| The id the Rating to return |

### Return type

[**\Ageras\Api\RatingResource**](../Model/RatingResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ratingsIndex**
> \Ageras\Api\RatingResult ratingsIndex($criteria)

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

$api_instance = new Ageras\Api\Api\RatingsApi();
$criteria = [
        'partner_id' => "partner_id_example"; // string | Partner id for the ratings to be filtered by.
        'rating_id' => "rating_id_example"; // string | Rating ids.
        'sort' => "created_at"; // string | Sort ratings by a given property.
        'geo_code' => "geo_code_example"; // string | Geographic Location Code.
        'stars' => "stars_example"; // string | List of stars to filter by
        'is_public' => false; // bool | Only show the public variables
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->ratingsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatingsApi->ratingsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_id** | **string**| Partner id for the ratings to be filtered by. | [optional]
 **rating_id** | **string**| Rating ids. | [optional]
 **sort** | **string**| Sort ratings by a given property. | [optional] [default to created_at]
 **geo_code** | **string**| Geographic Location Code. | [optional]
 **stars** | **string**| List of stars to filter by | [optional]
 **is_public** | **bool**| Only show the public variables | [optional] [default to false]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\RatingResult**](../Model/RatingResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ratingsUpdate**
> \Ageras\Api\RatingResource ratingsUpdate($rating_id , $rating_resource)

Update a rating.

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

$api_instance = new Ageras\Api\Api\RatingsApi();
$rating_id = "rating_id_example"; // string | 
$rating_resource = new \Ageras\Api\RatingResource(); // \Ageras\Api\RatingResource | 

try {
    $result = $api_instance->ratingsUpdate($rating_id , $rating_resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatingsApi->ratingsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rating_id** | **string**|  |
 **rating_resource** | [**\Ageras\Api\RatingResource**](../Model/\Ageras\Api\RatingResource.md)|  |

### Return type

[**\Ageras\Api\RatingResource**](../Model/RatingResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

