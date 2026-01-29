<?php 

require_once "PaymentGateWayInterface.php";

class BankTransferGateway implements PaymentGatewayInterface
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} payment processed by bank transfer";
    }
}