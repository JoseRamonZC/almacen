<?php

namespace ContainerOkIQS9a;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWarehouseTransferControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\WarehouseTransferController' shared autowired service.
     *
     * @return \App\Controller\WarehouseTransferController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\WarehouseTransferController'] = $instance = new \App\Controller\WarehouseTransferController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\WarehouseTransferController', $container));

        return $instance;
    }
}