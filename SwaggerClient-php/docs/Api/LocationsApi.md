# Ageras\Api\LocationsApi

All URIs are relative to *https://api.ageras.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**locationsGet**](LocationsApi.md#locationsGet) | **GET** /locations/{location_id} | Retrieve a location from a given location_id.
[**locationsIndex**](LocationsApi.md#locationsIndex) | **GET** /locations | Search and find locations by different criterias.
[**locationsSegmentationgeoregionsIndex**](LocationsApi.md#locationsSegmentationgeoregionsIndex) | **GET** /locations/segmentationgeoregions | List the segmentation geo regions
[**locationsSegmentationgeoregionsSegmentationsubgeoregionsIndex**](LocationsApi.md#locationsSegmentationgeoregionsSegmentationsubgeoregionsIndex) | **GET** /locations/segmentationgeoregions/segmentationsubgeoregions | List segmentation sub geo regions.


# **locationsGet**
> \Ageras\Api\LocationResource locationsGet($location_id )

Retrieve a location from a given location_id.

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

$api_instance = new Ageras\Api\Api\LocationsApi();
$location_id = "location_id_example"; // string | 

try {
    $result = $api_instance->locationsGet($location_id );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**|  |

### Return type

[**\Ageras\Api\LocationResource**](../Model/LocationResource.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationsIndex**
> \Ageras\Api\LocationResult locationsIndex($criteria)

Search and find locations by different criterias.

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

$api_instance = new Ageras\Api\Api\LocationsApi();
$criteria = [
        'location_id' => "location_id_example"; // string | 
        'geo_code' => "geo_code_example"; // string | Geographic Location Code.
        'geo_point' => "geo_point_example"; // string | Geo Location Point
        'slug' => "slug_example"; // string | Slug for url friendly strings.
        'sort' => "name"; // string | Sort types for Locations
        'is_primary' => false; // bool | Only Primary Locations
        'min_partner_count' => 56; // int | Filtering based on minimum partner count
        'region_name' => "region_name_example"; // string | Filtering based on region name
        'region_abbreviation' => "region_abbreviation_example"; // string | Filtering based on region abbreviation
        'zip_code' => "zip_code_example"; // string | Filtering based on zip code
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->locationsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**|  | [optional]
 **geo_code** | **string**| Geographic Location Code. | [optional]
 **geo_point** | **string**| Geo Location Point | [optional]
 **slug** | **string**| Slug for url friendly strings. | [optional]
 **sort** | **string**| Sort types for Locations | [optional] [default to name]
 **is_primary** | **bool**| Only Primary Locations | [optional] [default to false]
 **min_partner_count** | **int**| Filtering based on minimum partner count | [optional]
 **region_name** | **string**| Filtering based on region name | [optional]
 **region_abbreviation** | **string**| Filtering based on region abbreviation | [optional]
 **zip_code** | **string**| Filtering based on zip code | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\LocationResult**](../Model/LocationResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationsSegmentationgeoregionsIndex**
> \Ageras\Api\SegmentationGeoRegionResult locationsSegmentationgeoregionsIndex($criteria)

List the segmentation geo regions

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

$api_instance = new Ageras\Api\Api\LocationsApi();
$criteria = [
        'geo_code' => "geo_code_example"; // string | 
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->locationsSegmentationgeoregionsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsSegmentationgeoregionsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geo_code** | **string**|  | [optional]
 **limit** | **int**| The number of resources to be returned. | [optional]
 **page** | **int**| The page position in the result. | [optional]
 **query** | **string**| The search wildcard. | [optional]

### Return type

[**\Ageras\Api\SegmentationGeoRegionResult**](../Model/SegmentationGeoRegionResult.md)

### Authorization

[jwt](../../README.md#jwt), [login](../../README.md#login)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationsSegmentationgeoregionsSegmentationsubgeoregionsIndex**
> \Ageras\Api\SegmentationSubGeoRegionResult locationsSegmentationgeoregionsSegmentationsubgeoregionsIndex($criteria)

List segmentation sub geo regions.

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

$api_instance = new Ageras\Api\Api\LocationsApi();
$criteria = [
        'segmentation_geo_region_id' => "segmentation_geo_region_id_example"; // string | Filter by segmentation geo region ID.
        'limit' => 56; // int | The number of resources to be returned.
        'page' => 56; // int | The page position in the result.
        'query' => "query_example"; // string | The search wildcard.
    ];

try {
    $result = $api_instance->locationsSegmentationgeoregionsSegmentationsubgeoregionsIndex($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsSegmentationgeoregionsSegmentationsubgeoregionsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **segmentation_geo_region_id** | **string**| Filter by segmentation geo region ID. | [optional]
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

