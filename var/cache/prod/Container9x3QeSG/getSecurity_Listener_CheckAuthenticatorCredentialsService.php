<?php

namespace Container9x3QeSG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_CheckAuthenticatorCredentialsService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.listener.check_authenticator_credentials' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\CheckCredentialsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.listener.check_authenticator_credentials'] = new \Symfony\Component\Security\Http\EventListener\CheckCredentialsListener(($container->privates['security.password_hasher_factory'] ?? $container->load('getSecurity_PasswordHasherFactoryService')));
    }
}
