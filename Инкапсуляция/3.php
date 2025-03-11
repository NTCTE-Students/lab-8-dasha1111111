<?php
class Thermostat {
    private $temperature;
    public function __construct($initialTemp = 20) {
        $this->setTemperature($initialTemp);
    }
    // Метод для установки температуры с проверкой диапазона
    public function setTemperature($temperature) {
        if ($temperature >= 10 && $temperature <= 30) {
            $this->temperature = $temperature;
        } else {
            echo "Температура вне допустимого диапазона!";
        }
    }
    // Метод для получения текущей температуры
    public function getTemperature() {
        return $this->temperature;
    }
}
// Тестирование
$thermostat = new Thermostat();
echo "Текущая температура: " . $thermostat->getTemperature(); // 20
$thermostat->setTemperature(25);
echo "\nТемпература после изменения: " . $thermostat->getTemperature(); // 25
$thermostat->setTemperature(35); // Температура вне допустимого диапазона!
?>