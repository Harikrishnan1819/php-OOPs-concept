<?php
class Car {
    private $make;   // Private attribute
    private $model;  // Private attribute

    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    public function getMake() {
        return $this->make;
    }

    public function setMake($make) {
        $this->make = $make;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }
}

// Creating an instance of the Car class
$myCar = new Car("Toyota", "Camry");

// Accessing attributes using methods (encapsulation)
echo "Make: " . $myCar->getMake() . "\n";
echo "<br>";
echo "Model: " . $myCar->getModel() . "\n";

// Modifying attributes using methods (encapsulation)
$myCar->setMake("Honda");
$myCar->setModel("Civic");
echo "<br>";
echo "Updated Make: " . $myCar->getMake() . "\n";
echo "<br>";
echo "Updated Model: " . $myCar->getModel() . "\n";
?>