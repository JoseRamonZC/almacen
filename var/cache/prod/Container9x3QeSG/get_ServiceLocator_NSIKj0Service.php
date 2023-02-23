<?php

namespace Container9x3QeSG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NSIKj0Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.NS_IKj0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NS_IKj0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categoria' => ['privates', '.errored..service_locator.NS_IKj0.App\\Entity\\Categoria', NULL, 'Cannot autowire service ".service_locator.NS_IKj0": it references class "App\\Entity\\Categoria" but no such service exists.'],
        ], [
            'categoria' => 'App\\Entity\\Categoria',
        ]);
    }
}
