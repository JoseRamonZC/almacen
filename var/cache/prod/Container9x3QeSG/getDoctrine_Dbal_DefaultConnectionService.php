<?php

namespace Container9x3QeSG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Dbal_DefaultConnectionService extends App_KernelProdContainer
{
    /*
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['url' => $container->getEnv('resolve:DATABASE_URL'), 'driver' => 'pdo_mysql', 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'defaultTableOptions' => []], new \Doctrine\DBAL\Configuration(), new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Gedmo\\Blameable\\BlameableListener' => ['privates', 'Gedmo\\Blameable\\BlameableListener', 'getBlameableListenerService', true],
            'Gedmo\\Loggable\\LoggableListener' => ['privates', 'Gedmo\\Loggable\\LoggableListener', 'getLoggableListenerService', false],
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', true],
            'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber' => ['privates', 'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber', 'getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService', true],
            'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber' => ['privates', 'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber', 'getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService', true],
            'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber' => ['privates', 'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber', 'getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService', true],
            'doctrine.orm.messenger.doctrine_schema_subscriber' => ['privates', 'doctrine.orm.messenger.doctrine_schema_subscriber', 'getDoctrine_Orm_Messenger_DoctrineSchemaSubscriberService', true],
            'gedmo.listener.sluggable' => ['privates', 'gedmo.listener.sluggable', 'getGedmo_Listener_SluggableService', true],
            'gedmo.listener.softdeleteable' => ['privates', 'gedmo.listener.softdeleteable', 'getGedmo_Listener_SoftdeleteableService', true],
            'gedmo.listener.sortable' => ['privates', 'gedmo.listener.sortable', 'getGedmo_Listener_SortableService', true],
            'gedmo.listener.timestampable' => ['privates', 'gedmo.listener.timestampable', 'getGedmo_Listener_TimestampableService', true],
            'gedmo.listener.tree' => ['privates', 'gedmo.listener.tree', 'getGedmo_Listener_TreeService', true],
        ], [
            'Gedmo\\Blameable\\BlameableListener' => '?',
            'Gedmo\\Loggable\\LoggableListener' => '?',
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
            'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber' => '?',
            'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber' => '?',
            'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber' => '?',
            'doctrine.orm.messenger.doctrine_schema_subscriber' => '?',
            'gedmo.listener.sluggable' => '?',
            'gedmo.listener.softdeleteable' => '?',
            'gedmo.listener.sortable' => '?',
            'gedmo.listener.timestampable' => '?',
            'gedmo.listener.tree' => '?',
        ]), [0 => 'gedmo.listener.tree', 1 => 'gedmo.listener.timestampable', 2 => 'gedmo.listener.sluggable', 3 => 'gedmo.listener.sortable', 4 => 'gedmo.listener.softdeleteable', 5 => 'Gedmo\\Loggable\\LoggableListener', 6 => 'Gedmo\\Blameable\\BlameableListener', 7 => 'doctrine.orm.messenger.doctrine_schema_subscriber', 8 => 'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber', 9 => 'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber', 10 => 'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber', 11 => [0 => [0 => 'loadClassMetadata'], 1 => 'doctrine.orm.default_listeners.attach_entity_listeners']]), []);
    }
}
