<?php

namespace Admin\Controller\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Admin\Controller\UserController;

class UserControllerFactory implements FactoryInterface
{
    public function __invoke(
        ContainerInterface $container, 
        $requestedName,
        array $options = null
    ) {
        $entityManager = $container->get('doctrine.entitymanager.orm_default');
        
        return new UserController($entityManager);
    }
}
