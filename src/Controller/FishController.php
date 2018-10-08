<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use App\Entity\Fish;
use App\Repository\FishRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FishController extends AbstractController
{
    /**
     * @Route("/", name = "homepage")
     */
    public function fish()
    {

        $repository = $this->getDoctrine()->getRepository(Fish::class);

        $fishes = $repository->findBy(
            [],
            ['price' => 'ASC']
        );

        return $this->render("/home.html.twig", [
            'fishes' => $fishes
        ]);
    }
}