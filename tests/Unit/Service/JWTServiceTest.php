<?php

namespace App\Tests\Unit\Service;

use DateTime;
use App\Service\JWTService;
use PHPUnit\Framework\TestCase;

class JWTServiceTest extends TestCase
{
    public function test_JWTService_Generate_Token(): void
    {
        // Arrange
        $sut = new JWTService();      
        $validity = 10800;
       
        $now = new DateTime();
        
        $expiration = $now->getTimestamp() + $validity;
        $iat = $now->getTimestamp();
    
        $header = ['alg'=>'HS256', 'typ'=>'JWT'];
        $payload = [
            // 'sub' => '1234567890',
            // 'name' => 'John Doe',
            // 'admin' => true,
            'id' => 2,
            'iat'=> $iat,
            'exp' => $expiration
        ];
        $secret = 'a-string-secret-at-least-256-bits-long';
      
        $base64Header = base64_encode(json_encode($header));
        $base64Payload = base64_encode(json_encode($payload));

        $base64Header = str_replace(['+', '/', '='], ['-', '_', ''], $base64Header);
        $base64Payload = str_replace(['+', '/', '='], ['-', '_', ''], $base64Payload);

        $secret= base64_encode($secret);

        $signature = hash_hmac('sha256', $base64Header . '.' . $base64Payload, $secret, true);

        $base64Signature = base64_encode($signature);

        $signature = str_replace(['+', '/', '='], ['-', '_', ''], $base64Signature);

        $expected =  $base64Header . '.' . $base64Payload . '.' . $signature;

       

        // Act
        $actual = $sut->generate($header, $payload, $secret, $validity);

        // dump($expected);
        // dump($actual);
        
        // Assert
        $this->assertEquals($expected, $actual);
    
       
    }
// Failed asserting that two strings are equal. A les header et payload sont ok dans l'actual et l'expected, mais le token est différent.

// tests sur autres méthodes à poursuivre
}

