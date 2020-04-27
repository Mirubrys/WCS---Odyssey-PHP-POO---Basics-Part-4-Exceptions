<?php 
require_once "./class/lightableInterface.php";
require_once "./class/vehicles/vehicle.class.php";
/**
 * Final class Bike whitch inherit from Vehicle
 * @author Michel-Ange MENDES DOS SANTOS
 */
class Bike extends Vehicle implements LightableInterface{
// Properties

// Construct
    /**
     * Constructor
     * @param string $color default 'white'
     * @param int $nbWheels default 2
     * @param int $nbSeats default 1
     */
    public function __construct(
        string $color = 'white',
        int $nbWheels = 2,
        int $nbSeats = 1
    )
    {
        $this->setColor($color);
        $this->setNbWheels($nbWheels);
        $this->setNbSeats($nbSeats);
    }

// Interface
    /**
     * Switch on the headlights if current speed > 10km/h
     * 
     * @return bool
     */
    public function switchOn(): bool
    {
        if($this->getCurrentSpeed() > 10)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Switch off the headlights
     * 
     * @return bool
     */
    public function switchOff(): bool
    {
        return false;
    }

// Methods
    /**
     * Change wheels of the bike
     * @param int $nbWheels
     * @return string $sentence
     */
    public function changeWheels(int $nbWheels): string{
        if($nbWheels > 0 && $nbWheels <= $this->nbWheels){
            for($i=1; $i<=$nbWheels; $i++){
                $sentence .= "wheel {$i} changed.\n";
            }
        } else {
            $sentence = "The number of wheels to change is incorrect.";
        }
        return $sentence;
    }

    /**
     * Ride the bike at defined speed
     * 
     * @param int $speed
     * 
     * @return string
     */
    public function ride(int $speed): string
    {
        return $this->forward($speed);
    }
}