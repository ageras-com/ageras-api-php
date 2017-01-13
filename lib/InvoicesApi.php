<?php
/**
 * InvoicesApi
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
 * InvoicesApi Class Doc Comment
 *
 * @category Class
 * @package  Ageras\Api
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
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
     * Get an Invoice from a given invoice_id.
     *
     * @param string $invoice_id  (required)
     * @return \Ageras\Api\InvoiceResource
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function invoicesGet($invoice_id)
    {
        list($response) = $this->invoicesGetWithHttpInfo($invoice_id);
        return $response;
    }

    /**
     * Operation invoicesGetWithHttpInfo
     *
     * Get an Invoice from a given invoice_id.
     *
     * @param string $invoice_id  (required)
     * @return Array of \Ageras\Api\InvoiceResource, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function invoicesGetWithHttpInfo($invoice_id)
    {
        // verify the required parameter 'invoice_id' is set
        if ($invoice_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $invoice_id when calling invoicesGet');
        }
        // parse inputs
        $resourcePath = "/invoices/{invoice_id}";
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
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                "{" . "invoice_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($invoice_id),
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
                '\Ageras\Api\InvoiceResource',
                '/invoices/{invoice_id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\InvoiceResource', $httpHeader), $statusCode, $httpHeader);
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
     * Search and find invoices by specific criterias.
     *
     * @param string $invoice_id Invoice Id. (optional)
     * @param string $partner_id Filter Invoices by a given Partner. (optional)
     * @param bool $is_paid Filter invoices by whether or not they are paid. (optional, default to false)
     * @param bool $is_overdue Filter invoices by whether they are overdue or not. An overdue is an invoice where the payment date has been reached but the invoice hasn&#39;t been paid. (optional, default to false)
     * @param string $sort Desired sorting. (optional)
     * @param int $limit The number of resources to be returned. (optional)
     * @param int $page The page position in the result. (optional)
     * @param string $query The search wildcard. (optional)
     * @return \Ageras\Api\InvoiceResult
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function invoicesIndex($invoice_id = null, $partner_id = null, $is_paid = null, $is_overdue = null, $sort = null, $limit = null, $page = null, $query = null)
    {
        list($response) = $this->invoicesIndexWithHttpInfo($invoice_id, $partner_id, $is_paid, $is_overdue, $sort, $limit, $page, $query);
        return $response;
    }

    /**
     * Operation invoicesIndexWithHttpInfo
     *
     * Search and find invoices by specific criterias.
     *
     * @param string $invoice_id Invoice Id. (optional)
     * @param string $partner_id Filter Invoices by a given Partner. (optional)
     * @param bool $is_paid Filter invoices by whether or not they are paid. (optional, default to false)
     * @param bool $is_overdue Filter invoices by whether they are overdue or not. An overdue is an invoice where the payment date has been reached but the invoice hasn&#39;t been paid. (optional, default to false)
     * @param string $sort Desired sorting. (optional)
     * @param int $limit The number of resources to be returned. (optional)
     * @param int $page The page position in the result. (optional)
     * @param string $query The search wildcard. (optional)
     * @return Array of \Ageras\Api\InvoiceResult, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function invoicesIndexWithHttpInfo($invoice_id = null, $partner_id = null, $is_paid = null, $is_overdue = null, $sort = null, $limit = null, $page = null, $query = null)
    {
        // parse inputs
        $resourcePath = "/invoices";
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
        if ($invoice_id !== null) {
            $queryParams['invoice_id'] = $this->apiClient->getSerializer()->toQueryValue($invoice_id);
        }
        // query params
        if ($partner_id !== null) {
            $queryParams['partner_id'] = $this->apiClient->getSerializer()->toQueryValue($partner_id);
        }
        // query params
        if ($is_paid !== null) {
            $queryParams['is_paid'] = $this->apiClient->getSerializer()->toQueryValue($is_paid);
        }
        // query params
        if ($is_overdue !== null) {
            $queryParams['is_overdue'] = $this->apiClient->getSerializer()->toQueryValue($is_overdue);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
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
                '\Ageras\Api\InvoiceResult',
                '/invoices'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\InvoiceResult', $httpHeader), $statusCode, $httpHeader);
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

}
