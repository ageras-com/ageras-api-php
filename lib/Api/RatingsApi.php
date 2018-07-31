<?php
/**
 * RatingsApi
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

namespace Ageras\Api\Api;

use \Ageras\Api\ApiClient;
use \Ageras\Api\ApiException;
use \Ageras\Api\Configuration;
use \Ageras\Api\ObjectSerializer;

/**
 * RatingsApi Class Doc Comment
 *
 * @category Class
 * @package  Ageras\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RatingsApi
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
     * @return RatingsApi
     */
    public function setApiClient(\Ageras\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation ratingsCreate
     *
     * Create a rating.
     *
     * @param \Ageras\Api\Model\RatingResource $rating_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\Model\RatingResource
     */
    public function ratingsCreate($rating_resource)
    {
        list($response) = $this->ratingsCreateWithHttpInfo($rating_resource);
        return $response;
    }

    /**
     * Operation ratingsCreateWithHttpInfo
     *
     * Create a rating.
     *
     * @param \Ageras\Api\Model\RatingResource $rating_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\Model\RatingResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function ratingsCreateWithHttpInfo($rating_resource)
    {
        // parse inputs
        $resourcePath = "/ratings";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($rating_resource)) {
            $_tempBody = $rating_resource;
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Ageras\Api\Model\RatingResource',
                '/ratings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\Model\RatingResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\Model\RatingResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation ratingsGet
     *
     * Return a rating from a rating ID.
     *
     * @param string $rating_id The id the Rating to return
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\Model\RatingResource
     */
    public function ratingsGet($rating_id )
    {
        list($response) = $this->ratingsGetWithHttpInfo($rating_id);
        return $response;
    }

    /**
     * Operation ratingsGetWithHttpInfo
     *
     * Return a rating from a rating ID.
     *
     * @param string $rating_id The id the Rating to return
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\Model\RatingResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function ratingsGetWithHttpInfo($rating_id )
    {
        // parse inputs
        $resourcePath = "/ratings/{rating_id}";
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
        if ($rating_id !== null) {
            $resourcePath = str_replace(
                "{" . "rating_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($rating_id),
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
                '\Ageras\Api\Model\RatingResource',
                '/ratings/{rating_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\Model\RatingResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\Model\RatingResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation ratingsIndex
     *
     * Search for Lead's by a given set of criteria.
     *
     * @param $criteria = [
     *    'partner_id' => string,
     *    'rating_id' => string,
     *    'sort' => string,
     *    'geo_code' => string,
     *    'stars' => string,
     *    'is_public' => bool,
     *    'geo_point' => string,
     *    'geo_distance' => int,
     *    'distinct' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\Model\RatingResult
     */
    public function ratingsIndex($criteria = [])
    {
        list($response) = $this->ratingsIndexWithHttpInfo($criteria);
        return $response;
    }

    /**
     * Operation ratingsIndexWithHttpInfo
     *
     * Search for Lead's by a given set of criteria.
     *
     * @param $criteria = [
     *    'partner_id' => string,
     *    'rating_id' => string,
     *    'sort' => string,
     *    'geo_code' => string,
     *    'stars' => string,
     *    'is_public' => bool,
     *    'geo_point' => string,
     *    'geo_distance' => int,
     *    'distinct' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\Model\RatingResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function ratingsIndexWithHttpInfo($criteria = [])
    {
        // parse inputs
        $resourcePath = "/ratings";
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
        if (isset($criteria['partner_id'])) {
            $queryParams['partner_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['partner_id']);
        }
        // query params
        if (isset($criteria['rating_id'])) {
            $queryParams['rating_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['rating_id']);
        }
        // query params
        if (isset($criteria['sort'])) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($criteria['sort']);
        }
        // query params
        if (isset($criteria['geo_code'])) {
            $queryParams['geo_code'] = $this->apiClient->getSerializer()->toQueryValue($criteria['geo_code']);
        }
        // query params
        if (isset($criteria['stars'])) {
            $queryParams['stars'] = $this->apiClient->getSerializer()->toQueryValue($criteria['stars']);
        }
        // query params
        if (isset($criteria['is_public'])) {
            $queryParams['is_public'] = $this->apiClient->getSerializer()->toQueryValue($criteria['is_public']);
        }
        // query params
        if (isset($criteria['geo_point'])) {
            $queryParams['geo_point'] = $this->apiClient->getSerializer()->toQueryValue($criteria['geo_point']);
        }
        // query params
        if (isset($criteria['geo_distance'])) {
            $queryParams['geo_distance'] = $this->apiClient->getSerializer()->toQueryValue($criteria['geo_distance']);
        }
        // query params
        if (isset($criteria['distinct'])) {
            $queryParams['distinct'] = $this->apiClient->getSerializer()->toQueryValue($criteria['distinct']);
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
                '\Ageras\Api\Model\RatingResult',
                '/ratings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\Model\RatingResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\Model\RatingResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation ratingsUpdate
     *
     * Update a rating.
     *
     * @param string $rating_id 
     * @param \Ageras\Api\Model\RatingResource $rating_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\Model\RatingResource
     */
    public function ratingsUpdate($rating_id , $rating_resource)
    {
        list($response) = $this->ratingsUpdateWithHttpInfo($rating_id, $rating_resource);
        return $response;
    }

    /**
     * Operation ratingsUpdateWithHttpInfo
     *
     * Update a rating.
     *
     * @param string $rating_id 
     * @param \Ageras\Api\Model\RatingResource $rating_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\Model\RatingResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function ratingsUpdateWithHttpInfo($rating_id , $rating_resource)
    {
        // parse inputs
        $resourcePath = "/ratings/{rating_id}";
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
        if ($rating_id !== null) {
            $resourcePath = str_replace(
                "{" . "rating_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($rating_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($rating_resource)) {
            $_tempBody = $rating_resource;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Ageras\Api\Model\RatingResource',
                '/ratings/{rating_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\Model\RatingResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\Model\RatingResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
