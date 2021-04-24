<?php

require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';


$tornado = new Bicycle('white', 1);
echo $tornado->forward();
var_dump($tornado);

$springfieldPolice = new Car('black', 5, 'fuel');
echo $springfieldPolice->forward();
var_dump($springfieldPolice);

$jammy = new Truck('black', 2, 'fuel', 100);
echo $jammy->forward();
var_dump($jammy);

echo $jammy->brake();
echo"<br>";
echo "Capacity: " . $jammy->getStorage();
echo"<br>";
echo "Load:" . $jammy->getLoad();
echo"<br>";
echo $jammy->isFull();
echo"<br>";
var_dump($jammy);

$jammy->setLoad(100);
echo "New load: " . $jammy->getLoad();
echo"<br>";
echo $jammy->isFull();
var_dump($jammy);

$street = new PedestrianWay();
$street->addVehicle($tornado);
var_dump($street);die;
var_dump($street->getCurrentVehicles());