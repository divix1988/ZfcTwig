<?php

namespace ZfcTwig\Twig;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ExtensionFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new Extension($serviceLocator->get('ZfcTwigRenderer'));
    }
    
    public function __invoke(\Interop\Container\ContainerInterface $container, $requestedName, array $options = null) {
        return $this->createService($container);
    }
}
