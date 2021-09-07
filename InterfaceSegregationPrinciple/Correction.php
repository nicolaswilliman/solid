<?php

namespace Corrections;

require '../helper.php';

interface Workable
{
    public function work(): void;
}

interface Feedable
{
    public function eat(): void;
}

class SimpleWorker implements Workable, Feedable
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

class SuperWorker implements Workable, Feedable
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

class Robot implements Workable
{
    public function work(): void
    {
        logToConsole('Robot working');
    }
}
