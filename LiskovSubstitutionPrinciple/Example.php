<?php

namespace Examples;

require '../helper.php';

abstract class Bird
{
    public function fly(): void
    {
        logToConsole('Toy volando');
    }

    public function eat(): void
    {
        logToConsole('Toy comiendo');
    }
}

class Parrot extends Bird
{
}

class Ostrich extends Bird
{
    public function fly(): void
    {
        throw new \Exception('Soy un avestruz, no puedo volar :(');
    }
}

$birds = [
    new Parrot,
    new Ostrich,
];

/** @var Bird $bird */
foreach ($birds as $bird) {
    $bird->fly();
}
