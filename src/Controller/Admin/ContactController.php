<?php

namespace App\Controller\Admin;

use Symfony\UX\Turbo\TurboBundle;
use App\MongoDB\Repository\ContactRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/contact')]
class ContactController extends AbstractController
{
    readonly private Request $request;

    public function __construct(readonly private RequestStack $requestStack,readonly private ContactRepository $contactRepository)
    {
        $this->request = $requestStack->getCurrentRequest();
    }

    #[Route('/', 'admin.contact.index')]
    public function index():Response
    {
        return $this->render('admin/contact/index.html.twig', [
            'messages' =>$this->contactRepository->find()
        ]);
    }

    #[Route('/remove/{id}', 'admin.contact.remove')]
    public function remove(string $id):Response
    {
        $message = $this->contactRepository->find([
            '_id' => '$id'
        ]);
        $messageId = $id;

        $this->contactRepository->deleteOne($message);
        
        if($this->request->getPreferredFormat()===TurboBundle::STREAM_FORMAT){
            $this->request->setRequestFormat(TurboBundle::STREAM_FORMAT);
            return $this->render('admin/contact/delete.html.twig', ['messageId'=>$messageId]);
        }


        $this->addFlash('notice', 'Message removed');
        
        return $this->redirectToRoute('admin.contact.index');
    }
}