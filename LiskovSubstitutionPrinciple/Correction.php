<?php

abstract class Bird
{
    public function eat(): void
    {
        echo 'Estoy comiendo!';
    }
}

abstract class FlyingBird extends Bird
{
    public function fly(): void
    {
        echo 'Estoy volando!';
    }
}

class Parrot extends FlyingBird
{
}

class Ostrich extends Bird
{
}
