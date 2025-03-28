<?php

namespace ContainerEzAzC97;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAppExtensionRuntimeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Twig\Runtime\AppExtensionRuntime' shared autowired service.
     *
     * @return \App\Twig\Runtime\AppExtensionRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/RuntimeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Twig/Runtime/AppExtensionRuntime.php';

        return $container->privates['App\\Twig\\Runtime\\AppExtensionRuntime'] = new \App\Twig\Runtime\AppExtensionRuntime();
    }
}
