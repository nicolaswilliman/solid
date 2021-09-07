<?php

namespace Corrections;

interface Mailer
{
    public function send();
}

class SmtpMailer implements Mailer
{
    public function send()
    {
    }
}

class SendGridMailer implements Mailer
{
    public function send()
    {
    }
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
