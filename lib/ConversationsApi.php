<?php
/**
 * ConversationsApi
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
 * ConversationsApi Class Doc Comment
 *
 * @category Class
 * @package  Ageras\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConversationsApi
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
     * @return ConversationsApi
     */
    public function setApiClient(\Ageras\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation conversationsCreate
     *
     * Create a new conversation.
     *
     * @param \Ageras\Api\ConversationResource $conversation_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\ConversationResource
     */
    public function conversationsCreate($conversation_resource)
    {
        list($response) = $this->conversationsCreateWithHttpInfo($conversation_resource);
        return $response;
    }

    /**
     * Operation conversationsCreateWithHttpInfo
     *
     * Create a new conversation.
     *
     * @param \Ageras\Api\ConversationResource $conversation_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\ConversationResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function conversationsCreateWithHttpInfo($conversation_resource)
    {
        // parse inputs
        $resourcePath = "/conversations";
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
        if (isset($conversation_resource)) {
            $_tempBody = $conversation_resource;
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
                '\Ageras\Api\ConversationResource',
                '/conversations'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\ConversationResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\ConversationResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation conversationsGet
     *
     * Get a conversations by conversation_id.
     *
     * @param string $conversation_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\ConversationResource
     */
    public function conversationsGet($conversation_id )
    {
        list($response) = $this->conversationsGetWithHttpInfo($conversation_id);
        return $response;
    }

    /**
     * Operation conversationsGetWithHttpInfo
     *
     * Get a conversations by conversation_id.
     *
     * @param string $conversation_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\ConversationResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function conversationsGetWithHttpInfo($conversation_id )
    {
        // parse inputs
        $resourcePath = "/conversations/{conversation_id}";
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
        if ($conversation_id !== null) {
            $resourcePath = str_replace(
                "{" . "conversation_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($conversation_id),
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
                '\Ageras\Api\ConversationResource',
                '/conversations/{conversation_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\ConversationResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\ConversationResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation conversationsIndex
     *
     * List conversations.
     *
     * @param $criteria = [
     *    'conversation_id' => string,
     *    'project_id' => string,
     *    'partner_id' => string,
     *    'partner_user_id' => string,
     *    'client_id' => string,
     *    'employee_id' => string,
     *    'lead_id' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\ConversationResult
     */
    public function conversationsIndex($criteria = [])
    {
        list($response) = $this->conversationsIndexWithHttpInfo($criteria);
        return $response;
    }

    /**
     * Operation conversationsIndexWithHttpInfo
     *
     * List conversations.
     *
     * @param $criteria = [
     *    'conversation_id' => string,
     *    'project_id' => string,
     *    'partner_id' => string,
     *    'partner_user_id' => string,
     *    'client_id' => string,
     *    'employee_id' => string,
     *    'lead_id' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\ConversationResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function conversationsIndexWithHttpInfo($criteria = [])
    {
        // parse inputs
        $resourcePath = "/conversations";
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
        if (isset($criteria['conversation_id'])) {
            $queryParams['conversation_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['conversation_id']);
        }
        // query params
        if (isset($criteria['project_id'])) {
            $queryParams['project_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['project_id']);
        }
        // query params
        if (isset($criteria['partner_id'])) {
            $queryParams['partner_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['partner_id']);
        }
        // query params
        if (isset($criteria['partner_user_id'])) {
            $queryParams['partner_user_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['partner_user_id']);
        }
        // query params
        if (isset($criteria['client_id'])) {
            $queryParams['client_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['client_id']);
        }
        // query params
        if (isset($criteria['employee_id'])) {
            $queryParams['employee_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['employee_id']);
        }
        // query params
        if (isset($criteria['lead_id'])) {
            $queryParams['lead_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['lead_id']);
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
                '\Ageras\Api\ConversationResult',
                '/conversations'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\ConversationResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\ConversationResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation conversationsMessagesCreate
     *
     * Create a new message
     *
     * @param \Ageras\Api\MessageResource $message_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\MessageResource
     */
    public function conversationsMessagesCreate($message_resource)
    {
        list($response) = $this->conversationsMessagesCreateWithHttpInfo($message_resource);
        return $response;
    }

    /**
     * Operation conversationsMessagesCreateWithHttpInfo
     *
     * Create a new message
     *
     * @param \Ageras\Api\MessageResource $message_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\MessageResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function conversationsMessagesCreateWithHttpInfo($message_resource)
    {
        // parse inputs
        $resourcePath = "/conversations/messages";
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
        if (isset($message_resource)) {
            $_tempBody = $message_resource;
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
                '\Ageras\Api\MessageResource',
                '/conversations/messages'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\MessageResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\MessageResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation conversationsMessagesCreate2
     *
     * Create a new message
     *
     * @param string $conversation_id 
     * @param \Ageras\Api\MessageResource $message_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\MessageResource
     */
    public function conversationsMessagesCreate2($conversation_id , $message_resource)
    {
        list($response) = $this->conversationsMessagesCreate2WithHttpInfo($conversation_id, $message_resource);
        return $response;
    }

    /**
     * Operation conversationsMessagesCreate2WithHttpInfo
     *
     * Create a new message
     *
     * @param string $conversation_id 
     * @param \Ageras\Api\MessageResource $message_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\MessageResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function conversationsMessagesCreate2WithHttpInfo($conversation_id , $message_resource)
    {
        // parse inputs
        $resourcePath = "/conversations/{conversation_id}/messages";
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
        if ($conversation_id !== null) {
            $resourcePath = str_replace(
                "{" . "conversation_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($conversation_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($message_resource)) {
            $_tempBody = $message_resource;
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
                '\Ageras\Api\MessageResource',
                '/conversations/{conversation_id}/messages'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\MessageResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\MessageResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
