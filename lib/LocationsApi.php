<?php
/**
 * LocationsApi
 * PHP version 5
 *
 * @category Class
 * @package  Ageras\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ageras.com API
 *
 * this is the Ageras API
 *
 * OpenAPI spec version: 2.0
 * Contact: cto@ageras.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ageras\Api;

use \Ageras\Api\ApiClient;
use \Ageras\Api\ApiException;
use \Ageras\Api\Configuration;
use \Ageras\Api\ObjectSerializer;

/**
 * LocationsApi Class Doc Comment
 *
 * @category Class
 * @package  Ageras\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LocationsApi
{
    /**
     * API Client
     *
     * @var \Ageras\Api\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Ageras\Api\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Ageras\Api\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Ageras\Api\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Ageras\Api\ApiClient $apiClient set the API client
     *
     * @return LocationsApi
     */
    public function setApiClient(\Ageras\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation locationsGet
     *
     * 
     *
     * @param string $location_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\LocationResource
     */
    public function locationsGet($location_id )
    {
        list($response) = $this->locationsGetWithHttpInfo($location_id);
        return $response;
    }

    /**
     * Operation locationsGetWithHttpInfo
     *
     * 
     *
     * @param string $location_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\LocationResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function locationsGetWithHttpInfo($location_id )
    {
        // parse inputs
        $resourcePath = "/locations/{location_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($location_id !== null) {
            $resourcePath = str_replace(
                "{" . "location_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($location_id),
                $resourcePath
            );
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('token');
        if (strlen($apiKey) !== 0) {
            $queryParams['token'] = $apiKey;
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Ageras\Api\LocationResource',
                '/locations/{location_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\LocationResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\LocationResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation locationsIndex
     *
     * 
     *
     * @param $criteria = [
     *    'location_id' => string,
     *    'geo_code' => string,
     *    'geo_point' => string,
     *    'slug' => string,
     *    'sort' => string,
     *    'is_primary' => bool,
     *    'min_partner_count' => int,
     *    'region_name' => string,
     *    'region_abbreviation' => string,
     *    'zip_code' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\LocationResult
     */
    public function locationsIndex($criteria = [])
    {
        list($response) = $this->locationsIndexWithHttpInfo($criteria);
        return $response;
    }

    /**
     * Operation locationsIndexWithHttpInfo
     *
     * 
     *
     * @param $criteria = [
     *    'location_id' => string,
     *    'geo_code' => string,
     *    'geo_point' => string,
     *    'slug' => string,
     *    'sort' => string,
     *    'is_primary' => bool,
     *    'min_partner_count' => int,
     *    'region_name' => string,
     *    'region_abbreviation' => string,
     *    'zip_code' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\LocationResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function locationsIndexWithHttpInfo($criteria = [])
    {
        // parse inputs
        $resourcePath = "/locations";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if (isset($criteria['location_id'])) {
            $queryParams['location_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['location_id']);
        }
        // query params
        if (isset($criteria['geo_code'])) {
            $queryParams['geo_code'] = $this->apiClient->getSerializer()->toQueryValue($criteria['geo_code']);
        }
        // query params
        if (isset($criteria['geo_point'])) {
            $queryParams['geo_point'] = $this->apiClient->getSerializer()->toQueryValue($criteria['geo_point']);
        }
        // query params
        if (isset($criteria['slug'])) {
            $queryParams['slug'] = $this->apiClient->getSerializer()->toQueryValue($criteria['slug']);
        }
        // query params
        if (isset($criteria['sort'])) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($criteria['sort']);
        }
        // query params
        if (isset($criteria['is_primary'])) {
            $queryParams['is_primary'] = $this->apiClient->getSerializer()->toQueryValue($criteria['is_primary']);
        }
        // query params
        if (isset($criteria['min_partner_count'])) {
            $queryParams['min_partner_count'] = $this->apiClient->getSerializer()->toQueryValue($criteria['min_partner_count']);
        }
        // query params
        if (isset($criteria['region_name'])) {
            $queryParams['region_name'] = $this->apiClient->getSerializer()->toQueryValue($criteria['region_name']);
        }
        // query params
        if (isset($criteria['region_abbreviation'])) {
            $queryParams['region_abbreviation'] = $this->apiClient->getSerializer()->toQueryValue($criteria['region_abbreviation']);
        }
        // query params
        if (isset($criteria['zip_code'])) {
            $queryParams['zip_code'] = $this->apiClient->getSerializer()->toQueryValue($criteria['zip_code']);
        }
        // query params
        if (isset($criteria['limit'])) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($criteria['limit']);
        }
        // query params
        if (isset($criteria['page'])) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($criteria['page']);
        }
        // query params
        if (isset($criteria['query'])) {
            $queryParams['query'] = $this->apiClient->getSerializer()->toQueryValue($criteria['query']);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('token');
        if (strlen($apiKey) !== 0) {
            $queryParams['token'] = $apiKey;
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Ageras\Api\LocationResult',
                '/locations'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\LocationResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\LocationResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation locationsSegmentationgeoregionsIndex
     *
     * 
     *
     * @param $criteria = [
     *    'geo_code' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\SegmentationGeoRegionResult
     */
    public function locationsSegmentationgeoregionsIndex($criteria = [])
    {
        list($response) = $this->locationsSegmentationgeoregionsIndexWithHttpInfo($criteria);
        return $response;
    }

    /**
     * Operation locationsSegmentationgeoregionsIndexWithHttpInfo
     *
     * 
     *
     * @param $criteria = [
     *    'geo_code' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\SegmentationGeoRegionResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function locationsSegmentationgeoregionsIndexWithHttpInfo($criteria = [])
    {
        // parse inputs
        $resourcePath = "/locations/segmentationgeoregions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if (isset($criteria['geo_code'])) {
            $queryParams['geo_code'] = $this->apiClient->getSerializer()->toQueryValue($criteria['geo_code']);
        }
        // query params
        if (isset($criteria['limit'])) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($criteria['limit']);
        }
        // query params
        if (isset($criteria['page'])) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($criteria['page']);
        }
        // query params
        if (isset($criteria['query'])) {
            $queryParams['query'] = $this->apiClient->getSerializer()->toQueryValue($criteria['query']);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('token');
        if (strlen($apiKey) !== 0) {
            $queryParams['token'] = $apiKey;
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Ageras\Api\SegmentationGeoRegionResult',
                '/locations/segmentationgeoregions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\SegmentationGeoRegionResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\SegmentationGeoRegionResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation locationsSegmentationgeoregionsSegmentationsubgeoregionsIndex
     *
     * 
     *
     * @param $criteria = [
     *    'segmentation_geo_region_id' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\SegmentationSubGeoRegionResult
     */
    public function locationsSegmentationgeoregionsSegmentationsubgeoregionsIndex($criteria = [])
    {
        list($response) = $this->locationsSegmentationgeoregionsSegmentationsubgeoregionsIndexWithHttpInfo($criteria);
        return $response;
    }

    /**
     * Operation locationsSegmentationgeoregionsSegmentationsubgeoregionsIndexWithHttpInfo
     *
     * 
     *
     * @param $criteria = [
     *    'segmentation_geo_region_id' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\SegmentationSubGeoRegionResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function locationsSegmentationgeoregionsSegmentationsubgeoregionsIndexWithHttpInfo($criteria = [])
    {
        // parse inputs
        $resourcePath = "/locations/segmentationgeoregions/segmentationsubgeoregions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if (isset($criteria['segmentation_geo_region_id'])) {
            $queryParams['segmentation_geo_region_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['segmentation_geo_region_id']);
        }
        // query params
        if (isset($criteria['limit'])) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($criteria['limit']);
        }
        // query params
        if (isset($criteria['page'])) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($criteria['page']);
        }
        // query params
        if (isset($criteria['query'])) {
            $queryParams['query'] = $this->apiClient->getSerializer()->toQueryValue($criteria['query']);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('token');
        if (strlen($apiKey) !== 0) {
            $queryParams['token'] = $apiKey;
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Ageras\Api\SegmentationSubGeoRegionResult',
                '/locations/segmentationgeoregions/segmentationsubgeoregions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\SegmentationSubGeoRegionResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\SegmentationSubGeoRegionResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
