<?php

namespace App\Repository;

use App\Entity\Fish;

class FishRepository
{
    private $fishes;

    public function __construct()
    {
        $fish1 = new Fish();
        $fish1->setId(11);
        $fish1->setName('Roger');


        $fish2 = new Fish();
        $fish2->setId(12);
        $fish2->setName('Bubulle');


        $fish3 = new Fish();
        $fish3->setId(13);
        $fish3->setName('Bloup');


        $this->fishes = [
            $fish1,
            $fish2,
            $fish3,
        ];
    }

    public function findAll(): array
    {
        return $this->fishes;
    }

    public function findOneById(int $id): Fish
    {
        foreach ($this->fishes as $fish) {
            if ($fish->getId() === $id) {
                return $fish;
            }
        }

    }
}