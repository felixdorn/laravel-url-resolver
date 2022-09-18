> Repository has been moved from [laravel-honda/url-resolver](https://github.com/laravel-honda/url-resolver)
> to [felixdorn/laravel-url-resolver](https://github.com/felixdorn/laravel-url-resolver).

# Url Resolver for Laravel

Resolve routes and urls with one function.

[![Tests](https://github.com/felixdorn/laravel-url-resolver/actions/workflows/tests.yml/badge.svg?branch=main)](https://github.com/felixdorn/laravel-url-resolver/actions/workflows/tests.yml)
[![Formats](https://github.com/felixdorn/laravel-url-resolver/actions/workflows/formats.yml/badge.svg?branch=main)](https://github.com/felixdorn/laravel-url-resolver/actions/workflows/formats.yml)
[![Version](https://poser.pugx.org/felixdorn/laravel-url-resolver/version)](//packagist.org/packages/felixdorn/laravel-url-resolver)
[![Total Downloads](https://poser.pugx.org/felixdorn/laravel-url-resolver/downloads)](//packagist.org/packages/felixdorn/laravel-url-resolver)
[![codecov](https://codecov.io/gh/felixdorn/laravel-url-resolver/branch/main/graph/badge.svg?token=Gk6cOXx7R5)](https://codecov.io/gh/felixdorn/laravel-url-resolver)

## Installation

> Supports **PHP 8.0** and **PHP 8.1**.

You can install the package via composer:

```bash
composer require felixdorn/laravel-url-resolver
```

## Usages

```php
use Felix\UrlResolver\UrlResolver;

UrlResolver::guess('welcome', []); 
```

* **The route exists:** `route('...', $context)`
* **The route does not exist:** `url(...')`
* **The "route" is an external URL:** returns it

## Testing

```bash
composer test
```

**Url Resolver for Laravel** was created by [Félix Dorn](https://twitter.com/afelixdorn)  under
the [MIT License](LICENSE.md)
