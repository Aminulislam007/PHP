<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- protected
    <?php
    class Animal {
    protected function sound() {
        echo "Animal sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        $this->sound();
    }
}

$obj = new Dog();
$obj->makeSound();  
$obj->sound();     
 ?> -->
 <!-- protected -->
 <?php
 class Vehicle {
    protected $engine = "V8";

    protected function startEngine() {
        echo "Engine started: $this->engine";
    }
}

class Car extends Vehicle {
    public function drive() {
        $this->startEngine(); 
    }
}

$obj = new Car();
$obj->drive();      
$obj->startEngine();
 ?>
</body>
</html>