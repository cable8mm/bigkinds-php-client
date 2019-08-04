<?php

namespace Cable8mm\BigkindsPhpClient\Argument;

class FeatureArgument extends Argument
{
    /**
     * Allowed key & type || text | int | array
     *
     * @var array
     */
    protected static $allowed_and_casts = ['title' => 'text', 'sub_title' => 'text', 'content' => 'text'];

    /**
     * {inheritance}
     */
    protected function default(): array
    {
        return [];
    }
}
