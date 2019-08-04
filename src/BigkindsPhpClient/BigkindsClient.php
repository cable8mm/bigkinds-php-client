<?php

namespace Cable8mm\BigkindsPhpClient;

use GuzzleHttp\Client;
use Cable8mm\BigkindsPhpClient\Exceptions\BigkindsException;

/**
 * BigkindsClient with http client
 * This class is useful when you request Bigkinds server.
 */
class BigkindsClient
{
    /**
     * BigkindsClient library version
     */
    const LIBVER = '0.1.0';

    /**
     * Test Base Path from Guide
     *
     * @var string
     */
    private static $base_path = 'http://tools.kinds.or.kr:8888/';

    /**
     * Test Access Key from Guide
     *
     * @var string
     */
    private static $access_key = 'd3a10ae3-482c-41d0-9c31-146fe526e04d';

    /**
     * Request Param from Guide
     *
     * @var array
     */
    private $argument = [];

    /**
     * @var GuzzleHttp\ClientInterface
     */
    private $http;

    /**
     * Allowed Keys via __construct()
     *
     * @var array
     */
    private static $configKeys = ['base_path', 'access_key'];

    /**
     * Allowed Method from Guide
     *
     * @var array | key:method name, value:api path
     */
    private static $methods = [
        'search news' => 'search/news',
        'news' => 'search/news',
        'issue ranking' => 'issue_ranking',
        'word cloud' => 'word_cloud',
        'timeline' => 'time_line',
        'query rank' => 'query_rank',
        'search quotation' => 'search/quotation',
        'today_category_keyword' => 'today_category_keyword',
        'feature' => 'feature',
        'keyword' => 'keyword'
    ];

    public function __construct(array $config = [], \GuzzleHttp\Client $http = null)
    {
        if (!empty($config)) {
            foreach ($config as $k => $element) {
                if (\in_array($element, self::$configKeys) != false) {
                    throw new BigkindsException('Error Processing Request', 1);
                }

                self::${$k} = $element;
            }
        }

        $this->http = $http ?? new \GuzzleHttp\Client(['base_uri' => self::$base_path]);
    }

    public function with(string $argumentName, $arguments = [])
    {
        return $this;
    }

    /**
     * @param string $method
     * @param array $query || nullable
     * @return array
     */
    public function request(string $method, array $query = [])
    {
        // guard
        if (!array_key_exists($method, self::$methods)) {
            throw new BigkindsException('Error Not Allowed Method', 2);
        }

        $className = __NAMESPACE__ . '\\Argument\\' . preg_replace('/[ _]/', '', ucwords($method, '_ ')) . 'Argument';

        // guard
        if (!class_exists($className)) {
            throw new BigkindsException('Error Argument not exists', 11);
        }

        $Argument = new $className($query);

        $query = [
            'access_key' => self::$access_key,
            'argument' => $Argument->getArguments()
        ];

        $options = [
            'body' => json_encode($query)
        ];
        print_r(json_encode($query, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        $requestBody = (string)$this->http->request(
            'POST',
            self::$methods[$method],
            $options
        )->getBody();

        return json_decode($requestBody, true);
    }

    /**
     * Get a string containing the version of the library.
     *
     * @return string
     */
    public function getLibraryVersion()
    {
        return self::LIBVER;
    }

    /**
     * Set the Http Client object.
     *
     * @param GuzzleHttp\ClientInterface $http
     * @return void
     */
    public function setHttpClient(ClientInterface $http)
    {
        $this->http = $http;
    }

    /**
     * @return GuzzleHttp\ClientInterface implementation
     */
    public function getHttpClient()
    {
        return $this->http;
    }
}
