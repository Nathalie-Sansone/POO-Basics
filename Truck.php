<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    private string $energy;
    private int $storage;
    private int $load = 0;
    private $isFull = "";

    public function __construct(string $color, int $nbSeats, string $energy, int $storage)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storage = $storage;
    }


    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     */
    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    /**
     * @return int
     */
    public function getStorage(): int
    {
        return $this->storage;
    }

    /**
     * @param int $storage
     */
    public function setStorage(int $storage): void
    {
        $this->storage = $storage;
    }

    /**
     * @return int
     */
    public function getLoad(): int
    {
        return $this->load;
    }

    /**
     * @param int $load
     */
    public function setLoad(int $load): void
    {
        $this->load = $load;
    }

    public function isFull(): string
    {
        $storage = $this->getStorage();
        $load = $this->getLoad();
        if ($load < $storage) {
           $isFull = 'in filling';
        } elseif ($load == $storage) {
            $isFull = 'full';
        }
        return $isFull;
    }
}