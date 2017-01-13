<?php
/**
 * PaymentsApi
 * PHP version 5
 *
 * @category Class
 * @package  Ageras\Api
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
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
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ageras\Api;

use \Ageras\Api\Configuration;
use \Ageras\Api\ApiClient;
use \Ageras\Api\ApiException;
use \Ageras\Api\ObjectSerializer;

/**
 * PaymentsApi Class Doc Comment
 *
 * @category Class
 * @package  Ageras\Api
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
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
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.ageras.com/v2');
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
     * Operation paymentsCardsGet
     *
     * Get a Partner from a given partner_id.
     *
     * @param string $payment_card_id  (required)
     * @return \Ageras\Api\PaymentCardResource
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function paymentsCardsGet($payment_card_id)
    {
        list($response) = $this->paymentsCardsGetWithHttpInfo($payment_card_id);
        return $response;
    }

    /**
     * Operation paymentsCardsGetWithHttpInfo
     *
     * Get a Partner from a given partner_id.
     *
     * @param string $payment_card_id  (required)
     * @return Array of \Ageras\Api\PaymentCardResource, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function paymentsCardsGetWithHttpInfo($payment_card_id)
    {
        // verify the required parameter 'payment_card_id' is set
        if ($payment_card_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_card_id when calling paymentsCardsGet');
        }
        // parse inputs
        $resourcePath = "/payments/cards/{payment_card_id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($payment_card_id !== null) {
            $resourcePath = str_replace(
                "{" . "payment_card_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_card_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('jwt');
        if (strlen($apiKey) !== 0) {
            $queryParams['jwt'] = $apiKey;
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

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\PaymentCardResource', $httpHeader), $statusCode, $httpHeader);
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
     * @param string $payment_id  (required)
     * @param string $payment_card_id  (required)
     * @return \Ageras\Api\PaymentCardResource
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function paymentsCardsGet2($payment_id, $payment_card_id)
    {
        list($response) = $this->paymentsCardsGet2WithHttpInfo($payment_id, $payment_card_id);
        return $response;
    }

    /**
     * Operation paymentsCardsGet2WithHttpInfo
     *
     * Get a Partner from a given partner_id.
     *
     * @param string $payment_id  (required)
     * @param string $payment_card_id  (required)
     * @return Array of \Ageras\Api\PaymentCardResource, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function paymentsCardsGet2WithHttpInfo($payment_id, $payment_card_id)
    {
        // verify the required parameter 'payment_id' is set
        if ($payment_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_id when calling paymentsCardsGet2');
        }
        // verify the required parameter 'payment_card_id' is set
        if ($payment_card_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_card_id when calling paymentsCardsGet2');
        }
        // parse inputs
        $resourcePath = "/payments/{payment_id}/cards/{payment_card_id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

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
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('jwt');
        if (strlen($apiKey) !== 0) {
            $queryParams['jwt'] = $apiKey;
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

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\PaymentCardResource', $httpHeader), $statusCode, $httpHeader);
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
     * @param int $partner_id Partner id for the partner payment cards to filter by. (optional)
     * @param int $limit The number of resources to be returned. (optional)
     * @param int $page The page position in the result. (optional)
     * @param string $query The search wildcard. (optional)
     * @return \Ageras\Api\PaymentCardResult
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function paymentsCardsIndex($partner_id = null, $limit = null, $page = null, $query = null)
    {
        list($response) = $this->paymentsCardsIndexWithHttpInfo($partner_id, $limit, $page, $query);
        return $response;
    }

    /**
     * Operation paymentsCardsIndexWithHttpInfo
     *
     * List payment cards.
     *
     * @param int $partner_id Partner id for the partner payment cards to filter by. (optional)
     * @param int $limit The number of resources to be returned. (optional)
     * @param int $page The page position in the result. (optional)
     * @param string $query The search wildcard. (optional)
     * @return Array of \Ageras\Api\PaymentCardResult, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function paymentsCardsIndexWithHttpInfo($partner_id = null, $limit = null, $page = null, $query = null)
    {
        // parse inputs
        $resourcePath = "/payments/cards";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($partner_id !== null) {
            $queryParams['partner_id'] = $this->apiClient->getSerializer()->toQueryValue($partner_id);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($query !== null) {
            $queryParams['query'] = $this->apiClient->getSerializer()->toQueryValue($query);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('jwt');
        if (strlen($apiKey) !== 0) {
            $queryParams['jwt'] = $apiKey;
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

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\PaymentCardResult', $httpHeader), $statusCode, $httpHeader);
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

    /**
     * Operation paymentsEpayCardsCreate
     *
     * Create an epay payment card.
     *
     * @param \Ageras\Api\PaymentCardResource $payment_card_resource  (required)
     * @return \Ageras\Api\PaymentCardResource
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function paymentsEpayCardsCreate($payment_card_resource)
    {
        list($response) = $this->paymentsEpayCardsCreateWithHttpInfo($payment_card_resource);
        return $response;
    }

    /**
     * Operation paymentsEpayCardsCreateWithHttpInfo
     *
     * Create an epay payment card.
     *
     * @param \Ageras\Api\PaymentCardResource $payment_card_resource  (required)
     * @return Array of \Ageras\Api\PaymentCardResource, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function paymentsEpayCardsCreateWithHttpInfo($payment_card_resource)
    {
        // verify the required parameter 'payment_card_resource' is set
        if ($payment_card_resource === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_card_resource when calling paymentsEpayCardsCreate');
        }
        // parse inputs
        $resourcePath = "/payments/epay/cards";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

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
        $apiKey = $this->apiClient->getApiKeyWithPrefix('jwt');
        if (strlen($apiKey) !== 0) {
            $queryParams['jwt'] = $apiKey;
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
                '/payments/epay/cards'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\PaymentCardResource', $httpHeader), $statusCode, $httpHeader);
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
     * Operation paymentsEpayWindowCreate
     *
     * Create epay window.
     *
     * @param \Ageras\Api\PaymentWindowResource $payment_window_resource  (required)
     * @return \Ageras\Api\PaymentWindowResource
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function paymentsEpayWindowCreate($payment_window_resource)
    {
        list($response) = $this->paymentsEpayWindowCreateWithHttpInfo($payment_window_resource);
        return $response;
    }

    /**
     * Operation paymentsEpayWindowCreateWithHttpInfo
     *
     * Create epay window.
     *
     * @param \Ageras\Api\PaymentWindowResource $payment_window_resource  (required)
     * @return Array of \Ageras\Api\PaymentWindowResource, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function paymentsEpayWindowCreateWithHttpInfo($payment_window_resource)
    {
        // verify the required parameter 'payment_window_resource' is set
        if ($payment_window_resource === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_window_resource when calling paymentsEpayWindowCreate');
        }
        // parse inputs
        $resourcePath = "/payments/epay/window";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($payment_window_resource)) {
            $_tempBody = $payment_window_resource;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('jwt');
        if (strlen($apiKey) !== 0) {
            $queryParams['jwt'] = $apiKey;
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
                '\Ageras\Api\PaymentWindowResource',
                '/payments/epay/window'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\PaymentWindowResource', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\PaymentWindowResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
