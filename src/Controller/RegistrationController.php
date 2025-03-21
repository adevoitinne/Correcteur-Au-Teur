<?php

namespace App\Controller;

use App\Entity\Member;
use App\Form\RegistrationFormType;
use App\Repository\MemberRepository;
use App\Service\JWTService;
use App\Service\SendEmailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'registration.register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, JWTService $jwt, SendEmailService $mail): Response
    {
        $user = new Member();
        $user->setRoles(['ROLE_USER']);
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var string $plainPassword */
            $plainPassword = $form->get('plainPassword')->getData();

            // encode the plain password
            $user->setPassword($userPasswordHasher->hashPassword($user, $plainPassword));

            $entityManager->persist($user);
            $entityManager->flush();

            // generate token
            $header = [
                'typ' => 'JWT',
                'alg' => 'HS256'
            ];

            $payload = [
                'user_id' => $user->getId()
            ];

            $token = $jwt->generate($header, $payload, $this->getParameter('app.jwtsecret'));

            // send email
            $mail->send(
                'no-reply@demo.fr',
                $user->getEmail(),
                'Activation de votre profil sur le site Correct-Au-Teur',
                'register',
                compact('user', 'token')
            );

            $this->addFlash('notice', 'Utilisateur inscrit, veuillez cliquer sur le lien reçu dans votre boîte mail pour confirmer votre adresse e-mail. Vous pouvez fermer cet onglet.');
            return $this->redirectToRoute('security.login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form,
        ]);
        
    }

    #[Route('/verif/{token}', name: 'registration.verify-user')]
    public function verifUser($token, JWTService $jwt, MemberRepository $member_repository, EntityManagerInterface $em): Response
    {
        if($jwt->isValid($token) && !$jwt->isExpired($token) && $jwt->check($token, $this->getParameter('app.jwtsecret'))){
            $payload = $jwt->getPayload($token);

            $user = $member_repository->find($payload['user_id']);

            if($user && !$user->isVerified()){
                $user->setIsVerified(true);
                $em->flush();

                $this->addFlash('notice', 'Utilisateur activé. Vous pouvez vous connecter :');
                return $this->redirectToRoute('security.login');
            }
        }
        $this->addFlash('danger', 'Le lien est invalide ou a expiré');
        return $this->redirectToRoute('security.login');

    }

    #[Route('/resend-verif', name: 'registration.resend-verif')]
    public function resendVerif(JWTService $jwt, SendEmailService $mail): Response
    {
        // throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
        $user = $this->getUser();

        $header = [
            'typ' => 'JWT',
            'alg' => 'HS256'
        ];

        $payload = [
            'user_id' => $user->getId()
        ];

        $token = $jwt->generate($header, $payload, $this->getParameter('app.jwtsecret'));

        // send email
        $mail->send(
            'no-reply@demo.fr',
            $user->getEmail(),
            'Activation de votre profil sur le site Correct-Au-Teur',
            'register',
            compact('user', 'token')
        );

        $this->addFlash('notice', 'Veuillez cliquer sur le lien reçu dans votre boîte mail pour confirmer votre adresse e-mail');
        return $this->redirectToRoute('profile.homepage.index');
    }
    // j'ai des erreurs mais cela fonctionne
}
