<?php

namespace ContainerDOEBcK3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ContactController' shared autowired service.
     *
     * @return \App\Controller\ContactController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ContactController.php';

        $container->services['App\\Controller\\ContactController'] = $instance = new \App\Controller\ContactController(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->privates['App\\MongoDB\\Repository\\ContactRepository'] ?? $container->load('getContactRepositoryService')), ($container->privates['App\\Service\\SendEmailService'] ?? $container->load('getSendEmailServiceService')));

        $instance->setContainer(($container->privates['.service_locator.ZyP9f7K'] ?? $container->load('get_ServiceLocator_ZyP9f7KService'))->withContext('App\\Controller\\ContactController', $container));

        return $instance;
    }
}
