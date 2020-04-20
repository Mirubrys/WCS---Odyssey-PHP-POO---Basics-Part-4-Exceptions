<?php
require_once "./class/highways/highway.class.php";
/**
 * Final class for motorways witch inherit from HighWay
 * @author Michel-Ange MENDES DOS SANTOS
 */
final class MotorWay extends HighWay{
// Properties
    
// Magic Methods
    /**
     * Construct
     * @param void
     */
    public function __construct()
    {
        parent::__construct(4, 130);
    }

// Methods
    /**
     * Add a vehicule on the motorway
     * @param object $Vehicule
     * @return string $message
     */
    public function addVehicle(object $Vehicle): string{
        if(($Vehicle instanceof Car) || ($Vehicle instanceof Truck)){
            array_push($this->currentVehicles, $Vehicle);
            $message = "Vehicle added on the way.";
        } else{
            $message = "This vehicle is forbidden on this way.";
        }
        return $message;
    }
}