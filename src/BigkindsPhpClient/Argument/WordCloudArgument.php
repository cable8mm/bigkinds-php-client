<?php

namespace Cable8mm\BigkindsPhpClient\Argument;

class WordCloudArgument extends Argument
{
    /**
     *{inheritance}.
     */
    protected static $allowed_and_casts = [
        'query'              => 'text',
        'published_at.from'  => 'date',
        'published_at.until' => 'date',
        'provider'           => 'array',
        'category'           => 'array',
        'category_incident'  => 'array',
        'byline'             => 'text',
        'provider_subject'   => 'array',
    ];

    /**
     * {inheritance}.
     */
    protected function default(): array
    {
        // via guide
        return [
            'query'        => '청와대',
            'published_at' => [
                'from'  => date('Y-m-d', strtotime('-1 week')),
                'until' => date('Y-m-d'),
            ],
            'provider'          => ['경향신문'],
            'category'          => ['정치>정치일반', '스포츠일반'],
            'category_incident' => ['범죄', '교통사고'],
            'provider_subject'  => ['사회'],
        ];
    }
}
