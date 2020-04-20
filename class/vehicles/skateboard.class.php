<?php
require_once "./class/vehicles/vehicle.class.php";
/**
 * Final class Skateboard witch inherit from Vehicle
 * @author Michel-Ange MENDES DOS SANTOS
 */
final class Skateboard extends Vehicle{
// Properties

// Magic Methods
    /**
     * Constructor
     * @param string $color default 'white'
     * @param int $nbWheels default 2
     * @param int $nbSeats default 1
     */
    public function __construct(
        string $color = 'white',
        int $nbWheels = 4,
        int $nbSeats = 0
    )
    {
        $this->setColor($color);
        $this->setNbWheels($nbWheels);
        $this->setNbSeats($nbSeats);
    }

//Methods
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
}