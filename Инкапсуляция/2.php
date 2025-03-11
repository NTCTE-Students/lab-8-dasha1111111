<?php
class User {
    private $username;
    private $passwordHash;

    public function __construct($username) {
        $this->username = $username;
    }
    // Метод для установки пароля (с хешированием)
    public function setPassword($password) {
        $this->passwordHash = password_hash($password, PASSWORD_DEFAULT);
    }
    // Метод для проверки пароля
    public function checkPassword($password) {
        return password_verify($password, $this->passwordHash);
    }
}
// Тестирование
$user = new User("john_doe");
$user->setPassword("secretpassword");
echo "Пароль верный? " . ($user->checkPassword("secretpassword") ? "Да" : "Нет"); // Да
echo "\nПароль неверный? " . ($user->checkPassword("wrongpassword") ? "Да" : "Нет"); // Нет
?>