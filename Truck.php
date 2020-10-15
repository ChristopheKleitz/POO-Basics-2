<?php

class Truck extends Vehicle {
    /**
     * @var int
     *  */
    private $loadCapacity;

    public function getLoadCapacity(): Truck
    {
        return $this->loadCapacity;
    }

    public function setLoadCapacity(string $loadCapacity): Truck
    {
        if($loadCapacity >= 0){
            $this->loadCapacity = $loadCapacity;
        }
        return $this;
    }

    /**
     * @var int
    */
    private $loading;

    public function getLoading(): Truck
    {
        return $this->loading;
    }

    public function setLoading(string $loading): Truck
    {
        if($loading >= 0){
            $this->loading = $loading;
        }
        return $this;
    }


    /**
     * @var string
     */
    private $energy;

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }


    public function __construct(string $color, int $nbSeats, string $energy, int $loadCapacity)
    {
        $this->loadCapacity = $loadCapacity;
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);

    }

    public function isLoaded(): string
    {
        if($this->loading <= $this->loadCapacity)
        {
            return 'Is filling';
        } 
        return 'Is Full';
    }

}


