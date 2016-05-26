<?php

namespace Boilerplate\Template;

use \Pimple\Container;

use Boilerplate\AbstractBoilerplateTemplate;

/**
 * Boilerplate Generic Template Controller
 */
class GenericTemplate extends AbstractBoilerplateTemplate
{
    /**
     * @param Container $container The pimple DI container.
     * @return void
     */
    public function setDependencies(Container $container)
    {
        parent::setDependencies($container);

        // Set required service dependencies here.
        // ex: $this->setModelFactory($container['model/factory']);
    }
}