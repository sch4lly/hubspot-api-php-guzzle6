<?php
/**
 * GDPRApi
 * PHP version 7.3
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Contacts
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Contacts
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Contacts\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use HubSpot\Client\Crm\Contacts\ApiException;
use HubSpot\Client\Crm\Contacts\Configuration;
use HubSpot\Client\Crm\Contacts\HeaderSelector;
use HubSpot\Client\Crm\Contacts\ObjectSerializer;

/**
 * GDPRApi Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Contacts
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GDPRApi
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
     * Operation postCrmV3ObjectsContactsGdprDelete
     *
     * GDPR DELETE
     *
     * @param  \HubSpot\Client\Crm\Contacts\Model\PublicGdprDeleteInput $public_gdpr_delete_input public_gdpr_delete_input (required)
     *
     * @throws \HubSpot\Client\Crm\Contacts\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function postCrmV3ObjectsContactsGdprDelete($public_gdpr_delete_input)
    {
        $this->postCrmV3ObjectsContactsGdprDeleteWithHttpInfo($public_gdpr_delete_input);
    }

    /**
     * Operation postCrmV3ObjectsContactsGdprDeleteWithHttpInfo
     *
     * GDPR DELETE
     *
     * @param  \HubSpot\Client\Crm\Contacts\Model\PublicGdprDeleteInput $public_gdpr_delete_input (required)
     *
     * @throws \HubSpot\Client\Crm\Contacts\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function postCrmV3ObjectsContactsGdprDeleteWithHttpInfo($public_gdpr_delete_input)
    {
        $request = $this->postCrmV3ObjectsContactsGdprDeleteRequest($public_gdpr_delete_input);

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
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HubSpot\Client\Crm\Contacts\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postCrmV3ObjectsContactsGdprDeleteAsync
     *
     * GDPR DELETE
     *
     * @param  \HubSpot\Client\Crm\Contacts\Model\PublicGdprDeleteInput $public_gdpr_delete_input (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postCrmV3ObjectsContactsGdprDeleteAsync($public_gdpr_delete_input)
    {
        return $this->postCrmV3ObjectsContactsGdprDeleteAsyncWithHttpInfo($public_gdpr_delete_input)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postCrmV3ObjectsContactsGdprDeleteAsyncWithHttpInfo
     *
     * GDPR DELETE
     *
     * @param  \HubSpot\Client\Crm\Contacts\Model\PublicGdprDeleteInput $public_gdpr_delete_input (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postCrmV3ObjectsContactsGdprDeleteAsyncWithHttpInfo($public_gdpr_delete_input)
    {
        $returnType = '';
        $request = $this->postCrmV3ObjectsContactsGdprDeleteRequest($public_gdpr_delete_input);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'postCrmV3ObjectsContactsGdprDelete'
     *
     * @param  \HubSpot\Client\Crm\Contacts\Model\PublicGdprDeleteInput $public_gdpr_delete_input (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function postCrmV3ObjectsContactsGdprDeleteRequest($public_gdpr_delete_input)
    {
        // verify the required parameter 'public_gdpr_delete_input' is set
        if ($public_gdpr_delete_input === null || (is_array($public_gdpr_delete_input) && count($public_gdpr_delete_input) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $public_gdpr_delete_input when calling postCrmV3ObjectsContactsGdprDelete'
            );
        }

        $resourcePath = '/crm/v3/objects/contacts/gdpr-delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($public_gdpr_delete_input)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($public_gdpr_delete_input));
            } else {
                $httpBody = $public_gdpr_delete_input;
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('hapikey');
        if ($apiKey !== null) {
            $queryParams['hapikey'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
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
