<?php
interface PaymentMethod
{
    public function process(float $amount);
}