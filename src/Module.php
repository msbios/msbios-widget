<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Widget;

use MSBios\ModuleInterface;
use MSBios\Widget\Feature\WidgetProviderInterface;
use Zend\Loader\AutoloaderFactory;
use Zend\Loader\StandardAutoloader;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\InitProviderInterface;
use Zend\ModuleManager\ModuleManagerInterface;
use Zend\Stdlib\ArrayUtils;

/**
 * Class Module
 * @package MSBios\Widget
 */
class Module implements
    ModuleInterface,
    AutoloaderProviderInterface,
    InitProviderInterface
{
    /** @const VERSION */
    const VERSION = '1.0.9';

    /**
     * @inheritdoc
     *
     * @return array|\Traversable
     */
    public function getConfig()
    {
        return ArrayUtils::merge(
            include __DIR__ . '/../config/module.config.php',
            [
                'service_manager' => (new ConfigProvider)->getDependencyConfig()
            ]
        );
    }

    /**
     * @inheritdoc
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return [
            AutoloaderFactory::STANDARD_AUTOLOADER => [
                StandardAutoloader::LOAD_NS => [
                    __NAMESPACE__ => __DIR__,
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     *
     * @param ModuleManagerInterface $manager
     */
    public function init(ModuleManagerInterface $manager)
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
