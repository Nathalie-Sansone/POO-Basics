<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    private array $currentVehicles;
    private int $nbLane = 1;
    private int $maxSpeed = 10;

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Bicycle === true || $vehicle instanceof Skateboard === true) {
            $this->setCurrentVehicles($vehicle);
        }
    }

    /**
     * @return array
     */
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    /**
     * @param array $currentVehicles
     */
    public function setCurrentVehicles($vehicle)
    {
        $tornado = [$vehicle];
        $this->currentVehicles[] = $tornado;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    /**
     * @param int $nbLane
     */
    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     */
    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

}