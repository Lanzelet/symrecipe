<?php

namespace ContainerTLWRuux;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XUrKPVUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xUrKPVU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xUrKPVU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'loader' => ['privates', '.errored..service_locator.xUrKPVU.Symfony\\Component\\Config\\Loader\\LoaderInterface', NULL, 'Cannot autowire service ".service_locator.xUrKPVU": it references interface "Symfony\\Component\\Config\\Loader\\LoaderInterface" but no such service exists. You should maybe alias this interface to one of these existing services: "routing.loader.xml", "routing.loader.yml", "routing.loader.php", "routing.loader.glob", "routing.loader.directory", "routing.loader.container", "routing.loader", "routing.loader.annotation", "routing.loader.annotation.directory", "routing.loader.annotation.file".'],
        ], [
            'loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]);
    }
}
