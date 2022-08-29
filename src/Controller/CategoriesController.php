<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoriesController extends AbstractController
{
    #[Route('/categories', name: 'app_categorie')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'CategoriesController',
        ]);
    }
}