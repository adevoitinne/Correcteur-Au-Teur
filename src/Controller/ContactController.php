<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Model\Contact;
use App\MongoDB\Repository\ContactRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    readonly private Request $request;

    public function __construct(readonly private RequestStack $requestStack, readonly private ContactRepository $contactRepository)
    {
        $this->request = $requestStack->getCurrentRequest();
    }

    #[Route('/contact', name: 'contact.index')]
    public function index():Response
    {
        $type = ContactType::class;
        $model = new Contact;
        $form = $this->createForm($type, $model);
        $form->handleRequest($this->request);

        if($form->isSubmitted() && $form->isValid())
        {
            $model->setDate(new DateTime());         
                        
            $this->contactRepository->insertOne($model);

            $notice = 'Vous serez contacté rapidement.';
            $this->addFlash('notice', $notice);

            return $this->redirectToRoute('contact.index');
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form,
        ]);
    }
}