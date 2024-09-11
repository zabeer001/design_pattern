<?php
require_once('PaymentMethodFactory.php'); // Ensure the factory is included

class Payment
{
    // This method handles the payment button click
    public function handlePaymentButtonClick(string $paymentType, float $amount)
    {
        try {
            // Create a new instance of the PaymentMethodFactory
            $factory = new PaymentMethodFactory();

            // Get the appropriate payment method based on the payment type (e.g., 'bkash', 'paypal', 'visa')
            $paymentMethod = $factory->getPaymentMethod($paymentType);

            // Process the payment with the given amount
            $paymentMethod->process($amount);

        } catch (Exception $e) {
            // Handle any exceptions, such as unsupported payment methods
            echo 'Error: ' . $e->getMessage();
        }
    }
}

