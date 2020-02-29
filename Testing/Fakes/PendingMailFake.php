<?php

namespace Satupersen\Support\Testing\Fakes;

use Satupersen\Contracts\Mail\Mailable;
use Satupersen\Mail\PendingMail;

class PendingMailFake extends PendingMail
{
    /**
     * Create a new instance.
     *
     * @param  \Satupersen\Support\Testing\Fakes\MailFake  $mailer
     * @return void
     */
    public function __construct($mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Send a new mailable message instance.
     *
     * @param  \Satupersen\Contracts\Mail\Mailable  $mailable;
     * @return mixed
     */
    public function send(Mailable $mailable)
    {
        return $this->sendNow($mailable);
    }

    /**
     * Send a mailable message immediately.
     *
     * @param  \Satupersen\Contracts\Mail\Mailable  $mailable;
     * @return mixed
     */
    public function sendNow(Mailable $mailable)
    {
        $this->mailer->send($this->fill($mailable));
    }

    /**
     * Push the given mailable onto the queue.
     *
     * @param  \Satupersen\Contracts\Mail\Mailable  $mailable;
     * @return mixed
     */
    public function queue(Mailable $mailable)
    {
        return $this->mailer->queue($this->fill($mailable));
    }
}
