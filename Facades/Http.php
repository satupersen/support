<?php

namespace Satupersen\Support\Facades;

use Satupersen\Http\Client\Factory;

/**
 * @method static \Satupersen\Http\Client\PendingRequest asJson()
 * @method static \Satupersen\Http\Client\PendingRequest asForm()
 * @method static \Satupersen\Http\Client\PendingRequest attach(string $name, string $contents, string|null $filename = null, array $headers)
 * @method static \Satupersen\Http\Client\PendingRequest asMultipart()
 * @method static \Satupersen\Http\Client\PendingRequest bodyFormat(string $format)
 * @method static \Satupersen\Http\Client\PendingRequest contentType(string $contentType)
 * @method static \Satupersen\Http\Client\PendingRequest acceptJson()
 * @method static \Satupersen\Http\Client\PendingRequest accept(string $contentType)
 * @method static \Satupersen\Http\Client\PendingRequest withHeaders(array $headers)
 * @method static \Satupersen\Http\Client\PendingRequest withBasicAuth(string $username, string $password)
 * @method static \Satupersen\Http\Client\PendingRequest withDigestAuth(string $username, string $password)
 * @method static \Satupersen\Http\Client\PendingRequest withToken(string $token, string $type = 'Bearer')
 * @method static \Satupersen\Http\Client\PendingRequest withCookies(array $cookies)
 * @method static \Satupersen\Http\Client\PendingRequest withoutRedirecting()
 * @method static \Satupersen\Http\Client\PendingRequest withoutVerifying()
 * @method static \Satupersen\Http\Client\PendingRequest timeout(int $seconds)
 * @method static \Satupersen\Http\Client\PendingRequest withOptions(array $options)
 * @method static \Satupersen\Http\Client\PendingRequest beforeSending(callable $callback)
 * @method static \Satupersen\Http\Client\Response get(string $url, array $query = [])
 * @method static \Satupersen\Http\Client\Response post(string $url, array $data = [])
 * @method static \Satupersen\Http\Client\Response patch(string $url, array $data = [])
 * @method static \Satupersen\Http\Client\Response put(string $url, array $data = [])
 * @method static \Satupersen\Http\Client\Response delete(string $url, array $data = [])
 * @method static \Satupersen\Http\Client\Response send(string $method, string $url, array $options = [])
 * @method static \Satupersen\Http\Client\PendingRequest stub(callable $callback)
 * @method static \Satupersen\Http\Client\ResponseSequence fakeSequence(string $urlPattern = '*')
 *
 * @see \Satupersen\Http\Client\Factory
 */
class Http extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Factory::class;
    }
}
