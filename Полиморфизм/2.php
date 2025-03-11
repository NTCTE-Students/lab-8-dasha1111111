<?php
abstract class Payment {
    abstract public function process();
}
class CreditCardPayment extends Payment {
    public function process() {
        echo "Оплата через кредитную карту.<br>";
    }
}
class PayPalPayment extends Payment {
    public function process() {
        echo "Оплата через PayPal.<br>";
    }
}
class BankTransferPayment extends Payment {
    public function process() {
        echo "Оплата через банковский перевод.<br>";
    }
}
// Тестирование
$creditCardPayment = new CreditCardPayment();
$payPalPayment = new PayPalPayment();
$bankTransferPayment = new BankTransferPayment();

$creditCardPayment->process(); // Оплата через кредитную карту
$payPalPayment->process();    // Оплата через PayPal
$bankTransferPayment->process(); // Оплата через банковский перевод
?>