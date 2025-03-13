<?php

namespace App\Controller;

use App\Entity\Member;
use App\Form\MemberType;
use App\Service\JWTService;
use App\Service\SendEmailService;
use App\Repository\MemberRepository;
use App\Form\ResetPasswordRequestType;
use App\Form\ResetPasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    readonly private Request $request;

    public function __construct(readonly private RequestStack $requestStack, readonly private MemberRepository $memberRepository, readonly private UserPasswordHasherInterface $passwordHasher)
    {
        $this->request = $requestStack->getCurrentRequest();
    }
        
        
    #[Route('/login', name: 'security.login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('profile.homepage.index');
        // }
        

        $type = MemberType::class;
        $model = new Member();
        
        $form = $this->createForm($type, $model);
        $form->handleRequest($this->request);

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        
        return $this->render('security/login.html.twig', [
            'form' => $form,
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

    #[Route('/logout', name: 'security.logout')]
    public function logout(): void
    {
        // throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route('/forgotten-password', name: 'security.forgotten-password')]
    public function forgottenPassword(JWTService $jwt, SendEmailService $mail):Response 
    {
        $form = $this->createForm(ResetPasswordRequestType::class);

        $form->handleRequest($this->request);

        if($form->isSubmitted() && $form->isValid())
        {
            $user = $this->memberRepository->findOneByEmail($form->get('email')->getData());

            if($user){
                $header = [
                    'typ' => 'JWT',
                    'alg' => 'HS256'
                ];
        
                $payload = [
                    'user_id' => $user->getId()
                ];
        
                $token = $jwt->generate($header, $payload, $this->getParameter('app.jwtsecret'));
                
                $url = $this->generateUrl('security.reset-password', ['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL);

                $mail->send(
                    'no-reply@demo.fr',
                    $user->getEmail(),
                    'Réinitialisation de votre Mot de Passe sur le site Correct-Au-Teur',
                    'password-reset',
                    compact('user', 'url')
                );

                $this->addFlash('notice', "Veuillez cliquer sur le lien reçu dans votre boîte mail pour réinitialiser votre Mot de Passe ");
                return $this->redirectToRoute('security.login');
            }

            $this->addFlash('danger', "Il n'y a pas de profil avec cet email");
            return $this->redirectToRoute('security.login');
        }

        return $this->render('security/reset-password-request.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/reset-password/{token}', name: 'security.reset-password')]
    public function resetPassword(JWTService $jwt, SendEmailService $mail, EntityManagerInterface $em, $token):Response 
    {
        if($jwt->isValid($token) && !$jwt->isExpired($token) && $jwt->check($token, $this->getParameter('app.jwtsecret'))){
            $payload = $jwt->getPayload($token);

            $user = $this->memberRepository->find($payload['user_id']);

            if($user){
                $form = $this->createForm(ResetPasswordType::class);

                $form->handleRequest($this->request);

                if($form->isSubmitted() && $form->isValid())
                {
                    $user->setPassword(
                        $this->passwordHasher->hashPassword($user, $form->get('password')->getData())
                    );

                    $em->flush();

                    $this->addFlash('notice', "Mot de Passe réinitialisé avec succès");
                    return $this->redirectToRoute('security.login');
                }

                return $this->render('security/reset-password.html.twig', [
                    'form'=> $form->createView()
                ]);
             
            }
        }
        $this->addFlash('danger', 'Le lien est invalide ou a expiré');
        return $this->redirectToRoute('security.login');
    }
}
