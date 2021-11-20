# Laravel Environment Documentator

This package provides generate documentation about your app environment.

## &radic; Installation

Run commands:

* `composer require --dev artarts36/laravel-env-documentator`
* `php artisan vendor:publish --provider="ArtARTs36\LaravelEnvDocumentator\Providers\EnvDocumentatorServiceProvider" --tag=config`

## &#9734; Examples

This package provides one console command.

### &raquo; Use in Local

Run command for generate by default (.env.example): `php artisan env:doc docs/environment.md`

Or: `php artisan env:doc docs/environment.md --env-path=specify.env`

### &raquo; Use in CI

Setup git settings in config file `env_documentator.php`

Run command for generate by default (.env.example): `php artisan env:doc docs/environment.md --ci`

Or: `php artisan env:doc docs/environment.md --env-path=specify.env --ci`
