<?php
require_once "./class/highways/highway.class.php";
/**
 * Final class pedestrian witch inherit from HighWay
 * @author Michel-Ange MENDES DOS SANTOS
 */
final class PedestrianWay extends HighWay{
// Properties
    
// Magic Methods
    /**
     * Construct
     * @param void
     */
    public function __construct()
    {
        parent::__construct(1, 10);
    }

// Methods
    /**
     * Add a vehicule on the pedestrianway
     * @param object $Vehicule
     * @return string $message
     */
    public function addVehicle(object $Vehicle): string{
        if(($Vehicle instanceof Bike) || ($Vehicle instanceof Skateboard)){
            array_push($this->currentVehicles, $Vehicle);
            $message = "Vehicle added on the way.";
        } else{
            $message = "This vehicle is forbidden on this way.";
        }
        return $message;
    }
}