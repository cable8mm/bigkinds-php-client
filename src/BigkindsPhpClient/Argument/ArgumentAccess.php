<?php

namespace Cable8mm\BigkindsPhpClient\Argument;

use ArrayHelpers\Arr;

class ArgumentAccess
{
    /**
     * output = $container->toArray()
     * with all arguments
     *
     * @var array
     */
    private $container = [];

    /**
     * Undocumented variable
     *
     * @var Cable8mm\BigkindsPhpClient\Argument\Argument
     */
    public $argument;

    public function __construct(Argument $argument)
    {
        $this->argument = $argument;
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
