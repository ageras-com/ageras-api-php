<?php
/**
 * MatchengineApi
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
 * MatchengineApi Class Doc Comment
 *
 * @category Class
 * @package  Ageras\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MatchengineApi
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
     * @return MatchengineApi
     */
    public function setApiClient(\Ageras\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation matchengineMatchreportsIndex
     *
     * List match reports.
     *
     * @param $criteria = [
     *    'lead_id' => int,
     *    'partner_id' => int,
     *    'partner_business_unit_id' => string,
     *    'certifications_is_matching' => bool,
     *    'client_type_is_matching' => bool,
     *    'digital_work_preference_is_matching' => bool,
     *    'geo_distance_is_matching' => bool,
     *    'geo_distance_is_determinable' => bool,
     *    'industries_is_matching' => bool,
     *    'languages_is_matching' => bool,
     *    'languages_is_determinable' => bool,
     *    'revenues_is_matching' => bool,
     *    'revenues_is_determinable' => bool,
     *    'quote_fee_types_is_matching' => bool,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\MatchReportResult
     */
    public function matchengineMatchreportsIndex($criteria = [])
    {
        list($response) = $this->matchengineMatchreportsIndexWithHttpInfo($criteria);
        return $response;
    }

    /**
     * Operation matchengineMatchreportsIndexWithHttpInfo
     *
     * List match reports.
     *
     * @param $criteria = [
     *    'lead_id' => int,
     *    'partner_id' => int,
     *    'partner_business_unit_id' => string,
     *    'certifications_is_matching' => bool,
     *    'client_type_is_matching' => bool,
     *    'digital_work_preference_is_matching' => bool,
     *    'geo_distance_is_matching' => bool,
     *    'geo_distance_is_determinable' => bool,
     *    'industries_is_matching' => bool,
     *    'languages_is_matching' => bool,
     *    'languages_is_determinable' => bool,
     *    'revenues_is_matching' => bool,
     *    'revenues_is_determinable' => bool,
     *    'quote_fee_types_is_matching' => bool,
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\MatchReportResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function matchengineMatchreportsIndexWithHttpInfo($criteria = [])
    {
        // parse inputs
        $resourcePath = "/matchengine/matchreports";
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
        if (isset($criteria['lead_id'])) {
            $queryParams['lead_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['lead_id']);
        }
        // query params
        if (isset($criteria['partner_id'])) {
            $queryParams['partner_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['partner_id']);
        }
        // query params
        if (isset($criteria['partner_business_unit_id'])) {
            $queryParams['partner_business_unit_id'] = $this->apiClient->getSerializer()->toQueryValue($criteria['partner_business_unit_id']);
        }
        // query params
        if (isset($criteria['certifications_is_matching'])) {
            $queryParams['certifications_is_matching'] = $this->apiClient->getSerializer()->toQueryValue($criteria['certifications_is_matching']);
        }
        // query params
        if (isset($criteria['client_type_is_matching'])) {
            $queryParams['client_type_is_matching'] = $this->apiClient->getSerializer()->toQueryValue($criteria['client_type_is_matching']);
        }
        // query params
        if (isset($criteria['digital_work_preference_is_matching'])) {
            $queryParams['digital_work_preference_is_matching'] = $this->apiClient->getSerializer()->toQueryValue($criteria['digital_work_preference_is_matching']);
        }
        // query params
        if (isset($criteria['geo_distance_is_matching'])) {
            $queryParams['geo_distance_is_matching'] = $this->apiClient->getSerializer()->toQueryValue($criteria['geo_distance_is_matching']);
        }
        // query params
        if (isset($criteria['geo_distance_is_determinable'])) {
            $queryParams['geo_distance_is_determinable'] = $this->apiClient->getSerializer()->toQueryValue($criteria['geo_distance_is_determinable']);
        }
        // query params
        if (isset($criteria['industries_is_matching'])) {
            $queryParams['industries_is_matching'] = $this->apiClient->getSerializer()->toQueryValue($criteria['industries_is_matching']);
        }
        // query params
        if (isset($criteria['languages_is_matching'])) {
            $queryParams['languages_is_matching'] = $this->apiClient->getSerializer()->toQueryValue($criteria['languages_is_matching']);
        }
        // query params
        if (isset($criteria['languages_is_determinable'])) {
            $queryParams['languages_is_determinable'] = $this->apiClient->getSerializer()->toQueryValue($criteria['languages_is_determinable']);
        }
        // query params
        if (isset($criteria['revenues_is_matching'])) {
            $queryParams['revenues_is_matching'] = $this->apiClient->getSerializer()->toQueryValue($criteria['revenues_is_matching']);
        }
        // query params
        if (isset($criteria['revenues_is_determinable'])) {
            $queryParams['revenues_is_determinable'] = $this->apiClient->getSerializer()->toQueryValue($criteria['revenues_is_determinable']);
        }
        // query params
        if (isset($criteria['quote_fee_types_is_matching'])) {
            $queryParams['quote_fee_types_is_matching'] = $this->apiClient->getSerializer()->toQueryValue($criteria['quote_fee_types_is_matching']);
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
                '\Ageras\Api\MatchReportResult',
                '/matchengine/matchreports'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\MatchReportResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\MatchReportResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}