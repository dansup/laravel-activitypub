# a batteries included ActivityPub package for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/dansup/laravel-activitypub.svg?style=flat-square)](https://packagist.org/packages/dansup/laravel-activitypub)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/dansup/laravel-activitypub/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/dansup/laravel-activitypub/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/dansup/laravel-activitypub/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/dansup/laravel-activitypub/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/dansup/laravel-activitypub.svg?style=flat-square)](https://packagist.org/packages/dansup/laravel-activitypub)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require dansup/laravel-activitypub
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-activitypub-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="Dansup\ActivityPub\ActivityPubServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
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
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-activitypub-views"
```

## Usage

1) First, add the ActorTrait to your `User` model.

```php
use Dansup\ActivityPub\Traits\ActorTrait;


class User extends Authenticatable
{
    use ActorTrait;
}
```

2) Configure your ActivityPub mappings in `config/activitypub.php`

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Daniel Supernault](https://github.com/dansup)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
