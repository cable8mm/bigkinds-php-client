<?php

namespace Cable8mm\BigkindsPhpClient\Argument;

class SearchNewsArgument extends Argument
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
        'subject_info'       => 'array',
        'subject_info1'      => 'array',
        'subject_info2'      => 'array',
        'subject_info3'      => 'array',
        'subject_info4'      => 'array',
        'sort'               => 'array',
        'hilight'            => 'int',
        'return_from'        => 'int',
        'return_size'        => 'int',
        'fields'             => 'array',
    ];

    /**
     * {inheritance}.
     */
    protected function default(): array
    {
        // via guide
        return [
            'query'        => '서비스 AND 출시',
            'published_at' => [
                'from'  => date('Y-m-d', strtotime('-1 week')),
                'until' => date('Y-m-d'),
            ],
            'provider'          => ['경향신문'],
            'category'          => ['정치>정치일반', 'IT_과학'],
            'category_incident' => ['범죄', '교통사고', '재해>자연재해'],
            'byline'            => '',
            'provider_subject'  => ['경제', '부동산'],
            'sort'              => ['date' => 'desc'],
            'hilight'           => 200,
            'return_from'       => 0,
            'return_size'       => 5,
            'fields'            => [
                'byline',
                'category',
                'category_incident',
                'provider_news_id',
            ],
        ];
    }
}
