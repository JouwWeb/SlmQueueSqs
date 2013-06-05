<?php

namespace SlmQueueSqs\Factory;

use SlmQueueSqs\Controller\SqsWorkerController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * WorkerFactory
 */
class SqsWorkerControllerFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $worker = $serviceLocator->getServiceLocator()->get('SlmQueueSqs\Worker\SqsWorker');
        return new SqsWorkerController($worker);
    }
}
