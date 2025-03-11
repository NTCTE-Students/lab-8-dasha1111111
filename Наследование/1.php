<?php
class Vehicle {
    public $make;
    public $model;
    public $year;
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
    public function getInfo() {
        return "{$this->year} {$this->make} {$this->model}";
    }
}
class Car extends Vehicle {
    public $doors;
    public function __construct($make, $model, $year, $doors) {
        parent::__construct($make, $model, $year);
        $this->doors = $doors;
    }
    public function getInfo() {
        return parent::getInfo() . ", Doors: {$this->doors}";
    }
}
class Bike extends Vehicle {
    public $type;
    public function __construct($make, $model, $year, $type) {
        parent::__construct($make, $model, $year);
        $this->type = $type;
    }
    public function getInfo() {
        return parent::getInfo() . ", Type: {$this->type}";
    }
}
class Truck extends Vehicle {
    public $loadCapacity;
    public function __construct($make, $model, $year, $loadCapacity) {
        parent::__construct($make, $model, $year);
        $this->loadCapacity = $loadCapacity;
    }
    public function getInfo() {
        return parent::getInfo() . ", Load Capacity: {$this->loadCapacity} tons";
    }
}
// Пример использования:
$car = new Car("Toyota", "Corolla", 2020, 4);
$bike = new Bike("Yamaha", "YZF-R1", 2021, "Sport");
$truck = new Truck("Volvo", "FH", 2019, 15);

echo $car->getInfo() . "\n";
echo $bike->getInfo() . "\n";
echo $truck->getInfo() . "\n";
?>
