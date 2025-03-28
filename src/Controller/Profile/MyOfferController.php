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


#[Route('/profile/myoffer')]
class MyOfferController extends AbstractController
{
    readonly private Request $request;

    public function __construct( readonly private OfferRepository $offerRepository, readonly private RequestStack $requestStack, readonly private EntityManagerInterface $entityManager)
    {
        $this->request = $requestStack->getCurrentRequest();
    }
   
    #[Route('/', name: 'profile.myoffer.index')]
    public function index():Response
    {          
        $memberId = $this->getUser()->getId();
    
        return $this->render('profile/myoffer/index.html.twig', [
            'offers' =>$this->offerRepository->getOffersByMember($memberId)->getResult()
        ]);
    }

    #[Route('/form', name: 'profile.myoffer.form')]
    #[Route('/form/update/{id}', name: 'profile.myoffer.form.update')]
    public function form(?int $id = null):Response
    {          
        $type = OfferType::class;
        $model = $id ? $this->offerRepository->find($id) : new Offer();

        $form = $this->createForm($type, $model);

        $form->handleRequest($this->request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $model->setMember($this->getUser());
            $model->setCreatedAt(new DateTime()); 
            // A supprimer si la date se met par défaut à current_stamp comme demandé dans l'entité  

            $id ? null : $this->entityManager->persist($model);
            
            $this->entityManager->flush();

            $notice = $id ? 'Demande mise à jour' : 'Demande créée';
            $this->addFlash('notice', $notice);

            return $this->redirectToRoute('profile.myoffer.index');
        }

        return $this->render('profile/myoffer/form.html.twig',[
            'form' => $form,
        ]
    );
    }

    #[Route('/remove/{id}', name: 'profile.myoffer.remove')]
    public function remove(?int $id = null):Response
    {          
            $model = $this->offerRepository->find($id);

            $this->entityManager->remove($model);
		    $this->entityManager->flush();

		    $this->addFlash('notice', 'Demande supprimée');

		    return $this->redirectToRoute('profile.myoffer.index');
        
    }

}