<?php

namespace AppBundle\Service;

class NewsletterManager
{

    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function getNumber()
    {
        return 100;
    }

    // ...
}
