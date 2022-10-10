<?php

require ('Bicycle.php');
require ('car.php');

//////////////////////quête partie bicycle//////////////////////////////////////////////
$bike = new Bicycle('red');

var_dump($bike);

echo "<br>";

$bike->setCurrentSpeed(0);

var_dump($bike);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
echo $bike->brake();


// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('blue');


// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('yellow');


echo $tornado->forward();
echo "<br>";
var_dump($bike);
echo "<br>";
$bike->dump();

//////////////////////quête partie car//////////////////////////////////////////////
echo "<br>";
echo "<br>";
$redCar = new Car('red', 5, 'fuel');

var_dump($redCar);

echo "<br>";
echo "<br>";

echo 'La voiture est de type ' . $redCar->getEnergy() ."<br>";
echo 'Elle a ' . $redCar->getNumberSeat() ." sièges<br>";

echo "<br>";

echo ' => Démarrage de la voiture ! Vitesse : '. $redCar->start() . " km/h<br>";
echo ' => Accélération ! Vitesse :'. $redCar->forward(). " km/h<br>"; 
echo ' => Freinage ! Vitesse :'. $redCar->break();
echo "<br>";
echo "<br>";
echo "<br>";


$greenCar = new Car('green', 2, 'electric');

var_dump($greenCar);

echo "<br>";
echo "<br>";

echo 'La voiture est de type ' . $greenCar->getEnergy() ."<br>";
echo 'Elle a ' . $greenCar->getNumberSeat() ." sièges<br>";
echo "<br>";

echo ' => Démarrage de la voiture ! Vitesse : '. $greenCar->start() . " km/h<br>";
echo ' => Accélération ! Vitesse :'. $greenCar->forward(). " km/h<br>"; 
echo ' => Freinage ! Vitesse :'. $greenCar->break();
echo "<br>";





