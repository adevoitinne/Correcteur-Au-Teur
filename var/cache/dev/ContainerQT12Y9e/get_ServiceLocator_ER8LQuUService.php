<?php

namespace ContainerQT12Y9e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ER8LQuUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.eR8LQuU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eR8LQuU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'jwt' => ['privates', 'App\\Service\\JWTService', 'getJWTServiceService', true],
            'mail' => ['privates', 'App\\Service\\SendEmailService', 'getSendEmailServiceService', true],
        ], [
            'jwt' => 'App\\Service\\JWTService',
            'mail' => 'App\\Service\\SendEmailService',
        ]);
    }
}
