<?php

class Payment
{
	public function payWithCredit()
	{
        // process credit card payment
	}

	public function payWithPaypal()
	{
        // process paypal payment
	}

	public function payWithMercadoPago()
	{
        // process mercado pago payment
	}
}

class PaymentController
{
	public function pay(Request $request)
	{
		$payment = new Payment();

		$type = $request->input('type');

		switch ($type) {
			case 'credit':
				$payment->payWithCredit();
				break;
			case 'paypal':
				$payment->payWithPaypal();
				break;
			case 'mercadopago':
				$payment->payWithMercadoPago();
				break;
		}
	}
}
