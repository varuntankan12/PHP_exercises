<?php

final class Spread
{
    protected string $productName;
    protected float $weight;
    public int $shelfLifeMonths = 12;
}

class Jam extends Spread
{
    public int $sweetness = 5; //default

    public function __construct(string $name, float $weight)
    {
        $this->productName = $name;
        $this->weight = $weight;
    }

    public function __toString(): string
    {
        return "JAM: {$this->productName} ({$this->weight}g) keeps for {$this->shelfLifeMonths} months : sweetness {$this->sweetness}";
    }
}

class Honey extends Spread
{
    public bool $isManuka = false; //default

    public function __construct(string $name, float $weight)
    {
        $this->productName = $name;
        $this->weight = $weight;
    }

    public function getManukaStatus()
    {
        return ($this->isManuka) ? "Manuka" : "NOT Manuka";
    }

    public function __toString(): string
    {
        return ("HONEY: {$this->productName} ({$this->weight}g) keeps for {$this->shelfLifeMonths} months ({$this->getManukaStatus()})");
    }
}

$food1 = new Jam("Raspberry Conserve", 45.5);
$food1->shelfLifeMonths = 24;
$food1->sweetness = 5;
echo $food1 . "\n";

$food2 = new Honey("Clear Honey", 90.0);
$food2->shelfLifeMonths = 60;
$food2->isManuka = false;
echo $food2 . "\n";
