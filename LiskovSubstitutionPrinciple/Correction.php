<?php

abstract class Bird
{
    public function eat(): void
    {
        echo 'Toy comiendo';
    }
}

abstract class FlyingBird
{
    public function fly(): void
    {
        echo 'Toy volando';
    }
}

class Parrot extends FlyingBird
{
}

class Ostrich extends Bird
{
}
