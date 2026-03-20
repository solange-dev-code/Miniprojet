<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminEtablissementController extends AbstractController
{
    #[Route('/admin/etablissements', name: 'admin_etablissements_list')]
    public function index(): Response
    {
        return $this->render('admin/etablissement/index.html.twig', [
            'page_title' => 'Gestion des établissements – Admin',
        ]);
    }
}


