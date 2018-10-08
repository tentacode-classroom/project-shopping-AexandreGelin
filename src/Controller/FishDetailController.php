<?php

namespace App\Controller;

use App\Entity\Fish;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FishDetailController extends AbstractController
{
    /**
     * @Route("/detail/{fishId}", name = "detail")
     */
    public function index(int $fishId)
    {

        $repository = $this->getDoctrine()->getRepository(Fish::class);

        $fish = $repository->find($fishId);

        return $this->render("/detail.html.twig", [
            'fish' => $fish
        ]);
    }
}