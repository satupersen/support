<?php

namespace Satupersen\Support\Facades;

use Satupersen\Contracts\Broadcasting\Factory as BroadcastingFactoryContract;

/**
 * @method static void connection($name = null);
 * @method static \Satupersen\Broadcasting\Broadcasters\Broadcaster channel(string $channel, callable|string  $callback, array $options = [])
 * @method static mixed auth(\Satupersen\Http\Request $request)
 * @method static void routes()
 *
 * @see \Satupersen\Contracts\Broadcasting\Factory
 */
class Broadcast extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BroadcastingFactoryContract::class;
    }
}
