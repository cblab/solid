<?php
namespace Acme;

interface iPaymentMethodInterface {
    public function acceptPayment($receipt);
}

class CashPaymentMethod implements iPaymentMethodInterface {
    public function acceptPayment($receipt)
    {
        // TODO: Implement acceptPayment() method.
    }
}

class BitCoinPaymentMethod implements iPaymentMethodInterface {
    public function acceptPayment($receipt)
    {
        // TODO: Implement acceptPayment() method.
    }
}

class Checkout {
    public function begin(Receipt $receipt, iPaymentMethodInterface $payment) {
        $payment->acceptPayment($receipt);
    }
}
