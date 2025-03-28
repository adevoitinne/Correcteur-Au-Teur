<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LegalSupportController extends AbstractController
{
    #[Route('/legal-support', name: 'legal-support.index', methods:['GET'])]
    public function index():Response
    {
        return $this->render('legal-support/index.html.twig');
    }
}