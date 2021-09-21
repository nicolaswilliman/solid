<?php

namespace Corrections;

require '../helper.php';

abstract class Bird
{
    public function eat(): void
    {
        logToConsole('Toy comiendo');
    }
}

abstract class FlyingBird
{
    public function fly(): void
    {
        logToConsole('Toy volando');
    }
}

class Parrot extends FlyingBird
{
}

class Ostrich extends Bird
{
}
