<?php

namespace Container9x3QeSG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSubcategoryControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\SubcategoryController' shared autowired service.
     *
     * @return \App\Controller\SubcategoryController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\SubcategoryController'] = $instance = new \App\Controller\SubcategoryController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\SubcategoryController', $container));

        return $instance;
    }
}
