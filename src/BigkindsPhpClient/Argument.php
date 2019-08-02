<?php

namespace Cable8mm\BigkindsPhpClient;

use ArrayHelpers\Arr;

class Argument
{
    /**
     * output = $container->toArray()
     * with all arguments
     *
     * @var array
     */
    private $container = [];

    public function __construct(array $arguments = [])
    {
        $defaults = [
            'query' => '',
            'published_at' => [
                'from' => date('Y-m-d', strtotime('-1 week')),
                'until' => date('Y-m-d')
            ],
            'provider' => [],
            'category' => [],
            'category_incident' => [],
            'byline' => [],
            'provider_subject' => [],
            'subject_info' => [],
            'subject_info1' => [],
            'subject_info2' => [],
            'subject_info3' => [],
            'subject_info4' => [],
            'sort' => ['date' => 'desc'],
            'hilight' => 200,
            'return_from' => 0,
            'return_size' => 5,
            'fields' => [
                'byline',
                'category',
                'category_incident',
                'provider_news_id'
            ],
        ];

        // init
        $this->container = array_merge($defaults, $arguments);
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
