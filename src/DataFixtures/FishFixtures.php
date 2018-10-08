<?php

// src/DataFixtures/AppFixtures.php
namespace App\DataFixtures;

use App\Entity\Fish;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class FishFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $fish1 = new Fish();
        $fish1->setName('Robert');
        $fish1->setPrice(mt_rand(10, 100));
        $fish1->setBreed('combattant');
        $fish1->setColor('bleu / rouge / blanc');
        $fish1->setImage('https://cdn-fastly.hometalk.com/media/kvut8hh0t9maodw2vk7251d1febd07d44.jpg?size=786x922&nocrop=1');
        $manager->persist($fish1);

        $fish2 = new Fish();
        $fish2->setName('Bernard');
        $fish2->setPrice(mt_rand(10, 100));
        $fish2->setBreed('silure');
        $fish2->setColor('marron');
        $fish2->setImage('https://media-cdn.tripadvisor.com/media/photo-s/0c/ff/47/a2/un-beau-gros-silure.jpg');
        $manager->persist($fish2);

        $fish3 = new Fish();
        $fish3->setName('Roger');
        $fish3->setPrice(mt_rand(10, 100));
        $fish3->setBreed('Blob Fish');
        $fish3->setColor('rose');
        $fish3->setImage('https://www.aquaportail.com/pictures1307/blobfish-psychrolutes-marcidus.jpg');
        $manager->persist($fish3);

        $fish4 = new Fish();
        $fish4->setName('Bubulle');
        $fish4->setPrice(mt_rand(10, 100));
        $fish4->setBreed('poisson telescope');
        $fish4->setColor('noir');
        $fish4->setImage('https://t1.uc.ltmcdn.com/fr/images/4/2/5/img_comment_soigner_un_poisson_telescope_1524_600.jpg');
        $manager->persist($fish4);

        $fish5 = new Fish();
        $fish5->setName('Nemo');
        $fish5->setPrice(mt_rand(10, 100));
        $fish5->setBreed('poisson clown');
        $fish5->setColor('orange');
        $fish5->setImage('https://images-na.ssl-images-amazon.com/images/I/7198qlxa1fL._SX355_.jpg');
        $manager->persist($fish5);

        $fish6 = new Fish();
        $fish6->setName('Simon');
        $fish6->setPrice(mt_rand(10, 100));
        $fish6->setBreed('saumon');
        $fish6->setColor('gris');
        $fish6->setImage('https://fr.cdn.v5.futura-sciences.com/buildsv6/images/wide1920/e/d/e/ede72a445a_50034363_saumon-mineobskuriteter-flickr-cc-by-nc-sa-20.jpg');
        $manager->persist($fish6);

        $fish7 = new Fish();
        $fish7->setName('Edmon');
        $fish7->setPrice(mt_rand(10, 100));
        $fish7->setBreed('esturgeon');
        $fish7->setColor('gris');
        $fish7->setImage('https://static.aujardin.info/cache/th/img9/acipenser-gueldenstaedtii-600x450.jpg');
        $manager->persist($fish7);

        $fish8 = new Fish();
        $fish8->setName('Illaoi');
        $fish8->setPrice(mt_rand(10, 100));
        $fish8->setBreed('carpe koi');
        $fish8->setColor('red');
        $fish8->setImage('http://foerdefisch-online.de/WebRoot/Store11/Shops/cd9a7961-e99a-4ca2-9803-2ba3afaf32f4/5433/9B14/BC3B/01AD/10DC/0A48/3538/F4FC/954933638103_ml.png');
        $manager->persist($fish8);

        $fish9 = new Fish();
        $fish9->setName('Gob');
        $fish9->setPrice(mt_rand(10, 100));
        $fish9->setBreed('poisson globe');
        $fish9->setColor('marron / jaune');
        $fish9->setImage('https://www.aquaportail.com/aquabdd/photos/tetraodon-biocellatus.jpg');
        $manager->persist($fish9);

        $fish10 = new Fish();
        $fish10->setName('Petasse');
        $fish10->setPrice(mt_rand(10, 100));
        $fish10->setBreed('rascasse');
        $fish10->setColor('marron / orange');
        $fish10->setImage('https://www.aquaportail.com/pictures1208/rascasse-pterois-volitans.jpg');
        $manager->persist($fish10);

        $fish11 = new Fish();
        $fish11->setName('Jade');
        $fish11->setPrice(mt_rand(10, 100));
        $fish11->setBreed('baudroie des abyss');
        $fish11->setColor('marron');
        $fish11->setImage('http://www.axolot.info/wp-content/uploads/2012/07/anglerfish.jpg');
        $manager->persist($fish11);

        $fish12 = new Fish();
        $fish12->setName('Barnabé');
        $fish12->setPrice(mt_rand(10, 100));
        $fish12->setBreed('poisson pané');
        $fish12->setColor('jaune');
        $fish12->setImage('https://www.funeraire-info.fr/wp-content/uploads/2016/04/poisson-pann%C3%A9.jpg');
        $manager->persist($fish12);

        $fish13 = new Fish();
        $fish13->setName('Dory');
        $fish13->setPrice(mt_rand(10, 100));
        $fish13->setBreed('poisson chirurgien');
        $fish13->setColor('bleu');
        $fish13->setImage('https://www.aquarium-st-malo.com/sites/default/files/styles/header_slider/public/slider_image/img_4582-w.jpg?itok=aC36ZAaR');
        $manager->persist($fish13);

        $fish14 = new Fish();
        $fish14->setName('Moon');
        $fish14->setPrice(mt_rand(10, 100));
        $fish14->setBreed('poisson lune');
        $fish14->setColor('blanc');
        $fish14->setImage('https://www.funeraire-info.fr/wp-content/uploads/2016/04/poisson-pann%C3%A9.jpg');
        $manager->persist($fish14);

        $manager->flush();
    }
}