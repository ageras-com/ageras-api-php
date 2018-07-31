<?php
/**
 * TermsApi
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
 * TermsApi Class Doc Comment
 *
 * @category Class
 * @package  Ageras\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TermsApi
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
     * @return TermsApi
     */
    public function setApiClient(\Ageras\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation termsAcceptedIndex
     *
     * Get accepted terms.
     *
     * @param $criteria = [
     *    'acceptor_id' => int,
     *    'acceptor_type' => string,
     *    'terms_id' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\Model\TermsResult
     */
    public function termsAcceptedIndex($criteria = [])
    {
        list($response) = $this->termsAcceptedIndexWithHttpInfo($criteria);
        return $response;
    }

    /**
     * Operation termsAcceptedIndexWithHttpInfo
     *
     * Get accepted terms.
     *
     * @param $criteria = [
     *    'acceptor_id' => int,
     *    'acceptor_type' => string,
     *    'terms_id' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\Model\TermsResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function termsAcceptedIndexWithHttpInfo($criteria = [])
    {
        // parse inputs
        $resourcePath = "/terms/accepted";
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
        if (isset($criteria['acceptor_id'])) {
            $queryParams['acceptor_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['acceptor_id']);
        }
        // query params
        if (isset($criteria['acceptor_type'])) {
            $queryParams['acceptor_type'] = $this->apiClient->getSerializer()->toQueryValue($criteria['acceptor_type']);
        }
        // query params
        if (isset($criteria['terms_id'])) {
            $queryParams['terms_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['terms_id']);
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
                '\Ageras\Api\Model\TermsResult',
                '/terms/accepted'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\Model\TermsResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\Model\TermsResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation termsActionsCreate
     *
     * Term actions.
     *
     * @param string $terms_id 
     * @param \Ageras\Api\Model\TermsActionResource $terms_action_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\Model\TermsActionResource
     */
    public function termsActionsCreate($terms_id , $terms_action_resource)
    {
        list($response) = $this->termsActionsCreateWithHttpInfo($terms_id, $terms_action_resource);
        return $response;
    }

    /**
     * Operation termsActionsCreateWithHttpInfo
     *
     * Term actions.
     *
     * @param string $terms_id 
     * @param \Ageras\Api\Model\TermsActionResource $terms_action_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\Model\TermsActionResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function termsActionsCreateWithHttpInfo($terms_id , $terms_action_resource)
    {
        // parse inputs
        $resourcePath = "/terms/{terms_id}/actions";
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
        if ($terms_id !== null) {
            $resourcePath = str_replace(
                "{" . "terms_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($terms_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($terms_action_resource)) {
            $_tempBody = $terms_action_resource;
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
                '\Ageras\Api\Model\TermsActionResource',
                '/terms/{terms_id}/actions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\Model\TermsActionResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\Model\TermsActionResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation termsGet
     *
     * Retrieve a terms set from a given location_id.
     *
     * @param string $terms_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\Model\TermsResource
     */
    public function termsGet($terms_id )
    {
        list($response) = $this->termsGetWithHttpInfo($terms_id);
        return $response;
    }

    /**
     * Operation termsGetWithHttpInfo
     *
     * Retrieve a terms set from a given location_id.
     *
     * @param string $terms_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\Model\TermsResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function termsGetWithHttpInfo($terms_id )
    {
        // parse inputs
        $resourcePath = "/terms/{terms_id}";
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
        if ($terms_id !== null) {
            $resourcePath = str_replace(
                "{" . "terms_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($terms_id),
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
                '\Ageras\Api\Model\TermsResource',
                '/terms/{terms_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\Model\TermsResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\Model\TermsResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation termsIndex
     *
     * Search and find terms by different criterias.
     *
     * @param $criteria = [
     *    'geo_code' => string,
     *    'type' => string,
     *    'identifier' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\Model\TermsResult
     */
    public function termsIndex($criteria = [])
    {
        list($response) = $this->termsIndexWithHttpInfo($criteria);
        return $response;
    }

    /**
     * Operation termsIndexWithHttpInfo
     *
     * Search and find terms by different criterias.
     *
     * @param $criteria = [
     *    'geo_code' => string,
     *    'type' => string,
     *    'identifier' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\Model\TermsResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function termsIndexWithHttpInfo($criteria = [])
    {
        // parse inputs
        $resourcePath = "/terms";
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
        if (isset($criteria['type'])) {
            $queryParams['type'] = $this->apiClient->getSerializer()->toQueryValue($criteria['type']);
        }
        // query params
        if (isset($criteria['identifier'])) {
            $queryParams['identifier'] = $this->apiClient->getSerializer()->toQueryValue($criteria['identifier']);
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
                '\Ageras\Api\Model\TermsResult',
                '/terms'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\Model\TermsResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\Model\TermsResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}