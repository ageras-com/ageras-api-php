<?php
/**
 * OrdersApi
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
 * OrdersApi Class Doc Comment
 *
 * @category Class
 * @package  Ageras\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrdersApi
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
     * @return OrdersApi
     */
    public function setApiClient(\Ageras\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation ordersActionsCreate
     *
     * Invoke actions on orders
     *
     * @param string $order_id 
     * @param \Ageras\Api\OrderActionResource $order_action_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\OrderResource
     */
    public function ordersActionsCreate($order_id , $order_action_resource)
    {
        list($response) = $this->ordersActionsCreateWithHttpInfo($order_id, $order_action_resource);
        return $response;
    }

    /**
     * Operation ordersActionsCreateWithHttpInfo
     *
     * Invoke actions on orders
     *
     * @param string $order_id 
     * @param \Ageras\Api\OrderActionResource $order_action_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\OrderResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function ordersActionsCreateWithHttpInfo($order_id , $order_action_resource)
    {
        // parse inputs
        $resourcePath = "/orders/{order_id}/actions";
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
        if ($order_id !== null) {
            $resourcePath = str_replace(
                "{" . "order_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($order_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($order_action_resource)) {
            $_tempBody = $order_action_resource;
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
                '\Ageras\Api\OrderResource',
                '/orders/{order_id}/actions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\OrderResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\OrderResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation ordersIndex
     *
     * Invoke actions on orders
     *
     * @param $criteria = [
     *    'order_id' => string,
     *    'buyer_partner_id' => string,
     *    'buyer_client_id' => string,
     *    'geo_code' => string,
     *    'status' => string,
     *    'sort' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\OrderResult
     */
    public function ordersIndex($criteria = [])
    {
        list($response) = $this->ordersIndexWithHttpInfo($criteria);
        return $response;
    }

    /**
     * Operation ordersIndexWithHttpInfo
     *
     * Invoke actions on orders
     *
     * @param $criteria = [
     *    'order_id' => string,
     *    'buyer_partner_id' => string,
     *    'buyer_client_id' => string,
     *    'geo_code' => string,
     *    'status' => string,
     *    'sort' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\OrderResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function ordersIndexWithHttpInfo($criteria = [])
    {
        // parse inputs
        $resourcePath = "/orders";
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
        if (isset($criteria['order_id'])) {
            $queryParams['order_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['order_id']);
        }
        // query params
        if (isset($criteria['buyer_partner_id'])) {
            $queryParams['buyer_partner_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['buyer_partner_id']);
        }
        // query params
        if (isset($criteria['buyer_client_id'])) {
            $queryParams['buyer_client_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['buyer_client_id']);
        }
        // query params
        if (isset($criteria['geo_code'])) {
            $queryParams['geo_code'] = $this->apiClient->getSerializer()->toQueryValue($criteria['geo_code']);
        }
        // query params
        if (isset($criteria['status'])) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($criteria['status']);
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
                '\Ageras\Api\OrderResult',
                '/orders'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\OrderResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\OrderResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}