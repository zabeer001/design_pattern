<?php
require_once('PaymentMethod.php');

class NagadPaymentMethod implements PaymentMethod
{
    public function process(float $amount)
    {
        echo 'Processing Nagad payment of ' . $amount . PHP_EOL;
    }
}
