<?php

namespace ContainerEzAzC97;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\MongoDB\Repository\ContactRepository' shared autowired service.
     *
     * @return \App\MongoDB\Repository\ContactRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/MongoDB/Repository/CollectionRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/MongoDB/Repository/AbstractCollectionRepository.php';
        include_once \dirname(__DIR__, 4).'/src/MongoDB/Repository/ContactRepository.php';
        include_once \dirname(__DIR__, 4).'/src/MongoDB/MongoDBDatabase.php';

        return $container->privates['App\\MongoDB\\Repository\\ContactRepository'] = new \App\MongoDB\Repository\ContactRepository(new \App\MongoDB\MongoDBDatabase(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
