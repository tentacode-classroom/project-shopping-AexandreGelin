<?php

namespace App\Entity;

class FishOld
{
    private $name;
    private $id;
    private $color;
    private $breed;
    private $image;
    private $price;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setBreed(string $breed)
    {
        $this->breed = $breed;
    }

    public function getBreed()
    {
        return $this->breed;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setPrice(int $price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}