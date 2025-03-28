<?php

namespace ContainerQT12Y9e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMyProfileControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Profile\MyProfileController' shared autowired service.
     *
     * @return \App\Controller\Profile\MyProfileController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Profile/MyProfileController.php';

        $container->services['App\\Controller\\Profile\\MyProfileController'] = $instance = new \App\Controller\Profile\MyProfileController(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));

        $instance->setContainer(($container->privates['.service_locator.ZyP9f7K'] ?? $container->load('get_ServiceLocator_ZyP9f7KService'))->withContext('App\\Controller\\Profile\\MyProfileController', $container));

        return $instance;
    }
}
