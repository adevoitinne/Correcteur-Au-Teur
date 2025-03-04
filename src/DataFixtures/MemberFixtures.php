<?php

namespace App\DataFixtures;

use App\Entity\Member;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class MemberFixtures extends Fixture
{
    private array $users = [
        [
            'email' => 'admin@admin.fr',
            'password' => 'admin',
            'roles' =>[ 'ROLE_ADMIN']
        ],
        [
            'email' => 'user@user.fr',
            'password' => 'user',
            'roles' => ['ROLE_USER']
        ],
    ];
    
    public function __construct(readonly private UserPasswordHasherInterface $passwordHasher)
    {
    }
    
    public function load(ObjectManager $manager): void
    {
        foreach ($this->users as $user){
            $entity = new Member();
            $entity
                ->setEmail($user['email'])
                ->setPassword(
                    $this->passwordHasher->hashPassword(
                        $entity,
                        $user['password']
                    )
                )
                ->setRoles($user['roles']);
                
                $manager->persist($entity);
        } 
    
        $manager->flush();
    }
}
