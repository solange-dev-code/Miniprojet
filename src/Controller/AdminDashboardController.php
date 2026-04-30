<?php

namespace App\Controller;

use App\Repository\FiliereRepository;
use App\Repository\EtablissementRepository;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends AbstractController
{
    #[Route('/admin', name: 'admin_dashboard')]
    public function index(
        FiliereRepository $filiereRepo,
        EtablissementRepository $etablissementRepo,
        UtilisateurRepository $utilisateurRepo
    ): Response {
        return $this->render('admin/dashboard.html.twig', [
            'countFilieres' => $filiereRepo->count([]),
            'countEtablissements' => $etablissementRepo->count([]),
            'countUtilisateurs' => $utilisateurRepo->count([]),
            'countVisites' => 1289,
            'page_title' => 'Dashboard – Administration'
        ]);
    }
}