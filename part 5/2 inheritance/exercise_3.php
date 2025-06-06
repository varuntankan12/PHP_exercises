<?php


abstract class Vehicle
{
    protected int $numDoors;
    protected string $fuel;
}

class Car extends Vehicle
{
    public int $numSeats = 4;
    public float $roadTax;

    public function __construct(int $doors, float $fuel, float $tax)
    {
        $this->numDoors = $doors;
        $this->fuel = $fuel;
        $this->roadTax = $tax;
    }

    public function __toString(): string
    {
        return "CAR: Total Seats: {$this->numSeats}, Total Doors: {$this->numDoors}, Fuel Capacity: {$this->fuel},Roda Tax: {$this->roadTax}";
    }
}


class Van extends Vehicle
{
    public bool $commercialTax = false;

    public function __construct(int $doors, float $fuel)
    {
        $this->numDoors = $doors;
        $this->fuel = $fuel;
    }

    private function getCommercialStatus()
    {
        return ($this->commercialTax) ? "Yes" : "No";
    }

    public function __toString(): string
    {
        return "VAN: Total Doors: {$this->numDoors}, Fuel Capacity: {$this->fuel},IsComercialTax: {$this->getCommercialStatus()}";
    }
}


$car = new Car(4, 30.5, 548.67);
$van = new Van(4, 30.5);

echo $car . "\n" . $van."\n";
