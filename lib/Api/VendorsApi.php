<?php
/**
 * VendorsApi
 * PHP version 7.3
 *
 * @category Class
 * @package  Aryeo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Aryeo
 *
 * Contact: jarrod@aryeo.com
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Aryeo\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Aryeo\ApiException;
use Aryeo\Configuration;
use Aryeo\HeaderSelector;
use Aryeo\ObjectSerializer;

/**
 * VendorsApi Class Doc Comment
 *
 * @category Class
 * @package  Aryeo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VendorsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getVendors
     *
     * List all vendors.
     *
     * @param  string $include Comma separated list of optional data to include in the response. (optional)
     *
     * @throws \Aryeo\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aryeo\Model\GroupCollection|\Aryeo\Model\ApiError403|\Aryeo\Model\ApiError404|\Aryeo\Model\ApiFail422|\Aryeo\Model\ApiError500
     */
    public function getVendors($include = null)
    {
        list($response) = $this->getVendorsWithHttpInfo($include);
        return $response;
    }

    /**
     * Operation getVendorsWithHttpInfo
     *
     * List all vendors.
     *
     * @param  string $include Comma separated list of optional data to include in the response. (optional)
     *
     * @throws \Aryeo\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aryeo\Model\GroupCollection|\Aryeo\Model\ApiError403|\Aryeo\Model\ApiError404|\Aryeo\Model\ApiFail422|\Aryeo\Model\ApiError500, HTTP status code, HTTP response headers (array of strings)
     */
    public function getVendorsWithHttpInfo($include = null)
    {
        $request = $this->getVendorsRequest($include);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Aryeo\Model\GroupCollection' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aryeo\Model\GroupCollection', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Aryeo\Model\ApiError403' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aryeo\Model\ApiError403', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Aryeo\Model\ApiError404' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aryeo\Model\ApiError404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\Aryeo\Model\ApiFail422' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aryeo\Model\ApiFail422', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Aryeo\Model\ApiError500' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aryeo\Model\ApiError500', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Aryeo\Model\GroupCollection';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aryeo\Model\GroupCollection',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aryeo\Model\ApiError403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aryeo\Model\ApiError404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aryeo\Model\ApiFail422',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aryeo\Model\ApiError500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getVendorsAsync
     *
     * List all vendors.
     *
     * @param  string $include Comma separated list of optional data to include in the response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVendorsAsync($include = null)
    {
        return $this->getVendorsAsyncWithHttpInfo($include)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getVendorsAsyncWithHttpInfo
     *
     * List all vendors.
     *
     * @param  string $include Comma separated list of optional data to include in the response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVendorsAsyncWithHttpInfo($include = null)
    {
        $returnType = '\Aryeo\Model\GroupCollection';
        $request = $this->getVendorsRequest($include);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getVendors'
     *
     * @param  string $include Comma separated list of optional data to include in the response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getVendorsRequest($include = null)
    {
        if ($include !== null && strlen($include) > 255) {
            throw new \InvalidArgumentException('invalid length for "$include" when calling VendorsApi.getVendors, must be smaller than or equal to 255.');
        }
        if ($include !== null && strlen($include) < 0) {
            throw new \InvalidArgumentException('invalid length for "$include" when calling VendorsApi.getVendors, must be bigger than or equal to 0.');
        }


        $resourcePath = '/vendors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($include !== null) {
            if('form' === 'form' && is_array($include)) {
                foreach($include as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['include'] = $include;
            }
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getVendorsId
     *
     * Retrieve a vendor.
     *
     * @param  string $vendor_id The ID of the group that is associated as a vendor. UUID Version 4. (required)
     * @param  string $include Comma separated list of optional data to include in the response. (optional)
     *
     * @throws \Aryeo\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aryeo\Model\GroupResource|\Aryeo\Model\ApiError403|\Aryeo\Model\ApiError404|\Aryeo\Model\ApiFail422|\Aryeo\Model\ApiError500
     */
    public function getVendorsId($vendor_id, $include = null)
    {
        list($response) = $this->getVendorsIdWithHttpInfo($vendor_id, $include);
        return $response;
    }

    /**
     * Operation getVendorsIdWithHttpInfo
     *
     * Retrieve a vendor.
     *
     * @param  string $vendor_id The ID of the group that is associated as a vendor. UUID Version 4. (required)
     * @param  string $include Comma separated list of optional data to include in the response. (optional)
     *
     * @throws \Aryeo\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aryeo\Model\GroupResource|\Aryeo\Model\ApiError403|\Aryeo\Model\ApiError404|\Aryeo\Model\ApiFail422|\Aryeo\Model\ApiError500, HTTP status code, HTTP response headers (array of strings)
     */
    public function getVendorsIdWithHttpInfo($vendor_id, $include = null)
    {
        $request = $this->getVendorsIdRequest($vendor_id, $include);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Aryeo\Model\GroupResource' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aryeo\Model\GroupResource', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Aryeo\Model\ApiError403' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aryeo\Model\ApiError403', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Aryeo\Model\ApiError404' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aryeo\Model\ApiError404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\Aryeo\Model\ApiFail422' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aryeo\Model\ApiFail422', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Aryeo\Model\ApiError500' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aryeo\Model\ApiError500', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Aryeo\Model\GroupResource';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aryeo\Model\GroupResource',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aryeo\Model\ApiError403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aryeo\Model\ApiError404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aryeo\Model\ApiFail422',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aryeo\Model\ApiError500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getVendorsIdAsync
     *
     * Retrieve a vendor.
     *
     * @param  string $vendor_id The ID of the group that is associated as a vendor. UUID Version 4. (required)
     * @param  string $include Comma separated list of optional data to include in the response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVendorsIdAsync($vendor_id, $include = null)
    {
        return $this->getVendorsIdAsyncWithHttpInfo($vendor_id, $include)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getVendorsIdAsyncWithHttpInfo
     *
     * Retrieve a vendor.
     *
     * @param  string $vendor_id The ID of the group that is associated as a vendor. UUID Version 4. (required)
     * @param  string $include Comma separated list of optional data to include in the response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVendorsIdAsyncWithHttpInfo($vendor_id, $include = null)
    {
        $returnType = '\Aryeo\Model\GroupResource';
        $request = $this->getVendorsIdRequest($vendor_id, $include);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getVendorsId'
     *
     * @param  string $vendor_id The ID of the group that is associated as a vendor. UUID Version 4. (required)
     * @param  string $include Comma separated list of optional data to include in the response. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getVendorsIdRequest($vendor_id, $include = null)
    {
        // verify the required parameter 'vendor_id' is set
        if ($vendor_id === null || (is_array($vendor_id) && count($vendor_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $vendor_id when calling getVendorsId'
            );
        }
        if (strlen($vendor_id) > 36) {
            throw new \InvalidArgumentException('invalid length for "$vendor_id" when calling VendorsApi.getVendorsId, must be smaller than or equal to 36.');
        }
        if (strlen($vendor_id) < 36) {
            throw new \InvalidArgumentException('invalid length for "$vendor_id" when calling VendorsApi.getVendorsId, must be bigger than or equal to 36.');
        }

        if ($include !== null && strlen($include) > 255) {
            throw new \InvalidArgumentException('invalid length for "$include" when calling VendorsApi.getVendorsId, must be smaller than or equal to 255.');
        }
        if ($include !== null && strlen($include) < 0) {
            throw new \InvalidArgumentException('invalid length for "$include" when calling VendorsApi.getVendorsId, must be bigger than or equal to 0.');
        }


        $resourcePath = '/vendors/{vendor_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($include !== null) {
            if('form' === 'form' && is_array($include)) {
                foreach($include as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['include'] = $include;
            }
        }


        // path params
        if ($vendor_id !== null) {
            $resourcePath = str_replace(
                '{' . 'vendor_id' . '}',
                ObjectSerializer::toPathValue($vendor_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
