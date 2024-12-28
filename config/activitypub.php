<?php

return [
    'actor' => [
        'model' => \App\Models\User::class,
        'map' => [
            'name' => 'name',
            'username' => 'username',
            'summary' => 'bio',
            'url' => 'profile_url',
        ],
    ],
    'activities' => [
        'Note' => [
            'model' => \App\Models\Post::class,
            'map' => [
                'content' => 'content',
                'published' => 'created_at',
            ],
        ],
        'Like' => [
            'model' => \App\Models\Like::class,
            'map' => [
                'object' => 'likeable',
            ],
        ],
    ],
    'federation' => [
        'public_key' => env('ACTIVITYPUB_PUBLIC_KEY', 'storage/activitypub/public_key.txt'),
        'private_key' => env('ACTIVITYPUB_PRIVATE_KEY', 'storage/activitypub/private_key.txt'),
        'max_recipients' => env('ACTIVITYPUB_MAX_RECIPIENTS', 100),
        'max_attachments' => env('ACTIVITYPUB_MAX_ATTACHMENTS', 10),
        'rate_limit' => [
            'attempts' => 30,
            'decay_minutes' => 1,
        ],
        'retry' => [
            'attempts' => 3,
            'delay' => 5,
        ],
    ],
    'domain' => env('ACTIVITYPUB_DOMAIN', 'example.com'),
];
