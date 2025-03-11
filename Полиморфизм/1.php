<?php
interface Notifier {
    public function send($message);
}
class EmailNotifier implements Notifier {
    public function send($message) {
        print("Отправка email: {$message}<br>");
    }
}
class SMSNotifier implements Notifier {
    public function send($message) {
        print("Отправка SMS: {$message}<br>");
    }
}
class PushNotifier implements Notifier {
    public function send($message) {
        print("Отправка Push уведомления: {$message}<br>");
    }
}
// Тестирование
$emailNotifier = new EmailNotifier();
$smsNotifier = new SMSNotifier();
$pushNotifier = new PushNotifier();

$emailNotifier->send("Здравствуйте, вы получили новый email.");
$smsNotifier->send("Здравствуйте, вам пришло SMS сообщение.");
$pushNotifier->send("У вас новое Push уведомление.");
?>