<?php

namespace App\Controller\Admin;

use App\Repository\MemberRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Turbo\TurboBundle;

#[Route('/admin/member')]
class MemberController extends AbstractController
{
    public function __construct(readonly private MemberRepository $memberRepository, readonly private EntityManagerInterface $entityManager)
    {
    }

    #[Route('/', 'admin.member.index')]
    public function index():Response
    {
        return $this->render('admin/member/index.html.twig', [
            'members' =>$this->memberRepository->findAll()
        ]);
    }

    #[Route('/detail/{id}', 'admin.member.detail')]
    public function detail(int $id):Response
    {
        return $this->render('admin/member/detail.html.twig', [
            'member' =>$this->memberRepository->find($id)
        ]);
    }

    
    #[Route('/remove/{id}', 'admin.member.remove')]
    public function remove(Request $request, int $id):Response
    {
        $member = $this->memberRepository->find($id);
        $memberId = $id;

        $this->entityManager->remove($member);
        $this->entityManager->flush();

        if($request->getPreferredFormat()===TurboBundle::STREAM_FORMAT){
            $request->setRequestFormat(TurboBundle::STREAM_FORMAT);
            return $this->render('admin/member/delete.html.twig', ['memberId'=>$memberId]);
        }

        $this->addFlash('notice', 'Member removed');
        
        return $this->redirectToRoute('admin.member.index');
    }

}