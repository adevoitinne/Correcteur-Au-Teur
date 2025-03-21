<?php

namespace ContainerErR77ez;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationControllerverifUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Jk.A8Hx.App\Controller\RegistrationController::verifUser()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Jk.A8Hx.App\\Controller\\RegistrationController::verifUser()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'jwt' => ['privates', 'App\\Service\\JWTService', 'getJWTServiceService', true],
            'member_repository' => ['privates', 'App\\Repository\\MemberRepository', 'getMemberRepositoryService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'jwt' => 'App\\Service\\JWTService',
            'member_repository' => 'App\\Repository\\MemberRepository',
            'em' => '?',
        ]))->withContext('App\\Controller\\RegistrationController::verifUser()', $container);
    }
}
