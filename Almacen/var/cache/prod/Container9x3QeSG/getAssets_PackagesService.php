<?php

namespace Container9x3QeSG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssets_PackagesService extends App_KernelProdContainer
{
    /*
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['router.request_context'] ?? $container->getRouter_RequestContextService());

        return $container->privates['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), new \Symfony\Component\Asset\Context\RequestStackContext(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $a->getBaseUrl(), $a->isSecure())), new RewindableGenerator(function () use ($container) {
            return new \EmptyIterator();
        }, 0));
    }
}