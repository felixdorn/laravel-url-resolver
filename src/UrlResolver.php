<?php

namespace Felix\UrlResolver;

use Symfony\Component\Routing\Exception\RouteNotFoundException;

class UrlResolver
{
    public static function guess(string $url = '', mixed $context = []): string
    {
        if ($url === '') {
            /* @phpstan-ignore-next-line */
            return url()->current();
        }

        try {
            return route($url, $context);
        } catch (RouteNotFoundException) {
            /** @var string $url */
            $url = url($url);
        }

        return $url;
    }
}
