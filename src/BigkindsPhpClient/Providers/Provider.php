<?php

namespace Cable8mm\BigkindsPhpClient;

class Provider
{
    protected static $version;

    protected static $providers;

    public function __construct(array $providers = [])
    {
        if (empty($providers)) {
            return;
        }

        self::$providers = array_merge(
            self::$providers,
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
