<?php

namespace Corrections;

require '../helper.php';

interface ClientType
{
    public function getDiscount(float $amount): float;
}

class SeniorClient implements ClientType
{
    public function getDiscount(float $amount): float
    {
        return $amount * 0.25;
    }
}

class PregnantClient implements ClientType
{
    public function getDiscount(float $amount): float
    {
        return $amount * 0.15;
    }
}

class Checkout
{
    public function getTotalToPay(float $amount, ClientType $clientType): float
    {
        $discount = $clientType->getDiscount($amount);
        $total = $amount - $discount;
        return $total;
    }
}

$checkout = new Checkout;
logToConsole($checkout->getTotalToPay(100, new SeniorClient));
logToConsole($checkout->getTotalToPay(100, new PregnantClient));
