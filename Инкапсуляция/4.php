<?php
class Counter {
    private $count;
    public function __construct($initialCount = 0) {
        $this->count = $initialCount;
    }
    // Метод для увеличения счётчика
    public function increment() {
        $this->count++;
    }
    // Метод для уменьшения счётчика (не ниже нуля)
    public function decrement() {
        if ($this->count > 0) {
            $this->count--;
        }
    }
    // Метод для получения текущего значения счётчика
    public function getCount() {
        return $this->count;
    }
}
// Тестирование
$counter = new Counter();
$counter->increment();
echo "Счётчик после увеличения: " . $counter->getCount(); // 1
$counter->decrement();
echo "\nСчётчик после уменьшения: " . $counter->getCount(); // 0
$counter->decrement(); // Не уменьшится ниже 0
echo "\nСчётчик после попытки уменьшить ниже 0: " . $counter->getCount(); // 0
?>