<?php

namespace ContainerOkIQS9a;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosJsRouting_SerializerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'fos_js_routing.serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['fos_js_routing.serializer'] = new \Symfony\Component\Serializer\Serializer([0 => new \FOS\JsRoutingBundle\Serializer\Normalizer\RouteCollectionNormalizer(), 1 => new \FOS\JsRoutingBundle\Serializer\Normalizer\RoutesResponseNormalizer(), 2 => new \FOS\JsRoutingBundle\Serializer\Denormalizer\RouteCollectionDenormalizer()], ['json' => new \Symfony\Component\Serializer\Encoder\JsonEncoder()]);
    }
}
