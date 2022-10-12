<?php

require_once 'Bicycle.php';
$bike = new Bicycle('red', 1);
// var_dump($bike);

$bike->setCurrentSpeed(5);
// var_dump($bike);

// Moving bike
// echo $bike->forward();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow', 1);

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black', 1);

$tornado->forward();


//////////Pour les voitures
require_once 'Car.php';

$audi = new Car('red', 5, 'diesel fuel');
// var_dump($audi);

// Moving car
// echo $audi->forward();
// echo '<br> Vitesse de la voiture : ' . $audi->getCurrentSpeed() . ' km/h' . '<br>';
// echo $audi->brake();
// echo '<br> Vitesse de la voiture : ' . $audi->getCurrentSpeed() . ' km/h' . '<br>';
// echo $audi->brake();



$bicycle = new Bicycle('blue', 1);
// echo $bicycle->forward();
// var_dump($bicycle);

$car = new Car('green', 4, 'electric');
// echo $car->forward();
// var_dump($car);

// var_dump(Car::ALLOWED_ENERGIES);


///////////////////// Challenge POO2 : Truck /////////////////////
require_once 'Truck.php';

$van = new Truck('green', 3, 'fuel', 50);
$van->setCargo(28);
$van->setCurrentSpeed(90);

var_dump($van);
echo $van->isFull() . '<br>';

echo $van->forward();
echo '<br> Vitesse du camion : ' . $van->getCurrentSpeed() . ' km/h' . '<br>';
echo $van->brake();
echo '<br> Vitesse du camion : ' . $van->getCurrentSpeed() . ' km/h' . '<br>';
echo $van->brake();
