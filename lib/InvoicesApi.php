<?php
/**
 * InvoicesApi
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
 * InvoicesApi Class Doc Comment
 *
 * @category Class
 * @package  Ageras\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoicesApi
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
     * @return InvoicesApi
     */
    public function setApiClient(\Ageras\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation invoicesGet
     *
     * 
     *
     * @param string $invoice_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\InvoiceResource
     */
    public function invoicesGet($invoice_id )
    {
        list($response) = $this->invoicesGetWithHttpInfo($invoice_id);
        return $response;
    }

    /**
     * Operation invoicesGetWithHttpInfo
     *
     * 
     *
     * @param string $invoice_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\InvoiceResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function invoicesGetWithHttpInfo($invoice_id )
    {
        // parse inputs
        $resourcePath = "/invoices/{invoice_id}";
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
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                "{" . "invoice_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($invoice_id),
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
                '\Ageras\Api\InvoiceResource',
                '/invoices/{invoice_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\InvoiceResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\InvoiceResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation invoicesIndex
     *
     * 
     *
     * @param $criteria = [
     *    'invoice_id' => string,
     *    'partner_id' => string,
     *    'client_id' => string,
     *    'is_paid' => bool,
     *    'is_overdue' => bool,
     *    'sort' => string,
     *    'geo_code' => string,
     *    'invoice_number' => string,
     *    'has_subscription_line_item' => bool,
     *    'query' => string,
     *    'limit' => int,
     *    'page' => int,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\InvoiceResult
     */
    public function invoicesIndex($criteria = [])
    {
        list($response) = $this->invoicesIndexWithHttpInfo($criteria);
        return $response;
    }

    /**
     * Operation invoicesIndexWithHttpInfo
     *
     * 
     *
     * @param $criteria = [
     *    'invoice_id' => string,
     *    'partner_id' => string,
     *    'client_id' => string,
     *    'is_paid' => bool,
     *    'is_overdue' => bool,
     *    'sort' => string,
     *    'geo_code' => string,
     *    'invoice_number' => string,
     *    'has_subscription_line_item' => bool,
     *    'query' => string,
     *    'limit' => int,
     *    'page' => int,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\InvoiceResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function invoicesIndexWithHttpInfo($criteria = [])
    {
        // parse inputs
        $resourcePath = "/invoices";
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
        if (isset($criteria['invoice_id'])) {
            $queryParams['invoice_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['invoice_id']);
        }
        // query params
        if (isset($criteria['partner_id'])) {
            $queryParams['partner_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['partner_id']);
        }
        // query params
        if (isset($criteria['client_id'])) {
            $queryParams['client_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['client_id']);
        }
        // query params
        if (isset($criteria['is_paid'])) {
            $queryParams['is_paid'] = $this->apiClient->getSerializer()->toQueryValue($criteria['is_paid']);
        }
        // query params
        if (isset($criteria['is_overdue'])) {
            $queryParams['is_overdue'] = $this->apiClient->getSerializer()->toQueryValue($criteria['is_overdue']);
        }
        // query params
        if (isset($criteria['sort'])) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($criteria['sort']);
        }
        // query params
        if (isset($criteria['geo_code'])) {
            $queryParams['geo_code'] = $this->apiClient->getSerializer()->toQueryValue($criteria['geo_code']);
        }
        // query params
        if (isset($criteria['invoice_number'])) {
            $queryParams['invoice_number'] = $this->apiClient->getSerializer()->toQueryValue($criteria['invoice_number']);
        }
        // query params
        if (isset($criteria['has_subscription_line_item'])) {
            $queryParams['has_subscription_line_item'] = $this->apiClient->getSerializer()->toQueryValue($criteria['has_subscription_line_item']);
        }
        // query params
        if (isset($criteria['query'])) {
            $queryParams['query'] = $this->apiClient->getSerializer()->toQueryValue($criteria['query']);
        }
        // query params
        if (isset($criteria['limit'])) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($criteria['limit']);
        }
        // query params
        if (isset($criteria['page'])) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($criteria['page']);
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
                '\Ageras\Api\InvoiceResult',
                '/invoices'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\InvoiceResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\InvoiceResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation invoicesRefundrequestsActionsCreate
     *
     * 
     *
     * @param string $invoice_id 
     * @param string $voucher_refund_request_id 
     * @param \Ageras\Api\VoucherRefundRequestActionResource $voucher_refund_request_action_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\VoucherRefundRequestResource
     */
    public function invoicesRefundrequestsActionsCreate($invoice_id,  $voucher_refund_request_id , $voucher_refund_request_action_resource)
    {
        list($response) = $this->invoicesRefundrequestsActionsCreateWithHttpInfo($invoice_id, $voucher_refund_request_id, $voucher_refund_request_action_resource);
        return $response;
    }

    /**
     * Operation invoicesRefundrequestsActionsCreateWithHttpInfo
     *
     * 
     *
     * @param string $invoice_id 
     * @param string $voucher_refund_request_id 
     * @param \Ageras\Api\VoucherRefundRequestActionResource $voucher_refund_request_action_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\VoucherRefundRequestResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function invoicesRefundrequestsActionsCreateWithHttpInfo($invoice_id,  $voucher_refund_request_id , $voucher_refund_request_action_resource)
    {
        // parse inputs
        $resourcePath = "/invoices/{invoice_id}/refundrequests/{voucher_refund_request_id}/actions";
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
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                "{" . "invoice_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($invoice_id),
                $resourcePath
            );
        }
        // path params
        if ($voucher_refund_request_id !== null) {
            $resourcePath = str_replace(
                "{" . "voucher_refund_request_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($voucher_refund_request_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($voucher_refund_request_action_resource)) {
            $_tempBody = $voucher_refund_request_action_resource;
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
                '\Ageras\Api\VoucherRefundRequestResource',
                '/invoices/{invoice_id}/refundrequests/{voucher_refund_request_id}/actions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\VoucherRefundRequestResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\VoucherRefundRequestResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation invoicesRefundrequestsCreate
     *
     * 
     *
     * @param string $invoice_id 
     * @param \Ageras\Api\VoucherRefundRequestResource $voucher_refund_request_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\VoucherRefundRequestResource
     */
    public function invoicesRefundrequestsCreate($invoice_id , $voucher_refund_request_resource)
    {
        list($response) = $this->invoicesRefundrequestsCreateWithHttpInfo($invoice_id, $voucher_refund_request_resource);
        return $response;
    }

    /**
     * Operation invoicesRefundrequestsCreateWithHttpInfo
     *
     * 
     *
     * @param string $invoice_id 
     * @param \Ageras\Api\VoucherRefundRequestResource $voucher_refund_request_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\VoucherRefundRequestResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function invoicesRefundrequestsCreateWithHttpInfo($invoice_id , $voucher_refund_request_resource)
    {
        // parse inputs
        $resourcePath = "/invoices/{invoice_id}/refundrequests";
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
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                "{" . "invoice_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($invoice_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($voucher_refund_request_resource)) {
            $_tempBody = $voucher_refund_request_resource;
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
                '\Ageras\Api\VoucherRefundRequestResource',
                '/invoices/{invoice_id}/refundrequests'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\VoucherRefundRequestResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\VoucherRefundRequestResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation invoicesRefundrequestsGet
     *
     * 
     *
     * @param string $voucher_refund_request_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\VoucherRefundRequestResource
     */
    public function invoicesRefundrequestsGet($voucher_refund_request_id )
    {
        list($response) = $this->invoicesRefundrequestsGetWithHttpInfo($voucher_refund_request_id);
        return $response;
    }

    /**
     * Operation invoicesRefundrequestsGetWithHttpInfo
     *
     * 
     *
     * @param string $voucher_refund_request_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\VoucherRefundRequestResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function invoicesRefundrequestsGetWithHttpInfo($voucher_refund_request_id )
    {
        // parse inputs
        $resourcePath = "/invoices/refundrequests/{voucher_refund_request_id}";
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
        if ($voucher_refund_request_id !== null) {
            $resourcePath = str_replace(
                "{" . "voucher_refund_request_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($voucher_refund_request_id),
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
                '\Ageras\Api\VoucherRefundRequestResource',
                '/invoices/refundrequests/{voucher_refund_request_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\VoucherRefundRequestResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\VoucherRefundRequestResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation invoicesRefundrequestsGet_0
     *
     * 
     *
     * @param string $invoice_id 
     * @param string $voucher_refund_request_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\VoucherRefundRequestResource
     */
    public function invoicesRefundrequestsGet_0($invoice_id,  $voucher_refund_request_id )
    {
        list($response) = $this->invoicesRefundrequestsGet_0WithHttpInfo($invoice_id, $voucher_refund_request_id);
        return $response;
    }

    /**
     * Operation invoicesRefundrequestsGet_0WithHttpInfo
     *
     * 
     *
     * @param string $invoice_id 
     * @param string $voucher_refund_request_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\VoucherRefundRequestResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function invoicesRefundrequestsGet_0WithHttpInfo($invoice_id,  $voucher_refund_request_id )
    {
        // parse inputs
        $resourcePath = "/invoices/{invoice_id}/refundrequests/{voucher_refund_request_id}";
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
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                "{" . "invoice_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($invoice_id),
                $resourcePath
            );
        }
        // path params
        if ($voucher_refund_request_id !== null) {
            $resourcePath = str_replace(
                "{" . "voucher_refund_request_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($voucher_refund_request_id),
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
                '\Ageras\Api\VoucherRefundRequestResource',
                '/invoices/{invoice_id}/refundrequests/{voucher_refund_request_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\VoucherRefundRequestResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\VoucherRefundRequestResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation invoicesRefundrequestsIndex
     *
     * 
     *
     * @param $criteria = [
     *    'id' => string,
     *    'voucher_id' => string,
     *    'partner_id' => string,
     *    'sort' => string,
     *    'status' => string,
     *    'geo_code' => string,
     *    'assigned_employee_id' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\VoucherRefundRequestResult
     */
    public function invoicesRefundrequestsIndex($criteria = [])
    {
        list($response) = $this->invoicesRefundrequestsIndexWithHttpInfo($criteria);
        return $response;
    }

    /**
     * Operation invoicesRefundrequestsIndexWithHttpInfo
     *
     * 
     *
     * @param $criteria = [
     *    'id' => string,
     *    'voucher_id' => string,
     *    'partner_id' => string,
     *    'sort' => string,
     *    'status' => string,
     *    'geo_code' => string,
     *    'assigned_employee_id' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\VoucherRefundRequestResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function invoicesRefundrequestsIndexWithHttpInfo($criteria = [])
    {
        // parse inputs
        $resourcePath = "/invoices/refundrequests";
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
        if (isset($criteria['id'])) {
            $queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['id']);
        }
        // query params
        if (isset($criteria['voucher_id'])) {
            $queryParams['voucher_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['voucher_id']);
        }
        // query params
        if (isset($criteria['partner_id'])) {
            $queryParams['partner_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['partner_id']);
        }
        // query params
        if (isset($criteria['sort'])) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($criteria['sort']);
        }
        // query params
        if (isset($criteria['status'])) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($criteria['status']);
        }
        // query params
        if (isset($criteria['geo_code'])) {
            $queryParams['geo_code'] = $this->apiClient->getSerializer()->toQueryValue($criteria['geo_code']);
        }
        // query params
        if (isset($criteria['assigned_employee_id'])) {
            $queryParams['assigned_employee_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['assigned_employee_id']);
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
                '\Ageras\Api\VoucherRefundRequestResult',
                '/invoices/refundrequests'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\VoucherRefundRequestResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\VoucherRefundRequestResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation invoicesRefundrequestsIndex_0
     *
     * 
     *
     * @param string $voucher_id 
     * @param $criteria = [
     *    'id' => string,
     *    'partner_id' => string,
     *    'sort' => string,
     *    'status' => string,
     *    'geo_code' => string,
     *    'assigned_employee_id' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\VoucherRefundRequestResult
     */
    public function invoicesRefundrequestsIndex_0($voucher_id , $criteria = [])
    {
        list($response) = $this->invoicesRefundrequestsIndex_0WithHttpInfo($voucher_id, $criteria);
        return $response;
    }

    /**
     * Operation invoicesRefundrequestsIndex_0WithHttpInfo
     *
     * 
     *
     * @param string $voucher_id 
     * @param $criteria = [
     *    'id' => string,
     *    'partner_id' => string,
     *    'sort' => string,
     *    'status' => string,
     *    'geo_code' => string,
     *    'assigned_employee_id' => string,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\VoucherRefundRequestResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function invoicesRefundrequestsIndex_0WithHttpInfo($voucher_id , $criteria = [])
    {
        // parse inputs
        $resourcePath = "/invoices/{voucher_id}/refundrequests";
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
        if (isset($criteria['id'])) {
            $queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['id']);
        }
        // query params
        if (isset($criteria['partner_id'])) {
            $queryParams['partner_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['partner_id']);
        }
        // query params
        if (isset($criteria['sort'])) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($criteria['sort']);
        }
        // query params
        if (isset($criteria['status'])) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($criteria['status']);
        }
        // query params
        if (isset($criteria['geo_code'])) {
            $queryParams['geo_code'] = $this->apiClient->getSerializer()->toQueryValue($criteria['geo_code']);
        }
        // query params
        if (isset($criteria['assigned_employee_id'])) {
            $queryParams['assigned_employee_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['assigned_employee_id']);
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
        if ($voucher_id !== null) {
            $resourcePath = str_replace(
                "{" . "voucher_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($voucher_id),
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
                '\Ageras\Api\VoucherRefundRequestResult',
                '/invoices/{voucher_id}/refundrequests'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\VoucherRefundRequestResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\VoucherRefundRequestResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
