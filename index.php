<?php
require_once "./class/vehicles/bike.class.php";
require_once "./class/vehicles/skateboard.class.php";
require_once "./class/vehicles/car.class.php";
require_once "./class/vehicles/truck.class.php";
require_once "./class/highways/motorway.class.php";
require_once "./class/highways/pedestrianway.class.php";
require_once "./class/highways/residentialway.class.php";

$car = new Car();
$truck = new Truck();
$bike = new Bike();

echo "On allume les phares de la voiture.";
var_dump($car->switchOn());
echo "On les éteints.";
var_dump($car->switchOff());
echo "On allume les phares du camion.";
var_dump($truck->switchOn());
echo "On les éteints.";
var_dump($truck->switchOff());
echo "On essaie d'allumer la lumière du vélo alors qu'il ne roule pas.";
var_dump($bike->switchOn());
echo "On pédale, et on réessaie.";
echo $bike->ride(10);
var_dump($bike->switchOn());
echo "Pas assez vite, on réessaie.";
echo $bike->ride(11);
var_dump($bike->switchOn());
echo "On l'éteint.";
var_dump($bike->switchOff());