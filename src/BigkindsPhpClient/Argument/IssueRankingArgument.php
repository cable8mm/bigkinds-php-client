<?php

namespace Cable8mm\BigkindsPhpClient\Argument;

class IssueRankingArgument extends Argument
{
    /**
     *{inheritance}
     */
    protected static $allowed_and_casts = [
        'date' => 'date',
        'provider_subject' => 'array',
    ];

    /**
     * {inheritance}
     */
    protected function default(): array
    {
        // via guide
        return [
            'date' => date('Y-m-d', strtotime('-1 week')),
        ];
    }
}
