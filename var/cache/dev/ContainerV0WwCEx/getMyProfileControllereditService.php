<?php

namespace ContainerV0WwCEx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMyProfileControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.n_LpSm1.App\Controller\Profile\MyProfileController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.n_LpSm1.App\\Controller\\Profile\\MyProfileController::edit()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'userPasswordHasher' => '?',
        ]))->withContext('App\\Controller\\Profile\\MyProfileController::edit()', $container);
    }
}
