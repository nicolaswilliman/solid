<?php

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
			case 'cash':
				$payment->payWithCash();
			case 'mercadopago':
				$payment->payWithMercadoPago();
				break;
		}
	}
}