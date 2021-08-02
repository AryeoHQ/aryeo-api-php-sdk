<?php
/**
 * OrdersApi
 * PHP version 7.2
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
 * OrdersApi Class Doc Comment
 *
 * @category Class
 * @package  Aryeo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrdersApi
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
     * Operation getOrders
     *
     * Get orders available to a group.
     *
     * @param  string $sort Comma separated list of fields used for sorting. Placing a minus symbol in front of a field name sorts in descending order. Defaults to &#x60;-created_at&#x60;. (optional)
     * @param  string $per_page The number of items per page. Defaults to 25. (optional)
     * @param  string $page The requested page. Defaults to 1. (optional)
     *
     * @throws \Aryeo\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aryeo\Model\OrderCollection|\Aryeo\Model\ApiError|\Aryeo\Model\ApiFail|\Aryeo\Model\ApiError
     */
    public function getOrders($sort = null, $per_page = null, $page = null)
    {
        list($response) = $this->getOrdersWithHttpInfo($sort, $per_page, $page);
        return $response;
    }

    /**
     * Operation getOrdersWithHttpInfo
     *
     * Get orders available to a group.
     *
     * @param  string $sort Comma separated list of fields used for sorting. Placing a minus symbol in front of a field name sorts in descending order. Defaults to &#x60;-created_at&#x60;. (optional)
     * @param  string $per_page The number of items per page. Defaults to 25. (optional)
     * @param  string $page The requested page. Defaults to 1. (optional)
     *
     * @throws \Aryeo\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aryeo\Model\OrderCollection|\Aryeo\Model\ApiError|\Aryeo\Model\ApiFail|\Aryeo\Model\ApiError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrdersWithHttpInfo($sort = null, $per_page = null, $page = null)
    {
        $request = $this->getOrdersRequest($sort, $per_page, $page);

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
                    if ('\Aryeo\Model\OrderCollection' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aryeo\Model\OrderCollection', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Aryeo\Model\ApiError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aryeo\Model\ApiError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\Aryeo\Model\ApiFail' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aryeo\Model\ApiFail', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Aryeo\Model\ApiError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aryeo\Model\ApiError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Aryeo\Model\OrderCollection';
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
                        '\Aryeo\Model\OrderCollection',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aryeo\Model\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aryeo\Model\ApiFail',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aryeo\Model\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOrdersAsync
     *
     * Get orders available to a group.
     *
     * @param  string $sort Comma separated list of fields used for sorting. Placing a minus symbol in front of a field name sorts in descending order. Defaults to &#x60;-created_at&#x60;. (optional)
     * @param  string $per_page The number of items per page. Defaults to 25. (optional)
     * @param  string $page The requested page. Defaults to 1. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrdersAsync($sort = null, $per_page = null, $page = null)
    {
        return $this->getOrdersAsyncWithHttpInfo($sort, $per_page, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrdersAsyncWithHttpInfo
     *
     * Get orders available to a group.
     *
     * @param  string $sort Comma separated list of fields used for sorting. Placing a minus symbol in front of a field name sorts in descending order. Defaults to &#x60;-created_at&#x60;. (optional)
     * @param  string $per_page The number of items per page. Defaults to 25. (optional)
     * @param  string $page The requested page. Defaults to 1. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrdersAsyncWithHttpInfo($sort = null, $per_page = null, $page = null)
    {
        $returnType = '\Aryeo\Model\OrderCollection';
        $request = $this->getOrdersRequest($sort, $per_page, $page);

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
     * Create request for operation 'getOrders'
     *
     * @param  string $sort Comma separated list of fields used for sorting. Placing a minus symbol in front of a field name sorts in descending order. Defaults to &#x60;-created_at&#x60;. (optional)
     * @param  string $per_page The number of items per page. Defaults to 25. (optional)
     * @param  string $page The requested page. Defaults to 1. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getOrdersRequest($sort = null, $per_page = null, $page = null)
    {
        if ($sort !== null && strlen($sort) > 100) {
            throw new \InvalidArgumentException('invalid length for "$sort" when calling OrdersApi.getOrders, must be smaller than or equal to 100.');
        }
        if ($sort !== null && strlen($sort) < 1) {
            throw new \InvalidArgumentException('invalid length for "$sort" when calling OrdersApi.getOrders, must be bigger than or equal to 1.');
        }

        if ($per_page !== null && strlen($per_page) > 5) {
            throw new \InvalidArgumentException('invalid length for "$per_page" when calling OrdersApi.getOrders, must be smaller than or equal to 5.');
        }
        if ($per_page !== null && strlen($per_page) < 1) {
            throw new \InvalidArgumentException('invalid length for "$per_page" when calling OrdersApi.getOrders, must be bigger than or equal to 1.');
        }

        if ($page !== null && strlen($page) > 5) {
            throw new \InvalidArgumentException('invalid length for "$page" when calling OrdersApi.getOrders, must be smaller than or equal to 5.');
        }
        if ($page !== null && strlen($page) < 1) {
            throw new \InvalidArgumentException('invalid length for "$page" when calling OrdersApi.getOrders, must be bigger than or equal to 1.');
        }


        $resourcePath = '/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($sort !== null) {
            if('form' === 'form' && is_array($sort)) {
                foreach($sort as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['sort'] = $sort;
            }
        }
        // query params
        if ($per_page !== null) {
            if('form' === 'form' && is_array($per_page)) {
                foreach($per_page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['per_page'] = $per_page;
            }
        }
        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
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
     * Operation postOrders
     *
     * Create an order.
     *
     * @param  \Aryeo\Model\OrderPostPayload $order_post_payload OrderPostPayload (optional)
     *
     * @throws \Aryeo\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aryeo\Model\OrderResource|\Aryeo\Model\ApiError|\Aryeo\Model\ApiError|\Aryeo\Model\ApiFail|\Aryeo\Model\ApiError
     */
    public function postOrders($order_post_payload = null)
    {
        list($response) = $this->postOrdersWithHttpInfo($order_post_payload);
        return $response;
    }

    /**
     * Operation postOrdersWithHttpInfo
     *
     * Create an order.
     *
     * @param  \Aryeo\Model\OrderPostPayload $order_post_payload OrderPostPayload (optional)
     *
     * @throws \Aryeo\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aryeo\Model\OrderResource|\Aryeo\Model\ApiError|\Aryeo\Model\ApiError|\Aryeo\Model\ApiFail|\Aryeo\Model\ApiError, HTTP status code, HTTP response headers (array of strings)
     */
    public function postOrdersWithHttpInfo($order_post_payload = null)
    {
        $request = $this->postOrdersRequest($order_post_payload);

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
                case 201:
                    if ('\Aryeo\Model\OrderResource' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aryeo\Model\OrderResource', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Aryeo\Model\ApiError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aryeo\Model\ApiError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 409:
                    if ('\Aryeo\Model\ApiError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aryeo\Model\ApiError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\Aryeo\Model\ApiFail' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aryeo\Model\ApiFail', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Aryeo\Model\ApiError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Aryeo\Model\ApiError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Aryeo\Model\OrderResource';
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aryeo\Model\OrderResource',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aryeo\Model\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aryeo\Model\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aryeo\Model\ApiFail',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aryeo\Model\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postOrdersAsync
     *
     * Create an order.
     *
     * @param  \Aryeo\Model\OrderPostPayload $order_post_payload OrderPostPayload (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postOrdersAsync($order_post_payload = null)
    {
        return $this->postOrdersAsyncWithHttpInfo($order_post_payload)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postOrdersAsyncWithHttpInfo
     *
     * Create an order.
     *
     * @param  \Aryeo\Model\OrderPostPayload $order_post_payload OrderPostPayload (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postOrdersAsyncWithHttpInfo($order_post_payload = null)
    {
        $returnType = '\Aryeo\Model\OrderResource';
        $request = $this->postOrdersRequest($order_post_payload);

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
     * Create request for operation 'postOrders'
     *
     * @param  \Aryeo\Model\OrderPostPayload $order_post_payload OrderPostPayload (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function postOrdersRequest($order_post_payload = null)
    {

        $resourcePath = '/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($order_post_payload)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($order_post_payload));
            } else {
                $httpBody = $order_post_payload;
            }
        } elseif (count($formParams) > 0) {
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
            'POST',
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
