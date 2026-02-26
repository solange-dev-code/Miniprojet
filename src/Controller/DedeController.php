<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DedeController extends AbstractController
{
    #[Route('/dede', name: 'app_dede')]
    public function index(): Response
    {
        return $this->render('dede/index.html.twig', [
            'controller_name' => 'DedeController',
        ]);
    }
}
