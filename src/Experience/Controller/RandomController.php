<?php

namespace Experience\Controller;

use Experience\Service\RandomTextGenerator;
use Respect\Rest\Routable;

class RandomController implements Routable
{
    public function get()
    {
        return (new RandomTextGenerator())->generate();
    }
}