<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminFiliereController extends AbstractController
{
    #[Route('/admin/filieres', name: 'admin_filieres_list')]
    public function index(): Response
    {
        return $this->render('admin/filiere/index.html.twig', [
            'page_title' => 'Gestion des filières – Admin',
        ]);
    }
}