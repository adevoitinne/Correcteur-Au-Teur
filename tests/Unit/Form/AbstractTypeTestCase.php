<?php

namespace App\Tests\Unit\Form;

use Override;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Form\Test\TypeTestCase;
use Symfony\Component\Form\Extension\Validator\ValidatorExtension;

class AbstractTypeTestCase extends TypeTestCase
{
    #[Override]
    protected function getExtensions(): array
    {
        $validator = Validation::createValidator();

        $validator = Validation::createValidatorBuilder()
            ->enableAttributeMapping()
            ->getValidator();

        return [
            new ValidatorExtension($validator),
        ];
    }
}