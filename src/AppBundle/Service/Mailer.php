<?php

namespace AppBundle\Service;

class Mailer
{

    private $transport;

    public function __construct($transport)
    {
        $this->transport = $transport;
    }

    // ...
}
