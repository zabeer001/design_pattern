<?php
require_once('PaymentMethod.php');
require_once('BkashPaymentMethod.php');
require_once('NagadPaymentMethod.php');


class PaymentMethodFactory
{
    public function getPaymentMethod($type): PaymentMethod
    {
        // Determine the payment method type and return the appropriate class instance
        switch (strtolower($type)) {
            case 'bkash':
                return new BkashPaymentMethod();
            case 'nagad':
                return new NagadPaymentMethod();
            default:
                throw new Exception("Unsupported payment method: " . $type);
        }
    }
}
?>
