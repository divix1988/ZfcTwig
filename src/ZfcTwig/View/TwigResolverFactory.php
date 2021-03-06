<?php

namespace ZfcTwig\View;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class TwigResolverFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new TwigResolver($serviceLocator->get('Twig_Environment'));
    }
    
    public function __invoke(\Interop\Container\ContainerInterface $container, $requestedName, array $options = null) {
        return $this->createService($container);
    }
}
