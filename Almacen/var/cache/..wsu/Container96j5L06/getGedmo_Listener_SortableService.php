<?php

namespace Container96j5L06;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGedmo_Listener_SortableService extends App_KernelProdContainer
{
    /*
     * Gets the private 'gedmo.listener.sortable' shared service.
     *
     * @return \Gedmo\Sortable\SortableListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/src/Mapping/MappedEventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/src/Sortable/SortableListener.php';

        $container->privates['gedmo.listener.sortable'] = $instance = new \Gedmo\Sortable\SortableListener();

        $instance->setAnnotationReader(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()));

        return $instance;
    }
}