<?php
/**
 * BusinessmodelsApi
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
 * BusinessmodelsApi Class Doc Comment
 *
 * @category Class
 * @package  Ageras\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BusinessmodelsApi
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
     * @return BusinessmodelsApi
     */
    public function setApiClient(\Ageras\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation businessModelsCreate
     *
     * 
     *
     * @param \Ageras\Api\BusinessModelResource $business_model_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\BusinessModelResource
     */
    public function businessModelsCreate($business_model_resource)
    {
        list($response) = $this->businessModelsCreateWithHttpInfo($business_model_resource);
        return $response;
    }

    /**
     * Operation businessModelsCreateWithHttpInfo
     *
     * 
     *
     * @param \Ageras\Api\BusinessModelResource $business_model_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\BusinessModelResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function businessModelsCreateWithHttpInfo($business_model_resource)
    {
        // parse inputs
        $resourcePath = "/business_models";
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
        if (isset($business_model_resource)) {
            $_tempBody = $business_model_resource;
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
                '\Ageras\Api\BusinessModelResource',
                '/business_models'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\BusinessModelResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\BusinessModelResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation businessModelsDelete
     *
     * 
     *
     * @param string $business_model_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return void
     */
    public function businessModelsDelete($business_model_id )
    {
        list($response) = $this->businessModelsDeleteWithHttpInfo($business_model_id);
        return $response;
    }

    /**
     * Operation businessModelsDeleteWithHttpInfo
     *
     * 
     *
     * @param string $business_model_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function businessModelsDeleteWithHttpInfo($business_model_id )
    {
        // parse inputs
        $resourcePath = "/business_models/{business_model_id}";
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
        if ($business_model_id !== null) {
            $resourcePath = str_replace(
                "{" . "business_model_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($business_model_id),
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/business_models/{business_model_id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation businessModelsGet
     *
     * 
     *
     * @param string $business_model_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\BusinessModelResource
     */
    public function businessModelsGet($business_model_id )
    {
        list($response) = $this->businessModelsGetWithHttpInfo($business_model_id);
        return $response;
    }

    /**
     * Operation businessModelsGetWithHttpInfo
     *
     * 
     *
     * @param string $business_model_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\BusinessModelResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function businessModelsGetWithHttpInfo($business_model_id )
    {
        // parse inputs
        $resourcePath = "/business_models/{business_model_id}";
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
        if ($business_model_id !== null) {
            $resourcePath = str_replace(
                "{" . "business_model_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($business_model_id),
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
                '\Ageras\Api\BusinessModelResource',
                '/business_models/{business_model_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\BusinessModelResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\BusinessModelResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation businessModelsIndex
     *
     * 
     *
     * @param $criteria = [
     *    'business_model_id' => string,
     *    'identifier' => string,
     *    'geo_code' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\BusinessModelResult
     */
    public function businessModelsIndex($criteria = [])
    {
        list($response) = $this->businessModelsIndexWithHttpInfo($criteria);
        return $response;
    }

    /**
     * Operation businessModelsIndexWithHttpInfo
     *
     * 
     *
     * @param $criteria = [
     *    'business_model_id' => string,
     *    'identifier' => string,
     *    'geo_code' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\BusinessModelResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function businessModelsIndexWithHttpInfo($criteria = [])
    {
        // parse inputs
        $resourcePath = "/business_models";
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
        if (isset($criteria['business_model_id'])) {
            $queryParams['business_model_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['business_model_id']);
        }
        // query params
        if (isset($criteria['identifier'])) {
            $queryParams['identifier'] = $this->apiClient->getSerializer()->toQueryValue($criteria['identifier']);
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
                '\Ageras\Api\BusinessModelResult',
                '/business_models'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\BusinessModelResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\BusinessModelResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation businessModelsUpdate
     *
     * 
     *
     * @param string $business_model_id 
     * @param \Ageras\Api\BusinessModelResource $business_model_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\BusinessModelResource
     */
    public function businessModelsUpdate($business_model_id , $business_model_resource)
    {
        list($response) = $this->businessModelsUpdateWithHttpInfo($business_model_id, $business_model_resource);
        return $response;
    }

    /**
     * Operation businessModelsUpdateWithHttpInfo
     *
     * 
     *
     * @param string $business_model_id 
     * @param \Ageras\Api\BusinessModelResource $business_model_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\BusinessModelResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function businessModelsUpdateWithHttpInfo($business_model_id , $business_model_resource)
    {
        // parse inputs
        $resourcePath = "/business_models/{business_model_id}";
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
        if ($business_model_id !== null) {
            $resourcePath = str_replace(
                "{" . "business_model_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($business_model_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($business_model_resource)) {
            $_tempBody = $business_model_resource;
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
                '\Ageras\Api\BusinessModelResource',
                '/business_models/{business_model_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\BusinessModelResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\BusinessModelResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
