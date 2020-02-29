<?php

namespace Satupersen\Support\Facades;

/**
 * @method static \Satupersen\Redis\Connections\Connection connection(string $name = null)
 *
 * @see \Satupersen\Redis\RedisManager
 * @see \Satupersen\Contracts\Redis\Factory
 */
class Redis extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'redis';
    }
}
