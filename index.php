<?php
require_once "./class/vehicles/bike.class.php";
require_once "./class/vehicles/skateboard.class.php";
require_once "./class/vehicles/car.class.php";
require_once "./class/vehicles/truck.class.php";
require_once "./class/highways/motorway.class.php";
require_once "./class/highways/pedestrianway.class.php";
require_once "./class/highways/residentialway.class.php";

$car = new Car();
$car->dump();
try {
    $car->start();
} catch (Exception $trouble){
    $car->setParkBrake();
    echo "Trouble : ". $trouble->getMessage();
} finally {
    echo "</br>Ma voiture roule comme un donut";
}
$car->dump();