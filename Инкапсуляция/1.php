<?php
class BankAccount {
    private $accountNumber;
    private $balance;
    public function __construct($accountNumber, $balance = 0) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }
    // Метод для внесения средств на счёт
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }
    // Метод для снятия средств со счёта
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }
    // Геттер для баланса
    public function getBalance() {
        return $this->balance;
    }
}
// Тестирование
$account = new BankAccount("123456789", 1000);
$account->deposit(500);
echo "Баланс после депозита: " . $account->getBalance(); // 1500
$account->withdraw(200);
echo "\nБаланс после снятия: " . $account->getBalance(); // 1300
?>