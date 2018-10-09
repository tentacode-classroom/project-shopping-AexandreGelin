<?php

// src/DataFixtures/AppFixtures.php
namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Fish;
use App\Entity\Tags;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class FishFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $tag1 = new Tags();
        $tag1->setName('beau');
        $manager->persist($tag1);

        $tag2 = new Tags();
        $tag2->setName('moche');
        $manager->persist($tag2);

        $tag3 = new Tags();
        $tag3->setName('mort');
        $manager->persist($tag3);

        $category1 = new Category();
        $category1->setName('combattant');
        $manager->persist($category1);

        $category2 = new Category();
        $category2->setName('silure');
        $manager->persist($category2);

        $category3 = new Category();
        $category3->setName('Blob fish');
        $manager->persist($category3);

        $category4 = new Category();
        $category4->setName('poisson telescope');
        $manager->persist($category4);

        $category5 = new Category();
        $category5->setName('poisson clown');
        $manager->persist($category5);

        $category6 = new Category();
        $category6->setName('saumon');
        $manager->persist($category6);

        $category7 = new Category();
        $category7->setName('esturgeon');
        $manager->persist($category7);

        $category8 = new Category();
        $category8->setName('carpe koi');
        $manager->persist($category8);

        $category9 = new Category();
        $category9->setName('poisson globe');
        $manager->persist($category9);

        $category10 = new Category();
        $category10->setName('rascasse');
        $manager->persist($category10);

        $category11 = new Category();
        $category11->setName('baudroie des abyss');
        $manager->persist($category11);

        $category12 = new Category();
        $category12->setName('poisson pané');
        $manager->persist($category12);

        $category13 = new Category();
        $category13->setName('poisson chirurgien');
        $manager->persist($category13);

        $category14 = new Category();
        $category14->setName('poisson lune');
        $manager->persist($category14);


        $fish1 = new Fish();
        $fish1->setName('Robert');
        $fish1->setPrice(mt_rand(10, 100));
        $fish1->setBreed('combattant');
        $fish1->setColor('bleu / rouge / blanc');
        $fish1->setImage('https://cdn-fastly.hometalk.com/media/kvut8hh0t9maodw2vk7251d1febd07d44.jpg?size=786x922&nocrop=1');
        $fish1->setViewCounter(0);
        $fish1->setCategory($category1);
        $fish1->addTag($tag1);
        $manager->persist($fish1);

        $fish2 = new Fish();
        $fish2->setName('Bernard');
        $fish2->setPrice(mt_rand(10, 100));
        $fish2->setBreed('silure');
        $fish2->setColor('marron');
        $fish2->setImage('https://media-cdn.tripadvisor.com/media/photo-s/0c/ff/47/a2/un-beau-gros-silure.jpg');
        $fish2->setViewCounter(0);
        $fish2->setCategory($category2);
        $fish2->addTag($tag2);
        $manager->persist($fish2);

        $fish3 = new Fish();
        $fish3->setName('Roger');
        $fish3->setPrice(mt_rand(10, 100));
        $fish3->setBreed('Blob Fish');
        $fish3->setColor('rose');
        $fish3->setImage('https://www.aquaportail.com/pictures1307/blobfish-psychrolutes-marcidus.jpg');
        $fish3->setViewCounter(0);
        $fish3->setCategory($category3);
        $fish3->addTag($tag2);
        $manager->persist($fish3);

        $fish4 = new Fish();
        $fish4->setName('Bubulle');
        $fish4->setPrice(mt_rand(10, 100));
        $fish4->setBreed('poisson telescope');
        $fish4->setColor('noir');
        $fish4->setImage('https://t1.uc.ltmcdn.com/fr/images/4/2/5/img_comment_soigner_un_poisson_telescope_1524_600.jpg');
        $fish4->setViewCounter(0);
        $fish4->setCategory($category4);
        $fish4->addTag($tag1);
        $manager->persist($fish4);

        $fish5 = new Fish();
        $fish5->setName('Nemo');
        $fish5->setPrice(mt_rand(10, 100));
        $fish5->setBreed('poisson clown');
        $fish5->setColor('orange');
        $fish5->setImage('https://images-na.ssl-images-amazon.com/images/I/7198qlxa1fL._SX355_.jpg');
        $fish5->setViewCounter(0);
        $fish5->setCategory($category5);
        $fish5->addTag($tag1);
        $manager->persist($fish5);

        $fish6 = new Fish();
        $fish6->setName('Simon');
        $fish6->setPrice(mt_rand(10, 100));
        $fish6->setBreed('saumon');
        $fish6->setColor('gris');
        $fish6->setImage('https://fr.cdn.v5.futura-sciences.com/buildsv6/images/wide1920/e/d/e/ede72a445a_50034363_saumon-mineobskuriteter-flickr-cc-by-nc-sa-20.jpg');
        $fish6->setViewCounter(0);
        $fish6->setCategory($category6);
        $fish6->addTag($tag1);
        $manager->persist($fish6);

        $fish7 = new Fish();
        $fish7->setName('Edmon');
        $fish7->setPrice(mt_rand(10, 100));
        $fish7->setBreed('esturgeon');
        $fish7->setColor('gris');
        $fish7->setImage('https://static.aujardin.info/cache/th/img9/acipenser-gueldenstaedtii-600x450.jpg');
        $fish7->setViewCounter(0);
        $fish7->setCategory($category7);
        $fish7->addTag($tag1);
        $manager->persist($fish7);

        $fish8 = new Fish();
        $fish8->setName('Illaoi');
        $fish8->setPrice(mt_rand(10, 100));
        $fish8->setBreed('carpe koi');
        $fish8->setColor('red');
        $fish8->setImage('http://foerdefisch-online.de/WebRoot/Store11/Shops/cd9a7961-e99a-4ca2-9803-2ba3afaf32f4/5433/9B14/BC3B/01AD/10DC/0A48/3538/F4FC/954933638103_ml.png');
        $fish8->setViewCounter(0);
        $fish8->setCategory($category8);
        $fish8->addTag($tag1);
        $manager->persist($fish8);

        $fish9 = new Fish();
        $fish9->setName('Gob');
        $fish9->setPrice(mt_rand(10, 100));
        $fish9->setBreed('poisson globe');
        $fish9->setColor('marron / jaune');
        $fish9->setImage('https://www.aquaportail.com/aquabdd/photos/tetraodon-biocellatus.jpg');
        $fish9->setViewCounter(0);
        $fish9->setCategory($category9);
        $fish9->addTag($tag1);
        $manager->persist($fish9);

        $fish10 = new Fish();
        $fish10->setName('Petasse');
        $fish10->setPrice(mt_rand(10, 100));
        $fish10->setBreed('rascasse');
        $fish10->setColor('marron / orange');
        $fish10->setImage('https://www.aquaportail.com/pictures1208/rascasse-pterois-volitans.jpg');
        $fish10->setViewCounter(0);
        $fish10->setCategory($category10);
        $fish10->addTag($tag2);
        $manager->persist($fish10);

        $fish11 = new Fish();
        $fish11->setName('Jade');
        $fish11->setPrice(mt_rand(10, 100));
        $fish11->setBreed('baudroie des abyss');
        $fish11->setColor('marron');
        $fish11->setImage('http://www.axolot.info/wp-content/uploads/2012/07/anglerfish.jpg');
        $fish11->setViewCounter(0);
        $fish11->setCategory($category11);
        $fish11->addTag($tag2);
        $manager->persist($fish11);

        $fish12 = new Fish();
        $fish12->setName('Barnabé');
        $fish12->setPrice(mt_rand(10, 100));
        $fish12->setBreed('poisson pané');
        $fish12->setColor('jaune');
        $fish12->setImage('https://www.funeraire-info.fr/wp-content/uploads/2016/04/poisson-pann%C3%A9.jpg');
        $fish12->setViewCounter(0);
        $fish12->setCategory($category12);
        $fish12->addTag($tag3);
        $manager->persist($fish12);

        $fish13 = new Fish();
        $fish13->setName('Dory');
        $fish13->setPrice(mt_rand(10, 100));
        $fish13->setBreed('poisson chirurgien');
        $fish13->setColor('bleu');
        $fish13->setImage('https://www.aquarium-st-malo.com/sites/default/files/styles/header_slider/public/slider_image/img_4582-w.jpg?itok=aC36ZAaR');
        $fish13->setViewCounter(0);
        $fish13->setCategory($category13);
        $fish13->addTag($tag1);
        $manager->persist($fish13);

        $fish14 = new Fish();
        $fish14->setName('Moon');
        $fish14->setPrice(mt_rand(10, 100));
        $fish14->setBreed('poisson lune');
        $fish14->setColor('blanc');
        $fish14->setImage('https://www.funeraire-info.fr/wp-content/uploads/2016/04/poisson-pann%C3%A9.jpg');
        $fish14->setViewCounter(0);
        $fish14->setCategory($category14);
        $fish14->addTag($tag2);
        $manager->persist($fish14);

        $manager->flush();
    }
}