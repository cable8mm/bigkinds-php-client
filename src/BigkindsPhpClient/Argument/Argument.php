<?php

namespace Cable8mm\BigkindsPhpClient\Argument;

use ArrayHelpers\Arr;
use Cable8mm\BigkindsPhpClient\Exceptions\BigkindsException;

/**
 * Abstract Class
 */
abstract class Argument
{
    abstract protected function default(): array;

    /**
     * Request array
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * Default argument array
     *
     * @var array
     */
    protected static $default_arguments = [];

    /**
     * Allowed key & type || text | int | array | boolean
     *
     * @var array
     */
    protected static $allowed_and_casts = [];

    /**
     * output = $container->toArray()
     * with all arguments
     *
     * @var array
     */
    protected $container = [];

    public function __construct(array $arguments = [])
    {
        // guard
        foreach ($arguments as $field => $argument) {
            // guard allowed keys
            if (!array_key_exists($field, static::$allowed_and_casts)) {
                throw new BigkindsException('Error Not Allowed Argument', 3);
            }

            // guard type
            if (\is_string($field) && !in_array(static::$allowed_and_casts[$field], ['text'])) {
                throw new BigkindsExceptin('Error Not Allowed Argument Type', 4);
            }
        }

//        $this->arguments = array_merge(static::default(), $arguments);
    }

    /**
     * Query
     *
     * @param mixed $column
     * @param string $value
     * @return \Cable8mm\BigkindsPhpClient\Argument
     */
    public function query($column, $value = null)
    {
        if (is_array($column)) {
            foreach ($column as $key => $argument) {
                // query.title, 'Search Query'
                Arr::set($this->container, 'query.' . $key, $argument);
            }
        } else {
            // $column is string || nullable
            if (is_null($value)) {
                Arr::set($this->container, 'query', $column);
            } else {
                Arr::set($this->container, 'query.' . $column, $value);
            }
        }

        return $this;
    }

    /**
     * Query by title
     *
     * @param string $value
     * @return \Cable8mm\BigkindsPhpClient\Argument
     */
    public function queryByTitle($value)
    {
        return $this->query('title', $value);
    }

    /**
     * Query by content
     *
     * @param string $value
     * @return \Cable8mm\BigkindsPhpClient\Argument
     */
    public function queryByContent($value)
    {
        return $this->query('content', $value);
    }

    /**
     * Return argument array
     *
     * @return array
     */
    public function toArray()
    {
        return $this->container;
    }
}
