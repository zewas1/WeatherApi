<?php

namespace ContainerHQItTYs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTestService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\test' shared autowired service.
     *
     * @return \App\Controller\test
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/test.php';

        return $container->services['App\\Controller\\test'] = new \App\Controller\test();
    }
}
