<?php

namespace App\DataFixtures;

use App\Entity\Interest;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class InterestFixtures extends Fixture
{
    private array $interests = [
        ['name' => 'Comédie'],
        ['name' => 'Drame'],
        ['name' => 'Polar'],
        ['name' => 'Thriller'],
        ['name' =>'Feel Good'],
        ['name' => 'Cosy Mystery'],
        ['name' => 'Romance'],
        ['name' => 'Historique'],
        ['name' => '(Auto)biographie'],
        ['name' =>'Fantasy'],
        ['name' => 'Récit de voyage'],
        ['name' => 'Non-fiction'],
    ];
    
     
    
    public function load(ObjectManager $manager): void
    {
        foreach ($this->interests as $interest){
            $entity = new Interest();
            $entity->setName($interest['name']);
                
            $manager->persist($entity);
        } 
    
        $manager->flush();    
        
    }
}
