<?php

namespace App\Controller\Profile;

use App\Form\EditMyProfileType;
use App\Form\EditMyPasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[Route('/profile/myprofile')]
class MyProfileController extends AbstractController
{
    readonly private Request $request;

    public function __construct(readonly private RequestStack $requestStack, readonly private EntityManagerInterface $entityManager)
    {
        $this->request = $requestStack->getCurrentRequest();
    }
   
    #[Route('/form', name: 'profile.myprofile.form')]
    public function form():Response
    {          
        $type = EditMyProfileType::class;
        $user = $this->getUser();

        $form = $this->createForm($type, $user);

        $form->handleRequest($this->request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $this->entityManager->persist($user);
            
            $this->entityManager->flush();

            $notice = 'Profil mis à jour';
            $this->addFlash('notice', $notice);

            return $this->redirectToRoute('profile.myprofile.form');
        }

        return $this->render('profile/myprofile/form.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/password', name: 'profile.myprofile.password.edit')]
    public function edit(UserPasswordHasherInterface $userPasswordHasher):Response
    {          
    //voir si il faut une condition sur la methode post ?? cf.vidéo

        $user = $this->getUser();
        $type = EditMyPasswordType::class;
 
        $form = $this->createForm($type, $user);

        $form->handleRequest($this->request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $plainPassword = $form->get('plainPassword')->getData();
            
            $user->setPassword(            
                $userPasswordHasher->hashPassword(
                    $user, 
                    $plainPassword)
                );
            // j'ai des erreurs, mais mon formulaire fonctionne.

            $this->entityManager->persist($user);
            
            $this->entityManager->flush();

            $notice = 'Mot de passe mis à jour';
            $this->addFlash('notice', $notice);

            return $this->redirectToRoute('profile.homepage.index');
        }

        return $this->render('profile/myprofile/edit-password.html.twig', [
            'form' => $form,

            
        ]);
    }

}