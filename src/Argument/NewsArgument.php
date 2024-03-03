<?php

namespace Cable8mm\BigkindsPhpClient\Argument;

class NewsArgument extends Argument
{
    /**
     *{inheritance}.
     */
    protected static $allowed_and_casts = [
        'news_ids' => 'array',
        'fields' => 'array',
    ];

    /**
     * {inheritance}.
     */
    protected function default(): array
    {
        // via guide
        return [
            'news_ids' => ['01500701.2015083110018412570', '01100701.20150826100000152'],
            'fields' => [
                'content',
                'byline',
                'category',
                'category_incident',
                'images',
                'provider_subject',
                'provider_news_id',
                'publisher_code',
            ],
        ];
    }
}
