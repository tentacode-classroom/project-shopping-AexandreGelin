<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use App\Repository\FishRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class fishAlbumController extends AbstractController
{
    /**
     * @Route("/detail/{fishId}", name = "detail")
     */
    public function index(int $fishId)
    {
        $fishRepository = new FishRepository();
        $fish = $fishRepository->findOneById($fishId);

        return $this->render("/detail.html.twig", [
            'fish_id' => $fish
        ]);
    }
}