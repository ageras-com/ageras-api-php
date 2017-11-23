<?php
/**
 * PaymentsApi
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
 * PaymentsApi Class Doc Comment
 *
 * @category Class
 * @package  Ageras\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentsApi
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
     * @return PaymentsApi
     */
    public function setApiClient(\Ageras\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation paymentsCardsCreate
     *
     * Create a payment card.
     *
     * @param \Ageras\Api\PaymentCardResource $payment_card_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\PaymentCardResource
     */
    public function paymentsCardsCreate($payment_card_resource)
    {
        list($response) = $this->paymentsCardsCreateWithHttpInfo($payment_card_resource);
        return $response;
    }

    /**
     * Operation paymentsCardsCreateWithHttpInfo
     *
     * Create a payment card.
     *
     * @param \Ageras\Api\PaymentCardResource $payment_card_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\PaymentCardResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentsCardsCreateWithHttpInfo($payment_card_resource)
    {
        // parse inputs
        $resourcePath = "/payments/cards";
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
        if (isset($payment_card_resource)) {
            $_tempBody = $payment_card_resource;
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
                '\Ageras\Api\PaymentCardResource',
                '/payments/cards'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\PaymentCardResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\PaymentCardResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation paymentsCardsDelete
     *
     * Delete a card for a given id.
     *
     * @param string $card_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return void
     */
    public function paymentsCardsDelete($card_id )
    {
        list($response) = $this->paymentsCardsDeleteWithHttpInfo($card_id);
        return $response;
    }

    /**
     * Operation paymentsCardsDeleteWithHttpInfo
     *
     * Delete a card for a given id.
     *
     * @param string $card_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentsCardsDeleteWithHttpInfo($card_id )
    {
        // parse inputs
        $resourcePath = "/payments/cards/{card_id}";
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
        if ($card_id !== null) {
            $resourcePath = str_replace(
                "{" . "card_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($card_id),
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
                '/payments/cards/{card_id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation paymentsCardsDelete2
     *
     * Delete a card for a given id.
     *
     * @param string $payment_id 
     * @param string $card_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return void
     */
    public function paymentsCardsDelete2($payment_id,  $card_id )
    {
        list($response) = $this->paymentsCardsDelete2WithHttpInfo($payment_id, $card_id);
        return $response;
    }

    /**
     * Operation paymentsCardsDelete2WithHttpInfo
     *
     * Delete a card for a given id.
     *
     * @param string $payment_id 
     * @param string $card_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentsCardsDelete2WithHttpInfo($payment_id,  $card_id )
    {
        // parse inputs
        $resourcePath = "/payments/{payment_id}/cards/{card_id}";
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
        if ($payment_id !== null) {
            $resourcePath = str_replace(
                "{" . "payment_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_id),
                $resourcePath
            );
        }
        // path params
        if ($card_id !== null) {
            $resourcePath = str_replace(
                "{" . "card_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($card_id),
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
                '/payments/{payment_id}/cards/{card_id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation paymentsCardsGet
     *
     * Get a Partner from a given partner_id.
     *
     * @param string $payment_card_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\PaymentCardResource
     */
    public function paymentsCardsGet($payment_card_id )
    {
        list($response) = $this->paymentsCardsGetWithHttpInfo($payment_card_id);
        return $response;
    }

    /**
     * Operation paymentsCardsGetWithHttpInfo
     *
     * Get a Partner from a given partner_id.
     *
     * @param string $payment_card_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\PaymentCardResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentsCardsGetWithHttpInfo($payment_card_id )
    {
        // parse inputs
        $resourcePath = "/payments/cards/{payment_card_id}";
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
        if ($payment_card_id !== null) {
            $resourcePath = str_replace(
                "{" . "payment_card_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_card_id),
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
                '\Ageras\Api\PaymentCardResource',
                '/payments/cards/{payment_card_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\PaymentCardResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\PaymentCardResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation paymentsCardsGet2
     *
     * Get a Partner from a given partner_id.
     *
     * @param string $payment_id 
     * @param string $payment_card_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\PaymentCardResource
     */
    public function paymentsCardsGet2($payment_id,  $payment_card_id )
    {
        list($response) = $this->paymentsCardsGet2WithHttpInfo($payment_id, $payment_card_id);
        return $response;
    }

    /**
     * Operation paymentsCardsGet2WithHttpInfo
     *
     * Get a Partner from a given partner_id.
     *
     * @param string $payment_id 
     * @param string $payment_card_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\PaymentCardResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentsCardsGet2WithHttpInfo($payment_id,  $payment_card_id )
    {
        // parse inputs
        $resourcePath = "/payments/{payment_id}/cards/{payment_card_id}";
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
        if ($payment_id !== null) {
            $resourcePath = str_replace(
                "{" . "payment_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_id),
                $resourcePath
            );
        }
        // path params
        if ($payment_card_id !== null) {
            $resourcePath = str_replace(
                "{" . "payment_card_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_card_id),
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
                '\Ageras\Api\PaymentCardResource',
                '/payments/{payment_id}/cards/{payment_card_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\PaymentCardResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\PaymentCardResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation paymentsCardsIndex
     *
     * List payment cards.
     *
     * @param $criteria = [
     *    'payment_card_id' => string,
     *    'partner_id' => string,
     *    'partner_user_id' => string,
     *    'client_id' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\PaymentCardResult
     */
    public function paymentsCardsIndex($criteria = [])
    {
        list($response) = $this->paymentsCardsIndexWithHttpInfo($criteria);
        return $response;
    }

    /**
     * Operation paymentsCardsIndexWithHttpInfo
     *
     * List payment cards.
     *
     * @param $criteria = [
     *    'payment_card_id' => string,
     *    'partner_id' => string,
     *    'partner_user_id' => string,
     *    'client_id' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\PaymentCardResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentsCardsIndexWithHttpInfo($criteria = [])
    {
        // parse inputs
        $resourcePath = "/payments/cards";
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
        if (isset($criteria['payment_card_id'])) {
            $queryParams['payment_card_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['payment_card_id']);
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
                '\Ageras\Api\PaymentCardResult',
                '/payments/cards'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\PaymentCardResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\PaymentCardResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
