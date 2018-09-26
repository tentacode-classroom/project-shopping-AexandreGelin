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
        $fish1->setColor('pink');
        $fish1->setBreed('blobfish');
        $fish1->setImage('http://media.topito.com/wp-content/uploads/2011/04/poisson_moche_008.jpg');
        $fish1->setPrice(25);


        $fish2 = new Fish();
        $fish2->setId(12);
        $fish2->setName('Bubulle');
        $fish2->setColor('red');
        $fish2->setBreed('poisson clown');
        $fish2->setImage('https://blog.lafermedesanimaux.com/storage/blog/images/Le-poisson-clown.jpg');
        $fish2->setPrice(5);

        $fish3 = new Fish();
        $fish3->setId(13);
        $fish3->setName('Bloup');
        $fish3->setColor('black');
        $fish3->setBreed('poisson téléscope');
        $fish3->setImage('https://http2.mlstatic.com/goldfish-telescopio-ver-descripcion-D_NQ_NP_829133-MPE25626784309_052017-F.jpg');
        $fish3->setPrice(12);


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