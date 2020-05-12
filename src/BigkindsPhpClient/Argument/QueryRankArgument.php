<?php

namespace Cable8mm\BigkindsPhpClient\Argument;

class QueryRankArgument extends Argument
{
    /**
     * Allowed key & type || text | int | array.
     *
     * @var array
     */
    protected static $allowed_and_casts = [
        'from' => 'date',
        'until' => 'date',
        'offset' => 'int',
        'target_access_key' => 'text',
    ];

    /**
     * {inheritance}.
     */
    protected function default(): array
    {
        return [
            'from' => date('Y-m-d', strtotime('-1 week')),
            'until' => date('Y-m-d'),
            'offset' => 5,
        ];
    }
}
