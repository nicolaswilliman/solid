<?php

abstract class Bird
{
    public function fly(): void
    {
        echo 'Estoy volando!';
    }

    public function eat(): void
    {
        echo 'Estoy comiendo!';
    }
}

class Parrot extends Bird
{

}

class Ostrich extends Bird
{
    public function fly(): void
    {
        throw new Exception('Soy un avestruz, no puedo volar :(');
    }
}

$birds = [
    new Parrot,
    new Ostrich,
];

foreach ($birds as $bird) {
    $bird->fly();
}
