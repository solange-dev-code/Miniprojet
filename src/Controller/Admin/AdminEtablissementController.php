<?php

namespace App\Controller\Admin;

use App\Repository\EtablissementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminEtablissementController extends AbstractController
{
    #[Route('/admin/etablissements', name: 'admin_etablissements_list')]
    public function index(EtablissementRepository $repository): Response
    {
        // On récupère tous les établissements
        $etablissements = $repository->findAll();

        return $this->render('admin/etablissement/index.html.twig', [
            'page_title' => 'Gestion des établissements – Admin',
            'etablissements' => $etablissements,
        ]);
    }
}