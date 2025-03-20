<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Model\Contact;
use App\MongoDB\Repository\ContactRepository;
use App\Service\SendEmailService;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    readonly private Request $request;

    public function __construct(readonly private RequestStack $requestStack, readonly private ContactRepository $contactRepository, readonly private SendEmailService $mail)
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
            try{
            $model->setDate(new DateTime());         
                        
            $this->contactRepository->insertOne($model);

            $this->mail->send(
                $model->getEmail(),
                'contact@demo.fr',
                'Demande de contact',
                'contact',
                ['model' => $model]
            );

            $notice = 'Votre Email a bien été envoyé. Vous serez contacté rapidement.';
            $this->addFlash('notice', $notice);

            return $this->redirectToRoute('contact.index');
            }catch(\Exception $e){
                $danger = "Votre Email n'a pas pu être envoyé. Essayer à nouveau";
                $this->addFlash('danger', $danger);
            }
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form,
        ]);
    }
}