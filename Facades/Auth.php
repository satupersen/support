<?php

namespace Satupersen\Support\Facades;

/**
 * @method static mixed guard(string|null $name = null)
 * @method static void shouldUse(string $name);
 * @method static bool check()
 * @method static bool guest()
 * @method static \Satupersen\Contracts\Auth\Authenticatable|null user()
 * @method static int|null id()
 * @method static bool validate(array $credentials = [])
 * @method static void setUser(\Satupersen\Contracts\Auth\Authenticatable $user)
 * @method static bool attempt(array $credentials = [], bool $remember = false)
 * @method static bool once(array $credentials = [])
 * @method static void login(\Satupersen\Contracts\Auth\Authenticatable $user, bool $remember = false)
 * @method static \Satupersen\Contracts\Auth\Authenticatable loginUsingId(mixed $id, bool $remember = false)
 * @method static bool onceUsingId(mixed $id)
 * @method static bool viaRemember()
 * @method static void logout()
 * @method static \Symfony\Component\HttpFoundation\Response|null onceBasic(string $field = 'email',array $extraConditions = [])
 * @method static bool|null logoutOtherDevices(string $password, string $attribute = 'password')
 * @method static \Satupersen\Contracts\Auth\UserProvider|null createUserProvider(string $provider = null)
 * @method static \Satupersen\Auth\AuthManager extend(string $driver, \Closure $callback)
 * @method static \Satupersen\Auth\AuthManager provider(string $name, \Closure $callback)
 *
 * @see \Satupersen\Auth\AuthManager
 * @see \Satupersen\Contracts\Auth\Factory
 * @see \Satupersen\Contracts\Auth\Guard
 * @see \Satupersen\Contracts\Auth\StatefulGuard
 */
class Auth extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'auth';
    }

    /**
     * Register the typical authentication routes for an application.
     *
     * @param  array  $options
     * @return void
     */
    public static function routes(array $options = [])
    {
        static::$app->make('router')->auth($options);
    }
}
