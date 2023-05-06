<?php

namespace LinkedDataSets\Infrastructure\Services\Factories;

use Interop\Container\ContainerInterface;
use LinkedDataSets\Controller\Admin\DatasetDatadumpController;
use Zend\ServiceManager\Factory\FactoryInterface;

class DatasetDatadumpControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $services, $requestedName, array $options = null)
    {
        return new DatasetDatadumpController($services->get('LDS\UriHelper'));
    }
}