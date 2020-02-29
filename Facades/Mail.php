<?php

namespace Satupersen\Support\Facades;

use Satupersen\Support\Testing\Fakes\MailFake;

/**
 * @method static \Satupersen\Mail\PendingMail to($users)
 * @method static \Satupersen\Mail\PendingMail bcc($users)
 * @method static void raw(string $text, $callback)
 * @method static void send(\Satupersen\Contracts\Mail\Mailable|string|array $view, array $data = [], \Closure|string $callback = null)
 * @method static array failures()
 * @method static mixed queue(\Satupersen\Contracts\Mail\Mailable|string|array $view, string $queue = null)
 * @method static mixed later(\DateTimeInterface|\DateInterval|int $delay, \Satupersen\Contracts\Mail\Mailable|string|array $view, string $queue = null)
 * @method static void assertSent(string $mailable, callable|int $callback = null)
 * @method static void assertNotSent(string $mailable, callable|int $callback = null)
 * @method static void assertNothingSent()
 * @method static void assertQueued(string $mailable, callable|int $callback = null)
 * @method static void assertNotQueued(string $mailable, callable $callback = null)
 * @method static void assertNothingQueued()
 * @method static \Satupersen\Support\Collection sent(string $mailable, \Closure|string $callback = null)
 * @method static bool hasSent(string $mailable)
 * @method static \Satupersen\Support\Collection queued(string $mailable, \Closure|string $callback = null)
 * @method static bool hasQueued(string $mailable)
 *
 * @see \Satupersen\Mail\Mailer
 * @see \Satupersen\Support\Testing\Fakes\MailFake
 */
class Mail extends Facade
{
    /**
     * Replace the bound instance with a fake.
     *
     * @return \Satupersen\Support\Testing\Fakes\MailFake
     */
    public static function fake()
    {
        static::swap($fake = new MailFake);

        return $fake;
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mail.manager';
    }
}
