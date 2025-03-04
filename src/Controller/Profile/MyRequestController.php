<?php

namespace App\Controller\Profile;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


#[Route('/profile/myrequest')]
class MyRequestController extends AbstractController
{
    readonly private Request $request;

    public function __construct(readonly private RequestStack $requestStack, readonly private EntityManagerInterface $entityManager)
    {
        $this->request = $requestStack->getCurrentRequest();
    }
   
    #[Route('/', name: 'profile.myrequest.index')]
    public function index():Response
    {          
        return $this->render('profile/myrequest/index.html.twig'
        // , [
        //     'requests' =>$this->requestRepository->findAll()
        // ]
        );
    }

    #[Route('/form', name: 'profile.myrequest.form')]
    // #[Route('/form/update/{id}', name: 'profile.myrequest.form.update')]
    public function form():Response
    {          
    //     $type = MyRequestType::class;
    //     $model = $id ? $this->requestRepository->find($id) : new MyRequest();

    //     $form = $this->createForm($type, $model);

    //     $form->handleRequest($this->request);

    //     if ($form->isSubmitted() && $form->isValid()) {
            
    //         $id ? null : $this->entityManager->persist($model);
            
    //         $this->entityManager->flush();

    //         $notice = $id ? 'Demande mise à jour' : 'Demande créée';
    //         $this->addFlash('notice', $notice);

    //         return $this->redirectToRoute('profile.myrequest.index');
    //     }

        return $this->render('profile/myrequest/form.html.twig'
        // , [
        //     'form' => $form,
        // ]
    );
    }

    // #[Route('/remove/{id}', name: 'profile.myrequest.remove')]
    // public function remove(int $id = null):Response
    // {          
            // $model = $this->requestRepository->find($id);

            // $this->entityManager->remove($model);
		    // $this->entityManager->flush();

		    // $this->addFlash('notice', 'Demande supprimée');

		    // return $this->redirectToRoute('profile.myrequest.index');

        
    // }

}