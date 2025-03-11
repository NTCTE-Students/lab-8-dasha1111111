<?php
class Device {
    public $brand;
    public $model;
    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }
    public function getInfo() {
        return "{$this->brand} {$this->model}";
    }
}
class Smartphone extends Device {
    public function call() {
        echo "Making a call from {$this->model}...<br>";
    }
}
class Laptop extends Device {
    public function browse() {
        echo "Browsing the internet on {$this->model}...<br>";
    }
}
class Tablet extends Device {
    public function draw() {
        echo "Drawing on {$this->model} tablet...<br>";
    }
}
// Пример использования
$smartphone = new Smartphone("Apple", "iPhone 13");
echo $smartphone->getInfo() . "<br>";
$smartphone->call();

$laptop = new Laptop("Dell", "XPS 13");
echo $laptop->getInfo() . "<br>";
$laptop->browse();

$tablet = new Tablet("Samsung", "Galaxy Tab S7");
echo $tablet->getInfo() . "<br>";
$tablet->draw();
?>