<?php

namespace App\DataFixtures;

use App\Entity\Interest;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;



class InterestFixtures extends Fixture
{
// Fixtures sans référence 
    public array $interests = [
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
        ['name' => 'SF/Anticipation']
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

// Essai avec référence  : Reference to "interest1" for class "App\DataFixtures\InterestFixtures" does not exist  
    // public array $interests = [
    //         ['name' => 'Comédie'],
    //         ['name' => 'Drame'],
    //         ['name' => 'Polar'],
    //         ['name' => 'Thriller'],
    //         ['name' =>'Feel Good'],
    //         ['name' => 'Cosy Mystery'],
    //         ['name' => 'Romance'],
    //         ['name' => 'Historique'],
    //         ['name' => '(Auto)biographie'],
    //         ['name' =>'Fantasy'],
    //         ['name' => 'Récit de voyage'],
    //         ['name' => 'Non-fiction'],
    //         ['name' => 'SF/Anticipation']
    //     ];

        
    //     public function load(ObjectManager $manager): void
    //     {
    //         $i=1;
    //         foreach ($this->interests as $interest){
    //             $entity = new Interest();
    //             $entity->setName($interest['name']);
    //             $this->addReference("interest$i", $entity);      
    //             $manager->persist($entity);
    //             $i++;
    //         } 
        
    //         $manager->flush();             
    //     }
    
     public const int TOTAL_CREATED = 13; 

}
