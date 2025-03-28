<?php

namespace App\DataFixtures;

use Override;
use App\Entity\Member;
use Random\Randomizer;
use App\DataFixtures\InterestFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class MemberFixtures extends Fixture implements DependentFixtureInterface
{
    #[Override]
	public function getDependencies():array
	{
		return [
			InterestFixtures::class,
		];
	}
    
    private array $users = [
        [
            'email' => 'admin@admin.fr',
            'password' => 'admin',
            'roles' =>[ 'ROLE_ADMIN'],
            'firstname' => 'Jane',
            'lastname' => 'Doe',
            'contact_network' => 'instagram : jane_doe',
            'genres' => ['Thriller']
        ],
        [
            'email' => 'user@user.fr',
            'password' => 'user',
            'roles' => ['ROLE_USER'],
            'firstname' => 'Franck',
            'lastname' => 'Herbert',
            'contact_network' => 'instagram : franck_herbert',
            'genres' => ['Fantasy', 'SF/Anticipation'],
            
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
                ->setGenres($user['genres']);

                // for ($i = 1; $i < (new Randomizer)->getInt(1,3); $i++) {
                //     $entity->addInterest(
                //         $this->getReference("interest$i", InterestFixtures::class)
                //     );
                // }

                $manager->persist($entity);
        } 
    
        $manager->flush();
    }

   
}
