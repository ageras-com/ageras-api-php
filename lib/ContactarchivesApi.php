<?php
/**
 * ContactarchivesApi
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
 * ContactarchivesApi Class Doc Comment
 *
 * @category Class
 * @package  Ageras\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactarchivesApi
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
     * @return ContactarchivesApi
     */
    public function setApiClient(\Ageras\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation contactarchivesActionsCreate
     *
     * 
     *
     * @param string $contact_archive_id 
     * @param \Ageras\Api\ContactArchiveActionResource $contact_archive_action_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\ContactArchiveResource
     */
    public function contactarchivesActionsCreate($contact_archive_id , $contact_archive_action_resource)
    {
        list($response) = $this->contactarchivesActionsCreateWithHttpInfo($contact_archive_id, $contact_archive_action_resource);
        return $response;
    }

    /**
     * Operation contactarchivesActionsCreateWithHttpInfo
     *
     * 
     *
     * @param string $contact_archive_id 
     * @param \Ageras\Api\ContactArchiveActionResource $contact_archive_action_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\ContactArchiveResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function contactarchivesActionsCreateWithHttpInfo($contact_archive_id , $contact_archive_action_resource)
    {
        // parse inputs
        $resourcePath = "/contactarchives/{contact_archive_id}/actions";
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
        if ($contact_archive_id !== null) {
            $resourcePath = str_replace(
                "{" . "contact_archive_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($contact_archive_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($contact_archive_action_resource)) {
            $_tempBody = $contact_archive_action_resource;
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
                '\Ageras\Api\ContactArchiveResource',
                '/contactarchives/{contact_archive_id}/actions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\ContactArchiveResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\ContactArchiveResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation contactarchivesIndex
     *
     * 
     *
     * @param $criteria = [
     *    'receiver_partner_id' => int,
     *    'receiver_lead_id' => int,
     *    'contact_archive_id' => int,
     *    'sort' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\ContactArchiveResult
     */
    public function contactarchivesIndex($criteria = [])
    {
        list($response) = $this->contactarchivesIndexWithHttpInfo($criteria);
        return $response;
    }

    /**
     * Operation contactarchivesIndexWithHttpInfo
     *
     * 
     *
     * @param $criteria = [
     *    'receiver_partner_id' => int,
     *    'receiver_lead_id' => int,
     *    'contact_archive_id' => int,
     *    'sort' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\ContactArchiveResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function contactarchivesIndexWithHttpInfo($criteria = [])
    {
        // parse inputs
        $resourcePath = "/contactarchives";
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
        if (isset($criteria['receiver_partner_id'])) {
            $queryParams['receiver_partner_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['receiver_partner_id']);
        }
        // query params
        if (isset($criteria['receiver_lead_id'])) {
            $queryParams['receiver_lead_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['receiver_lead_id']);
        }
        // query params
        if (isset($criteria['contact_archive_id'])) {
            $queryParams['contact_archive_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['contact_archive_id']);
        }
        // query params
        if (isset($criteria['sort'])) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($criteria['sort']);
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
                '\Ageras\Api\ContactArchiveResult',
                '/contactarchives'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\ContactArchiveResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\ContactArchiveResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
