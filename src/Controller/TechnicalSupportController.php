<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TechnicalSupportController extends AbstractController
{
    #[Route('/technical-support', name: 'technical-support.index', methods:['GET'])]
    public function index():Response
    {
        return $this->render('technical-support/index.html.twig');
    }
}