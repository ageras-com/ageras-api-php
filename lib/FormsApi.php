<?php
/**
 * FormsApi
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
 * FormsApi Class Doc Comment
 *
 * @category Class
 * @package  Ageras\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FormsApi
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
     * @return FormsApi
     */
    public function setApiClient(\Ageras\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation formsIndex
     *
     * 
     *
     * @param $criteria = [
     *    'industry_id' => int,
     *    'type_id' => int,
     *    'geo_code' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\FormResult
     */
    public function formsIndex($criteria = [])
    {
        list($response) = $this->formsIndexWithHttpInfo($criteria);
        return $response;
    }

    /**
     * Operation formsIndexWithHttpInfo
     *
     * 
     *
     * @param $criteria = [
     *    'industry_id' => int,
     *    'type_id' => int,
     *    'geo_code' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\FormResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function formsIndexWithHttpInfo($criteria = [])
    {
        // parse inputs
        $resourcePath = "/forms";
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
        if (isset($criteria['industry_id'])) {
            $queryParams['industry_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['industry_id']);
        }
        // query params
        if (isset($criteria['type_id'])) {
            $queryParams['type_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['type_id']);
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
                '\Ageras\Api\FormResult',
                '/forms'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\FormResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\FormResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation formsResponsesCreate
     *
     * 
     *
     * @param string $form_id 
     * @param \Ageras\Api\FormResponseResource $form_response_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\FormResponseResource
     */
    public function formsResponsesCreate($form_id , $form_response_resource)
    {
        list($response) = $this->formsResponsesCreateWithHttpInfo($form_id, $form_response_resource);
        return $response;
    }

    /**
     * Operation formsResponsesCreateWithHttpInfo
     *
     * 
     *
     * @param string $form_id 
     * @param \Ageras\Api\FormResponseResource $form_response_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\FormResponseResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function formsResponsesCreateWithHttpInfo($form_id , $form_response_resource)
    {
        // parse inputs
        $resourcePath = "/forms/{form_id}/responses";
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
        if ($form_id !== null) {
            $resourcePath = str_replace(
                "{" . "form_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($form_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($form_response_resource)) {
            $_tempBody = $form_response_resource;
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
                '\Ageras\Api\FormResponseResource',
                '/forms/{form_id}/responses'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\FormResponseResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\FormResponseResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
