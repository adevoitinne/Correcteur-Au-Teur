<?php

namespace ContainerV0WwCEx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurityControllerforgottenPasswordService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.eR8LQuU.App\Controller\SecurityController::forgottenPassword()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eR8LQuU.App\\Controller\\SecurityController::forgottenPassword()'] = ($container->privates['.service_locator.eR8LQuU'] ?? $container->load('get_ServiceLocator_ER8LQuUService'))->withContext('App\\Controller\\SecurityController::forgottenPassword()', $container);
    }
}
