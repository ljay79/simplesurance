<?php
/**
 * ProductApi
 * PHP version 7.2
 *
 * @category Class
 * @package  SiSu\Client
 * @author   SiSu Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SISU POLICY API
 *
 * # Overview  Welcome to the simplesurance Policy API documentation. The API allows management (creating, viewing, canceling, etc.) of insurance policies. simplesurance offers a variety of insurance products, starting with smartphones and laptops, through bikes, glasses or watches and ending up with travel. We are constantly extending our catalog of products. All of our products can be managed via the Core API except for Travel. Travel requires a very specific set of input data in order to create a policy and therefore has a dedicated Travel API.   All the endpoints follow RESTful API principles. The documentation includes example requests and responses, to make the APIs easy to consume.  ## Environments and API Base URIs  simplesurance supports two environments:  1. Sandbox:  https://policy-api.sb-{partner-name}.sisu.sh  2. Production:  https://policy-api.simplesurance.de/  ## Sandbox environment  ### About  Sandbox is a development environment for integrating and testing simplesurance APIs. The sandbox version is not always the same as production. It may contain features that are in beta version, which means that they are not available in our production environment yet. Every partner has a dedicated sandbox environment that contains a predefined set of dummy accounts and transaction data.  ### API Access  You will receive an access token that must be supplied as a Bearer token within every service API call.  Details on the authentication process can be found in the Authentication section of this documentation.  ## Production environment  ### About  The production environment is designed for use within your application when going live with real customers. The environment is fully scalable, secure and facilitates the use of real customer data.  ### API Access  You will receive an access token that must be supplied as a Bearer token within every service API call. Production access tokens vary from the sandbox access token.  Details on the authentication process can be found in the Authentication section of this documentation.  ## Message formats  Standard HTTP verbs and status codes are used for requests and response statuses. Request and response payloads are JSON encoded data formatted. Communication with the APIs is handled over HTTPS protocol only.  | Data |Standard | |-----------|-------| | Strings encoding| UTF-8 | | Datetime | ISO 8601 | | Currency codes | ISO 4217 |  ## Idempotency  We support the idempotency of POST requests. All the requests that have request_id parameter can be idempotent. If the same value is passed in request_id parameter in multiple requests, only the first request will make changes in our system (e.g. create an insurance policy). The following requests will return cached data. Only successful requests are cached, so bad requests will not be cached even if the same request_id is passed. Cached responses contain a custom x-sisu-cached header with value true. x-xisu-process-date header contains the time when the original request was processed.  ## Code generation  It is possible to generate client SDK out of SiSu specifications which is available as part of this documentation (see: Download SiSu specification button). The client SDK can be generated in the language of your choice. We recommend using [SiSu Generator](https://github.com/SiSuTools/openapi-generator).  # Authentication  <!-- ReDoc-Inject: <security-definitions> -->
 *
 * The version of the SiSu document: 0.2.1
 *
 * Generated by: https://openapi-generator.tech
 * SiSu Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by SiSu Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SiSu\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use SiSu\Client\ApiException;
use SiSu\Client\Configuration;
use SiSu\Client\HeaderSelector;
use SiSu\Client\ObjectSerializer;

/**
 * ProductApi Class Doc Comment
 *
 * @category Class
 * @package  SiSu\Client
 * @author   SiSu Generator team
 * @link     https://openapi-generator.tech
 */
