<?php

namespace Cable8mm\BigkindsPhpClient;

class Provider
{
    /**
     * Provider version from Provider interface class | \Cable8mm\BigkindsPhpClient\Providers\Iprovider
     *
     * @var string
     */
    protected static $version;

    /**
     * Provider data from Provider interface class | \Cable8mm\BigkindsPhpClient\Providers\Iprovider
     *
     * @var array
     */
    protected static $providers;

    public function __construct(array $providers = [])
    {
        if (empty($providers)) {
            return;
        }

        static::$providers = array_merge(
            static::$providers,
            $providers
        );
    }

    /**
     * Get a string containing the version of the category.
     *
     * @return string
     */
    public function getProviderVersion()
    {
        return static::$version;
    }

    /**
     * Output providers
     *
     * @return array
     */
    public function getAll()
    {
        return static::$providers;
    }
}
