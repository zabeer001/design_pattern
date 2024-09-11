<?php
require_once('PaymentMethod.php');

class BkashPaymentMethod implements PaymentMethod
{
    public function process(float $amount)
    {
        // todo processing code
        echo 'Bkash payment successful ' . $amount . PHP_EOL;
    }
}
