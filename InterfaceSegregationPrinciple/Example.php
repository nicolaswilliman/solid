<?php

namespace Examples;

require '../helper.php';

interface Worker
{
    public function work(): void;
    public function eat(): void;
}

class SimpleWorker implements Worker
{
    public function work(): void
    {
        logToConsole('SimpleWorker working');
    }

    public function eat(): void
    {
        logToConsole('SimpleWorker eating');
    }
}

class SuperWorker implements Worker
{
    public function work(): void
    {
        logToConsole('SuperWorker working');
    }

    public function eat(): void
    {
        logToConsole('SuperWorker working');
    }
}

class Robot implements Worker
{
    public function work(): void
    {
        logToConsole('Robot working');
    }

    public function eat(): void
    {
        throw new \Exception("I'm a robot, I can't eat.");
    }
}
