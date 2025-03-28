<?php

namespace ContainerQT12Y9e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationControllerregisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ojgjMmN.App\Controller\RegistrationController::register()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ojgjMmN.App\\Controller\\RegistrationController::register()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'jwt' => ['privates', 'App\\Service\\JWTService', 'getJWTServiceService', true],
            'mail' => ['privates', 'App\\Service\\SendEmailService', 'getSendEmailServiceService', true],
        ], [
            'userPasswordHasher' => '?',
            'entityManager' => '?',
            'jwt' => 'App\\Service\\JWTService',
            'mail' => 'App\\Service\\SendEmailService',
        ]))->withContext('App\\Controller\\RegistrationController::register()', $container);
    }
}
