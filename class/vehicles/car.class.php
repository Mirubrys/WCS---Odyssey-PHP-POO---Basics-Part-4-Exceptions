<?php
require_once "./class/lightableInterface.php";
require_once "./class/vehicles/vehicle.class.php";
/**
 * Final class Car whitch inherit from Vehicle
 * @author Michel-Ange MENDES DOS SANTOS
 */
final class Car extends Vehicle implements LightableInterface{
// Constants
    const ALLOWED_ENERGIES = ['fuel', 'electric'];
    
// Properties
    /**
     * Energy type of the car
     * @property string
     */
    private $energy;

    /**
     * Energy level of the car
     * @property int
     */
    private $energyLevel = 100;

    /**
     * Park brake
     * @property bool
     */
    private $hasParkBrake = true;

//Interface
    /**
     * Switch on the headlights
     * 
     * @return bool
     */
    public function switchOn(): bool
    {
        return true;
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

// Magic methods
    /**
     * Constructor
     * @param string $color default 'white'
     * @param int $nbSeats default 4
     * @param string $energy default 'fuel'
     * @param int $nbWheels default 4
     */
    public function __construct(
        string $color = 'white',
        int $nbSeats = 4,
        string $energy = 'fuel',
        int $nbWheels = 4
    )
    {
        parent::__construct($color, $nbSeats, $nbWheels);
        $this->setEnergy($energy);
    }

// Methods
    /**
     * Set the energy type of the car
     * @param string $energy
     * @return void
     */
    public function setEnergy(string $energy): void{
        if (in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
    }

    /**
     * Get the energy type of the car
     * @param void
     * @return string $this->energy
     */
    public function getEnergy(): string{
        return $this->energy;
    }

    /**
     * Set the energy level of the car
     * @param int $energyLevel
     * @return void
     */
    public function setEnergyLevel(int $energyLevel): void{
        if($energyLevel > 0){
            if($energyLevel > 100){
                $energyLevel = 100;
            }
        } else{
            $energyLevel = 0;
        }
        
        $this->energyLevel = $energyLevel;
    }

    /**
     * Get the energy level of the car
     * @param void
     * @return int $this->energyLevel
     */
    public function getEnergyLevel(): int{
        return $this->energyLevel;
    }

    /**
     * Set park brake state
     * @param void
     * @return void
     */
    public function setParkBrake(): void{
        if($this->hasParkBrake === true) {
            $this->hasParkBrake = false;
        } else {
            $this->hasParkBrake = true;
        }

    }

    /**
     * Change wheels of the car
     * @param int $nbWheels
     * @return string $sentence
     */
    public function changeWheels(int $nbWheels): string{
        $sentence = '';
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
     * Start the car
     * @param void
     * @return string
     * @throws Exception
     */
    public function start(): string{
        if($this->hasParkBrake){
            throw new Exception("The park brake is engaged !!!!!");
        }
        return "The car is ready to go.";
    }
}