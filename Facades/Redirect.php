<?php

namespace Satupersen\Support\Facades;

/**
 * @method static \Satupersen\Http\RedirectResponse home(int $status = 302)
 * @method static \Satupersen\Http\RedirectResponse back(int $status = 302, array $headers = [], $fallback = false)
 * @method static \Satupersen\Http\RedirectResponse refresh(int $status = 302, array $headers = [])
 * @method static \Satupersen\Http\RedirectResponse guest(string $path, int $status = 302, array $headers = [], bool $secure = null)
 * @method static \Satupersen\Http\RedirectResponse intended(string $default = '/', int $status = 302, array $headers = [], bool $secure = null)
 * @method static \Satupersen\Http\RedirectResponse to(string $path, int $status = 302, array $headers = [], bool $secure = null)
 * @method static \Satupersen\Http\RedirectResponse away(string $path, int $status = 302, array $headers = [])
 * @method static \Satupersen\Http\RedirectResponse secure(string $path, int $status = 302, array $headers = [])
 * @method static \Satupersen\Http\RedirectResponse route(string $route, array $parameters = [], int $status = 302, array $headers = [])
 * @method static \Satupersen\Http\RedirectResponse action(string $action, array $parameters = [], int $status = 302, array $headers = [])
 * @method static \Satupersen\Routing\UrlGenerator getUrlGenerator()
 * @method static void setSession(\Satupersen\Session\Store $session)
 *
 * @see \Satupersen\Routing\Redirector
 */
class Redirect extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'redirect';
    }
}
