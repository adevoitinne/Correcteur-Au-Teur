<?php

namespace App\Tests\Unit\Form;

use App\Form\ContactType;
use App\Model\Contact;
use App\Tests\Unit\Form\AbstractTypeTestCase;

class ContactTypeTest extends AbstractTypeTestCase
{
    public function test_Contact_Form_Submitted_With_Valid_Data(): void
    {
        // Arrange
        $data = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'john@doe.com',
            'message' => 'My message'
        ];
        $type = ContactType::class;
        $model = new Contact();

        $form = $this->factory->create($type, $model);

        // object de comparaison
        $object = new Contact();
        $object->setFirstname($data['firstname']);
        $object->setLastname($data['lastname']);
        $object->setEmail($data['email']);
        $object->setMessage($data['message']);

        $expectedNbErrors = 0;

        // Act
        $form->submit($data);

        // Assert
        $this->assertTrue($form->isValid());
        $this->assertTrue($form->isSubmitted());
        $this->assertEquals($expectedNbErrors, $form->getErrors(true)->count());
        $this->assertEquals($model->getFirstname(), $object->getFirstname());
        $this->assertEquals($model->getLastname(), $object->getLastname());
        $this->assertEquals($model->getEmail(), $object->getEmail());
        $this->assertEquals($model->getMessage(), $object->getMessage());
    }
    public function test_Contact_Form_Submitted_With_Invalid_Data(): void
    {
        // Arrange
        $data = [
            'firstname' => 'J',
            'lastname' => 'D',
            'email' => 'john.doe.com',
            'message' => null,
        ];
        $type = ContactType::class;
        $model = new Contact();

        $form = $this->factory->create($type, $model);

        // object de comparaison
        $object = new Contact();
        $object->setFirstname($data['firstname']);
        $object->setLastname($data['lastname']);
        $object->setEmail($data['email']);
        $object->setMessage($data['message']);

        $expectedNbErrors = 4;

        // Act
        $form->submit($data);

        // Assert
        $this->assertFalse($form->isValid());
        $this->assertTrue($form->isSubmitted());
        $this->assertEquals($expectedNbErrors, $form->getErrors(true)->count());
        $this->assertEquals($model->getFirstname(), $object->getFirstname());
        $this->assertEquals($model->getLastname(), $object->getLastname());
        $this->assertEquals($model->getEmail(), $object->getEmail());
        // $this->assertEquals($model->getMessage(), $object->getMessage());
    }

    public function test_Contact_Form_Submitted_With_Empty_Data(): void
    {
        // Arrange
        $data = [
            'firstname' => null,
            'lastname' => null,
            'email' => null,
            'message' => null,
        ];
        $type = ContactType::class;
        $model = new Contact();

        $form = $this->factory->create($type, $model);

        // object de comparaison
        $object = new Contact();
        $object->setFirstname($data['firstname']);
        $object->setLastname($data['lastname']);
        $object->setEmail($data['email']);
        $object->setMessage($data['message']);

        $expectedNbErrors = 4;

        // Act
        $form->submit($data);

        // Assert
        $this->assertFalse($form->isValid());
        $this->assertTrue($form->isSubmitted());
        $this->assertEquals($expectedNbErrors, $form->getErrors(true)->count());
        // $this->assertEquals($model->getFirstname(), $object->getFirstname());
        // $this->assertEquals($model->getLastname(), $object->getLastname());
        // $this->assertEquals($model->getEmail(), $object->getEmail());
        // $this->assertEquals($model->getMessage(), $object->getMessage());

    }

}

