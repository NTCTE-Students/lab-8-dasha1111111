<?php
class Animal {
    public function eat() {
        echo "The animal is eating.<br>";
    }
    public function sleep() {
        echo "The animal is sleeping.<br>";
    }
}
class Bird extends Animal {
    public function fly() {
        echo "The bird is flying.<br>";
    }
}
class Fish extends Animal {
    public function swim() {
        echo "The fish is swimming.<br>";
    }
}
class Mammal extends Animal {
    public function walk() {
        echo "The mammal is walking.<br>";
    }
}
// Пример использования
$bird = new Bird();
$bird->eat();
$bird->fly();

$fish = new Fish();
$fish->eat();
$fish->swim();

$mammal = new Mammal();
$mammal->eat();
$mammal->walk();
?>