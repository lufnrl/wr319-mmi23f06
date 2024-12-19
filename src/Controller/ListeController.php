<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\JeuRepository;

class ListeController extends AbstractController
{
    #[Route('/liste', name: 'app_liste')]
    public function index(JeuRepository $jeuRepository) : response
    {
        $jeux = $jeuRepository->findAll();

        return $this->render('liste/index.html.twig', [
            'jeux' => $jeux,
        ]);
    }
}
