<?php
trait Validatable {
    public function validate($data) {
        if (empty($data)) {
            return "Поле не может быть пустым.";
        }
        return "Данные валидны.";
    }
}
class RegistrationForm {
    use Validatable;
    private $username;
    public function setUsername($username) {
        $this->username = $username;
        return $this->validate($username);
    }
}
class LoginForm {
    use Validatable;
    private $email;
    public function setEmail($email) {
        $this->email = $email;
        return $this->validate($email);
    }
}
// Тестирование
$registrationForm = new RegistrationForm();
echo $registrationForm->setUsername("") . "<br>"; // Пустое поле

$loginForm = new LoginForm();
echo $loginForm->setEmail("user@example.com") . "<br>"; // Валидные данные
?>