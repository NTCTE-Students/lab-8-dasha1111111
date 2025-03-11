<?php
class SessionManager {
    private $sessionData = [];
    // Метод для старта сессии
    public function startSession() {
        session_start();
    }
    // Метод для сохранения данных в сессии
    public function set($key, $value) {
        $this->sessionData[$key] = $value;
        $_SESSION[$key] = $value; // Сохраняем в $_SESSION
    }
    // Метод для получения данных из сессии
    public function get($key) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }
    // Метод для удаления данных из сессии
    public function delete($key) {
        unset($_SESSION[$key]);
    }
    // Метод для завершения сессии
    public function endSession() {
        session_destroy();
    }
}
// Тестирование
$sessionManager = new SessionManager();
$sessionManager->startSession();
$sessionManager->set("user", "john_doe");
echo "Сессия для пользователя: " . $sessionManager->get("user"); // john_doe
$sessionManager->delete("user");
echo "\nСессия удалена, пользователь: " . $sessionManager->get("user"); // null
?>