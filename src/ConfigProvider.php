<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Widget;

use MSBios\Widget\Factory\PhpRendererFactory;
use MSBios\Widget\Factory\WidgetPluginManagerFactory;

/**
 * Class ConfigProvider
 * @package MSBios\Widget
 */
class ConfigProvider
{
    /**
     * @return array
     */
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencyConfig(),
            'view_helpers' => $this->getViewHelperConfig(),
        ];
    }

    /**
     * Return dependency mappings for this component.
     *
     * @return array
     */
    public function getDependencyConfig(): array
    {
        return [
            'factories' => [
                WidgetWidgetPluginManager::class =>
                    WidgetPluginManagerFactory::class,
                'Widget\PhpRenderer' =>
                    PhpRendererFactory::class,
                'Widget\ViewResolver' =>
                    Factory\AggregateResolverFactory::class,
                'Widget\TemplatePathStack' =>
                    Factory\TemplatePathStackFactory::class,
                'Widget\TemplateMapResolver' =>
                    Factory\TemplateMapResolverFactory::class
            ],
            'aliases' => [
                'WidgetManager' =>
                    WidgetWidgetPluginManager::class
            ]
        ];
    }

    /**
     * @return array
     */
    public function getViewHelperConfig(): array
    {
        return [
            'factories' => [
                View\Helper\WidgetHelper::class =>
                    Factory\WidgetInvokeFactory::class
            ],
            'aliases' => [
                'widget' =>
                    View\Helper\WidgetHelper::class
            ]
        ];
    }
}
