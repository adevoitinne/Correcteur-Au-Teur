<?php

namespace App\Controller\Admin;

use App\MongoDB\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/contact')]
class ContactController extends AbstractController
{
    public function __construct(readonly private ContactRepository $contactRepository)
    {
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

        $this->contactRepository->deleteOne($message);
        

        $this->addFlash('notice', 'Message removed');
        
        return $this->redirectToRoute('admin.contact.index');
    }
}