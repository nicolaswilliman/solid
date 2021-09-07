<?php
require '../helper.php';

class Checkout
{
    const DISCOUNT_SENIOR = 0.25;
    const DISCOUNT_PREGNANT = 0.15;
    const DISCOUNT_VETERAN = 0.10;
    const NO_DISCOUNT = 0;

    public function getTotalToPay(float $amount, string $clientType): float
    {
        if ($clientType === 'senior') {
            $discount = $amount * self::DISCOUNT_SENIOR;
        } elseif ($clientType === 'pregnant') {
            $discount = $amount * self::DISCOUNT_PREGNANT;
            // } elseif ($clientType === 'veteran') {
            //     $discount = $amount  * self::DISCOUNT_VETERAN;
        } else {
            $discount = self::NO_DISCOUNT;
        }
        $total = $amount - $discount;
        return $total;
    }
}

$checkout = new Checkout;
logToConsole($checkout->getTotalToPay(100, 'senior'));
logToConsole($checkout->getTotalToPay(100, 'pregnant'));
logToConsole($checkout->getTotalToPay(100, 'regular'));
