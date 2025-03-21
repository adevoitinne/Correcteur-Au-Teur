<?php

namespace App\Tests\Unit\Model;

use App\Model\Contact;
use PHPUnit\Framework\TestCase;

class ContactTest extends TestCase
{
    public function test_Getters_Setters_Of_Contact_Model(): void
    {
        // Arrange
        $data = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'john@doe.com',
            'message' => 'My message'
        ];

        //Act
        $sut = new Contact();
        $sut->setFirstname($data['firstname']);
        $sut->setLastname($data['lastname']);
        $sut->setEmail($data['email']);
        $sut->setMessage($data['message']);

        // Assert
        $this->assertEquals($sut->getFirstname(), $data['firstname']);
        $this->assertEquals($sut->getLastname(), $data['lastname']);
        $this->assertEquals($sut->getEmail(), $data['email']);
        $this->assertEquals($sut->getMessage(), $data['message']);
    }
}
