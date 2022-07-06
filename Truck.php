<?php

require_once 'Vehicle.php';
class Truck extends Vehicle
{
    private string $energy;
    public int $energyLevel;
    private int $storageCapacity;
    private int $stock = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {

        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function Capacity($stock): String
    
    {
        if ($stock != $this->storageCapacity) {
            $result = "in filling";

        } else {
            $result = "Full";

        }
        return $result;
    }


    public function getStorageCapacity(): int

    {
        return $this->storageCapacity;
    }


    function getStock(): int

    {
        return $this->stock;
    }


    public function getEnergyLevel(): int

    {
        return $this->energyLevel;
    }


    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }


    public function setStock(int $stock): void
    {
        $this->stock = $stock;
    }


    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}
