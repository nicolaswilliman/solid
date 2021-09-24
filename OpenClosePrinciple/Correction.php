<?php

interface PayableInterface
{
    public function pay();
}

class CreditPayment implements PayableInterface
{
    public function pay()
    {
        // process credit card payment
    }
}

class PaypalPayment implements PayableInterface
{
    public function pay()
    {
        // process paypal payment
    }
}

class MercadoPagoPayment implements PayableInterface
{
    public function pay()
    {
        // process mercado pago payment
    }
}

class PaymentFactory
{
    public function initializePayment($type): PayableInterface
    {
        if ($type === 'credit') {
            return new CreditPayment;
        } elseif ($type === 'paypal') {
            return new PaypalPayment;
        } elseif ($type === 'mercadopago') {
            return new MercadoPagoPayment;
        }
    }
}



class PaymentController
{
    public function pay(Request $request, PaymentFactory $paymentFactory)
    {
        $payment = $paymentFactory->initializePayment($request->type);
        $payment->pay();
    }
}
