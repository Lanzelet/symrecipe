<?php

namespace ContainerWQ5vI8x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserListener2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EntityListener\userListener' shared autowired service.
     *
     * @return \App\EntityListener\userListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/EntityListener/UserListener.php';

        return $container->privates['App\\EntityListener\\userListener'] = new \App\EntityListener\userListener(($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')));
    }
}
