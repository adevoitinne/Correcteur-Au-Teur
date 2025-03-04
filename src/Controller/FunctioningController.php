<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FunctioningController extends AbstractController
{
    #[Route('/functioning', name: 'functioning.index', methods:['GET'])]
    public function index():Response
    {
        return $this->render('functioning/index.html.twig');
    }
}