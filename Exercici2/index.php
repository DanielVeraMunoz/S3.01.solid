<?php

require_once "BankTransferPaymentGateway.php";
require_once "PaypalPaymentGateway.php";
require_once "StripePaymentGateway.php";
require_once "PaymentProcessor.php";

$stripe = new StripePaymentGateway();
$stripePayment = new PaymentProcessor($stripe);

echo $stripePayment->paymentProcess(150) . "\n";

$paypal = new PayPalPaymentGateway();

$paypalPayment = new PaymentProcessor($paypal);

echo $paypalPayment->paymentProcess(10) . "\n";

$bankTransfer = new BankTransferGateway();

$bankTransferPayment = new PaymentProcessor($bankTransfer);

echo $bankTransferPayment->paymentProcess(9000) . "\n";