<?php

namespace App\Controller;

use App\MongoDB\MongoDBDatabase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomepageController extends AbstractController
{
    // public function __construct(readonly private MongoDBDatabase $mongoDBDatabase)
    // {
        
    // }

    #[Route('/', name: 'homepage.index', methods:['GET'])]
    public function index():Response
    {          
        // dd($this->mongoDBDatabase->connect());

        return $this->render('homepage/index.html.twig');
    }
}