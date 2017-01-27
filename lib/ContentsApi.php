<?php
/**
 * ContentsApi
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
 * ContentsApi Class Doc Comment
 *
 * @category Class
 * @package  Ageras\Api
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContentsApi
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
     * @return ContentsApi
     */
    public function setApiClient(\Ageras\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation contentsPagesAggregationsIndex
     *
     * Aggreate the Pages by the letters
     *
     * @param string $page_id List of page identification(ID). (optional)
     * @param string $page_type Filter pages by their type (optional)
     * @param string $page_type_id Filter pages by their type id (optional)
     * @param string $letter Filter pages by first letter (optional)
     * @param string $geo_code Geo Code for the Content Page (optional)
     * @param int $limit The number of resources to be returned. (optional)
     * @param int $page The page position in the result. (optional)
     * @param string $query The search wildcard. (optional)
     * @return \Ageras\Api\AggregationResult
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function contentsPagesAggregationsIndex($page_id = null, $page_type = null, $page_type_id = null, $letter = null, $geo_code = null, $limit = null, $page = null, $query = null)
    {
        list($response) = $this->contentsPagesAggregationsIndexWithHttpInfo($page_id, $page_type, $page_type_id, $letter, $geo_code, $limit, $page, $query);
        return $response;
    }

    /**
     * Operation contentsPagesAggregationsIndexWithHttpInfo
     *
     * Aggreate the Pages by the letters
     *
     * @param string $page_id List of page identification(ID). (optional)
     * @param string $page_type Filter pages by their type (optional)
     * @param string $page_type_id Filter pages by their type id (optional)
     * @param string $letter Filter pages by first letter (optional)
     * @param string $geo_code Geo Code for the Content Page (optional)
     * @param int $limit The number of resources to be returned. (optional)
     * @param int $page The page position in the result. (optional)
     * @param string $query The search wildcard. (optional)
     * @return Array of \Ageras\Api\AggregationResult, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function contentsPagesAggregationsIndexWithHttpInfo($page_id = null, $page_type = null, $page_type_id = null, $letter = null, $geo_code = null, $limit = null, $page = null, $query = null)
    {
        // parse inputs
        $resourcePath = "/contents/pages/aggregations";
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
        if ($page_id !== null) {
            $queryParams['page_id'] = $this->apiClient->getSerializer()->toQueryValue($page_id);
        }
        // query params
        if ($page_type !== null) {
            $queryParams['page_type'] = $this->apiClient->getSerializer()->toQueryValue($page_type);
        }
        // query params
        if ($page_type_id !== null) {
            $queryParams['page_type_id'] = $this->apiClient->getSerializer()->toQueryValue($page_type_id);
        }
        // query params
        if ($letter !== null) {
            $queryParams['letter'] = $this->apiClient->getSerializer()->toQueryValue($letter);
        }
        // query params
        if ($geo_code !== null) {
            $queryParams['geo_code'] = $this->apiClient->getSerializer()->toQueryValue($geo_code);
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
                '\Ageras\Api\AggregationResult',
                '/contents/pages/aggregations'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\AggregationResult', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\AggregationResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation contentsPagesAggregationsIndex2
     *
     * Aggreate the Pages by the letters
     *
     * @param string $content_id  (required)
     * @param string $page_id List of page identification(ID). (optional)
     * @param string $page_type Filter pages by their type (optional)
     * @param string $page_type_id Filter pages by their type id (optional)
     * @param string $letter Filter pages by first letter (optional)
     * @param string $geo_code Geo Code for the Content Page (optional)
     * @param int $limit The number of resources to be returned. (optional)
     * @param int $page The page position in the result. (optional)
     * @param string $query The search wildcard. (optional)
     * @return \Ageras\Api\AggregationResult
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function contentsPagesAggregationsIndex2($content_id, $page_id = null, $page_type = null, $page_type_id = null, $letter = null, $geo_code = null, $limit = null, $page = null, $query = null)
    {
        list($response) = $this->contentsPagesAggregationsIndex2WithHttpInfo($content_id, $page_id, $page_type, $page_type_id, $letter, $geo_code, $limit, $page, $query);
        return $response;
    }

    /**
     * Operation contentsPagesAggregationsIndex2WithHttpInfo
     *
     * Aggreate the Pages by the letters
     *
     * @param string $content_id  (required)
     * @param string $page_id List of page identification(ID). (optional)
     * @param string $page_type Filter pages by their type (optional)
     * @param string $page_type_id Filter pages by their type id (optional)
     * @param string $letter Filter pages by first letter (optional)
     * @param string $geo_code Geo Code for the Content Page (optional)
     * @param int $limit The number of resources to be returned. (optional)
     * @param int $page The page position in the result. (optional)
     * @param string $query The search wildcard. (optional)
     * @return Array of \Ageras\Api\AggregationResult, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function contentsPagesAggregationsIndex2WithHttpInfo($content_id, $page_id = null, $page_type = null, $page_type_id = null, $letter = null, $geo_code = null, $limit = null, $page = null, $query = null)
    {
        // verify the required parameter 'content_id' is set
        if ($content_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $content_id when calling contentsPagesAggregationsIndex2');
        }
        // parse inputs
        $resourcePath = "/contents/{content_id}/pages/aggregations";
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
        if ($page_id !== null) {
            $queryParams['page_id'] = $this->apiClient->getSerializer()->toQueryValue($page_id);
        }
        // query params
        if ($page_type !== null) {
            $queryParams['page_type'] = $this->apiClient->getSerializer()->toQueryValue($page_type);
        }
        // query params
        if ($page_type_id !== null) {
            $queryParams['page_type_id'] = $this->apiClient->getSerializer()->toQueryValue($page_type_id);
        }
        // query params
        if ($letter !== null) {
            $queryParams['letter'] = $this->apiClient->getSerializer()->toQueryValue($letter);
        }
        // query params
        if ($geo_code !== null) {
            $queryParams['geo_code'] = $this->apiClient->getSerializer()->toQueryValue($geo_code);
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
        // path params
        if ($content_id !== null) {
            $resourcePath = str_replace(
                "{" . "content_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($content_id),
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
                '\Ageras\Api\AggregationResult',
                '/contents/{content_id}/pages/aggregations'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\AggregationResult', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\AggregationResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation contentsPagesGet
     *
     * Return a Page from a given id
     *
     * @param string $content_page_id  (required)
     * @return \Ageras\Api\ContentPageResource
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function contentsPagesGet($content_page_id)
    {
        list($response) = $this->contentsPagesGetWithHttpInfo($content_page_id);
        return $response;
    }

    /**
     * Operation contentsPagesGetWithHttpInfo
     *
     * Return a Page from a given id
     *
     * @param string $content_page_id  (required)
     * @return Array of \Ageras\Api\ContentPageResource, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function contentsPagesGetWithHttpInfo($content_page_id)
    {
        // verify the required parameter 'content_page_id' is set
        if ($content_page_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $content_page_id when calling contentsPagesGet');
        }
        // parse inputs
        $resourcePath = "/contents/pages/{content_page_id}";
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
        if ($content_page_id !== null) {
            $resourcePath = str_replace(
                "{" . "content_page_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($content_page_id),
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
                '\Ageras\Api\ContentPageResource',
                '/contents/pages/{content_page_id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\ContentPageResource', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\ContentPageResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation contentsPagesGet2
     *
     * Return a Page from a given id
     *
     * @param string $content_id  (required)
     * @param string $content_page_id  (required)
     * @return \Ageras\Api\ContentPageResource
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function contentsPagesGet2($content_id, $content_page_id)
    {
        list($response) = $this->contentsPagesGet2WithHttpInfo($content_id, $content_page_id);
        return $response;
    }

    /**
     * Operation contentsPagesGet2WithHttpInfo
     *
     * Return a Page from a given id
     *
     * @param string $content_id  (required)
     * @param string $content_page_id  (required)
     * @return Array of \Ageras\Api\ContentPageResource, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function contentsPagesGet2WithHttpInfo($content_id, $content_page_id)
    {
        // verify the required parameter 'content_id' is set
        if ($content_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $content_id when calling contentsPagesGet2');
        }
        // verify the required parameter 'content_page_id' is set
        if ($content_page_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $content_page_id when calling contentsPagesGet2');
        }
        // parse inputs
        $resourcePath = "/contents/{content_id}/pages/{content_page_id}";
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
        if ($content_id !== null) {
            $resourcePath = str_replace(
                "{" . "content_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($content_id),
                $resourcePath
            );
        }
        // path params
        if ($content_page_id !== null) {
            $resourcePath = str_replace(
                "{" . "content_page_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($content_page_id),
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
                '\Ageras\Api\ContentPageResource',
                '/contents/{content_id}/pages/{content_page_id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\ContentPageResource', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\ContentPageResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation contentsPagesIndex
     *
     * List Pages
     *
     * @param string $page_id List of page identification(ID). (optional)
     * @param string $page_type Filter pages by their type (optional)
     * @param string $page_type_id Filter pages by their type id (optional)
     * @param string $letter Filter pages by first letter (optional)
     * @param string $geo_code Geo Code for the Content Page (optional)
     * @param int $limit The number of resources to be returned. (optional)
     * @param int $page The page position in the result. (optional)
     * @param string $query The search wildcard. (optional)
     * @return \Ageras\Api\ContentPageResult
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function contentsPagesIndex($page_id = null, $page_type = null, $page_type_id = null, $letter = null, $geo_code = null, $limit = null, $page = null, $query = null)
    {
        list($response) = $this->contentsPagesIndexWithHttpInfo($page_id, $page_type, $page_type_id, $letter, $geo_code, $limit, $page, $query);
        return $response;
    }

    /**
     * Operation contentsPagesIndexWithHttpInfo
     *
     * List Pages
     *
     * @param string $page_id List of page identification(ID). (optional)
     * @param string $page_type Filter pages by their type (optional)
     * @param string $page_type_id Filter pages by their type id (optional)
     * @param string $letter Filter pages by first letter (optional)
     * @param string $geo_code Geo Code for the Content Page (optional)
     * @param int $limit The number of resources to be returned. (optional)
     * @param int $page The page position in the result. (optional)
     * @param string $query The search wildcard. (optional)
     * @return Array of \Ageras\Api\ContentPageResult, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function contentsPagesIndexWithHttpInfo($page_id = null, $page_type = null, $page_type_id = null, $letter = null, $geo_code = null, $limit = null, $page = null, $query = null)
    {
        // parse inputs
        $resourcePath = "/contents/pages";
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
        if ($page_id !== null) {
            $queryParams['page_id'] = $this->apiClient->getSerializer()->toQueryValue($page_id);
        }
        // query params
        if ($page_type !== null) {
            $queryParams['page_type'] = $this->apiClient->getSerializer()->toQueryValue($page_type);
        }
        // query params
        if ($page_type_id !== null) {
            $queryParams['page_type_id'] = $this->apiClient->getSerializer()->toQueryValue($page_type_id);
        }
        // query params
        if ($letter !== null) {
            $queryParams['letter'] = $this->apiClient->getSerializer()->toQueryValue($letter);
        }
        // query params
        if ($geo_code !== null) {
            $queryParams['geo_code'] = $this->apiClient->getSerializer()->toQueryValue($geo_code);
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
                '\Ageras\Api\ContentPageResult',
                '/contents/pages'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\ContentPageResult', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\ContentPageResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation contentsPagesTypesIndex
     *
     * List content page types.
     *
     * @param string $page_type_id List of page type identification(ID). (optional)
     * @param string $geo_code geo (optional)
     * @param int $limit The number of resources to be returned. (optional)
     * @param int $page The page position in the result. (optional)
     * @param string $query The search wildcard. (optional)
     * @return \Ageras\Api\ContentPageTypeResult
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function contentsPagesTypesIndex($page_type_id = null, $geo_code = null, $limit = null, $page = null, $query = null)
    {
        list($response) = $this->contentsPagesTypesIndexWithHttpInfo($page_type_id, $geo_code, $limit, $page, $query);
        return $response;
    }

    /**
     * Operation contentsPagesTypesIndexWithHttpInfo
     *
     * List content page types.
     *
     * @param string $page_type_id List of page type identification(ID). (optional)
     * @param string $geo_code geo (optional)
     * @param int $limit The number of resources to be returned. (optional)
     * @param int $page The page position in the result. (optional)
     * @param string $query The search wildcard. (optional)
     * @return Array of \Ageras\Api\ContentPageTypeResult, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function contentsPagesTypesIndexWithHttpInfo($page_type_id = null, $geo_code = null, $limit = null, $page = null, $query = null)
    {
        // parse inputs
        $resourcePath = "/contents/pages/types";
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
        if ($page_type_id !== null) {
            $queryParams['page_type_id'] = $this->apiClient->getSerializer()->toQueryValue($page_type_id);
        }
        // query params
        if ($geo_code !== null) {
            $queryParams['geo_code'] = $this->apiClient->getSerializer()->toQueryValue($geo_code);
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
                '\Ageras\Api\ContentPageTypeResult',
                '/contents/pages/types'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\ContentPageTypeResult', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\ContentPageTypeResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
