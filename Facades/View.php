<?php

namespace Satupersen\Support\Facades;

/**
 * @method static bool exists(string $view)
 * @method static \Satupersen\Contracts\View\View file(string $path, array $data = [], array $mergeData = [])
 * @method static \Satupersen\Contracts\View\View make(string $view, array $data = [], array $mergeData = [])
 * @method static mixed share(array|string $key, $value = null)
 * @method static array composer(array|string $views, \Closure|string $callback)
 * @method static array creator(array|string $views, \Closure|string $callback)
 * @method static \Satupersen\Contracts\View\Factory addNamespace(string $namespace, string|array $hints)
 * @method static \Satupersen\Contracts\View\Factory replaceNamespace(string $namespace, string|array $hints)
 *
 * @see \Satupersen\View\Factory
 */
class View extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'view';
    }
}
