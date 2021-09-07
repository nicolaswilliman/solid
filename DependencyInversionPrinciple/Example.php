<?php

namespace Examples;

class Mailer
{
}

class SendWelcomeMessage
{
    /** @var Mailer */
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}
