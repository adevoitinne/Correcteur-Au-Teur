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
            'roles' =>[ 'ROLE_ADMIN'],
            'firstname' => 'Jane',
            'lastname' => 'Doe',
            'contact_network' => 'instagram : jane_doe',
            'genres' => 'Thriller'
        ],
        [
            'email' => 'user@user.fr',
            'password' => 'user',
            'roles' => ['ROLE_USER'],
            'firstname' => 'Franck',
            'lastname' => 'Herbert',
            'contact_network' => 'instagram : franck_herbert',
            'genres' => 'Fantasy, SF/Anticipation'
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
                ->setRoles($user['roles'])
                ->setFirstname($user['firstname'])
                ->setLastname($user['lastname'])
                ->setContactNetwork($user['contact_network'])
                ->setGenres($user['genres'])
            ;
                
                $manager->persist($entity);
        } 
    
        $manager->flush();
    }
}
