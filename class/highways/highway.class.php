<?php
/**
 * Abstract class for highway
 * @author Michel-Ange MENDES DOS SANTOS
 */
abstract class HighWay{
// Properties
    /**
     * Array of vehicles
     * @property array
     */
    protected $currentVehicles = [];

    /**
     * Number of lanes
     * @property int
     */
    protected $nbLane;

    /**
     * Max speed allowed
     * @property int
     */
    protected $maxSpeed;

// Magic Methods
    /**
     * Construct
     * @param int $nbLane default 1
     * @param int $maxSpeed default 50
     */
    protected function __construct(
        int $nbLane,
        int $maxSpeed
    )
    {
        $this->setNbLane($nbLane);
        $this->setMaxSpeed($maxSpeed);
    }

// Methods
    /**
     * Set the number of lanes
     * @param int $nbLane
     * @return void
     */
    protected function setNbLane($nbLane): void{
        if(isset($nbLane) && is_numeric($nbLane)){
            if($nbLane >= 1){
                $this->nbLane = $nbLane;
            }
        }
    }

    /**
     * Get th enumber of lanes
     * @param void
     * @return int $this->nbLane
     */
    protected function getNbLane(): int{
        return $this->nbLane;
    }

    /**
     * Set the maximum speed allowed
     * @param int $maxSpeed
     * @return void
     */
    protected function setMaxSpeed(int $maxSpeed): void{
        if(isset($maxSpeed) && is_numeric($maxSpeed)){
            if($maxSpeed >= 0){
                $this->maxSpeed = $maxSpeed;
            }
        }
    }

    /**
     * Get the maximum speed allowed
     * @param void
     * @return int $this->maxSpeed
     */
    protected function getMaxSpeed(): int{
        return $this->maxSpeed;
    }

    /**
     * Get the current vehicules on the highway
     * @param void
     * @return array $this->curentVehicules
     */
    public function getCurrentVehicles(): array{
        return $this->currentVehicles;
    }

    /**
     * Abstract method to add vehicules on the highway
     * @param object $Vehicule
     * @return string
     */
    abstract protected function addVehicle(object $Vehicle): string;

    /**
     * Var dump of the vehicle
     * @param void
     * @return void
     */
    public function dump(){
        var_dump($this);
    }
}