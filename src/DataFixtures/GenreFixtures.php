<?php

namespace App\DataFixtures;

use App\Entity\Genre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class GenreFixtures extends Fixture
{
    // pour le moment données dans fixtures, CRUD à faire
// Fixtures sans référence 
    public array $genres = [
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
        foreach ($this->genres as $genre){
                    $entity = new Genre();
                    $entity->setName($genre['name']);        
                    $manager->persist($entity);
        } 
            
        $manager->flush();  
            
    }
}
