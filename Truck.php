<?php

require_once 'Vehicle.php';
class Truck extends Car
{

    private int $storageCapacity;
    private int $cargo = 0;



    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->setStorageCapacity($storageCapacity);
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(string $storageCapacity): void
    {
        if ($storageCapacity > 0) {
            $this->storageCapacity = $storageCapacity;
        }
        $this->storageCapacity;
    }

    public function getCargo(): int
    {
        return $this->cargo;
    }

    public function setCargo(int $cargo): void
    {
        //// Si on veut ajouter une limite de chargement sans utiliser le if "It's too full !"
        // if ($cargo > $this->storageCapacity) {
        //     $this->cargo = "";
        // }
        $this->cargo = $cargo;
    }

    public function isFull(): string
    {
        if ($this->cargo === $this->storageCapacity) {
            return "Is full !";
        }
        if ($this->cargo > $this->storageCapacity) {
            return "It's too full !";
        }
        return "In filling.";
    }
}
