<?php

namespace App\Controller\Profile;


use DateTime;
use App\Entity\Offer;
use App\Form\OfferType;
use App\Repository\OfferRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


#[Route('/profile/offer')]
class OfferController extends AbstractController
{
    readonly private Request $request;

    public function __construct( readonly private OfferRepository $offerRepository, readonly private RequestStack $requestStack, readonly private EntityManagerInterface $entityManager)
    {
        $this->request = $requestStack->getCurrentRequest();
    }
   
    #[Route('/', name: 'profile.offer.index')]
    public function index():Response
    {          
        return $this->render('profile/offer/index.html.twig', [
            'offers' =>$this->offerRepository->findAll()
        ]);
    }

    #[Route('/detail/{id}', name: 'profile.offer.detail')]
    public function detail(int $id):Response
    {          
        return $this->render('profile/offer/detail.html.twig',[
            'offer' => $this->offerRepository->find($id)
        ]);
    }
}