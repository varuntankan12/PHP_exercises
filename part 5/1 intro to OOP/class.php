<?php

class Cat
{
    public $name;
    public $breed;
    public $age;
}


class Pet
{
    private string $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($newName)
    {
        $this->name = $newName;
    }
}



class Devices
{
    private int $age;
    private int $houseNumber;
    private string $color;
    private float $length;
    private bool $heavy;

    public function __construct($age = 0, $houseNumber = 0, $color = 'none', $length = 0.1, $heavy = false)
    {
        $this->age = $age;
        $this->houseNumber = $houseNumber;
        $this->color = $color;
        $this->length = $length;
        $this->heavy = $heavy;
    }

    public function getAge()
    {
        return $this->age;
    }
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getLength()
    {
        return $this->length;
    }
    public function getIsHeavy()
    {
        return $this->heavy;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setLength($length)
    {
        $this->length = $length;
    }
    public function setIsHeavy($heavy)
    {
        $this->heavy = $heavy;
    }
}
