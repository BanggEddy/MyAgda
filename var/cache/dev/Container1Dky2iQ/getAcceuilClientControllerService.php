<?php

namespace Container1Dky2iQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAcceuilClientControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AcceuilClientController' shared autowired service.
     *
     * @return \App\Controller\AcceuilClientController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AcceuilClientController.php';

        $container->services['App\\Controller\\AcceuilClientController'] = $instance = new \App\Controller\AcceuilClientController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\AcceuilClientController', $container));

        return $instance;
    }
}
