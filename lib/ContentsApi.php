<?php
/**
 * ContentsApi
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
 * ContentsApi Class Doc Comment
 *
 * @category Class
 * @package  Ageras\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContentsApi
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
     * @return ContentsApi
     */
    public function setApiClient(\Ageras\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation contentsPagesAggregationsIndex
     *
     * Aggreate the Pages by the letters
     *
     * @param $criteria = [
     *    'page_id' => string,
     *    'page_type' => string,
     *    'page_type_id' => string,
     *    'letter' => string,
     *    'geo_code' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\AggregationResult
     */
    public function contentsPagesAggregationsIndex($criteria = [])
    {
        list($response) = $this->contentsPagesAggregationsIndexWithHttpInfo($criteria);
        return $response;
    }

    /**
     * Operation contentsPagesAggregationsIndexWithHttpInfo
     *
     * Aggreate the Pages by the letters
     *
     * @param $criteria = [
     *    'page_id' => string,
     *    'page_type' => string,
     *    'page_type_id' => string,
     *    'letter' => string,
     *    'geo_code' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\AggregationResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function contentsPagesAggregationsIndexWithHttpInfo($criteria = [])
    {
        // parse inputs
        $resourcePath = "/contents/pages/aggregations";
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
        if (isset($criteria['page_id'])) {
            $queryParams['page_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['page_id']);
        }
        // query params
        if (isset($criteria['page_type'])) {
            $queryParams['page_type'] = $this->apiClient->getSerializer()->toQueryValue($criteria['page_type']);
        }
        // query params
        if (isset($criteria['page_type_id'])) {
            $queryParams['page_type_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['page_type_id']);
        }
        // query params
        if (isset($criteria['letter'])) {
            $queryParams['letter'] = $this->apiClient->getSerializer()->toQueryValue($criteria['letter']);
        }
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
                '\Ageras\Api\AggregationResult',
                '/contents/pages/aggregations'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\AggregationResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\AggregationResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation contentsPagesAggregationsIndex2
     *
     * Aggreate the Pages by the letters
     *
     * @param string $content_id 
     * @param $criteria = [
     *    'page_id' => string,
     *    'page_type' => string,
     *    'page_type_id' => string,
     *    'letter' => string,
     *    'geo_code' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\AggregationResult
     */
    public function contentsPagesAggregationsIndex2($content_id , $criteria = [])
    {
        list($response) = $this->contentsPagesAggregationsIndex2WithHttpInfo($content_id, $criteria);
        return $response;
    }

    /**
     * Operation contentsPagesAggregationsIndex2WithHttpInfo
     *
     * Aggreate the Pages by the letters
     *
     * @param string $content_id 
     * @param $criteria = [
     *    'page_id' => string,
     *    'page_type' => string,
     *    'page_type_id' => string,
     *    'letter' => string,
     *    'geo_code' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\AggregationResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function contentsPagesAggregationsIndex2WithHttpInfo($content_id , $criteria = [])
    {
        // parse inputs
        $resourcePath = "/contents/{content_id}/pages/aggregations";
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
        if (isset($criteria['page_id'])) {
            $queryParams['page_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['page_id']);
        }
        // query params
        if (isset($criteria['page_type'])) {
            $queryParams['page_type'] = $this->apiClient->getSerializer()->toQueryValue($criteria['page_type']);
        }
        // query params
        if (isset($criteria['page_type_id'])) {
            $queryParams['page_type_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['page_type_id']);
        }
        // query params
        if (isset($criteria['letter'])) {
            $queryParams['letter'] = $this->apiClient->getSerializer()->toQueryValue($criteria['letter']);
        }
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
        // path params
        if ($content_id !== null) {
            $resourcePath = str_replace(
                "{" . "content_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($content_id),
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
                '\Ageras\Api\AggregationResult',
                '/contents/{content_id}/pages/aggregations'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\AggregationResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\AggregationResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation contentsPagesGet
     *
     * Return a Page from a given id
     *
     * @param string $content_page_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\ContentPageResource
     */
    public function contentsPagesGet($content_page_id )
    {
        list($response) = $this->contentsPagesGetWithHttpInfo($content_page_id);
        return $response;
    }

    /**
     * Operation contentsPagesGetWithHttpInfo
     *
     * Return a Page from a given id
     *
     * @param string $content_page_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\ContentPageResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function contentsPagesGetWithHttpInfo($content_page_id )
    {
        // parse inputs
        $resourcePath = "/contents/pages/{content_page_id}";
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
        if ($content_page_id !== null) {
            $resourcePath = str_replace(
                "{" . "content_page_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($content_page_id),
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
                '\Ageras\Api\ContentPageResource',
                '/contents/pages/{content_page_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\ContentPageResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\ContentPageResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation contentsPagesGet2
     *
     * Return a Page from a given id
     *
     * @param string $content_id 
     * @param string $content_page_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\ContentPageResource
     */
    public function contentsPagesGet2($content_id,  $content_page_id )
    {
        list($response) = $this->contentsPagesGet2WithHttpInfo($content_id, $content_page_id);
        return $response;
    }

    /**
     * Operation contentsPagesGet2WithHttpInfo
     *
     * Return a Page from a given id
     *
     * @param string $content_id 
     * @param string $content_page_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\ContentPageResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function contentsPagesGet2WithHttpInfo($content_id,  $content_page_id )
    {
        // parse inputs
        $resourcePath = "/contents/{content_id}/pages/{content_page_id}";
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
        if ($content_id !== null) {
            $resourcePath = str_replace(
                "{" . "content_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($content_id),
                $resourcePath
            );
        }
        // path params
        if ($content_page_id !== null) {
            $resourcePath = str_replace(
                "{" . "content_page_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($content_page_id),
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
                '\Ageras\Api\ContentPageResource',
                '/contents/{content_id}/pages/{content_page_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\ContentPageResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\ContentPageResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation contentsPagesIndex
     *
     * List Pages
     *
     * @param $criteria = [
     *    'page_id' => string,
     *    'page_type' => string,
     *    'page_type_id' => string,
     *    'letter' => string,
     *    'geo_code' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\ContentPageResult
     */
    public function contentsPagesIndex($criteria = [])
    {
        list($response) = $this->contentsPagesIndexWithHttpInfo($criteria);
        return $response;
    }

    /**
     * Operation contentsPagesIndexWithHttpInfo
     *
     * List Pages
     *
     * @param $criteria = [
     *    'page_id' => string,
     *    'page_type' => string,
     *    'page_type_id' => string,
     *    'letter' => string,
     *    'geo_code' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\ContentPageResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function contentsPagesIndexWithHttpInfo($criteria = [])
    {
        // parse inputs
        $resourcePath = "/contents/pages";
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
        if (isset($criteria['page_id'])) {
            $queryParams['page_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['page_id']);
        }
        // query params
        if (isset($criteria['page_type'])) {
            $queryParams['page_type'] = $this->apiClient->getSerializer()->toQueryValue($criteria['page_type']);
        }
        // query params
        if (isset($criteria['page_type_id'])) {
            $queryParams['page_type_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['page_type_id']);
        }
        // query params
        if (isset($criteria['letter'])) {
            $queryParams['letter'] = $this->apiClient->getSerializer()->toQueryValue($criteria['letter']);
        }
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
                '\Ageras\Api\ContentPageResult',
                '/contents/pages'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\ContentPageResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\ContentPageResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation contentsPagesTypesIndex
     *
     * List content page types.
     *
     * @param $criteria = [
     *    'page_type_id' => string,
     *    'geo_code' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\ContentPageTypeResult
     */
    public function contentsPagesTypesIndex($criteria = [])
    {
        list($response) = $this->contentsPagesTypesIndexWithHttpInfo($criteria);
        return $response;
    }

    /**
     * Operation contentsPagesTypesIndexWithHttpInfo
     *
     * List content page types.
     *
     * @param $criteria = [
     *    'page_type_id' => string,
     *    'geo_code' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\ContentPageTypeResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function contentsPagesTypesIndexWithHttpInfo($criteria = [])
    {
        // parse inputs
        $resourcePath = "/contents/pages/types";
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
        if (isset($criteria['page_type_id'])) {
            $queryParams['page_type_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['page_type_id']);
        }
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
                '\Ageras\Api\ContentPageTypeResult',
                '/contents/pages/types'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\ContentPageTypeResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\ContentPageTypeResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
