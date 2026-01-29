<?php

require_once "PaymentGateWayInterface.php";

class PayPalPaymentGateway implements PaymentGatewayInterface
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} payment processed by Paypal";
    }
}