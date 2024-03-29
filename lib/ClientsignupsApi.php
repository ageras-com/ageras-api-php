<?php
/**
 * ClientsignupsApi
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
 * ClientsignupsApi Class Doc Comment
 *
 * @category Class
 * @package  Ageras\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClientsignupsApi
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
     * @return ClientsignupsApi
     */
    public function setApiClient(\Ageras\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation clientsignupsActionsCreate
     *
     * 
     *
     * @param string $client_sign_up_id 
     * @param \Ageras\Api\ClientSignUpActionResource $client_sign_up_action_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\ClientSignUpResource
     */
    public function clientsignupsActionsCreate($client_sign_up_id , $client_sign_up_action_resource)
    {
        list($response) = $this->clientsignupsActionsCreateWithHttpInfo($client_sign_up_id, $client_sign_up_action_resource);
        return $response;
    }

    /**
     * Operation clientsignupsActionsCreateWithHttpInfo
     *
     * 
     *
     * @param string $client_sign_up_id 
     * @param \Ageras\Api\ClientSignUpActionResource $client_sign_up_action_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\ClientSignUpResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function clientsignupsActionsCreateWithHttpInfo($client_sign_up_id , $client_sign_up_action_resource)
    {
        // parse inputs
        $resourcePath = "/clientsignups/{client_sign_up_id}/actions";
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
        if ($client_sign_up_id !== null) {
            $resourcePath = str_replace(
                "{" . "client_sign_up_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($client_sign_up_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($client_sign_up_action_resource)) {
            $_tempBody = $client_sign_up_action_resource;
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
                '\Ageras\Api\ClientSignUpResource',
                '/clientsignups/{client_sign_up_id}/actions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\ClientSignUpResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\ClientSignUpResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation clientsignupsCreate
     *
     * 
     *
     * @param \Ageras\Api\ClientSignUpResource $client_sign_up_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\ClientSignUpResource
     */
    public function clientsignupsCreate($client_sign_up_resource)
    {
        list($response) = $this->clientsignupsCreateWithHttpInfo($client_sign_up_resource);
        return $response;
    }

    /**
     * Operation clientsignupsCreateWithHttpInfo
     *
     * 
     *
     * @param \Ageras\Api\ClientSignUpResource $client_sign_up_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\ClientSignUpResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function clientsignupsCreateWithHttpInfo($client_sign_up_resource)
    {
        // parse inputs
        $resourcePath = "/clientsignups";
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
        if (isset($client_sign_up_resource)) {
            $_tempBody = $client_sign_up_resource;
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
                '\Ageras\Api\ClientSignUpResource',
                '/clientsignups'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\ClientSignUpResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\ClientSignUpResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