class ProductApi
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
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the SiSu spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex)
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
     * Operation listProducts
     *
     * @param  int $page page (required)
     * @param  int $per_page per_page (required)
     * @param  string[] $categories categories (optional)
     * @param  string[] $countries countries (optional)
     * @param  string[] $product_types product_types (optional)
     * @param  string $integration_type integration_type (optional)
     * @param  string $sorting_column sorting_column (optional)
     * @param  object $sorting_direction sorting_direction (optional)
     *
     * @throws \SiSu\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SiSu\Client\Model\InlineResponse200|\SiSu\Client\Model\InlineResponse400
     */
    public function listProducts($page, $per_page, $categories = null, $countries = null, $product_types = null, $integration_type = null, $sorting_column = null, $sorting_direction = null)
    {
        list($response) = $this->listProductsWithHttpInfo($page, $per_page, $categories, $countries, $product_types, $integration_type, $sorting_column, $sorting_direction);
        return $response;
    }

    /**
     * Operation listProductsWithHttpInfo
     *
     * @param  int $page (required)
     * @param  int $per_page (required)
     * @param  string[] $categories (optional)
     * @param  string[] $countries (optional)
     * @param  string[] $product_types (optional)
     * @param  string $integration_type (optional)
     * @param  string $sorting_column (optional)
     * @param  object $sorting_direction (optional)
     *
     * @throws \SiSu\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SiSu\Client\Model\InlineResponse200|\SiSu\Client\Model\InlineResponse400, HTTP status code, HTTP response headers (array of strings)
     */
    public function listProductsWithHttpInfo($page, $per_page, $categories = null, $countries = null, $product_types = null, $integration_type = null, $sorting_column = null, $sorting_direction = null)
    {
        $request = $this->listProductsRequest($page, $per_page, $categories, $countries, $product_types, $integration_type, $sorting_column, $sorting_direction);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
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
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\SiSu\Client\Model\InlineResponse200' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SiSu\Client\Model\InlineResponse200', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\SiSu\Client\Model\InlineResponse400' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SiSu\Client\Model\InlineResponse400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SiSu\Client\Model\InlineResponse200';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\SiSu\Client\Model\InlineResponse200',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SiSu\Client\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listProductsAsync
     *
     *
     *
     * @param  int $page (required)
     * @param  int $per_page (required)
     * @param  string[] $categories (optional)
     * @param  string[] $countries (optional)
     * @param  string[] $product_types (optional)
     * @param  string $integration_type (optional)
     * @param  string $sorting_column (optional)
     * @param  object $sorting_direction (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listProductsAsync($page, $per_page, $categories = null, $countries = null, $product_types = null, $integration_type = null, $sorting_column = null, $sorting_direction = null)
    {
        return $this->listProductsAsyncWithHttpInfo($page, $per_page, $categories, $countries, $product_types, $integration_type, $sorting_column, $sorting_direction)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listProductsAsyncWithHttpInfo
     *
     *
     *
     * @param  int $page (required)
     * @param  int $per_page (required)
     * @param  string[] $categories (optional)
     * @param  string[] $countries (optional)
     * @param  string[] $product_types (optional)
     * @param  string $integration_type (optional)
     * @param  string $sorting_column (optional)
     * @param  object $sorting_direction (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listProductsAsyncWithHttpInfo($page, $per_page, $categories = null, $countries = null, $product_types = null, $integration_type = null, $sorting_column = null, $sorting_direction = null)
    {
        $returnType = '\SiSu\Client\Model\InlineResponse200';
        $request = $this->listProductsRequest($page, $per_page, $categories, $countries, $product_types, $integration_type, $sorting_column, $sorting_direction);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listProducts'
     *
     * @param  int $page (required)
     * @param  int $per_page (required)
     * @param  string[] $categories (optional)
     * @param  string[] $countries (optional)
     * @param  string[] $product_types (optional)
     * @param  string $integration_type (optional)
     * @param  string $sorting_column (optional)
     * @param  object $sorting_direction (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listProductsRequest($page, $per_page, $categories = null, $countries = null, $product_types = null, $integration_type = null, $sorting_column = null, $sorting_direction = null)
    {
        // verify the required parameter 'page' is set
        if ($page === null || (is_array($page) && count($page) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $page when calling listProducts'
            );
        }
        if ($page > 1000000) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling ProductApi.listProducts, must be smaller than or equal to 1000000.');
        }
        if ($page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling ProductApi.listProducts, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'per_page' is set
        if ($per_page === null || (is_array($per_page) && count($per_page) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $per_page when calling listProducts'
            );
        }
        if ($per_page > 1000000) {
            throw new \InvalidArgumentException('invalid value for "$per_page" when calling ProductApi.listProducts, must be smaller than or equal to 1000000.');
        }
        if ($per_page < 1) {
            throw new \InvalidArgumentException('invalid value for "$per_page" when calling ProductApi.listProducts, must be bigger than or equal to 1.');
        }


        $resourcePath = '/products';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($categories !== null) {
            if('form' === 'form' && is_array($categories)) {
                foreach($categories as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['categories'] = $categories;
            }
        }
        // query params
        if ($countries !== null) {
            if('form' === 'form' && is_array($countries)) {
                foreach($countries as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['countries'] = $countries;
            }
        }
        // query params
        if ($product_types !== null) {
            if('form' === 'form' && is_array($product_types)) {
                foreach($product_types as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_types'] = $product_types;
            }
        }
        // query params
        if ($integration_type !== null) {
            if('form' === 'form' && is_array($integration_type)) {
                foreach($integration_type as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['integration_type'] = $integration_type;
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
        if ($sorting_column !== null) {
            if('form' === 'form' && is_array($sorting_column)) {
                foreach($sorting_column as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['sorting_column'] = $sorting_column;
            }
        }
        // query params
        if ($sorting_direction !== null) {
            if('form' === 'form' && is_array($sorting_direction)) {
                foreach($sorting_direction as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['sorting_direction'] = $sorting_direction;
            }
        }



        // body params
        $_tempBody = null;

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
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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
