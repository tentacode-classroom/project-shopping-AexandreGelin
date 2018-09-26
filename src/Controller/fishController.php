<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use App\Repository\fishRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class fishController extends AbstractController
{

    /**
     * @Route("/", name = "homepage")
     */

    public function fish()
    {
        $fishRepository = new fishRepository();
        $fishes = $fishRepository->findAll();


        return $this->render("/home.html.twig", [
            'fishes' => $fishes
        ]);
    }
}