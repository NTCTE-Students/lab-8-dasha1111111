<?php
abstract class Order {
    abstract public function calculateTotal();
}
class OnlineOrder extends Order {
    public function calculateTotal() {
        echo "Расчёт общей суммы для онлайн-заказа с учетом скидки.<br>";
    }
}
class StoreOrder extends Order {
    public function calculateTotal() {
        echo "Расчёт общей суммы для заказа в магазине с учетом налога.<br>";
    }
}
class TelephoneOrder extends Order {
    public function calculateTotal() {
        echo "Расчёт общей суммы для телефонного заказа с учетом доставки.<br>";
    }
}
// Тестирование
$onlineOrder = new OnlineOrder();
$storeOrder = new StoreOrder();
$telephoneOrder = new TelephoneOrder();

$onlineOrder->calculateTotal();   // Расчёт общей суммы для онлайн-заказа с учетом скидки
$storeOrder->calculateTotal();    // Расчёт общей суммы для заказа в магазине с учетом налога
$telephoneOrder->calculateTotal(); // Расчёт общей суммы для телефонного заказа с учетом доставки
?>