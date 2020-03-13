<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget\Factory;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Config;
use Laminas\ServiceManager\Factory\FactoryInterface;
use MSBios\Widget\WidgetPluginManager;
use MSBios\Widget\WidgetPluginManagerInterface;

// use Zend\ServiceManager\Config;
// use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class WidgetPluginManagerFactory
 *
 * @package MSBios\Widget\Factory
 */
class WidgetPluginManagerFactory implements FactoryInterface
{
    /**
     * @inheritDoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return WidgetPluginManagerInterface
     */
    public function __invoke(
        ContainerInterface $container,
        $requestedName,
        array $options = null): WidgetPluginManagerInterface
    {
        /** @var WidgetPluginManager $widgetPluginManager */
        $widgetPluginManager = new WidgetPluginManager($container, $options ?: []);

        // If this is in a zend-mvc application, the ServiceListener will inject
        // merged configuration during bootstrap.
        if ($container->has('ServiceListener')) {
            return $widgetPluginManager;
        }

        // If we do not have a config service, nothing more to do
        if (! $container->has('config')) {
            return $widgetPluginManager;
        }

        /** @var array $config */
        $config = $container->get('config');

        // If we do not have filters configuration, nothing more to do
        if (! isset($config['widget_manager']) || ! is_array($config['widget_manager'])) {
            return $widgetPluginManager;
        }

        // Wire service configuration for validators
        (new Config($config['widget_manager']))->configureServiceManager($widgetPluginManager);

        return $widgetPluginManager;
    }
}
