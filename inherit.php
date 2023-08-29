<?php
class Vehicle {
    protected $type;

    public function __construct($type) {
        $this->type = $type;
    }

    public function getInfo() {
        return "This is a ".$this->type. " ";
    }
}

class Car extends Vehicle {
    public function __construct() {
        parent::__construct("car");
    }
}

class Motorcycle extends Vehicle {
    public function __construct() {
        parent::__construct("motorcycle");
    }
}

$car = new Car();
$motorcycle = new Motorcycle();

echo $car->getInfo(); // Output: This is a car.
echo $motorcycle->getInfo(); // Output: This is a motorcycle.
?>