<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Widget;

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
    public function __invoke()
    {
        return [
            'dependencies' => $this->getDependencyConfig(),
        ];
    }

    /**
     * Return dependency mappings for this component.
     *
     * @return array
     */
    public function getDependencyConfig()
    {
        return [
            'factories' => [
                'WidgetManager' => WidgetPluginManagerFactory::class,
            ],
        ];
    }
}
