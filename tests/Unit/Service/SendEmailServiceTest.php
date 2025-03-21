<?php

namespace App\Tests\Unit\Service;

use App\Service\SendEmailService;
use PHPUnit\Framework\TestCase;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;

class SendEmailServiceTest extends TestCase
{
    public function test_SendEmail_With_Valid_Data(): void
    {
        // Arrange
        $from = 'test@test.fr';
        $to = 'demo@test.fr';
        $subject = 'something';
        $template = 'template';
        $context = [compact('user', 'url')];
        
        $mockMailerInterface = $this->getMockBuilder(MailerInterface::class)
            ->getMock();
        
        $mockSendEmail = $this->getMockBuilder(SendEmailService::class)
            ->setConstructorArgs([$mockMailerInterface])
            ->getMock();
        
        $mockTemplatedEmail = $this->getMockBuilder(TemplatedEmail::class)  
            ->getMock();

       // je me perds dans les différents mock, cours à reprendre    
       
        
        $email = ($this->$mockTemplatedEmail) 
            ->from($from)    
            ->to($to)
            ->subject($subject)
            ->htmlTemplate("emails/$template.html.twig")
            ->context($context);

        $expected = $this->$mockMailerInterface->send($email);
       
        // Act
        $actual = $this->$mockSendEmail->send($from, $to, $subject, $template, $context);

        // Assert
        $this->assertEquals($expected, $actual);
    }
}

// Ne fonctionne pas :  Error: Object of class MockObject_TemplatedEmail_c5cb6bd2 could not be converted to string