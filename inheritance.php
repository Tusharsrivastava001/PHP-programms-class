<?php
class vehicle{
    public function start(){
        echo "Vehicle started";
    }
};
class Bike extends vehicle{
    public function ride(){
        echo "Bike is being ridden";
    }
};
$bike=new Bike(); // creating the object then acces the methods adn memeber funciton
$bike->start();
$bike->ride();

?>