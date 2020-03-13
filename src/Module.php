<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Widget;

use Laminas\ModuleManager\Feature\InitProviderInterface;
use Laminas\ModuleManager\ModuleManagerInterface;
use Laminas\Stdlib\ArrayUtils;
use MSBios\Widget\Feature\WidgetProviderInterface;

/**
 * Class Module
 *
 * @package MSBios\Widget
 */
class Module extends \MSBios\Module implements InitProviderInterface
{
    /** @const VERSION */
    const VERSION = '1.0.10';

    /**
     * @inheritDoc
     *
     * @return string
     */
    protected function getDir(): string
    {
        return __DIR__;
    }

    /**
     * @inheritDoc
     *
     * @return string
     */
    protected function getNamespace(): string
    {
        return __NAMESPACE__;
    }

    /**
     * @inheritdoc
     *
     * @return array|\Traversable
     */
    public function getConfig()
    {
        return ArrayUtils::merge(
            parent::getConfig(), [
            'service_manager' => (new ConfigProvider)->getDependencyConfig()
        ]);
    }

    /**
     * @param ModuleManagerInterface $manager
     */
    public function init(ModuleManagerInterface $manager): void
    {
        $event = $manager->getEvent();
        $container = $event->getParam('ServiceManager');
        $serviceListener = $container->get('ServiceListener');

        $serviceListener->addServiceManager(
            'WidgetManager',
            'widget_manager',
            WidgetProviderInterface::class,
            'getWidgetManagerConfig'
        );
    }
}
