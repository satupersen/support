<?php

namespace Satupersen\Support\Facades;

use Satupersen\Contracts\Bus\Dispatcher as BusDispatcherContract;
use Satupersen\Foundation\Bus\PendingChain;
use Satupersen\Support\Testing\Fakes\BusFake;

/**
 * @method static mixed dispatch($command)
 * @method static mixed dispatchNow($command, $handler = null)
 * @method static bool hasCommandHandler($command)
 * @method static bool|mixed getCommandHandler($command)
 * @method static \Satupersen\Contracts\Bus\Dispatcher pipeThrough(array $pipes)
 * @method static \Satupersen\Contracts\Bus\Dispatcher map(array $map)
 * @method static void assertDispatched(string $command, callable|int $callback = null)
 * @method static void assertDispatchedTimes(string $command, int $times = 1)
 * @method static void assertNotDispatched(string $command, callable|int $callback = null)
 *
 * @see \Satupersen\Contracts\Bus\Dispatcher
 */
class Bus extends Facade
{
    /**
     * Replace the bound instance with a fake.
     *
     * @param  array|string  $jobsToFake
     * @return \Satupersen\Support\Testing\Fakes\BusFake
     */
    public static function fake($jobsToFake = [])
    {
        static::swap($fake = new BusFake(static::getFacadeRoot(), $jobsToFake));

        return $fake;
    }

    /**
     * Dispatch the given chain of jobs.
     *
     * @param  array|mixed  $jobs
     * @return \Satupersen\Foundation\Bus\PendingDispatch
     */
    public static function dispatchChain($jobs)
    {
        $jobs = is_array($jobs) ? $jobs : func_get_args();

        return (new PendingChain(array_shift($jobs), $jobs))
                    ->dispatch();
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BusDispatcherContract::class;
    }
}
