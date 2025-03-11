<?php
trait Logger {
    public function log($message) {
        print("Лог: {$message}<br>");
    }
}
class User {
    use Logger;
    private $name;
    public function createUser($name) {
        $this->name = $name;
        // Логируем создание пользователя
        $this->log("Пользователь {$name} создан.");
    }
    public function updateUser($name) {
        $this->name = $name;
        // Логируем обновление пользователя
        $this->log("Пользователь {$name} обновлен.");
    }
}
// Тестирование
$user = new User();
$user->createUser("Иван");
$user->updateUser("Петр");
?>