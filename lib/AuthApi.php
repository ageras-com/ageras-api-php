<?php
/**
 * AuthApi
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
 * AuthApi Class Doc Comment
 *
 * @category Class
 * @package  Ageras\Api
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
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
     * @param \Ageras\Api\AuthResource $auth_resource Authentication Resource with authorize information (required)
     * @return \Ageras\Api\AuthResource
     * @throws \Ageras\Api\ApiException on non-2xx response
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
     * @param \Ageras\Api\AuthResource $auth_resource Authentication Resource with authorize information (required)
     * @return Array of \Ageras\Api\AuthResource, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function authCreateWithHttpInfo($auth_resource)
    {
        // verify the required parameter 'auth_resource' is set
        if ($auth_resource === null) {
            throw new \InvalidArgumentException('Missing the required parameter $auth_resource when calling authCreate');
        }
        // parse inputs
        $resourcePath = "/auth";
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
                '\Ageras\Api\AuthResource',
                '/auth'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\AuthResource', $httpHeader), $statusCode, $httpHeader);
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
     * @return void
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function authDelete()
    {
        list($response) = $this->authDeleteWithHttpInfo();
        return $response;
    }

    /**
     * Operation authDeleteWithHttpInfo
     *
     * Logout and end session/token.
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function authDeleteWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/auth/token";
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/auth/token'
            );

            return array(null, $statusCode, $httpHeader);
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
     * @return \Ageras\Api\AuthResource
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function authGet()
    {
        list($response) = $this->authGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation authGetWithHttpInfo
     *
     * Get information about the current Authenticated session.
     *
     * @return Array of \Ageras\Api\AuthResource, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function authGetWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/auth/token";
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
                '\Ageras\Api\AuthResource',
                '/auth/token'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\AuthResource', $httpHeader), $statusCode, $httpHeader);
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
     * @param \Ageras\Api\PasswordResetResource $password_reset_resource  (required)
     * @return \Ageras\Api\PasswordResetResource
     * @throws \Ageras\Api\ApiException on non-2xx response
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
     * @param \Ageras\Api\PasswordResetResource $password_reset_resource  (required)
     * @return Array of \Ageras\Api\PasswordResetResource, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function authPasswordCreateWithHttpInfo($password_reset_resource)
    {
        // verify the required parameter 'password_reset_resource' is set
        if ($password_reset_resource === null) {
            throw new \InvalidArgumentException('Missing the required parameter $password_reset_resource when calling authPasswordCreate');
        }
        // parse inputs
        $resourcePath = "/auth/password";
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
                '\Ageras\Api\PasswordResetResource',
                '/auth/password'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\PasswordResetResource', $httpHeader), $statusCode, $httpHeader);
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
     * @param \Ageras\Api\PasswordResetResource $password_reset_resource  (required)
     * @return \Ageras\Api\PasswordResetResource
     * @throws \Ageras\Api\ApiException on non-2xx response
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
     * @param \Ageras\Api\PasswordResetResource $password_reset_resource  (required)
     * @return Array of \Ageras\Api\PasswordResetResource, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function authPasswordUpdateWithHttpInfo($password_reset_resource)
    {
        // verify the required parameter 'password_reset_resource' is set
        if ($password_reset_resource === null) {
            throw new \InvalidArgumentException('Missing the required parameter $password_reset_resource when calling authPasswordUpdate');
        }
        // parse inputs
        $resourcePath = "/auth/password";
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Ageras\Api\PasswordResetResource',
                '/auth/password'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\PasswordResetResource', $httpHeader), $statusCode, $httpHeader);
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
     * @param \Ageras\Api\PasswordReminderResource $password_reminder_resource  (required)
     * @return \Ageras\Api\PasswordReminderResource
     * @throws \Ageras\Api\ApiException on non-2xx response
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
     * @param \Ageras\Api\PasswordReminderResource $password_reminder_resource  (required)
     * @return Array of \Ageras\Api\PasswordReminderResource, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function authPasswordreminderCreateWithHttpInfo($password_reminder_resource)
    {
        // verify the required parameter 'password_reminder_resource' is set
        if ($password_reminder_resource === null) {
            throw new \InvalidArgumentException('Missing the required parameter $password_reminder_resource when calling authPasswordreminderCreate');
        }
        // parse inputs
        $resourcePath = "/auth/passwordreminder";
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
                '\Ageras\Api\PasswordReminderResource',
                '/auth/passwordreminder'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\PasswordReminderResource', $httpHeader), $statusCode, $httpHeader);
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
     * @param int $limit The number of resources to be returned. (optional)
     * @param int $page The page position in the result. (optional)
     * @param string $query The search wildcard. (optional)
     * @return \Ageras\Api\PermissionResult
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function authPermissionsIndex($limit = null, $page = null, $query = null)
    {
        list($response) = $this->authPermissionsIndexWithHttpInfo($limit, $page, $query);
        return $response;
    }

    /**
     * Operation authPermissionsIndexWithHttpInfo
     *
     * List the Permissions for the given authenticated user.
     *
     * @param int $limit The number of resources to be returned. (optional)
     * @param int $page The page position in the result. (optional)
     * @param string $query The search wildcard. (optional)
     * @return Array of \Ageras\Api\PermissionResult, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function authPermissionsIndexWithHttpInfo($limit = null, $page = null, $query = null)
    {
        // parse inputs
        $resourcePath = "/auth/permissions";
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
                '\Ageras\Api\PermissionResult',
                '/auth/permissions'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\PermissionResult', $httpHeader), $statusCode, $httpHeader);
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
     * Operation authUpdate
     *
     * Renew authentication session.
     *
     * @param \Ageras\Api\AuthResource $auth_resource  (required)
     * @return \Ageras\Api\AuthResource
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function authUpdate($auth_resource)
    {
        list($response) = $this->authUpdateWithHttpInfo($auth_resource);
        return $response;
    }

    /**
     * Operation authUpdateWithHttpInfo
     *
     * Renew authentication session.
     *
     * @param \Ageras\Api\AuthResource $auth_resource  (required)
     * @return Array of \Ageras\Api\AuthResource, HTTP status code, HTTP response headers (array of strings)
     * @throws \Ageras\Api\ApiException on non-2xx response
     */
    public function authUpdateWithHttpInfo($auth_resource)
    {
        // verify the required parameter 'auth_resource' is set
        if ($auth_resource === null) {
            throw new \InvalidArgumentException('Missing the required parameter $auth_resource when calling authUpdate');
        }
        // parse inputs
        $resourcePath = "/auth/token";
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Ageras\Api\AuthResource',
                '/auth/token'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Ageras\Api\AuthResource', $httpHeader), $statusCode, $httpHeader);
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
