<?php

require_once 'bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';
require_once 'Skateboard.php';


$skate = new Skateboard('red',1);
$test = new PedestrianWay();
$test->addVehicles($skate);
print_r($test);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$car = new Car('blue',4,'electric');
$test2 = new MotorWay();
$test2->addVehicles($car);
print_r($test2);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$truck = new Truck('Black',3,'Diesel',40000);
$test3 = new ResidentialWay();
$test3->addVehicles($truck);
print_r($test3);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$car2= new Car('yellow',6,'Essence');
$test4 = new PedestrianWay();
$test4->addVehicles($car2);
print_r($test4);