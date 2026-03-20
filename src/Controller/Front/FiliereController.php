<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FiliereController extends AbstractController
{
    #[Route('/filieres', name: 'filieres_list')]
    public function index(): Response
    {
        return $this->render('front/filiere/index.html.twig', [
            'page_title' => 'Nos Filières – SchoolPrepar',
        ]);
    }

    #[Route('/filieres/{id}', name: 'filiere_show', requirements: ['id' => '\d+'])]
    public function show(int $id): Response
    {
        return $this->render('front/filiere/show.html.twig', [
            'page_title' => 'Détail Filière – SchoolPrepar',
        ]);
    }
}