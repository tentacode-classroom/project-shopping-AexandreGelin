<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class fishAlbumController extends AbstractController
{

    /**
     * @Route("/album/{fishId}", name = "album")
     */

    public function index(int $fishId)
    {
        return $this->render("/album.html.twig", [
            'fish_id' => $fishId
        ]);
    }
}