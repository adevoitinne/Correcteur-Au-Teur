<?php

namespace Container4f2QUmh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMemberTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\MemberType' shared autowired service.
     *
     * @return \App\Form\MemberType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/MemberType.php';

        return $container->privates['App\\Form\\MemberType'] = new \App\Form\MemberType();
    }
}
