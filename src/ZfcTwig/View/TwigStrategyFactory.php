<?php

namespace ZfcTwig\View;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use \Interop\Container\ContainerInterface;

class TwigStrategyFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return TwigStrategy
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new $this($serviceLocator->get('ZfcTwigRenderer'));
    }

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null) {
        return new TwigStrategy($container->get('ZfcTwigRenderer'));
    }

}
