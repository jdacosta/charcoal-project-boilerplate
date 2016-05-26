<?php

namespace Boilerplate;

// Dependencies from `pimple`
use \Pimple\Container;

// Dependencies from `charcoal-config`
use \Charcoal\Config\ConfigInterface;

// Dependencies `charcoal-app`
use \Charcoal\App\Template\AbstractTemplate;

/**
 * Base class for all "Boilerplate" templates.
 */
abstract class AbstractBoilerplateTemplate extends AbstractTemplate
{
    /**
     * @var ConfigInterface $translationConfig
     */
    private $translationConfig;

    /**
     * @param Container $container The pimple DI container.
     * @return void
     */
    public function setDependencies(Container $container)
    {
        parent::setDependencies($container);

        // Set required service dependencies here.
        // ex: $this->setModelFactory($container['model/factory']);
        $this->setTranslationConfig($container['translator/config']);
    }

    /**
     * @param ConfigInterface $config The translaction config object (translator).
     * @return BoilerplateTemplate Chainable
     */
    private function setTranslationConfig(ConfigInterface $config)
    {
        $this->translationConfig = $config;
        return $this;
    }

    /**
     * @return ConfigInterface
     */
    protected function translationConfig()
    {
        return $this->translationConfig;
    }

    /**
     * Get the current language code.
     *
     * @return string
     */
    public function lang()
    {
        return $this->translationConfig()->currentLanguage();
    }

    /**
     * @return string
     */
    public function pageTitle()
    {
        return 'Charcoal Project Boilerplate';
    }
}
