<?php
require_once "./class/highways/highway.class.php";
/**
 * Final class residentialways witch inherit from HighWay
 * @author Michel-Ange MENDES DOS SANTOS
 */
final class ResidentialWay extends HighWay{
// Properties
    
// Magic Methods
    /**
     * Construct
     * @param void
     */
    public function __construct()
    {
        parent::__construct(2, 50);
    }

// Methods
    /**
     * Add a vehicule on the residentialway
     * @param object $Vehicule
     * @return string $message
     */
    public function addVehicle(object $Vehicle): string{
        if($Vehicle instanceof Vehicle){
            array_push($this->currentVehicles, $Vehicle);
            $message = "Vehicle added on the way.";
        } else{
            $message = "This is not a vehicle...";
        }
        return $message;
    }
}