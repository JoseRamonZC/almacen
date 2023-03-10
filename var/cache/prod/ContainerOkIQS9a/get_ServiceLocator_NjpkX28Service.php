<?php

namespace ContainerOkIQS9a;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NjpkX28Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.NjpkX28' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NjpkX28'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'almacen' => ['privates', '.errored..service_locator.NjpkX28.App\\Entity\\Almacen', NULL, 'Cannot autowire service ".service_locator.NjpkX28": it references class "App\\Entity\\Almacen" but no such service exists.'],
            'almacenProducto' => ['privates', '.errored..service_locator.NjpkX28.App\\Entity\\AlmacenProducto', NULL, 'Cannot autowire service ".service_locator.NjpkX28": it references class "App\\Entity\\AlmacenProducto" but no such service exists.'],
            'usuario' => ['privates', '.errored..service_locator.NjpkX28.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.NjpkX28": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'almacen' => 'App\\Entity\\Almacen',
            'almacenProducto' => 'App\\Entity\\AlmacenProducto',
            'usuario' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}
