class Vehicle {
    public function start() {
        echo "Vehicle started";
    }
}

class Bike extends Vehicle {
    public function ride() {
        echo "Bike is being ridden";
    }
}

$bike = new Bike();
$bike->start(); // Inherited method
$bike->ride();  // Own method
