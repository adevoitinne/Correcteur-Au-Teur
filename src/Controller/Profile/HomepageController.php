<?php

namespace App\Controller\Profile;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/profile')]
class HomepageController extends AbstractController
{
   
    #[Route('/', name: 'profile.homepage.index')]
    public function index():Response
    {          
        return $this->render('profile/homepage/index.html.twig');
    }
}