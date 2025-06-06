<?php

namespace myProduct;

class Product
{
    private int $id;
    private string $description;
    private float $price;

    public function __construct(int $a, string $b, float $c)
    {
        $this->id = $a;
        $this->description = $b;
        $this->price = $c;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }
    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }
    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
    }
}

class Second
{
    public $name = 'aman';
}
