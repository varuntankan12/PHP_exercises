<?php


class Jam
{
    public string $productName;
    public float $weight;
    public int $shelfLifeMonths;
    public int $sweetness;

    public function __construct(string $name, float $weight, int $life, int $sweetness)
    {
        $this->productName = $name;
        $this->weight = $weight;
        $this->shelfLifeMonths = $life;
        $this->sweetness = $sweetness;
    }

    public function __toString(): string
    {
        return "JAM: {$this->productName} ({$this->weight}g) keeps for {$this->shelfLifeMonths} months : sweetness {$this->sweetness}";
    }
}

$food1 = new Jam("Raspberry Conserve", 45.5, 24, 5);
echo "$food1\n";
