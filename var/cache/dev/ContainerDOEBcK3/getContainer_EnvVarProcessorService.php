<?php

namespace ContainerDOEBcK3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContainer_EnvVarProcessorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'container.env_var_processor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\EnvVarProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarProcessor.php';

        return $container->privates['container.env_var_processor'] = new \Symfony\Component\DependencyInjection\EnvVarProcessor($container, new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['secrets.env_var_loader'] ?? $container->load('getSecrets_EnvVarLoaderService'));
        }, 1));
    }
}
