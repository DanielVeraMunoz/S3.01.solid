<?php

require_once "BankTransferPaymentGateway.php";
require_once "PaypalPaymentGateway.php";
require_once "StripePaymentGateway.php";

class PaymentProcessor
{
    protected PaymentGatewayInterface $gateway;


    public function __construct(PaymentGatewayInterface $gateway){
        
        $this->gateway=$gateway;
    }

    

    
    public function paymentProcess(float $amount): string
    {
        return $this->gateway->sendPayment($amount);
    }
}