<?php

namespace Cable8mm\BigkindsPhpClient;

/**
 * Facade class for BigkindsClient to be used conveniently.
 */
class Big
{
    /**
     * Big::kinds Facade.
     */
    public static function kinds(string $method, array $options = []): array
    {
        $bigkinds = new BigkindsClient();
        $response = $bigkinds->request($method, $options);

        return $response;
    }
}
