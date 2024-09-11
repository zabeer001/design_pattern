<?php
require_once('Payment.php');
//http://localhost/design_pattern/factory/implementation/paymentTest.php

// Create an instance of the Payment class
$payment = new Payment();

// Handle a payment button click for 'bkash' with an amount of 1000
$payment->handlePaymentButtonClick('bkash', 1000); // Outputs: Processing Bkash payment of 1000
