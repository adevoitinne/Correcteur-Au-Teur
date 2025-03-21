<?php

namespace App\Tests\Unit\Twig\Runtime;

use App\Twig\Runtime\AppExtensionRuntime;
use DateTime;
use Error;
use Generator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class AppExtensionRuntimeTest extends TestCase
{
//    Quel test faut-il mieux faire ? Le 1er avec un fournisseur de données et des valeurs trouvées sur un site externe ? Ou le 2ème avec une valeur de timestamp fixe et les instructions identiques à celles du filtre ? Ou les deux ?

    #[DataProvider('getData')]
    public function test_GetDatetime_From_Differents_Valids_Timestamp(DateTime $expected, int $value): void
    {
        // Arrange
        $sut = new AppExtensionRuntime();
        
        // Act
        $actual = $sut->getDatetimeFromTimestamp($value);

        // Assert
        $this->assertEquals($expected, $actual);
    }

    static public function getData():Generator
    {
        // values from https://www.timestamp.fr
        yield [new DateTime("2025-03-17 07:19:48"),1742195988];
        yield [new DateTime("1970-05-24 02:36:24"),12364584];
        yield [new DateTime("2029-01-18 19:12:09"),1863457929];
    }

    
    public function test_GetDatetime_From_Valid_Timestamp(): void
    {
        // Arrange
        $sut = new AppExtensionRuntime();
        $timestamp = 1742282434;
        $expected = (new DateTime()->setTimestamp($timestamp));
        
        // Act
        $actual = $sut->getDatetimeFromTimestamp($timestamp);

        // Assert
        $this->assertEquals($expected, $actual);
    }

   

    public function test_GetDatetimeFromTimestamp_Filter_Returns_Error(): void
    {
        // Assert
        $this->expectException(Error::class);

        // Arrange
        $sut = new AppExtensionRuntime();
        
        // Act
        $actual = $sut->getDatetimeFromTimestamp("a");
        // 
    }
}
