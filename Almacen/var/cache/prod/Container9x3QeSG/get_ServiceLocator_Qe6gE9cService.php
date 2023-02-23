<?php

namespace Container9x3QeSG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Qe6gE9cService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.qe6gE9c' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qe6gE9c'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'almacen' => ['privates', '.errored..service_locator.qe6gE9c.App\\Entity\\Almacen', NULL, 'Cannot autowire service ".service_locator.qe6gE9c": it references class "App\\Entity\\Almacen" but no such service exists.'],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'usuario' => ['privates', '.errored..service_locator.qe6gE9c.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.qe6gE9c": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'almacen' => 'App\\Entity\\Almacen',
            'paginator' => '?',
            'usuario' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}
