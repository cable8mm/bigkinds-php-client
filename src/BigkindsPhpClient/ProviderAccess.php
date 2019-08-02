<?php

namespace Cable8mm\BigkindsPhpClient;

class ProviderAccess
{
    /**
     * Each Provider
     *
     * @var \Cable8mm\BigkindsPhpClient\Provider
     */
    public $provider;

    public function __construct(IProvider $provider)
    {
        $this->provider = $provider;
    }

    /**
     * Output providers
     *
     * @return array
     */
    public function getAll()
    {
        return $this->provider->getAll();
    }

    /**
     * Get a string containing the version of the category.
     *
     * @return string
     */
    public function getProviderVersion()
    {
        return $this->provider->getProviderVersion();
    }
}
