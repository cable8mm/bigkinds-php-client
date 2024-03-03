<?php

namespace Cable8mm\BigkindsPhpClient\Codetable;

class Codetable
{
    /**
     * Codetable version from Codetable interface class.
     *
     * @var string
     */
    protected static $version;

    /**
     * Codetable data from Codetable interface class.
     *
     * @var array
     */
    protected static $codes;

    public function __construct(array $codes = [])
    {
        if (empty($codes)) {
            return;
        }

        static::$codes = array_merge(
            static::$codes,
            $codes
        );
    }

    /**
     * Get a string containing the version of the category.
     *
     * @return string
     */
    public function getCodetableVersion()
    {
        return static::$version;
    }

    /**
     * Output codetables.
     *
     * @return array
     */
    public function getAll()
    {
        return static::$codes;
    }
}
