<?php
/**
 * IndustriesApi
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
 * IndustriesApi Class Doc Comment
 *
 * @category Class
 * @package  Ageras\Api
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IndustriesApi
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
     * @return IndustriesApi
     */
    public function setApiClient(\Ageras\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation industriesIndex
     *
     * List Industries and filter by parent industry.
     *
     * @param string $industry_id Industry ID. (optional)
     * @param string $name Industry name in its native language. (optional)
     * @param string $geo_code Industry geo code origin. (optional)
     * @param bool $status Determinate if industry is active or not. (optional, default to false)
     * @param int $limit Limit of industries per page. (optional)
     * @param int $parent_industry_id Parent industry to filter by. (optional)
     * @param int $page The page position in the result. (optional)
     * @param string $query The search wildcard. (optional)
     * @return \Ageras\Api\IndustryResult
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function industriesIndex($industry_id = null, $name = null, $geo_code = null, $status = null, $limit = null, $parent_industry_id = null, $page = null, $query = null)
    {
        list($response) = $this->industriesIndexWithHttpInfo($industry_id, $name, $geo_code, $status, $limit, $parent_industry_id, $page, $query);
        return $response;
    }

    /**
     * Operation industriesIndexWithHttpInfo
     *
     * List Industries and filter by parent industry.
     *
     * @param string $industry_id Industry ID. (optional)
     * @param string $name Industry name in its native language. (optional)
     * @param string $geo_code Industry geo code origin. (optional)
     * @param bool $status Determinate if industry is active or not. (optional, default to false)
     * @param int $limit Limit of industries per page. (optional)
     * @param int $parent_industry_id Parent industry to filter by. (optional)
     * @param int $page The page position in the result. (optional)
     * @param string $query The search wildcard. (optional)
     * @return Array of \Ageras\Api\IndustryResult, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function industriesIndexWithHttpInfo($industry_id = null, $name = null, $geo_code = null, $status = null, $limit = null, $parent_industry_id = null, $page = null, $query = null)
    {
        // parse inputs
        $resourcePath = "/industries";
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
        if ($industry_id !== null) {
            $queryParams['industry_id'] = $this->apiClient->getSerializer()->toQueryValue($industry_id);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = $this->apiClient->getSerializer()->toQueryValue($name);
        }
        // query params
        if ($geo_code !== null) {
            $queryParams['geo_code'] = $this->apiClient->getSerializer()->toQueryValue($geo_code);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($parent_industry_id !== null) {
            $queryParams['parent_industry_id'] = $this->apiClient->getSerializer()->toQueryValue($parent_industry_id);
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
                '\Ageras\Api\IndustryResult',
                '/industries'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\IndustryResult', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\IndustryResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
