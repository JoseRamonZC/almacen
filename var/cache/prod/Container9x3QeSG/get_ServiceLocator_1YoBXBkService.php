<?php

namespace Container9x3QeSG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1YoBXBkService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.1YoBXBk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1YoBXBk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'almacen' => ['privates', '.errored..service_locator.1YoBXBk.App\\Entity\\Almacen', NULL, 'Cannot autowire service ".service_locator.1YoBXBk": it references class "App\\Entity\\Almacen" but no such service exists.'],
            'traslado' => ['privates', '.errored..service_locator.1YoBXBk.App\\Entity\\Traslado', NULL, 'Cannot autowire service ".service_locator.1YoBXBk": it references class "App\\Entity\\Traslado" but no such service exists.'],
            'usuario' => ['privates', '.errored..service_locator.1YoBXBk.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.1YoBXBk": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'almacen' => 'App\\Entity\\Almacen',
            'traslado' => 'App\\Entity\\Traslado',
            'usuario' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}
