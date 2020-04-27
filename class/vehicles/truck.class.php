<?php
require_once "./class/lightableInterface.php";
require_once "./class/vehicles/vehicle.class.php";
/**
 * Final class Truck whitch inherit from Vehicle
 * @author Michel-Ange MENDES DOS SANTOS
 */
final class Truck extends Vehicle implements LightableInterface{
// Constants
    const ALLOWED_ENERGIES = ['fuel'];

// Properties
    /**
     * Type if energy of the truck
     * @property string
     */
    private $energy = 'fuel';

    /**
     * Energy level of the truck
     * @property int
     */
    private $energyLevel = 100;

    /**
     * Storage capacity of the truck
     * @property int
     */
    private $storageCapacity;

    /**
     * Current storage level of the truck
     * @property int
     */
    private $currentStorage;

// Interface
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
     * @param string $color
     * @param int $nbSeats
     * @param int $nbWheels
     * @param string $energy
     * @param int $storageCapacity
     * @param int $currentStorage
     */
    public function __construct(
        string $color = 'red',
        int $nbSeats = 2,
        int $nbWheels = 8,
        string $energy = 'fuel',
        int $storageCapacity = 100,
        int $currentStorage = 0
    )
    {
        parent::__construct($color, $nbSeats, $nbWheels);
        $this->setEnergy($energy);
        $this->setStorageCapacity($storageCapacity);
        $this->setCurrentStorage($currentStorage);
    }

// Methods
    /**
     * Set truck energy type
     * @param string $energy
     * @return void
     */
    public function setEnergy(string $energy): void{
        if (in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
    }

    /**
     * Get truck energy type
     * @param void
     * @return string $this->energy
     */
    public function getEnergy(): string{
        return $this->energy;
    }

    /**
     * Set truck energy level
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
     * Get truck energy level
     * @param void
     * @return int $this->EnergyLevel
     */
    public function getEnergyLevel(): int{
        return $this->energyLevel;
    }

    /**
     * Set truck storage capacity
     * @param int $storageCapacity
     * @return void
     */
    public function setStorageCapacity(int $capacity): void{
        $this->storageCapacity = $capacity;
    }

    /**
     * Set truck storage capacity
     * @param void
     * @return int $this->storageCapacity
     */
    public function getStorageCapacity(): int{
        return $this->storageCapacity;
    }

    /**
     * Set truck current storage
     * @param int $goods
     * @return void
     */
    public function setCurrentStorage($goods): void{
        if($goods > $this->storageCapacity){
            $this->currentStorage = $this->storageCapacity;
        } else{
            $this->currentStorage = $goods;
        }
    }

    /**
     * Get truck current storage
     * @param void
     * @return int $this->currentStorage
     */
    public function getCurrentStorage(): int{
        return $this->currentStorage;
    }

    /**
     * Storage state of the truck
     * @param void
     * @return string $state
     */
    public function storageState(): string{
        if($this->currentStorage === $this->storageCapacity){
            $state = 'full';
        } else{
            $state = 'in filling';
        }
        return $state;
    }
    
    /**
     * Change truck wheels
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