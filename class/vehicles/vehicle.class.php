<?php
/**
 * Abstract class for vehicles
 * @author Michel-Ange MENDES DOS SANTOS
 */
abstract class Vehicle {
//Properties
    /**
     * @property string
     */
    protected $color;

    /**
     * @property integer
     */
    protected $currentSpeed = 0;

    /**
     * @property integer
     */
    protected $nbSeats;

    /**
     * @property integer
     */
    protected $nbWheels;

// Magic methods
    /**
     * Constructor
     * @param string $color default 'white'
     * @param int $nbSeats
     * @param int $nbWheels
     */
    public function __construct(
        string $color = 'white',
        int $nbSeats,
        int $nbWheels
    )
    {
        $this->setcolor($color);
        $this->setNbSeats($nbSeats);
        $this->setNbWheels($nbWheels);
    }

// Methods
    /**
     * Set the current speed of the vehicle
     * @param $currentSpeed
     * @return void
     */
    protected function setCurrentSpeed(int $currentSpeed): void{
        if(isset($currentSpeed)){
            $this->currentSpeed = $currentSpeed;
        }
    }
    
    /**
     * Get the current speed of the vehicle
     * @param void
     * @return int $this->currentSpeed
     */
    protected function getCurrentSpeed(): int{
        return $this->currentSpeed;
    }

    /**
     * Set the color of the vehicle
     * @param $color
     * @return void
     */
    protected function setColor(string $color): void{
        if(isset($color)){
            $this->color = $color;
        }
    }

    /**
     * Get the color of the vehicle
     * @param void
     * @return string $this->color
     */
    protected function getColor(): string{
        return $this->color;
    }

    /**
     * Set the number of seats of the vehicle
     * @param $nbSeats
     * @return void
     */
    protected function setNbSeats(int $nbSeats): void{
        $this->nbSeats = $nbSeats;
    }

    /**
     * Get the number of seats of the vehicle
     * @param void
     * @return int $this->NbSeats
     */
    protected function getNbSeats(): int{
        return $this->nbSeats;
    }

    /**
     * Set the number of wheels of the vehicle
     * @param $nbWheels
     * @return void
     */
    protected function setNbWheels(int $nbWheels): void{
        $this->nbWheels = $nbWheels;
    }

    /**
     * Get the number of wheels of the vehicle
     * @param void
     * @return int $this->nbWheels
     */
    protected function getNbWheels(): int{
        return $this->nbWheels;
    }

    /**
     * Make the vehicle go forward
     * @param int $speed
     * @return string $sentence
     */
    protected function forward(int $speed): string{
        $this->setCurrentSpeed($speed);
        $sentence = "On pédale à $speed.";
        return $sentence;
    }

    /**
     * Make the vehicle braking
     * @param void
     * @return string $sentence
     */
    public function brake(): string{
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";}

        $sentence .= "I'm stopped !";
        return $sentence;
    }

    /**
     * Change the wheels of the vehicle
     * @param int $nbWheels
     * @return string
     */
    abstract protected function changeWheels(int $nbWheels): string;

    /**
     * Var dump of the vehicle
     * @param void
     * @return void
     */
    public function dump(){
        var_dump($this);
    }
}