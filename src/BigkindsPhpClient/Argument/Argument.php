<?php

namespace Cable8mm\BigkindsPhpClient\Argument;

use ArrayHelpers\Arr;
use Cable8mm\BigkindsPhpClient\Exceptions\BigkindsInvalidArgumentException;

/**
 * Abstract Class.
 */
abstract class Argument
{
    abstract protected function default(): array;

    /**
     * Request array.
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * Default argument array.
     *
     * @var array
     */
    protected static $default_arguments = [];

    /**
     * Allowed key & type || text | int | array | boolean.
     *
     * @var array
     */
    protected static $allowed_and_casts = [];

    protected static $default_from_type = [
        'text' => '',
        'int' => 0,
        'array' => [''],
        'boolean' => true,
        'date' => '2019-08-05',
    ];

    /**
     * output = $container->toArray()
     * with all arguments.
     *
     * @var array
     */
    protected $container = [];

    public function __construct(array $arguments = [])
    {
        // guard empty
        if (empty(static::$allowed_and_casts)) {
            return;
        }

        $forcedArguments = array_merge(static::default(), $arguments);

        foreach (static::$allowed_and_casts as $key => $type) {
            // assign forced(default + arguments) arguments
            Arr::set($this->arguments, $key, static::$default_from_type[$type]);
            if (!is_null($value = Arr::get($forcedArguments, $key))) {
                // guard type
                switch ($type) {
                    case 'text':
                        if (!\is_string($value)) {
                            throw new BigkindsInvalidArgumentException('Error must STRING type', 4);
                        }
                    break;
                    case 'int':
                        if (!\is_int($value)) {
                            throw new BigkindsInvalidArgumentException('Error must INT type', 4);
                        }
                    break;
                    case 'array':
                        if (!\is_array($value)) {
                            throw new BigkindsInvalidArgumentException('Error must ARRAY type (' . $key . ':' . $value . ')', 4);
                        }
                    break;
                    case 'boolean':
                        if (!\is_bool($value)) {
                            throw new BigkindsInvalidArgumentException('Error must BOOLEAN type', 4);
                        }
                    break;
                    case 'date':
                        if (!\preg_match('/^\d\d\d\d\-\d\d\-\d\d$/', $value)) {
                            throw new BigkindsInvalidArgumentException('Error must BOOLEAN type', 4);
                        }
                    break;
                    default:
                        throw new BigkindsInvalidArgumentException('Error wrong type', 4);
                    break;
                }
                // assign user(__construct) arguments
                Arr::set($this->arguments, $key, $value);
            }
        }
    }

    /**
     * Query.
     *
     * @param mixed  $column
     * @param string $value
     *
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
     * Query by title.
     *
     * @param string $value
     *
     * @return \Cable8mm\BigkindsPhpClient\Argument
     */
    public function queryByTitle($value)
    {
        return $this->query('title', $value);
    }

    /**
     * Query by content.
     *
     * @param string $value
     *
     * @return \Cable8mm\BigkindsPhpClient\Argument
     */
    public function queryByContent($value)
    {
        return $this->query('content', $value);
    }

    /**
     * Return argument array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->container;
    }

    /**
     * Output arguments.
     *
     * @return array
     */
    public function getArguments()
    {
        return $this->arguments;
    }
}
