<?php

namespace Cable8mm\BigkindsPhpClient\Argument;

class KeywordArgument extends Argument
{
    /**
     * {inheritance}.
     */
    protected static $allowed_and_casts = [
        'title' => 'text',
        'sub_title' => 'text',
        'content' => 'text'
    ];

    /**
     * {inheritance}.
     */
    protected function default(): array
    {
        return [];
    }
}
