<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use App\Repository\fishRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class fishAlbumController extends AbstractController
{
    /**
     * @Route("/detail/{fishId}", name = "detail")
     */
    public function index(int $fishId)
    {
        $fishRepository = new fishRepository();
        $fish = $fishRepository->findOneById($fishId);

        return $this->render("/detaildetail.html.twig", [
            'fish_id' => $fish
        ]);
    }
}