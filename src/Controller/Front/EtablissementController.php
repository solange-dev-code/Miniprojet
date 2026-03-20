<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class EtablissementController extends AbstractController
{
    #[Route('/etablissements', name: 'etablissements_list')]
    public function index(): Response
    {
        return $this->render('front/etablissement/index.html.twig', [
            'page_title' => 'Établissements – SchoolPrepar',
        ]);
    }
}
