<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NanaController extends AbstractController
{
    #[Route('/nana', name: 'app_nana')]
    public function index(): Response
    {
        return $this->render('nana/index.html.twig', [
            'controller_name' => 'NanaController',
        ]);
    }
}
