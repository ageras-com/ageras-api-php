<?php
/**
 * AuthApi
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
 * AuthApi Class Doc Comment
 *
 * @category Class
 * @package  Ageras\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthApi
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
     * @return AuthApi
     */
    public function setApiClient(\Ageras\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation authCreate
     *
     * Authenticate user and receive a token.
     *
     * @param \Ageras\Api\AuthResource $auth_resource Authentication Resource with authorize information
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\AuthResource
     */
    public function authCreate($auth_resource)
    {
        list($response) = $this->authCreateWithHttpInfo($auth_resource);
        return $response;
    }

    /**
     * Operation authCreateWithHttpInfo
     *
     * Authenticate user and receive a token.
     *
     * @param \Ageras\Api\AuthResource $auth_resource Authentication Resource with authorize information
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\AuthResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function authCreateWithHttpInfo($auth_resource)
    {
        // parse inputs
        $resourcePath = "/auth";
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
        if (isset($auth_resource)) {
            $_tempBody = $auth_resource;
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
                '\Ageras\Api\AuthResource',
                '/auth'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\AuthResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\AuthResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation authDelete
     *
     * Logout and end session/token.
     *
     * @param string $auth_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return void
     */
    public function authDelete($auth_id )
    {
        list($response) = $this->authDeleteWithHttpInfo($auth_id);
        return $response;
    }

    /**
     * Operation authDeleteWithHttpInfo
     *
     * Logout and end session/token.
     *
     * @param string $auth_id 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function authDeleteWithHttpInfo($auth_id )
    {
        // parse inputs
        $resourcePath = "/auth/{auth_id}";
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
        if ($auth_id !== null) {
            $resourcePath = str_replace(
                "{" . "auth_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($auth_id),
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
                '/auth/{auth_id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation authGet
     *
     * Get information about the current Authenticated session.
     *
     * @param string $auth_id default value is token
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\AuthResource
     */
    public function authGet($auth_id )
    {
        list($response) = $this->authGetWithHttpInfo($auth_id);
        return $response;
    }

    /**
     * Operation authGetWithHttpInfo
     *
     * Get information about the current Authenticated session.
     *
     * @param string $auth_id default value is token
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\AuthResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function authGetWithHttpInfo($auth_id )
    {
        // parse inputs
        $resourcePath = "/auth/{auth_id}";
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
        if ($auth_id !== null) {
            $resourcePath = str_replace(
                "{" . "auth_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($auth_id),
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
                '\Ageras\Api\AuthResource',
                '/auth/{auth_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\AuthResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\AuthResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation authPasswordCreate
     *
     * Reset Password from a given reset token.
     *
     * @param \Ageras\Api\PasswordResetResource $password_reset_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\PasswordResetResource
     */
    public function authPasswordCreate($password_reset_resource)
    {
        list($response) = $this->authPasswordCreateWithHttpInfo($password_reset_resource);
        return $response;
    }

    /**
     * Operation authPasswordCreateWithHttpInfo
     *
     * Reset Password from a given reset token.
     *
     * @param \Ageras\Api\PasswordResetResource $password_reset_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\PasswordResetResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function authPasswordCreateWithHttpInfo($password_reset_resource)
    {
        // parse inputs
        $resourcePath = "/auth/password";
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
        if (isset($password_reset_resource)) {
            $_tempBody = $password_reset_resource;
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
                '\Ageras\Api\PasswordResetResource',
                '/auth/password'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\PasswordResetResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\PasswordResetResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation authPasswordUpdate
     *
     * Change Password.
     *
     * @param \Ageras\Api\PasswordResetResource $password_reset_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\PasswordResetResource
     */
    public function authPasswordUpdate($password_reset_resource)
    {
        list($response) = $this->authPasswordUpdateWithHttpInfo($password_reset_resource);
        return $response;
    }

    /**
     * Operation authPasswordUpdateWithHttpInfo
     *
     * Change Password.
     *
     * @param \Ageras\Api\PasswordResetResource $password_reset_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\PasswordResetResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function authPasswordUpdateWithHttpInfo($password_reset_resource)
    {
        // parse inputs
        $resourcePath = "/auth/password";
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
        if (isset($password_reset_resource)) {
            $_tempBody = $password_reset_resource;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Ageras\Api\PasswordResetResource',
                '/auth/password'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\PasswordResetResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\PasswordResetResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation authPasswordreminderCreate
     *
     * Request a password reminder e-mail.
     *
     * @param \Ageras\Api\PasswordReminderResource $password_reminder_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\PasswordReminderResource
     */
    public function authPasswordreminderCreate($password_reminder_resource)
    {
        list($response) = $this->authPasswordreminderCreateWithHttpInfo($password_reminder_resource);
        return $response;
    }

    /**
     * Operation authPasswordreminderCreateWithHttpInfo
     *
     * Request a password reminder e-mail.
     *
     * @param \Ageras\Api\PasswordReminderResource $password_reminder_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\PasswordReminderResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function authPasswordreminderCreateWithHttpInfo($password_reminder_resource)
    {
        // parse inputs
        $resourcePath = "/auth/passwordreminder";
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
        if (isset($password_reminder_resource)) {
            $_tempBody = $password_reminder_resource;
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
                '\Ageras\Api\PasswordReminderResource',
                '/auth/passwordreminder'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\PasswordReminderResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\PasswordReminderResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation authPermissionsIndex
     *
     * List the Permissions for the given authenticated user.
     *
     * @param $criteria = [
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\PermissionResult
     */
    public function authPermissionsIndex($criteria = [])
    {
        list($response) = $this->authPermissionsIndexWithHttpInfo($criteria);
        return $response;
    }

    /**
     * Operation authPermissionsIndexWithHttpInfo
     *
     * List the Permissions for the given authenticated user.
     *
     * @param $criteria = [
     *    'limit' => int,
     *    'page' => int,
     *    'query' => string,
     * ]
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\PermissionResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function authPermissionsIndexWithHttpInfo($criteria = [])
    {
        // parse inputs
        $resourcePath = "/auth/permissions";
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
                '\Ageras\Api\PermissionResult',
                '/auth/permissions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\PermissionResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\PermissionResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation authTokenDelete
     *
     * Delete a token
     *
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return void
     */
    public function authTokenDelete()
    {
        list($response) = $this->authTokenDeleteWithHttpInfo();
        return $response;
    }

    /**
     * Operation authTokenDeleteWithHttpInfo
     *
     * Delete a token
     *
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function authTokenDeleteWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/auth/token";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        
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
                '/auth/token'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation authTokenGet
     *
     * Get information about the token
     *
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\AuthResource
     */
    public function authTokenGet()
    {
        list($response) = $this->authTokenGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation authTokenGetWithHttpInfo
     *
     * Get information about the token
     *
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\AuthResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function authTokenGetWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/auth/token";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        
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
                '\Ageras\Api\AuthResource',
                '/auth/token'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\AuthResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\AuthResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation authTokenUpdate
     *
     * Renew token
     *
     * @param \Ageras\Api\AuthResource $auth_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\AuthResource
     */
    public function authTokenUpdate($auth_resource)
    {
        list($response) = $this->authTokenUpdateWithHttpInfo($auth_resource);
        return $response;
    }

    /**
     * Operation authTokenUpdateWithHttpInfo
     *
     * Renew token
     *
     * @param \Ageras\Api\AuthResource $auth_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\AuthResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function authTokenUpdateWithHttpInfo($auth_resource)
    {
        // parse inputs
        $resourcePath = "/auth/token";
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
        if (isset($auth_resource)) {
            $_tempBody = $auth_resource;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Ageras\Api\AuthResource',
                '/auth/token'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\AuthResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\AuthResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation authUpdate
     *
     * Renew authentication session.
     *
     * @param string $auth_id 
     * @param \Ageras\Api\AuthResource $auth_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return \Ageras\Api\AuthResource
     */
    public function authUpdate($auth_id , $auth_resource)
    {
        list($response) = $this->authUpdateWithHttpInfo($auth_id, $auth_resource);
        return $response;
    }

    /**
     * Operation authUpdateWithHttpInfo
     *
     * Renew authentication session.
     *
     * @param string $auth_id 
     * @param \Ageras\Api\AuthResource $auth_resource 
     * @throws \Ageras\Api\ApiException on non-2xx response
     * @return array of \Ageras\Api\AuthResource, HTTP status code, HTTP response headers (array of strings)
     */
    public function authUpdateWithHttpInfo($auth_id , $auth_resource)
    {
        // parse inputs
        $resourcePath = "/auth/{auth_id}";
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
        if ($auth_id !== null) {
            $resourcePath = str_replace(
                "{" . "auth_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($auth_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($auth_resource)) {
            $_tempBody = $auth_resource;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Ageras\Api\AuthResource',
                '/auth/{auth_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\AuthResource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Ageras\Api\AuthResource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
