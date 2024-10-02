<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TwigParameterController extends AbstractController
{
    #[Route('/twig/parameter', name: 'app_twig_parameter')]
    public function index(): Response
    {
        return $this->render('twig_parameter/index.html.twig', [
            'controller_name' => 'TwigParameterController',
        ]);
    }
}
