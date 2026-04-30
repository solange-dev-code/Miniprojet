<?php

namespace App\Controller\Admin;

use App\Repository\FiliereRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminFiliereController extends AbstractController
{
    #[Route('/admin/filieres', name: 'admin_filieres_list')]
    public function index(FiliereRepository $repository): Response
    {
        // On récupère toutes les filières en base
        $filieres = $repository->findAll();

        return $this->render('admin/filiere/index.html.twig', [
            'page_title' => 'Gestion des filières – Admin',
            'filieres' => $filieres,
        ]);
    }
}