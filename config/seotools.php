<?php

return [
    'inertia' => env('SEO_TOOLS_INERTIA', false),
    'meta' => [
        'defaults' => [
            'title'        => 'The Musings of a Bibliophile',
            'titleBefore'  => false,
            'description'  => 'Honest, passionate book reviews, Wizard of Oz collectibles, and a welcoming community for readers who love beautiful stories.',
            'separator'    => ' — ',
            'keywords'     => ['book reviews', 'bibliophile', 'wizard of oz collectibles', 'book blog', 'reading community', 'pango books'],
            'canonical'    => 'full',
            'robots'       => 'all',
        ],
        'webmaster_tags' => [
            'google'    => env('GOOGLE_VERIFICATION', null),
            'bing'      => env('BING_VERIFICATION', null),
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],
        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        'defaults' => [
            'title'       => 'The Musings of a Bibliophile',
            'description' => 'Honest, passionate book reviews, Wizard of Oz collectibles, and a welcoming community for readers who love beautiful stories.',
            'url'         => null,
            'type'        => 'website',
            'site_name'   => 'The Musings of a Bibliophile',
            'images'      => [env('APP_URL') . '/images/og-default.jpg'],
        ],
    ],
    'twitter' => [
        'defaults' => [
            'card'    => 'summary_large_image',
            //'site'  => '@yourhandle',
        ],
    ],
    'json-ld' => [
        'defaults' => [
            'title'       => 'The Musings of a Bibliophile',
            'description' => 'Honest, passionate book reviews, Wizard of Oz collectibles, and a welcoming community for readers who love beautiful stories.',
            'url'         => null,
            'type'        => 'WebSite',
            'images'      => [env('APP_URL') . '/images/og-default.jpg'],
        ],
    ],
];
