<?php

namespace Cable8mm\BigkindsPhpClient;

class Big
{
    /**
     * Big::kinds Facade
     *
     * @param string $method
     * @param array $options
     * @return array
     */
    public static function kinds(string $method, $options = [])
    {
        $bigkinds = new BigkindsClient();
        $response = $bigkinds->request($method, $options);

        return $response;
    }
}
